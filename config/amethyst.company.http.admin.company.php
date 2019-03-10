<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\CompaniesController::class,
    'router'     => [
        'as'     => 'company.',
        'prefix' => '/companies',
    ],
];
