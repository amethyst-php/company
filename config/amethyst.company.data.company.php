<?php

return [
    'table'      => 'amethyst_companies',
    'comment'    => 'Company',
    'model'      => Amethyst\Models\Company::class,
    'schema'     => Amethyst\Schemas\CompanySchema::class,
    'repository' => Amethyst\Repositories\CompanyRepository::class,
    'serializer' => Amethyst\Serializers\CompanySerializer::class,
    'validator'  => Amethyst\Validators\CompanyValidator::class,
    'authorizer' => Amethyst\Authorizers\CompanyAuthorizer::class,
    'faker'      => Amethyst\Fakers\CompanyFaker::class,
    'manager'    => Amethyst\Managers\CompanyManager::class,
];
