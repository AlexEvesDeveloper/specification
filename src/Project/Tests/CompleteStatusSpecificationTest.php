<?php

namespace Project\Tests;


use Project\Classes\CompleteStatusSpecification;
use Project\Classes\Reference;

class CompleteStatusSpecificationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function is_satisified_when_status_is_complete()
    {
        $reference = new Reference();
        $reference->setStatus('complete');
        $specification = new CompleteStatusSpecification();

        $this->assertTrue($specification->isSatisfiedBy($reference));
    }

    /**
     * @test
     */
    public function is_not_satisified_when_status_is_not_complete()
    {
        $reference = new Reference();
        $reference->setStatus('pending');
        $specification = new CompleteStatusSpecification();

        $this->assertFalse($specification->isSatisfiedBy($reference));
    }
}