<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); 
?>

<!-- Section 1 new-->
    <div class="container-fluid breaking-news">
        <div class="row">
            <div class="col-12">
                <ul class="big-news">
                    <?php
                    $post_index = 0;
                    $breaking_array = get_posts( 'numberposts=5' );
                    foreach($breaking_array as $post) :  
                    ?>
                        <li class="<?php if($post_index==0) echo 'first-news'; else echo ''?>">
                            <div class="news-item">
                                <p class="news-cat"><?php $categories = get_the_category(); echo $categories[0]->name; ?></p>
                                <div class="news-img">
                                <img src="<?php 
                                    if(has_post_thumbnail($post->ID))
                                        the_post_thumbnail_url( 'full' );
                                    else echo mmimg($post->ID);
                                 ?>" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="news-caption">
                                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_date(); ?></p>
                                </div>
                            </div>
                        </li>
                    <?php 
                    $post_index++;
                    endforeach; ?>
                    
                </ul>
            </div>
        </div>
    </div>




    <!-- Section 1 new end-->

    <!--Main Section-->
    
    <div class="container-fluid main-section">
        <div class="row">
            <div class="col-12 col-lg-8 main-content">
                <!-- main contient-->
                <div class="row" style="margin-bottom:40px">
                    <div class="col-12">
                        
                        <h2 class="title-2"><span>Latest News</span></h2>
                        <ul class="article-2">
                            <?php 
                            $latest_posts = get_posts( 'numberposts=4' );
                            foreach($latest_posts as $post) :                
                            ?>
                            <li>
                                <div class="article-img">
                                <?php
                                //获取图片地址，如果没有featured image就用文章第一个图片
                                $attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
                                ?>
                                <img src="<?php 
                                    if(has_post_thumbnail($post->ID))
                                        the_post_thumbnail_url( 'full' );
                                    else echo mmimg($post->ID);
                                 ?>" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="article-content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p class="article-meta">by <span><?php echo get_the_author_meta('display_name',$post->post_author); ?></span> <i class="fa fa-clock-o" aria-hidden="true"></i> <span><?php echo get_the_date();?></span></p>
                                <p class="short-description"><?php the_excerpt();?></p>
                                </div>
                            </li>
                            <?php endforeach; ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="title-2"><span>Latest News</span></h2>
                        <ul class="article-1">
                        <?php 
                            $latest_posts = get_posts( 'numberposts=6' );
                            foreach($latest_posts as $post) :                
                        ?>
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
                            <?php endforeach; ?>
                            
                        </ul>
                    </div>
                </div>
                <!--main contient end-->
            </div>


            <div class="col-12 col-lg-4 sidebar-right">
                <?php get_sidebar(); ?>

                
            </div>
        </div>
    </div>






    <!--Main Section End-->


<?php get_footer(); ?>