<?php

namespace rocketfellows\HUVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\HUVatFormatValidator\HUVatFormatValidator;

class HUVatFormatValidatorTest extends TestCase
{
    /**
     * @var HUVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new HUVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'HU12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'HU00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'HU11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'HU99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => '11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'HU123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'HU1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
