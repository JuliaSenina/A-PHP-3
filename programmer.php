<?php

class Programmer extends Worker implements Skill {
  protected const POSITION = 'программист';

  public function __construct(string $name, string $surname, int $pay) {
    parent::__construct($name, $surname, $pay);
  }

  public function getSkill(): string {
    return 'может заниматься разработкой приложения';
  }
}
