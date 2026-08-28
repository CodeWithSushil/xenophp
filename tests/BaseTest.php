<?php

namespace Tests;

use App;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(App::class)]
class BaseTest extends TestCase
{
    #[Test]
    public function test_example()
    {
        $this->assertEquals(2, 2);

    }
}
