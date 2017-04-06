
 
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

            <!--     <div class="card recent-widget">
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
                </div> -->
<div id="fb-root" ></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<h6 class="timeline-Header-title">Facebook </h6>
  


<div class="">
<div class="fb-page"
  data-href="https://www.facebook.com/NZChinaSociety/" 
  data-width="340"
  data-hide-cover="false"
  data-show-facepile="true"></div>
   
</div>
                   <div style="margin-top:2ex "> 
                    
<a class="twitter-timeline" href="https://twitter.com/nzchinasociety"
 data-tweet-limit="2"
>Tweets by nzchinasociety</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>


                </div>