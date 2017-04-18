<?php
/*
Template Name: branch Page
*/
?>


<?php get_header(); ?>
<style>
    h5 a{color:#fff;font-size:20px}
    h5 a:hover{color:#fff;text-decoration:none}
</style>
<div class="container-fluid" style="margin-top:8em">

    <div class="row">

        <div class="col-12 col-lg-8 card" style="padding-top: 1em">
              <h5 class="page-title"><span><a href="/news/auckland-news-and-events/">Auckland News and Events</a></span></h5>
              <ul class="article-1">
                    <?php 
                    $latest_posts = get_posts( 'numberposts=1&suppress_filters=0&category=137' );
                    foreach($latest_posts as $post) :                
                    ?>
                    <li>
                        <div class="article-img">
                        <img src="<?php 
                            if(has_post_thumbnail($post->ID))
                                the_post_thumbnail_url( 'thumbnail' );
                            else echo mmimg($post->ID);
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

                <h5 class="page-title"><span><a href="/news/chrischurch-news-and-events/">Christchurch News and Events</a></span></h5>
                <ul class="article-1">
                        <?php 
                        $latest_posts = get_posts( 'numberposts=1&suppress_filters=0&category=138' );
                        foreach($latest_posts as $post) :                
                        ?>
                        <li>
                            <div class="article-img">
                            <img src="<?php 
                                if(has_post_thumbnail($post->ID))
                                    the_post_thumbnail_url( 'thumbnail' );
                                else echo mmimg($post->ID);
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

                    <h5 class="page-title"><span><a href="/news/dunedin-news-and-events/">Dunedin News and Events</a></span></h5>
                <ul class="article-1">
                        <?php 
                        $latest_posts = get_posts( 'numberposts=1&suppress_filters=&category=139' );
                        foreach($latest_posts as $post) :                
                        ?>
                        <li>
                            <div class="article-img">
                            <img src="<?php 
                                if(has_post_thumbnail($post->ID))
                                    the_post_thumbnail_url( 'thumbnail' );
                                else echo mmimg($post->ID);
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

                   <h5 class="page-title"><span><a href="/news/hamilton-news-and-events/">Hamilton News and Events</a></span></h5>
                <ul class="article-1">
                        <?php 
                        $latest_posts = get_posts( 'numberposts=1&suppress_filters=&category=140' );
                        foreach($latest_posts as $post) :                
                        ?>
                        <li>
                            <div class="article-img">
                            <img src="<?php 
                                if(has_post_thumbnail($post->ID))
                                    the_post_thumbnail_url( 'thumbnail' );
                                else echo mmimg($post->ID);
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

                    <h5 class="page-title"><span><a href="/news/hawkes-bay-news-and-events/">Hawkes Bay News and Events</a></span></h5>
                <ul class="article-1">
                        <?php 
                        $latest_posts = get_posts( 'numberposts=1&suppress_filters=&category=141' );
                        foreach($latest_posts as $post) :                
                        ?>
                        <li>
                            <div class="article-img">
                            <img src="<?php 
                                if(has_post_thumbnail($post->ID))
                                    the_post_thumbnail_url( 'thumbnail' );
                                else echo mmimg($post->ID);
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

                    <h5 class="page-title"><span><a href="/news/manawatu-news-and-events/">Manawatu News and Events</a></span></h5>
                <ul class="article-1">
                        <?php 
                        $latest_posts = get_posts( 'numberposts=1&suppress_filters=&category=143' );
                        foreach($latest_posts as $post) :                
                        ?>
                        <li>
                            <div class="article-img">
                            <img src="<?php 
                                if(has_post_thumbnail($post->ID))
                                    the_post_thumbnail_url( 'thumbnail' );
                                else echo mmimg($post->ID);
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

                    <h5 class="page-title"><span><a href="/news/nelson/">Nelson News and Events</a></span></h5>
                <ul class="article-1">
                        <?php 
                        $latest_posts = get_posts( 'numberposts=1&suppress_filters=&category=144' );
                        foreach($latest_posts as $post) :                
                        ?>
                        <li>
                            <div class="article-img">
                            <img src="<?php 
                                if(has_post_thumbnail($post->ID))
                                    the_post_thumbnail_url( 'thumbnail' );
                                else echo mmimg($post->ID);
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

                    <h5 class="page-title"><span><a href="/news/rotorua-news-and-events/">Rotorua News and Events</a></span></h5>
                <ul class="article-1">
                        <?php 
                        $latest_posts = get_posts( 'numberposts=1&suppress_filters=&category=145' );
                        foreach($latest_posts as $post) :                
                        ?>
                        <li>
                            <div class="article-img">
                            <img src="<?php 
                                if(has_post_thumbnail($post->ID))
                                    the_post_thumbnail_url( 'thumbnail' );
                                else echo mmimg($post->ID);
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

                    <h5 class="page-title"><span><a href="/news/taranaki-news-and-events/">Taranaki News and Events</a></span></h5>
                <ul class="article-1">
                        <?php 
                        $latest_posts = get_posts( 'numberposts=1&suppress_filters=&category=160' );
                        foreach($latest_posts as $post) :                
                        ?>
                        <li>
                            <div class="article-img">
                            <img src="<?php 
                                if(has_post_thumbnail($post->ID))
                                    the_post_thumbnail_url( 'thumbnail' );
                                else echo mmimg($post->ID);
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

                    <h5 class="page-title"><span><a href="/news/tauranga-news-and-events/">Tauranga News and Events</a></span></h5>
                <ul class="article-1">
                        <?php 
                        $latest_posts = get_posts( 'numberposts=1&suppress_filters=&category=147' );
                        foreach($latest_posts as $post) :                
                        ?>
                        <li>
                            <div class="article-img">
                            <img src="<?php 
                                if(has_post_thumbnail($post->ID))
                                    the_post_thumbnail_url( 'thumbnail' );
                                else echo mmimg($post->ID);
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

                                        <h5 class="page-title"><span><a href="/news/timaru-news-and-events/">Timaru News and Events</a></span></h5>
                <ul class="article-1">
                        <?php 
                        $latest_posts = get_posts( 'numberposts=1&suppress_filters=&category=148' );
                        foreach($latest_posts as $post) :                
                        ?>
                        <li>
                            <div class="article-img">
                            <img src="<?php 
                                if(has_post_thumbnail($post->ID))
                                    the_post_thumbnail_url( 'thumbnail' );
                                else echo mmimg($post->ID);
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

                                        <h5 class="page-title"><span><a href="/news/wairarapa-news-and-events/">Wairarapa News and Events</a></span></h5>
                <ul class="article-1">
                        <?php 
                        $latest_posts = get_posts( 'numberposts=1&suppress_filters=&category=149' );
                        foreach($latest_posts as $post) :                
                        ?>
                        <li>
                            <div class="article-img">
                            <img src="<?php 
                                if(has_post_thumbnail($post->ID))
                                    the_post_thumbnail_url( 'thumbnail' );
                                else echo mmimg($post->ID);
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

                                        <h5 class="page-title"><span><a href="/news/wellington-news-and-events/">Wellionton News and Events</a></span></h5>
                <ul class="article-1">
                        <?php 
                        $latest_posts = get_posts( 'numberposts=1&suppress_filters=&category=102' );
                        foreach($latest_posts as $post) :                
                        ?>
                        <li>
                            <div class="article-img">
                            <img src="<?php 
                                if(has_post_thumbnail($post->ID))
                                    the_post_thumbnail_url( 'thumbnail' );
                                else echo mmimg($post->ID);
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

                                        <h5 class="page-title"><span><a href="/news/whanganui-news-and-events/">Whanganui News and Events</a></span></h5>
                <ul class="article-1">
                        <?php 
                        $latest_posts = get_posts( 'numberposts=1&suppress_filters=&category=150' );
                        foreach($latest_posts as $post) :                
                        ?>
                        <li>
                            <div class="article-img">
                            <img src="<?php 
                                if(has_post_thumbnail($post->ID))
                                    the_post_thumbnail_url( 'thumbnail' );
                                else echo mmimg($post->ID);
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

        <div class="col-12 col-lg-4 sidebar-right">
                <?php get_sidebar(); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>