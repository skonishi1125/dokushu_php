
<?php

$x = 100;
$y = 0;

try {
  if ($y == 0) {
    throw new Exception('例外メッセージ', 999);
  }

} catch (Exception $e) {
  echo '例外を検出しました' . PHP_EOL;
  echo $e->getMessage();
  echo $e->getFile() . PHP_EOL;
  echo $e->getCode() . PHP_EOL;
}