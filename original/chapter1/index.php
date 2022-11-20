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


    // echo __LINE__;
    $bool = tRUe;
    echo $bool . PHP_EOL;

    $num = 0xFF;
    echo $num . PHP_EOL;
    echo gettype($num) . PHP_EOL;

    $separate = 1_234_567;
    echo  $separate. PHP_EOL;



    // phpinfo();

    // error_log('エラーるご');
    
    /*
        aaaa
        aawawawa
    //*/

  
  ?>

  <br>
  <?php

  $title  = 'サーバーサイドの学びや';
  $data1  = "サポートサイト\t「 $title 」へ". PHP_EOL;
  $data2  = 'サポートサイト\t「{$title}」へ';

  print $data1;
  print $data2;
  
  ?>

  <br>

  <?php
    
  
  ?>
  
</body>
</html>