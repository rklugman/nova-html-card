<?php declare(strict_types=1);

namespace InteractionDesignFoundation\HtmlCard\Tests;

use InteractionDesignFoundation\HtmlCard\CardServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            CardServiceProvider::class,
        ];
    }
}
