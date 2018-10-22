<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Mapper;

use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiConfig;
use Generated\Shared\Transfer\CompanyBusinessUnitTransfer;
use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceBuilderInterface;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceInterface;

class CompanyBusinessUnitStoresResourceMapper implements CompanyBusinessUnitStoresResourceMapperInterface
{
    /**
     * @var \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceBuilderInterface
     */
    protected $restResourceBuilder;

    /**
     * @param \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceBuilderInterface $restResourceBuilder
     */
    public function __construct(RestResourceBuilderInterface $restResourceBuilder)
    {
        $this->restResourceBuilder = $restResourceBuilder;
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitTransfer
     */
    public function mapCompanyAttributesToCompanyBusinessUnitTransfer(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): CompanyBusinessUnitTransfer {
        return (new CompanyBusinessUnitTransfer())->fromArray($restCompanyBusinessUnitStoresAttributesTransfer->toArray(), true);
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $companyBusinessUnitTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceInterface
     */
    public function mapCompanyBusinessUnitTransferToRestResource(CompanyBusinessUnitTransfer $companyBusinessUnitTransfer
    ): RestResourceInterface
    {
        $restCompaniesResponseAttributesTransfer = (new RestCompanyBusinessUnitStoresAttributesTransfer())
            ->fromArray($companyBusinessUnitTransfer->toArray(), true);

        return $this->restResourceBuilder->createRestResource(
            CompanyBusinessUnitStoresRestApiConfig::RESOURCE_COMPANIES,
            $companyBusinessUnitTransfer->getExternalReference(),
            $restCompaniesResponseAttributesTransfer
        );
    }
}
