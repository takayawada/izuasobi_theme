<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- wordpress css-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url' ); ?>">

　　　<link rel="stylesheet" href="<?php bloginfo('stylesheet_url' ); ?>" media="screen and (max-width:767px)">
 

　　　<link rel="stylesheet" href="<?php bloginfo('stylesheet_url' ); ?>" media="screen and (min-width:768px)">




    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 



 
　　<!-- jQuery -->

<!-- slick CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" media="screen" />
<!-- /slick CSS -->
    <?php wp_head(); ?> 

 
    <title>伊豆あそび</title>
    
   　
   </head>

  <body>






    <div class="text-white ">
     <?php wp_nav_menu();　?>
    </div>
 <

   <header>
    <div class="site-title ">
      <h1><a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/image5/icon.jpg" alt="<?php bloginfo( 'name' ); ?>"/>
      </a></h1>
    </div>


         <!-- ハンバーガー -->
      
        <?php if ( wp_is_mobile() ) : ?>
          <div id="nav-drawer">
            <input id="nav-input" type="checkbox" class="nav-unshown">
            <label id="nav-open" for="nav-input"><span></span></label>
            <label class="nav-unshown" id="nav-close" for="nav-input"></label>
            <div id="nav-content">ここに中身を入れる</div>
          </div>
        <?php endif; ?>
       








    <!--  <?php get_header(); ?>  -->
   </header>
  
 
    
    
  <div id="wrapper ">

<div class="bd-example mt-5 pt-5">
  <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators ">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active "></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner ">
      <div class="carousel-item active ">
        <img src="<?php bloginfo('template_url'); ?>/image5/topkill.jpg" class="d-block 　w-100  img-fluid " style=" width: 100%; height: auto; " alt="...">
        <div class="carousel-caption ">
          <h2>20〜30代　伊豆を遊び尽くす！<br>伊豆の観光・旅行・レジャー　おすすめ情報サイト</h2>
          <a href="/izuasobi/category/#" class="btn btn-dark btn-lg mt-5 ">ブログ一覧</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php bloginfo('template_url'); ?>/image5/topkill.jpg" class="d-block 　w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>20〜30代　伊豆を遊び尽くす！<br>伊豆の観光・旅行・レジャー　おすすめ情報サイト</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php bloginfo('template_url'); ?>/image5/topkill.jpg" class="d-block 　w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>20〜30代　伊豆を遊び尽くす！<br>伊豆の観光・旅行・レジャー　おすすめ情報サイト</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>






     <!--   
      <div class="cover text-white text-center　">
       <h1 class="display-4 font-weight-bolder mb-5  mt-5 pt-5 ">20〜30代　伊豆を遊び尽くす！<br>
                          伊豆の観光・旅行・レジャー　おすすめ情報サイト</h1>
        <a href="" class="btn btn-dark btn-lg mt-5 ">ブログ一覧</a>
      </div>  -->


        
    <div id="section1 ">

      <h2 class=" display-4 text-center  pt-5 ">伊豆の絶景おすすめスポット特集</h2>
      <P class="text-center py-3">伊豆に訪れた際、眺めたい絶景ポイントをまとめてみました。</br>伊豆の豊かな自然を眺めて、お茶を飲んだり、写真を撮ったりと一息つける</br>穴場スポットなど紹介します。</P>

 

     <div class="container ">
      <div class="card-group">
      <div class="row no-gutters mb-0 ">


        <?php
        $args = array(
          'category'         => '17',
          'post_type'        => 'post',
          'posts_per_page'   => 6,
        );
        $my_query = new WP_Query( $args );
        while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
           

<div class="col-xl-4 col-md-6 col-xs-12  ">

        <div class="card border-0 mb-0" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-6 ">
            <div class="card-img-top img-thumbnail border-0 pt-0">
            <a href="<?php the_permalink(); ?>"><img  src=" <?php the_post_thumbnail(); ?></a> 
            </div>  
          </div>
          <div class="col-md-6 ">
            <div class="card-body pt-0 ">
              <h5 class="card-title"><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
              
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
     </div>
     </div>
