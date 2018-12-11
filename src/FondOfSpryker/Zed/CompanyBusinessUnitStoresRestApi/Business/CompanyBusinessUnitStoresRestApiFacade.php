<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business;

use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business\CompanyBusinessUnitStoresRestApiBusinessFactory getFactory()
 */
class CompanyBusinessUnitStoresRestApiFacade extends AbstractFacade implements CompanyBusinessUnitStoresRestApiFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function findCompanyBusinessUnitStoreById(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer {
        return $this->getFactory()
            ->createCompanyBusinessUnitStoreReader()
            ->findCompanyBusinessUnitStoreById($restCompanyBusinessUnitStoresAttributesTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function create(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer {
        return $this->getFactory()
            ->createCompanyBusinessUnitStoreWriter()
            ->create($restCompanyBusinessUnitStoresAttributesTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function update(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer {
        return $this->getFactory()
            ->createCompanyBusinessUnitStoreWriter()
            ->update($restCompanyBusinessUnitStoresAttributesTransfer);
    }
}
