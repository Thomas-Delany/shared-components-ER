<?php
require_once CENTRAL_PATH . 'includes/functions.php';

$page_data = load_json(__DIR__ . '/../../data/pages/page-type-2.json');

// JSON data includes
$pageSections = $page_data['sections'];

// Render sections
$section1 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-1');
$section2 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-2');
$section3 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-3');
$section4 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-4');
?>

<!-- METHOD PAGE -->
<!DOCTYPE html>
<html lang="en">

<head>
    <?php foreach ($analyticsSection as $section): ?>
        <!-- Agnostic Google Analytics script -->
        <script async src="<?= htmlspecialchars($section['script']['src']) ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', '<?= htmlspecialchars($section['script']['gtag_config']) ?>');
        </script>
    <?php endforeach; ?>

    <title>Method English Reservoir</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">

    <!-- Dark mode -->
    <script src="<?php echo BASE_URL; ?>script.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/favicon_ER.png">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

    <!-- Plugins CSS -->

    <!--<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



    <!--<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">



    <!--<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">


    <!--<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/choices.js/10.1.0/styles/choices.min.css">


    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">

</head>

<body>
    <?php include CENTRAL_PATH . 'includes/nav.php'; ?>
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Main Banner START -->
        <section class="position-relative my-5 pb-0 pb-md-5 overflow-hidden">

            <!-- Svg decoration -->
            <figure class="position-absolute  top-50 end-0 translate-middle-y me-n8 d-none d-sm-block">
                <svg class="fill-success opacity-1" width="634.1px" height="776px">
                    <path d="M161.4,200.8c-9,40.1-7.5,82.5-20.8,121.6c-17.5,52.8-58.5,93.8-92,138.1c-33,44.8-59.9,101.8-42.5,154.6
				c23.1,70.2,109,94.8,181.6,108.4c77.4,14.6,154.7,29.2,232.5,43.8c41,8,85.8,15.1,123.1-4.7c47.2-25,63.7-83,72.2-135.3
				C650.5,419.6,675-127.8,306.2,27.3C234,57.5,178.4,124.5,161.4,200.8z" />
                </svg>
            </figure>

            <!-- Svg decoration -->
            <figure class="position-absolute top-50 end-0 translate-middle-y me-n4 mt-n8 d-none d-lg-block">
                <svg class="fill-dark" width="349px" height="188.4px">
                    <path
                        d="M64.5,85.4c-0.2-0.3,0.2-0.8,0.6-0.6c3.2,1.6,5.7,4.4,4.6,8c-1,3.2-4.1,5.2-7.3,4.1c-2.9-0.8-5.3-3.9-4.5-7.1 C58.6,87.2,61.6,84.6,64.5,85.4z M63.5,95.3c2.3,0.4,4.3-1.5,4.6-3.7c0.4-2.3-1.2-3.9-2.7-5.3c-0.1,0.3-0.3,0.5-0.6,0.6 c-2.2,0.2-4.4,1.2-5,3.5C59.1,92.6,61.2,94.9,63.5,95.3z" />
                    <path
                        d="M79.1,99.4c1.9-1.6,5.2-1.9,6.8,0.4c0.1,0.2,0,0.4-0.2,0.7c0.8,1.2,0.9,3,0.2,4.4c-1.1,2.6-4.2,2.8-6.4,1.3 C77.6,104.3,77,101.2,79.1,99.4z M80.6,104.8c1.4,1.1,3.3,0.9,4.1-0.7c0.7-1.4,0.4-3-0.8-4.1c-1.2-0.5-2.6-0.4-3.7,0.4 C78.7,101.6,79.2,103.7,80.6,104.8z" />
                    <path
                        d="M94.9,116.6c0.9-2.2,3.8-3.4,5.8-2c0.1,0,0.2,0.2,0.2,0.3c1.3,0.9,2,2.7,1.5,4.4c-0.6,2.3-2.9,3.2-5,2.5 C95.2,121,93.8,118.7,94.9,116.6z M98,120.3c2.9,0.8,4.1-2.7,2.4-4.6c-0.2,0.1-0.3,0.1-0.4,0c-1.4-0.5-3.3,0.1-3.9,1.5 C95.7,118.7,96.8,120,98,120.3z" />
                    <path
                        d="M15.6,62.5c7.8-3.3,16.6-3.9,24.8-2.6C56.3,62.1,69.5,71.3,81.2,82c0.1-0.4,0.5-0.7,0.9-0.7 c8-1,15.9,0.1,23.7,2.1c3.7,1,13,2.1,14.9,6.5c3.5,8-13.9,12.1-19.7,12.3c4.6,4.8,9.1,9.6,13.9,14.1c4.8,4.5,9.8,8.7,15.8,10.8 c1.9-2.2,3.3-6.7,7-6.1c2.9,0.5,4.9,4.6,5.8,7.6c2.6,0,5.2,0.3,7.9,1c0.7,0.2,0.9,0.8,0.8,1.4c-1.5,9.2-5.5,29.6-18.4,27.3 c-7.7-1.4-15.8-6.2-22.5-10c-7-3.9-13.7-8.6-19.7-14.1c0.2,5.9,0.9,11.8,2.1,17.6c0.6,3.5,3.2,8.6,0,11.4 c-7.9,6.8-21.5-14.6-24.5-19.6c-4-6.5-7.1-13.5-9.9-20.4c-1.5-3.5-3.4-7.9-3.7-12.2c-0.4,0.3-0.8,0.3-1.3,0.2 c-11.1-5.5-21.7-11.9-31.8-19.1c-5.3-3.7-18-10.7-19.1-17.5C2.7,68.2,11,64.6,15.6,62.5z M37.3,62.3c-0.1,0-0.2-0.2-0.2-0.3 c-2.9-0.2-6-0.2-8.9,0.1c-3,0.3-6.4,0.8-9.7,1.9c4.1,7,10.2,11.4,17.2,15.3c2.8,1.5,4.2,2,7.5,2.6c5.3,2.3,7.6-0.4,6.9-7.8 c-1-1.1-2.1-2.4-3-3.6C43.8,67.4,40.4,65.1,37.3,62.3z M112.7,97c2.5-1.4,7.2-4.3,4.2-7.9c-1.2-1.5-6-2.2-7.7-2.7 c-8.7-2.7-17.4-4.1-26.5-3.3c3,2.8,5.9,5.8,8.7,8.5c3,3.1,5.9,6.3,8.9,9.4c0,0,0-0.1,0.2-0.1C104.6,100.2,108.7,99.1,112.7,97z  M141.5,126.8c-0.6-1-1.6-3-2.7-3.6c-1.2,0.1-2.2,0.1-3.4,0.2c-0.2,0.4-0.4,0.6-0.8,0.9c-0.3,0.5-0.6,1-0.8,1.5 c-0.3,0.6-0.8,1.2-1.2,1.8c0.9,0.3,2,0.5,3.1,0.7c2.3,0.4,4.5,0.4,6.8,0.4C142.2,128,141.8,127.3,141.5,126.8z M21.6,88.1 c10.8,8.1,22.3,15,34.2,21.2l0.1,0c0-1.1,0.4-2.3,0.8-3.4c2.1-5.1,5.5-4.4,9.9-2.3c8.6,3.8,16.4,8.6,23.5,14.6 c0.6,0.4-0.2,1.4-0.9,1.1c-4.8-3-9.5-6-14.4-8.8c-1.9-1.1-4.6-3.3-6.8-3.6c-0.9-0.8-1.8-1.2-2.7-1.3c-0.9-0.5-2-0.7-3-0.5 c-1.8,0.2-3.6,1.6-4.1,3.5c-0.4,1.5-0.3,2.8,0,4.3c0.1,0.3,0.3,0.6,0.3,0.9c0.1,0.2,0.2,0.5,0.1,0.6c0,0,0,0.1,0.1,0.2 c0.1,0.7,0.3,1.4,0.8,1.9c0.6,4.6,4,10,5.9,14.1c2.1,4.4,4.2,8.6,6.8,12.7c2.4,3.7,5,7.2,8,10.5c0.2,0.3,0.4,0.7,0.6,0.9 c0.2,0.2,0.3,0.4,0.6,0.6c1.2,1.9,2.7,3.6,5,4.9c2.1,1.3,4.2,0.7,5.6-0.6c-0.2-1.3-0.3-2.5-0.4-3.8c-0.5-1.3-0.5-3.4-0.4-4.3 c-0.2-0.9-0.4-1.7-0.5-1.9c-1.6-9.7-2-19.4-1.6-29.3c0.1-1.5,2.4-1.6,2.4,0c-0.2,3.9-0.1,7.8-0.1,11.7c9.8,7,19.5,13.8,30.4,18.8 c2.8,1.3,8.1,4.8,11.5,4.6c0.1,0,0.1,0,0.2-0.1c-5.1-0.7-3.7-7.6-5.5-10.8c-0.4-0.7,0.2-1.4,0.9-1.2c0.1-0.3,0.4-0.6,0.8-0.5 c2.9,0.4,5.9,1,8.9,1.7c0.3,0.1,0.3,0.6,0,0.6c-2.9-0.2-5.9-0.5-8.8-0.8c1.1,2.7,0.3,7.1,2.9,8.9c4.3,3.2,5.5-5.9,6.4-8.1 c0.3-0.5,1-0.1,0.9,0.4c-0.9,2.6-0.9,7.6-3.6,9.4c4-1.3,7-4.8,8.8-8.5c1.4-3,3.4-7.1,3.7-10.4c0.4-4.6,0.7-5.2-5.4-5.3 c-10.1-0.3-16.4-1.5-24.7-7.9c-9.7-7.5-17.8-17-26.3-25.9C78.6,81.8,61.3,65.7,40.4,62.5c5,3.7,12,8.1,12.7,14.3 c0.4,4.1-2.2,7.1-6.2,7.9c-6.2,1.3-12.9-3.8-17.7-7c-5.1-3.4-9.6-7.5-11.6-13.3c-2.7,1-5.2,2.2-7,4C1.7,76.5,16.7,84.3,21.6,88.1z " />
                    <path
                        d="M148.9,144.4c0.2-0.4,0.7-0.1,0.5,0.3c-4.3,9.4,10.7,17.5,17.1,20.8c8.2,4.2,18.1,6.8,27.3,4.5 c2.9-0.8,6-2.4,8.5-4.4c-2.6-1.9-5.1-3.8-7.3-6c-7.3-7.3-13.9-24.1-0.1-28.5c12.3-3.9,21.1,9.9,18.7,20.7 c-1.2,5.4-4.1,9.7-7.9,13.1c1.2,0.8,2.5,1.4,3.6,2c12.9,6.4,27.7,11,41.9,12.6c31.3,3.4,61.4-14.2,67.6-46.4 c3-15.8-0.4-31.6-8.2-45.4c-5.8-10.3-13.2-19.9-16.2-31.5C287,25.6,318,7.6,343.8,3.5c0.7-0.1,1,1,0.3,1.1 c-20.7,3.3-43.8,13.4-48.7,36.3c-4.2,19.9,12.3,35.8,20.2,52.3c14.6,30.3,3.8,68.9-27.6,83.5c-14.9,6.9-32,6.8-47.9,3.3 c-11.8-2.5-25.6-6.6-36.4-13.6c-6.4,4.5-14.8,6.4-22.8,5.2C171.5,170.2,142.1,158.3,148.9,144.4z M205.2,133.2 c-6-3.4-14.3-1.1-16.4,5.8c-1.4,4.8,0.9,10.3,3.5,14.3c3.1,4.6,7.3,7.9,12,10.7C213.5,155.5,218.3,140.8,205.2,133.2z" />
                </svg>
            </figure>

            <div class="container">
                <div class="row">
                    <!-- Title -->
                    <?php foreach ($section1 as $data): ?>
                        <div class="col-lg-8 mb-2 mb-lg-4 position-relative">

                            <!-- Svg decoration -->
                            <figure class="position-absolute top-0 start-0 translate-middle ms-n5 d-none d-md-block">
                                <svg class="fill-orange" width="114px" height="140px" viewBox="0 0 114 140">
                                    <path
                                        d="M67.6,6.2c0.8-0.5,7.2,7.6,14.2,18c7.1,10.2,14.7,22.7,18.9,30c8.3,14.7,13.2,27.5,11.4,28.5 c-1.9,1-9.6-10.2-17.9-24.9c-4.2-7.3-11.1-20.1-16.9-31C71.4,15.9,66.7,6.7,67.6,6.2z" />
                                    <path
                                        d="M85,89c-0.8,0.7-4.6-2.2-9.2-5.5c-4.6-3.2-10.1-6.8-13.1-8.8c-6.1-4.2-10.9-8.2-10-10.2 c0.8-1.8,7.5-0.6,14.2,3.8c3.4,2.1,8.7,6.7,12.6,11.2C83.3,84,85.7,88.3,85,89z" />
                                    <path
                                        d="M73.1,114.7c0,1.1-8.5,1.8-18.8,2.1c-10.2,0.3-22.2-0.2-29.1-0.8c-13.8-1.2-24.7-4.4-24.4-6.4 c0.3-2.1,11.5-2.3,25.1-1.1c6.8,0.6,18.5,1.9,28.6,3C64.7,112.7,73.1,113.8,73.1,114.7z" />
                                </svg>
                            </figure>
                            <!-- Title -->
                            <h1 class="display-4 mb-3 mb-lg-0"><?= htmlspecialchars($data['title']) ?></h1>
                        </div>

                        <!-- Info and buttons -->
                        <div class="col-lg-5 mb-4 mb-lg-0">
                            <p class="mb-4 fs-4"><?= htmlspecialchars($data['paragraph']) ?></p>
                        </div>

                        <!-- Image -->
                        <div class="col-lg-7">
                            <div class="position-relative">
                                <!-- Image -->
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="<?php echo BASE_URL; ?>assets/images/element/10.svg" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="position-relative mt-5 pt-0 pt-lg-5">
            <div class="container">
                <!-- Steps START -->
                <?php foreach ($section2 as $data): ?>
                    <div class="row g-lg-5 mt-3">
                        <!-- Item -->
                        <div class="col-sm-4 col-lg-4 text-center position-relative">
                            <!-- SVG decoration -->
                            <figure class="position-absolute top-0 start-100 translate-middle d-none d-lg-block">
                                <svg width="182.9px" height="86px" viewBox="0 0 182.9 86">
                                    <path class="fill-secondary"
                                        d="M127.3,19.8c0.9,0.7,1.8,1.5,2.8,2c9.3,4.5,17.1,11.1,24.4,18.3c6.5,6.4,11.9,13.7,15.8,22 c1.5,3.2,2.7,6.6,4.2,10.2c2.5-4.2,4.1-8.9,8.6-11.5c-2.2,3.9-4.7,7.7-6.5,11.9c-1.7,4.1-2.6,8.6-3.9,13.4 c-4.1-6.1-7-13.2-14.9-15.6c3.8-1.4,6.2,0.5,14.1,10.3c1-2.2,1.8-4.1,1.1-6.5c-3.8-13.6-11.4-24.8-21.4-34.6 c-5.8-5.7-12.3-10.6-19.2-14.9c-7-4.3-14.4-8-22.2-10.9c-10.7-3.8-21.5-6.6-32.8-7.7C63.9,5,50.7,5.9,38,10.4 c-14.1,5-26,13.2-35,25.4c-0.5,0.7-1.2,1.4-1.8,2.1C1.1,38,0.8,38,0.4,38.1c-0.9-0.9-0.2-1.7,0.3-2.4c4.7-6.7,10.5-12.4,17.2-17.1 C31.7,8.9,47.2,4.7,63.8,4C77.1,3.5,90,5.8,102.7,9.3c2.2,0.6,4.3,1.8,6.5,2.6c0.9,0.4,2,0.5,2.9,0.7 C117.1,15,122.2,17.4,127.3,19.8z" />
                                </svg>
                            </figure>

                            <div class="px-4">
                                <!-- Image -->
                                <div class="icon-xxl bg-body shadow mx-auto rounded-circle mb-3">
                                    <img src="<?php echo BASE_URL; ?>assets/images/element/21.svg" alt="">
                                </div>
                                <!-- Title -->
                                <h3><?= htmlspecialchars($data['titles'][0]) ?></h3>
                                <p class="lead"><?= htmlspecialchars($data['paragraphs'][0]) ?>
                                </p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col-sm-4 col-lg-4 text-center pt-0 pt-lg-5 position-relative">
                            <!-- SVG decoration -->
                            <figure class="position-absolute top-100 start-100 translate-middle mt-n3 d-none d-lg-block">
                                <svg width="182.9px" height="86px" viewBox="0 0 182.9 86">
                                    <path class="fill-secondary"
                                        d="M127.3,70.2c0.9-0.7,1.8-1.5,2.8-2c9.3-4.5,17.1-11.1,24.4-18.3c6.5-6.4,11.9-13.7,15.8-22 c1.5-3.2,2.7-6.6,4.2-10.2c2.5,4.2,4.1,8.9,8.6,11.5c-2.2-3.9-4.7-7.7-6.5-11.9c-1.7-4.1-2.6-8.6-3.9-13.4 c-4.1,6.1-7,13.2-14.9,15.6c3.8,1.4,6.2-0.5,14.1-10.3c1,2.2,1.8,4.1,1.1,6.5c-3.8,13.6-11.4,24.8-21.4,34.6 c-5.8,5.7-12.3,10.6-19.2,14.9c-7,4.3-14.4,8-22.2,10.9c-10.7,3.8-21.5,6.6-32.8,7.7C63.9,85,50.7,84.1,38,79.6 c-14.1-5-26-13.2-35-25.4c-0.5-0.7-1.2-1.4-1.8-2.1c-0.1-0.1-0.4-0.1-0.8-0.2c-0.9,0.9-0.2,1.7,0.3,2.4c4.7,6.7,10.5,12.4,17.2,17.1 c13.7,9.7,29.2,14,45.9,14.6c13.3,0.5,26.2-1.8,38.8-5.3c2.2-0.6,4.3-1.8,6.5-2.6c0.9-0.4,2-0.5,2.9-0.7 C117.1,74.9,122.2,72.6,127.3,70.2z" />
                                </svg>
                            </figure>

                            <div class="px-4">
                                <!-- Image -->
                                <div class="icon-xxl bg-body shadow mx-auto rounded-circle mb-3">
                                    <img src="<?php echo BASE_URL; ?>assets/images/element/account.svg" alt="">
                                </div>
                                <!-- Title -->
                                <h3><?= htmlspecialchars($data['titles'][1]) ?></h3>
                                <p class="lead"><?= htmlspecialchars($data['paragraphs'][1]) ?>
                                </p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col-sm-4 col-lg-4 text-center">
                            <div class="px-4">
                                <!-- Image -->
                                <div class="icon-xxl bg-body shadow mx-auto rounded-circle mb-3">
                                    <img src="<?php echo BASE_URL; ?>assets/images/element/23.svg" alt="">
                                </div>
                                <!-- Title -->
                                <h3><?= htmlspecialchars($data['titles'][2]) ?></h3>
                                <p class="lead"><?= htmlspecialchars($data['paragraphs'][2]) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Steps END -->

                <!-- Title -->
                <?php foreach ($section3 as $data): ?>
                    <div class="row">
                        <!-- Title -->
                        <div class="col-md-6 my-5">
                            <?php foreach ($data['titles'] as $index => $title): ?>
                                <h3 class="mb-3 mt-5"><?= htmlspecialchars($title['header']) ?></h3>

                                <p class="lead"><?= htmlspecialchars($data['paragraphs'][$index]) ?></p>

                            <?php endforeach; ?>
                        </div>
                        <div class="col-md-5 d-flex justify-content-center align-items-center">
                            <img src="<?php echo BASE_URL; ?>assets/images/element/category-1.svg" class="img-fluid" alt="<?= htmlspecialchars($data['alt']) ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>


        <section class="position-relative overflow-hidden py-0 mb-5 pt-xl-5">
            <!-- Svg decoration -->
            <figure class="position-absolute top-0 end-0 me-n5 mt-5">
                <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                    <path class="fill-purple opacity-2"
                        d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z">
                    </path>
                </svg>
            </figure>

            <!-- Svg decoration -->
            <figure class="position-absolute bottom-0 start-0 me-5 d-none d-lg-block">
                <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                    <path class="fill-warning opacity-3"
                        d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z">
                    </path>
                </svg>
            </figure>

            <div class="container position-relative py-5"
                style="background-image:url(assets/images/element/map.svg); background-position: center left; background-size: cover;">
                <!-- Top country START -->
                <div class="row g-4">
                    <div class="col-xl-3 d-flex justify-content-center align-items-center">
                        <h2 class="h1 mb-0">Courses in your Bundle</h2>
                    </div>
                    <div class="col-xl-9">
                        <div class="row g-4">
                            <!-- Country item -->
                            <div class="col-sm-6 col-md-4">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo BASE_URL; ?>assets/images/courses/b2_first.png" class="img-fluid rounded-3" alt="">
                                </div>

                            </div>

                            <!-- Country item -->
                            <div class="col-sm-6 col-md-4">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo BASE_URL; ?>assets/images/courses/c1_advanced.png" class="img-fluid rounded-3" alt="">
                                </div>
                            </div>

                            <!-- Country item -->
                            <div class="col-sm-6 col-md-4">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo BASE_URL; ?>assets/images/courses/c2_pro.png" class="img-fluid rounded-3" alt="">
                                </div>
                            </div>

                            <!-- Country item -->
                            <div class="col-sm-6 col-md-4">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo BASE_URL; ?>assets/images/courses/verbos-en-ingles.png" class="img-fluid rounded-3"
                                        alt="">
                                </div>
                            </div>

                            <!-- Country item -->
                            <div class="col-sm-6 col-md-4">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo BASE_URL; ?>assets/images/courses/Gramatica-esencial.png" class="img-fluid rounded-3"
                                        alt="">
                                </div>
                            </div>

                            <!-- Country item -->
                            <div class="col-sm-6 col-md-4">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo BASE_URL; ?>assets/images/courses/pronunciacion-en-ingles.png"
                                        class="img-fluid rounded-3" alt="">
                                </div>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div>
                <!-- Top country END -->
            </div>
        </section>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->
    <!-- Footer START -->
    <?php include CENTRAL_PATH . 'includes/footer.php'; ?>
    <!-- Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS -->
    <!--<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <!-- <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
	<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
	<script src="assets/vendor/choices/js/choices.min.js"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/purecounterjs/1.1.5/purecounter_vanilla.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/choices.js/10.1.0/choices.min.js"></script>


    <!-- Template Functions -->
    <script src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>

</body>

</html>