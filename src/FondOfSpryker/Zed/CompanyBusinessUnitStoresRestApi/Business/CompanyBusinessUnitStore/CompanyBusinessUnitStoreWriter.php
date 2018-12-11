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
}
