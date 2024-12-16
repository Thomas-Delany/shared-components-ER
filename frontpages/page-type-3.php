<?php
require_once CENTRAL_PATH . 'includes/functions.php';

$page_data = load_json(__DIR__ . '/../../data/pages/page-type-3.json');

// JSON data includes
$pageSections = $page_data['sections'];

// Render sections
$section1 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-1');
$section2 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-2');
$section3 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-3');
$section4 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-4');
?>

<!-- AFFILIATE PAGE -->

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

    <title>Affiliate Programme - English Reservoir</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Affiliate Programme">

    <!-- Dark mode -->
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

    <!-- Plugins CSS -->

    <!--<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!--<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">

</head>

<body>
    <?php include CENTRAL_PATH . 'includes/nav.php'; ?>
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- Page Banner START -->
        <section class="position-relative overflow-hidden pt-5 pt-lg-3">

            <!-- Content START -->
            <div class="container">
                <!-- Title -->
                <?php foreach ($section1 as $data): ?>
                    <div class="row align-items-center g-5 pt-5">
                        <!-- Left content START -->
                        <div
                            class="col-lg-5 col-xl-6 position-relative z-index-1 text-center text-lg-start mb-1 mb-sm-0 pt-md-5">

                            <!-- Title -->
                            <h1 class="mb-0"><?= htmlspecialchars($data['title']) ?></h1>

                            <!-- Content -->
                            <p class="my-4 lead"><?= htmlspecialchars($data['paragraph']) ?></p>

                            <div class="d-sm-flex align-items-center justify-content-center justify-content-lg-start">
                                <!-- Button -->
                                <a href="<?= htmlspecialchars($data['url']) ?>" class="btn btn-lg btn-primary me-2 mb-sm-0"><?= htmlspecialchars($data['label']) ?></a>
                            </div>
                        </div>
                        <!-- Left content END -->

                        <!-- Right content START -->
                        <div class="col-sm-4 text-center mx-auto position-relative pt-md-5 d-none d-sm-block">
                            <!-- Image -->
                            <div class="position-relative">
                                <img src="<?php echo BASE_URL; ?>assets/images/element/cart.svg" alt="<?= htmlspecialchars($data['alt']) ?>">
                            </div>
                        </div>
                        <!-- Right content END -->
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Content END -->
        </section>
        <!-- Page Banner END -->


        <section class="overflow-hidden">
            <div class="container">
                <?php foreach ($section2 as $data): ?>
                    <div class="row">
                        <div class="col-md-12 mb-2 position-relative">
                            <!-- Title -->
                            <h2 class="text-center"><?= htmlspecialchars($data['title']) ?></h2>
                        </div>
                        <div class="col-md-9 mx-auto">
                            <div class="row gx-5">
                                <!-- First column paragraph -->
                                <div class="col-md-6">
                                    <?php foreach (array_slice($data['paragraphs'], 0, 2) as $paragraph): ?>
                                        <p class="lead"><?= htmlspecialchars($paragraph) ?></p>
                                    <?php endforeach; ?>
                                </div>

                                <!-- Second column paragraph -->
                                <div class="col-md-6">
                                    <?php foreach (array_slice($data['paragraphs'], 2) as $paragraph): ?>
                                        <p class="lead"><?= htmlspecialchars($paragraph) ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Section 5 START -->
        <section class="position-relative overflow-hidden pt-5 pt-lg-3">
            <div class="container">
                <?php foreach ($section3 as $data): ?>
                    <div class="row g-4 align-items-center mx-auto">
                        <div class="col-sm-8 mx-auto text-center position-relative bg-warning bg-gradient rounded-3 mb-5">
                            <!-- Main Title -->
                            <h2 class="m-2 p-1"><?= htmlspecialchars($data['titles'][0]) ?></h2>
                        </div>
                        <div class="row align-items-center mx-auto">
                            <?php foreach (array_slice($data['titles'], 1) as $index => $title): ?>
                                <div class="col-sm-7 mx-auto mb-3">
                                    <!-- Titles -->
                                    <h2><?= htmlspecialchars($title) ?></h2>
                                    <!-- Paragraphs -->
                                    <p class="lead"><?= htmlspecialchars($data['paragraphs'][$index]) ?></p>
                                </div>
                                <div class="col-sm-2 text-center mx-auto">
                                    <!-- Icon -->
                                    <h1>
                                        <i class="<?= htmlspecialchars($data['icon_classes'][$index]) ?>" style="color: #FFD43B;"></i>
                                    </h1>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- Section 5 END -->


        <!-- Work START -->
        <section>
            <div class="container">
                <!-- Title -->
                <?php foreach ($section4 as $data): ?>
                    <div class="row mb-4">
                        <div class="col-sm-8 fs-5">
                            <?php if (isset($data['titles']) && is_array($data['titles'])): ?>
                                <?php foreach ($data['titles'] as $title): ?>
                                    <!-- Title Header -->
                                    <h2 class="mt-5"><?php echo htmlspecialchars($title['header']); ?></h2>

                                    <!-- Paragraphs -->
                                    <?php if (isset($title['paragraphs']) && is_array($title['paragraphs'])): ?>
                                        <?php foreach ($title['paragraphs'] as $paragraph): ?>
                                            <p class="mb-3"><?php echo htmlspecialchars($paragraph); ?></p>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                    <!-- Image (Single or Multiple) -->
                                    <?php if (isset($title['image_path'])): ?>
                                        <?php if (is_array($title['image_path'])): ?>
                                            <?php foreach ($title['image_path'] as $image): ?>
                                                <div class="text-center m-5">
                                                    <img class="rounded-2" src="<?php echo BASE_URL . htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($title['header']); ?>">
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <div class="text-center m-5">
                                                <img class="rounded-2" src="<?php echo BASE_URL . htmlspecialchars($title['image_path']); ?>" alt="<?php echo htmlspecialchars($title['header']); ?>">
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <!-- Nested Sections (Courses with Headers and 3 Columns Per Row) -->
                                    <?php if (isset($title['sections']) && is_array($title['sections'])): ?>
                                        <?php foreach ($title['sections'] as $nestedSection): ?>
                                            <!-- Section Header -->
                                            <h3 class="mt-4"><?php echo htmlspecialchars($nestedSection['heading']); ?></h3>

                                            <!-- Course Columns (Three Columns Per Row) -->
                                            <div class="d-flex justify-content-center flex-wrap">
                                                <?php if (isset($nestedSection['columns']) && is_array($nestedSection['columns'])): ?>
                                                    <?php foreach ($nestedSection['columns'] as $index => $column): ?>
                                                        <!-- Individual Column -->
                                                        <div class="text-center m-2" style="width: 33%;">
                                                            <a href="<?php echo htmlspecialchars($column['url']); ?>">
                                                                <img class="rounded-2" src="<?php echo BASE_URL . htmlspecialchars($column['image_path']); ?>" alt="<?php echo htmlspecialchars($column['alt']); ?>">
                                                            </a>
                                                        </div>
                                                        <!-- Ensure rows break every 3 columns -->
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
        </section>
        <!-- Work END -->

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
    <!--<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/purecounterjs/1.1.5/purecounter_vanilla.js"></script>


    <!-- Template Functions -->
    <script src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>

</body>

</html>