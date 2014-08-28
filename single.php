<?php get_header() ?>

	<div id="container">
		<div id="content">
			<?php the_post(); ?>
			

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<h2 class="single-entry-title"><?php the_title(); ?></h2>
					<div class="entry-date"><span ><?php printf(__('%s', 'codium_extend'), get_the_category_list(' ')) ?></span>&nbsp;<?php unset($previousday); printf(__('%1$s  ', 'codium_extend'), the_date('', '', '', false), get_the_time()) ?></div> 
            
				<div class="linebreak"></div>
		  <div class="entry-content">
					<?php the_content(''.__('', 'codium_extend').''); ?>
					
					<div class="clear"></div>
					<?php wp_link_pages(array('before' => '<div class="pages" >分页：', 'after' => '', 'next_or_number' => 'next', 'previouspagelink' => '上一页', 'nextpagelink' => "")); ?>
<?php wp_link_pages(array('before' => '', 'after' => '', 'next_or_number' => 'number', 'link_before' =>'<span>', 'link_after'=>'</span>')); ?>
<?php wp_link_pages(array('before' => '', 'after' => '</div>', 'next_or_number' => 'next', 'previouspagelink' => '', 'nextpagelink' => "下一页")); ?>
					
					<?php if (is_single() && function_exists('wp23_related_posts') ) { ?>
						<?php wp23_related_posts(); ?>
					<?php } ?>			
                    
			  </div>
	
<!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_b" style="line-height: 12px;"><img src="http://bdimg.share.baidu.com/static/images/type-button-5.jpg" />
		<a class="shareCount"></a>
	</div>
<script type="text/javascript" id="bdshare_js" data="type=button&amp;mini=1&amp;uid=796785" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<!-- Baidu Button END -->
					  <div align="right"><?php the_tags(__('<span class="tag-links">Tags ', 'codium_extend'), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\"></span>\n") ?>
                       
			  </div>
			  <div class="clear"></div>
			</div><!-- .post -->

			<div class="linebreak"></div>
			
			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span> %title') ?></div>
				<div class="nav-next"><?php next_post_link('%link', '%title <span class="meta-nav">&raquo;</span>') ?></div>
			</div>
			
			<?php comments_template(); ?> 


		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
