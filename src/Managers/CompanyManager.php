<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Company newEntity()
 * @method \Amethyst\Schemas\CompanySchema getSchema()
 * @method \Amethyst\Repositories\CompanyRepository getRepository()
 * @method \Amethyst\Serializers\CompanySerializer getSerializer()
 * @method \Amethyst\Validators\CompanyValidator getValidator()
 * @method \Amethyst\Authorizers\CompanyAuthorizer getAuthorizer()
 */
class CompanyManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.company.data.company';
}
