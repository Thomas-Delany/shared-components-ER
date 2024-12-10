<?php
require_once CENTRAL_PATH . 'includes/functions.php';

$page_data = load_json(__DIR__ . '/../../data/pages/page-type-1.json');

// JSON data includes
$pageSections = $page_data['sections'];

// Render sections
$section1 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-1');
$section2 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-2');
$section3 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-3');
$section4 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-4');
$section5 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-5');
?>

<!-- ABOUT US  PAGE -->

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

    <title>About English Reservoir</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="About English Reservoir">

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



    <!-- <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">



    <!--<link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.1.0/css/glightbox.min.css">


    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">

</head>

<body>
    <?php include CENTRAL_PATH . 'includes/nav.php'; ?>

    <!-- MAIN CONTENT START  -->
    <main>
        <section class="position-relative mt-5 pt-0 pt-lg-5">
            <div class="container">
                <!-- Title -->
                <?php foreach ($section1 as $data): ?>
                    <div class="row">
                        <!-- Title -->
                        <div class="col-md-6 mx-auto">
                            <h1 class="text-center mb-3"><?= htmlspecialchars($data['title']) ?></h1>
                            <?php foreach ($data['paragraphs'] as $index => $paragraph): ?>
                                <p class="lead"><?= htmlspecialchars($paragraph) ?>
                                </p>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-md-5 d-flex justify-content-center align-items-center">
                            <img src="<?php echo BASE_URL; ?>assets/images/element/08.png" class="" alt="<?= htmlspecialchars($data['alt']) ?>">
                        </div>
                    </div>
                <?php endforeach; ?>





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
                                    <img src="<?php echo BASE_URL; ?>assets/images/element/26.svg" alt="">
                                </div>
                                <!-- Title -->
                                <h3><?= htmlspecialchars($data['titles']['0']) ?></h3>
                                <p class="lead"><?= htmlspecialchars($data['paragraphs'][0]) ?>">
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
                                <p class="lead"><?= htmlspecialchars($data['paragraphs'][1]) ?>">
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
                                <p class="lead"><?= htmlspecialchars($data['paragraphs'][2]) ?>"></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Steps END -->
            </div>
        </section>


        <section class="bg-light py-5 position-relative overflow-hidden">
            <?php foreach ($section3 as $data): ?>
                <!-- SVG decoration -->
                <figure class="position-absolute top-0 start-0">
                    <svg width="818.6px" height="235.1px">
                        <path class="fill-orange opacity-5"
                            d="M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z" />
                    </svg>
                </figure>

                <!-- SVG decoration -->
                <figure class="position-absolute bottom-0 start-0 mb-3">
                    <svg enable-background="new 0 0 223 134" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-success"
                            d="m216.6 78.7c-1.8-0.3-4.1 0.1-5.9 0.3-2.4 0.2-4.8 0.7-7.1 0.9-1.6 0.1-3.1 0.2-4.6 0.3-1.8 0.1-3.7 0.1-5.6 0.1-1.3-0.1-2.6-0.1-3.9-0.1-2.5 0-4.9-0.3-7.3-0.4-2.3-0.1-4.5 0.5-6.8 0.5-4 0.1-8.6-0.3-12.2 1.6-0.2 0.1-0.2 0.5-0.1 0.6 0.6 1.1 2.6 1.6 3.7 2 0.3 0.1 0.7 0.3 1 0.3 0.9 0.6 1.8 1.2 2.8 1.8 0.7 0.5 1.5 0.8 2.2 1.2 0.1 0.1 0.3 0.2 0.4 0.3 0.3 0.2 1 0.4 1.2 0.7 0.3 0.5 0 1.6-0.1 2.1-0.3 1.3-0.6 2.5-0.8 3.8-0.3 2.1-1 4.1-1.5 6-0.1 0.1-0.3 0.3-0.4 0.5-0.3 0.4 0.1 0.8 0.5 0.7v0.2c0 0.2 0.4 0.1 0.5 0 0.2-0.1 0.3-0.3 0.5-0.4s0.3-0.2 0.5-0.3c2-0.8 4-1.5 5.8-2.6 0.7 1.4 1.4 2.9 2 4.3 0.5 1.1 1.4 3.1 2.9 3.2 1.8 0.1 3.8-2.6 5.1-3.7 2.1-1.6 4.4-3.1 6.5-4.7 3.9-2.8 7.7-5.7 11.4-8.8 0.9-0.8 1.4-1.8 2.3-2.6 1-1 2.2-1.6 3.3-2.4 0.9-0.7 1.5-1.5 2.2-2.3 0.7-0.7 1.6-1.5 2.1-2.5-0.2-0.3-0.3-0.6-0.6-0.6zm-46.5 7 0.6 0.3 0.9 0.6c-0.6-0.3-1.1-0.6-1.5-0.9zm2.4 0.6c-0.7-0.7-1.2-1-2.1-1.4-1.2-0.5-2.6-1-3.8-1.4h-0.1c-0.3-0.2-0.7-0.4-1-0.5-0.5-0.3-1.5-0.4-0.9-0.9 0.2-0.1 0.7-0.1 0.9-0.2 1.2-0.3 2.4-0.5 3.7-0.7 2.6-0.1 5.2 0.1 7.5-0.1 1.2-0.1 2.3-0.2 3.5-0.3h1.9 0.1c0.7 0 1.4 0.1 2.2 0.1 1.9 0.2 3.8 0.1 5.7 0.2 4.3 0.1 8.4 0.1 12.7-0.3 2.1-0.2 4.2-0.5 6.3-0.7 1.2-0.1 2.3-0.2 3.5-0.2-0.5 0.1-1 0.3-1.5 0.3-1.8 0.3-3.5 0.6-5.2 0.9-3.4 0.4-6.8 0.9-10.1 1.6-3.4 0.7-6.8 1.5-10.3 2.2-3.7 0.7-7 2.4-10.7 3.3-0.1-0.1-0.2-0.1-0.3-0.1-0.6-0.9-1.2-1.1-2-1.8zm1.5 9.8c0.1-0.5 0.3-0.9 0.4-1.3 0.3-1.1 0.4-2.3 0.6-3.5 0.1-0.8 0.4-1.6 0.4-2.5 0 0 0-0.1 0.1-0.1 0.3-0.2 1.8-0.3 2-0.3 1.4-0.4 2.9-1 4.3-1.5 1.2-0.5 2.5-0.9 3.8-1.2 3.3-0.7 6.5-1.3 9.8-2.2 3.5-0.9 7.1-1.2 10.7-1.7 1.6-0.2 3.3-0.5 4.9-0.8 1-0.2 2-0.5 3.1-0.7-0.6 0.3-1.2 0.7-1.9 1-1.2 0.5-2.4 0.8-3.6 1.2-2.5 1.1-4.8 2.5-7.1 3.8-1 0.4-2 0.8-3.1 1.2-2.2 0.9-4.3 1.8-6.4 2.7-1.5 0.6-3.1 1.1-4.6 1.8-1.1 0.5-2.2 1-3.3 1.5-0.2 0.1-0.5 0.2-0.7 0.3-0.5 0.2-1 0.4-1.4 0.5-1.1 0.3-2.4 0.6-3.3 1.1-0.1-0.1-0.3-0.1-0.4 0.1-1.3 0.9-2.6 2-3.8 2.9-0.3 0.3-0.7 0.5-1 0.8 0.1-0.8 0.3-1.9 0.5-3.1zm4.7 1.9c-1.4 0.8-3.1 1.4-4.6 2 0.1-0.2 0.3-0.3 0.3-0.4 0.3-0.2 0.5-0.3 0.7-0.5 1-0.9 2.1-1.8 3.2-2.6 0.2 0.5 0.4 0.9 0.6 1.4-0.1 0.1-0.2 0.1-0.2 0.1zm34.9-16.3c-0.5 0.4-0.9 0.9-1.3 1.2l-0.4 0.4c-0.2 0.1-0.3 0.3-0.5 0.4-1 0.7-2 1.4-2.9 2.2-0.5 0.5-0.9 1-1.2 1.5-1 0.9-1.9 1.8-2.9 2.6-0.8 0.6-1.6 1.2-2.3 1.8-1.6 1.4-3.4 2.7-5.2 4-3.3 2.4-6.7 4.6-9.8 7.3-0.7 0.5-1.2 1-1.9 1.6-0.7 0.4-1.3 0.5-2-0.1-0.2-0.3-0.3-0.7-0.4-0.9-0.5-1-1-2-1.4-3-0.7-1.6-1.2-3.3-2.3-4.6 1.4-0.8 3.4-1 4.8-1.6s2.8-1.5 4.3-2l9.6-3.6c2.9-1.2 5.4-2.7 8.2-4.1 0.1-0.1 0.3-0.1 0.4-0.1 1.7-0.7 3.3-1.6 5-2.3 0.7-0.3 1.4-0.5 2.1-0.8 0.1-0.1 0.3-0.2 0.5-0.3l-0.4 0.4z">
                        </path>
                        <path class="fill-success"
                            d="m89.1 0c-0.5 0-1 0.1-1.4 0.3-0.3 0.1-0.5 0.3-0.8 0.3-0.3 0.1-0.6 0-0.9 0.1-0.1 0-0.3 0.2-0.3 0.3v0.2c-0.1 0.5 0.7 0.8 0.9 0.3 0.4-0.1 0.7 0 1.1-0.2 0.5-0.3 0.9-0.4 1.4-0.4 0.6 0 0.6-0.9 0-0.9z">
                        </path>
                        <path class="fill-success"
                            d="m77.1 0.9c-0.7 0-1.4-0.1-2.2-0.1-0.6 0-1.4 0-1.8 0.5s0.3 1.1 0.7 0.7c0.3-0.3 1.2-0.2 1.6-0.2 0.5 0 1.1 0.1 1.6 0.1 0.7-0.1 0.7-1 0.1-1z">
                        </path>
                        <path class="fill-success" d="m65.5 1.5h-2.9c-0.6 0-0.6 0.9 0 0.9h2.9c0.6 0 0.6-0.9 0-0.9z"></path>
                        <path class="fill-success"
                            d="m55.7 2.1c-0.9-0.3-2.7-0.7-3.1 0.5-0.1 0.6 0.7 0.8 0.9 0.3 0.1-0.4 1.7 0 2 0.1 0.5 0.2 0.7-0.6 0.2-0.9z">
                        </path>
                        <path class="fill-success"
                            d="m46.1 2.7c-0.7 0-1.3-0.1-2 0s-1.2 0.4-1.8 0.4-0.6 0.9 0 0.9 1.1-0.2 1.6-0.3c0.7-0.2 1.4-0.1 2.2-0.1 0.6 0.1 0.6-0.9 0-0.9z">
                        </path>
                        <path class="fill-success"
                            d="m35 4.5c-1 0.4-2.3 0.6-3.1 1.4-0.5 0.4 0.2 1 0.7 0.7 0.7-0.7 1.8-0.9 2.7-1.2 0.5-0.3 0.3-1.1-0.3-0.9z">
                        </path>
                        <path class="fill-success"
                            d="m24 9c-0.6 0.5-1.6 0.6-1.8 1.4-0.1 0.6 0.7 0.8 0.9 0.3 0.1-0.3 0.5-0.4 0.7-0.5 0.3-0.2 0.7-0.3 0.9-0.5 0.4-0.4-0.3-1.1-0.7-0.7z">
                        </path>
                        <path class="fill-success"
                            d="m15.7 15c-0.3 0.5-0.5 0.9-0.7 1.4-0.2 0.6-0.5 1.1-0.7 1.7-0.1 0.6 0.8 0.9 0.9 0.3 0.1-0.5 0.4-1 0.6-1.5s0.3-0.9 0.7-1.4-0.4-1-0.8-0.5z">
                        </path>
                        <path class="fill-success"
                            d="m10.6 23.6c-0.3-0.1-0.5 0.1-0.6 0.3-0.3 0.7-0.5 1.3-0.5 2 0 0.6 0.9 0.6 0.9 0 0-0.7 0.1-1.2 0.4-1.8 0.2-0.1 0-0.4-0.2-0.5z">
                        </path>
                        <path class="fill-success" d="m6.4 36.1v2.6c0 0.6 0.9 0.6 0.9 0v-2.6c0-0.6-0.9-0.6-0.9 0z"></path>
                        <path class="fill-success"
                            d="m7.1 45.8c-0.1-0.3 0-0.7 0-1 0-0.6-0.9-0.6-0.9 0 0 0.3-0.1 0.7 0 1 0.1 0.4 0.3 0.7 0.2 1-0.1 0.6 0.9 0.6 0.9 0 0.1-0.3-0.1-0.6-0.2-1z">
                        </path>
                        <path class="fill-success"
                            d="m8.7 57.4c-0.4-0.7-0.6-1.6-1.1-2.2-0.4-0.5-1 0.2-0.7 0.7 0.5 0.6 0.7 1.4 1 2 0.2 0.5 1.1 0 0.8-0.5z">
                        </path>
                        <path class="fill-success"
                            d="m13.3 63.9c-0.8-0.8-1.4-1.6-2.4-2.2-0.5-0.3-1 0.5-0.5 0.8 0.9 0.5 1.5 1.3 2.2 2 0.5 0.4 1.1-0.2 0.7-0.6z">
                        </path>
                        <path class="fill-success"
                            d="m20.9 69.2c-0.5-0.1-1-0.4-1.5-0.7-0.5-0.2-0.9-0.5-1.2-0.9-0.4-0.4-1 0.3-0.7 0.7 0.4 0.4 0.9 0.8 1.4 1 0.6 0.3 1.1 0.7 1.8 0.7 0.5 0.2 0.7-0.7 0.2-0.8z">
                        </path>
                        <path class="fill-success"
                            d="m31.1 72c-0.2 0-0.3-0.1-0.5-0.1-0.2-0.1-0.4 0-0.6-0.1-0.5-0.1-1-0.3-1.3-0.5-0.5-0.4-1.1 0.3-0.7 0.7 0.5 0.4 1 0.6 1.5 0.7 0.3 0.1 0.5 0 0.8 0.1s0.5 0.2 0.8 0.2c0.6-0.2 0.6-1.1 0-1z">
                        </path>
                        <path class="fill-success"
                            d="m36.2 74.5c-0.1 0-0.3-0.2-0.3-0.3-0.1-0.1-0.3-0.3-0.4-0.5-0.4-0.4-1 0.2-0.7 0.7 0.4 0.4 0.7 0.9 1.4 1 0.3 0 0.5-0.2 0.5-0.5-0.1-0.2-0.3-0.4-0.5-0.4z">
                        </path>
                        <path class="fill-success"
                            d="m46.7 80.6c-0.3 0-0.7-0.5-0.9-0.7-0.4-0.3-0.9-0.4-1.3-0.7-0.5-0.4-1.1 0.3-0.7 0.7 0.5 0.4 1.1 0.5 1.6 0.9 0.4 0.3 0.7 0.7 1.2 0.7 0.7 0.1 0.7-0.8 0.1-0.9z">
                        </path>
                        <path class="fill-success"
                            d="m54.3 86.1c-0.4-0.4-0.7-0.8-1-1.2-0.3-0.5-1.2 0-0.8 0.5 0.3 0.4 0.5 0.8 0.9 1.1 0.2 0.2 0.7 0.5 0.7 0.7 0.1 0.6 1 0.6 0.9 0-0.1-0.5-0.3-0.8-0.7-1.1z">
                        </path>
                        <path class="fill-success"
                            d="m60.3 93.1c0.1 0 0-0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.2-0.1-0.2-0.3-0.3-0.5-0.5-0.3-0.3-0.7-0.7-0.7-1.2-0.1-0.6-1-0.3-0.9 0.3s0.5 1.1 0.9 1.5c0.2 0.2 0.4 0.4 0.5 0.7s0.3 0.4 0.6 0.5c0.6 0 0.9-0.8 0.3-1z">
                        </path>
                        <path class="fill-success"
                            d="m64.9 100.9v-0.9c0-0.6-0.9-0.6-0.9 0 0 0.5-0.1 0.9 0.1 1.4 0.1 0.1 0.1 0.3 0.3 0.3h0.2c0.3 0.1 0.5-0.1 0.6-0.3 0-0.2-0.2-0.4-0.3-0.5z">
                        </path>
                        <path class="fill-success"
                            d="m66.5 110.5c-0.5-0.4 0.1-1.7 0.1-2.2 0.1-0.6-0.9-0.6-0.9 0-0.1 0.9-0.7 2.2 0.1 2.9 0.5 0.3 1.1-0.3 0.7-0.7z">
                        </path>
                        <path class="fill-success"
                            d="m64.2 116.7c-0.4 0.7-0.8 1.2-0.9 2-0.1 0.6 0.8 0.9 0.9 0.3 0.1-0.7 0.5-1.2 0.8-1.8 0.3-0.5-0.4-1-0.8-0.5z">
                        </path>
                        <path class="fill-success"
                            d="m59.6 126.6c-0.1-0.3-0.4-0.3-0.7-0.2s-0.6 0.3-0.9 0.4-0.4 0.3-0.3 0.6 0.3 0.3 0.6 0.3c0.4-0.1 0.8-0.3 1.2-0.5 0.2 0 0.2-0.4 0.1-0.6z">
                        </path>
                        <path class="fill-success"
                            d="m48.5 127.2c-0.8 0.1-1.6 0.2-2.3 0.2-0.6 0-0.6 0.9 0 0.9 0.8 0 1.6-0.1 2.3-0.2 0.6-0.1 0.6-1 0-0.9z">
                        </path>
                        <path class="fill-success"
                            d="m40.9 126.6c-0.3-0.3-0.5-0.5-0.8-0.7-0.1-0.1-0.3-0.1-0.5-0.2s-0.3-0.1-0.4-0.1c-0.4-0.5-1 0.2-0.7 0.7 0.3 0.3 0.6 0.3 0.9 0.4s0.6 0.4 0.8 0.7c0.4 0.3 1.1-0.3 0.7-0.8z">
                        </path>
                        <path class="fill-success"
                            d="m38.9 127.3c-0.3-0.5-0.7-0.9-1.1-1.4-0.4-0.4-1 0.2-0.7 0.7 0.4 0.4 0.7 0.7 1 1.2s1.1 0 0.8-0.5z">
                        </path>
                        <path class="fill-success"
                            d="m33.7 119.8c-0.1-0.1-0.3-0.3-0.3-0.5 0-0.6-0.9-0.6-0.9 0 0 0.5 0.3 0.9 0.6 1.2 0.4 0.3 1.1-0.3 0.6-0.7z">
                        </path>
                        <path class="fill-success"
                            d="m34.2 110c0 0.1-0.3 0.3-0.3 0.3-0.1 0.1-0.3 0.3-0.4 0.5-0.2 0.4-0.3 0.8-0.3 1.2-0.1 0.6 0.9 0.6 0.9 0 0.1-0.5 0.2-0.9 0.5-1.2s0.5-0.5 0.5-1c0.1-0.4-0.8-0.4-0.9 0.2z">
                        </path>
                        <path class="fill-success"
                            d="m40.8 103.2c-0.5 0.1-0.9 0.5-1.3 0.7-0.5 0.3-0.8 0.7-1 1.2-0.3 0.5 0.5 1 0.8 0.5 0.2-0.4 0.5-0.7 0.8-0.9 0.4-0.3 0.8-0.6 1.2-0.7 0.1 0 0.3-0.2 0.3-0.3s0-0.1 0.1-0.2c0.1-0.5-0.7-0.8-0.9-0.3z">
                        </path>
                        <path class="fill-success"
                            d="m49.4 100.3c-0.7-0.1-1.4 0.1-2 0.3-0.6 0.1-1 0.3-1.4 0.7-0.4 0.5 0.3 1.1 0.7 0.7s0.8-0.5 1.3-0.5c0.5-0.1 1-0.2 1.6-0.2 0.4-0.1 0.4-1-0.2-1z">
                        </path>
                        <path class="fill-success"
                            d="m57 100.4c-0.8-0.6-1.7-0.7-2.6-0.8-0.6 0-0.6 0.9 0 0.9 0.7 0 1.4 0.1 2 0.5 0.4 0.4 1-0.3 0.6-0.6z">
                        </path>
                        <path class="fill-success"
                            d="m66.5 103.9c-1.1-0.3-2.1-0.9-3.3-0.9-0.6 0.1-0.6 1 0 0.9 1.1-0.1 2 0.6 3 0.9 0.6 0 0.8-0.8 0.3-0.9z">
                        </path>
                        <path class="fill-success"
                            d="m79.7 109.4c-0.6-0.7-1.1-1.4-1.8-2-0.8-0.6-1.6-0.9-2.5-1.3-0.5-0.3-1 0.5-0.5 0.8 0.8 0.4 1.6 0.7 2.3 1.1 0.7 0.5 1.2 1.3 1.8 2 0.5 0.5 1.1-0.1 0.7-0.6z">
                        </path>
                        <path class="fill-success"
                            d="m87 114.4c-0.6-0.1-1.2-0.7-1.6-1.1s-1 0.2-0.7 0.7c0.6 0.6 1.3 1.3 2.2 1.4 0.7 0 0.7-1 0.1-1z">
                        </path>
                        <path class="fill-success"
                            d="m97.7 120.6c-0.8-0.8-1.6-1.4-2.6-1.8-0.9-0.4-1.6-0.9-2.6-0.9-0.6 0-0.6 0.9 0 0.9 1.6 0 3.5 1.4 4.5 2.4 0.5 0.5 1.1-0.1 0.7-0.6z">
                        </path>
                        <path class="fill-success"
                            d="m108.9 123.7c-0.5 0-1-0.3-1.5-0.4-0.4-0.1-1 0.1-1.4-0.1-0.5-0.4-1 0.3-0.7 0.7 0.5 0.5 1 0.4 1.6 0.4 0.7 0 1.2 0.5 1.9 0.4 0.7-0.2 0.8-1.1 0.1-1z">
                        </path>
                        <path class="fill-success"
                            d="m118.2 126c-0.5 0-1 0.1-1.5 0s-0.9-0.3-1.3-0.4c-0.5-0.2-0.8 0.7-0.3 0.9 1 0.4 2 0.5 3.1 0.5 0.6-0.1 0.6-1 0-1z">
                        </path>
                        <path class="fill-success"
                            d="m125.5 124c-0.5 0.5-1 0.8-1.7 0.9-0.6 0.1-0.3 1 0.3 0.9 0.8-0.2 1.5-0.6 2.1-1.2 0.4-0.4-0.3-1-0.7-0.6z">
                        </path>
                        <path class="fill-success"
                            d="m128.7 117c-0.5 0.5-0.4 1.2-0.4 1.8-0.1 0.8-0.6 1.4-0.6 2.3 0 0.6 0.9 0.6 0.9 0 0-0.7 0.4-1.2 0.5-1.8 0.1-0.5-0.1-1.3 0.2-1.6 0.4-0.4-0.2-1.1-0.6-0.7z">
                        </path>
                        <path class="fill-success"
                            d="m130.1 112c-0.3-0.5-0.1-1.2-0.3-1.8-0.1-0.3-0.1-0.7-0.3-0.9-0.1-0.3-0.3-0.6-0.4-1-0.1-0.6-1-0.3-0.9 0.3 0.1 0.3 0.3 0.6 0.4 0.9 0.1 0.4 0.3 0.8 0.3 1.2 0.2 0.7 0.1 1.2 0.4 1.8 0.2 0.6 1 0.1 0.8-0.5z">
                        </path>
                        <path class="fill-success"
                            d="m127.7 104.9c-0.2-0.5-0.4-1.1-0.3-1.6 0.1-0.6-0.9-0.6-0.9 0-0.1 0.7 0.2 1.5 0.5 2.2 0.2 0.4 1-0.1 0.7-0.6z">
                        </path>
                        <path class="fill-success"
                            d="m131 96.8c-0.3 0.3-0.7 0.3-0.9 0.5-0.4 0.2-0.7 0.5-1 0.9-0.4 0.4 0.3 1 0.7 0.7 0.3-0.3 0.6-0.6 0.9-0.8 0.3-0.1 0.7-0.3 1-0.5 0.4-0.5-0.3-1.2-0.7-0.8z">
                        </path>
                        <path class="fill-success"
                            d="m136.4 96c-0.6 0-0.6 0.9 0 0.9 0.5 0 0.9-0.1 1.4-0.1 0.3 0 0.6 0 0.9 0.1 0.1 0 0.2 0.1 0.3 0.1h0.1c0.1 0.5 0.9 0.5 0.9-0.1-0.1-1.4-2.9-0.9-3.6-0.9z">
                        </path>
                        <path class="fill-success"
                            d="m144.9 99.2c-0.5-0.3-1 0.5-0.5 0.8 0.7 0.5 2.5 1.1 2.3 2.2-0.1 0.6 0.8 0.9 0.9 0.3 0.3-1.7-1.6-2.5-2.7-3.3z">
                        </path>
                        <path class="fill-success"
                            d="m156.6 106c-1.5-0.1-2.9-0.5-4.3-1-0.5-0.2-0.8 0.7-0.3 0.9 1.4 0.5 2.9 1 4.6 1 0.6 0 0.6-0.9 0-0.9z">
                        </path>
                        <path class="fill-success"
                            d="m163 104.9c-0.4 0-0.7-0.1-1.1 0-0.3 0.1-0.7 0.3-1 0.2-0.6-0.1-0.6 0.9 0 0.9 0.3 0 0.7-0.1 1-0.2 0.4-0.1 0.8 0 1.1 0 0.6 0 0.6-0.9 0-0.9z">
                        </path>
                        <path class="fill-success"
                            d="m168.1 103.9c0.5-0.1 0.5-0.9-0.1-0.9-0.5 0-0.9 0.4-1.2 0.7-0.1 0.2-0.3 0.4-0.3 0.7s0.3 0.5 0.5 0.6c0.3 0.1 0.5-0.1 0.6-0.3 0-0.1 0-0.3-0.1-0.4l0.2-0.2c0.1-0.1 0.1-0.1 0.2-0.1 0.1-0.1 0.1-0.1 0.2-0.1z">
                        </path>
                    </svg>
                </figure>

                <!-- SVG image decoration -->
                <div class="position-absolute bottom-0 end-0 d-none d-lg-block">
                    <img src="<?php echo BASE_URL; ?>assets/images/element/rocket.svg" alt="">
                </div>
                <?php foreach ($data['sections'] as $section): ?>
                    <div class="container position-relative py-5">
                        <!-- Title -->
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <h2><?= htmlspecialchars($section['heading-1']) ?></h2>
                            </div>
                        </div>
                        <div class="row g-4 g-lg-5">
                            <!-- courses -->
                            <?php foreach (array_slice($section['columns'], 0, 6) as $column): ?>
                                <div class="col-sm-4 col-xl-4">
                                    <div class="text-center p-4 position-relative">
                                        <a href="<?= htmlspecialchars($column['url']) ?>">
                                            <img src="<?= htmlspecialchars($column['image_path']) ?>" class="rounded-3"
                                                alt="<?= htmlspecialchars($column['alt']) ?>">
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="container position-relative pt-1">
                        <!-- Title -->
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <h2><?= htmlspecialchars($section['heading-2']) ?></h2>
                            </div>
                        </div>
                        <div class="row g-4 g-lg-5">
                            <!-- courses -->
                            <?php foreach (array_slice($section['columns'], 6, 3) as $column): ?>
                                <div class="col-sm-4 col-xl-4">
                                    <div class="text-center p-4 position-relative">
                                        <a href="<?= htmlspecialchars($column['url']) ?>">
                                            <img src="<?= htmlspecialchars($column['image_path']) ?>" class="rounded-3"
                                                alt="<?= htmlspecialchars($column['alt']) ?>">
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="container position-relative pt-1">
                        <!-- Title -->
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <h2><?= htmlspecialchars($section['heading-3']) ?></h2>
                            </div>
                        </div>
                        <div class="row g-4 g-lg-5">
                            <!-- courses -->
                            <?php foreach (array_slice($section['columns'], 9, 3) as $column): ?>
                                <div class="col-sm-4 col-xl-4">
                                    <div class="text-center p-4 position-relative">
                                        <a href="<?= htmlspecialchars($column['url']) ?>">
                                            <img src="<?= htmlspecialchars($column['image_path']) ?>" class="rounded-3"
                                                alt="<?= htmlspecialchars($column['alt']) ?>">
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </section>

        <!-- =======================
