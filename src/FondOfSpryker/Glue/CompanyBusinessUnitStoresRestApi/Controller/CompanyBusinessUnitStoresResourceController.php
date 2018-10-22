<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Controller;

use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;
use Spryker\Glue\Kernel\Controller\AbstractController;

/**
 * @method \FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiFactory getFactory()
 */
class CompanyBusinessUnitStoresResourceController extends AbstractController
{
    /**
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function getAction(RestRequestInterface $restRequest): RestResponseInterface
    {
        return $this->getFactory()->createCompanyBusinessUnitStoresReader()->findCompanyBusinessUnitStoreByExternalReference($restRequest);
    }

    /**
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompaniesAttributesTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function postAction(RestRequestInterface $restRequest, RestCompanyBusinessUnitStoresAttributesTransfer $restCompaniesAttributesTransfer): RestResponseInterface
    {
        return $this->getFactory()->createCompanyBusinessUnitStoresWriter()->createCompanyBusinessUnitStore($restCompaniesAttributesTransfer);
    }

    /**
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     * @param \Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer $restCompaniesAttributesTransfer
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function patchAction(RestRequestInterface $restRequest, RestCompanyBusinessUnitStoresAttributesTransfer $restCompaniesAttributesTransfer): RestResponseInterface
    {
        return $this->getFactory()->createCompanyBusinessUnitStoresWriter()->updateCompanyBusinessUnitStore($restRequest, $restCompaniesAttributesTransfer);
    }
}
