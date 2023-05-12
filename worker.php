<?php

class Worker extends Person {
  protected const POSITION = 'сотрудник';
  protected int $pay;

  public function __construct(string $name, string $surname, int $pay) {
    $this->pay = $pay;
    parent::__construct($name, $surname);
  }

  public function setPay($val): void {
    $this->pay = $val;
  }

  public function getPay(): int {
    return $this->pay;
  }

  public function getGreeting(): string {
    return $this->name . ' ' . $this->surname . ', позиция: ' . $this::POSITION . ', зарплата: ' . $this->pay . ' попугаев';
  }
}