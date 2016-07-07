<?php
namespace ShiptorRussiaApiClient\Client\Response\CalculateShipping;

use ShiptorRussiaApiClient\Client\Response\AbstractResponse;

class CostResponse extends AbstractResponse
{
    /**
     * @var ServiceResponse[]
     */
    private $services;
    public function __construct($data)
    {
        parent::__construct($data);
        foreach ($this->data['services'] as $service) {
            $this->services[] = new ServiceResponse(array('result' => $service));
        }
    }

    /**
     * @return ServiceResponse[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @return TotalResponse
     */
    public function getTotal()
    {
        return new TotalResponse(array('result' => $this->data['total']));
    }
}