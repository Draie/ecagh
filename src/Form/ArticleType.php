<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('picture_1',  FileType::class,[
                
                'label' => 'Image de couverture (image file)',

                // unmapped means that this field is not associated to any entity property
                'mapped' => true,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '5000k',
                        'extensions' => [
                            'jpg','png','jpeg'
                        ],
                        'mimeTypesMessage' => 'Please upload a valid photo document',
                    ])
                    ],
                    'data_class' => null,
            ])


            ->add('picture_2',  FileType::class,[
                'label' => 'Deuxieme image (image file)',

                // unmapped means that this field is not associated to any entity property
                'mapped' => true,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '5000k',
                        'extensions' => [
                            'jpg','png','jpeg'
                        ],
                 
                        'mimeTypesMessage' => 'Please upload a valid photo document',
                    ])
                    
                    ],
                    'data_class' => null,
            ])
            ->add('picture_3',  FileType::class, [
                'label' => '3eme image (image file)',
                
                // unmapped means that this field is not associated to any entity property
                'mapped' => true,
                'required' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
             
                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '5000k',
                        'extensions' => [
                            'jpg','png','jpeg'
                        ],
                        'mimeTypesMessage' => 'Please upload a valid photo document',
                    ])
                    ],
                    'data_class' => null,
            ])
          
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
