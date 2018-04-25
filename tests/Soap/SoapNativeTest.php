<?php

namespace NFePHPv5\Common\Tests\Soap;

use NFePHPv5\Common\Soap\SoapNative;

class SoapNativeTest extends \PHPUnit\Framework\TestCase
{

    public function testInstanciate()
    {
        $soap = new SoapNative();
        $this->assertInstanceOf(SoapNative::class, $soap);
    }

    public function testSend()
    {
        $this->assertTrue(true);
    }
}
