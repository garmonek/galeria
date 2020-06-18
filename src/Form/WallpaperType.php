<?php
/**
 * Wallpaper type.
 */

namespace App\Form;

use App\Entity\Category;
use App\Entity\Wallpaper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;

/**
 * Class WallpaperType.
 */
class WallpaperType extends AbstractType
{
    /**
     * Builds the form.
     *
     * This method is called for each type in the hierarchy starting from the
     * top most type. Type extensions can further modify the form.
     *
     * @param \Symfony\Component\Form\FormBuilderInterface $builder The form builder
     * @param array $options The options
     * @see FormTypeExtensionInterface::buildForm()
     *
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('file', FileType::class, [
                'mapped' => false,
                'label' => 'label_wallpaper',
                'required' => is_null($builder->getData()->getId()),
                'constraints' => new Image(
                    [
                        'maxSize' => '8196k',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpeg',
                            'image/pjpeg',
                            'image/jpeg',
                            'image/pjpeg',
                        ],
                        'mimeTypesMessage' => 'Unsupported Image File',
                    ]
                ),
            ])
            ->add('title', TextType::class, [
                'label' => 'label_title',
                'required' => true,
                'attr' => ['max_length' => 64],
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'label' => 'label_category',
                'placeholder' => 'choose_category',
                'required' => true,
                'choice_label' => function ($category) {
                    return $category->getTitle();
                }
            ])
            ->add('description', TextareaType::class, [
                'label' => 'label_description',
                'required' => false,
            ]);
    }

    /**
     * Configures the options for this type.
     *
     * @param \Symfony\Component\OptionsResolver\OptionsResolver $resolver The resolver for the options
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => Wallpaper::class]);
    }

    /**
     * Returns the prefix of the template block name for this type.
     *
     * The block prefix defaults to the underscored short class name with
     * the "Type" suffix removed (e.g. "UserProfileType" => "user_profile").
     *
     * @return string The prefix of the template block name
     */
    public function getBlockPrefix(): string
    {
        return 'wallpaper';
    }
}
