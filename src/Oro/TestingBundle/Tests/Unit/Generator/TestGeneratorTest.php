<?php

namespace Oro\TestingBundle\Tests\Unit\Generator;

use Symfony\Component\HttpKernel\KernelInterface;

use Oro\TestingBundle\Generator\TestGenerator;

class TestGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Twig_Environment|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $twig;

    /**
     * @var KernelInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $kernelInterface;

    /**
     * @var TestGenerator
     */
    protected $testGenerator;

    protected function setUp()
    {
        $this->twig = $this->getMockBuilder('\Twig_Environment')
            ->disableOriginalConstructor()
            ->getMock();

        $this->kernelInterface = $this->getMock('Symfony\Component\HttpKernel\KernelInterface');

        $this->testGenerator = new TestGenerator($this->twig, $this->kernelInterface);
    }

    public function testGenerate()
    {
        /** @var |\PHPUnit_Framework_MockObject_MockObject $className **/
        $className = '';
        /** @var |\PHPUnit_Framework_MockObject_MockObject $testType **/
        $testType = '';
        $this->testGenerator->generate($className, $testType);
    }
}
