<?php
/**
 * The template used for displaying single post content in single.php
 */
global $location;
global $show_meta;
?>
<?php themeblvd_the_post_thumbnail( $location ); ?>
<span class="category-buttons2"><?php the_category(' '); ?></span>
<div class="article-wrap single-post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<?php if( $show_meta ) : ?>
				<?php themeblvd_blog_meta(); ?>
			<?php endif; ?>
			<?php if( comments_open() ): ?>
		        <div class="comment-bubble">
					<a href="<?php the_permalink(); ?>#comments" class="comments-link"><?php comments_number('0', '1', '%'); ?></a>
				</div>
	        <?php endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			
			<?php the_content(); ?>
			<?php themeblvd_blog_tags(); ?>
			<div class="clear"></div>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', TB_GETTEXT_DOMAIN ), 'after' => '</div>' ) ); ?>
			<?php edit_post_link( __( 'Edit', TB_GETTEXT_DOMAIN ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div><!-- .article-wrap (end) -->


