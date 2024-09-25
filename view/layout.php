<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <base href="/">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id ="viewport" name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title><?= isset($meta_title) ? $meta_title : 'Default title' ?></title>
    <meta name="description" content="<?= isset($meta_desc) ? $meta_desc : 'Default description' ?>">
    <meta name="author" content="Efrits">
    <meta name="theme-color" content="black"/>

    <link rel="stylesheet" href="/public/css/style.css">
  </head>
  <body>
    <?php insertContentView($params); ?>
  </body>
</html>