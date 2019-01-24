<?php

namespace FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi\Zed;

use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;
use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresResponseTransfer;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class CompanyBusinessUnitStoresRestApiStub implements CompanyBusinessUnitStoresRestApiStubInterface
{
    /**
     * @var \Spryker\Client\ZedRequest\ZedRequestClientInterface
     */
    protected $zedRequestClient;

    /**
     * @param \Spryker\Client\ZedRequest\ZedRequestClientInterface $zedRequestClient
     */
    public function __construct(ZedRequestClientInterface $zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function findCompanyBusinessUnitStoreById(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer {
        /** @var \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer */
        $restCompanyBusinessUnitStoresAttributesTransfer = $this->zedRequestClient->call(
            '/company-business-unit-stores-rest-api/gateway/find-company-business-unit-by-id',
            $restCompanyBusinessUnitStoresAttributesTransfer
        );

        return $restCompanyBusinessUnitStoresAttributesTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresResponseTransfer
     */
    public function create(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresResponseTransfer {
        /** @var \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer */
        $restCompanyBusinessUnitStoresResponseTransfer = $this->zedRequestClient->call(
            '/company-business-unit-stores-rest-api/gateway/create',
            $restCompanyBusinessUnitStoresAttributesTransfer
        );

        return $restCompanyBusinessUnitStoresResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresResponseTransfer
     */
    public function update(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresResponseTransfer {
        /** @var \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer */
        $restCompanyBusinessUnitStoresResponseTransfer = $this->zedRequestClient->call(
            '/company-business-unit-stores-rest-api/gateway/update',
            $restCompanyBusinessUnitStoresAttributesTransfer
        );

        return $restCompanyBusinessUnitStoresResponseTransfer;
    }
}
