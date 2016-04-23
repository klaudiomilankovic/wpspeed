<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="icon/favicon.png" />

    <title>WP Speed</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <?php wp_nav_menu(array(
                    'theme_location'    =>  'primary',
                    'container'         =>  'nav'
        ))?>
    </header>