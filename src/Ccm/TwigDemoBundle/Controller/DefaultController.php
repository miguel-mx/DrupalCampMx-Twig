<?php

namespace Ccm\TwigDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('CcmTwigDemoBundle:Default:index.html.twig');
    }

    /**
     * @Route("/variables", name="variables")
     * @Template()
     */
    public function variablesAction()
    {
        // Arreglo con participantes
        $participantes = array(
                            "Nate Haug",
                            "Jen Lampton",
                            "Juampy Novillo Requena",
                            "enzo - Eduardo Garcia",
                            "Ryan Weaver",
        );

        return $this->render(
            'CcmTwigDemoBundle:Default:variables.html.twig',
            array('participantes' => $participantes)
        );
    }

    /**
     * @Route("/herencia", name="herencia")
     */
    public function herenciaAction()
    {
        return $this->render('CcmTwigDemoBundle:Default:herencia.html.twig');
    }

    /**
     * @Route("/control", name="control")
     */
    public function controlAction(Request $request)
    {
        // Se construye un formulario sin utilizar una clase
        $defaultData = array('cadena' => 'Escribe una cadena');
        $form = $this->createFormBuilder($defaultData)
            ->add('Cadena', 'text')
            ->add('Enviar', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            // data is an array
            $data = $form->getData();

            $cadena = $data['Cadena'];

            return $this->render('CcmTwigDemoBundle:Default:control.html.twig', array(
            'form' => $form->createView(), 'cadena' => $cadena));
        }

        $cadena = "Test";

        return $this->render('CcmTwigDemoBundle:Default:control.html.twig', array(
            'form' => $form->createView(), 'cadena' => $cadena));
    }

    /**
     * @Route("/incluye", name="incluye")
     */
    public function incluyeAction()
    {
        return $this->render('CcmTwigDemoBundle:Default:incluye.html.twig');
    }



}

