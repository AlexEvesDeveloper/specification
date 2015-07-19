<?php

namespace Project\Tests;


use Project\Classes\Reference;
use Project\Classes\RentShareSpecification;

class RentShareSpecificationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function is_satisified_when_rent_share_is_correct()
    {
        $reference = new Reference();
        $reference->setRentShare(500);
        $specification = new RentShareSpecification();

        $this->assertTrue($specification->isSatisfiedBy($reference));
    }

    /**
     * @test
     */
    public function is_not_satisified_when_rent_share_is_incorrect()
    {
        $reference = new Reference();
        $reference->setRentShare(501);
        $specification = new RentShareSpecification();

        $this->assertFalse($specification->isSatisfiedBy($reference));
    }
}