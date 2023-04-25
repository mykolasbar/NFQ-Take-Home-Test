<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DeleteArticleController extends AbstractController
{
    #[Route('/delete/{id}', methods: ['GET', 'DELETE'], name: 'delete_article')]
    public function deleteArticle(ArticleRepository $articleRepository, $id, EntityManagerInterface $em): Response
    {
        $article = $articleRepository->find($id);
        $em->remove($article);
        $em->flush();
        return $this->redirectToRoute('home');
    }
}
