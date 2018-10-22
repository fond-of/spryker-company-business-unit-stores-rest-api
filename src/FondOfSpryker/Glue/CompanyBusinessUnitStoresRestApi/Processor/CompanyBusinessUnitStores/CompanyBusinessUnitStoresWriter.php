<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\CompanyBusinessUnitStores;

use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Dependency\Client\CompanyBusinessUnitStoresRestApiToCompanyBusinessUnitClientInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Mapper\CompanyBusinessUnitStoresResourceMapperInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiErrorInterface;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation\RestApiValidatorInterface;
use Generated\Shared\Transfer\CompanyBusinessUnitTransfer;
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
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function createCompanyBusinessUnit(
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestResponseInterface {
        $restResponse = $this->restResourceBuilder->createRestResponse();

        $companyBusinessUnitTransfer = (new CompanyBusinessUnitTransfer())
            ->fromArray($restCompanyBusinessUnitStoresAttributesTransfer->toArray(), true);

        $companyBusinessUnitResponseTransfer = $this->companyBusinessUnitClient->createCompanyBusinessUnit($companyBusinessUnitTransfer);

        if (!$companyBusinessUnitResponseTransfer->getIsSuccessful()) {
            foreach ($companyBusinessUnitResponseTransfer->getMessages() as $message) {
                return $this->restApiError->addCompanyBusinessUnitCantCreateMessageError($restResponse, $message->getText());
            }
        }

        $restResource = $this->companyBusinessUnitStoresResourceMapper->mapCompanyBusinessUnitTransferToRestResource($companyBusinessUnitResponseTransfer->getCompanyBusinessUnitTransfer());

        return $restResponse->addResource($restResource);
    }

    /**
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function updateCompanyBusinessUnit(
        RestRequestInterface $restRequest,
        RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
    ): RestResponseInterface {
        $restResponse = $this->restResourceBuilder->createRestResponse();

        $companyBusinessUnitTransfer = (new CompanyBusinessUnitTransfer())->setExternalReference($restRequest->getResource()->getId());

        $companyBusinessUnitResponseTransfer = $this->companyBusinessUnitClient->findCompanyByExternalReference($companyBusinessUnitTransfer);

        $restResponse = $this->restApiValidator->validateCompanyBusinessUnitResponseTransfer(
            $companyBusinessUnitResponseTransfer,
            $restRequest,
            $restResponse
        );

        if (count($restResponse->getErrors()) > 0) {
            return $restResponse;
        }

        $companyBusinessUnitResponseTransfer->getCompanyBusinessUnitTransfer()->fromArray(
            $this->getCompanyBusinessUnitData($restCompanyBusinessUnitStoresAttributesTransfer)
        );

        $companyBusinessUnitResponseTransfer = $this->companyBusinessUnitClient->updateCompany($companyBusinessUnitResponseTransfer->getCompanyBusinessUnitTransfer());

        if (!$companyBusinessUnitResponseTransfer->getIsSuccessful()) {
            return $this->restApiError->addCompanyNotSavedError($restResponse);
        }

        $restResource = $this->companyBusinessUnitStoresResourceMapper->mapCompanyBusinessUnitTransferToRestResource($companyBusinessUnitResponseTransfer->getCompanyBusinessUnitTransfer());

        return $restResponse->addResource($restResource);
    }

    /**
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer
     *
     * @return array
     */
    protected function getCompanyBusinessUnitData(RestCompanyBusinessUnitStoresAttributesTransfer $restCompanyBusinessUnitStoresAttributesTransfer): array
    {
        $companyBusinessUnitData = $restCompanyBusinessUnitStoresAttributesTransfer->modifiedToArray(true, true);

        return $this->cleanUpCompanyBusinessUnitData($companyBusinessUnitData);
    }

    /**
     * @param array $companyBusinessUnitData
     *
     * @return array
     */
    protected function cleanUpCompanyBusinessUnitData(array $companyBusinessUnitData): array
    {
        return $companyBusinessUnitData;
    }
}
