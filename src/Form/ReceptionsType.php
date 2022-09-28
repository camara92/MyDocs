<?php

namespace App\Form;

use App\Entity\Receptions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReceptionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date')
            ->add('productName')
            ->add('temperature')
            ->add('etatemballage')
            ->add('numerolot')
            ->add('dlcdluo')
            ->add('conformity_etiquetage')
            ->add('conformite_reception_yn')
            ->add('observations')
            ->add('numero_bliv')
            ->add('visalivreur')
            ->add('visareceptionnaire')


            ->add('submit', SubmitType::class, 
            [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'btn btn-success btn-block w-100 p-2 mt-2'
                ]
            ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Receptions::class,
        ]);
    }
}
