<?php

namespace Project\Classes;

class PolicySpecification extends AbstractSpecification
{

    public function isSatisfiedBy(Reference $reference)
    {
        $status = new CompleteStatusSpecification();
        $rentShare = new RentShareSpecification();
        $couple = new CoupleSpecification();

        return $status->plus($rentShare)->plus($couple)->isSatisfiedBy($reference);
    }
}