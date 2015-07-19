<?php

namespace Project\Classes;

abstract class AbstractSpecification
{
    abstract public function isSatisfiedBy(Reference $reference);

    public function plus(AbstractSpecification $spec)
    {
        return new Plus($this, $spec);
    }
}