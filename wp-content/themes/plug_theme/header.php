<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta content='true' name='HandheldFriendly'/>
    <meta content='width' name='MobileOptimized'/>
    <meta content='yes' name='apple-mobile-web-app-capable'/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body>

<?php if ( is_front_page() ) { ?>
    <div class="plug">
<?php } else { ?>
    <div class="inner-page">
<?php } ?>

