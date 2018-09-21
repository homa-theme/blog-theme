<footer class="site-footer">
	<nav class="site-nav">
		<?php
		 $args = array(
			 'theme_location'=>'footer'
		 );
		 ?>
		<?php wp_nav_menu($args); ?>
	</nav>
	<p><?php echo bloginfo('title'). "&copy" .date('Y');?></p>
</footer>
</div>
<?php wp_footer();?>
</body>
</html>
