<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel=icon href="<?php bloginfo("stylesheet_directory"); ?>/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
    <script> var bloginfo_url = '<?php bloginfo("url"); ?>'; </script>
<?php wp_head(); ?>
</head>
<body>

<div class="content-wrapper">
<div class="content-body">
    <div class="header">
        <div class="logo">

        </div>
        <div class="menu">

        </div>
    </div>
    <div class="search">

    </div>

    <div class="content">
        <div class="articles">

        </div>
        <div class="categories">

        </div>
    </div>

    <div class="footer">
        <div class="menu"></div>
        <div class="site-name"><?php bloginfo('name'); ?></div>
    </div>
</div>
</div>





<?php wp_footer(); ?>
</body>
</html>