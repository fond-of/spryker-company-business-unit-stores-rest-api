<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Plugin;

use FondOfSpryker\Glue\CompaniesRestApi\CompaniesRestApiConfig;
use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\CompanyBusinessUnitStoresRestApiConfig;
use Generated\Shared\Transfer\RestCompanyBusinessUnitStoresAttributesTransfer;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRouteCollectionInterface;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRoutePluginInterface;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceWithParentPluginInterface;
use Spryker\Glue\Kernel\AbstractPlugin;

class CompanyBusinessUnitStoresResourceRoutePlugin extends AbstractPlugin implements ResourceRoutePluginInterface, ResourceWithParentPluginInterface
{
    /**
     * @api
     *
     * {@inheritdoc}
     *
     * @param \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRouteCollectionInterface $resourceRouteCollection
     *
     * @return \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRouteCollectionInterface
     */
    public function configure(ResourceRouteCollectionInterface $resourceRouteCollection
    ): ResourceRouteCollectionInterface
    {
        $resourceRouteCollection
            ->addGet(CompanyBusinessUnitStoresRestApiConfig::ACTION_COMPANY_BUSINESS_UNIT_STORES_GET, true)
            ->addPatch(CompanyBusinessUnitStoresRestApiConfig::ACTION_COMPANY_BUSINESS_UNIT_STORES_PATCH, true)
            ->addPost(CompanyBusinessUnitStoresRestApiConfig::ACTION_COMPANY_BUSINESS_UNIT_STORES_POST, true);

        return $resourceRouteCollection;
    }

    /**
     * @api
     *
     * {@inheritdoc}
     *
     * @return string
     */
    public function getResourceType(): string
    {
        return CompanyBusinessUnitStoresRestApiConfig::RESOURCE_COMPANY_BUSINESS_UNIT_STORES;
    }

    /**
     * @api
     *
     * {@inheritdoc}
     *
     * @return string
     */
    public function getController(): string
    {
        return CompanyBusinessUnitStoresRestApiConfig::CONTROLLER_COMPANY_BUSINESS_UNIT_STORES;
    }

    /**
     * @api
     *
     * {@inheritdoc}
     *
     * @return string
     */
    public function getResourceAttributesClassName(): string
    {
        return RestCompanyBusinessUnitStoresAttributesTransfer::class;
    }

    /**
     * @api
     *
     * {@inheritdoc}
     *
     * @return string
     */
    public function getParentResourceType(): string
    {
        return CompaniesRestApiConfig::RESOURCE_COMPANIES;
    }
}
