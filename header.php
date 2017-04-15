
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php wp_title(); ?></title>
        <?php //if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    
    <body> 
        <div class="container-fluid topbar fixed-top" style="height:31px">
            <div class="top-left">
                <span style="font-size:14px" class="sitename-top">
                    <?php _e('New Zealand China Friendship Society','nzcn-theme'); ?>
                </span>
                <span class="pull-right">
                    <a href="https://www.facebook.com/nzchinasociety" style="font-size:20px;" ><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/nzchinasociety" style="font-size:20px;" ><i class="fa fa-twitter-square" aria-hidden="true" style="margin-left:5px"></i></a>
                    <a href="https://www.youtube.com/user/nzchinasociety" style="font-size:20px"><i class="fa fa-youtube-play" aria-hidden="true" style="margin-left:5px"></i></a>
                    <a href="https://plus.google.com/101043413726480715544" style="font-size:20px"><i class="fa fa-google-plus-square" aria-hidden="true" style="margin-left:5px"></i></a>
                </span>
                <span class="pull-right" style="margin-right:10px">
                    <?php 
                    if (function_exists('icl_get_languages')){
                        $languages = icl_get_languages('skip_missing=1');
                        if (count($languages) > 1){
                            foreach ($languages as $l) {
                                if (!$l['active']) {
                                    $items .= "<div class='topbar-language'>";
                                    $items .= "<a href='{$l['url']}'>";
                                    $items .= $l['native_name'];
                                    $items .= "</a></div>";
                                }
                            }
                        }
                    }
                    echo $items." | ";
                    if(ICL_LANGUAGE_CODE=='en')
                        echo "<a href='http://www.nzcfsyouth.org/'>NZCFS YOUTH </a>";
                    else echo "<a href='http://www.nzcfsyouth.org/'>新中友协青年站 </a>";
                    ?>
                </span>
            </div>
        </div>
        <?php 
        if(ICL_LANGUAGE_CODE=='en')
            include "components/menu-en.php"; 
        else
            include "components/menu-cn.php";  
        ?>