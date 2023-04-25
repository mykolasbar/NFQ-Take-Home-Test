<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ReadTime;

class IndexController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function list(ArticleRepository $articleRepository, ReadTime $readtime)
    {
        $allArticles = $articleRepository->findAll();

        forEach($allArticles as $article) {
            $article->readingtime = $readtime->getReadTime($article->getText());
        }

        // usort($allArticles, fn($a, $b) => 
        //     $a->getUpdatedAt() < $b->getUpdatedAt()
        // );

        usort($allArticles, function($a, $b) {
            if ($a->getUpdatedAt() == $b->getUpdatedAt()) {
              return 0;
            }
            return $a->getUpdatedAt() > $b->getUpdatedAt() ? -1 : 1;
        });

        return $this->render('pages/index.html.twig', [
            'articles' => $allArticles
        ]);
    }
}
  