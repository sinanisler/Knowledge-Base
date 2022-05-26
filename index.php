<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(is_front_page() || is_home()){ echo get_bloginfo('name');    } else{ echo wp_title('');    }?></title>
    <link rel=icon href="<?php bloginfo("stylesheet_directory"); ?>/img/favicon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
    <script> var bloginfo_url = '<?php bloginfo("url"); ?>'; </script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="container">
  <header class="d-flex flex-wrap justify-content-between align-items-center">
    <p class="col-md-4 mb-0 "> 
      <?php bloginfo("name");  ?>
    </p>


    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 ">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 ">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 ">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 ">About</a></li>
    </ul>
</header>
</div>

  






<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted"> <?php bloginfo("name");  echo ' - '.date('Y').' &copy;';  ?></p>


    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
  </footer>
</div>




<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>
