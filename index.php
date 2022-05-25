<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel=icon href="<?php bloginfo("stylesheet_directory"); ?>/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
<?php wp_head(); ?>
</head>
<body>

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

<script>
    let search_input = 'test';
    fetch('<?php bloginfo('home'); ?>/wp-json/wp/v2/search?search=' + search_input)
    .then(response => response.json())
    .then(data => console.log(data));

    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        console.log('dark-mod-on')
    }
</script>

<?php wp_footer(); ?>
</body>
</html>