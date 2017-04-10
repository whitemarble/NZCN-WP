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
          	<li style=""><a href="">Auckland News and Events</a></li>
   <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

                                </div>

                            </li>
                         
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </div>
          <li><a href="">Christchurch News and Events</a></li>

          <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

                                </div>

                            </li>
                         
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </div>
          <li><a href="">Dunedin News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

                                </div>

                            </li>
                         
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </div>
          <li><a href="">Hamilton News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

                                </div>

                            </li>
                         
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </div>
          <li><a href="">Hawkes Bay News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

                                </div>

                            </li>
                         
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </div>
          <li><a href="">Manawatu News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

                                </div>

                            </li>
                         
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </div>
          <li><a href="">Nelson News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

                                </div>

                            </li>
                         
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </div>
          <li><a href="">Rotorua News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

                                </div>

                            </li>
                         
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </div>
          <li><a href="">Taranaki News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

                                </div>

                            </li>
                         
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </div>
          <li><a href="">Tauranga News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

                                </div>

                            </li>
                         
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </div>
          <li><a href="">Timaru News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

                                </div>

                            </li>
                         
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </div>
          <li><a href="">Wairarapa News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

                                </div>

                            </li>
                         
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </div>
          <li><a href="">Wellington News and Events</a></li>
             <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

                                </div>

                            </li>
                         
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        </div>
           <li><a href="">Whanganui News and Events</a></li>
              <?php 
 $posts=query_posts($query_string .'&posts_per_page=1'); 
                        if (have_posts()) :      ?>
  


  <div class="card">
                        <ul class="article-1" style=" line-height: 1em;">



<?php 
                            foreach( $posts as $post) :   
                            the_post();              
                        ?>
                      

                        
                            <li>
                    
                             
                                <div class="article-content">
                                
                                <p class="short-description"><?php the_excerpt(); ?>
                                	
                                	  <h6 style="display: line;color: red">More...</h6>
                                </p>

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