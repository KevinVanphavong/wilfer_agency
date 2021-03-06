<?php

namespace App\Form;

use App\Entity\Entertainement;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntertainementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Type d\'évènement',
                'attr' => ['class' => 'input']
            ])
            ->add('description', CKEditorType::class)
            ->add('entertainementImages', FileType::class, [
                'multiple' => true,
                'required' => false,
                'mapped' => false,
                'label' => 'Ajouter des images',
                'attr' => ['class' => 'input']
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Entertainement::class,
        ]);
    }
}
