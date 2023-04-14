<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use App\Form\Type\ArticleType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\ReadTime;
use DateTime;

class ViewController extends AbstractController
{

    #[Route('/addarticle', name: 'addarticle')]
    public function addArticle(Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ArticleType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Article $article */
            $data = $form->getData();
            
            $em->persist($data);
            $em->flush();

            return $this->redirectToRoute('home');
        }

        return $this->renderForm('forms/editarticle.html.twig', [
            'form' => $form, 'header' => 'Add new article'
        ]);
    }

    #[Route('/article/{id}', name: 'article_view')]
    public function view(Article $article, Readtime $readtime): Response
    {
        return $this->render('pages/view.html.twig', [
            'article' => $article, 'readtime' => $readtime->getReadTime($article->getText())
        ]);
    }

    #[Route('/editarticle/{id}', name: 'editarticle_view')]
    public function editArticle(Article $article, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Article $article */
            $data = $form->getData();

            $date = new DateTime();

            $article->setUpdatedAt($date);
            
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article_view', [
                'id' => $article->getId(),
            ]);
        }

        return $this->renderForm('forms/editarticle.html.twig', [
            'form' => $form, 'header' => 'Edit article', 'article' => $article,
        ]);
    }

    #[Route('/delete/{id}', methods: ['GET', 'DELETE'], name: 'delete_article')]
    public function deleteArticle(ArticleRepository $articleRepository, $id, EntityManagerInterface $em): Response
    {
        $article = $articleRepository->find($id);
        $em->remove($article);
        $em->flush();
        return $this->redirectToRoute('home');
    }

}
