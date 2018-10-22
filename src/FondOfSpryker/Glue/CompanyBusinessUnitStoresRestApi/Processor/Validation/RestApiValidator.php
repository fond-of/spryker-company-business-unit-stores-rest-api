<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;

class RestApiValidator implements RestApiValidatorInterface
{
    /**
     * @var \FondOfSpryker\Glue\CompaniesRestApi\Processor\Validation\RestApiErrorInterface
     */
    protected $apiErrors;

    /**
     * @param \FondOfSpryker\Glue\CompaniesRestApi\Processor\Validation\RestApiErrorInterface $apiErrors
     */
    public function __construct(RestApiErrorInterface $apiErrors)
    {
        $this->apiErrors = $apiErrors;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer $companyBusinessUnitStoreResponseTransfer
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     * @param \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface $restResponse
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function validateCompanyBusinessUnitStoreResponseTransfer(
        CompanyBusinessUnitStoreResponseTransfer $companyBusinessUnitStoreResponseTransfer,
        RestRequestInterface $restRequest,
        RestResponseInterface $restResponse
    ): RestResponseInterface {
        $companyBusinessUnitStoreTransfer = $companyBusinessUnitStoreResponseTransfer->getCompanyBusinessUnitStoreTransfer();

        if ($companyBusinessUnitStoreTransfer === null) {
            return $this->apiErrors->addCompanyBusinessUnitStoreNotFoundError($restResponse);
        }

        return $restResponse;
    }
}
