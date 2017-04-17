<?php get_header(); ?>

    <div class="container-fluid main-section post-content">
        <div class="row" >

	<content class="col-12 col-lg-8 main-content card post-content-artricle">

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
 <div class="row">


<!-- <figure>
  <img src="https://ld-wp.template-help.com/wordpress_58404_v4/wp-content/uploads/2016/02/04.10.14_Obama-1170x780.jpg" style="width:100%;height:100%;"/>
</figure> -->
<article class=" col-12 col-lg-10 card-text post-content-artricle">
<?php 

if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
            endif;
?>
</article>


   <ul class="col-lg-2 meta-wrapper">
<div class="meta-content"><?php echo get_the_date();?>


<div class="meta-tooltip ">
<div class="arrow-left">
    
</div>
 <span class="meta-title">Posted in</span><p> <a href=""><?php echo get_the_date();?></a> 
</p>

</div>

</div>

<div class="meta-content" style="padding-top:4px;">
<figure class="meta-figure" >
<?php echo get_avatar( get_the_author_email(), 60 ); ?>
</figure>


<div class="meta-tooltip ">
<div class="arrow-left">
    
</div>
 <span class="meta-title">Posted in</span><p><a href="http://www.nzcfsyouth.org/category/other-cool-stuff/">Other Cool Stuff</a></p>

</div>


</div>
                    <div class="meta-content" data-toggle="tooltip" data-placement="right" title="this is time" data-toggle="tooltip" data-placement="right" title="this is time">social

<div class="meta-tooltip ">
<div class="arrow-left">
    
</div>
 <span class="meta-title">Posted in</span><p><a href="http://www.nzcfsyouth.org/category/other-cool-stuff/">Other Cool Stuff</a></p>

</div>

                    </div>
                    <div class="meta-content" data-toggle="tooltip" data-placement="right" title="this is time">comment
<div class="meta-tooltip ">
<div class="arrow-left">
    
</div>
 <span class="meta-title">Posted in</span><p><a href="http://www.nzcfsyouth.org/category/other-cool-stuff/">Other Cool Stuff</a></p>

</div>

                    </div>
                    <div class="meta-content" data-toggle="tooltip" data-placement="right" title="this is time">other

<div class="meta-tooltip ">
<div class="arrow-left">
    
</div>

<p class="meta-social">
                    <a href="https://www.facebook.com/nzchinasociety" style="color:#2a388f"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/nzchinasociety" style="color:#26a9e0"><i class="fa fa-twitter-square" aria-hidden="true" style="margin-left:5px"></i></a>
                    <a href="https://www.youtube.com/user/nzchinasociety" style="color:#ed1b23"><i class="fa fa-youtube-play" aria-hidden="true" style="margin-left:5px"></i></a>
                    <a href="https://plus.google.com/101043413726480715544" style="color:#e64522"><i class="fa fa-google-plus-square" aria-hidden="true" style="margin-left:5px"></i></a></p>


</div>

                    </div>
</ul>
 </div>
	</content>
   

	<aside class="col-12 col-lg-4 sidebar-right">

<?php get_sidebar(); ?> 
	</aside>


</div>
</div>


<?php get_footer(); ?>