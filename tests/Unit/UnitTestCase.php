<?php

namespace Exolnet\Skeleton\Tests\Unit;

use Mockery;
use PHPUnit\Framework\TestCase;

abstract class UnitTestCase extends TestCase
{
    /**
     * @return void
     */
    public function tearDown(): void
    {
        Mockery::close();
    }
}
