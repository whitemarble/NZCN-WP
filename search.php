
<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

    <div class="container-fluid main-section post-content">
        <div class="row" >
<div  class="col-1 col-lg-1 main-content">

</div>

    <content class="col-12 col-lg-7 main-content  post-content-artricle">
    <div class="row">
                    <div class="col-12">

                        <ul class="article-1">
<?php 
 $posts=query_posts($query_string .'&posts_per_page=20'); 
                        if (have_posts()) :     
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                        <div class="card">
                            <li>
                    
                                <div class="article-img">
                                <img src="<?php 
                                    if(has_post_thumbnail($post->ID))
                                        the_post_thumbnail_url( 'full' );
                                    else echo mmimg($post->ID);
                                 ?>" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="article-content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p class="article-meta">by <span><?php echo get_the_author_meta('display_name',$post->post_author); ?></span> <i class="fa fa-clock-o" aria-hidden="true"></i> <span><?php echo get_the_date();?></span></p>
                                <p class="short-description"><?php the_excerpt(); ?></p>
                                </div>

                            </li>
                         </div>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
    </content>

    <aside class="col-12 col-lg-4 sidebar-right">

<?php get_sidebar(); ?> 
    </aside>


</div>
</div>
<ul class="post-social">
<i class="fa fa-facebook-square" aria-hidden="true"></i>
<i class="fa fa-twitter-square" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-weibo" aria-hidden="true"></i>
                    <i class="fa fa-weixin" aria-hidden="true"></i>
</ul>


<?php get_footer(); ?>