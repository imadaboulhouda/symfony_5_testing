<?php
namespace App\Form\Type;

use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskType extends AbstractType
{
    function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("name",TextType::class)
        ->add('description',TextareaType::class)
        ->add('Valider',SubmitType::class);
    }
}