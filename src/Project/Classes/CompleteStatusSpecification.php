<?php

namespace Project\Classes;

class CompleteStatusSpecification extends AbstractSpecification
{
    public function isSatisfiedBy(Reference $reference)
    {
        if ( $reference->getStatus() == 'complete') {
            return true;
        }

        return false;
    }
}