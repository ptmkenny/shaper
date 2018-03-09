<?php

namespace Shaper\Tests\Validator;

use PHPUnit\Framework\TestCase;
use Shaper\Validator\InstanceofValidator;

/**
 * @package Shaper
 *
 * @coversDefaultClass \Shaper\Validator\InstanceofValidator
 */
class InstanceofValidatorTest extends TestCase {

  /**
   * @covers ::__construct
   */
  public function test__construct() {
    $sut = new InstanceofValidator(TestCase::class);
    $this->assertInstanceOf(InstanceofValidator::class, $sut);
  }

  /**
   * @covers ::__construct
   * @expectedException \TypeError
   */
  public function test__constructError() {
    new InstanceofValidator('IAmAFail');
  }

  /**
   * @covers ::isValid
   */
  public function testIsValid() {
    $sut = new InstanceofValidator(\stdClass::class);
    $this->assertTrue($sut->isValid(new \stdClass()));
  }

}