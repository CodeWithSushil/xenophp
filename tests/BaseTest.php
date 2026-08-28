<?php

namespace Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(TestCase::class)]
class BaseTest extends TestCase
{
    #[Test]
    public function test_example()
    {
        $this->assertEquals(2, 2);

    }
}
