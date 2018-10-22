<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Dependency\Client;

use FondOfSpryker\Client\CompanyBusinessUnitStore\CompanyBusinessUnitStoreClientInterface;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

class CompanyBusinessUnitStoresRestApiToCompanyBusinessUnitStoreClientBridge implements CompanyBusinessUnitStoresRestApiToCompanyBusinessUnitStoreClientInterface
{
    /**
     * @var \FondOfSpryker\Client\CompanyBusinessUnitStore\CompanyBusinessUnitStoreClientInterface
     */
    protected $companyBusinessUnitStoreClient;

    /**
     * @param \FondOfSpryker\Client\CompanyBusinessUnitStore\CompanyBusinessUnitStoreClientInterface $companyBusinessUnitStoreClient
     */
    public function __construct(CompanyBusinessUnitStoreClientInterface $companyBusinessUnitStoreClient)
    {
        $this->companyBusinessUnitStoreClient = $companyBusinessUnitStoreClient;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer
     */
    public function findCompanyBusinessUnitStoreByExternalReference(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
    ): CompanyBusinessUnitStoreResponseTransfer
    {
        return $this->companyBusinessUnitStoreClient->findCompanyBusinessUnitStoreByExternalReference($companyBusinessUnitStoreTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer
     */
    public function createCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
    ): CompanyBusinessUnitStoreResponseTransfer
    {
        return $this->companyBusinessUnitStoreClient->createCompanyBusinessUnitStore($companyBusinessUnitStoreTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer
     */
    public function updateCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
    ): CompanyBusinessUnitStoreResponseTransfer
    {
        return $this->companyBusinessUnitStoreClient->updateCompanyBusinessUnitStore($companyBusinessUnitStoreTransfer);
    }
}
