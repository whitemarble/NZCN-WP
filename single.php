<?php get_header(); ?>

    <div class="container-fluid main-section post-content">
        <div class="row" >

	<content class="col-12 col-lg-8 main-content card post-content-artricle">

<h1 class=" card-title post-content-title">
	<?php the_title(); ?> 
</h1>

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
 <span class="meta-title">Posted in</span><p style="color: whitesmoke"> <?php echo get_the_date();?>
</p>

</div>

</div>

<div class="meta-content" style="padding-top:4px;">
<figure class="meta-figure" >
<!-- <?php echo get_avatar( get_the_author_email(), 60 ); ?> -->
<?php if (empty(get_avatar( get_the_author_email(), 60 ))) {
   echo get_avatar( get_the_author_email(), 60 ); 
   echo "string".get_the_author_email();
} else{ ?>

<i class="fa fa-user fa-4x" aria-hidden="true"></i>
<?php } ?>
</figure>


<div class="meta-tooltip ">
<div class="arrow-left">
    
</div>

  <?php 

echo get_the_author_meta('display_name',$post->post_author);



?>

 </a></p>

</div>


</div>
                    <div class="meta-content" style="padding-top: 22px;">Category

<div class="meta-tooltip ">
<div class="arrow-left">
    
</div>
 <span class="meta-title">Posted in</span><p style="color: whitesmoke"><?php the_category(); ?></p>

</div>

                    </div>
                   
                    <div class="meta-content" style="padding-top: 22px;">Social

<div class="meta-tooltip ">
<div class="arrow-left">
    
</div>

<p class="meta-social">
                    <a href="https://www.facebook.com/nzchinasociety" ><i class="fa fa-facebook-square meta-social-ico" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/nzchinasociety" ><i class="fa fa-twitter-square meta-social-ico" aria-hidden="true" style="margin-left:5px"></i></a>
                    <a href="https://www.youtube.com/user/nzchinasociety" <i class="fa fa-youtube-play meta-social-ico" aria-hidden="true" style="margin-left:5px"></i></a>
                    <a href="https://plus.google.com/101043413726480715544"><i class="fa fa-google-plus-square meta-social-ico" aria-hidden="true" style=" margin-left:5px"></i></a></p>


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