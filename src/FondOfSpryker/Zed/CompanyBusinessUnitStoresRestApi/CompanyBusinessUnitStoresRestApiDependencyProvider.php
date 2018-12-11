<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnitStoresRestApi;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class CompanyBusinessUnitStoresRestApiDependencyProvider extends AbstractBundleDependencyProvider
{
    public const FACADE_COMPANY_BUSINESS_UNIT_STORE = 'FACADE_COMPANY_BUSINESS_UNIT_STORE';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);

        $container = $this->addCompanyBusinessUnitStoreFacade($container);

        return $container;
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addCompanyBusinessUnitStoreFacade(Container $container): Container
    {
        $container[static::FACADE_COMPANY_BUSINESS_UNIT_STORE] = function (Container $container) {
            return  $container->getLocator()->companyBusinessUnitStore()->facade();
        };

        return $container;
    }
}
