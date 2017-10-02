<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= get_the_title() . " | " . get_bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <?php wp_head(); ?>
</head>


<body>

<script>
  // Here are some things that JS needs
  window.themeLocation = '<?= get_template_directory_uri() ?>'
</script>
<?php

require get_template_directory() . '/partials/nav.php';

