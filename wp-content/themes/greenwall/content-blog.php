<?php
    $date=new DateTime($post->post_date);
    $date=$date->format('Y/m/d');
    $count=getPostViews($post->ID);

    $author=get_the_author_meta( 'display_name', $post->post_author );
    $author_posts=get_the_author_meta( 'user_url', $post->$post_author );
?>
<div id="blog-details">
		<header>
			<?php echo do_shortcode('[title title="Blog Details" class="contact-bg"][/title]');?>
		</header>
		<div id="mainArticle" class="container">
			<article>
				<figure>
					<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>" alt="view hydroponics">
				</figure>
					<div class="article-content">
						<head>
							<h2><?php the_title();?></h2>
						</head>
						<footer>
							<ul>
								<li><i class="icon-user"></i><a href="#"><span><?php echo $author; ?></span></a></li>
								<li><i class="icon-calendar"></i><span><?php echo $date;?></span></li>
								<li><i class="icon-bubbles4"></i><a href="#"><span><?php echo $post->comment_count;?></span></a></li>
								<li><i class="icon-eye"></i><span><?php echo $count;?></span></li>
							</ul>
						</footer>
						<div>
							<p><?php the_content();?></p>
					</div>
					<div class="post-share-social">
						<nav>
							<ul>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
							</ul>
						</nav>
					</div>
			</article>			
		</div>
</div>
<?php get_footer(); ?>