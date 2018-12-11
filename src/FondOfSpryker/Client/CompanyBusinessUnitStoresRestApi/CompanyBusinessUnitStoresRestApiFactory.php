<?php

namespace FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi;

use FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi\Zed\CompanyBusinessUnitStoresRestApiStub;
use FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi\Zed\CompanyBusinessUnitStoresRestApiStubInterface;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class CompanyBusinessUnitStoresRestApiFactory extends AbstractFactory
{
    /**
     * @return \FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi\Zed\CompanyBusinessUnitStoresRestApiStubInterface
     */
    public function createZedCompanyBusinessUnitStoresRestApiStub(): CompanyBusinessUnitStoresRestApiStubInterface
    {
        return new CompanyBusinessUnitStoresRestApiStub($this->getZedRequestClient());
    }

    /**
     * @return \Spryker\Client\ZedRequest\ZedRequestClientInterface
     */
    protected function getZedRequestClient(): ZedRequestClientInterface
    {
        return $this->getProvidedDependency(CompanyBusinessUnitStoresRestApiDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
