<?php
/**
 * The default template for displaying content in blogroll.
 */
global $location;
global $size;
global $content;
?>

<div class="article-wrap">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
		
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<?php if( comments_open() && 'show' == themeblvd_get_option( 'post_list_comment_link', null, 'show' ) ): ?>
		        <div class="comment-bubble">
					<a href="<?php the_permalink(); ?>#comments" class="comments-link"><?php comments_number('0', '1', '%'); ?></a>
				</div>
	        <?php endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			
			 <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?>
			<span  class="post-para">
			<?php if( 'show' == themeblvd_get_option( 'post_list_meta', null, 'show' ) ) : ?>
				 		<div class="entry-meta">
					 			<span class="sep"><?php echo $text['posted_on']; ?></span>
					 			<time class="entry-date" datetime="<?php the_time('c'); ?>" pubdate><?php the_time( get_option('date_format') ); ?></time>
					 			<div class="author-info"><span >Posted by </span>
					 			<span class="author vcard"><a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php echo sprintf( esc_attr__( 'View all posts by %s', TB_GETTEXT_DOMAIN ), get_the_author() ); ?>" rel="author"><?php the_author(); ?></a></span></div>
					 			
					 			
					 			
						</div><!-- .entry-meta -->	
			<?php endif; ?>

			<?php themeblvd_blog_content( $content ); ?>
			<span class="category-buttons"><?php the_category(' '); ?></span>
			</span>
			
			
			<div class="clear"></div>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div><!-- .article-wrap (end) -->
