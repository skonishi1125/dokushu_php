<?php
  
  $str = "文字列の長さがわかんないよ";
  $str1 = "abcd";
  $data = "リオ,ともや,俊太,春お";

  print mb_strlen($str) . PHP_EOL;
  print mb_convert_case($str1, MB_CASE_UPPER);


  print_r(explode(',', $data));

  printf("%sは%sです。", "ハムちゃん", "動物");
  printf("<br><br>");

  // mail
  $to = 'skonishi1125@gmail.com';
  $subject = '独習PHPの件';
  $body = "こんにちは！mb_send_mail関数で送信しています。";
  $headers = "From : user@example.com\n";
  $headers .= "Cc : yamada@example.com\n";
  $headers .= "X-Mailer : PHP 8\n";

  // phpinfo();

  // if (mb_send_mail($to, $subject, $body, $headers)) {
  //   print 'メール送信できました';
  // } else {
  //   print '失敗しました...';
  // }

  printf("<br><br>");

  $data = ['Tennis', 'Swimming', 'Soccer', 'Baseball'];
  sort($data, SORT_STRING);
  print_r($data);
  printf("<br><br>");

  // 単位を照準で用意
  $keys = ['月', '火', '水', '木', '金', '土', '日'];
  // ソート対象
  $data = ['火', '日', '土', '木'];

  // usort(対象, 無名関数)
  usort($data, function($a, $b) use ($keys) {
    echo $a . $b . PHP_EOL;
    return array_search($a, $keys) <=> array_search($b, $keys);
  });
  print_r($data);


  printf("<br><br>");
  // 宇宙船演算子

  echo -10 <=> 7;
  printf("<br><br>");
  echo 7 <=> 7;
  printf("<br><br>");
  echo 10 <=> 7;
  printf("<br><br>");

  $a = 100;
  $b = 50;
  $compare = $a <=> $b;

  if ($compare < 0) {
    echo "a < b";
  } else if ($compare == 0) {
    echo "a = b";
  } else if ($compare > 0) {
    echo "a > b";
  }

  printf("<br><br>");

  printf('----------');
  printf("<br><br>");


  $array = array(1,0,3,2,7);
  usort ($array, function ($a, $b){
      // print_r($array);
      echo $a . " " .  $b;
      echo "<br>";
      echo $a <=> $b;
      printf("<br><br>");
      return $a <=> $b;
  });
  print_r($array);



?>