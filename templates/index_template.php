<!-- Nav START -->
<?php include __DIR__ . '/includes/nav.php'; ?>
<div class="container mb-5">
    <!-- Breadcrumbs -->
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