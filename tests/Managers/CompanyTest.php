<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\CompanyFaker;
use Railken\Amethyst\Managers\CompanyManager;
use Railken\Amethyst\Tests\BaseTest;
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
