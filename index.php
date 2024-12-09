<?php
require_once CENTRAL_PATH . 'includes/functions.php';

$index_data = load_json(__DIR__ . '/../data/pages/index.json');

// JSON data includes
$indexData = $index_data['sections'];

// Render Analytics Section
foreach ($analyticsSection as $section) {
	echo '<script src="' . htmlspecialchars($section['script']['src']) . '"></script>';
}

// Render Hero section
$heroSection = array_filter($indexData, fn($section) => $section['type'] === 'hero');

// Render Grid section
$gridSections = array_filter($indexData, fn($section) => $section['type'] === 'grid');

// Render sections
$section1 = array_filter($indexData, fn($section) => $section['type'] === 'Section-1');
$section2 = array_filter($indexData, fn($section) => $section['type'] === 'Section-2');
$section3 = array_filter($indexData, fn($section) => $section['type'] === 'Section-3');
$section4 = array_filter($indexData, fn($section) => $section['type'] === 'Section-4');
$section5 = array_filter($indexData, fn($section) => $section['type'] === 'Section-5');
$section6 = array_filter($indexData, fn($section) => $section['type'] === 'Section-6');
$section7 = array_filter($indexData, fn($section) => $section['type'] === 'Section-7');

?>
<!DOCTYPE html>
<html lang="es">

<head>

	<!-- Google tag (gtag.js) 
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBE5ZKC2K1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GBE5ZKC2K1');
</script>-->

	<title>English Reservoir - Cursos de Inglés</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="English courses">

	<!-- Dark mode -->
	<script src="<?php echo BASE_URL; ?>script.js"></script>


	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/fed40285ab.js" crossorigin="anonymous"></script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/favicon_ER.png">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">

	<!-- Plugins CSS -->

	<!--<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">-->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


	<!-- <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


	<!--<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">-->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">

	<style>
		@media (max-width: 768px) {

			/* Medium screens and below (Bootstrap's md breakpoint) */
			.custom-line-height {
				line-height: 1.8;
				/* Adjust this value as needed */
			}
		}

		.custom-title-header {
			color: #1C4F59;
		}
	</style>

</head>

