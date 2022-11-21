<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    // phpinfo();
    
    $magic = 'A';
    echo $magic++;
    echo $magic;
    echo ++$magic;

    echo "<br><br>";

    print floor((0.1 + 0.7) * 10);
    // $add = bcadd(0.1, 0.7);

    echo "<br><br>";


    $x = 100;
    $y = &$x;
    $x = $x + 10;
    echo $y;

    $datas = ['awawa','ああ','test','いいい'];
    $array = [1, 2, [122, 200, 300]];
    [$a, $b, $c, $d] = $datas;
    [$x, , [$z1]] = $array;
    echo $c;
    echo "<br><br>";

    echo $z1;

    echo "<br><br>";

    print true ? 1 : (false ? 'OK' : 'NG');

    echo "<br><br>";
    $result = `ls -la`;
    print mb_convert_encoding($result, 'UTF-8', 'SJIS');

    echo "<br><br>";

    $data = [
      'apple' => 'りんご',
    ];
    print $data['apple'];
    print @$data['orange'];

  
  ?>
  
</body>
</html>