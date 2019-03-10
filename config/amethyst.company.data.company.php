<?php

return [
    'table'      => 'amethyst_companies',
    'comment'    => 'Company',
    'model'      => Railken\Amethyst\Models\Company::class,
    'schema'     => Railken\Amethyst\Schemas\CompanySchema::class,
    'repository' => Railken\Amethyst\Repositories\CompanyRepository::class,
    'serializer' => Railken\Amethyst\Serializers\CompanySerializer::class,
    'validator'  => Railken\Amethyst\Validators\CompanyValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\CompanyAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\CompanyFaker::class,
    'manager'    => Railken\Amethyst\Managers\CompanyManager::class,
];
