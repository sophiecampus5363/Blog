<?php


namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;





class HomeController extends AbstractController
{
    /**
     * @param PostRepository $postRepository
     * @return Response
     * @Route ("/index")
     */

    public function index(PostRepository $postRepository): Response
    {
        return $this->render('post/index.html.twig', [
            'posts' => $postRepository->findAll()
    ]);
    }






}