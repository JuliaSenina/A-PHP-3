<?php

declare(strict_types=1);
require_once('autoload.php');

$workers[] = new Worker('Арсений', 'Федоров', 40);
$workers[] = new Director('Феофан', 'Юлдашев', 500);
$workers[] = new Manager('Калиста', 'Андреева', 150);
$workers[] = new Programmer('Эсмиральда', 'Сметанина', 350);
$workers[] = new Tester('Алмаз', 'Марушин', 250);

$sumPay = 0;
$countWorker = count($workers);

echo 'Список сотрудников:' . PHP_EOL;

foreach ($workers as $item) {
  $sumPay += $item->getPay();
  echo $item->getGreeting();
  if (method_exists($item, 'getSkill')) {
    echo ', ' . $item->getSkill();
  }
  echo PHP_EOL;
}

echo PHP_EOL;
echo 'Общее количество сотрудников: ' . $countWorker . PHP_EOL;
echo 'Общая сумма зарплат: ' . $sumPay . ' попугаев' . PHP_EOL;
