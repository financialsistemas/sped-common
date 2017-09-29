<?php

namespace NFePHPv5\Common\Tests\Soap;

use NFePHPv5\Common\Soap\SoapFake;
use NFePHPv5\Common\Certificate;

class SoapFakeTest extends \PHPUnit\Framework\TestCase
{
    const TEST_PFX_FILE = '/../fixtures/certs/certificado_teste.pfx';

    /**
     * @covers SoapBase::__construct
     */
    public function testInstanciate()
    {
        $soap = new SoapFake();
    }

    public function testDisableSecurity()
    {
        $soap = new SoapFake();
        $actual = $soap->disableSecurity();
        $this->assertFalse($actual);
    }

    public function testLoadCA()
    {
        $this->assertTrue(true);
    }

    public function testSetTemporaryFolder()
    {
        $this->assertTrue(true);
    }
    public function testSetDebugMode()
    {
        $this->assertTrue(true);
    }
    public function testLoadCertificate()
    {
        $this->assertTrue(true);
    }
    public function testLoadLogger()
    {
        $this->assertTrue(true);
    }
    public function testTimeout()
    {
        $this->assertTrue(true);
    }
    public function testProtocol()
    {
        $this->assertTrue(true);
    }
    public function testSetSoapPrefix()
    {
        $this->assertTrue(true);
    }
    public function testProxy()
    {
        $this->assertTrue(true);
    }
    public function testSaveTemporarilyKeyFiles()
    {
        $this->assertTrue(true);
    }
    public function testRemoveTemporarilyFiles()
    {
        $this->assertTrue(true);
    }
    public function testSaveDebugFiles()
    {
        $this->assertTrue(true);
    }

    public function testSend()
    {
        $this->assertTrue(true);
    }

    public function testDisableCertValidation()
    {
        $certificate = Certificate::readPfx(file_get_contents(__DIR__ . self::TEST_PFX_FILE), 'associacao');
        $soap = new SoapFake();
        $soap->disableCertValidation(true);
        $soap->loadCertificate($certificate);
    }

    /**
     * @expectedException NFePHPv5\Common\Exception\RuntimeException
     */
    public function testDisableCertValidationFail()
    {
        $certificate = Certificate::readPfx(file_get_contents(__DIR__ . self::TEST_PFX_FILE), 'associacao');
        $soap = new SoapFake($certificate);
    }
}
