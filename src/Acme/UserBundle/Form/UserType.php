<?php
namespace Acme\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class UserType extends AbstractType {
  
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('username',"text", array('required' => true))
                ->add("email", "text", array('required' => true))
                ->add('password', 'repeated', array(
    'type' => 'password',
    'invalid_message' => 'The password fields must match.',
    'options' => array('attr' => array('class' => 'password-field')),
    'required' => true,
    'first_options'  => array('label' => 'Password'),
    'second_options' => array('label' => 'Repeat Password'),
));
        //        ->add('password', 'repeated', array('type' => 'password', 'invalid_message' => 'Passwords do not match'));
                //->add("cpassword", "password", array('required' => true));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver){
        $resolver->setDefaults(array(
            'data_class' => 'Acme\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName(){
        return 'user';
    }
}