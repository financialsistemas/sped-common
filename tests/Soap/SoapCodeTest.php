<?php

namespace NFePHPv5\Common\Tests\Soap;

use NFePHPv5\Common\Soap\SoapCode;

class SoapCodeTest extends \PHPUnit\Framework\TestCase
{
    public function testInfo()
    {
        $expected = [
            'level' => 'Client ERROR',
            'description' => 'Não encontrado',
            'means' => 'O recurso requisitado não foi encontrado, mas pode ser disponibilizado novamente no futuro. As solicitações subsequentes pelo cliente são permitidas'
        ];
        $actual = SoapCode::info(404);
        $this->assertEquals($expected, $actual);
    }
}
