<?php

namespace Project\Tests;


use Project\Classes\PolicySpecification;
use Project\Classes\Reference;

class SpecificationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function simple_specification()
    {
        $reference = new Reference();
        $reference->setStatus('complete');
        $reference->setRentShare(500);
        $reference->setIsCouple(true);
        $specification = new PolicySpecification();

        $this->assertTrue($specification->isSatisfiedBy($reference));
    }
}