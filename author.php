<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

			<h2 class="page-title author"><?php printf(__('Author Archives: <span class="vcard">%s</span>', 'codium_extend'), "<a class='url fn n' href='$authordata->user_url' title='$authordata->display_name' rel='me'>$authordata->display_name</a>") ?></h2>

			<?php if ( get_the_author_meta( 'description' ) ) : ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'codium_extend', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description" class="entry-content">
							<h3><?php printf( __( '%s', 'codium_extend' ), get_the_author() ); ?></h3>
							<div class="clear"></div>
							<p><?php the_author_meta( 'description' ); ?></p>
						</div><!-- #author-description	-->
					</div><!-- #entry-author-info -->
					<div class="linebreak clear"></div>
			<?php endif; ?>

<?php rewind_posts(); while (have_posts()) : the_post(); ?>

			<!-- Begin post -->
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
				<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Link to %s', 'codium_extend'), esc_html(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h2>
				<div class="entry-date"><?php unset($previousday); printf(__('%1$s &#8211; %2$s', 'codium_extend'), the_date('', '', '', false), get_the_time()) ?></div>
									
						<div class="entry-content">
					<?php the_content(''.__('read more <span class="meta-nav">&raquo;</span>', 'codium_extend').''); ?>
					<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'codium_extend'), "</div>\n", 'number'); ?>
						</div>
						<div class="clear"></div>
						<div class="entry-meta">
							<?php the_tags(__('<span class="tag-links">Tags ', 'codium_extend'), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n") ?>
							<?php edit_post_link(__('Edit', 'codium_extend'), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n"); ?>
							<a href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>" rel="bookmark"><?php printf(__('Permalink', 'codium_extend')) ?></a> <span class="meta-sep">|</span>
							<span class="comments-link"><?php comments_popup_link(__('Comment (0)', 'codium_extend'), __('Comment (1)', 'codium_extend'), __('Comments (%)', 'codium_extend')) ?></span>
						</div>
						
			</div>
			<!-- End post -->
			
			<div class="linebreak clear"></div>


<?php endwhile ?>

<div class="center">			
	<?php if(function_exists('wp_pagenavi')) { 
		wp_pagenavi();
	} else {?>
		<div class="navigation mobileoff"><p><?php posts_nav_link(); ?></p></div>
		 <?php } ?>  
		<div class="navigation_mobile"><p><?php posts_nav_link(); ?></p></div> 
</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>