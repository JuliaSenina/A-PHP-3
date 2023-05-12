<?php

class Manager extends Worker implements Skill {
  protected const POSITION = 'менеджер';

  public function __construct(string $name, string $surname, int $pay) {
    parent::__construct($name, $surname, $pay);
  }

  public function getSkill(): string {
    return 'может вести вебинар для коллег';
  }
}
