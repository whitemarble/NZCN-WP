<?php
/*
Template Name: Home Page English
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
                    //'suppress_filters' => false  仅获取当前语言文章
                    $breaking_array = get_posts( 'numberposts=5&suppress_filters=0' );
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
                <!-- latest news-->
                <div class="row section">
                    <div class="col-12">
                        <h2 class="title-2"><span>Latest News & Articles</span></h2>
                        <ul class="article-1">
                        <?php 
                            $latest_posts = get_posts( 'numberposts=4&suppress_filters=0' );
                            foreach($latest_posts as $post) :                
                        ?>
                            <li>
                                <div class="article-img">
                                <img src="<?php 
                                    if(has_post_thumbnail($post->ID))
                                        the_post_thumbnail_url( 'large' );
                                    //else echo mmimg($post->ID);
                                 ?>" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="article-content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p class="article-meta">
                                    <i class="fa fa-archive" aria-hidden="true"></i> 
                                    <span>
                                        <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>">
                                        <?php $categories = get_the_category(); echo $categories[0]->name; ?>
                                        </a>
                                    </span> <i class="fa fa-clock-o" aria-hidden="true"></i> 
                                    <span><?php echo get_the_date();?></span></p>
                                <p class="short-description"><?php the_excerpt(); ?></p>
                                </div>
                            </li>
                            <?php endforeach; ?>
                            
                        </ul>
                    </div>
                </div><!-- latest news end-->

                <!-- See more of china-->
                <div class="row section">
                    <div class="col-12">
                        <h3 class="title-2"><span>SEE MORE OF CHINA WITH NZCFS TOURS</span></h3>
                        <ul class="article-1">
                        <?php 
                            $latest_posts = get_posts( 'numberposts=2&category=68&suppress_filters=0' );
                            foreach($latest_posts as $post) :                
                        ?>
                            <li>
                                <div class="article-img">
                                <img src="<?php 
                                    if(has_post_thumbnail($post->ID))
                                        the_post_thumbnail_url( 'thumbnail' );
                                    //else echo mmimg($post->ID);
                                 ?>" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="article-content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                               
                                <p class="short-description"><?php the_excerpt(); ?></p>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- See more of china end-->

                <!-- New to New Zealand-->
                <div class="row section">
                    <div class="col-12">
                        <h2 class="title-2"><span>NEW TO NEW ZEALAND</span></h2>
                        <ul class="article-1">
                        <?php 
                            $post = get_post( '4680' );               
                        ?>
                            <li>
                                <div class="article-img">
                                <img src="<?php 
                                    if(has_post_thumbnail($post->ID))
                                        the_post_thumbnail_url( 'large' );
                                    //else echo mmimg($post->ID);
                                 ?>" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="article-content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                
                                <p class="short-description"><?php the_excerpt(); ?></p>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    
                </div>
                
                <!-- New to New Zealand end-->

                <!-- Learn about-->
                <div class="row" style="margin-bottom:40px">
                    <div class="col-12">
                        <ul class="article-2">
                            <li>
                            <h3 class="title-3"><span>LEARN ABOUT REWI ALLEY(1897-1987)</span></h3>
                                <div class="article-img">
                                <img src="http://test.nzchinasociety.org.nz/wp-content/uploads/2017/04/placeholder.png" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="article-content">
                                <!--<h4><a href=""><?php the_title(); ?></a></h4>-->
                                <p class="short-description">The most famous New Zealander in China - Rewi Alley contributed perhaps more than any other foreigner to the Chinese revolution. He was the founder...</p>
                                </div>
                            </li>
                            <li>
                            <h3 class="title-3"><span>LEARN ABOUT HE MING QING</span></h3>
                                <div class="article-img">
                                <img src="http://test.nzchinasociety.org.nz/wp-content/uploads/2017/04/placeholder.png" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="article-content">
                                <!--<h4><a href=""><?php the_title(); ?></a></h4>-->
                                <p class="short-description">Kathleen Hall was a New Zealand missionary nurse in China who worked in poor rural areas under extremely difficult …</p>
                                </div>
                            </li>
      
                        </ul>
                    </div>
                </div>
                <div class="row" style="margin-bottom:40px">
                    <div class="col-12">
                        <ul class="article-2">
                            <li>
                            <h3 class="title-3"><span>GUNG HO CO-OPERATIVES</span></h3>
                                <div class="article-img">
                                <img src="http://test.nzchinasociety.org.nz/wp-content/uploads/2017/04/placeholder.png" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="article-content">
                                <!--<h4><a href=""><?php the_title(); ?></a></h4>-->
                                <p class="short-description">Gung Ho is the slogan and nickname of the International Committee for the Promotion of Chinese Industrial Cooperatives, a project founded by Rewi Alley to …</p>
                                </div>
                            </li>
                            <li>
                            <h3 class="title-3"><span>SHANDAN BAILIE SCHOOL</span></h3>
                                <div class="article-img">
                                <img src="http://test.nzchinasociety.org.nz/wp-content/uploads/2017/04/placeholder.png" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="article-content">
                                <!--<h4><a href=""><?php the_title(); ?></a></h4>-->
                                <p class="short-description">Throughout its existence the New Zealand China Friendship Society has had a special relationship with the Shandan Bailie School, founded by Rewi Alley in …</p>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Learn about end-->

                <!--main contient end-->
            </div>


            <div class="col-12 col-lg-4 sidebar-right">
                <?php get_sidebar(); ?>

                
            </div>
        </div>
    </div>






    <!--Main Section End-->


<?php get_footer(); ?>