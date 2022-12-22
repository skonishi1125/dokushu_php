<?php
  function getTri($upper, $lower, $height): float {
    assert($upper > 0 && $lower > 0 && $height > 0, 'assertion comment');
    return ($upper + $lower) * $height / 2;
  }

  // echo getTri(1,2,0) . "<br>";

  try {
    print 1 / 0;
  // } catch (Exception $e) {
  } catch (Error $e) {
    echo $e->getMessage();
  }

  

  
?>