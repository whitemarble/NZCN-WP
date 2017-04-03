
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <?php //if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    
    <body> 
        <div class="container-fluid topbar fixed-top">
            <div class="top-left">
                <span style="font-size:14px">English | 新中友协青年站</span>
                <span class="pull-right" style="font-size:20px">
                    <i class="fa fa-facebook-square" aria-hidden="true" ></i>
                    <i class="fa fa-twitter-square" aria-hidden="true" style="margin-left:5px"></i>
                    <i class="fa fa-instagram" aria-hidden="true" style="margin-left:5px"></i>
                </span>
                <span class="pull-right" style="font-size:14px; margin-right:8px"></span>
            </div>
        </div>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#" style="position:absolute;top:0px;z-index:999"><img src=<?php echo'"'.get_template_directory_uri().'/img/logo.png"'; ?> style="height:auto"></a>

            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">主页</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">游览中国</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">在中国教书</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">新闻与活动</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">路易艾黎</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">关于我们</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">联系我们</a>
                    </li>
                </ul>
                
                <button class="btn btn-outline-danger my-2 my-sm-0 hidden-lg-down searchbtn" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-search" aria-hidden="true"></i></button>
            
                <form class="form-inline my-2 my-lg-0 hidden-lg-up" style="display:flex">
                    <input class="form-control mr-sm-2" type="text" placeholder="请输入搜索内容" style="flex:1;margin-right:5px">
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </nav>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                
                <div class="modal-body">
                    <form class="form-inline my-2 my-lg-0" style="display:flex">
                    <input id="topsearch" class="form-control mr-sm-2" type="text" placeholder="请输入搜索内容" style="flex:1" >
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="float:right"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                
                </div>
            </div>
        </div>
        <!-- Modal End-->

