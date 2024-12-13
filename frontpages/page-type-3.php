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
$section5 = array_filter($pageSections, fn($section) => $section['type'] === 'Section-5');
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
                            <div class="col-sm-7 mx-auto mb-3">
                                <!-- Titles -->
                                <?php foreach (array_slice($data['titles'], 1) as $index => $title): ?>
                                    <h2><?= htmlspecialchars($title) ?></h2>
                                    <!-- Paragraphs -->
                                    <p class="lead"><?= htmlspecialchars($data['paragraphs'][$index]) ?></p>
                                <?php endforeach; ?>


                            </div>

                            <div class="col-sm-2 text-center mx-auto">
                                <!-- Icon -->
                                <h1>
                                    <i class="<?= htmlspecialchars($data['icon_classes']) ?>" style="color: #FFD43B;"></i>
                                </h1>
                            </div>
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
                <div class="row mb-4">
                    <div class="col-sm-8 fs-5">
                        <h2>About English Reservoir
                        </h2>
                        <p class="mb-3">English Reservoir is an online learning platform specialising in the English
                            language.</p>
                        <p class="mb-3">Our online English language courses form part of a large package <a
                                href="https://cursos.englishreservoir.com/p/cursos-de-ingles-metodo-divertido">Cursos de
                                Inglés - 1 Buenísima App</a> which includes numerous courses made up of videos and
                            interactive
                            quizzes.</p>
                        <p class="mb-3">What's more, all the courses are in one unique place to allow for simplicity and
                            user-friendliness.</p>
                        <p class="mb-3">Our courses are excellent learning material for English language learners. We
                            have categorised our courses by varying units, which thus makes for very resourceful
                            homework and general learning material.</p>
                        <p class="mb-3">At this point, our courses are all narrated in Spanish and are therefore
                            targeted at Spanish speakers.</p>
                        <p class="mb-3">We are based in Barcelona, Spain.</p>

                        <h2 class="mt-5">When will I be paid?
                        </h2>
                        <p class="mb-3">As English Reservoir uses the services of <a
                                href="https://support.teachable.com/hc/en-us/articles/115002873712-Affiliate-Dashboard">Teachable</a>
                            for our <a
                                href="https://support.teachable.com/hc/en-us/articles/115002873712-Affiliate-Dashboard#Payoutdetails">payment
                                system</a> , we
                            must work according to their procedures.
                        </p>
                        <p class="mb-3">Therefore, English Reservoir's affiliates are paid in USD via PayPal on the
                            first of every month (or the next business day if the 1st is on a weekend or US holiday)
                            according to our <a
                                href="https://support.teachable.com/hc/en-us/articles/360001365311#Payouts">Monthly
                                Payment Gateway schedule.</a>
                        </p>
                        <p class="mb-3">Due to Teachable's 30-day refund policy, Teachable must hold funds for at least
                            30 days before releasing them to affiliates.
                        </p>
                        <p class="mb-3">For example, on March 1st, affiliates would receive a payment for all sales that
                            took place in January. Then, on April 1st, they would be paid for sales made in February,
                            and so on.
                        </p>
                        <p class="mb-3">We have designed our English courses for learners of English to further enhance
                            their level.
                        </p>
                        <p class="mb-3">If, for example, you run an English academy or an educational institution, our
                            English courses can function as an additional resource working in conjunction with your
                            student's English classes.
                        </p>
                        <p class="mb-3">In addition, if you work with other teachers, then they could cite units of our
                            courses to be
                            done for homework and the like.
                        </p>
                        <p class="mb-3">For instance, a student may be working on the Cambridge First exam, so, said
                            student can be
                            pointed to a specific unit that works on the <a
                                href="https://cursos.englishreservoir.com/courses/b2-cambridge-first/lectures/16953151">Open
                                Cloze</a> , for example:
                        </p>
                        <p class="text-center mb-3">
                            <a href="https://cursos.englishreservoir.com/courses/b2-cambridge-first/lectures/16953151">Cambridge
                                First > Capítulo I > Open Cloze</a>
                        </p>
                        <p class="mb-3">Perhaps a student needs to work on Possessive Pronouns, therefore the student
                            could be instructed by a teacher to go to the following page:
                        </p>
                        <p class="text-center mb-3">
                            <a
                                href="https://cursos.englishreservoir.com/courses/gramatica-esencial-metodo-divertido/lectures/14644177">Gramática
                                Esencial > Capítulo I > Pronombres posesivos</a>
                        </p>

                        <h2 class="mt-5">How does our affiliate program work?
                        </h2>
                        <p class="mb-3">For you to receive a commission on the course package, your students would need
                            to click on the affiliate link.
                        </p>
                        <p class="mb-3">You can simply copy the affiliate link from your dashboard or generate different
                            affiliate links yourself. Either way, we will also give you your affiliate link.
                        </p>
                        <p class="mb-3">Here's an example of an affiliate link:
                        </p>
                        <p class="text-center mb-3">
                            <a
                                href="https://cursos.englishreservoir.com/?affcode=528091_fqjcwp4s">https://cursos.englishreservoir.com/?affcode=528091_fqjcwp4s</a>
                        </p>
                        <p class="mb-3"><b>“528091_fqjcwp4s”</b> would be your code identifier. This part of the cookie
                            tells
                            the system that any purchases would be made from your link.
                        </p>
                        <p class="mb-3">You can also change your affiliate link (if you want it to be more
                            user-friendly) by writing text and simply inserting the link:
                        </p>
                        <p class="text-center mb-3">
                            <a href="https://cursos.englishreservoir.com/">Cursos de inglés -
                                Método Divertido</a>
                        </p>
                        <ul>
                            <li>This text contains the same link as above and looks far neater.</li>
                        </ul>
                        <!-- Image -->
                        <div class="text-center m-5">
                            <img class="rounded-2" src="<?php echo BASE_URL; ?>assets/images/affiliate_programme_1.png"
                                alt="affiliate dashboard">
                            </a>
                        </div>
                        <p class="mb-3">It's important to note, that the link that you provide to your students is
                            tracked using a <b>cookie</b>, and this cookie will last for 365 days.
                        </p>
                        <p class="mb-3">To receive a commission from the student's course purchase, the student must
                            click on the link that you presented to them.
                        </p>
                        <p class="mb-3">It would be your choice to present the affiliate links to your students in any
                            way you see fit.
                        </p>
                        <p class="mb-3">For instance, the links could be inserted in emails or newsletters, that you may
                            send to your students.
                        </p>

                        <h2 class="mt-5">How do I keep track of my earnings/affiliate data?
                        </h2>
                        <p class="mb-3">Important data such as your earnings from your students' purchases are on your
                            dashboard page when you log in from <a
                                href="https://sso.teachable.com/secure/528091/identity/login">this link.</a>
                        </p>
                        <div class="text-center m-5">
                            <img class="rounded-2" src="<?php echo BASE_URL; ?>assets/images/affiliate_programme_2.png"
                                alt="affiliate data">
                            </a>
                        </div>
                        <p class="mb-3">From this page, you can keep track of all the data. Remember, you require a
                            PayPal account to receive payment, so please remember to insert your PayPal details within
                            your affiliate dashboard.
                        </p>

                        <h2 class="mt-5">What do English Reservoir's courses cover?
                        </h2>
                        <p class="mb-3">As of now, we have five courses, each over three hours in length in terms of
                            actual video content. However, when you take into account the time needed to be spent on
                            course quizzes and so forth, the time spent by the student on each course should be much
                            longer.
                        </p>
                        <p class="mb-3">Our courses form part of one package:
                        </p>
                        <div class="d-flex justify-content-center">
                            <div class="text-center m-2">
                                <a href="https://cursos.englishreservoir.com/p/b2-cambridge-first">
                                    <img class="rounded-2" src="<?php echo BASE_URL; ?>assets/images/courses/b2_first.png" alt="x">
                                </a>
                            </div>
                            <div class="text-center m-2">
                                <a href="https://cursos.englishreservoir.com/p/c1-cambridge-advanced">
                                    <img class="rounded-2" src="<?php echo BASE_URL; ?>assets/images/courses/c1_advanced.png" alt="x">
                                </a>
                            </div>
                            <div class="text-center m-2">
                                <a href="https://cursos.englishreservoir.com/p/c2-cambridge-proficiency">
                                    <img class="rounded-2" src="<?php echo BASE_URL; ?>assets/images/courses/pronunciacion-en-ingles.png"
                                        alt="x">
                                </a>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="text-center m-2">
                                <a href="https://cursos.englishreservoir.com/p/verbos-en-ingles-metodo-divertido">
                                    <img class="rounded-2" src="<?php echo BASE_URL; ?>assets/images/courses/verbos-en-ingles.png" alt="x">
                                </a>
                            </div>
                            <div class="text-center m-2">
                                <a href="https://cursos.englishreservoir.com/p/pronunciacion-en-ingles">
                                    <img class="rounded-2" src="<?php echo BASE_URL; ?>assets/images/courses/pronunciacion-en-ingles.png"
                                        alt="x">
                                </a>
                            </div>
                            <div class="text-center m-2">
                                <a href="https://cursos.englishreservoir.com/p/gramatica-esencial-metodo-divertido">
                                    <img class="rounded-2" src="<?php echo BASE_URL; ?>assets/images/courses/Gramatica-esencial.png" alt="x">
                                </a>
                            </div>
                        </div>
                        <p class="my-3">Feel free to learn more about us and see the courses for yourself: <a
                                href="https://cursos.englishreservoir.com/courses/gramatica-esencial-metodo-divertido/lectures/14644177">a
                                free
                                portion of each course is available to anyone.</a></p>
                        <div class="text-center m-5">
                            <img class="rounded-2" src="<?php echo BASE_URL; ?>assets/images/affiliate_programme_3.png"
                                alt="affiliate programme">
                            </a>
                        </div>
                        <p class="mb-3">We have categorised each course as per each grammatical unit. I.e., <a
                                href="https://www.englishreservoir.com/nouns/countable-vs-uncountable-nouns/">countable
                                nouns</a>, <a
                                href="https://www.englishreservoir.com/adjectives/possessive-adjectives/">possessive
                                adjectives</a>, <a
                                href="https://www.englishreservoir.com/all-active-verb-forms/future-simple-2/">future
                                simple</a> etc. So, the student can choose what
                            they should
                            work on, and not have to do the entire course chronologically - although one is more than
                            free to do so.
                        </p>
                        <p class="mb-3">The courses consist of videos (as per each grammar unit), as well as
                            multiple-choice tests after every unit.
                        </p>
                        <p class="mb-3">Students can stream the video content, but not download it.
                        </p>
                        <p class="mb-3">We also have more courses in the pipeline that we will include within our
                            current package, so, you can expect more content in the following months. Moreover, the user
                            interface is user-friendly and simple for the student.
                        </p>
                        <p class="mb-3">Here's what your dashboard looks like:
                        </p>
                        <div class="text-center m-5">
                            <img class="rounded-2" src="<?php echo BASE_URL; ?>assets/images/affiliate_programme_4.png"
                                alt="affiliate payments">
                            </a>
                        </div>
                        <h2 class="my-3">Would you like to join English Reservoir's affiliate program?
                        </h2>
                        <p class="mb-3"><a href="https://cursos.englishreservoir.com/p/affiliate-english-reservoir">Sign
                                up
                                directly here by completing this form.</a></p>
                        <p class="mb-3">Or, get in contact with us at the following email address.
                        </p>
                        <ul>
                            <li>
                                <a href="Info@englishreservoir.com">Info@englishreservoir.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
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