<?php get_header(); ?>

    <div class="container-fluid main-section post-content">
        <div class="row" >

	<content class="col-12 col-lg-8 main-content card" style="margin-bottom:30px">
        <h1 class=" card-title post-content-title">
            <?php the_title(); ?> 
        </h1>

        <div class="row">
            <article class="col-xs-12 col-sm-10 card-text post-content-artricle">
            <?php 

            if (have_posts()) :
                            while (have_posts()) :
                                the_post();
                                the_content();
                            endwhile;
                        endif;
            ?>
            </article>


            <ul class="col-2 meta-wrapper hidden-xs-down">
                <div class="meta-content"><?php echo get_the_date();?>
                    <div class="meta-tooltip ">
                    <div class="arrow-left"></div>
                        <span class="meta-title">Posted in</span>
                        <p style="color: whitesmoke"> <?php echo get_the_date();?> </p>
                    </div>
                </div>

                <div class="meta-content" >
                    <!--<figure class="meta-figure" >
                    <?php if (empty(get_avatar( get_the_author_email(), 60 ))) {
                    echo get_avatar( get_the_author_email(), 60 ); 
                    echo "string".get_the_author_email();
                    } else{ ?>

                    <i class="fa fa-user" aria-hidden="true"></i>
                    <?php } ?>
                    </figure>-->
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <div class="meta-tooltip ">
                        <div class="arrow-left"></div>
                            <p><?php echo get_the_author_meta('display_name',$post->post_author);?></p>
                    </div>
                </div>   
                                
                <div class="meta-content" >
                    <i class="fa fa-archive" aria-hidden="true"></i>
                    <div class="meta-tooltip ">
                        <div class="arrow-left"></div>
                            <span class="meta-title">Posted in</span><p style="color: whitesmoke"><?php the_category(); ?></p>
                    </div>
                </div>
                            
                <div class="meta-content" >
                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                    <div class="meta-tooltip ">
                        <div class="arrow-left"></div>
                        <p class="meta-social">
                            <a href="https://www.facebook.com/nzchinasociety" ><i class="fa fa-facebook-square meta-social-ico" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/nzchinasociety" ><i class="fa fa-twitter-square meta-social-ico" aria-hidden="true" style="margin-left:5px"></i></a>
                            <a href="https://www.youtube.com/user/nzchinasociety" <i class="fa fa-youtube-play meta-social-ico" aria-hidden="true" style="margin-left:5px"></i></a>
                            <a href="https://plus.google.com/101043413726480715544"><i class="fa fa-google-plus-square meta-social-ico" aria-hidden="true" style=" margin-left:5px"></i></a></p>
                    </div>
                </div>
            </ul>
        </div>
	</content>
    <aside class="col-12 col-lg-4 sidebar-right">
        <?php get_sidebar(); ?> 
	</aside>


</div>
</div>


<?php get_footer(); ?>