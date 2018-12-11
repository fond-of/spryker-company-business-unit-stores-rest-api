<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi;

use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores\CompanyBusinessUnitStoresReader;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores\CompanyBusinessUnitStoresReaderInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores\CompanyBusinessUnitStoresWriter;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores\CompanyBusinessUnitStoresWriterInterface;
use Spryker\Glue\Kernel\AbstractFactory;
use Spryker\Yves\Kernel\ClientResolverAwareTrait;

/**
 * @method \FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiClientInterface getClient()
 */
class CompanyBusinessUnitStoresRestApiFactory extends AbstractFactory
{
    use ClientResolverAwareTrait;

    /**
     * @return \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores\CompanyBusinessUnitStoresReaderInterface
     */
    public function createCompanyBusinessUnitStoresReader(): CompanyBusinessUnitStoresReaderInterface
    {
        return new CompanyBusinessUnitStoresReader($this->getResourceBuilder(), $this->getClient());
    }

    /**
     * @return \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores\CompanyBusinessUnitStoresWriterInterface
     */
    public function createCompanyBusinessUnitStoresWriter(): CompanyBusinessUnitStoresWriterInterface
    {
        return new CompanyBusinessUnitStoresWriter($this->getResourceBuilder(), $this->getClient());
    }
}
