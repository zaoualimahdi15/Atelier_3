<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

 class AuthorController extends AbstractController
 {
     #[Route('/author', name: 'app_author')]
     public function index(): Response
     {
         return $this->render('author/list.html.twig', [
             'controller_name' => 'AuthorController',
         ]);
     }

     #[Route("/author/{name}", name: "author_list")]
     public function author_list(): void
     {
         $authors = [
             [
                 'id' => 1,
                 'picture' => '/images/Victor-Hugo.jpg',
                 'username' => 'Victor Hugo',
                 'email' => 'victor.hugo@gmail.com',
                 'nb_books' => 100,
             ],
             [
                 'id' => 2,
                 'picture' => '/images/william-shakespeare.jpg',
                 'username' => 'William Shakespeare',
                 'email' => 'william.shakespeare@gmail.com',
                 'nb_books' => 200,
             ],
             [
                 'id' => 3,
                 'picture' => '/images/Taha_Hussein.jpg',
                 'username' => 'Taha Hussein',
                 'email' => 'taha.hussein@gmail.com',
                 'nb_books' => 300,
             ],
         ];
         if (empty($authors)) {
             $authors = [];
         }
     }

     #[Route("/author/details/{id}", name: "author_details")]
     public function authorDetails($id, $authors)
     {
         $author = null;
         return $this->render('author/showAuthor.html.twig', ['author' => $author]);

     }

 }

