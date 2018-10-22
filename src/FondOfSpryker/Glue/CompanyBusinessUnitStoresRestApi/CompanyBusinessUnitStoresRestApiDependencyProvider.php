<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi;

use FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi\Dependency\Client\CompanyBusinessUnitStoresRestApiToCompanyBusinessUnitStoreClientBridge;
use Spryker\Glue\Kernel\AbstractBundleDependencyProvider;
use Spryker\Glue\Kernel\Container;

class CompanyBusinessUnitStoresRestApiDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_COMPANY_BUSINESS_UNIT_STORE = 'CLIENT_COMPANY_BUSINESS_UNIT_STORE';

    /**
     * @param \Spryker\Glue\Kernel\Container $container
     *
     * @return \Spryker\Glue\Kernel\Container
     */
    public function provideDependencies(Container $container): Container
    {
        $container = $this->addCompanyBusinessUnitStoreClient($container);

        return $container;
    }

    /**
     * @param \Spryker\Glue\Kernel\Container $container
     *
     * @return \Spryker\Glue\Kernel\Container
     */
    protected function addCompanyBusinessUnitStoreClient(Container $container): Container
    {
        $container[static::CLIENT_COMPANY_BUSINESS_UNIT_STORE] = function (Container $container) {
            return new CompanyBusinessUnitStoresRestApiToCompanyBusinessUnitStoreClientBridge(
                $container->getLocator()->companyBusinessUnitStore()->client()
            );
        };

        return $container;
    }
}
