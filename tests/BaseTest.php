<?php

namespace Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use App;

#[CoversClass(App::class)]
class BaseTest extends TestCase
{
    #[Test]
    public function test_example()
    {
        $this->assertEquals(2, 2);

    }
}
