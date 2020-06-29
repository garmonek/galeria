<?php
/**
 * Comment type.
 */

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CommentType
 * @package App\Form
 */
class CommentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder Builder
     * @param array                $options Options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('content', TextareaType::class, [
                'label' => 'label_content',
                'required' => true,
                'attr' => [
                    'max_length' => 1000,
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'label_email',
                'required' => true,
                'attr' => [
                    'max_length' => 128,
                ]
            ])
            ->add('nick', TextType::class, [
                'label' => 'label_nick',
                'required' => true,
                'attr' => [
                    'max_length' => 64,
                ]
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver Resolver
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
