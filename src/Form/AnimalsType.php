<?php

namespace App\Form;

use App\Entity\Animals;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use App\Entity\Image;


class AnimalsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('missing', CheckboxType::class, [
                'label' => 'Disparu'
            ])
            ->add('found', CheckboxType::class, [
                'label' => 'Trouvé'
            ])
            ->add('name', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('race')
            ->add('sexe')
            ->add('color', TextType::class, [
                'label' => 'Couleur'
            ])
            ->add('microship', CheckboxType::class, [
                'label' => 'Puce electronique'
            ])
            ->add('sterelise', CheckboxType::class, [
                'label' => 'Stérélisé'
            ])
            ->add('description')
            ->add('particularity', TextareaType::class, [
                'label' => 'Particularité'
            ])
            ->add('address',TextType::class, [
                'label' => 'Adresse'
            ] )
            ->add('postcode', IntegerType::class, [
                'label' => 'Code Postal'
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville'
            ])
            ->add('date')
            ->add('animal_found', CheckboxType::class, [
                'label' => 'Animal retrouvé'
            ])
            ->add('image', ImageType::class)
            ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Animals::class,
        ]);
    }
}
