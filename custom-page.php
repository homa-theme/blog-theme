<?php /* Template Name: Custom-Page */ ?>
<?php
  get_header();
  if (have_posts()):
  	while(have_posts()): the_post();?>
  		<article class="post">
        <h2><?php the_title(); ?></h2>
        <div class="info-box">
          <h4>WordPress default</h4>
          <p>WordPress default visual text editor doesn't support writing in RTL languages like Hebrew, Persian and Arabic. Therefore, if you're willing to write a post in one of those languages, you should either : </p>
        </div>
         <p><?php the_content(); ?></p>
      </article>
  	<?php endwhile;
  	else :
  		echo "NO CONTENT";
  endif;
  get_footer();

?>
