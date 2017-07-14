<?php

namespace AppBundle\Controller;

use AppBundle\Entity\customers;
use AppBundle\Form\CustomersType;
use AppBundle\Form\ShippedtoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
		
		// create a task and give it some dummy data for this example
        $customers = new customers();
		
		$form = $this->createFormBuilder($customers)
            ->add('firstName', TextType::class, array('required' => false))
			->add('lastName', TextType::class)
			->add('address1', TextType::class)
			->add('address2', TextType::class)
			->add('city', TextType::class)
			->add('state', TextType::class)
			->add('zip', TextType::class)
			->add('emailAddress', TextType::class)
			->add('contactNo', TextType::class)
			->add('isShipping', CheckboxType::class)
			
			->add('ccType', ChoiceType::class, array(
    			'choices'  => array(
					'Visa' => 'Visa',
					'Amex' => 'Amex',
					'MasterCard' => 'MasterCard',
    			)))
			->add('ccHolderName', TextType::class)
			->add('ccExpMM', ChoiceType::class , array('mapped' => false,
    			'choices'  => array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'4' => '4',
					'5' => '5',
					'6' => '6',
					'7' => '7',
					'8' => '8',
					'9' => '9',
					'10' => '10',
					'11' => '11',
					'12' => '12',
    			)))
				->add('ccExpYY', ChoiceType::class , array('mapped' => false,
    			'choices'  => array(
					'17' => '2017',
					'18' => '2018',
					'19' => '2019',
					'20' => '2020',
					'21' => '2021',
					'22' => '2023',
					'24' => '2024',
					'25' => '2025',
				)))
			->add('ccNo', TextType::class)
			->add('ccCvv2', TextType::class)
			
			
			->add('save', SubmitType::class, array('label' => 'Submit Order'))
			->getForm();       
		
		
		$form->handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid()) {
            // ... maybe do some form processing, like saving the Task and Tag objects
						
			$customers = $form->getData();
			$IntccExpMM = $form->get('ccExpMM')->getData();
			$IntccExpYY = $form->get('ccExpYY')->getData();
			print_r($customers); die;
        }
		else
		{
			 //die('stop');
		}
		
		return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
		));
		  // replace this example code with whatever you need
        //return $this->render('default/index.html.twig', array('base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
    }
	
	/**
     * @Route("/multifrm", name="multi_frm")
     */
    public function multifrmAction(Request $request)
    {
		$customers = new customers();
				
		$form = $this->createForm(CustomersType::class);
		
		$form->handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid()) {
            // ... maybe do some form processing, like saving the Task and Tag objects
						
			$customers = $form->getData();
			$IntccExpMM = $form->get('ccExpMM')->getData();
			$IntccExpYY = $form->get('ccExpYY')->getData();
			print_r($customers); //die;
        }
		
		return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
			));
	}
}
