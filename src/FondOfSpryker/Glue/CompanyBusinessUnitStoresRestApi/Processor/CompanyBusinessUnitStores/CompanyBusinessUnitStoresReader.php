<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores;

use FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiClientInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiConfig;
use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceBuilderInterface;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;

class CompanyBusinessUnitStoresReader implements CompanyBusinessUnitStoresReaderInterface
{
    /**
     * @var \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceBuilderInterface
     */
    protected $restResourceBuilder;

    /**
     * @var \FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiClientInterface
     */
    private $client;

    /**
     * @param \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceBuilderInterface $restResourceBuilder
     * @param \FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiClientInterface $client
     */
    public function __construct(RestResourceBuilderInterface $restResourceBuilder, CompanyBusinessUnitStoresRestApiClientInterface $client)
    {
        $this->restResourceBuilder = $restResourceBuilder;
        $this->client = $client;
    }

    /**
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function findCompanyBusinessUnitStoreById(RestRequestInterface $restRequest): RestResponseInterface
    {
        $restCompanyBusinessUnitStoresAttributesTransfer = new RestCompanyBusinessUnitStoresAttributesTransfer();
        $restCompanyBusinessUnitStoresAttributesTransfer->setId($restRequest->getResource()->getId());

        $restCompanyBusinessUnitStoresAttributesTransfer = $this->client->findCompanyBusinessUnitStoreById(
            $restCompanyBusinessUnitStoresAttributesTransfer
        );

        return $this->createCompanyBusinessUnitStoreLoadedResponse($restCompanyBusinessUnitStoresAttributesTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    protected function createCompanyBusinessUnitStoreLoadedResponse(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestResponseInterface {

        $restResource = $this->restResourceBuilder->createRestResource(
            CompanyBusinessUnitStoresRestApiConfig::RESOURCE_COMPANY_BUSINESS_UNIT_STORES,
            $restCompanyBusinessUnitStoresAttributesTransfer->getId(),
            $restCompanyBusinessUnitStoresAttributesTransfer
        );

        return $this->restResourceBuilder
            ->createRestResponse()
            ->addResource($restResource);
    }
}
