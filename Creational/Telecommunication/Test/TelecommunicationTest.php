<?php
/**
 * File TelecommunicationTest.php
 * @package DesignPatterns
 * @user pn
 * @version 1.0
 */
namespace DesignPatterns\Creational\Telecommunication\Test;

use DesignPatterns\Creational\Telecommunication\AxeSystem;
use DesignPatterns\Creational\Telecommunication\AxeCall;
use DesignPatterns\Creational\Telecommunication\ImsSystem;
use DesignPatterns\Creational\Telecommunication\ImsCall;
use PHPUnit\Framework\TestCase;

class TelecommunicationTest extends TestCase
{
  public function testCanCsCall()
  {
    $axe = new AxeSystem();
    $text = $axe->createCalls('abcd');

    $this->assertInstanceOf(AxeCall::class, $text);
  }

  public function testCanIpCall()
  {
    $ims = new ImsSystem();
    $text = $ims->createCalls('aaa');

    $this->assertInstanceOf(ImsCall::class, $text);
  }
}

