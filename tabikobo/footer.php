<footer>
<div class="rowwidth">
	<div class="footer">
		<div class="logo_footer">
			<h3><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_footer.png"></a></h3>
		</div>
		<div class="menu_footer">
			<?php tabikobo_footer_menu(); ?>
			<!-- <ul>
				<li><a href="#">プライバシーポリシー</a></li>
				<li><a href="#">会社概要</a></li>
				<li><a href="#">ニュース</a></li>
				<li><a href="#">お問い合わせ</a></li>
				<li><a href="#">サイトマップ</a></li>
			</ul> -->
		</div>
	</div>
</div>
</footer>
<div class="copyright_dr">
	<div class="rowwidth">
		<p class="copyright">&copy; <?php echo date("Y"); ?> TABIKOBO VIETNAM Co. Ltd</p>
	</div>
</div><!-- footer -->
<?php wp_footer(); ?>
</body>
</html>