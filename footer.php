<footer class="footer">
		<div class="footer__wrapper">
			<div class="footer__articles">
				<h3 class="footer__articles__title">Articole</h3>
				<span>
					<li>lorem</li>
					<li>lorem</li>
					<li>lorem</li>
					<li>lorem</li>
				</span>
			</div>
			<div class="footer__seeds">
				<h3 class="footer__seeds__title">Ulei din seminte de</h3>
				<span>
					<li>lorem dfjkdh </li>
					<li>lorem cdscdsv</li>
					<li>lorem dscdscds </li>
					<li>lorem dscdscds</li>
				</span>
			</div>
			<div class="footer__about">
				<h3 class="footer__about__title">Despre noi:</h3>
				<img src="<?php echo bloginfo("template_url");?>/assets/img/about.jpg" alt="Despre noi">
			</div>
		</div>

	</footer>

	<!-- Подключаем jQuery -->
	<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
	<!-- Подключаем файл JS скриптов -->
	<?php
		wp_footer(  );
	?>
</body>

</html>