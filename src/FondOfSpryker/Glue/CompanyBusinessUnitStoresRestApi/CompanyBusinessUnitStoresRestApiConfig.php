<?php

namespace FondOfSpryker\Glue\CompanyBusinessUnitStoresRestApi;

class CompanyBusinessUnitStoresRestApiConfig
{
    public const RESOURCE_COMPANY_BUSINESS_UNIT_STORES = 'company-business-unit-stores';

    public const CONTROLLER_COMPANY_BUSINESS_UNIT_STORES = 'company-business-unit-stores-resource';

    public const ACTION_COMPANY_BUSINESS_UNIT_STORES_GET = 'get';
    public const ACTION_COMPANY_BUSINESS_UNIT_STORES_POST = 'post';
    public const ACTION_COMPANY_BUSINESS_UNIT_STORES_PATCH = 'patch';

    public const RESPONSE_CODE_EXTERNAL_REFERENCE_MISSING = '400';
    public const RESPONSE_DETAILS_EXTERNAL_REFERENCE_MISSING = 'External reference is missing.';

    public const RESPONSE_CODE_COMPANY_NOT_FOUND = '401';
    public const RESPONSE_DETAILS_COMPANY_BUSINESS_UNIT_NOT_FOUND = 'Company business unit store not found.';

    public const RESPONSE_CODE_COMPANY_BUSINESS_UNIT_FAILED_TO_CREATE = '402';

    public const RESPONSE_CODE_COMPANY_BUSINESS_UNIT_FAILED_TO_SAVE = '403';

    public const RESPONSE_DETAILS_COMPANY_BUSINESS_UNIT_FAILED_TO_SAVE = 'Failed to save company business unit store.';
}
