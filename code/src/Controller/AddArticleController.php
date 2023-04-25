<?php

namespace App\Controller;

use App\Form\Type\ArticleType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AddArticleController extends AbstractController
{
    #[Route('/addarticle', name: 'addarticle')]
    public function addArticle(Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ArticleType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // /** @var Article $article */
            $data = $form->getData();
            
            $em->persist($data);
            $em->flush();

            return $this->redirectToRoute('home');
        }

        return $this->renderForm('forms/editarticle.html.twig', [
            'form' => $form, 'header' => 'Add new article'
        ]);
    }
}
