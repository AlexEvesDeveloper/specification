<?php

namespace Project\Classes;

class RentShareSpecification extends AbstractSpecification
{
    public function isSatisfiedBy(Reference $reference)
    {
        if ( $reference->getRentShare() <= 500) {
            return true;
        }

        return false;
    }
}