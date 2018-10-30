<?php

 namespace E2N\candidateBundle\Controller;

 use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//chemin vers l'entité (table)
 use E2N\candidateBundle\Entity\user;
 use E2N\candidateBundle\Form\userType;
 //fichiers servant à la création du formulaire
// use Symfony\Component\Form\Extension\Core\Type\FormType;
// use Symfony\Component\Form\Extension\Core\Type\SubmitType;
// use Symfony\Component\Form\Extension\Core\Type\TextareaType;
// use Symfony\Component\Form\Extension\Core\Type\TextType;
// use Symfony\Component\Form\Extension\Core\Type\IntegerType;
// use Symfony\Component\Form\Extension\Core\Type\EmailType;

 class addCandidatController extends Controller {

     public function addCandidatAction()
     {
//         $user = new user();
//         //préparation de la création du formulaire
//         $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $user);
//         //création du formulaire
//         $formBuilder
//                 //->add('nom de l'attribut des entités
//                 ->add('lastname', TextType::class)
//                 ->add('firstname', TextType::class)
//                 ->add('mail', EmailType::class)
//                 ->add('motivation', TextareaType::class)
//                 ->add('palme', IntegerType::class)
//                 ->add('submit', SubmitType::class);
//         //on génère le formulaire
//         $form = $formBuilder->getForm();
         $user = new user();
         $form = $this->get('form.factory')->create(userType::class, $user);
         return $this->render('@E2Ncandidate/addCandidat/add_candidat.html.twig', 
                 array('formView' => $form->createView()
         ));
     }

 }
 