　　</div>


     

    </div>






        <div id="section2">
          <h2 class=" display-4 text-center  pt-0 mt-0">一度は訪れたい伊豆の温泉地</h2>

       <!-- slick -->
          <div class="your-class">
            <div><a href="#"><img src="<?php bloginfo('template_url'); ?>/image5/topkill.jpg" alt="sample"></a></div>
            <div><a href="#"><img src="<?php bloginfo('template_url'); ?>/image5/topkill.jpg" alt="sample"></a></div>
            <div><a href="#"><img src="<?php bloginfo('template_url'); ?>/image5/topkill.jpg" alt="sample"></a></div>
            <div><a href="#"><img src="<?php bloginfo('template_url'); ?>/image5/topkill.jpg" alt="sample"></a></div>
          </div>

         

        

     
    

      <!-- タグの特定のページを6件出力したい -->
    <div class="section3">
     <h2 class=" display-4 text-center  pt-5 ">エリアから探す</h2>
      <P class="text-center py-3">当サイトで掲載している伊豆の情報をエリアごと検索できます。</br>
        目的地近辺でプラスして立ち寄りたい場所やプランをご検討中の方の是非検索して下さい。</P>
  

    <div class="container ">
      <div class="card-group">
      <div class="row no-gutters mb-0">
      <div class="col-md-4 ">
        <div class="card border-0 " style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-6">
              <a href="<?php  echo get_tag_link(3); ?>"><img src="<?php bloginfo('template_url'); ?>/image5/itoyama.jpg" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-6">
              <div class="card-body pt-0 pl-0 ">
                <h5 class="card-title mb-0"><a href="<?php  echo get_tag_link(3); ?>">伊東エリア</a></h5>
                <p class="card-text mt-0">東海岸の中心に位置,城ヶ崎海岸や大室山、一碧湖、小室山などの美しい自然や関東一の湯量を誇る豊富な温泉</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card border-0 " style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-6">
              <a href="<?php  echo get_tag_link(5); ?>"><img src="<?php bloginfo('template_url'); ?>/image5/kuroneiwa.jpg" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-6">
              <div class="card-body pt-0 pl-0 ">
                <h5 class="card-title mb-0"><a href="<?php  echo get_tag_link(5); ?>">東伊豆エリア</a></h5>
                <p class="card-text mt-0">熱川、稲取、北川、大川、片瀬、白田の6つの温泉に河津町</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card border-0 " style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-6">
              <a href="<?php  echo get_tag_link(7); ?>"><img src="<?php bloginfo('template_url'); ?>/image5/minamiizu.jpg" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-6">
              <div class="card-body pt-0 pl-0 ">
                <h5 class="card-title mb-0"><a href="<?php  echo get_tag_link(7); ?>">南伊豆エリア</a></h5>
                <p class="card-text mt-0">温暖な気候と美しい白い砂浜などが魅力南伊豆町と下田</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card border-0 " style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-6">
              <a href="<?php  echo get_tag_link(4); ?>"><img src="<?php bloginfo('template_url'); ?>/image5/atamiyoru.jpeg" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-6">
              <div class="card-body pt-0 pl-0 ">
                <h5 class="card-title mb-0"><a href="<?php  echo get_tag_link(4); ?>">熱海エリア</a></h5>
                <p class="card-text mt-0">古くから湯治の地で有名な温泉地、都心からのアクセスが良い。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card border-0 " style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-6">
              <a href="<?php  echo get_tag_link(6); ?>"><img src="<?php bloginfo('template_url'); ?>/image5/nishiizu.jpg" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-6">
              <div class="card-body pt-0 pl-0 ">
                <h5 class="card-title mb-0"><a href="<?php  echo get_tag_link(6); ?>">西伊豆エリア</a></h5>
                <p class="card-text mt-0">夕日や富士山の眺めが美しい、西伊豆町、土肥、戸田</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card border-0 " style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-6">
              <a href="<?php  echo get_tag_link(8); ?>"><img src="<?php bloginfo('template_url'); ?>/image5/nakaizu.jpg" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-6">
              <div class="card-body pt-0 pl-0 ">
                <h5 class="card-title mb-0"><a href="<?php  echo get_tag_link(8); ?>">中伊豆エリア</a></h5>
                <p class="card-text mt-0">伊豆中部、山に囲まれ自然溢れる。特に川が綺麗で風情あるエリア。伊豆長岡・大仁・修善寺・天城湯ヶ島</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>









  　 </div>
    　<!-- タグの特定のページを6件出力したい -->









  




    












<!-- 

<?php echo get_the_post_thumbnail( 38 );?>
<a  href="<?php echo get_permalink( 38 ); ?>"><?php echo get_the_title(38); ?></a>

 -->




    <div id="section4">
      <h2 class=" display-4 text-center  pt-0 ">伊豆観光ブログ</h2>
      <P class="text-center py-3">温泉や宿泊先、グルメやレジャー、旅行や観光に役立つ情報満載です。</P>

      <div class="container ">
        <div class="card-group ">
        <div class="row no-gutters mb-0">
           

          <?php
          $args = array(
            'category'         => '',
            'post_type'        => '',
            'posts_per_page'   => 12,
          );
          $my_query = new WP_Query( $args );
          while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

        <div class="col-xl-3 col-md-4  col-sm-12">
          <div class="card text-center border-0 mb-0" style="width: 225px; height:280px;">
                
                       
               
          <div class="card-img-top img-thumbnail border-0 ">
            <a href="<?php the_permalink(); ?>"><img  src=" <?php the_post_thumbnail(); ?></a> 
            </div> 
                  
           <div class="card-body ">
             <h4 class="card-title "><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
           </div> 　　　　　　　　　　　　　　　　　　　
          </div>
        </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
        </div>
      </div>

      <div class=" text-center">
      <a href="/izuasobi/category" class="btn btn-dark btn-lg mb-5 ">ブログ一覧</a>
      </div>

    </div>





</div>     

    <div class="footer">
    <?php get_footer(); ?>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 

        <!-- slick --> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<script src="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.min.js"></script>

 <script type="text/javascript">
          jQuery(document).ready(function(){
          jQuery('.your-class').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
          });
        });
          </script>
        
  </div>



   <?php wp_footer(); ?>
  </body>
</html>


