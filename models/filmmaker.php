<?php

declare(strict_types=1);

namespace Cinema;

class Filmmaker
{
  private string $_fname;
  private string $_lname;

  public function __construct(string $fname, string $lname)
  {
    $this->_fname = $fname;
    $this->_lname = $lname;
  }

  public function getFname(): string
  {
    return $this->_fname;
  }

  public function getLname(): string
  {
    return $this->_lname;
  }

  public function setFname(string $fname): void
  {
    $this->_fname = $fname;
  }

  public function setLname(string $lname): void
  {
    $this->_lname = $lname;
  }
}
