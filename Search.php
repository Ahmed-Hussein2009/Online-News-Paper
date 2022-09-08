<?php
  session_start();
  if($_SERVER['REQUEST_METHOD'] != 'POST' || !isset($_POST['search'])){
    header('Location: index.php');
    exit();
  }
?>

<!doctype html>
<html lang="en">
    <head>
        <title>جريدة الوطن الاكبر</title>

        <meta charset="utf-8">
        


        <!-- Main CSS --> 
        <link rel="stylesheet" href="css/style.css">
         <link href="f/css/style.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
       
<script src="login/js/jquery-1.10.2.min.js"></script>
<style>
    a.mylink{
        text-decoration: none;
        color: white;
        display: block;
        font-size: 18px ;
    }
    
    a:hover {
    text-decoration: none !important;
}
</style>
    </head>
  
    <body id="home" data-spy="scroll" data-target="#navbar-top" data-offset="200">
        
        <!-- Main navigation -->
        <nav id="navbar-top" class="navbar fixed-top navbar-expand-md navbar-dark">
            <div class="container">
                <div class="main-search">
                                            <form method="post" action="Search.php">
                                                
                                               <input type="text" value="Search" name="search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
                                                <input type="submit" value="">
                                            </form>
                                    <div class="close"><img src="login/images/cross.png" /></div>
                                </div>
                                    <div class="srch"><button><img src="login/images/search2.png" /></button></div>
                                    <script type="text/javascript">
                                         $('.main-search').hide();
                                        $('button').click(function (){
                                            $('.main-search').show();
                                            $('.main-search text').focus();
                                        }
                                        );
                                        $('.close').click(function(){
                                            $('.main-search').hide();
                                        });
                                    </script>
                <!-- Company name shown on mobile -->
              

                
                
                <!-- Main navigation items -->
                <div  class="collapse navbar-collapse" id="mainNavbar">
                       
                    <ul class="navbar-nav mr-auto">
                        
                       
                       
                          <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                                <a class="nav-link" ></a>
                        </li>
                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                                <a class="nav-link" ></a>
                        </li>
                       <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item dropdown">
                           <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">المزيد
                                        <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                        <li><a  class="dropdownnav-link nav-link " href="Complaints.php">شكاوي المواطنين</a></li>
                                        <li><a  class="dropdownnav-link nav-link " href="Mix.php">منوعات</a></li>
                                        
                                        </ul>
                        </li>


                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                                <a class="nav-link" href="index.php?#politic">السياسة</a>
                        </li>

                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                                <a class="nav-link" href="index.php?#three-column">تحقيقات وحوارات</a>
                        </li>

                      
                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                                <a class="nav-link" href="index.php?#quotes">محافظات الصعيد</a>
                        </li>
                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                                <a class="nav-link" href="index.php?#art">ثقافة وفن</a>
                        </li>
                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                                <a class="nav-link" href="index.php?#sport">رياضة</a>
                        </li>
                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                                <a class="nav-link" href="index.php?#news">أخبار مصر</a>
                        </li>
                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                                <a class="nav-link" href="index.php?#index">الرئيسية </a>
                        </li>
                    </ul>
                
                    <a class="navbar-brand" href="#"><span>جريدة </span>الوطن الاكبر</a> 
                    
                </div>
               
                   
            </div>
             
        </nav>
        
       
        
       <?php 
       include_once "login/database.php";
       $stmt = $conn->prepare('SELECT id , title, image FROM news WHERE approved =1 AND star = 1 ORDER BY news_date ,approvedAt DESC LIMIT 10 ;');
        $stmt->execute();
        $news = $stmt->fetchAll();
        $count = $stmt->rowCount();
        
        $stmt = $conn->prepare('SELECT image FROM ad order by addate DESC;');
        $stmt->execute();
        $Ad = $stmt->fetchAll();
        $countAd = $stmt->rowCount();

       ?>
             <!-- Jumbtron / Slider -->
        <div class="jumbotron-wrap jumbotron-wrap-image mb-0">
            <div class="container">
                <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="jumbotron">
                               <h1 style="text-align: center" class="article-title">رئيس مجلس الإدارة * أستاذ دكتور / فرج حويجه  </h1> 
                                 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="jumbotron">
                                <h1 style="text-align: center" class="article-title"> ررئيس التحرير أستاذ / محمد عزت </h1>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="jumbotron">
                                <h1 style="text-align: center" class="article-title"> نائب رئيس مجلس الإدارة أستاذه / هاديه النوبى</h1>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="jumbotron">
                                <h1 style="text-align: center" class="article-title">الأشرف العام* أستاذه / إنتصار حسين</h1>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Three column content layout -->
        <section id="three-column">
            <div class="container">
                <div class="row">
                    <!-- Left sidebar -->
                     <aside class="col-md-3">
                        <div class="sidebar-box">
                            <h4 style="text-align: center">اعلانات</h4>
                            <?php
                            if(isset($Ad[0]['image']))
                                echo '
                                    <div class="sidebar-box sidebar-box-bg">
                                        <img style="height: 200px;" src="login/uploads/'.$Ad[0]['image'].'">
                                    </div>
                            ';
                           if(isset($Ad[2]['image']))
                                echo '
                                    <div class="sidebar-box sidebar-box-bg">
                                        <img style="height: 200px;" src="login/uploads/'.$Ad[2]['image'].'">
                                    </div>
                            ';
                            if(isset($Ad[3]['image']))
                                echo '
                                    <div class="sidebar-box sidebar-box-bg">
                                        <img style="height: 200px;" src="login/uploads/'.$Ad[3]['image'].'">
                                    </div>
                            ';
                            if(isset($Ad[4]['image']))
                                echo '
                                    <div class="sidebar-box sidebar-box-bg">
                                        <img style="height: 200px;" src="login/uploads/'.$Ad[4]['image'].'">
                                    </div>
                            ';
                            ?>

                        </div>

                        <div  class="sidebar-box sidebar-box-bg">
                            <h4>About us</h4>
                           <p >الوطن الأكبر " الجنوب "                                                                                                          تنقل نبض الشارع المصرى بصعيد مصر                                                                   تساهم لفتح أبواب المسئولين للمواطن البسيط                                                                        تساهم مع الجهات الرقابيه لمحاربة الفساد                                                                       تحتضن برامج خدمة المواطنين</a></p>    
                         </div>

                        <div class="sidebar-box">
                            <h4>Search site</h4>
                            <form class="form-inline my-2 my-lg-0" method="post" action="Search.php">
                                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <div class="sidebar-box">
                            <h4>اخبار مميزة </h4>
                            <ul>
                            <?php 
                                    if(isset($news[0]['title']))
                                        echo '
                                        <li><a href="news.php?do=show&newsid='.$news[0]['id'].'" title="premium templates">'.substr($news[0]['title'],0,40).'</a></li>
                                        ';
                                    if(isset($news[1]['title']))
                                        echo '
                                        <li><a href="news.php?do=show&newsid='.$news[1]['id'].'" title="premium templates">'.substr($news[1]['title'],0,40).'</a></li>
                                        ';
                                    if(isset($news[2]['title']))
                                        echo '
                                        <li><a href="news.php?do=show&newsid='.$news[2]['id'].'" title="premium templates">'.substr($news[2]['title'],0,40).'</a></li>
                                        ';                                        
                                 ?>
                            </ul>
                        </div>
                    </aside> 

                    <?php 
    $with_any_one_of = "";
    $search_in = "";
    $advance_search_submit = "";
    
    $queryCondition = "";

    if(!empty($_POST["search"])) {
       
        $queryCondition .= " WHERE ";
        $with_any_one_of = $_POST["search"];
        $wordsAry = explode(" ", $_POST["search"]);
        $wordsCount = count($wordsAry);
        for($i=0;$i<$wordsCount;$i++) {
            $queryCondition .= "title LIKE '%" . $wordsAry[$i] . "%' OR content LIKE '%" . $wordsAry[$i] . "%'";
            if($i!=$wordsCount-1) {
                $queryCondition .= " OR ";
            }
        }
    }
    $orderby = " ORDER BY news_date desc"; 
    $sql = "SELECT * FROM news " . $queryCondition. $orderby;
    $stmtsearch = $conn->prepare($sql);
    $stmtsearch->execute();
    $result = $stmtsearch->fetchAll();
    $countresult = $stmtsearch->rowCount();
    
