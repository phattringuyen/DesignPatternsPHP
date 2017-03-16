<?php
/**
 * File AxeSystem.php
 * @package DesignPatterns
 * @user pn
 * @version 1.0
 */
namespace DesignPatterns\Creational\Telecommunication;

class AxeSystem extends Telecommunication
{
  public function createCalls($content): Call
  {
    return new AxeCall($content);
  }
}
