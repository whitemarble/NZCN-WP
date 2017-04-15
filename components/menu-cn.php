<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/" style="position:absolute;top:0px;z-index:999"><img src=<?php echo'"'.get_template_directory_uri().'/img/logo.png"'; ?> style="height:auto"></a>
            <span class="sitename-menu">新西兰中国友好协会</span>
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">首页</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="" id="gotochina" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        前往中国
                        </a>
                        <div class="dropdown-menu" aria-labelledby="gotochina">
                            <a class="dropdown-item" href="/news/tours-to-china/">游览中国</a>
                            <a class="dropdown-item" href="/news/teach-in-china/">在中国教书</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="newsarticles" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        新闻与活动
                        </a>
                        <div class="dropdown-menu" aria-labelledby="newsarticles">
                            <a class="dropdown-item" href="/news/updates/news-and-events/">新闻中心</a>
                            <a class="dropdown-item" href="/branch-news">分会新闻</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rewi-alley/">路易-艾黎</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        关于我们
                        </a>
                        <div class="dropdown-menu" aria-labelledby="aboutus">
                            <a class="dropdown-item" href="/about-the-new-zealand-china-friendship-society/">关于我们</a>
                            <a class="dropdown-item" href="/news/project-updates/">我们的项目</a>
                            <a class="dropdown-item" href="/donations/">捐款</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contactus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        联系我们
                        </a>
                        <div class="dropdown-menu" aria-labelledby="contactus">
                            <a class="dropdown-item" href="/contact-us/">联系信息</a>
                            <a class="dropdown-item" href="/join-now/">马上加入</a>
                        </div>
                    </li>
                </ul>
                

                <button class="btn btn-outline-danger my-2 my-sm-0 hidden-md-down searchbtn" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-search" aria-hidden="true"></i></button>
            
                <form method="get" class="form-inline my-2 my-lg-0 hidden-lg-up" style="display:flex" action="/wordpress">
                    <input name="s" class="form-control mr-sm-2" type="text" placeholder="搜索关键词。。。" style="flex:1;margin-right:5px">
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </nav>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                
                <div class="modal-body">
                    <form method="get" class="form-inline my-2 my-lg-0" style="display:flex" action="/wordpress">
                    <input name="s" id="topsearch" class="form-control mr-sm-2" type="text" placeholder="搜索关键词。。。" style="flex:1" >
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="float:right"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                
                </div>
            </div>
        </div>
        <!-- Modal End-->