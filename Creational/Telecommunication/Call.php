<?php
/**
 * File Call.php
 * @package DesignPatterns
 * @user pn
 * @version 1.0
 */
namespace DesignPatterns\Creational\Telecommunication;

/**
 * Class Call
 *
 * @author Phat Ngyen <phatnt2721989@gmail.com>
 * @package DesignPatterns\Creational\Telecommunication
 */
abstract class Call
{
  /**
   * @var string
   */
  private $text;

  public function __construct(string $text)
  {
    $this->text = $text;
  }
}
