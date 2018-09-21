<?php
  get_header();
  if (have_posts()):
  	while(have_posts()): the_post();?>
  		<article class="post">
        <span class="parent_link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></h3>
        <nav class="site-nav children_links clearfix">
          <ul>
            <?php
              $args = array(
                'child_of' => get_top_ancestor_id() ,
                title_li   => ''
              );
              wp_list_pages($args);
            ?>
          </ul>
        </nav>
        <h2><?php the_title(); ?></h2>
    		<p><?php the_content(); ?></p>
      </article>
  	<?php endwhile;
  	else :
  		echo "NO CONTENT";
  endif;
  get_footer();

?>
