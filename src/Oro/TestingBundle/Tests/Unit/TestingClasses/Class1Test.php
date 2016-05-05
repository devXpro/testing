<?php

namespace Oro\TestingBundle\Tests\Unit\TestingClasses;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Form\Extension\Validator\Constraints\Form;

use Oro\TestingBundle\TestingClasses\Class1;

class Class1Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Twig_Environment|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $twig;

    /**
     * @var \DOMNamedNodeMap|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $map;

    /**
     * @var IntegerType|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $type;

    /**
     * @var Class1
     */
    protected $class1;

    protected function setUp()
    {
        $this->twig = $this->getMockBuilder('\Twig_Environment')
            ->disableOriginalConstructor()
            ->getMock();
        $this->map = $this->getMock('\DOMNamedNodeMap');
        $this->type = $this->getMock('Symfony\Component\Form\Extension\Core\Type\IntegerType');
        $this->class1 = new Class1($this->twig, $this->map, $this->type);
    }

    public function testGetType1()
    {
        /** @var RegistryInterface|\PHPUnit_Framework_MockObject_MockObject $integerType **/
        $integerType = $this->getMock('Symfony\Bridge\Doctrine\RegistryInterface');

        $this->class1->getType1($integerType);
    }

    public function testGetType2()
    {
        /** @var Form|\PHPUnit_Framework_MockObject_MockObject $form **/
        $form = $this->getMockBuilder('Symfony\Component\Form\Extension\Validator\Constraints\Form')
            ->disableOriginalConstructor()
            ->getMock();

        $this->class1->getType2($form);
    }
}
