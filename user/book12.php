<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$date=date('Y-m-d');
?>
<?php

if($usr=$_SESSION['uid'])
{
    
}
 else
     {
    header("location:../index.php");    
}
?>

<?php


                         
                          ?>


<?php
if(isset($_GET['chk']))
{
      
    $chk=$_GET['chk'];
   
        $upd2=mysqli_query($dbcon,"update driver set st='1'where id='$chk'");
    
   
    if($upd2>0)
    {
       header("location:home.php");
}
}                         
                            


?>
<?php
if(isset($_GET['rem']))
{
      
    $rem=$_GET['rem'];
   
        $upd2=mysqli_query($dbcon,"update driver set st='2'where id='$rem'");
    
   
    if($upd2>0)
    {
       header("location:home.php");
}
}                         
                            


?>


<?php
if(isset($_GET['chk1']))
{
      
    $chk=$_GET['chk1'];
   
        $upd2=mysqli_query($dbcon,"update book set st='1'where id='$chk'");
    
   
    if($upd2>0)
    {
       header("location:home.php");
}
}                         
                            


?>
<?php
if(isset($_GET['rem1']))
{
      
    $rem=$_GET['rem'];
   
        $upd2=mysqli_query($dbcon,"update book set st='2'where id='$rem'");
    
   
    if($upd2>0)
    {
       header("location:home.php");
}
}                         
                            


?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="../temp/favicon.ico" type="image/x-icon" />

    <title>Online Taxi</title>

    <!--=== Bootstrap CSS ===-->
    <link href="../temp/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../temp/assets/css/bootstrap.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="../temp/assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="../temp/assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="../temp/assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="../temp/assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="../temp/assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="../temp/assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="../temp/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="../temp/assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="../temp///oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="../temp///oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="../temp/assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <?php

include 'menu.php';
?>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Booking Details</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                       
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-details-content">
                        
                        <div class="car-details-info">
                           
                           

                            <div class="technical-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from book where uid='$usr' order by id desc");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
                                        
                                        <div class="tech-info-table">
                                            
                                           <h4>My Booking</h4>  
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            
                                             <th>Car</th>
                                            <th>License</th>
                                            <th>Driver info</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                 $sel=  mysqli_query($dbcon,"select * from taxi where id='$r_gal[5]'");
                          $r=  mysqli_fetch_row($sel);
                           $dd=  mysqli_query($dbcon,"select * from driver where cid='$r_gal[5]'");
                          $dd1=  mysqli_fetch_row($dd);
                                                                $i++;
                                                                ?>
                                        <tr>
                                            <td><?php echo $r[4] ?></td>
                                            <td><?php echo $r[6] ?></td>
                                            <td><a href="tel:<?php echo $dd1[5] ?>"><?php echo $dd1[1] ?> <span class="fa fa-phone-square"></span></a></td>
                                            <td><?php echo $r_gal[3] ?></td>
                                            <td><?php echo $r_gal[4] ?></td>
                                            <td>
                                                
                                                
                                                            
                                                            
                                                            
                                                            
                                                            
                
                                
                                
                                <?php
        if ($r_gal[7]=='0')
        {
            ?>
                                                           <i><img style="width: 45px;height: 40px" src="../gif/WaitCover.gif"><font style="font-size: large" color='orange'></font></i></a>
            <?php
        }
 ?>
     
 
         <?php
        if ($r_gal[7]=='1')
        {
            
        ?>
             
                                <i><img style="width: 45px;height: 40px" src="../gif/checkmark.gif"><font style="font-size: large" color='orange'>&nbsp;&nbsp;<font  color='green'></font></i>
                                 <?php
        }
        ?>
                                <?php
        if ($r_gal[7]=='2')
        {
        ?>
             
                                <i><img style="width: 45px;height: 40px" src="../gif/Dont_symbol_wobble_lg_clr.gif"><font style="font-size: large" color='orange'>&nbsp;&nbsp;<font  color='green'></font></i>
            
            <?php
        }
        ?>
            
                               
                       
                                                        
                                            </td>
                                        </tr>
                                        <?php
                                        
                                        
                                                            }
                                                            ?>
                                    </tbody>
                                </table>
                                
                                        </div>
                                        <?php
                                                        }
                                                        ?>
                                        
                                        
                                        
                                        
                                        
                                        
                                      
                                        
                                        
                                        
                                        
                                        
                                     
                                    </div>

                                    
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->

                <!-- Sidebar Area Start -->
                
                
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area" style="display: none">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>About Us</h2>
                            <div class="widget-body">
                                <img src="../temp/assets/img/logo.png" alt="JSOFT">
                                <p>Lorem ipsum dolored is a sit ameted consectetur adipisicing elit. Nobis magni assumenda distinctio debitis, eum fuga fugiat error reiciendis.</p>

                                <div class="newsletter-area">
                                    <form action="index.html">
                                        <input type="email" placeholder="Subscribe Our Newsletter">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Recent Posts</h2>
                            <div class="widget-body">
                                <ul class="recent-post">
                                    <li>
                                        <a href="../temp/#">
                                           Hello Bangladesh! 
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="../temp/#">
                                          Lorem ipsum dolor sit amet
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="../temp/#">
                                           Hello Bangladesh! 
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="../temp/#">
                                            consectetur adipisicing elit?
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>get touch</h2>
                            <div class="widget-body">
                                <p>Lorem ipsum doloer sited amet, consectetur adipisicing elit. nibh auguea, scelerisque sed</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> 800/8, Kazipara, Dhaka</li>
                                    <li><i class="fa fa-mobile"></i> +880 01 86 25 72 43</li>
                                    <li><i class="fa fa-envelope"></i> kazukamdu83@gmail.com</li>
                                </ul>
                                <a href="../temp/https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="../temp/https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="../temp/assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="../temp/assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="../temp/assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="../temp/assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="../temp/assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="../temp/assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="../temp/assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="../temp/assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="../temp/assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="../temp/assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="../temp/assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="../temp/assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="../temp/assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="../temp/assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="../temp/assets/js/main.js"></script>

</body>

</html>