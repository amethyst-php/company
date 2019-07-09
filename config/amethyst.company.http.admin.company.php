<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\CompaniesController::class,
    'router'     => [
        'as'     => 'company.',
        'prefix' => '/companies',
    ],
];
