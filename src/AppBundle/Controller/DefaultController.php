<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        $categories = $this->getDoctrine()->getRepository("AppBundle:Category")->findAll();
        $lastBooks = $this->getDoctrine()->getRepository("AppBundle:Book")->findLast(3);
        $topUsers = $this->getDoctrine()->getRepository("AppBundle:User")->topUsers(6);

        return $this->render('default/index.html.twig', [
                    "categories" => $categories,
                    "lastBooks" => $lastBooks,
                    "topUsers" => $topUsers,
        ]);

    }

    /**
     * @Route("/book/{slug}", name="show_book")
     */
    public function showBookAction(\AppBundle\Entity\Book $book) {
        $randBook =  $this->getDoctrine()->getRepository("AppBundle:Book")->suggestBook($book->getId());
        shuffle($randBook);
        $randBook = array_slice($randBook, 0, 2);

        return $this->render('book/show.html.twig', [
                    "book" => $book,
                    'randBook' => $randBook,
        ]);
    }

    /**
     * @Route("/category/{id}", name="show_category")
     */
    public function showCategoryAction(\AppBundle\Entity\Category $category) {
        return $this->render('category/show.html.twig', [
                    "category" => $category
        ]);
    }

}
