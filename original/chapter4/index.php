<?php
  
  $rank = '甲';
  $result = match($rank) {
    '甲' => 'いいね',
    '乙' => '普通だね',
    '丙' => 'よくないね',
    default => 'うーん'
  };
  print $result;

  echo "<br><br>";

  for ($i = 1, $j = 1; $result = $i * $j, $i < 6; $i++, $j++) {
    print "{$i} * {$j} = {$result} <br>";
  }

  echo "<br><br>";

  error_log('あわわ');
?>

<?php for ($i = 1; $i < 6; $i++) { ?>
  <p>おはよー！</p>
<?php }  ?>

<?php

  for ($i = 1; $i < 6; $i++) {
    echo "わわわ<br>";
    goto end;
  }

  end :
  printf('end先です');


?>