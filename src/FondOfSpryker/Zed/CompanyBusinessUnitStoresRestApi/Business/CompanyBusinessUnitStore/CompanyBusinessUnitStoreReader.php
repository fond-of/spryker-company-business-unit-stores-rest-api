<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi\Business\CompanyBusinessUnitStore;

use FondOfSpryker\Zed\CompanyBusinessUnitStore\Business\CompanyBusinessUnitStoreFacadeInterface;
use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;

class CompanyBusinessUnitStoreReader implements CompanyBusinessUnitStoreReaderInterface
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
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $companyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer
     */
    public function findCompanyBusinessUnitStoreById(
        RestCompanyBusinessUnitStoresAttributesTransfer $companyBusinessUnitStoresAttributesTransfer
    ): RestCompanyBusinessUnitStoresAttributesTransfer {

        // TODO call facade // mapping // validation // error

        return $companyBusinessUnitStoresAttributesTransfer;
    }
}
