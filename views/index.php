<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
    <body>

<?php foreach ($items as $item): ?>

    <h1><?=$item->title?></h1>
    <div><?=$item->text?></div>

<?php endforeach;?>

    </body>
</html>
