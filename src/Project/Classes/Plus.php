<?php

namespace Project\Classes;

class Plus extends AbstractSpecification
{
    /**
     * @var AbstractSpecification
     */
    private $left;
    /**
     * @var AbstractSpecification
     */
    private $right;

    public function __construct(AbstractSpecification $left, AbstractSpecification $right)
    {

        $this->left = $left;
        $this->right = $right;
    }

    public function isSatisfiedBy(Reference $reference)
    {
        $left = $this->left->isSatisfiedBy($reference);
        $right = $this->right->isSatisfiedBy($reference);

        return $left && $right;
    }
}