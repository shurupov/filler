<?php


namespace Filler\Controller;


use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MicroController extends AbstractController
{
    /**
     * @Route("/random/{limit}")
     * @throws Exception
     */
    public function randomNumber($limit)
    {
        $number = random_int(0, $limit);

        return $this->render('random.html.twig', [
            'number' => $number,
        ]);
    }
}