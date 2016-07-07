<?php
namespace ShiptorRussiaApiClient\Client\Response\CalculateShipping;

use ShiptorRussiaApiClient\Client\Response\AbstractResponse;

class MethodListResponse extends AbstractResponse
{
    /**
     * @return MethodResponse
     */
    public function getMethod()
    {
        return new MethodResponse(array('result' => $this->data['method']));
    }

    /**
     * @return CostResponse
     */
    public function getCost()
    {
        return new CostResponse(array('result' => $this->data['cost']));
    }

    /**
     * @return string
     */
    public function getDays()
    {
        return $this->data['days'];
    }
}