<?php
  
  $rank = '甲';
  $result = match($rank) {
    '甲' => 'いいね',
    '乙' => '普通だね',
    '丙' => 'よくないね',
    default => 'うーん'
  };
  print $result;
  

?>