<?php

/* Template Name: MOH Search */

$pageRoot = getRoot($post);
$section = get_post($pageRoot);
$isRoot = $section->ID == $post->ID;

get_header();

?>

<?php get_template_part('inc/breadcrumbs'); ?>

<?php while ( have_posts() ) : the_post(); ?>		
		
	<div id="stage" class="group" role="main">
				
		<div class="title-page flex-container">
			<?php if ($isRoot): ?>
			<h2><?php echo $section->post_title; ?></h2>
			<?php else: ?>
			<h2><a href="<?php echo get_permalink($section->ID) ?>"><?php echo $section->post_title; ?></a></h2>
			<?php endif; ?>
			<div class="extraInfo">
				<a href="<?php echo home_url(); ?>"><i class="icon-arrow-right"></i> Back to Music Oral History home</a>
			</div>
		</div>
		<div class="content-main group">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer class="entry-meta group">
				<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			</footer>
			<div class="search-area group">
				<span class="search-help"><strong>Notes on searching:</strong> Phrase searching (with quotes) is available. In the search results, click on any blue segment under each interviewee and scan that part of the transcript to find your search terms - click the small blue play button next to the time to play that segment.</span>
				<div class="playerWrap group">
					<div id="collection"></div>
					<div id="video"></div>
					<div id="transcript"></div>
				</div>
			</div>
		</div>
	</div><!--end div#content -->
		
<?php endwhile; ?>

<?php get_footer(); ?>