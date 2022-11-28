<?php
  // 6.1.1
  function getTriangleArea(float $base, float $height) : float {
    return $base * $height / 2;
  }

  $area = getTriangleArea(100, 'x');
  print "三角形の面積は{$area}です\n";
  print('<br>');

  function showMessage($name) {
    print "こんにちは、{$name}さん";
    print('<br>');
  }

  showMessage("aoki");
  $a = showMessage('武');
  var_dump($a);



  // 無名関数
  function myArrayWalk(array $array, callable $func) : void {
    foreach ($array as $key => $value) {
      $func($value, $key);
    }
  }

  $result = 0;
  function total(float $value, int $key) : void {
    global $result;
    $result += $value;
  }

  $data = [100, 50, 10, 5];
  myArrayWalk($data, 'total');
  // print "合計値: {$result}";


?>