<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- wordpress -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url' ); ?>">
    <?php wp_head(); ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


     <!-- slick -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        

   

    <title>伊豆あそび</title>
    
     
  </head>

  <body>

    <header>
    <?php get_header(); ?>
    </header>
  
    
    
    
  <div id="wrapper">


      
      <div class="cover text-white text-center　">
       <h1 class="display-4 font-weight-bolder mb-5  mt-5 pt-5 ">20〜30代　伊豆を遊び尽くす！<br>
                          伊豆の観光・旅行・レジャー　おすすめ情報サイト</h1>
        <a href="" class="btn btn-dark btn-lg mt-5 ">ブログ一覧</a>
      </div>


        
    <div id="section1 ">

      <h2 class=" display-4 text-center  pt-5 ">伊豆の絶景おすすめスポット特集</h2>
      <P class="text-center py-3">伊豆に訪れた際、眺めたい絶景ポイントをまとめてみました。</br>伊豆の豊かな自然を眺めて、お茶を飲んだり、写真を撮ったりと一息つける</br>穴場スポットなど紹介します。</P>

 

     <div class="container ">
      <div class="card-group ">
      <div class="row no-gutters mb-0 pb-0">
           

        <?php
        $args = array(
          'category'         => '17',
          'post_type'        => 'post',
          'posts_per_page'   => 8,
        );
        $my_query = new WP_Query( $args );
        while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

      <div class="col-md-3 ">

        <div class="card text-center border-0 mb-0" style="width: 225px; height:450px;">
          
                 
         
          <div class="card-img-top img-thumbnail border-0 ">
            <img  src=" <?php the_post_thumbnail(); ?> 
            </div> 
            
            <div class="card-body">
              <h4 class="card-title "><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <p class="card-text "><?php the_excerpt(); ?></p>
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
          <div>your content</div>
          <div>your content</div>
          <div>your content</div>
          <div>your content</div>
        </div>

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

        <!-- slick --> 




    

      <!-- タグの特定のページを6件出力したい -->
    <div class="section3">
     <h2 class=" display-4 text-center  pt-5 ">エリアから探す</h2>
      <P class="text-center py-3">当サイトで掲載している伊豆の情報をエリアごと検索できます。</br>
        目的地近辺でプラスして立ち寄りたい場所やプランをご検討中の方の是非検索して下さい。</P>
  

   


<div class="container ">
      <div class="card-group">
      <div class="row no-gutters mb-0">


        <?php
        $args = array(
          'category'         => '17',
          'post_type'        => 'post',
          'posts_per_page'   => 6,
        );
        $my_query = new WP_Query( $args );
        while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
           

<div class="col-md-4 ">

        <div class="card border-0 mb-0" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="card-img-top img-thumbnail border-0 pt-0">
            <img  src=" <?php the_post_thumbnail(); ?> 
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




















  　 </div>
    　<!-- タグの特定のページを6件出力したい -->



















    <div id="section4">
      <h2 class=" display-4 text-center  pt-5 ">伊豆観光ブログ</h2>
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

        <div class="col-md-3 ">
          <div class="card text-center border-0 mb-0" style="width: 225px; height:280px;">
                
                       
               
          <div class="card-img-top img-thumbnail border-0 ">
            <img  src=" <?php the_post_thumbnail(); ?> 
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
      <a href="/izuasobi/category/" class="btn btn-dark btn-lg mb-5 ">ブログ一覧</a>
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
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> 
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
        
    




  </body>
</html>


