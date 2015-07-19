<?php

namespace Project\Classes;

class CoupleSpecification extends AbstractSpecification
{
    public function isSatisfiedBy(Reference $reference)
    {
        if ( $reference->getIsCouple() == true) {
            return true;
        }

        return false;
    }
}