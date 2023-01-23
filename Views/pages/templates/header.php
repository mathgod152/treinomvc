<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo self::titulo;?></title>
        <link href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="center">
        <div class="logo">
            <h2>Henrique's</h2>
        </div><!--logo-->
        <nav class="menu">
            <?php 
                foreach ($this->menuItems as $key => $value) {
                    echo '<a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'<a/>';
                }
            ?>
        </nav>               
    </div><!--center-->

    </body>
</html>