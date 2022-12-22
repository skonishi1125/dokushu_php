<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <?php
    
    $dir = new DirectoryIterator('./');
    foreach ($dir as $file) {
      if ($file->isFile()) {
        echo $file->getFileName() . ' ' . $file->getSize() . '<br>';
      }
    }
  
  ?>
  
</body>
</html>

<?php
  require '../vendor/autoload.php';

  $cli = new GuzzleHttp\Client([
    'base_uri' => 'https://wings.msn.to/',
    // 'base_uri' => 'https://kir-thread.site/',
  ]);

  $res = $cli->request('get', '/tmp/sample.txt');
  // $res = $cli->request('get', '');
  print $res->getBody();

  print '<br><br>';

  $res2 = $cli->post('/tmp/post.php', [
    'form_params' => [
      'name' => '佐々木太郎',
    ]
  ]);

  print $res2->getBody();
  print '<br><br>';

  $cli = new GuzzleHttp\Client([
    'base_uri' => 'https://httpbin.org/',
  ]);

  $res = $cli->get('get');
  $obj = json_decode($res->getBody());
  print_r($obj);

  print '<br><br>';
  
  print $obj->url;


?>