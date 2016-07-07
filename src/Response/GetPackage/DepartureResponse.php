<?php
namespace ShiptorRussiaApiClient\Client\Response\GetPackage;

use ShiptorRussiaApiClient\Client\Response\AbstractResponse;
use ShiptorRussiaApiClient\Client\Response\AddPackage\AddressResponse;
use ShiptorRussiaApiClient\Client\Response\DeliveryPoint\DeliveryPointResponse;
use ShiptorRussiaApiClient\Client\Response\ShippingMethod\ShippingMethodResponse;

class DepartureResponse extends AbstractResponse
{
    /**
     * @return ShippingMethodResponse
     */
    public function getMethod()
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
        return new DeliveryPointResponse(array('result' => $this->data['delivery_point']));
    }
}