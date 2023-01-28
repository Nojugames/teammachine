<?php get_header(); ?>
    <main id="content" role="main" class="container mt-5">

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>
                <div class="col-lg-4 col-xl-3 side-bar-container">
					<?php get_sidebar(); ?>
                </div>
                <div class="col-lg-8 col-xl-9 main-content">
	                <?php if ( have_posts() ) : ?>
                    <header class="header">
                        <h1 class="entry-title"
                            itemprop="name"><?php printf( esc_html__( 'Search Results for: %s', 'teammachine' ), get_search_query() ); ?></h1>
                    </header>
	                <?php while ( have_posts() ) : the_post(); ?>
		                <?php get_template_part( 'entry' ); ?>
	                <?php endwhile; ?>
	                <?php else : ?>
                        <header class="header">
                            <h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Nothing Found', 'teammachine' ); ?></h1>
                        </header>
                        <div class="entry-content" itemprop="mainContentOfPage">
                            <p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'teammachine' ); ?></p>
			                <?php get_search_form(); ?>
                        </div>
	                <?php endif; ?>
                </div>
            </article>


    </main>
<?php get_footer(); ?>