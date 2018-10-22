<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Processor\Validation;

use Generated\Shared\Transfer\CompanyBusinessUnitStoreResponseTransfer;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;

interface RestApiValidatorInterface
{
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
    ): RestResponseInterface;
}
