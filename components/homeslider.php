

<div id="HomeSlides" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
  <?php
        $post_index = 0;
        //'suppress_filters' => false  仅获取当前语言文章
        $breaking_array = get_posts( 'numberposts=3&suppress_filters=0' );
        foreach($breaking_array as $post) :  
    ?>
    <div <?php if($post_index == 0) echo "class='carousel-item active'"; else echo"class='carousel-item'"; ?> >
        <div class="carousel-img">
            <img src="<?php 
                if(has_post_thumbnail($post->ID))
                    the_post_thumbnail_url( 'full' );
                else echo mmimg($post->ID);
                ?>" class="img-fluid" alt="Responsive image">
        </div>
        <div class="carousel-caption d-md-block">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_date(); ?></p>
        </div>
    </div>
    <?php $post_index++; endforeach; ?>
  </div>
</div>