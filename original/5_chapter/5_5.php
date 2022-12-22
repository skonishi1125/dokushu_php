<?php
  print('<br><br>');

  $data[] = date('Y/m/d H:i:s');
  $data[] = $_SERVER['SCRIPT_NAME'];
  $data[] = $_SERVER['HTTP_USER_AGENT'];
  $data[] = $_SERVER['HTTP_REFERER'];

  $file = @fopen('access.log', 'a') or die('ファイルをひらけませんでした');

  flock($file, LOCK_EX);
  fwrite($file, implode("\t", $data) . "\n");
  flock($file, LOCK_UN);
  fclose($file);
  print 'アクセスログを記録しました。';



?>