Course END -->

        <!-- =======================
Portfolio START -->
        <section>
            <div class="container">
                <!-- Title -->
                <div class="row">
                    <div class="col-lg-8 my-5">
                        <h3>How much does it cost?
                        </h3>
                        <p class="mb-4 fs-5">7,99 USD monthly.
                        </p>
                        <h3>Can I download the course?</h3>
                        <p class="mb-4 fs-5">No. You can only stream your course from your unique login page.
                        </p>
                        <h3>In which language are the courses taught?
                        </h3>
                        <p class="mb-4 fs-5">
                            In Spanish. That is, the language of instruction is Spanish. All the dialogues and context
                            are in English with various native accents.</p>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                        <img src="<?php echo BASE_URL; ?>assets/images/element/abc.svg" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="row my-5">
                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                        <img src="<?php echo BASE_URL; ?>assets/images/element/06.svg"
                            class="img-fluid d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block" alt="">
                    </div>
                    <div class="col-lg-8 mb-4">
                        <h3>Where is the course once I have bought it?
                        </h3>
                        <p class="mb-4 fs-5">
                            <a href="https://sso.teachable.com/secure/528091/identity/login">Here! You can log in by
                                clicking “log in”.</a>
                        </p>
                        <h3>Can I download the course?</h3>
                        <p class="mb-4 fs-5">No. You can only stream your course from your unique login page.
                        </p>
                        <h3>Do the courses expire?
                        </h3>
                        <p class="mb-4 fs-5">For each month that you are subscribed, youll have one month of access.
                        </p>
                        <h3>Will I be able to follow the courses?
                        </h3>
                        <p class="mb-4 fs-5">If you have a medium level of English, you will be able to follow without
                            difficulty.
                        </p>
                        <h3>How much time should I dedicate to the course(s)?
                        </h3>
                        <p class="mb-4 fs-5">As a general rule, you should do the tutorials every day, but don't do more
                            than 20 minutes each day, because there is a lot of content, and you will need to
                            concentrate.
                        </p>
                        <h3>Do I need to create an account?
                        </h3>
                        <p class="mb-4 fs-5">Yes. When you sign up, you will receive an email confirming your account.
                            You'll have to create a new password that you can use to log in to your account.
                        </p>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <!-- **************** MAIN CONTENT END **************** -->
    <!-- Footer START -->
    <?php include CENTRAL_PATH . 'includes/footer.php'; ?>
    <!-- Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

    <!-- Bootstrap JS 
	<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


    <!-- Vendors -->
    <!--<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/imagesLoaded/imagesloaded.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.js"></script>
	<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>-->


    <!-- Vendors -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/isotope-layout/3.0.6/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.1.0/js/glightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/purecounterjs/1.1.5/purecounter_vanilla.js"></script>


    <!-- Template Functions -->
    <script src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>

</body>

</html>