<?php

declare(strict_types=1);

namespace Cinema;

class Movie
{
  private string $_title;
  private \Cinema\Filmmaker $_filmmaker;
  private ?\ArrayObject $_actors;

  public function __construct(string $title, \Cinema\Filmmaker $filmmaker): void
  {
    $this->_title = $title;
    $this->_filmmaker = $filmmaker;
  }

  public function getTitle(): string
  {
    return $this->_title;
  }

  public function setTitle(string $title): void
  {
    $this->_title = $title;
  }

  public function getFilmmaker(): \Cinema\Filmmaker
  {
    // return $this->_filmmaker->getFname() $this->_filmmaker->getFilmmaker();
    return $this->_filmmaker;
  }

  public function addActor(\Cinema\Actor $actor): void
  {
    $this->_actors->append($actor);
  }

  public function getActors(): \ArrayObject
  {
    $actors_array = new \ArrayObject();
    foreach ($this->_actors as $actor) {
      $actors_array->append(new \Cinema\Filmmaker($actor->getFname(), $actor->getLname()));
    }
    return $actors_array;
  }

  public function printMovie(): string
  {
    $movieDescription = 'Movie ' . $this->_title . PHP_EOL
      . 'Film maker : ' . $this->_filmmaker->getFname() . $this->_filmmaker->getFname() . PHP_EOL
      . 'Actors:' . PHP_EOL
      . $this->getActors();
    return $movieDescription;
  }
}
