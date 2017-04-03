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
                                <img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-fluid" alt="Responsive image">
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
                                <img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="article-content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p class="article-meta">by <a href="">admin</a> <i class="fa fa-clock-o" aria-hidden="true"></i> <a href=""><?php echo get_the_date();?></a></p>
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
                                <img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="article-content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p class="article-meta">by <a href="">admin</a> <i class="fa fa-clock-o" aria-hidden="true"></i> <a href=""><?php echo get_the_date();?></a></p>
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
                <div class="follow-widget">
                    <h2 style="">Follow us</h2>
                    <p>Read our latest news on any of these social networks!</p>
                    <p style="font-size:2.2rem;color:#ff4e53;border-bottom:dotted 1px #333;padding-bottom:1rem"><i class="fa fa-facebook-square" aria-hidden="true" ></i>
                    <i class="fa fa-twitter-square" aria-hidden="true" style="margin-left:5px"></i>
                    <i class="fa fa-instagram" aria-hidden="true" style="margin-left:5px"></i>
                    <i class="fa fa-weibo" aria-hidden="true"></i>
                    <i class="fa fa-weixin" aria-hidden="true"></i></p>
                    <h2>Get latest news delivered daily!</h2>
                    <p>We will send you breaking news right to your inbox</p>
                    <form class="form-inline my-2 my-lg-0" style="display:flex">
                    <input class="form-control mr-sm-2" type="text" placeholder="Please enter your Email" style="flex:1">
                    <button class="btn btn-danger my-2 my-sm-0" type="submit" style="float:right">Submit</button>
                    </form>

                </div>

                <div class="card recent-widget">
                    <div class="card-block">
                        <h2 style="color:#ff4e53;margin-bottom:30px">Recent news</h2>
                        <ul class="news-widget">
                        <?php 
                            $latest_posts = get_posts( 'numberposts=6' );
                            foreach($latest_posts as $post) :                
                        ?>
                            <li>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_date();?></p>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="pic-widget">
                    <h2 style="">Gallery</h2>
                    <ul class="pic-list">
                        <li><img class="rounded" src="https://scontent.cdninstagram.com/t51.2885-15/e35/15403523_1457073911025264_1647863352430428160_n.jpg"></li>
                        <li><img class="rounded" src="https://scontent.cdninstagram.com/t51.2885-15/e35/15403523_1457073911025264_1647863352430428160_n.jpg"></li>
                        <li><img class="rounded" src="https://scontent.cdninstagram.com/t51.2885-15/e35/15403523_1457073911025264_1647863352430428160_n.jpg"></li>
                        <li><img class="rounded" src="https://scontent.cdninstagram.com/t51.2885-15/e35/15403523_1457073911025264_1647863352430428160_n.jpg"></li>
                        <li><img class="rounded" src="https://scontent.cdninstagram.com/t51.2885-15/e35/15403523_1457073911025264_1647863352430428160_n.jpg"></li>
                        <li><img class="rounded" src="https://scontent.cdninstagram.com/t51.2885-15/e35/15403523_1457073911025264_1647863352430428160_n.jpg"></li>
                        <li><img class="rounded" src="https://scontent.cdninstagram.com/t51.2885-15/e35/15403523_1457073911025264_1647863352430428160_n.jpg"></li>
                        <li><img class="rounded" src="https://scontent.cdninstagram.com/t51.2885-15/e35/15403523_1457073911025264_1647863352430428160_n.jpg"></li>
                        <li><img class="rounded" src="https://scontent.cdninstagram.com/t51.2885-15/e35/15403523_1457073911025264_1647863352430428160_n.jpg"></li>
                        <li><img class="rounded" src="https://scontent.cdninstagram.com/t51.2885-15/e35/15403523_1457073911025264_1647863352430428160_n.jpg"></li>
                    </ul>
                </div>
                    
                <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                <div style="margin-left:auto;margin-right:auto;margin-bottom:30px">
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>                </div>
                </div>

                
            </div>
        </div>
    </div>






    <!--Main Section End-->


<?php get_footer(); ?>