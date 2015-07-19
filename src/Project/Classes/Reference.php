<?php

namespace Project\Classes;

class Reference
{
    protected $price;
    private $status;
    private $rentShare;
    private $isCouple;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getRentShare()
    {
        return $this->rentShare;
    }

    /**
     * @param mixed $rentShare
     */
    public function setRentShare($rentShare)
    {
        $this->rentShare = $rentShare;
    }

    /**
     * @return mixed
     */
    public function getIsCouple()
    {
        return $this->isCouple;
    }

    /**
     * @param mixed $isCouple
     */
    public function setIsCouple($isCouple)
    {
        $this->isCouple = $isCouple;
    }
}