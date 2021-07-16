<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Demo;

class UnitTest extends TestCase
{
    public function testDemo(): void
    {
        /** @var Demo\ $demo */
        $demo = new Demo();
        $demo->setDemo('demo');
        $this->assertTrue($demo->getDEmo() === 'demo');
    }
}