<body>
	<?php include CENTRAL_PATH . 'includes/nav.php'; ?>

	<!-- MAIN CONTENT START -->
	<main>

		<!-- Main Banner START -->
		<section class="position-relative overflow-hidden pt-2 pt-lg-1">

			<!-- Content START -->
			<div class="container">
				<!-- Title -->

				<?php foreach ($heroSection as $section): ?>
					<div class="row align-items-center g-5">
						<!-- Left content START -->
						<?php if ($section['type'] === 'hero'): ?>
							<div
								class="col-lg-5 col-xl-6 position-relative z-index-1 text-center mb-1 mb-sm-0 pt-md-3">

								<!-- Title -->
								<h1 class="mb-0 display-6 pt-4 font-dosis custom-line-height custom-title-header text-center"><?= htmlspecialchars($section['title']['main']) ?>
									<span class="position-relative custom-line-height"><?= htmlspecialchars($section['title']['highlightedWord']) ?>
										<!-- SVG START -->
										<span class="position-absolute top-50 start-50 translate-middle ms-3 z-index-n1">
											<svg width="300px" height="62.1px" enable-background="new 0 0 366 62.1"
												viewBox="0 0 366 62.1" xmlns="http://www.w3.org/2000/svg">
												<path class="fill-warning"
													d="m322.5 25.3c0 1.4 2.9 0.8 3.1 1.6 0.8 1.1-1.1 1.3-0.6 2.4 13.3 0.9 26.9 1.7 40.2 4-2.5 0.7-4.9 1.6-7.3 1.1-4-0.9-8.2-1-12.2-1.2-8.5-0.5-16.9-1.9-25.5-1.7h-3.1c2.6 0.6 4.8 0.4 5.7 2.2-7.3 0.4-14.1-0.8-21.2-1.1-0.2 0.6-0.5 1.2-0.8 1.8 21.3 0.7 42.5 1.6 64.3 4.6-4.2 1.6-7.7 1-10.8 0.8-6.8-0.5-13.5-1.3-20.3-1.9-0.9-0.1-2.3-0.1-2.9 0.2-2.2 1.6-4.3 0.6-7 0.4 1.4-1 2.5 0.5 3.9-0.8-5.6-1-10.7 0.6-15.9 0s-10.5-0.6-16.6-0.8c2 1.6 4.6 1.3 6.2 1.4 4.9 0 9.9 0.8 14.8 0.7 5.3-0.1 10.4 0.5 15.5 0.9 3.2 0.3 6.7-0.1 9.9-0.4 1.1-0.1 0.5 0.3 0.6 0.6 0.5 0.9 2.2 0.8 3.6 0.8 5.1-0.1 10.1 0.6 14.8 1.5 0.8 0.1 1.5 0 1.7 0.7 0 0.7-0.8 0.6-1.5 0.8-3.9 1.2-7.4-0.2-11.1-0.2-2 0-4.3-1.5-6 0.5-0.3 0.4-1.4 0.1-2.2-0.1-4.5-0.8-9.1-0.5-13.8-1.5-2.3-0.5-5.6 0.1-8.4 0.5-4 0.5-8-0.7-12.1-0.9-3.4-0.2-7.1-0.5-10.5-0.7-7.1-0.3-14.2-1.2-22.3-0.4 4.9 1.1 9.4 1.2 13.8 1.2 9.7 0 19.2 2.3 28.9 1.6 7.3 3.2 15.9 1.5 23.8 2.9 4.9 0.8 10.1 0.8 15.2 1.2 0.5 0 0.8 0.3 1.1 0.9-20-2.1-40.2-1.4-60.8-3 4.9 2.1 10.8-0.3 15.3 2.7-8 1.9-15.8-0.9-23.5-0.1 2.8 1.4 7.1 1.1 9.3 3.3 0.5 0.5 0.2 1.1-1.2 1.3 2.3 1 3.4-2.1 5.7-0.4 0.2-0.6 0.2-1 0.3-1.5 0.8-0.3 2 0.8 1.5 1.5-0.2 0.1 0 0.3 0 0.5 18.7 0.4 37.3 1.7 56.2 3.6-1.7 1.1-2.8 1.2-4.2 1.1-7.1-0.5-14.1-0.9-21.2-1.4-3.1-0.2-6.3-0.4-9.4-0.4-7.6-0.2-15-0.7-22.4-1-9-0.4-17.9-0.1-26.9-0.1-1.2 0-2.9-0.4-3.9 1 14.8 0.3 29.7 0.6 44.4 1.1 14.8 0.6 29.9 1.3 44.2 4.2-4.3 1-8.8 0.9-13 0.5-5.3-0.5-10.5-1.1-15.8-1.2-11.4-0.3-22.9-0.9-34.3-1.2-17.6-0.4-35.4-0.3-53.1-0.4-10.8-0.1-21.7-0.2-32.5 0-17.8 0.4-35.7 0.2-53.5 0.5-13.1 0.3-26.3 0.1-39.4 0.5-11.1 0.3-22.4 0.6-33.6 1-13.1 0.6-26.1 0.2-39.3 0.4-3.9 0.1-7.6 0.2-11.8-0.2 0.9-1.2 2.3-1.3 3.9-1.3 8.4 0.2 16.6-0.4 24.9-0.9 3.9-0.2 7.9-0.4 11.9 0.2 2.5 0.4 5.3-0.3 8-0.4 7.3-0.4 14.7-0.7 22-0.9 11.9-0.5 23.7-1.2 35.6-0.8 7.7 0.2 15.3-0.6 22.9-0.1 2.3 0.2 4.3-0.5 6.5-1h-17.6c-9.6 0-19-0.1-28.6 0-8 0.1-16.1 0.3-24 0.8-2.6 0.2-5.4 0.1-8.2 0.1-10.1 0.3-20.1 0.6-30.2 0.5-5.4 0-10.7-0.1-15.9 0.6-2.3 0.3-4-1.3-6.5-0.6 0.2 0.4 0.5 0.9 0.6 1.5-1.9 0-4 0.4-4.9-0.1-4.2-2.2-9.4-1.5-14.1-2.3-1.7-0.3-3.7-0.1-4.3-1.5-0.5-1.3 1.9-1.5 2.6-2.6-4.2-1.4-4.6-5-8.5-7.2-1.5 0.2-0.9 2.8-4.2 1.3 0.3 2.4 4.5 3.9 2.8 6.4-2.3 0.3-3.2-0.8-4.2-1.7-2.5-4-5.1-8.4-5.1-12.7 0.2-6.8 0.2-13.8 3.6-20.4 0.3-0.5 0.3-1 0.8-1.4 0.9-0.9 1.2-2.4 3.6-2.1 2.2 0.2 2.5 1.5 2.6 2.6 0.2 1.4 1.5 1.8 3.2 2.5 0.9-1.4 0.5-2.9 2.6-3.7 0.2-0.1 0.3-0.4 0.3-0.4-3.1-2.2 1.2-2.2 2.3-3.3-3.1-1.8-4-4.3-3.7-7-1.5-0.3-3.1-0.4-4.5 0-1.7 0.6-2.2-0.5-2.9-1 0.6-0.5 0.8-1.1 2.2-1.3 7.6-0.9 15.2-1.7 22.9-2 20-0.7 39.9-0.9 59.9-1 11.9-0.1 23.8 0.4 35.6 1.1 3.6 0.2 7.1-0.9 10.7-0.5 7.9 0.9 15.8 0.3 23.8 0.5 7.3 0.1 14.4-0.6 21.7-0.1 12.2 0.9 24.4 0.3 36.7 0.6 9.4 0.3 18.9 0.4 28.2 1 11.9 0.7 23.8 1.3 35.6 2 11.1 0.6 22.4 0.5 33.3 2 7.1 1 14.4 1.1 21.3 2.4 4 0.7 8.2 1.6 12.4 1.9 2.2 0.2 0.9 1 1.5 1.5-4-0.8-8-0.8-12.1-1.4-4.3-0.7-8.5-1-12.8 0.4-2.9 1-6.3 0.2-9.3-0.1-10.2-1.1-20.6-1.6-30.8-2.4-12.1-0.9-24.3-1.4-36.4-2.1-9.9-0.6-20-0.5-29.9-1-11.4-0.6-22.7 0-34.2-0.5-6.3-0.3-12.3-0.3-18.5-0.4-4.2-0.1-8.4 1.3-12.8 0.3 0.6 0.2 1.2 0.7 1.9 0.7 10.5 0 20.9 1.9 31.6 1.7 6.5-0.1 13.1 0.2 19.8 0.8 3.2 0.3 6.3-0.4 9.7-0.1 7.6 0.7 15.5 0.5 23 0.8 12.4 0.5 24.7 0.4 37.1 1.1 13.3 0.7 26.8 2.1 39.9 4.1 6.2 0.9 12.7 1.5 19.2 1.7 0.6 0 1.1 0.1 1.5 0.5-4.6 0.1-9.3 0-13.9-0.5-0.6 1.1 1.4 0.9 1.5 1.9-9.7 1.6-19.6-1.4-29.4-0.1 2.2 1.4 5.1 1 7.4 1 7.3 0.1 14.1 1.3 21.2 1.9 2.8 0.3 5.9 0 8.5 0.8 1.5 0.5 4.6-1.1 4.9 1.3 4-0.7 7.3 1.5 11.1 1.2 4-0.3 7.7 0.6 11.6 1.1 0.8 0.1 2.2 0.3 2.3 1.1 0.2 1-1.1 1.2-2 1.5-3.4 1-6.7-0.4-10.1-0.4-0.9 0-2-0.2-2.9-0.2-9.4 0.1-18.8-1.3-28.3-1.8-6-0.4-12.1-0.9-18.1-1.3 0 0.2 0 0.4-0.2 0.6 6.1 0.5 12.1 1.4 18.3 0.7z" />
											</svg>
										</span>
										<!-- SVG END -->
									</span>
								</h1>

								<!-- Content -->
								<p class="d-none text-center d-lg-block font-dosis my-4 fs-4 fw-medium"><?= htmlspecialchars($section['title']['paragraph']) ?></p>

								<div class="d-lg-flex align-items-center justify-content-center justify-content-lg-start pt-4 pt-lg-2">
									<!-- Buttons -->
									<?php foreach ($section['links'] as $link): ?>
										<a href="<?= htmlspecialchars($link['url']) ?>" class="<?= htmlspecialchars($link['class']) ?>"><?= htmlspecialchars($link['label']) ?></a>
									<?php endforeach; ?>
								</div>
							</div>
							<!-- Left content END -->

							<!-- Right content START -->
							<div class="d-none d-lg-block col-lg-5 col-xl-5 text-center mx-auto position-relative pt-md-5">
								<!-- Image -->
								<div class="text-end">
									<img src="<?= htmlspecialchars($section['title']['image_path']) ?>" class="w-75 text-end" alt="cursos de ingles">
								</div>
							</div>
							<!-- Right content END -->
						<?php endif; ?>
					</div>
				<?php endforeach; ?>

			</div>
			<!-- Content END -->
		</section>

		<!-- Listed courses START -->
		<section class="position-relative pb-0 pb-sm-5 bg-success">
			<div class="container">

				<?php foreach ($gridSections as $grid): ?>
					<?php foreach ($grid['sections'] as $section): ?>

						<div class="row g-4 pb-3">
							<div class="d-flex justify-content-center align-items-center">

								<h2 class="text-center text-white font-dosis fw-bold fs-1 w-100"><?= htmlspecialchars($section['heading']) ?></h2>

							</div>
							<!-- Item -->
							<?php foreach ($section['columns'] as $column): ?>
								<div class="col-sm-6 col-md-4 col-xl-4">
									<div class="bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
										<!-- Image -->
										<div class="">
											<a href="<?= htmlspecialchars($column['url']) ?>">
												<img class="rounded-2" src="<?= htmlspecialchars($column['image_path']) ?>"
													alt="<?= htmlspecialchars($column['alt']) ?>">
											</a>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					<?php endforeach; ?>
				<?php endforeach; ?>
			</div>
		</section>
		<!-- Listed course END -->

		<!-- Section 1 START -->
		<section class="pb-0 pb-lg-5">
			<div class="container">
				<?php foreach ($section1 as $data): ?>
					<div class="row g-4 g-lg-5 align-items-center">
						<div class="col-lg-6 position-relative text-center order-2">
							<!-- Image -->
							<img src="<?= htmlspecialchars($data['image_path']) ?>" class="d-none d-lg-block" alt="<?= htmlspecialchars($data['alt']) ?>">
						</div>

						<div class="col-lg-6 position-relative order-1 order-lg-2">
							<!-- Title -->
							<h2 class="font-dosis"><?= htmlspecialchars($data['title']) ?></h2>
							<p class="mb-2 font-dosis fs-5 fw-semibold"><?= htmlspecialchars($data['paragraphs'][0]) ?>
							</p>
							<!-- Info list -->
							<ul class="list-group list-group-borderless mb-2 font-dosis">
								<?php foreach ($data['paragraphs'] as $index => $paragraph): ?>
									<?php if ($index > 0): ?>
										<li class="list-group-item d-flex align-items-center px-0">
											<p class="mb-0 h6 fw-light"><i class="bi bi-arrow-right text-primary me-2"></i><?= htmlspecialchars($paragraph) ?></p>
										</li>
									<?php endif; ?>
								<?php endforeach; ?>
							</ul>
							<!-- Button -->
							<div class="p-3">
								<a href="<?= htmlspecialchars($data['url']) ?>"
									class="btn btn-primary mb-0"><?= htmlspecialchars($data['label']) ?></a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</section>
		<!-- Section 1 END -->

		<!-- Section 2 START -->
		<section class="overflow-hidden">
			<div class="container">
				<?php foreach ($section2 as $data): ?>
					<div class="row g-4 align-items-center">
						<div class="col-lg-5 position-relative z-index-9 mx-auto">
							<!-- Title -->
							<h2 class="font-dosis"><?= htmlspecialchars($data['title']) ?>
							</h2>
							<p class="font-dosis fs-5 fw-semibold"><?= htmlspecialchars($data['paragraph']) ?></p>
						</div>

						<div class="col-lg-4 text-md-end text-center mx-auto d-none d-lg-block">
							<!-- Image -->
							<img src="<?= htmlspecialchars($data['image_path']) ?>" class="position-relative" alt="<?= htmlspecialchars($data['alt']) ?>">
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</section>
		<!-- Section 2 END -->

		<!-- Section 3 START -->
		<section class="pb-0 pb-lg-5">
			<div class="container">
				<?php foreach ($section3 as $data): ?>
					<div class="row g-4 g-lg-5 align-items-center">
						<div class="col-lg-5 text-center order-2 d-none d-lg-block">
							<!-- Image -->
							<img src="<?= htmlspecialchars($data['image_path']) ?>" class="position-relative" alt="<?= htmlspecialchars($data['alt']) ?>">
						</div>

						<div class="col-lg-6 position-relative order-1 order-lg-2">
							<!-- Title -->
							<h2 class="font-dosis"><?= htmlspecialchars($data['title']) ?></h2>
							<p class="mb-2 font-dosis fs-5 fw-semibold"><?= htmlspecialchars($data['paragraph']) ?>
							</p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</section>
		<!-- Section 3 END -->

		<!-- Section 4 START -->
		<section class="pb-0 pb-lg-5">
			<div class="container">
				<?php foreach ($section4 as $data): ?>
					<div class="row text-center">
						<div class="col-lg-12">
							<h2 class="mb-5"><i class="fa-solid fa-shuttle-space fa-rotate-270 fa-2xl"
									style="color: #00c699;"></i></h2>
							<h2 class="mb-2 font-dosis"><?= htmlspecialchars($data['title']) ?></h2>
							<h3 class="mb-2 font-dosis"><?= htmlspecialchars($data['paragraphs'][0]) ?></h3>
							<div class="col-lg-6 mb-3 mx-auto text-center">
								<p class="font-dosis fs-5 fw-semibold"><?= htmlspecialchars($data['paragraphs'][1]) ?>
								</p>
							</div>
							<!-- Button -->
							<a href="<?= htmlspecialchars($data['url']) ?>" class="btn btn-md btn-primary me-2 mb-4 mb-sm-0"><?= htmlspecialchars($data['label']) ?></a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</section>
		<!-- Section 4 END -->

		<!-- Section 5 START -->
		<section class="overflow-hidden">
			<div class="container">
				<?php foreach ($section5 as $data): ?>
					<div class="row g-4 align-items-center">
						<div class="col-md-5 position-relative mx-auto z-index-9">
							<!-- Title -->
							<h2 class="font-dosis"><?= htmlspecialchars($data['title']) ?>
							</h2>
							<p class="font-dosis fs-5 fw-semibold"><?= htmlspecialchars($data['paragraph']) ?>
							</p>
						</div>

						<div class="col-md-4 text-md-end mx-auto text-center">
							<!-- Image -->
							<img src="<?= htmlspecialchars($data['image_path']) ?>" class="d-block mx-auto w-75 w-md-50 w-lg-25" alt="<?= htmlspecialchars($data['alt']) ?>">
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</section>
		<!-- Section 5 END -->

		<!-- Section 6 START -->
		<section class="pb-0 pb-lg-5">
			<div class="container">
				<?php foreach ($section6 as $data): ?>
					<div class="row g-4 g-lg-5">
						<div class="col-lg-6 order-2 text-center mx-auto d-none d-lg-block position-relative">
							<!-- Image -->
							<img src="<?= htmlspecialchars($data['image_path']) ?>" class="img-fluid" alt="<?= htmlspecialchars($data['alt']) ?>">
						</div>

						<div class="col-lg-5 position-relative mx-auto order-1 order-lg-2">
							<!-- Title -->
							<?php foreach ($titles as $index => $title): ?>
								<h2 class="font-dosis"><?= htmlspecialchars($title) ?></h2>
								<p class="mb-5 font-dosis fs-5 fw-semibold"><?= htmlspecialchars($paragraphs[$index]) ?>
								</p>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</section>
		<!-- Section 6 END -->


		<!-- Section 7 START -->
		<section class="overflow-hidden">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mb-2 position-relative">
						<!-- Title -->
						<h2 class="text-center font-dosis">What is English Reservoir?</h2>
					</div>
					<div class="col-md-9 mx-auto">
						<div class="row gx-5">
							<!-- FIrst column paragraph -->
							<div class="col-md-6">
								<p class="font-dosis fs-5 fw-semibold">A “reservoir” is a large supply of something. That's exactly what we aim
									to be here at English Reservoir: a reservoir of English courses, resources and
									grammar for English learners.
								</p>
								<p class="font-dosis fs-5 fw-semibold">We specialize in the English language and our courses are adapted to
									your needs.
								</p>
							</div>

							<!-- Second column paragraph -->
							<div class="col-md-6">
								<p class="font-dosis fs-5 fw-semibold">It is important to us and our students that learning English is fun,
									dynamic and interactive, and not boring. Therefore, we have designed our courses to
									teach you everything you need to know, from essential grammar to verbs and the
									Cambridge First exam.
								</p>
								<p class="font-dosis fs-5 fw-semibold">Everything is taught in an especially inductive way with context and
									dialogue while we implement our instructional method: explanation - context -
									analysis.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Section 7 END -->

	</main>
	<!-- MAIN CONTENT END -->

	<!-- Footer START -->
	<?php include CENTRAL_PATH . 'includes/footer.php'; ?>
	<!-- Footer END -->

	<!-- Back to top -->
	<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

	<!-- Bootstrap JS -->
	<!-- <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

	<!-- Vendors -->
	<!--<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>

	<!-- Template Functions -->
	<script src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>

</body>

</html>