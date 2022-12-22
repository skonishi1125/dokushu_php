<?php
  // 無名関数
  function myArrayWalk(array $array, callable $func): void {
    foreach($array as $key => $value) {
      $func($value, $key);
    }
  }

  // $data = ['杉山', '永田', '杉沼', '和田', '土井'];
  // myArrayWalk($data, function($value, $key) {
  //   echo $key . ':' . $value . '<br>';
  // });

  $data = [100, 50, 10, 5];
  $result = 0;
  myArrayWalk($data, 
    function($value, $key) use(&$result) {
      $result += $value;
    }
  );

  echo '合計値: ' . $result . '<br>';
  print('<br><br>');

  // アロー関数
  $mul2 = fn($x) => $x * 2;
  echo $mul2(3);

  // ジェネレーター
  function myGen(): Generator {
    yield 'アイウエオ';
    yield 'かきくけこ';
    yield 'さしすせそ';
  }

  foreach (myGen() as $val) {
    print $val . '<br>';
  }


  
  print('<br><br>');


  // usort()
  // 単位を照準で用意
  $keys = ['月', '火', '水', '木', '金', '土', '日'];
  // ソート対象
  $data = ['水', '月' ,'日', '土', '火'];

  // usort(対象, 無名関数)
  usort($data, function($a, $b) use ($keys) {
    // 左辺が右辺より小さいなら-1, 等しいなら0, 左辺が右辺より大きいなら1を返す
    // $a , $bをキーに、$keysを検索し、登場位置で大小を比較している
    echo array_search($a, $keys) <=> array_search($b, $keys);
    echo '<br>';

    echo  '$dataの値は、$keysのキー番号でいうと' . array_search($a, $keys) . 'です。' . array_search($b, $keys);
    echo '<br><br>';

    return array_search($a, $keys) <=> array_search($b, $keys);
  });
  print_r($data);


?>