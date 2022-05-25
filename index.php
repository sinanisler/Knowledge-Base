<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(is_front_page() || is_home()){ echo get_bloginfo('name');    } else{ echo wp_title('');    }?></title>
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
            logo here 
        </div>
        <div class="menu">
            menu
        </div>
    </div>
    <div class="search">
        search
        <input type="text">
        <div id="search-results">


        </div>

    </div>

    <div class="content">
        <div class="articles">
            categories and articles
        </div>
        <div class="sidebar-categories">
            sidebar last articles and categories
            widget support ? do we need it ?
        </div>
    </div>

    <div class="footer">
        <div class="menu">footer menu</div>
        <div class="site-name"><?php bloginfo('name'); ?></div>
    </div>
</div>
</div>



<?php wp_footer(); ?>
</body>
</html>
