<?php

class Director extends Worker implements Skill {
  protected const POSITION = 'директор';

  public function __construct(string $name, string $surname, int $pay) {
    parent::__construct($name, $surname, $pay);
  }

  public function getSkill(): string {
    return 'может управлять/руководить';
  }
}
