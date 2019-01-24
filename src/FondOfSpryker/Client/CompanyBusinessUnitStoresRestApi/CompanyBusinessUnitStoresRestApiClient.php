<?php

namespace FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi;

use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;
use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresResponseTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiFactory getFactory()
 */
class CompanyBusinessUnitStoresRestApiClient extends AbstractClient implements CompanyBusinessUnitStoresRestApiClientInterface
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
            ->createZedCompanyBusinessUnitStoresRestApiStub()
            ->findCompanyBusinessUnitStoreById($restCompanyBusinessUnitStoresAttributesTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresResponseTransfer
     */
    public function create(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresResponseTransfer {

        return $this->getFactory()
            ->createZedCompanyBusinessUnitStoresRestApiStub()
            ->create($restCompanyBusinessUnitStoresAttributesTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresResponseTransfer
     */
    public function update(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresResponseTransfer {

        return $this->getFactory()
            ->createZedCompanyBusinessUnitStoresRestApiStub()
            ->update($restCompanyBusinessUnitStoresAttributesTransfer);
    }
}
