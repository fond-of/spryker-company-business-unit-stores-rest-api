<?php

namespace FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi;

use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;
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
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function create(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer {

        return $this->getFactory()
            ->createZedCompanyBusinessUnitStoresRestApiStub()
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
            ->createZedCompanyBusinessUnitStoresRestApiStub()
            ->update($restCompanyBusinessUnitStoresAttributesTransfer);
    }
}
