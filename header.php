<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth scrollbar-thin scrollbar-thumb-cod-gray-200 hover:scrollbar-thumb-cod-gray-100 active:scrollbar-thumb-cerulean-500 scrollbar-track-cod-gray-500">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-cod-gray-500 text-white antialiased font-blinker flex flex-col'); ?>>

	<nav class="fixed z-50 flex flex-col gap-2 bottom-4 left-4 text-cod-gray-500 ">
		<a class="flex items-center w-10 h-10 p-2 bg-white rounded-full" href="https://github.com/nikolailehbrink" target="_blank" rel="noopener noreferrer">

			<svg viewBox="0 0 98 96" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z" fill="currentColor" />
			</svg>
		</a>
		<a class="flex items-center justify-center w-10 h-10 p-3 bg-white rounded-full" href="https://linkedin.com/in/nikolailehbrink/" target="_blank" rel="noopener noreferrer">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
				<path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
			</svg>
		</a>
	</nav>

	<header class="container sticky z-50 flex mt-4 top-4">
		<nav class="hidden w-full p-2 border-2 rounded-full lg:flex border-cod-gray-200 bg-cod-gray-500">
			<div class="relative flex flex-1">
				<?php if (has_custom_logo()) { ?>
					<?php the_custom_logo(); ?>
				<?php } else { ?>
					<a href="<?php echo get_bloginfo('url'); ?>" class="text-lg font-extrabold uppercase">
						<?php echo get_bloginfo('name'); ?>
					</a>
				<?php } ?>
			</div>
			<ul class="flex items-center justify-center flex-1 gap-4 font-bold tracking-wide">
				<li class="flex items-center gap-2">
					<svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path class="uim-primary" d="M17.73657 14.62189l-2.426 2.23065a11.60327 11.60327 0 0 1-4.29847 2.36987l.64368 3.00318a1.0003 1.0003 0 0 0 1.46924.66162l3.90527-2.20264a3.03526 3.03526 0 0 0 1.375-3.30371zM7.26562 8.77588L9.35431 6.296l-2.6048-.62848A2.77711 2.77711 0 0 0 3.36279 7.0249L1.1626 10.9248A.99989.99989 0 0 0 1.82422 12.394l3.07275.65869A12.88652 12.88652 0 0 1 7.26562 8.77588zM16.73373 8.81626a1.5 1.5 0 1 0-1.5-1.5A1.50055 1.50055 0 0 0 16.73373 8.81626z"></path>
						<path class="uim-tertiary" d="M22.60107,2.062a1.00088,1.00088,0,0,0-.71289-.71289A11.24875,11.24875,0,0,0,10.46924,4.97217L7.26562,8.77588A12.93634,12.93634,0,0,0,4.3418,15.48682a1.00031,1.00031,0,0,0,.28466.83642l3.1001,3.1001a.99941.99941,0,0,0,.707.293c.02881,0,.05762-.00147.08692-.00391a11.84707,11.84707,0,0,0,6.79-2.85986l3.66308-3.36816A11.20387,11.20387,0,0,0,22.60107,2.062ZM16.7337,8.81622a1.5,1.5,0,1,1,1.5-1.5A1.50054,1.50054,0,0,1,16.7337,8.81622Z"></path>
					</svg>
					<a href="#services"><?php _e('Leistungen', 'symbos') ?></a>
				</li>
				<li class="flex items-center gap-2">
					<svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path class="uim-primary" d="M21 10H3A1 1 0 0 1 2 9V6A3.00328 3.00328 0 0 1 5 3H19a3.00328 3.00328 0 0 1 3 3V9A1 1 0 0 1 21 10zM14 14H10a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2z"></path>
						<path class="uim-tertiary" d="M4,10v8a3.00328,3.00328,0,0,0,3,3H17a3.00328,3.00328,0,0,0,3-3V10Zm10,4H10a1,1,0,0,1,0-2h4a1,1,0,0,1,0,2Z"></path>
					</svg>
					<a href="#projects"><?php _e('Projekte', 'symbos') ?></a>
				</li>
				<li class="flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="w-8">
						<path class="uim-tertiary" d="M19,6H5C3.34315,6,2,7.34315,2,9v2.72087L8.8374,14h6.3252L22,11.72087V9C22,7.34315,20.65685,6,19,6z"></path>
						<path class="uim-primary" d="M10,6V5h4v1h2V5c-0.00126-1.10405-0.89595-1.99874-2-2h-4C8.89595,3.00126,8.00126,3.89595,8,5v1H10z M8.8374,14L2,11.72083V18c0.00181,1.65611,1.34389,2.99819,3,3h14c1.65611-0.00181,2.99819-1.34389,3-3v-6.27917L15.1626,14H8.8374z"></path>
					</svg>
					<a href="#cv"><?php _e('Erfahrung', 'symbos') ?></a>
				</li>
				<li class="flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="w-8">
						<path class="uim-tertiary" d="M21.2,6.71l-7.58,7.58c-1.16755,1.17084-3.06319,1.17351-4.23404,0.00596C9.38397,14.29398,9.38198,14.29199,9.38,14.29L1.8,6.71C2.29464,5.66676,3.34544,5.00126,4.5,5h14C19.65456,5.00126,20.70536,5.66676,21.2,6.71z"></path>
						<path class="uim-quaternary" d="M21.20001,6.71002L13.62,14.28998c-1.16754,1.17084-3.06317,1.17352-4.23401,0.00598C9.38397,14.29401,9.38196,14.29199,9.38,14.28998L1.79999,6.71002C1.60345,7.11169,1.50085,7.5528,1.5,8v10c0.00488,1.65485,1.34515,2.99512,3,3h14c1.65485-0.00488,2.99512-1.34515,3-3V8C21.49915,7.5528,21.39655,7.11169,21.20001,6.71002z"></path>
						<path class="uim-primary" d="M17.67188,12c-0.26521,0.00002-0.51955-0.10538-0.707-0.293L13.793,8.53613c-1.26645-1.26667-1.26627-3.32018,0.0004-4.58663c1.02674-1.02657,2.61067-1.24566,3.87753-0.53637c1.27183-0.68512,2.84085-0.46806,3.8789,0.53662c1.26465,1.26708,1.26465,3.31885,0,4.58593L18.37891,11.707C18.19145,11.89462,17.9371,12.00003,17.67188,12z"></path>
					</svg>
					<a href="#contact"> <?php _e('Kontakt', 'symbos') ?></a>
				</li>
			</ul>
			<div class="flex justify-end flex-1">

				<a class="btn btn-cerulean" href="#contact"><?php _e('Kontaktieren', 'symbos') ?></a>
			</div>


		</nav>


		<!-- <div class="container mx-auto">
				<div class="py-6 border-b lg:flex lg:justify-between lg:items-center">
					<div class="flex items-center justify-between">
						<div>
							<?php if (has_custom_logo()) { ?>
								<?php the_custom_logo(); ?>
							<?php } else { ?>
								<a href="<?php echo get_bloginfo('url'); ?>" class="text-lg font-extrabold uppercase">
									<?php echo get_bloginfo('name'); ?>
								</a>

								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo('description'); ?>
								</p>

							<?php } ?>
						</div>

						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
										</g>
									</g>
								</svg>
							</a>
						</div>
					</div>

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex lg:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-4',
							'fallback_cb'     => false,
						)
					);
					?>
				</div>
			</div> -->
	</header>

	<main>