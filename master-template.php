<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google tag (gtag.js) -->
    <!--
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBE5ZKC2K1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GBE5ZKC2K1'); 
</script>
-->

    <title><?php echo $page_title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- More JavaScript functionalities -->
    <script src="<?php echo BASE_URL; ?>script.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fed40285ab.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/favicon_ER.png">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

    <!-- Plugin CSS -->
    <!--<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/vendor/font-awesome/css/all.min.css">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!--<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/vendor/tiny-slider/tiny-slider.css">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">


    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">

</head>

<body>
    <!-- MAIN CONTENT START -->
    <!-- Nav START -->
    <?php include __DIR__ . '/includes/nav.php'; ?>
    <div class="container mb-5">
        <!-- Include the breadcrumbs file -->
        <?php include __DIR__ . '/includes/breadcrumbs.php'; ?>
        <?php generate_breadcrumbs(); ?>

        <div class="row">
            <div class="col-lg-9 order-1 order-lg-1">
                <!-- Page heading -->
                <h1><?php echo $page_heading; ?></h1>

                <?php
                // Include image section if the $image_url and $image_alt are set
                if (isset($image_url) && isset($image_alt)) {
                    include __DIR__ . '/includes/image-template.php';
                }


                // Main content of page 
                echo $page_content;


                // Include TOC if $show_toc is set to true
                if (isset($show_toc) && $show_toc === true) {
                    include __DIR__ . '/includes/table-of-contents.php';
                }


                // Include content sections 
                include __DIR__ . '/includes/content-section.php';


                // Include "see also" section only if the $see_also_links array is set and not empty
                if (isset($see_also_links) && !empty($see_also_links)) {
                    include __DIR__ . '/includes/see-also-template.php';
                }
                ?>

            </div>
            <div class="col-lg-3 order-2 order-lg-2 d-lg-block my-5">
                <?php include __DIR__ . '/includes/sidebar.php'; ?>
            </div>
        </div>
    </div>
    <!-- Footer START -->
    <?php include __DIR__ . '/includes/footer.php'; ?>

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <!--<script src="<?php echo BASE_URL; ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <!--<script src="<?php echo BASE_URL; ?>assets/vendor/tiny-slider/tiny-slider.js"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>

    <!-- Template Functions -->
    <script src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>
</body>

</html>