<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores;

use FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiClientInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiConfig;
use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceBuilderInterface;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;

class CompanyBusinessUnitStoresWriter implements CompanyBusinessUnitStoresWriterInterface
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
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function createCompanyBusinessUnitStore(RestRequestInterface $restRequest,
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestResponseInterface {

        $restCompanyBusinessUnitStoresAttributesTransfer = $this->client->create($restCompanyBusinessUnitStoresAttributesTransfer);

        return $this->createCompanyBusinessUnitStoreSavedResponse($restCompanyBusinessUnitStoresAttributesTransfer);
    }

    /**
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function updateCompanyBusinessUnitStore(
        RestRequestInterface $restRequest,
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestResponseInterface {

        $restCompanyBusinessUnitStoresAttributesTransfer->setId($restRequest->getResource()->getId());

        $restCompanyBusinessUnitStoresAttributesTransfer = $this->client->update(
            $restCompanyBusinessUnitStoresAttributesTransfer
        );

        return $this->createCompanyBusinessUnitStoreSavedResponse($restCompanyBusinessUnitStoresAttributesTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    protected function createCompanyBusinessUnitStoreSavedResponse(
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
