<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business\CompanyBusinessUnitStore;

use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreFacadeInterface;
use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;

class CompanyBusinessUnitStoreWriter implements CompanyBusinessUnitStoreWriterInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreFacadeInterface
     */
    protected $companyBusinessUnitStoreFacade;

    /**
     * @param \FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreFacadeInterface $companyBusinessUnitStoreFacade
     */
    public function __construct(CompanyBusinessUnitStoreFacadeInterface $companyBusinessUnitStoreFacade)
    {
        $this->companyBusinessUnitStoreFacade = $companyBusinessUnitStoreFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function create(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer {





        // TODO call facade // mapping // validation // error
        return $restCompanyBusinessUnitStoresAttributesTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function update(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer {


        // TODO call facade // mapping // validation // error
        return $restCompanyBusinessUnitStoresAttributesTransfer;
    }

    /**
     * @return \Generated\Shared\Transfer\RestCompanyUsersResponseTransfer
     */
    protected function createCompanyBusinessUnitStoreDataInvalidErrorResponse(): RestCompanyBusinessUnitStoreResponseTransfer
    {
        $restCompanyBusinessUnitStoreErrorTransfer = new RestCompanyBusinessUnitStoreErrorTransfer();

        $restCompanyBusinessUnitStoreErrorTransfer->setStatus(Response::HTTP_UNPROCESSABLE_ENTITY)
            ->setCode(CompanyUsersRestApiConfig::RESPONSE_CODE_COMPANY_USER_DATA_INVALID)
            ->setDetail(CompanyUsersRestApiConfig::RESPONSE_DETAILS_COMPANY_USER_DATA_INVALID);

        $restCompanyUsersResponseTransfer = new RestCompanyUsersResponseTransfer();

        $restCompanyUsersResponseTransfer->setIsSuccess(false)
            ->addError($restCompanyUsersErrorTransfer);

        return $restCompanyUsersResponseTransfer;
    }
}
