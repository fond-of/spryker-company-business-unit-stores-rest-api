<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Communication\Controller;

use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business\CompanyBusinessUnitStoresRestApiFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function findCompanyBusinessUnitByIdAction(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer {
        return $this->getFacade()->findCompanyBusinessUnitStoreById($restCompanyBusinessUnitStoresAttributesTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function createAction(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer {
        return $this->getFacade()->create($restCompanyBusinessUnitStoresAttributesTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function updateAction(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer {
        return $this->getFacade()->update($restCompanyBusinessUnitStoresAttributesTransfer);
    }
}
