<?php get_header(); ?>
<div class="container-fluid" style="margin-top:7em">
    <div class="row">
        <div class="col-12 col-lg-8 card" style="padding-top: 1em">
         
            <?php
			if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>

        <div class="col-12 col-lg-4 sidebar-right">
                <?php get_sidebar(); ?>

                
            </div>
    </div>
</div>


<?php get_footer(); ?>