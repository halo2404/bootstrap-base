<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php get_sidebar(); ?>
            </div><!—- .col-sm-3 —->

            <div class="col-sm-9">
                <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <?php } // end while
            } // end if
            ?>
            </div><!—- .col-sm-9 —->

        </div><!-- .row -->
    </div><!-- .container -->
    
<?php get_footer(); ?>