<?php
/*
Template Name: branch Page
*/
?>


<?php get_header(); ?>
<div class="container-fluid" style="margin-top:8em">

    <div class="row">

        <div class="col-12 col-lg-8 card" style="padding-top: 1em">
       
          <ul style="line-height: 3em">
          	<li  style="font-size: 1.4em;color: red"><a href="">Auckland News and Events</a></li>
   <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>



         <li><a href="" style="font-size: 1.4em;color: red">Christchurch News and Events</a></li>

          <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>
         <li><a href="" style="font-size: 1.4em;color: red">Dunedin News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>
         <li><a href="" style="font-size: 1.4em;color: red">Hamilton News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>
         <li><a href="" style="font-size: 1.4em;color: red">Hawkes Bay News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>
         <li><a href="" style="font-size: 1.4em;color: red">Manawatu News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>
         <li><a href="" style="font-size: 1.4em;color: red">Nelson News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>
         <li><a href="" style="font-size: 1.4em;color: red">Rotorua News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>
         <li><a href="" style="font-size: 1.4em;color: red">Taranaki News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>
         <li><a href="" style="font-size: 1.4em;color: red">Tauranga News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>
         <li><a href="" style="font-size: 1.4em;color: red">Timaru News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>
         <li><a href="" style="font-size: 1.4em;color: red">Wairarapa News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>
         <li><a href="" style="font-size: 1.4em;color: red">Wellington News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>
          <li><a href="" style="font-size: 1.4em;color: red">Whanganui News and Events</a></li>
              <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
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
                            <?php endif; ?>
                        </ul>
                        </div>


          </ul>
        </div>

        <div class="col-12 col-lg-4 sidebar-right">
                <?php get_sidebar(); ?>

                
            </div>
    </div>
</div>


<?php get_footer(); ?>