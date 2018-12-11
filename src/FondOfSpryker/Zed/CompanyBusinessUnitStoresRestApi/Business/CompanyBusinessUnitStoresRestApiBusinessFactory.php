<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business;

use FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreReader;
use FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreReaderInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreWriterInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreWriter;
use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreFacadeInterface;
use FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiDependencyProvider;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class CompanyBusinessUnitStoresRestApiBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreReaderInterface
     */
    public function createCompanyBusinessUnitStoreReader(): CompanyBusinessUnitStoreReaderInterface
    {
        return new CompanyBusinessUnitStoreReader($this->getCompanyBusinessUnitStoreFacade());
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business\CompanyBusinessUnitStore\CompanyBusinessUnitStoreWriterInterface
     */
    public function createCompanyBusinessUnitStoreWriter(): CompanyBusinessUnitStoreWriterInterface
    {
        return new CompanyBusinessUnitStoreWriter($this->getCompanyBusinessUnitStoreFacade());
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreFacadeInterface
     */
    protected function getCompanyBusinessUnitStoreFacade(): CompanyBusinessUnitStoreFacadeInterface
    {
        return $this->getProvidedDependency(CompanyBusinessUnitStoresRestApiDependencyProvider::FACADE_COMPANY_BUSINESS_UNIT_STORE);
    }
}
