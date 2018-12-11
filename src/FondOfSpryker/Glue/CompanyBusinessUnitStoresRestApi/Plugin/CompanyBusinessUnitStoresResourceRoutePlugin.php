<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Plugin;

use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiConfig;
use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRouteCollectionInterface;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRoutePluginInterface;
use Spryker\Glue\Kernel\AbstractPlugin;

class CompanyBusinessUnitStoresResourceRoutePlugin extends AbstractPlugin implements ResourceRoutePluginInterface
{
    /**
     * @param \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRouteCollectionInterface $resourceRouteCollection
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRouteCollectionInterface
     */
    public function configure(ResourceRouteCollectionInterface $resourceRouteCollection): ResourceRouteCollectionInterface
    {
        return $resourceRouteCollection
            ->addGet('get')
            ->addPost('post')
            ->addPost('patch');
    }

    /**
     * @return string
     */
    public function getResourceType(): string
    {
        return CompanyBusinessUnitStoresRestApiConfig::RESOURCE_COMPANY_BUSINESS_UNIT_STORES;
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        return CompanyBusinessUnitStoresRestApiConfig::CONTROLLER_COMPANY_BUSINESS_UNIT_STORES;
    }

    /**
     * @return string
     */
    public function getResourceAttributesClassName(): string
    {
        return RestCompanyBusinessUnitStoresAttributesTransfer::class;
    }
}
