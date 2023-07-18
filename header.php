<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth scrollbar-thin scrollbar-thumb-cod-gray-200 hover:scrollbar-thumb-cod-gray-100 active:scrollbar-thumb-cerulean-500 scrollbar-track-cod-gray-500">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-cod-gray-500 text-white antialiased font-blinker flex flex-col overflow-x-hidden'); ?>>

	<nav class="fixed z-50 flex flex-col gap-2 lg:bottom-4 max-lg:right-2 bottom-2 lg:left-4 text-cod-gray-500 ">

		<a class="flex items-center w-10 h-10 p-2 bg-white rounded-full" href="https://github.com/nikolailehbrink" target="_blank" rel="noopener noreferrer">
			<svg viewBox="0 0 98 96" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z" fill="currentColor" />
			</svg>
		</a>
		<a class="flex items-center w-10 h-10 p-3 bg-white rounded-full" href="https://linkedin.com/in/nikolailehbrink/" target="_blank" rel="noopener noreferrer">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
				<path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" fill="currentColor" />
			</svg>
		</a>
	</nav>

	<header class="container sticky z-50 flex mt-4 max-lg:justify-start top-4">
		<label for="menu-toggle" class="fixed flex flex-col w-12 h-12 p-2 border-2 rounded cursor-pointer right-4 lg:hidden bg-cod-gray-400 border-cod-gray-300">
			<input class="hidden peer" type="checkbox" id="menu-toggle">
			<span class="w-1/2 peer-checked:translate-x-[5px] h-[3px] my-[3px] peer-checked:rotate-45 peer-checked:origin-top-left peer-checked:w-full transition-all bg-white rounded"></span>
			<span class="w-full h-[3px] my-[3px] peer-checked:-rotate-45 peer-checked:translate-y-[1px] transition-all bg-white rounded"></span>
			<span class="w-3/4 h-[3px] my-[3px] peer-checked:opacity-0 peer-checked:w-0 peer-checked:-rotate-45 transition-all bg-white rounded"></span>
		</label>

		<nav id="main-menu" class="flex p-2 border-2 rounded-lg max-lg:translate-x-[calc(100%_+_1rem)] max-lg:transition-transform max-lg:mr-4 max-lg:right-0 max-lg:top-20 max-lg:fixed max-lg:p-8 lg:rounded-full lg:w-full max-lg:flex-col max-lg:items-center max-lg:gap-6 border-cod-gray-200 bg-cod-gray-500">
			<div class="relative flex flex-1">
				<?php if (has_custom_logo()) { ?>
					<?php the_custom_logo(); ?>
				<?php } else { ?>
					<a href="<?php echo get_bloginfo('url'); ?>" class="text-lg font-extrabold uppercase">
						<?php echo get_bloginfo('name'); ?>
					</a>
				<?php } ?>
			</div>
			<ul class="flex justify-center flex-1 gap-4 font-bold tracking-wide lg:items-center max-lg:flex-col">
				<li class="flex items-center gap-2">
					<svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path class="uim-primary" d="M17.73657 14.62189l-2.426 2.23065a11.60327 11.60327 0 0 1-4.29847 2.36987l.64368 3.00318a1.0003 1.0003 0 0 0 1.46924.66162l3.90527-2.20264a3.03526 3.03526 0 0 0 1.375-3.30371zM7.26562 8.77588L9.35431 6.296l-2.6048-.62848A2.77711 2.77711 0 0 0 3.36279 7.0249L1.1626 10.9248A.99989.99989 0 0 0 1.82422 12.394l3.07275.65869A12.88652 12.88652 0 0 1 7.26562 8.77588zM16.73373 8.81626a1.5 1.5 0 1 0-1.5-1.5A1.50055 1.50055 0 0 0 16.73373 8.81626z"></path>
						<path class="uim-tertiary" d="M22.60107,2.062a1.00088,1.00088,0,0,0-.71289-.71289A11.24875,11.24875,0,0,0,10.46924,4.97217L7.26562,8.77588A12.93634,12.93634,0,0,0,4.3418,15.48682a1.00031,1.00031,0,0,0,.28466.83642l3.1001,3.1001a.99941.99941,0,0,0,.707.293c.02881,0,.05762-.00147.08692-.00391a11.84707,11.84707,0,0,0,6.79-2.85986l3.66308-3.36816A11.20387,11.20387,0,0,0,22.60107,2.062ZM16.7337,8.81622a1.5,1.5,0,1,1,1.5-1.5A1.50054,1.50054,0,0,1,16.7337,8.81622Z"></path>
					</svg>
					<a href="#services"><?php _e('Services', 'symbos') ?></a>
				</li>
				<li class="flex items-center gap-2">
					<svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path class="uim-primary" d="M21 10H3A1 1 0 0 1 2 9V6A3.00328 3.00328 0 0 1 5 3H19a3.00328 3.00328 0 0 1 3 3V9A1 1 0 0 1 21 10zM14 14H10a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2z"></path>
						<path class="uim-tertiary" d="M4,10v8a3.00328,3.00328,0,0,0,3,3H17a3.00328,3.00328,0,0,0,3-3V10Zm10,4H10a1,1,0,0,1,0-2h4a1,1,0,0,1,0,2Z"></path>
					</svg>
					<a href="#projects"><?php _e('Projects', 'symbos') ?></a>
				</li>
				<li class="flex items-center gap-2">
					<svg class="w-7" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
						<path class="uim-primary" d="m6.002 20.001.002 1a1 1 0 0 0 1 .998h.003a1 1 0 0 0 .997-1.003l-.002-.995h-2z"></path>
						<path class="uim-primary" d="M14 2.001h2v18h-2z"></path>
						<path class="uim-tertiary" d="M17 2.001h-1v18h-2v-18H5a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h12a3.003 3.003 0 0 0 3-3v-12a3.003 3.003 0 0 0-3-3z"></path>
					</svg>
					<a href="#experience"><?php _e('Experience', 'symbos') ?></a>
				</li>
				<li class="flex items-center gap-2 lg:hidden">
					<svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path class="uim-tertiary" d="M12 21H4a1 1 0 0 1-.707-1.707l1.675-1.675A9 9 0 1 1 12 21Z"></path>
						<path class="uim-primary" d="M15.92 10.76a.997.997 0 0 1-.707-.293l-1.92-1.92a1 1 0 0 1 1.414-1.414l1.213 1.213 3.373-3.373a1 1 0 0 1 1.414 1.414l-4.08 4.08a.997.997 0 0 1-.707.293Z"></path>
					</svg>
					<a href="#contact"> <?php _e('Contact', 'symbos') ?></a>
				</li>
			</ul>
			<div class="justify-end flex-1 hidden lg:flex">

				<a class="btn btn-cerulean" href="#contact">
					<svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path class="uim-tertiary" d="M12 21H4a1 1 0 0 1-.707-1.707l1.675-1.675A9 9 0 1 1 12 21Z"></path>
						<path class="uim-primary" d="M15.92 10.76a.997.997 0 0 1-.707-.293l-1.92-1.92a1 1 0 0 1 1.414-1.414l1.213 1.213 3.373-3.373a1 1 0 0 1 1.414 1.414l-4.08 4.08a.997.997 0 0 1-.707.293Z"></path>
					</svg>
					<?php _e('Contact', 'symbos') ?>
				</a>
			</div>
		</nav>

	</header>

	<main>