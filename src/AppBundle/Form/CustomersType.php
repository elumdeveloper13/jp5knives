<?php

// src/AppBundle/Form/CustomersType.php
namespace AppBundle\Form;

use AppBundle\Entity\customers;
use Symfony\Component\Form\AbstractType;
use AppBundle\Form\ShippedtoType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Validator\Constraints\Valid;


class CustomersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class)
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
			;
			
			$builder->add('shippedto', ShippedtoType::class, array(
    			'constraints' => array(new Valid())));	//For Cacading Validation of multiple Entity
			
    }
	
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => customers::class,
		));
		
	}
}
?>