?>

                    <!-- Main content -->
                    <div class="col-md-6">
                            <h2 style="text-align: right ; color: orangered;" class="article-title">نتائج البحث</h2><br>

                        <?php 
                            if($countresult > 0){

                                echo '
                            <div style="text-align: right;" id="art">
                               <h2 style="text-align: right;color: orangered;" class="article-title">اقرا المزيد</h2>
                               <hr>
                                <div  >
                                    <img src="login/uploads/'.$result[0]['image'].'" 
                                     height="150"  />
                                   <a href="news.php?do=show&newsid='.$result[0]["id"].' class="mylink">'.$result[0]["title"].'</a>
                                </div>

                                ';
                            for($i =1 ;$i< count($result);$i++){
                                if($i == count($result))
                                    break;
                                echo '
                                <div class=" column1">
                                    <img style="height: 70px" src="login/uploads/'.$result[$i]['image'].'">
                                    <a href="news.php?do=show&newsid='.$result[$i]["id"].' class="mylink">'.$result[$i]["title"].'</a>
                                </div>
                                ';

                            }
                            echo '</div>';
                            }

                        ?>
                         
                               
                                
                               
                            
                         <br><br>


                        <!-- Example pagination Bootstrap component -->
                        
                    </div>


                    <!-- Right Sidebar -->
                    <aside class="col-md-3">
                        <div class="sidebar-box">
                            <h4 style="text-align: center">اعلانات</h4>
                            <?php
                            if(isset($Ad[1]['image']))
                                echo '
                                    <div class="sidebar-box sidebar-box-bg">
                                        <img style="height: 200px;" src="login/uploads/'.$Ad[1]['image'].'">
                                    </div>
                            ';
                            if(isset($Ad[5]['image']))
                                echo '
                                    <div class="sidebar-box sidebar-box-bg">
                                        <img style="height: 200px;" src="login/uploads/'.$Ad[5]['image'].'">
                                    </div>
                            ';
                            ?>
                        </div>
                       

                        <div class="sidebar-box sidebar-box-bg">
                            <h4>تواصل معنا</h4>
                            <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="#"><i class="fa fa-youtube fa-2x"></i></a>
                                <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                        </div>

            

                    </aside> 
                </div> 
            </div>
        </section>
    
        
            
        <!-- Contact section -->
        <section id="contact">  
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2 style="color:orangered;;">تعليقات</h2>

                        <fieldset>
                            <legend>اكتب هنا</legend>
                            <div class="form-group">
                                <label style="color: aqua;">اسمك</label>
                                <input type="text" class="form-control" id="exampleInputName">
                            </div>

                            <div class="form-group">
                                <label style="color: aqua;">البريد الالكتروني</label>
                                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                                </div>

                            <div class="form-group">
                                <label style="color: aqua;">التعليق</label>
                                 <textarea class="form-control" id="exampleInputMessage" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">ارسل</button>
                        </fieldset>
                    </div>
                    <div class="col-md-3">
                        <h4 style="text-align: right ;color: orangered;">عنوان المكتب</h4>
                         <address style="text-align: right ;color:aqua; " >
                               شارع السادات<br>
                                  اسيوط<br>
                                        مصر
                         </address> 
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1431.7618022224501!2d31.18982538094385!3d27.17417805620659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14450bebad97d8b3%3A0x62a1c79655172bd9!2z2LfZhNmF2KjYqSDYsdi12YrZgSDYp9mE2LPYp9iv2KfYqiAtINmF2LXYsSDZhNmE2KjYqtix2YjZhA!5e1!3m2!1sen!2suk!4v1548754348108" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
            
        
       
        
        
     
        <!-- Footer -->
        <footer class="footer">
            <div class="footer-lists">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">

                        <?php
                            $stmt1 = $conn->prepare('SELECT comment FROM comments  ORDER BY date_time  DESC LIMIT 3 ;');
                            $stmt1->execute();
                            $comments = $stmt1->fetchAll();
                            $countcomments = $stmt1->rowCount();
                            if($countcomments >0){

                        ?>
                            <ul>
                                <li><h4>ابرز التعليقات</h4></li>
                                <?php
                                 for($i = 0 ;$i <count($comments) ; $i++){ 

                                    echo '
                                    <div>
                                    <li class="service-list">
                                        <p>
                                       '.$comments[$i]['comment'].'
                                        </P>
                                   
                                     </li>
                                    </div>
                                     ';
                                      } ?>
                                </ul>
                            <?php  } ?>
                        </div>
                          
                        <div class="col-sm">
                            <ul  style="text_align:center;">

                                <li><h4>  جريدة الوطن الأكبر  الجنوب</h4></li>
                                <li><h6 style="color: red;"> مجلس الادارة</h6></li>
                                <li > أستاذ دكتور / فرج حويجه -- رئيس مجلس الادراة</li>
                                <li>أستاذ / محمد عزت -- رئيس التحرير</li>
                                <li>أستاذه / هاديه النوبى -- نائب رئيس مجلس الادارة</li>
                                <li>أستاذه / إنتصار حسين -- الاشراف العام</li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <h4>Suspendisse</h4>
                           <p>الوطن الأكبر " الجنوب "                                                                                                          تنقل نبض الشارع المصرى بصعيد مصر                                                                   تساهم لفتح أبواب المسئولين للمواطن البسيط                                                                        تساهم مع الجهات الرقابيه لمحاربة الفساد                                                                       تحتضن برامج خدمة المواطنين</a></p>    
                          
                            <p class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="#"><i class="fa fa-youtube fa-2x"></i></a>
                                <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="footer-bottom">
                    <p class="text-center">  Copyright ©  2019. Designed by <span style="color: red;">Eng.Karim Ibrahem </span>| Mob:01098452376.</p>
                    <p class="text-center"><a href="#">Back to top</a></p>
            </div>
            
        </footer>


        <!-- Bootcamp JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
