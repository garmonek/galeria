<?php
/**
 * Admin type.
 */

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class AdminType
 * @package App\Form
 */
class AdminType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder Builder
     * @param array $options Options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'label_email',
                'required' => false,
                'attr' => [
                    'max_length' => 128,
                    ]
            ])
            ->add('confirm', PasswordType::class)
            ->add('plainPassword', RepeatedType::class, array(
                'type'              => PasswordType::class,
                'mapped'            => false,
                'required'          => true,
                'first_options'     => array('label' => 'New password'),
                'second_options'    => array('label' => 'Confirm new password'),
                'invalid_message'   => 'The password fields must match.',
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver Resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'allow_extra_fields' => true,
            'data_class' => User::class,
        ]);
    }
}
