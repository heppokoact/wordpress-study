<?php get_header(); ?>

<?php while (have_posts()) { ?>
	<?php the_post(); ?>

	<?php if (has_post_thumbnail()) { ?>
		<div class="hero eyecatch">
			<?php the_post_thumbnail('easiestwp_hero'); ?>
		</div>
	<?php } ?>

	<div class="content-area has-side-col">
		<div class="main-column">
			<div class="box-generic">
				<h1 class="box-heading box-heading-article"><?php the_title(); ?></h1>
				<div class="box-content">

					<article class="entry">
						<?php the_content(); ?>
					</article>

					<div class="meta-data">
						<time class="meta meta-entry-date" datetime="<?php echo get_the_date(DATE_W3C); ?>"><?php echo get_the_date(); ?></time>
						<p class="meta meta-author"><?php the_author_posts_link(); ?></p>
						<p class="meta meta-cat"><?php the_category(); ?></p>
						<p class="meta meta-tag"><?php the_tags(); ?></p>
					</div>
					<?php the_meta(); ?>

					<?php the_post_navigation(array(
						'prev_text' => '前の記事',
						'next_text' => '次の記事'
					)); ?>
				</div>
			</div>

			<?php if (comments_open() || get_comments_number()) {
				comments_template();
			} ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php } ?>
<?php get_footer(); ?>
</body>

</html>