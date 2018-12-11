<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business\CompanyBusinessUnitStore;

use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;

interface CompanyBusinessUnitStoreWriterInterface
{
    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function create(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer;

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function update(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer;
}
