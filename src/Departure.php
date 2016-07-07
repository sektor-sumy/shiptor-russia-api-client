<?php
namespace ShiptorRussiaApiClient\Client;

class Departure
{
    /**
     * @var array
     */
    protected $data;
    public function __construct($data) {
        $this->data = $data;
    }
    /**
     * @return int
     */
    public function getShippingMethod()
    {
        return $this->data['shipping_method'];
    }

    /**
     * @return int|null
     */
    public function getDeliveryPoint()
    {
        return isset($this->data['delivery_point']) ? $this->data['delivery_point'] : null;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return new Address($this->data['address']);
    }
}