<?php

namespace E2N\candidateBundle\Controller;

use E2N\candidateBundle\Entity\user;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class viewController extends Controller {

    public function indexViewAction(Request $request)
    {
        $user = new user();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $user);
        $formBuilder
                ->add('lastname', TextType::class, array('label' => 'Nom'))
                ->add('firstname', TextType::class, array('label' => 'Prénom'))
                ->add('mail', EmailType::class, array('label' => 'Adresse e-mail'))
                ->add('motivation', TextareaType::class, array('label' => 'Motivations'))
                ->add('palme', IntegerType::class, array('label' => 'Palmes'))
                ->add('submit', SubmitType::class, array('label' => 'Enregistrer'));
        $form = $formBuilder->getForm();
        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return new Response('effectué');
        }

        return $this->render('@E2Ncandidate/Default/newView.html.twig', array('formView' => $form->createView(),));
    }

}
