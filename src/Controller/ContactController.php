<?php

namespace App\Controller;

use App\Form\Contact1Type;
use App\Form\Contact2Type;
use App\Model\Contact1;
use App\Model\Contact2;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class ContactController
{
    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    /**
     * @var Environment
     */
    private $twig;

    public function __construct(FormFactoryInterface $formFactory, Environment $twig)
    {
        $this->formFactory = $formFactory;
        $this->twig = $twig;
    }

    public function contact1Action(Request $request)
    {
        $form = $this->formFactory->create(Contact1Type::class, new Contact1());
        $form->handleRequest($request);

        return new Response($this->twig->render('contact1.html.twig', [
            'form' => $form->createView(),
        ]));
    }

    public function contact2Action(Request $request)
    {
        $form = $this->formFactory->create(Contact2Type::class, new Contact2());
        $form->handleRequest($request);

        return new Response($this->twig->render('contact2.html.twig', [
            'form' => $form->createView()
        ]));
    }
}
