<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(is_front_page() || is_home()){ echo get_bloginfo('name');    } else{ echo wp_title('');    }?></title>
    <link rel=icon href="<?php bloginfo("stylesheet_directory"); ?>/img/favicon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css?<?php echo rand(); ?>">
    <script> var bloginfo_url = '<?php bloginfo("url"); ?>'; </script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="header container">
  <header class="d-flex flex-wrap justify-content-between align-items-center">
    <p class="col-md-4 mb-0 header-logo-name"> 
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

<div class="search-wrapper">
<div class="search container">
<section class="d-flex flex-wrap justify-content-between align-items-center">

    <div class="display-6 container-fluid text-center s">Articles & Solutions</div>
    <div class="container-fluid text-center p-2 pp">Start searching for finding articles and solutions.</div>
    <div class="container-fluid p-4 ">
      <input type="text" class="form-control search-index-input translate-middle" 
      aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Start Searching...">
    </div>

</section>
</div>
</div>


<div class="content-wrapper">
<div class="content container">

<div class="display-6 container-fluid text-center s">Categories and Articles</div>







</div>
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
