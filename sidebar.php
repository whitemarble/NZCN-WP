
 
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
<!-- 
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
                     -->
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
               
   