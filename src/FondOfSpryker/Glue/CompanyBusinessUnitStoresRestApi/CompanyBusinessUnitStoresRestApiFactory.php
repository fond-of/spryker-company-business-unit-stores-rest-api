<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi;

use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Dependency\Client\CompanyBusinessUnitStoresRestApiToCompanyBusinessUnitStoreClientInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores\CompanyBusinessUnitStoresReader;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores\CompanyBusinessUnitStoresReaderInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores\CompanyBusinessUnitStoresWriter;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores\CompanyBusinessUnitStoresWriterInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Mapper\CompanyBusinessUnitStoresResourceMapper;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Mapper\CompanyBusinessUnitStoresResourceMapperInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiError;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiErrorInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiValidator;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiValidatorInterface;
use Spryker\Glue\Kernel\AbstractFactory;

class CompanyBusinessUnitStoresRestApiFactory extends AbstractFactory
{
    /**
     * @return \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Dependency\Client\CompanyBusinessUnitStoresRestApiToCompanyBusinessUnitStoreClientInterface
     */
    public function getCompanyBusinessUnitStoreClient(): CompanyBusinessUnitStoresRestApiToCompanyBusinessUnitStoreClientInterface
    {
        return $this->getProvidedDependency(CompanyBusinessUnitStoresRestApiDependencyProvider::CLIENT_COMPANY_BUSINESS_UNIT_STORE);
    }

    /**
     * @return \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores\CompanyBusinessUnitStoresReaderInterface
     */
    public function createCompanyBusinessUnitStoresReader(): CompanyBusinessUnitStoresReaderInterface
    {
        return new CompanyBusinessUnitStoresReader(
            $this->getResourceBuilder(),
            $this->createCompanyBusinessUnitStoresResourceMapper(),
            $this->getCompanyBusinessUnitStoreClient(),
            $this->createRestApiError(),
            $this->createRestApiValidator()
        );
    }

    /**
     * @return \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores\CompanyBusinessUnitStoresWriterInterface
     */
    public function createCompanyBusinessUnitStoresWriter(): CompanyBusinessUnitStoresWriterInterface
    {
        return new CompanyBusinessUnitStoresWriter(
            $this->getResourceBuilder(),
            $this->createCompanyBusinessUnitStoresResourceMapper(),
            $this->getCompanyBusinessUnitStoreClient(),
            $this->createRestApiError(),
            $this->createRestApiValidator()
        );
    }

    /**
     * @return \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Mapper\CompanyBusinessUnitStoresResourceMapperInterface
     */
    public function createCompanyBusinessUnitStoresResourceMapper(): CompanyBusinessUnitStoresResourceMapperInterface
    {
        return new CompanyBusinessUnitStoresResourceMapper($this->getResourceBuilder());
    }

    /**
     * @return \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiErrorInterface
     */
    public function createRestApiError(): RestApiErrorInterface
    {
        return new RestApiError();
    }

    /**
     * @return \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiValidatorInterface
     */
    public function createRestApiValidator(): RestApiValidatorInterface
    {
        return new RestApiValidator($this->createRestApiError());
    }
}
