<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\CompanyFaker;
use Amethyst\Managers\CompanyManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class CompanyTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = CompanyManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = CompanyFaker::class;
}
