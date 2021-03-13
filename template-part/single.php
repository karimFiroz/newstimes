<?php get_header();?>

    <!-- News Headline Container -->
    <div class="news-bar white-bg">
        <div class="container">
            <div class="row">

                <!-- news -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9 r-full-width">
                    <div class="headline-wrap">

                        <span class="badge">just in</span>
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
                        <div id="ticker">
                            <div class="clip">
                                <div class="today">
                                    <ul>
                                        <li>Source: Manziel 'hung over' at Browns' meeting Clippers suspend Griffin four games.</li>
                                        <li> "Human &amp; Rights” has been helping the and surviving family Rights” know when  has been.</li>
                                        <li>Source: Manziel 'hung over' at Browns' meeting Clippers suspend Griffin four games.</li>
                                        <li>Source: Manziel 'hung over' at Browns' meeting Clippers suspend Griffin four games.</li>
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
                        <img src="<?php echo get_stylesheet_uri(); ?>/<?php echo get_stylesheet_uri(); ?>/images/cloud.png" alt="">
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
    <main class="main-wrap" id="post-detail"> 
        <div class="theme-padding">
            <div class="container">
                <div class="row">


<?php 
/**
*the loop
*/
while(have_posts()): the_post();?>

                    <div class="col-md-9 col-sm-8">
                        <div class="content">

                            <!-- blog detail -->
                            <div class="post-widget light-shadow white-bg">

                                <!-- blog artical -->
                                <article class="post">
                                    
                                    <!-- blog pot thumb -->
                                    <div class="post-thumb"> 
   <?php the_post_thumbnail('single-page-image',array('class'=>'single-page-image-class')); ?>
                                        <span class="post-badge">world news</span>
                                    </div>
                                    <!-- blog pot thumb -->

                                    <!-- post detail -->
                                    <div class="post-info p-30">

                                        <!-- title -->
                                        <h3><?php the_title();?></h3>
                                        <!-- title -->

                                        <!-- Post meta -->
                                        <div class="post_meta_holder">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- post meta -->
                                                    <ul class="post-meta">
                              <li><i class="fa fa-user"></i><?php the_author();?></li>
                            <li><i class="fa fa-clock-o"></i><?php the_date();?></li>
                                 <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                  <li><i class="fa fa-comments-o"></i>20</li>
                                                    </ul>
                                                    <!-- post meta -->
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- social icons --> 
                                                    <div class="blog-social">
                                                        <span class="share-icon btn-social-icon btn-adn"  data-toggle="tooltip" data-placement="top"    title="Sharing is Caring">
                                                            <span class="fa fa-share-alt"></span>
                                                        </span>
                                                        <ul>
                                                            <li>
                                                                <a class="btn-social-icon btn-facebook" href="<?php echo get_stylesheet_uri(); ?>/#"  data-toggle="tooltip" data-placement="top" title="Share of Facebook">
                                                                    <span class="fa fa-facebook"></span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="btn-social-icon btn-twitter" href="<?php echo get_stylesheet_uri(); ?>/#"  data-toggle="tooltip" data-placement="top" title="Post on Twitter">
                                                                    <span class="fa fa-twitter"></span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="btn-social-icon btn-pinterest" href="<?php echo get_stylesheet_uri(); ?>/#"  data-toggle="tooltip" data-placement="top" title="Pin IT">
                                                                    <span class="fa fa-pinterest"></span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="btn-social-icon btn-linkedin" href="<?php echo get_stylesheet_uri(); ?>/#"  data-toggle="tooltip" data-placement="top" title="Post on Linked In">
                                                                    <span class="fa fa-linkedin"></span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="btn-social-icon btn-vimeo" href="<?php echo get_stylesheet_uri(); ?>/#"  data-toggle="tooltip" data-placement="top" title="Post on Twitter">
                                                                    <span class="fa fa-vimeo"></span>
                                                                </a>
                                                            </li>
                                                        </ul>                                                   
                                                    </div>
                                                    <!-- social icons --> 
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post meta -->
                                        <!-- post description -->
                                       <div class="post-desc">

                                       	<?php the_content();?>
                                       </div>
                                        <!-- post description -->

                                        <!-- tags and social icons -->
                                        <div class="row mb-20">

                                            <!-- populer tags --> 
                                            <div class="col-md-6">
                                                <div class="blog-tags font-roboto">
                                                    <ul>
                                                        <li><a href="<?php echo get_stylesheet_uri(); ?>/#">powerfull</a></li>
                                                        <li><a href="<?php echo get_stylesheet_uri(); ?>/#">watch</a></li>
                                                        <li><a href="<?php echo get_stylesheet_uri(); ?>/#">mobile</a></li>
                                                        <li><a href="<?php echo get_stylesheet_uri(); ?>/#">tab</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- populer tags --> 

                                            <!-- social icons --> 
                                            <div class="col-md-6">
                                                <div class="blog-social">
                                                     <span class="share-icon btn-social-icon btn-adn"  data-toggle="tooltip" data-placement="top" title="Sharing is Caring">
                                                            <span class="fa fa-share-alt"></span>
                                                        </span>
                                                    <ul>
                                                        <li>
                                                            <a class="btn-social-icon btn-facebook" href="<?php echo get_stylesheet_uri(); ?>/#"  data-toggle="tooltip" data-placement="top" title="Share of Facebook">
                                                                <span class="fa fa-facebook"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn-social-icon btn-twitter" href="<?php echo get_stylesheet_uri(); ?>/#"  data-toggle="tooltip" data-placement="top" title="Post on Twitter">
                                                                <span class="fa fa-twitter"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn-social-icon btn-pinterest" href="<?php echo get_stylesheet_uri(); ?>/#"  data-toggle="tooltip" data-placement="top" title="Pin IT">
                                                                <span class="fa fa-pinterest"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn-social-icon btn-linkedin" href="<?php echo get_stylesheet_uri(); ?>/#"  data-toggle="tooltip" data-placement="top" title="Post on Linked In">
                                                                <span class="fa fa-linkedin"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn-social-icon btn-vimeo" href="<?php echo get_stylesheet_uri(); ?>/#"  data-toggle="tooltip" data-placement="top" title="Post on Twitter">
                                                                <span class="fa fa-vimeo"></span>
                                                            </a>
                                                        </li>
                                                     </ul>                                                   
                                                </div>
                                            </div>
                                            <!-- social icons --> 

                                        </div>
                                        <!-- tags and social icons -->

                                        <!-- reviews and rating -->
                                        <div class="row">

                                            <!-- blog user reviews -->
                                            <div class="col-sm-6">
                                                <div class="blog-user-rating font-roboto">
                                                    <strong>average:</strong>
                                                    <span>5%</span>
                                                    <!-- reviews -->
                                                    <ul class="reviews">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <!-- reviews -->
                                                </div>
                                            </div>
                                            <!-- blog user reviews -->

                                            <div class="col-sm-6">
                                                <div class="blog-user-reviews font-roboto">
                                                    <strong>user rating :</strong>
                                                    <span>6.6 (29 votes)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- reviews and rating -->
                                        
                                    </div>

                                    <!-- post detail -->

                                </article>
                                <!-- blog artical -->
                               
                            </div>
                            <!-- blog detail -->

                            <!-- Slider Widget -->
                            <div class="post-widget">

                                <!-- Heading -->
                                <div class="primary-heading">
                                    <h2>related posts</h2>
                                </div>
                                <!-- Heading -->

                                <!-- post slider -->
                                <div class="light-shadow gray-bg p-30"> 
                                    <div id="post-slider-2">

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- thumbnail -->
                                            <div class="post-thumb"> 
                                                <img src="<?php echo get_stylesheet_uri(); ?>/images/post-1/img-01.jpg" alt="">
                                                <span class="post-badge">post</span>

                                                <!-- post thumb hover -->
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo get_stylesheet_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                                <!-- post thumb hover -->
                                                
                                            </div>
                                            <!-- thumbnail -->
                              <div class="post-content">
                                 <ul class="post-meta">
                                  <li><i class="fa fa-user"></i>jessica alex</li>
                                                    <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                </ul>
                                                <h5 class="m-0"><a href="<?php echo get_stylesheet_uri(); ?>/#">Full Responsive amazing design And Pixel Perfect </a></h5>
                                            </div>
                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- thumbnail -->
                                            <div class="post-thumb"> 
                                                <img src="<?php echo get_stylesheet_uri(); ?>/images/post-1/img-02.jpg" alt="">
                                                <span class="post-badge">post</span>

                                                <!-- post thumb hover -->
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo get_stylesheet_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                                <!-- post thumb hover -->

                                            </div>
                                            <!-- thumbnail -->

                                            <div class="post-content">
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-user"></i>jessica alex</li>
                                                    <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                </ul>
                                                <h5 class="m-0"><a href="<?php echo get_stylesheet_uri(); ?>/#">Full Responsive amazing design And Pixel Perfect </a></h5>
                                            </div>
                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- thumbnail -->
                                            <div class="post-thumb"> 
                                                <img src="<?php echo get_stylesheet_uri(); ?>/images/post-1/img-03.jpg" alt="">
                                                <span class="post-badge">post</span>

                                                <!-- post thumb hover -->
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo get_stylesheet_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                                <!-- post thumb hover -->

                                            </div>
                                            <!-- thumbnail -->

                                            <div class="post-content">
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-user"></i>jessica alex</li>
                                                    <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                </ul>
                                                <h5 class="m-0"><a href="<?php echo get_stylesheet_uri(); ?>/#">Full Responsive amazing design And Pixel Perfect </a></h5>
                                            </div>
                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- thumbnail -->
                                            <div class="post-thumb"> 
                                                <img src="<?php echo get_stylesheet_uri(); ?>/images/post-1/img-01.jpg" alt="">
                                                <span class="post-badge">post</span>

                                                <!-- post thumb hover -->
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo get_stylesheet_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                                <!-- post thumb hover -->
                                                
                                            </div>
                                            <!-- thumbnail -->
                                            <div class="post-content">
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-user"></i>jessica alex</li>
                                                    <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                </ul>
                                                <h5 class="m-0"><a href="<?php echo get_stylesheet_uri(); ?>/#">Full Responsive amazing design And Pixel Perfect </a></h5>
                                            </div>
                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- thumbnail -->
                                            <div class="post-thumb"> 
                                                <img src="<?php echo get_stylesheet_uri(); ?>/images/post-1/img-02.jpg" alt="">
                                                <span class="post-badge">post</span>

                                                <!-- post thumb hover -->
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo get_stylesheet_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                                <!-- post thumb hover -->

                                            </div>
                                            <!-- thumbnail -->

                                            <div class="post-content">
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-user"></i>jessica alex</li>
                                                    <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                </ul>
                                                <h5 class="m-0"><a href="<?php echo get_stylesheet_uri(); ?>/#">Full Responsive amazing design And Pixel Perfect </a></h5>
                                            </div>
                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- thumbnail -->
                                            <div class="post-thumb"> 
                                                <img src="<?php echo get_stylesheet_uri(); ?>/images/post-1/img-03.jpg" alt="">
                                                <span class="post-badge">post</span>

                                                <!-- post thumb hover -->
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo get_stylesheet_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                                <!-- post thumb hover -->

                                            </div>
                                            <!-- thumbnail -->

                                            <div class="post-content">
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-user"></i>jessica alex</li>
                                                    <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                </ul>
                                                <h5 class="m-0"><a href="<?php echo get_stylesheet_uri(); ?>/#">Full Responsive amazing design And Pixel Perfect </a></h5>
                                            </div>
                                        </div>
                                        <!-- post -->
                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- thumbnail -->
                                            <div class="post-thumb"> 
                                                <img src="<?php echo get_stylesheet_uri(); ?>/images/post-1/img-01.jpg" alt="">
                                                <span class="post-badge">post</span>

                                                <!-- post thumb hover -->
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo get_stylesheet_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                                <!-- post thumb hover -->
                                                
                                            </div>
                                            <!-- thumbnail -->
                                            <div class="post-content">
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-user"></i>jessica alex</li>
                                                    <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                </ul>
                                                <h5 class="m-0"><a href="<?php echo get_stylesheet_uri(); ?>/#">Full Responsive amazing design And Pixel Perfect </a></h5>
                                            </div>
                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- thumbnail -->
                                            <div class="post-thumb"> 
                                                <img src="<?php echo get_stylesheet_uri(); ?>/images/post-1/img-02.jpg" alt="">
                                                <span class="post-badge">post</span>

                                                <!-- post thumb hover -->
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo get_stylesheet_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                                <!-- post thumb hover -->

                                            </div>
                                            <!-- thumbnail -->

                                            <div class="post-content">
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-user"></i>jessica alex</li>
                                                    <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                </ul>
                                                <h5 class="m-0"><a href="<?php echo get_stylesheet_uri(); ?>/#">Full Responsive amazing design And Pixel Perfect </a></h5>
                                            </div>
                                        </div>
                                        <!-- post -->

                                        <!-- post -->
                                        <div class="post style-1">

                                            <!-- thumbnail -->
                                            <div class="post-thumb"> 
                                                <img src="<?php echo get_stylesheet_uri(); ?>/images/post-1/img-03.jpg" alt="">
                                                <span class="post-badge">post</span>

                                                <!-- post thumb hover -->
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="<?php echo get_stylesheet_uri(); ?>/#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                                <!-- post thumb hover -->

                                            </div>
                                            <!-- thumbnail -->

                                            <div class="post-content">
                                                <ul class="post-meta">
                                                    <li><i class="fa fa-user"></i>jessica alex</li>
                                                    <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                </ul>
                                                <h5 class="m-0"><a href="<?php echo get_stylesheet_uri(); ?>/#">Full Responsive amazing design And Pixel Perfect </a></h5>
                                            </div>
                                        </div>
                                        <!-- post -->

                                    </div>
                                </div>
                                <!-- post slider -->

                            </div>
                            <!-- Slider Widget -->

                            <!-- comments area -->
                            <div class="comments-area mb-30">
                               
                                <!-- Heading -->
                                <div class="primary-heading">
                                    <h2>3 comments</h2>
                                </div>
                                <!-- Heading -->

                                <div class="comment-holder p-30 light-shadow white-bg">
                                    <!-- comment list -->
                                    <ul class="comment-list font-roboto">

                                        <!-- .comment -->
                                        <li class="comment-wrap">
                                            <!-- .comment thumb -->
                                            <div class="comment-thumb">
                                                <img src="<?php echo get_stylesheet_uri(); ?>/images/comments/img-01.png" alt=""> 
                                            </div>
                                            <!-- .comment thumb -->

                                            <div class="comment-body">
                                                <!-- .comment-auther -->
                                                <a class="comment-author" rel="external nofollow" href="<?php echo get_stylesheet_uri(); ?>/#">john smith</a>
                                                <!-- .comment-auther -->

                                                <div class="comment-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.</p>
                                                </div>
                                                 <!-- .comment-meta -->
                                                <header class="comment-meta">
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                        <li><a href="<?php echo get_stylesheet_uri(); ?>/#"><i class="fa fa-reply"></i>reply</a></li>
                                                    </ul>   
                                                </header> 
                                                 <!-- .comment-meta -->  
                                            </div>

                                            <!-- sub comment -->
                                            <ul class="comment-reply">
                                                <!-- .comment -->
                                                <li class="comment-wrap">
                                                   <!-- .comment thumb -->
                                                    <div class="comment-thumb">
                                                        <img src="<?php echo get_stylesheet_uri(); ?>/images/comments/img-02.png" alt=""> 
                                                    </div>
                                                    <!-- .comment thumb -->

                                                    <div class="comment-body">
                                                        <!-- .comment-auther -->
                                                        <a class="comment-author" rel="external nofollow" href="<?php echo get_stylesheet_uri(); ?>/#">john smith</a>
                                                        <!-- .comment-auther -->

                                                        <div class="comment-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.</p>
                                                        </div>
                                                         <!-- .comment-meta -->
                                                        <header class="comment-meta">
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                                <li><a href="<?php echo get_stylesheet_uri(); ?>/#"><i class="fa fa-reply"></i>reply</a></li>
                                                            </ul>   
                                                        </header> 
                                                         <!-- .comment-meta -->  
                                                    </div>
                                                </li>
                                                 <!-- .comment -->
                                            </ul>
                                            <!-- sub comment -->

                                        </li>
                                        <!-- .comment -->

                                        <!-- .comment -->
                                        <li class="comment-wrap">
                                            <!-- .comment thumb -->
                                            <div class="comment-thumb">
                                                <img src="<?php echo get_stylesheet_uri(); ?>/images/comments/img-03.png" alt=""> 
                                            </div>
                                            <!-- .comment thumb -->

                                            <div class="comment-body">
                                                <!-- .comment-auther -->
                                                <a class="comment-author" rel="external nofollow" href="<?php echo get_stylesheet_uri(); ?>/#">john smith</a>
                                                <!-- .comment-auther -->

                                                <div class="comment-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.</p>
                                                </div>
                                                 <!-- .comment-meta -->
                                                <header class="comment-meta">
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                        <li><a href="<?php echo get_stylesheet_uri(); ?>/#"><i class="fa fa-reply"></i>reply</a></li>
                                                    </ul>   
                                                </header> 
                                                <!-- .comment-meta -->  
                                            </div>

                                        </li>
                                        <!-- .comment -->

                                    </ul>
                                    <!-- comment list -->
                                </div>
                            </div>
                            <!-- comments area -->

                            <!-- comment form -->
                            <div class="comment-form">
                                <div class="primary-heading">
                                    <h2>leave your comments</h2>
                                </div>
                                 <div class="row">
                                    <form method="post">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="User Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Your email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="3" placeholder="Please write your message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="<?php echo get_stylesheet_uri(); ?>/#" class="btn red full-width">leave comment</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- comment form -->
                        </div>
                    </div>
                       <?php endwhile;?> 

                    <!-- Sidebar -->
                   <?php echo get_template_part('template-part/sidebar'); ?>
                    <!-- Sidebar -->

                </div>
            </div>
            <!-- Content -->
        </div>       
    </main>
    <!-- main content -->
<?php get_footer();?>
    