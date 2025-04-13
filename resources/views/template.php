<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$this->e($title)?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/dist/build.css">
    <?=$this->section('home-CSS')?>
    <?=$this->section('chat-CSS')?>
</head>
<body>
<?=$this->insert('partials/header') ?>
<?=$this->section('content')?>
<?=$this->section('chat-script')?>
</body>
</html>
