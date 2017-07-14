<?php

namespace AppBundle\Form;

use AppBundle\Entity\shippedto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ShippedtoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sFname', TextType::class)
			->add('sLname', TextType::class)
			->add('sAddress1', TextType::class)
			->add('sAddress2', TextType::class)
			->add('sCity', TextType::class)
			->add('sState', TextType::class)
			->add('sPostalcode', TextType::class)
			;
    }
	
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => shippedto::class,
		));
	}
}
?>