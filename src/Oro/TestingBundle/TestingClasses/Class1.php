<?php

namespace Oro\TestingBundle\TestingClasses;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Validator\Constraints\Form;

class Class1
{
    /**
     * Class1 constructor.
     * @param \Twig_Environment $twig
     * @param \DOMNamedNodeMap $map
     * @param IntegerType $type
     * @internal param ParamConverter $paramConverter
     */
    public function __construct(
        \Twig_Environment $twig,
        \DOMNamedNodeMap $map,
        IntegerType $type
    ) {

    }

    public function getType1(RegistryInterface $integerType)
    {

    }
    public function getType2(Form $form)
    {

    }
}
