<?php
require_once 'functions.php';
$nav_data = load_json(CENTRAL_PATH . '../data/includes/nav.json');

// JSON data includes
$megaMenuItems = $nav_data['mega_menu_items'];
$navImageLinks = $nav_data['nav_image_links'];
$navLinks = $nav_data['nav_links'];
$megaMenus = $nav_data['mega_menus'];
?>
<style>
	.navbar-expand-xl .navbar-nav .dropdown:hover>.dropdown-menu {
		top: 80%;
	}

	/* Center the logo only on small screens */
	@media (max-width: 767.98px) {
		.navbar-brand {
			margin: 0 auto;
		}
	}
</style>



<!-- nav.php -->
<!-- Header START -->
<header class="navbar-light header-static">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container px-3 px-xl-5">
			<!-- Logo START -->
			<a class="navbar-brand me-0 mx-auto d-block text-center text-md-start ms-md-3 ps-md-3" href="<?php echo BASE_URL; ?>">
				<img class="light-mode-item navbar-brand-item" src="<?php echo BASE_URL; ?>assets/images/LOGO-LIGHT.png" alt="logo">

				<img class="dark-mode-item navbar-brand-item" src="<?php echo BASE_URL; ?>assets/images/LOGO-DARK.png" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">

				<!-- Nav Search END -->
				<ul class="navbar-nav navbar-nav-scroll ms-auto">

					<!-- Nav item 1 Reservoir -->
					<li class="nav-item dropdown dropdown-fullwidth">
						<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">Reservoir!</a>
						<div class="dropdown-menu dropdown-menu-end bg-light bg-gradient border border-success" data-bs-popper="none">
							<div class="row p-4 m-4 font-dosis">
								<?php foreach ($megaMenuItems as $column): ?>
									<!-- column item -->
									<div class="col-xl-4 col-xxl-4 mb-3">
										<?php foreach ($column as $item): ?>
											<!-- item -->
											<div class="d-flex mb-4 position-relative">
												<h2 class="mb-0"><i class="<?php echo htmlspecialchars($item['icon_class']); ?>"></i></h2>
												<div class="ms-2">
													<a class="stretched-link h6 mb-0 font-dosis"
														href="<?php echo htmlspecialchars(BASE_URL . $item['url']); ?>">
														<?php echo htmlspecialchars($item['label']); ?></a>
													<p class="mb-0 small"><?php echo htmlspecialchars($item['description']); ?></p>
												</div>
											</div>
										<?php endforeach; ?>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</li>

					<!-- Nav item 2 Academy -->
					<?php foreach ($navImageLinks as $imageLink): ?>
						<?php if (isset($imageLink['menu_title'])): ?>
							<li class="nav-item dropdown dropdown-fullwidth">
								<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false"><?php echo htmlspecialchars($imageLink['menu_title']); ?> </a>
								<div class="dropdown-menu dropdown-menu-end bg-light bg-gradient border border-success" data-bs-popper="none">
									<div class="row justify-content-center g-4 pb-1 d-flex flex-wrap p-4 m-4 font-dosis">

										<?php $counter = 0; // Initialise a counter
										foreach ($navImageLinks as $image):
											// Check if the current element is a header and display it
											if (isset($image['header'])): ?>
												<h5 class="text-center font-dosis fs-3 font-medium p-2 custom-title-header"><?php echo htmlspecialchars($image['header']); ?></h5>
											<?php endif; ?>

											<div class="col-12 col-md-4 col-xl-4">
												<div class="bg-opacity-10 rounded-3 text-center p-1 position-relative btn-transition">
													<!-- Image -->
													<div class="">
														<a href="<?php echo htmlspecialchars($image['link_url']); ?>">
															<img src="<?php echo BASE_URL . htmlspecialchars($image['image_url']); ?>" class="rounded-2 w-75"
																alt="<?php echo htmlspecialchars($image['alt']); ?>">
														</a>
													</div>
												</div>
											</div>
										<?php $counter++;
										endforeach; ?>
									</div>
								</div>
							</li>
						<?php endif; ?>
					<?php endforeach; ?>

					<!-- Nav item 3 More-->
					<?php foreach ($megaMenus as $menu): ?>
						<li class="nav-item dropdown dropdown-fullwidth">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false"><?php echo htmlspecialchars($menu['menu_title']); ?></a>
							<div class="dropdown-menu dropdown-menu-end bg-light bg-gradient border border-success" data-bs-popper="none">
								<div class="row p-4 m-4">
									<!-- First Column (Dynamic Links: First Two Items) -->
									<div class="col-xl-6 col-xxl-6 mb-3 font-dosis">
										<?php foreach ($menu['nav_links'] as $index => $link): ?>
											<?php if ($index < 2): // First two items (indices 0, 1) 
											?>
												<div class="d-flex mb-4 position-relative">
													<h2 class="mb-0"><i class="<?php echo htmlspecialchars($link['icon_class']); ?>"></i></h2>
													<div class="ms-2">
														<a class="stretched-link h6 mb-0 font-dosis"
															href="<?php echo htmlspecialchars(BASE_URL . (isset($link['url']) ? $link['url'] : '#')); ?>">
															<?php echo htmlspecialchars(isset($link['label']) ? $link['label'] : ''); ?>
														</a>
														<p class="mb-0 small">
															<?php echo htmlspecialchars(isset($link['description']) ? $link['description'] : ''); ?>
														</p>
													</div>
												</div>
											<?php endif; ?>
										<?php endforeach; ?>
									</div>
									<!-- Second Column -->
									<div class="col-xl-6 col-xxl-6 mb-3 font-dosis">
										<!-- Dynamic Link: Third Item (Index 2) -->
										<?php foreach ($menu['nav_links'] as $index => $link): ?>
											<?php if ($index === 2): // Third item (index 2) 
											?>
												<div class="d-flex mb-4 position-relative">
													<h2 class="mb-0"><i class="<?php echo htmlspecialchars($link['icon_class']); ?>"></i></h2>
													<div class="ms-2">
														<a class="stretched-link h6 mb-0 font-dosis"
															href="<?php echo htmlspecialchars(BASE_URL . (isset($link['url']) ? $link['url'] : '#')); ?>">
															<?php echo htmlspecialchars(isset($link['label']) ? $link['label'] : ''); ?>
														</a>
														<p class="mb-0 small">
															<?php echo htmlspecialchars(isset($link['description']) ? $link['description'] : ''); ?>
														</p>
													</div>
												</div>
											<?php endif; ?>
										<?php endforeach; ?>

										<!-- Unique Social Media Block -->
										<?php foreach ($menu['nav_links'] as $index => $link): ?>
											<?php if ($index === 3): // Unique social media block 
											?>
												<div class="d-flex mb-4 position-relative">
													<h2 class="mb-0"><i class="<?php echo htmlspecialchars($link['icon_class']); ?>"></i></h2>
													<div class="ms-2">
														<a class="stretched-link h6 mb-0 font-dosis"
															href="<?php echo htmlspecialchars(BASE_URL . (isset($link['url']) ? $link['url'] : '#')); ?>">
															<?php echo htmlspecialchars(isset($link['label']) ? $link['label'] : ''); ?>
														</a>
														<p class="mb-0 small"><?php echo htmlspecialchars(isset($link['description']) ? $link['description'] : ''); ?></p>
														<ul class="list-inline mb-0 mt-3">
															<li class="list-inline-item">
																<a class="btn btn-white btn-sm shadow px-2 text-facebook"
																	href="https://www.facebook.com/Englishreservoir/" target="_blank" rel="noopener noreferrer"><i
																		class="fab fa-fw fa-facebook-f"></i></a>
															</li>
															<li class="list-inline-item">
																<a class="btn btn-white btn-sm shadow px-2 text-instagram"
																	href="https://www.instagram.com/english_reservoir/?hl=en" target="_blank" rel="noopener noreferrer"><i
																		class="fab fa-fw fa-instagram"></i></a>
															</li>
															<li class="list-inline-item">
																<a class="btn btn-white btn-sm shadow px-2 text-twitter"
																	href="https://twitter.com/EN_Reservoir" target="_blank" rel="noopener noreferrer"><i
																		class="fab fa-fw fa-twitter"></i></a>
															</li>
															<li class="list-inline-item">
																<a class="btn btn-white btn-sm shadow px-2 text-linkedin"
																	href="https://www.youtube.com/@EnglishReservoir/featured" target="_blank" rel="noopener noreferrer"><i
																		class="fab fa-fw fa-youtube"></i></a>
															</li>
														</ul>
													</div>
												</div>
											<?php endif; ?>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
						</li>
					<?php endforeach; ?>


				</ul>
			</div>
			<!-- Main navbar END -->



			<!-- Dark mode options START -->
			<div class="">
				<button class="btn btn-light btn-sm lh-1 p-2 mb-0 theme-toggle-button" id="bd-theme" type="button">
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-circle-half fa-fw theme-icon-active" viewBox="0 0 16 16">
						<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
						<use href="#"></use>
					</svg>
				</button>


				<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
					<li class="mb-1">
						<button type="button" class="dropdown-item d-flex align-items-center"
							data-bs-theme-value="light">
							<svg width="16" height="16" fill="currentColor"
								class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
								<path
									d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
								<use href="#"></use>
							</svg>Light
						</button>
					</li>
					<li class="mb-1">
						<button type="button" class="dropdown-item d-flex align-items-center"
							data-bs-theme-value="dark">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
								<path
									d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
								<path
									d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
								<use href="#"></use>
							</svg>Dark
						</button>
					</li>
					<li>
						<button type="button" class="dropdown-item d-flex align-items-center active"
							data-bs-theme-value="auto">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
								<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
								<use href="#"></use>
							</svg>Auto
						</button>
					</li>
				</ul>
			</div>
			<!-- Dark mode options END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->