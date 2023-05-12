<?php

class Tester extends Worker implements Skill {
  protected const POSITION = 'тестировщик';

  public function __construct(string $name, string $surname, int $pay) {
    parent::__construct($name, $surname, $pay);
  }

  public function getSkill(): string {
    return 'может заниматься разработкой приложения';
  }
}
