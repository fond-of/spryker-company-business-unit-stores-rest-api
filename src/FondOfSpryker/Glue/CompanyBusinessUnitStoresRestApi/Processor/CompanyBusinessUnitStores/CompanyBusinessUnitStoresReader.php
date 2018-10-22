<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores;

use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Dependency\Client\CompanyBusinessUnitStoresRestApiToCompanyBusinessUnitClientInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Mapper\CompanyBusinessUnitStoresResourceMapperInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiErrorInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiValidatorInterface;
use Generated\Shared\Transfer\CompanyBusinessUnitTransfer;
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
     * @var \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Mapper\CompanyBusinessUnitStoresResourceMapperInterface
     */
    protected $companyBusinessUnitStoresResourceMapper;

    /**
     * @var \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Dependency\Client\CompanyBusinessUnitStoresRestApiToCompanyBusinessUnitClientInterface
     */
    protected $companyBusinessUnitClient;

    /**
     * @var \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiErrorInterface
     */
    protected $restApiError;

    /**
     * @var \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiValidatorInterface
     */
    protected $restApiValidator;

    /**
     * @param \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceBuilderInterface $restResourceBuilder
     * @param \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Mapper\CompanyBusinessUnitStoresResourceMapperInterface $companyBusinessUnitStoresResourceMapper
     * @param \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Dependency\Client\CompanyBusinessUnitStoresRestApiToCompanyBusinessUnitClientInterface $companyBusinessUnitClient
     * @param \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiErrorInterface $restApiError
     * @param \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiValidatorInterface $restApiValidator
     */
    public function __construct(
        RestResourceBuilderInterface $restResourceBuilder,
        CompanyBusinessUnitStoresResourceMapperInterface $companyBusinessUnitStoresResourceMapper,
        CompanyBusinessUnitStoresRestApiToCompanyBusinessUnitClientInterface $companyBusinessUnitClient,
        RestApiErrorInterface $restApiError,
        RestApiValidatorInterface $restApiValidator
    ) {
        $this->restResourceBuilder = $restResourceBuilder;
        $this->companyBusinessUnitStoresResourceMapper = $companyBusinessUnitStoresResourceMapper;
        $this->companyBusinessUnitClient = $companyBusinessUnitClient;
        $this->restApiError = $restApiError;
        $this->restApiValidator = $restApiValidator;
    }

    /**
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function findCompanyBusinessUnitByExternalReference(RestRequestInterface $restRequest): RestResponseInterface
    {
        $restResponse = $this->restResourceBuilder->createRestResponse();

        if (!$restRequest->getResource()->getId()) {
            return $this->restApiError->addExternalReferenceMissingError($restResponse);
        }

        $companyBusinessUnitTransfer = (new CompanyBusinessUnitTransfer())->setExternalReference($restRequest->getResource()->getId());
        $companyBusinessUnitResponseTransfer = $this->companyBusinessUnitClient->findCompanyBusinessUnitByExternalReference($companyBusinessUnitTransfer);

        $restResponse = $this->restApiValidator->validateCompanyBusinessUnitResponseTransfer(
            $companyBusinessUnitResponseTransfer,
            $restRequest,
            $restResponse
        );

        if (count($restResponse->getErrors()) > 0) {
            return $restResponse;
        }

        $companyBusinessUnitStoresResource = $this->companyBusinessUnitStoresResourceMapper
            ->mapCompanyBusinessUnitTransferToRestResource($companyBusinessUnitResponseTransfer->getCompanyBusinessUnitTransfer());

        $restResponse->addResource($companyBusinessUnitStoresResource);

        return $restResponse;
    }
}
