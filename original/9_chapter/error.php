<?php
  
  // エラーをキャッチする
  set_error_handler(function($err_no, $err_str, $err_file, $err_line) {
    if (!(error_reporting() & $err_no)) {
      return;
    }
    throw new ErrorException($err_str, $err_no, 0, $err_file, $err_line);
  });

  try {
    // 存在しない変数をecho
    echo $wawa;
  } catch (Exception $e) {
    echo "例外が発生しました。" . $e->getMessage();

  }

?>


<br>


<?php
  
  class Website {
    public static function getContents(string $url): string {
      if (!isset($url)) {
        throw new InvalidArgumentException('不正なURLです');
       }

    $data = @file_get_contents($url);

    if (!$data) {
      throw new RuntimeException('指定されたURLが見つかりません。');
    }
    return $data;
  }
}

  try {
    print Website::getContents('http://sonzaisinaiurldayo.com/');
  } catch (RuntimeException | InvalidArgumentException $e) {
    print "エラーメッセージ: {$e->getMessage()}";
  }

?>