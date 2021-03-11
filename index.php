<?php get_header();?>

    <!-- Banner slider -->
  <?php echo get_template_part('template-part/slider'); ?>
    <!-- Banner slider -->

    <!-- News Headline Container -->
    <div class="news-bar white-bg">
        <div class="container">
            <div class="row">

                <!-- news -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9 r-full-width">
           <div class="headline-wrap">

                        <span class="badge">just in</span>

                        <!-- news ticker -->

                    <div id="ticker">
                            <div class="clip">
                                <div class="today">
                                      <ul>
<?php if(have_posts()): while(have_posts()):the_post();?>
    
            <li>
<h5><a href="<?php the_permalink(); ?>"><?php the_title();?></a><h5>
            </li>
                <?php endwhile;endif;?>
                 <?php wp_reset_query();?>
                                    </ul>
                      
                               </div>
                              </div>
                        </div>

                           <!-- news ticker -->

                        <!-- ticker spinner -->
                        <div class="alert-spinner">
                            <div class="double-bounce1"></div>
                            <div class="double-bounce2"></div>
                        </div>
                        <!-- ticker spinner -->

                    </div>  
                </div>
                <!-- news -->

                <!-- time clock -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 r-full-width">  
                    <div class="time-clock">                  
                        <div id="clock"></div>
                    </div>
                </div>
                <!-- time clock -->

                <!-- Wheather forecast -->
                <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                    <div class="weather-holder">
                        <img src="<?php echo get_template_directory_uri();?>/images/cloud.png" alt="">
                        <span class="weather-state">Cloudy USA, Natha</span>
                        <span class="temp"><i class="fa fa-plus"></i> 18<sup>0</sup> C</span>
                    </div>
                </div>
                <!-- Wheather forecast -->
                
            </div>
        </div>
    </div>
    <!-- News Headline Container -->








    <!-- Main Content -->
    <main class="wrapper"> 
        <div class="theme-padding">
            <div class="container">

                <!-- latest  news slider -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-widget mb-60">

                            <!-- Heading -->
                            <div class="primary-heading">
                                <h2>what's hot right now</h2>
                            </div>
                            <!-- Heading -->

                            <!-- post slider -->
                            <div class="white-bg p-30 light-shadow slider-post" id="sliderPost"> 
                                <div id="post-slider-1">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/world/img-07.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design And Pixel Perfect </a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="fa fa-user"></i>jessica alex</li>
                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/world/img-06.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- post img -->

                                        <!-- post detail -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design And Pixel Perfect </a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="fa fa-user"></i>jessica alex</li>
                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                            </ul>
                                        </div>
                                        <!-- post detail -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/technology/img-03.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- post img -->

                                        <!-- post detail -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design And Pixel Perfect </a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="fa fa-user"></i>jessica alex</li>
                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                            </ul>
                                        </div>
                                        <!-- post detail -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/technology/img-08.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- post img -->

                                        <!-- post detail -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design And Pixel Perfect </a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="fa fa-user"></i>jessica alex</li>
                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                            </ul>
                                        </div>
                                        <!-- post detail -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/world/img-08.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- post img -->

                                        <!-- post detail -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design And Pixel Perfect </a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="fa fa-user"></i>jessica alex</li>
                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                            </ul>
                                        </div>
                                        <!-- post detail -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/lifestyle/img-07.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- post img -->

                                        <!-- post detail -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design And Pixel Perfect </a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="fa fa-user"></i>jessica alex</li>
                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                            </ul>
                                        </div>
                                        <!-- post detail -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/lifestyle/img-04.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- post img -->

                                        <!-- post detail -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design And Pixel Perfect </a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="fa fa-user"></i>jessica alex</li>
                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                            </ul>
                                        </div>
                                        <!-- post detail -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-04.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- post img -->

                                        <!-- post detail -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design And Pixel Perfect </a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="fa fa-user"></i>jessica alex</li>
                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                            </ul>
                                        </div>
                                        <!-- post detail -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-01.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- post img -->

                                        <!-- post detail -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design And Pixel Perfect </a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="fa fa-user"></i>jessica alex</li>
                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                            </ul>
                                        </div>
                                        <!-- post detail -->

                                    </div>
                                    <!-- post -->

                                </div>
                            </div>
                            <!-- post slider -->

                        </div>
                    </div>
                </div>
                <!-- Slider Widget -->

                <!-- Main Content Row -->
                <div class="row">

                    <!-- small sidebar -->
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 r-hidden">

                        <!-- add widget -->
                        <div class="aside-add">
                            <a href="<?php echo get_template_directory_uri();?>/#"><img src="<?php echo get_template_directory_uri();?>/images/aside-add.jpg" alt=""></a>
                        </div>
                        <!-- add widget -->

                        <aside class="aside">

                            <!-- trending -->
                            <div class="widget">
                                <h3>trending</h3>

                                <div class="trending-list">
                                    <ul class="trending-slider"> 

                                        <li>
                                            <div class="post style-1">

                                                <!-- post img -->
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-01.jpg" alt="">
                                                    <span class="post-badge">post</span>                                               
                                                </div>
                                                <!-- post img -->

                                                <!-- post details -->
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                </div>
                                                <!-- post details -->

                                            </div>
                                        </li>

                                        <li>
                                            <div class="post style-1">

                                                <!-- post img -->
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-02.jpg" alt="">
                                                    <span class="post-badge">post</span>                                               
                                                </div>
                                                <!-- post img -->

                                                <!-- post details -->
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                </div>
                                                <!-- post details -->

                                            </div>
                                        </li>

                                        <li>
                                            <div class="post style-1">

                                                <!-- post img -->
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-03.jpg" alt="">
                                                    <span class="post-badge">post</span>                                               
                                                </div>
                                                <!-- post img -->

                                                <!-- post details -->
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                </div>
                                                <!-- post details -->

                                            </div>
                                        </li>

                                        <li>
                                            <div class="post style-1">

                                                <!-- post img -->
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-04.jpg" alt="">
                                                    <span class="post-badge">post</span>                                               
                                                </div>
                                                <!-- post img -->

                                                <!-- post details -->
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                </div>
                                                <!-- post details -->

                                            </div>
                                        </li>

                                        <li>
                                            <div class="post style-1">

                                                <!-- post img -->
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-05.jpg" alt="">
                                                    <span class="post-badge">post</span>                                               
                                                </div>
                                                <!-- post img -->

                                                <!-- post details -->
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                </div>
                                                <!-- post details -->

                                            </div>
                                        </li>

                                        <li>
                                            <div class="post style-1">

                                                <!-- post img -->
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-06.jpg" alt="">
                                                    <span class="post-badge">post</span>                                               
                                                </div>
                                                <!-- post img -->

                                                <!-- post details -->
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                </div>
                                                <!-- post details -->

                                            </div>
                                        </li>

                                        <li>
                                            <div class="post style-1">

                                                <!-- post img -->
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-01.jpg" alt="">
                                                    <span class="post-badge">post</span>                                               
                                                </div>
                                                <!-- post img -->

                                                <!-- post details -->
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                </div>
                                                <!-- post details -->

                                            </div>
                                        </li>

                                        <li>
                                            <div class="post style-1">

                                                <!-- post img -->
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-02.jpg" alt="">
                                                    <span class="post-badge">post</span>                                               
                                                </div>
                                                <!-- post img -->

                                                <!-- post details -->
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                </div>
                                                <!-- post details -->

                                            </div>
                                        </li>

                                        <li>
                                            <div class="post style-1">

                                                <!-- post img -->
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-03.jpg" alt="">
                                                    <span class="post-badge">post</span>                                               
                                                </div>
                                                <!-- post img -->

                                                <!-- post details -->
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Lorem ipsum dolor a amet  comodo in the
                                                    conseq</a></h4>
                                                </div>
                                                <!-- post details -->

                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- trending -->

                            <!-- reviews -->
                            <div class="widget">
                                <h3>top reviews</h3>

                                <div class="user-reviews">
                                    <ul>
                                        <li class="review-wrap">
                                            <span class="review-badge bg-green"><i class="fa fa-star"></i>4.5</span>
                                            <div class="wrap">
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                <span class="name">by john doe</span>
                                            </div>
                                        </li>

                                        <li class="review-wrap">
                                            <span class="review-badge bg-masterd"><i class="fa fa-star"></i>4.5</span>
                                            <div class="wrap">
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                <span class="name">by john doe</span>
                                            </div>
                                        </li>

                                        <li class="review-wrap">
                                            <span class="review-badge bg-p-green"><i class="fa fa-star"></i>4.5</span>
                                            <div class="wrap">
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                <span class="name">by john doe</span>
                                            </div>
                                        </li>

                                        <li class="review-wrap">
                                            <span class="review-badge bg-gray"><i class="fa fa-star"></i>4.5</span>
                                            <div class="wrap">
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                <span class="name">by john doe</span>
                                            </div>
                                        </li>

                                        <li class="review-wrap">
                                            <span class="review-badge bg-orange"><i class="fa fa-star"></i>4.5</span>
                                            <div class="wrap">
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                <span class="name">by john doe</span>
                                            </div>
                                        </li>

                                        <li class="review-wrap">
                                            <span class="review-badge bg-purpel"><i class="fa fa-star"></i>4.5</span>
                                            <div class="wrap">
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                <span class="name">by john doe</span>
                                            </div>
                                        </li>

                                        <li class="review-wrap">
                                            <span class="review-badge bg-purpel"><i class="fa fa-star"></i>4.5</span>
                                            <div class="wrap">
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></h4>
                                                <span class="name">by john doe</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- reviews -->

                            <!-- video posts -->
                            <div class="widget">
                                <h3>video posts</h3>

                                <div class="video-posts">
                                    <ul>
                                        <li>
                                            <div class="post style-1">
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-01.jpg" alt="">
                                                    <a href="<?php echo get_template_directory_uri();?>/https://www.youtube.com/watch?v=eZKMrds77nE" data-rel="prettyPhoto"><i class="fa fa-play"></i></a>                                               
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Fight for voter is start Democrat this end</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post style-1">
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-02.jpg" alt="">
                                                    <a href="<?php echo get_template_directory_uri();?>/https://www.youtube.com/watch?v=eZKMrds77nE" data-rel="prettyPhoto"><i class="fa fa-play"></i></a>  
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Fight for voter is start Democrat this end</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post style-1">
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-03.jpg" alt="">
                                                    <a href="<?php echo get_template_directory_uri();?>/https://www.youtube.com/watch?v=eZKMrds77nE" data-rel="prettyPhoto"><i class="fa fa-play"></i></a>  
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Fight for voter is start Democrat this end</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post style-1">
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-04.jpg" alt="">
                                                    <a href="<?php echo get_template_directory_uri();?>/https://www.youtube.com/watch?v=eZKMrds77nE" data-rel="prettyPhoto"><i class="fa fa-play"></i></a>  
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Fight for voter is start Democrat this end</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post style-1">
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-05.jpg" alt="">
                                                    <a href="<?php echo get_template_directory_uri();?>/https://www.youtube.com/watch?v=eZKMrds77nE" data-rel="prettyPhoto"><i class="fa fa-play"></i></a>  
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Fight for voter is start Democrat this end</a></h4>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="post style-1">
                                                <div class="post-thumb"> 
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-06.jpg" alt="">
                                                    <a href="<?php echo get_template_directory_uri();?>/https://www.youtube.com/watch?v=eZKMrds77nE" data-rel="prettyPhoto"><i class="fa fa-play"></i></a>  
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Fight for voter is start Democrat this end</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!-- video posts -->
                        </aside>
                    </div>
                    <!-- small sidebar -->

                    <!-- Content -->
                    <div class="col-lg-7 col-md-7 col-sm-9 col-xs-8 r-full-width">

                        <!-- Detail Post Widget -->
                        <div class="post-widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <!-- Secondary Heading -->
                                    <div class="primary-heading">
                                        <h2>technology</h2>
                                    </div>
                                    <!-- Secondary Heading -->

                                    <!-- Post -->
                                    <div class="post style-2 white-bg light-shadow">

                                        <!-- Post Img -->
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/technology/img-01.jpg" alt="detail">
                                            <span class="post-badge">technology</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Img -->

                                        <!-- Post Detil -->
                                        <div class="post-content cat-listing">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/listing-page-5.html">Google is on a journey but we won't really know where it leads until fall</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <ul class="post-wrap-list">

                                                <!-- thumb small post -->
                                                <li class="post-wrap big-post">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo get_template_directory_uri();?>/images/technology/thumbs/img-01.jpg" alt="post">
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo get_template_directory_uri();?>/#">Google is on a journey but we won't really know</a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                            <li><i class="fa fa-comments-o"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- thumb small post -->

                                                <!-- thumb small post -->
                                                <li class="post-wrap big-post">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo get_template_directory_uri();?>/images/technology/thumbs/img-02.jpg" alt="post">
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo get_template_directory_uri();?>/#">Google is on a journey but we won't really know</a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                            <li><i class="fa fa-comments-o"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- thumb small post -->

                                            </ul>
                                        </div>
                                        <!-- Post Detail -->

                                    </div>
                                    <!-- Post -->

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <!-- Secondary Heading -->
                                    <div class="primary-heading">
                                        <h2>world news</h2>
                                    </div>
                                    <!-- Secondary Heading -->

                                    <!-- Post -->
                                    <div class="post style-2 white-bg light-shadow">

                                        <!-- Post Img -->
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/world/img-01.jpg" alt="detail">
                                            <span class="post-badge">world</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Img -->

                                        <!-- Post Detil -->
                                        <div class="post-content cat-listing">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/listing-page-3.html">Turkey's Erdogan to drop lawsuits against people who insulted him</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <ul class="post-wrap-list">

                                                <!-- small thumb post -->
                                                <li  class="post-wrap big-post">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo get_template_directory_uri();?>/images/world/thumbs/img-01.jpg" alt="post">
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo get_template_directory_uri();?>/#">Turkey's Erdogan to drop lawsuits against</a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                            <li><i class="fa fa-comments-o"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- small thumb post -->

                                                <!-- small thumb post -->
                                                <li class="post-wrap big-post">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo get_template_directory_uri();?>/images/world/thumbs/img-02.jpg" alt="post">
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php echo get_template_directory_uri();?>/#">Turkey's Erdogan to drop lawsuits against</a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                            <li><i class="fa fa-comments-o"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- small thumb post -->

                                            </ul>
                                        </div>
                                        <!-- Post Detail -->

                                    </div>
                                    <!-- Post -->
                                        
                                </div>
                            </div>                            
                        </div>
                        <!-- Detail Post Widget -->

                        <!-- list posts -->
                        <div class="post-widget">

                            <!-- Main Heading -->
                            <div class="primary-heading">
                                <h2>sports news</h2>
                            </div>
                            <!-- Main Heading -->

                            <!-- List Post -->
                            <div class="p-30 light-shadow white-bg">
                                <ul class="list-posts">
                                    <li class="row no-gutters">

                                        <!-- thumbnail -->
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="post-thumb"> 
                                                <img src="<?php echo get_template_directory_uri();?>/images/sports/img-01.jpg" alt="">
                                                <span class="post-badge">sport</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- thumbnail -->

                                        <!-- post detail -->
                                        <div class="col-sm-8 col-xs-12">
                                            <div class="post-content">
                                                <h4><a href="<?php echo get_template_directory_uri();?>/listing-page-2.html">Lorem ipsum dolor sit amet, consectetur.</a></h4>
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-user"></i>jessica alex</li>
                                                    <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                    <li><i class="fa fa-comments-o"></i>20</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et. <a href="<?php echo get_template_directory_uri();?>/#" class="read-more">read more...</a></p>
                                            </div>
                                        </div>
                                        <!-- post detail -->

                                    </li>
                                    <li class="row no-gutters">

                                        <!-- thumbnail -->
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="post-thumb"> 
                                                <img src="<?php echo get_template_directory_uri();?>/images/sports/img-02.jpg" alt="">
                                                <span class="post-badge">sport</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- thumbnail -->

                                        <!-- post detail -->
                                        <div class="col-sm-8 col-xs-12">

                                            <div class="post-content">
                                                <h4><a href="<?php echo get_template_directory_uri();?>/listing-page-2.html">Lorem ipsum dolor sit amet, consectetur.</a></h4>
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-user"></i>jessica alex</li>
                                                    <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                    <li><i class="fa fa-comments-o"></i>20</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et. <a href="<?php echo get_template_directory_uri();?>/#" class="read-more">read more...</a></p>
                                            </div>

                                        </div>
                                        <!-- post detail -->

                                    </li>
                                    <li class="row no-gutters">

                                        <!-- thumbnail -->
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="post-thumb"> 
                                                <img src="<?php echo get_template_directory_uri();?>/images/sports/img-03.jpg" alt="">
                                                <span class="post-badge">sport</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- thumbnail -->

                                        <!-- post detail -->
                                        <div class="col-sm-8 col-xs-12">

                                            <div class="post-content">
                                                <h4><a href="<?php echo get_template_directory_uri();?>/listing-page-2.html">Lorem ipsum dolor sit amet, consectetur.</a></h4>
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-user"></i>jessica alex</li>
                                                    <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                    <li><i class="fa fa-comments-o"></i>20</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et. <a href="<?php echo get_template_directory_uri();?>/#" class="read-more">read more...</a></p>
                                            </div>

                                        </div>
                                        <!-- post detail -->

                                    </li>
                                </ul>
                            </div>
                            <!-- List Post -->

                        </div>
                        <!--  list posts -->

                        <!-- Detail list post -->
                        <div class="post-widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <!-- main heading -->
                                    <div class="primary-heading">
                                        <h2>FOOD</h2>
                                    </div>
                                    <!-- main heading -->

                                    <!-- list of features -->
                                    <div class="post style-2 featured-single-post white-bg light-shadow">

                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/large-post/img-01.jpg" alt="detail">
                                            <span class="post-badge">FOOD</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/listing-page-6.html">When the inteligence community is exposed in usa worlds special</a></h4>
                                            <ul class="post-features"> 
                                                <li>CJ asks: Will we keep by begging?</li>
                                                <li>If Constitution abrogated, country.</li>
                                                <li>Duty on 313 imported to go 72 hours.</li>
                                                <li>PTI petition dismissed, no rigging found.</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- list of features -->

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <!-- main heading -->
                                    <div class="primary-heading">
                                        <h2>health</h2>
                                    </div>
                                    <!-- main heading -->

                                    <!-- list of features -->
                                    <div class="post style-2 featured-single-post white-bg light-shadow">

                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/large-post/img-02.jpg" alt="detail">
                                            <span class="post-badge">health</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/listing-page-6.html">When the inteligence community is exposed in usa worlds special</a></h4>
                                            <ul class="post-features"> 
                                                <li>CJ asks: Will we keep by begging?</li>
                                                <li>If Constitution abrogated, country.</li>
                                                <li>Duty on 313 imported to go 72 hours.</li>
                                                <li>PTI petition dismissed, no rigging found.</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- list of features -->

                                </div>
                            </div>
                        </div>
                        <!-- Detail list post -->

                        <!-- add Banner -->
                        <div class="add-banner text-center post-widget p-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/add-3.jpg" alt="">
                        </div>
                        <!-- add Banner -->

                        <!-- post thumbs detail widget -->
                        <div class="post-widget">

                            <!-- Heading -->
                            <div class="primary-heading">
                                <h2>fashion</h2>
                            </div>
                            <!-- Heading -->

                            <!-- post details -->
                            <div class="post-detail-wrap white-bg light-shadow p-30">
                                <div class="row">

                                    <!-- long post -->
                                    <div class="col-lg-6 col-sm-6 col-xs-12 smb-30">
                                        <div class="post style-1">

                                            <!-- Post Img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo get_template_directory_uri();?>/images/post-detail/img-04.jpg" alt="detail">
                                                <span class="post-badge">fashion</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Img -->

                                            <!-- Post Detail -->
                                            <div class="post-content">
                                                <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Girl yoyo Music listing with dj.</a></h4>
                                                 <ul class="post-meta">
                                                    <li><i class="icon-user"></i>jessica alex</li>
                                                    <li><i class="icon-clock"></i>10 Min ago</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                    <li><i class="icon-speech-bubble"></i>20</li>
                                                </ul>
                                                <p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert... 
                                                <a href="<?php echo get_template_directory_uri();?>/post-detail.html" class="read-more">read more</a></p>
                                            </div>
                                            <!-- Post Detail -->

                                        </div>
                                    </div>
                                    <!-- long post -->

                                    <!-- Post List -->
                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                        <ul class="post-wrap-list">
                                            <li class="post-wrap big-post">
                                                <div class="post-thumb">
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-detail/nav/img-01.jpg" alt="post">
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                     <ul class="post-meta">
                                                        <li><i class="icon-user"></i>jessica</li>
                                                        <li><i class="icon-clock"></i>2 Min ago</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="post-wrap big-post">
                                                <div class="post-thumb">
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-detail/nav/img-02.jpg" alt="post">
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                    <ul class="post-meta">
                                                        <li><i class="icon-user"></i>jessica</li>
                                                        <li><i class="icon-clock"></i>2 Min ago</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="post-wrap big-post">
                                                <div class="post-thumb">
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-detail/nav/img-03.jpg" alt="post">
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                    <ul class="post-meta">
                                                        <li><i class="icon-user"></i>jessica</li>
                                                        <li><i class="icon-clock"></i>2 Min ago</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="post-wrap big-post">
                                                <div class="post-thumb">
                                                    <img src="<?php echo get_template_directory_uri();?>/images/post-detail/nav/img-04.jpg" alt="post">
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                    <ul class="post-meta">
                                                        <li><i class="icon-user"></i>jessica</li>
                                                        <li><i class="icon-clock"></i>2 Min ago</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul> 
                                    </div>
                                    <!-- Post List -->

                                </div>
                            </div>
                            <!-- post details -->

                        </div>
                        <!-- post thumbs detail widget -->

                        <!-- Gallery Widget -->
                        <div class="post-widget">

                            <!-- Heading -->
                            <div class="primary-heading">
                                <h2>gallery style</h2>
                            </div>
                            <!-- Heading -->

                            <div class="gallery-widget">

                                <!-- gallery slides -->
                                <ul class="gallery-slider" id="gallery-slider"> 
                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/img-01.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/img-02.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/img-03.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/img-04.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/img-05.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/img-06.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/img-01.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/img-02.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/img-03.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/img-04.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/img-05.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/img-06.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                                <!-- gallery slides -->

                                <!-- gallery thumbs -->
                                <ul id="gallery-slider-thumb" class="gallery-slider-thumb">
                                    <li data-slideIndex="0"><a href="<?php echo get_template_directory_uri();?>/#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/thumbs/img-01.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="1"><a href="<?php echo get_template_directory_uri();?>/#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/thumbs/img-02.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="2"><a href="<?php echo get_template_directory_uri();?>/#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/thumbs/img-03.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="3"><a href="<?php echo get_template_directory_uri();?>/#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/thumbs/img-04.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="4"><a href="<?php echo get_template_directory_uri();?>/#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/thumbs/img-05.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="5"><a href="<?php echo get_template_directory_uri();?>/#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/thumbs/img-06.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="0"><a href="<?php echo get_template_directory_uri();?>/#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/thumbs/img-01.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="1"><a href="<?php echo get_template_directory_uri();?>/#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/thumbs/img-02.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="2"><a href="<?php echo get_template_directory_uri();?>/#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/thumbs/img-03.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="3"><a href="<?php echo get_template_directory_uri();?>/#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/thumbs/img-04.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="4"><a href="<?php echo get_template_directory_uri();?>/#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/thumbs/img-05.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="5"><a href="<?php echo get_template_directory_uri();?>/#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/gallery/thumbs/img-06.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                
                                </ul>
                                <!-- gallery thumbs -->

                            </div>

                        </div>
                        <!-- Gallery Widget -->

                        <!-- Slider Widget -->
                        <div class="post-widget">

                            <!-- Heading -->
                            <div class="primary-heading">
                                <h2>most viewed posts</h2>
                            </div>
                            <!-- Heading -->

                            <!-- post slider -->
                            <div class="light-shadow white-bg p-30 slider-post"> 
                                <div id="post-slider-2">
                                    
                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-01.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-02.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-03.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-04.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                   <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-01.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->


                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-02.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-03.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                   <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-04.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                   <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/post-1/img-01.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>

                            </div>
                            <!-- post slider -->

                        </div>
                        <!-- Slider Widget -->

                        <!-- archieve widget -->
                        <div class="post-widget">

                            <!-- Heading -->
                            <div class="primary-heading">
                                <h2>archieve posts</h2>
                            </div>
                            <!-- Heading -->

                            <!-- archieve -->
                            <div class="light-shadow white-bg"> 
                                <div class="archieve-tabs">
                                
                                    <!-- Tabs Nav -->
                                    <div class="cate-tab-navs">
                                        <ul class="nav-justified">
                                            <li class="active">
                                                <a href="<?php echo get_template_directory_uri();?>/#january" data-toggle="tab">january</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_template_directory_uri();?>/#february" data-toggle="tab">february</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_template_directory_uri();?>/#march" data-toggle="tab">march</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_template_directory_uri();?>/#april" data-toggle="tab">april</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_template_directory_uri();?>/#may" data-toggle="tab">may</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_template_directory_uri();?>/#june" data-toggle="tab">june</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_template_directory_uri();?>/#july" data-toggle="tab">july</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_template_directory_uri();?>/#august" data-toggle="tab">august</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Tabs Nav -->
      
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="january">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo get_template_directory_uri();?>/images/health/img-01.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                        <ul>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">James blake fires the officer who did.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="february">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo get_template_directory_uri();?>/images/health/img-06.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                         <ul>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">James blake fires the officer who did.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="march">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo get_template_directory_uri();?>/images/lifestyle/img-06.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                         <ul>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">James blake fires the officer who did.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="april">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo get_template_directory_uri();?>/images/lifestyle/img-01.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                         <ul>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">James blake fires the officer who did.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="may">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo get_template_directory_uri();?>/images/sports/img-06.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                         <ul>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">James blake fires the officer who did.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="june">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo get_template_directory_uri();?>/images/sports/img-01.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                        <ul>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">James blake fires the officer who did.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="july">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo get_template_directory_uri();?>/images/fashion/img-06.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                        <ul>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">James blake fires the officer who did.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="august">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo get_template_directory_uri();?>/images/world/img-06.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                         <ul>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">James blake fires the officer who did.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="<?php echo get_template_directory_uri();?>/#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <!-- Tab panes -->

                                </div>
                            </div>
                            <!-- archieve -->

                        </div>
                        <!-- archieve widget -->

                        <!-- add banner -->
                        <div class="add-banner text-center m-0 p-0">
                            <img src="<?php echo get_template_directory_uri();?>/images/add-3.jpg" alt="">
                        </div>
                        <!-- add banner -->

                    </div>
                    <!-- Content -->

                    <!-- Sidebar -->
                    <div class="col-lg-3 col-md-3 col-xs-12 custom-re">
						<div class="row">
                        <aside class="side-bar grid">
                            <!-- Auther profile -->
                            <div class="grid-item col-lg-12 col-md-12 col-sm-4 col-xs-6 r-full-width">
                                <div class="widget light-shadow">
                                    <h3 class="secondry-heading">our authers</h3>
                                    <div class="auther-widget">
                                        <div id="auther-slider-thumb" class="auther-slider-thumb">
                                            <a data-slide-index="0" href="<?php echo get_template_directory_uri();?>/#"><img src="<?php echo get_template_directory_uri();?>/images/auth.jpg" alt=""></a>
                                            <a data-slide-index="1" href="<?php echo get_template_directory_uri();?>/#" class="active"><img src="<?php echo get_template_directory_uri();?>/images/auth-1.jpg" alt=""></a>
                                            <a data-slide-index="2" href="<?php echo get_template_directory_uri();?>/#"><img src="<?php echo get_template_directory_uri();?>/images/auth-2.jpg" alt=""></a>
                                        </div>
                                        <ul class="auther-slider">
                                            <li class="auther-detail">
                                                <strong>james watson</strong>
                                                <span>Admin, photographer</span>
                                                <p>Lorem ipsum dolor sit ameting elit consectetur adipisicing elit, sed eiusmod.</p>
                                            </li>

                                            <li class="auther-detail">
                                                <strong>james watson</strong>
                                                <span>Admin, photographer</span>
                                                <p>Lorem ipsum dolor sit ameting elit consectetur adipisicing elit, sed eiusmod.</p>
                                            </li>

                                            <li class="auther-detail">
                                                <strong>james watson</strong>
                                                <span>Admin, photographer</span>
                                                <p>Lorem ipsum dolor sit ameting elit consectetur adipisicing elit, sed eiusmod.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Auther profile -->

                            <!-- Social Networks -->
                            <div class="grid-item col-lg-12 col-md-12 col-sm-4 col-xs-6 r-full-width">
                                <div class="widget">
                                    <ul class="aside-social">
                                        <li class="fb">
                                            <a href="<?php echo get_template_directory_uri();?>/#"><i class="fa fa-facebook"></i><span>followers</span><em>100</em></a>
                                        </li>
                                        <li class="pi">
                                            <a href="<?php echo get_template_directory_uri();?>/#"><i class="fa fa-pinterest-p"></i><span>followers</span><em>100</em></a>
                                        </li>
                                        <li class="tw">
                                            <a href="<?php echo get_template_directory_uri();?>/#"><i class="fa fa-twitter"></i><span>followers</span><em>100</em></a>
                                        </li>
                                        <li class="gmail">
                                            <a href="<?php echo get_template_directory_uri();?>/#"><i class="fa fa-google-plus"></i><span>followers</span><em>100</em></a>
                                        </li>
                                         <li class="sky">
                                            <a href="<?php echo get_template_directory_uri();?>/#"><i class="fa fa-skype"></i><span>followers</span><em>100</em></a>
                                        </li>
                                        <li class="yt">
                                            <a href="<?php echo get_template_directory_uri();?>/#"><i class="fa fa-youtube"></i><span>followers</span><em>100</em></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Social Networks -->

                            <!-- twitter widget -->
                            <div class="grid-item col-lg-12 col-md-12 col-sm-4 col-xs-6 r-full-width">
                                <div class="widget">
                                    <h3 class="secondry-heading">twitter feed</h3>
                                    <ul class="twitter-feed" id="twitter-slider">

                                        <!-- tweet -->
                                        <li>
                                            <div class="twitter-brand-name">
                                                <h6><i class="fa fa-twitter"></i>
                                                <a href="<?php echo get_template_directory_uri();?>/#">@Envato Studio</a>
                                                <i class="fa fa-retweet pull-right"></i>
                                                </h6>
                                            </div>
                                            <div class="brand-name">
                                                <p>Could @bodletech screen tery life to new have lengths ?</p>
                                                <span class="site-link"><a href="<?php echo get_template_directory_uri();?>/#">http://www.telegraph.co.uk/</a>6 hour ago</span>
                                            </div>
                                        </li> 
                                        <!-- tweet -->

                                        <!-- tweet -->
                                        <li>
                                            <div class="twitter-brand-name">
                                                <h6><i class="fa fa-twitter"></i>
                                                <a href="<?php echo get_template_directory_uri();?>/#">@Envato Studio</a>
                                                <i class="fa fa-retweet pull-right"></i>
                                                </h6>
                                            </div>
                                            <div class="brand-name">
                                                <p>Could @bodletech screen tery life to new have lengths ?</p>
                                                <span class="site-link"><a href="<?php echo get_template_directory_uri();?>/#">http://www.telegraph.co.uk/</a>6 hour ago</span>
                                            </div>
                                        </li> 
                                        <!-- tweet -->

                                    </ul>
                                </div>
                            </div>
                            <!-- twitter widget -->

                            <!-- News Widget -->
                            <div class="grid-item col-lg-12 col-md-12 col-sm-4 col-xs-6 r-full-width">
                                <div class="widget">
                                    <h3 class="secondry-heading">top news</h3>
                                    <div class="horizontal-tabs-widget">

                                        <!-- tabs navs -->
                                        <ul class="theme-tab-navs">
                                            <li class="active">
                                                <a href="<?php echo get_template_directory_uri();?>/#week" data-toggle="tab">week</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_template_directory_uri();?>/#month" data-toggle="tab">month</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_template_directory_uri();?>/#all" data-toggle="tab">all</a>
                                            </li>
                                        </ul>
                                        <!-- tabs navs -->
          
                                        <!-- Tab panes -->
                                        <div class="horizontal-tab-content tab-content">
                                            <div class="tab-pane fade active in" id="week">
                                                <ul class="post-wrap-list">
                                                    <li class="post-wrap small-post">
                                                        <div class="post-thumb">
                                                          <img src="<?php echo get_template_directory_uri();?>/images/sidebar/news/img-01.jpg" alt="post">
                                                        </div>
                                                        <div class="post-content">
                                                            <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolors it..</a></h4>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                                <li><i class="fa fa-comments-o"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                   <li class="post-wrap small-post">
                                                        <div class="post-thumb">
                                                          <img src="<?php echo get_template_directory_uri();?>/images/sidebar/news/img-02.jpg" alt="post">
                                                        </div>
                                                        <div class="post-content">
                                                            <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolors it..</a></h4>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                                <li><i class="fa fa-comments-o"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="post-wrap small-post">
                                                        <div class="post-thumb">
                                                          <img src="<?php echo get_template_directory_uri();?>/images/sidebar/news/img-03.jpg" alt="post">
                                                        </div>
                                                        <div class="post-content">
                                                            <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolors...</a></h4>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                                <li><i class="fa fa-comments-o"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="month">
                                                <ul class="post-wrap-list">
                                                    <li class="post-wrap small-post">
                                                        <div class="post-thumb">
                                                          <img src="<?php echo get_template_directory_uri();?>/images/sidebar/news/img-01.jpg" alt="post">
                                                        </div>
                                                        <div class="post-content">
                                                            <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolors...</a></h4>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                                <li><i class="fa fa-comments-o"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                   <li class="post-wrap small-post">
                                                        <div class="post-thumb">
                                                          <img src="<?php echo get_template_directory_uri();?>/images/sidebar/news/img-02.jpg" alt="post">
                                                        </div>
                                                        <div class="post-content">
                                                            <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolor...</a></h4>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                                <li><i class="fa fa-comments-o"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="post-wrap small-post">
                                                        <div class="post-thumb">
                                                          <img src="<?php echo get_template_directory_uri();?>/images/sidebar/news/img-03.jpg" alt="post">
                                                        </div>
                                                        <div class="post-content">
                                                            <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolors...</a></h4>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                                <li><i class="fa fa-comments-o"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="all">
                                                <ul class="post-wrap-list">
                                                    <li class="post-wrap small-post">
                                                        <div class="post-thumb">
                                                          <img src="<?php echo get_template_directory_uri();?>/images/sidebar/news/img-01.jpg" alt="post">
                                                        </div>
                                                        <div class="post-content">
                                                            <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolors...</a></h4>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                                <li><i class="fa fa-comments-o"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                   <li class="post-wrap small-post">
                                                        <div class="post-thumb">
                                                          <img src="<?php echo get_template_directory_uri();?>/images/sidebar/news/img-02.jpg" alt="post">
                                                        </div>
                                                        <div class="post-content">
                                                            <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolors...</a></h4>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                                <li><i class="fa fa-comments-o"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="post-wrap small-post">
                                                        <div class="post-thumb">
                                                          <img src="<?php echo get_template_directory_uri();?>/images/sidebar/news/img-03.jpg" alt="post">
                                                        </div>
                                                        <div class="post-content">
                                                            <h4><a href="<?php echo get_template_directory_uri();?>/#">Lorem ipsum dolors...</a></h4>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                                <li><i class="fa fa-comments-o"></i>20</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Tab panes -->

                                    </div>
                                </div>
                            </div>
                            <!-- News Widget -->

                            <!-- Calender widget -->
                            <div class="grid-item col-lg-12 col-md-12 col-sm-4 col-xs-6 r-full-width">
                                <div class="widget">
                                    <h3 class="secondry-heading">Arcieve</h3>
                                    <div class="calender-widget">
                                        <div id="calendar" class="calendar"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Calender widget -->

                            <!-- Slider Widget -->
                            <div class="grid-item col-lg-12 col-md-12 col-sm-4 col-xs-6 r-full-width">
                                <div class="widget">
                                    <h3 class="secondry-heading">slider widget</h3>
                                    <div class="slider-widget">

                                        <!-- Slider -->
                                        <div id="post-slider">
                                            <div class="item">
                                                <img src="<?php echo get_template_directory_uri();?>/images/sidebar/slider-01.jpg" alt="slider">
                                            </div>
                                            <div class="item">
                                                <img src="<?php echo get_template_directory_uri();?>/images/sidebar/slider-01.jpg" alt="slider">
                                            </div>
                                            <div class="item">
                                                <img src="<?php echo get_template_directory_uri();?>/images/sidebar/slider-01.jpg" alt="slider">
                                            </div>
                                        </div>
                                        <!-- Slider -->

                                        <!-- Content -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/#">Girl yoyo Music listing</a></h4>

                                            <!-- post meta -->
                                            <ul class="post-meta">
                                                <li><i class="icon-user"></i>jessica alex</li>
                                                <li><i class="icon-clock"></i>5 Min ago</li>
                                            </ul>
                                            <!-- post meta -->

                                            <p>Lorem ipsum dolor siting amet consec adipisicing elit, sed do eiusmod.</p>
                                        </div>
                                        <!-- Content -->

                                    </div>
                                </div>
                            </div>
                            <!-- Slider Widget -->


                            <!-- facebook widget -->
                            <div class="grid-item col-lg-12 col-md-12 col-sm-4 col-xs-6 r-full-width">
                                <div class="widget">
                                    <h3 class="secondry-heading">find us on facebook</h3>
                                    <iframe src="<?php echo get_template_directory_uri();?>/https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&amp;tabs=timeline&amp;width=300&amp;height=220&amp;small_header=false&amp;adapt_container_width=false&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="300" height="220" style="border:none;overflow:hidden"></iframe>
                                </div>
                            </div>
                            <!-- facebook widget -->

                            <!-- Catogires widget -->
                            <div class="grid-item col-lg-12 col-md-12 col-sm-4 col-xs-6 r-full-width">
                                <div class="widget">
                                    <h3 class="secondry-heading">categories</h3>
                                    <ul class="categories-widget">
                                        <li><a href="<?php echo get_template_directory_uri();?>/#"><em>fashion</em><span class="bg-green">15</span></a></li>
                                        <li><a href="<?php echo get_template_directory_uri();?>/#"><em>world</em><span class="bg-masterd">15</span></a></li>
                                        <li><a href="<?php echo get_template_directory_uri();?>/#"><em>technology</em><span class="bg-p-green">15</span></a></li>
                                        <li><a href="<?php echo get_template_directory_uri();?>/#"><em>health</em><span class="bg-orange">15</span></a></li>
                                        <li><a href="<?php echo get_template_directory_uri();?>/#"><em>lifestyle</em><span class="bg-gray">15</span></a></li>
                                        <li><a href="<?php echo get_template_directory_uri();?>/#"><em>sports</em><span class="bg-masterd">15</span></a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <!-- Catogires widget -->

                            <!-- sports Widget -->
                            <div class="grid-item col-lg-12 col-md-12 col-sm-4 col-xs-6 r-full-width">
                                <div class="widget">
                                    <h3 class="secondry-heading">sports news</h3>
                                    <div class="horizontal-tabs-widget">

                                        <!-- tabs navs -->
                                        <ul class="theme-tab-navs style-2">
                                            <li class="active">
                                                <a href="<?php echo get_template_directory_uri();?>/#fixtures" data-toggle="tab">Last Match</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_template_directory_uri();?>/#result" data-toggle="tab">upcomming</a>
                                            </li>
                                        </ul>
                                        <!-- tabs navs -->
          
                                        <!-- Tab panes -->
                                        <div class="horizontal-tab-content tab-content">
                                            <div class="tab-pane fade active in" id="fixtures">
                                                <div class="matches-detail">
                                                    <p>49 Chapel Lane ARNE BH20 12/02/2016 / 19:00</p>
                                                    <div class="team-btw-match">
                                                        <ul>
                                                            <li>
                                                                <img src="<?php echo get_template_directory_uri();?>/images/team-logos/img-03.png" alt="">
                                                                <span>Munchester <br> united</span>
                                                            </li>
                                                            <li>
                                                                <img src="<?php echo get_template_directory_uri();?>/images/team-logos/img-04.png" alt="">
                                                                <span>Norwich <br> City</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="goals-detail">
                                                        <ul>
                                                            <li>
                                                                <span>M. Johansen</span>
                                                                <span>23 (FNA)</span>
                                                            </li>
                                                            <li>
                                                                <span>G. Smith</span>
                                                                <span>41 (FNA)</span>
                                                            </li>
                                                            <li>
                                                                <span>T. Mosler</span>
                                                                <span>59 (FNA)</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="result">
                                                <div class="upcoming-fixture">
                                                <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="logo-width-name"><img src="<?php echo get_template_directory_uri();?>/images/team-logos-small/img-01.png" alt="">South</div>
                                                                </td>
                                                                <td><span class="upcoming-fixture-date">6 Feb 2016 15:00</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="logo-width-name"><img src="<?php echo get_template_directory_uri();?>/images/team-logos-small/img-03.png" alt="">South</div>
                                                                </td>
                                                                <td><span class="upcoming-fixture-date">6 Feb 2016 15:00</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="logo-width-name"><img src="<?php echo get_template_directory_uri();?>/images/team-logos-small/img-05.png" alt="">South</div>
                                                                </td>
                                                                <td><span class="upcoming-fixture-date">6 Feb 2016 15:00</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="logo-width-name"><img src="<?php echo get_template_directory_uri();?>/images/team-logos-small/img-07.png" alt="">South</div>
                                                                </td>
                                                                <td><span class="upcoming-fixture-date">6 Feb 2016 15:00</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- Tab panes -->

                                    </div>
                                </div>
                            </div>
                            <!-- sports Widget -->

                            <!-- advertisement widget -->
                            <div class="grid-item col-lg-12 col-md-12 col-sm-4 col-xs-6 r-full-width">
                                <div class="widget">
                                    <h3 class="secondry-heading">advertisement</h3>
                                    <div class="add">
                                        <a href="<?php echo get_template_directory_uri();?>/#"><img src="<?php echo get_template_directory_uri();?>/images/add.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- advertisement widget -->

                            <!-- advertisement widget -->
                            <div class="grid-item col-lg-12 col-md-12 col-sm-4 col-xs-6 r-full-width">
                                <div class="widget">
                                    <h3 class="secondry-heading">online pool</h3>
                                    <div class="pool-widget">
                                        <p>Type and scrambeld it to make a type specimen book:</p>
                                        <form role="form">
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Twice a year</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Once a year</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">Only when i need it</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio">I'm healthy</label>
                                            </div>
                                        </form>
                                        <div class="group">
                                            <a href="<?php echo get_template_directory_uri();?>/#" class="btn red">vote now</a>
                                            <a href="<?php echo get_template_directory_uri();?>/#" class="btn red">view now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- advertisement widget -->
                        </aside>
						</div>
                    </div>
                    <!-- Sidebar -->

                </div>   
                <!-- Main Content Row -->

            </div>
        </div>  

        <!-- categories posts -->
        <div class="post-widget m-0 white-bg">
            <div class="cate-tab-navs">
                <div class="container">
                    <ul class="nav-justified">
                        <li class="active"><a data-target="#politics" data-toggle="tab">politics</a></li>
                        <li><a data-target="#technology" data-toggle="tab">technology</a></li>
                        <li><a data-target="#fashion" data-toggle="tab">fashion</a></li>
                        <li><a data-target="#international" data-toggle="tab">international</a></li>
                        <li><a data-target="#admin" data-toggle="tab">admin pick</a></li>
                        <li><a data-target="#top" data-toggle="tab">top posts</a></li>
                    </ul>
                </div>
            </div>
            <div class="cate-tab-content theme-padding">
                <div class="container">
                    <div class="tab-content">
                        <div class="tab-pane active fade in" id="politics">
                            <div class="row slider-post">
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/world/img-01.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/world/img-02.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/world/img-03.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/world/img-05.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="technology">
                            <div class="row slider-post">
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/technology/img-05.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/technology/img-02.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/technology/img-03.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/technology/img-04.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fashion">
                            <div class="row slider-post">
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/fashion/img-05.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/fashion/img-04.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/fashion/img-03.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/fashion/img-08.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="international">
                            <div class="row slider-post">
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/world/img-08.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/world/img-07.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/fashion/img-06.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/world/img-05.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="admin">
                            <div class="row slider-post">
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/sports/img-08.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/sports/img-07.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/technology/img-08.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/lifestyle/img-08.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top">
                            <div class="row slider-post">
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/technology/img-04.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/lifestyle/img-05.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/technology/img-02.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo get_template_directory_uri();?>/images/health/img-03.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php echo get_template_directory_uri();?>/#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php echo get_template_directory_uri();?>/post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
        <!-- categories posts -->

    </main>
    <!-- main content -->
<?php get_footer();?>
   