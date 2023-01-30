<?php
  // 6.1.1
  function getTriangleArea(float $base, float $height) : float {
    return $base * $height / 2;
  }

  // $area = getTriangleArea(100, 'x');
  // print "三角形の面積は{$area}です\n";
  // print('<br>');

  print __DIR__ . '/func1.php';


  function showMessage($name) {
    print "こんにちは、{$name}さん";
    print('<br>');
  }

  showMessage("aoki");
  $a = showMessage('武');
  var_dump($a);

  print('<br><br>');

  function increment(int &$num): int {
    $num++;
    return $num;
  }

  $value = 10;
  print increment($value) . '<br>';
  print $value . '<br>';

  print '<br>';

  function total(float ...$args): float {
    $result = 0;
    foreach ($args as $arg) {
      $result += $arg;
    }
    return $result;
  }

  print total(3, 10, -2, 1, 1, 5) . '<br>';

  function replaceContents(string $path, string ...$args): string {
    $data = file_get_contents($path);

    for ($i = 0; $i < count($args); $i++) {
      $data = str_replace('{'.($i).'}', $args[$i], $data);
    }

    return $data;
  }

  echo replaceContents('data.dat', '鈴木', '2022年11月30日');

  print('<br><br>');

  print getTriangleArea(...[10,5]);
  print('<br><br>');


  function product(float ...$args): float {
    $sum = 1;
    foreach ($args as $arg) {
      $sum *= $arg;
    }

    return $sum;
  }

  print(product(10,2,3));
  print('<br><br>');

  // 再帰関数
  function factorial(int $num): int {
    if ($num !== 0) {
      return $num * factorial($num - 1);
    }
    return 1;
  }
  print factorial(6);
  print('<br><br>');

  // 可変関数
  $name = 'getTriangleArea';
  $area = $name(8, 10);
  print $area;
  print('<br><br>');

  // 高階関数
  function myArrayWalk(array $array, callable $func) : void {
    foreach ($array as $key => $value) {
      $func($value, $key);
    }
  }

  function showItem(mixed $value, int | string $key) : void {
    print "{$key} : {$value}<br />";
  }

  $res = 0;
  function total2(float $value, int $key) : void {
    global $res;
    $res += $value;
  }

  $dt = [100, 50, 10, 5];
  myArrayWalk($dt, 'total2');
  print ($res . "<br><br>");

  $data = ['杉山', '永田', '杉沼', '和田', '土井aaa'];
  myArrayWalk($data, 'showItem');






  // 無名関数



?>