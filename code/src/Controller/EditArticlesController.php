<?php

namespace App\Controller;

use DateTime;
use App\Entity\Article;
use App\Form\Type\ArticleType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EditArticlesController extends AbstractController
{
    #[Route('/editarticle/{id}', name: 'editarticle_view')]
    public function editArticle(Article $article, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // /** @var Article $article */
            // $data = $form->getData();

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

}
