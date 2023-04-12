<?php

namespace App\Controller;

use App\Entity\Article;
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
            'form' => $form, 'article' => $article,
        ]);
    }

    // #[Route('/'_partials/article-card.html', name: 'article_view')]
    public function renderPartial(Article $article, Readtime $readtime): Response
    {
        return $this->render('_partials/article-card.html.twig', [
            'article' => $article, 'readtime' => $readtime->getReadTime($article->getText())
        ]);
    }

}
