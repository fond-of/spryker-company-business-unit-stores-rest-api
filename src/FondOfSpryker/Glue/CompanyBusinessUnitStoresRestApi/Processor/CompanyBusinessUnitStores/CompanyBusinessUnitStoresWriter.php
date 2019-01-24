<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores;

use FondOfSpryker\Client\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiClientInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiConfig;
use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;
use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresResponseTransfer;
use Generated\Shared\Transfer\RestErrorMessageTransfer;
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

        $restCompanyBusinessUnitStoresResponseTransfer = $this->client->create(
            $restCompanyBusinessUnitStoresAttributesTransfer
        );

        if (!$restCompanyBusinessUnitStoresResponseTransfer->getIsSuccess()) {
            return $this->createSaveCompanyBusinessUnitStoresFailedErrorResponse(
                $restCompanyBusinessUnitStoresResponseTransfer
            );
        }

        return $this->createCompanyBusinessUnitStoreSavedResponse($restCompanyBusinessUnitStoresResponseTransfer);
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

        $restCompanyBusinessUnitStoresResponseTransfer = $this->client->update(
            $restCompanyBusinessUnitStoresAttributesTransfer
        );

        if (!$restCompanyBusinessUnitStoresResponseTransfer->getIsSuccess()) {
            return $this->createSaveCompanyBusinessUnitStoresFailedErrorResponse(
                $restCompanyBusinessUnitStoresResponseTransfer
            );
        }

        return $this->createCompanyBusinessUnitStoreSavedResponse($restCompanyBusinessUnitStoresResponseTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresResponseTransfer $restCompanyBusinessUnitStoresResponseTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    protected function createCompanyBusinessUnitStoreSavedResponse(
        RestCompanyBusinessUnitStoresResponseTransfer $restCompanyBusinessUnitStoresResponseTransfer
    ): RestResponseInterface {

        $restCompanyBusinessUnitStoresAttributesTransfer = $restCompanyBusinessUnitStoresResponseTransfer->getRestCompanyBusinessUnitStoresAttributes();

        $restResource = $this->restResourceBuilder->createRestResource(
            CompanyBusinessUnitStoresRestApiConfig::RESOURCE_COMPANY_BUSINESS_UNIT_STORES,
            $restCompanyBusinessUnitStoresAttributesTransfer->getId(),
            $restCompanyBusinessUnitStoresAttributesTransfer
        );

        return $this->restResourceBuilder
            ->createRestResponse()
            ->addResource($restResource);
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresResponseTransfer $restCompanyBusinessUnitStoresResponseTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    protected function createSaveCompanyBusinessUnitStoresFailedErrorResponse(
        RestCompanyBusinessUnitStoresResponseTransfer $restCompanyBusinessUnitStoresResponseTransfer
    ): RestResponseInterface {
        $restResponse = $this->restResourceBuilder->createRestResponse();

        foreach ($restCompanyBusinessUnitStoresResponseTransfer->getErrors() as $restCompanyBusinessUnitStoresErrorTransfer) {
            $restResponse->addError((new RestErrorMessageTransfer())
                ->setCode($restCompanyBusinessUnitStoresErrorTransfer->getCode())
                ->setStatus($restCompanyBusinessUnitStoresErrorTransfer->getStatus())
                ->setDetail($restCompanyBusinessUnitStoresErrorTransfer->getDetail()));
        }

        return $restResponse;
    }
}
