<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

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
$mid=$_GET['mid'];

                          $sel=  mysqli_query($dbcon,"select * from taxi where id='$mid'");
                          $r=  mysqli_fetch_row($sel);
                          ?>
<?php
                 
                    if(isset($_POST['sub1']))
 {
    
    $t1=$_POST['t1'];
    
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
      $date=date('Y-m-d');
      if($t3 < $date)
      {
         echo '<script>alert("Invalid Booking Date")</script>';   
      }
 else {
          
      
    $ins=mysqli_query($dbcon,"insert into book values('','$t1','$t2','$t3','$t4','$mid','$usr','0','$r[12]')");
    
    if($ins>0)
    {
      
               echo '<script>alert("Booking Complete")</script>';
            }
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

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
          
  
    <!--[if lt IE 9]>
        <script src="../temp///oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="../temp///oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script type="text/javascript">
    
    
   function nme(b2)
{
var k5=b2.length;
var ch2=/([a-z])$/;
if(ch2.test(b2)==false)
{
document.getElementById("np3").innerHTML="<font color='red'>*Only Alphabets*</font>";
$("#btn").hide();
return false;
}

else
{
  document.getElementById("np3").innerHTML="";  
  $("#btn").show();
}
}
  
  
  
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
  $("#btn").show();
}
}
  
 function chkp(c)
{
var s=document.getElementById("p10").value;

if(s==c)
{
document.getElementById("p").innerHTML="<font color='Green'>*Password is Correct*</font>";
$("#btn").show();
return false;
}
else
{
document.getElementById("p").innerHTML="<font color='red'>*Verfy Password*</font>";
$("#btn").hide();
}
}





function vem(a)  
     {  
          //var a = document.myform.email.value;  
          var atposition = a.indexOf("@");  
          var dotposition = a.lastIndexOf(".");  
          if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length) 
          {  
               document.getElementById("em").innerHTML="<font color='red'>*Please Check Your Email Address*</font>";
                $("#btn").hide();  
          }  
          else
{
                document.getElementById("em").innerHTML="";  
  $("#btn").show();
}
     }  
 function chkd(d2)
{
var t5=d2.length;
var ch2=/([0-9])$/;
if(ch2.test(d2)==false)
{
document.getElementById("p3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(t5!=12)
{
document.getElementById("p3").innerHTML="<font color='red'>*Please Check Your Aadhar Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("p3").innerHTML="";  
  $("#btn").show();
}
}
  
    </script>
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
                        <h2>Our Cars</h2>
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
            <?php
            if(isset($_GET['suss']))
            {
            ?>
            <center>
                            
                            <h3 style="color: green">Booking Complete</h3>
                            <br/>
                        </center>
                    <?php
            }
                    ?>
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2><?php echo $r[4] ?> <span class="price"><b></b></span></h2>
                        <div class="car-preview-crousel">
                            <div class="single-car-preview">
                                <img src="../img4/<?php echo $r[11] ?>" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="../img4/<?php echo $r[11] ?>" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="../img4/<?php echo $r[11] ?>" alt="JSOFT">
                            </div>
                        </div>
                        <div class="car-details-info">
                            <h4>Additional Info</h4>
                            <p><?php echo $r[7] ?></p>

                            <div class="review-area">
                                <h3>Vehicle Pre-Booking</h3>
                                <br>
                                <div class="review-form">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="name-input">
                                                    <input type="text" placeholder="Full Name"name="t1">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="email-input">
                                                    <input type="text" placeholder="Contact No:"name="t2"onkeyup="chkc(this.value)" /><span id="o3"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <br/>
                                        <script>
                                            
                                            $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#txtDate').attr('min', minDate);
});
                                            
                                            
                                            </script>
                                         <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="name-input">
                                                    Booking Date
                                                    <input id="txtDate"type="date" placeholder="Full Name"name="t3">
                                                </div>
                                            </div>

                                           
                                        </div>
                                        <div class="message-input">
                                            <textarea  cols="30" rows="5"name="t4" placeholder="Service Destinaltion and Time Details....."></textarea>
                                        </div>

                                        <div class="input-submit">
                                            <button name="sub1" type="submit">Submit</button>
                                            <button type="reset">Clear</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->

                <!-- Sidebar Area Start -->
                <div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Service Charge info</h3>

                            <div class="sidebar-body">
                                <p><i class="fa fa-money"></i> Max Rate: <?php echo $r[8] ?> Rs/-</p>
                                <p><i class="fa fa-clock-o"></i> Extra Rate: <?php echo $r[9] ?> Rs/-</p>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Driver</h3>
<?php

$log=mysqli_query($dbcon,"select * from driver where cid='$mid'");
if(mysqli_num_rows($log)>0)
{
    $dr=  mysqli_fetch_row($log);
?>
                            
  <div class="sidebar-body">
                                <ul class="recent-tips">
                                    <li class="single-recent-tips">
                                    <center>
                                        <div class="recent-tip-thum">
                                            <img class="img img-circle" style="width: 100px;height: 100px" src="../img6/<?php echo $dr[8] ?>" alt="JSOFT">
                                        </div>
                                        
                                    </center>
                                    
                                    </li>
                                    <center>
<ul class="package-list">
    <li><div style="color: darkorange" class="fa fa-user"></div> <?php echo $dr[1] ?> (<?php echo $dr[3] ?>)</li>
										 <li><div style="color: darkorange" class="fa fa-envelope"></div> <?php echo $dr[4] ?></li>
                                                                                 <li><div style="color: darkorange" class="fa fa-phone"></div> 
                                                                                     <?php
                                                                                     if($dr[11]=="1")
                                                                                     {
                                                                                     ?>
                                                                                     
                                                                                     <a href="tel:<?php echo $dr[5] ?>"><?php echo $dr[5] ?></a>
                                                                                 <?php
                                                                                     }
                                                                                     ?>
                                                                                     <?php
                                                                                     if($dr[11]=="2")
                                                                                     {
                                                                                     ?>
                                                                                     
                                                                                     <b style="color: red">Not-Available</b>
                                                                                 <?php
                                                                                     }
                                                                                     ?>
                                                                                 
                                                                                 
                                                                                 </li>
                                                                                 <li><div style="color: darkorange" class="fa fa-home"></div> <?php echo $dr[6] ?></li>
                                                                                 
                                                                                 <li><a target="_blank" href="../img5/<?php echo $dr[7] ?>"><div class="fa fa-download"></div> License</a></li>
										
									</ul>
                                    </center>
                                    
                                </ul>
                            </div>                          
                            
                            
                            
                            <?php
}
else {
    
?>
                            <div class="sidebar-body">
                                <ul class="recent-tips">
                                    <li class="single-recent-tips">
                                    <center>
                                        <div class="recent-tip-thum">
                                            <a href="#"><img class="img img-circle" style="width: 100px;height: 100px" src="../image/driver-service-260nw-608696966 (1).webp" alt="JSOFT"></a>
                                        </div>
                                        <b>No  Driver</b>
                                    </center>
                                    
                                    </li>

                                    
                                </ul>
                            </div>
                            
                            
                            <?php
}

?>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        
                        <!-- Single Sidebar End -->
                    </div>
                </div>
                
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