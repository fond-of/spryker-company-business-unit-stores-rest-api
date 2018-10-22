<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Dependency\Client;

use Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer;

interface CompanyBusinessUnitStoresRestApiToCompanyBusinessUnitStoreClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer
     */
    public function findCompanyBusinessUnitStoreByExternalReference(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer
     */
    public function createCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer
     */
    public function updateCompanyBusinessUnitStore(CompanyBusinessUnitStoreTransfer $companyBusinessUnitStoreTransfer): CompanyBusinessUnitStoreResponseTransfer;
}
