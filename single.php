<?php get_header(); ?>

    <div class="container-fluid main-section post-content">
        <div class="row" >
<div  class="col-1 col-lg-1 main-content">

</div>

	<content class="col-7 col-lg-7 main-content card post-content-artricle">

<h1 class="post-content-title card-title">
	<?php the_title(); ?> 
</h1>
<p class="article-meta post-content-aut ">
by 
<a href=""><?php 

echo get_the_author_meta('display_name',$post->post_author);



?> </a>
 <i class="fa fa-clock-o" aria-hidden="true"></i> 
 <a href=""><?php echo get_the_date();?></a> 
 </p>
<!-- <figure>
  <img src="https://ld-wp.template-help.com/wordpress_58404_v4/wp-content/uploads/2016/02/04.10.14_Obama-1170x780.jpg" style="width:100%;height:100%;"/>
</figure> -->
<article class="card-text post-content-artricle">
<?php 

if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
            endif;
?>
</article>

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