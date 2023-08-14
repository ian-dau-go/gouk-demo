<?php
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Home</title>
	<?php
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/index.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/cdnjs.cloudflare.com_ajax_libs_OwlCarousel2_2.3.4_assets_owl.carousel.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/cdnjs.cloudflare.com_ajax_libs_OwlCarousel2_2.3.4_assets_owl.theme.default.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/bootstrap.min.css" rel="stylesheet');
	wp_enqueue_style('style', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<script src="assets/js/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_js_bootstrap.bundle.min.js"></script>
	<script src="assets/js/ajax.googleapis.com_ajax_libs_jquery_3.6.4_jquery.min.js"></script>
	<script src="assets/js/cdnjs.cloudflare.com_ajax_libs_OwlCarousel2_2.3.4_owl.carousel.js"></script>
	<script src="assets/js/cdnjs.cloudflare.com_ajax_libs_OwlCarousel2_2.3.4_owl.carousel.min.js"></script>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site" style="height: 100vh">
		<div class style="background: white">
			<section>
				<div class="row mx-auto">
					<div class="__px-100px container-fluid gouk--header">
						<div class="Frame9198 row mx-auto justify-content--space-between">
							<div class="Frame9545 pl-0 col-2 col-md-3 col-lg-3">
								<a href="https://goldenowl.uk/">
									<img class="logo" src="<?php echo get_template_directory_uri() . '/assets/images/gouklogo.svg' ?>" alt />
								</a>
							</div>
							<div class="frame9197 my-auto col-10 col-md-9 col-lg-9">
								<nav class="nav-bar">
									<input type="checkbox" id="drop-down-cbox" />
									<label for="drop-down-cbox">
										<span></span>
										<span></span>
										<span></span>
									</label>
									<ul class="main-nav my-auto small-caps d-flex justify-content-between align-items-cente">
										<li>
											<div class="frame9461">
												<a class="AboutUs" href="https://goldenowl.asia/about-us">About us</a>
											</div>
										</li>
										<li>
											<div class="frame9461">
												<a class="Service" href="/service.html">Service</a>
												<div class="Frame9456">
													<img width="12px" height="14px" src="Image/frame9456.svg" alt srcset />
												</div>
											</div>
										</li>
										<li>
											<div class="frame9461">
												<a class="Blog" href="/blog.html">Blog</a>
											</div>
										</li>
										<li>
											<div class="frame9461">
												<a class="Partners" href="https://goldenowl.asia/partnership">Partners</a>
											</div>
										</li>
										<li>

											<div class="frame9461">
												<a class="SuccessStories" href="https://goldenowl.asia/portfolio">Success
													Stories</a>
											</div>
										</li>
										<li>
											<div class="frame9466">
												<a class="ContactUs" href="https://goldenowl.asia/contact-us">Contact
													us</a>
											</div>
										</li>
									</ul>
							</div>
							</nav>
						</div>
					</div>
				</div>
			</section>