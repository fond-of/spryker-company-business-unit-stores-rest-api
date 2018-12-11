<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business\CompanyBusinessUnitStore;

use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;

interface CompanyBusinessUnitStoreReaderInterface
{
    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function findCompanyBusinessUnitStoreById(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer;
}
