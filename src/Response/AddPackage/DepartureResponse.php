<?php
namespace ShiptorRussiaApiClient\Client\Response\AddPackage;

use ShiptorRussiaApiClient\Client\Response\AbstractResponse;
use ShiptorRussiaApiClient\Client\Response\ShippingMethod\ShippingMethodResponse;

class DepartureResponse extends AbstractResponse
{
    /**
     * @return ShippingMethodResponse
     */
    public function getShippingMethod()
    {
        return new ShippingMethodResponse(array('result' => $this->data['shipping_method']));
    }

    /**
     * @return AddressResponse
     */
    public function getAddress()
    {
        return new AddressResponse(array('result' => $this->data['address']));
    }

    /**
     * @return string
     */
    public function getDeliveryPoint()
    {
        return $this->data['delivery_point'];
    }
}