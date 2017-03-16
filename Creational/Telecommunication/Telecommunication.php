<?php

namespace DesignPatterns\Creational\Telecommunication;

/**
 * Class Telecommunication
 *
 * @author Phat Ngyen <phatnt2721989@gmail.com>
 * @package DesignPatterns\Creational\Telecommunication
 */
abstract class Telecommunication
{
  public abstract function createCalls($content): Call;
}
