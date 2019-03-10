<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class CompanyAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'company.create',
        Tokens::PERMISSION_UPDATE => 'company.update',
        Tokens::PERMISSION_SHOW   => 'company.show',
        Tokens::PERMISSION_REMOVE => 'company.remove',
    ];
}
