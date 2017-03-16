<?php
/**
 * File ImsSystem.php
 * @package DesignPatterns
 * @user pn
 * @version 1.0
 */
namespace DesignPatterns\Creational\Telecommunication;

class ImsSystem extends Telecommunication
{
  public function createCalls($content): Call
  {
    return new ImsCall($content);
  }
}
