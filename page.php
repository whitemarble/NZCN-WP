<?php get_header(); ?>
<div class="container-fluid" style="margin-top:300px">
    <div class="row">
        <div class="col-12">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <?php
			if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>