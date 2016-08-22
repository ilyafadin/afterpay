<?php

namespace CultureKings\Afterpay\Model;


/**
 * Class Configuration
 * @package CultureKings\Afterpay\Model
 */
class Configuration
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var Money
     */
    protected $minimumAmount;
    /**
     * @var Money
     */
    protected $maximumAmount;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return Money
     */
    public function getMinimumAmount()
    {
        return $this->minimumAmount;
    }

    /**
     * @return Money
     */
    public function getMaximumAmount()
    {
        return $this->maximumAmount;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param Money $minimumAmount
     * @return $this
     */
    public function setMinimumAmount(Money $minimumAmount)
    {
        $this->minimumAmount = $minimumAmount;
        return $this;
    }

    /**
     * @param Money $maximumAmount
     * @return $this
     */
    public function setMaximumAmount(Money $maximumAmount)
    {
        $this->maximumAmount = $maximumAmount;
        return $this;
    }
}