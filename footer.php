</main>

<footer id="colophon" class="py-6 site-footer bg-cod-gray-600" role="contentinfo">

	<div class="container flex justify-between max-lg:flex-col">
		<span>
			&copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
		</span>
		<div class="flex gap-2">
			<a href="/datenschutz">Datenschutzerklärung</a> |
			<a href="/impressum">Impressum</a>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>