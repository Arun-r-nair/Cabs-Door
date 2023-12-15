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
                 
                    if(isset($_POST['sub1']))
 {
    
    $t1=$_POST['t1'];
    
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $t5=$_POST['t5'];
    $t7=$_POST['t7'];
    $t6=$_POST['t6a'];
    $la=$_POST['t6a'];
                          $lb=$_POST['t6b'];
                          $ld=$_POST['t6d'];
                           $lc=$_POST['t6c'];
                           $t6="$la-$lb-$ld-$lc";
                            $cat=  mysqli_query($dbcon,"select * from sub_cate where id='$t3'");
                          $cat1=  mysqli_fetch_row($cat);
                          
                          
                          
      $log2=mysqli_query($dbcon,"select * from taxi where lin='$t6'");
if(mysqli_num_rows($log2)>0)
{
   header("location:add_taxi.php?fail=1"); 
}
 else {                     
              
                          
    $up=$_FILES['myFile']['name'];
    $chk=mysqli_query($dbcon,"select * from taxi");
    $count=mysqli_num_rows($chk);
    $nfn=$count."".substr($up,strrpos($up,"."));
   
    $up1=$_FILES['myFile1']['name'];
    $chk1=mysqli_query($dbcon,"select * from taxi");
    $count1=mysqli_num_rows($chk1);
    $nfn1=$count1."".substr($up1,strrpos($up1,"."));
   
     if(move_uploaded_file($_FILES['myFile']['tmp_name'],getcwd()."//../img3//$nfn"))
    {
          if(move_uploaded_file($_FILES['myFile1']['tmp_name'],getcwd()."//../img4//$nfn1"))
    {
         
    $ins=mysqli_query($dbcon,"insert into taxi values('','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$cat1[3]','$cat1[4]','$nfn','$nfn1','$usr','0')");
    
    if($ins>0)
    {
      
                header("location:add_taxi.php?suss=1");
            }
    }
        }
 }
 }
        ?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="../temp/favicon.ico" type="image/x-icon" />

    <title>Online Taxi</title>

    <!--=== Bootstrap CSS ===-->
    <link href="../temp/assets/css/bootstrap.min.css" rel="stylesheet">
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
    
    <script type="text/javascript">

function chka(b)
{
var p5=b.length;
var ch=/([A-Z])$/;
if(ch.test(b)==false)
{
document.getElementById("n3").innerHTML="<font color='red' >*Only Enter Capital Letters*</font>";
$("#btn").hide();
return false;
}
else if(p5!=2)
{
 document.getElementById("n3").innerHTML="<font color='red'>*Only two characters*</font>"; 
 $("#btn").hide();
 return false;
}
else
{
document.getElementById("n3").innerHTML="";
$("#btn").show();
}
}


function chkb(b1)
{
var k5=b1.length;
var ch1=/([0-9])$/;
if(ch1.test(b1)==false)
{
document.getElementById("m3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=2)
{
document.getElementById("m3").innerHTML="<font color='red'>*Only Two Characters*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("m3").innerHTML=""; 
  $("#btn").show();
}
}


function chkc(b2)
{
var k6=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k6!=4)
{
document.getElementById("o3").innerHTML="<font color='red'>*Must Have Four Numbers*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML=""; 
  $("#btn").show();
}
}
 
function chkd(c)
{
var t5=c.length;
var ch=/([A-Z])$/;
if(ch.test(c)==false)
{
document.getElementById("q3").innerHTML="<font color='red' >*Only Alphabatic Enter Alphabatic Capital Letters*</font>";
$("#btn").hide();
return false;
}

else
{
document.getElementById("q3").innerHTML="";
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
                        <h2>Taxi</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Registration</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Contact Page Area Start ==-->
    <div class="contact-page-wrao section-padding">
        <div class="container">
            <?php
            if(isset($_GET['fail']))
            {
            ?>
            <center>
                            
                            <h3 style="color: red">License Plate Number Already Exist</h3>
                            <br/>
                        </center>
                    <?php
            }
                    ?>
             <?php
            if(isset($_GET['adr']))
            {
            ?>
            <center>
                            
                            <h3 style="color: red">Aadhar Number Already Exist</h3>
                            <br/>
                        </center>
                    <?php
            }
                    ?>
            <?php
            if(isset($_GET['suss']))
            {
            ?>
            <center>
                            
                            <h3 style="color: green">Registration COmplete</h3>
                            <br/>
                        </center>
                    <?php
            }
                    ?>
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form form method="post" enctype="multipart/form-data">
                            <div class="row">
                              
                              
                                <div class="col-lg-4 col-md-4">
                                    
                                    <div class="website-input">
                                       <select name="t1" id="stat" class="form-control" required="required" onchange="loaddistrict(this.value);loadst_hos(this.value)">
                                        <option value="">Select type</option> 
                                                        <option value="1">Passenger Service</option> 
                                                         <option value="2">Loading Service</option> 
                                        
                                    </select>
                                    </div>
                                </div>
<script type="text/javascript">
                               function loaddistrict(x)
                               {
                                   var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                                            document.getElementById("dis").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET", "load_districtindex.php?x=" + x, true);
                                    xmlhttp.send();
                               }
                               
                            </script>
                                <div class="col-lg-4 col-md-4">
                                    <div class="subject-input">
                                        <span id="dis">
                                        <select name="t5" class="form-control" required="required">
                                        <option value="">Choose Category</option>
                                        </select>
                                    </span>
                                    </div>
                                </div>
    <script type="text/javascript">
                               function loadcnme(y)
                               {
                                   var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                                            document.getElementById("police").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET", "load_districtindex1.php?y=" + y, true);
                                    xmlhttp.send();
                               }
                               
                            </script>
                                <div class="col-lg-4 col-md-4">
                                    <div class="subject-input">
                                       <span id="police">
                                        <select name="t6" class="form-control" required="required">
                                        <option value="">Choose Sub-Category</option>
                                        </select>
                                    </span>
                                    </div>
                                </div>
    
    
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="subject-input">
                                        <input type="text" name="t4"required="" placeholder="Model Name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="subject-input">
                                        <input type="text" name="t5"required="" placeholder="Brand" >
                                    </div>
                                </div>
                            </div>
                            
                            <br/>
                            <b>Enter License Number</b>
                            <hr>
                          <div class="row">
                              
                              
                                <div class="col-lg-3 col-md-3">
                                    
                                    <div class="website-input">
                                    <input type="text"name="t6a"required="required"onkeyup="chka(this.value)" /><span id="n3"></span>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3">
                                    <div class="subject-input">
                                        <input type="text"name="t6b"class="form-control"required="required"onkeyup="chkb(this.value)" /><span id="m3"></span>
                                    </div>
                                </div>
    
                                <div class="col-lg-3 col-md-3">
                                    <div class="subject-input">
                                    <input type="text"name="t6d"class="form-control"required="required"onkeyup="chkd(this.value)" /><span id="q3"></span>
                                </div>
                                </div>
                              <div class="col-lg-3 col-md-3">
                                  <div class="subject-input">
                                    <input type="text"name="t6c"class="form-control"required="required"onkeyup="chkc(this.value)" /><span id="o3"></span>
                                </div>
    
                              </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="name-input">
                                        <textarea cols="3"rows="3" name="t7"placeholder="Discription"></textarea>
                                    </div>
                                </div>

                                
                            </div>
                            <br/>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div>
                                        (RC Book)
                                        <input name="myFile"  type="file"required="">
                                    </div>
                                </div>
<div class="col-lg-6 col-md-6">
                                    <div>
                                        (Photo)
                                       <input name="myFile1" class="form-control" type="file"required="">
                                    </div>
                                </div>
                                
                            </div>
                          
                            <div class="input-submit">
                                <button name="sub1" type="submit">Submit Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Contact Page Area End ==-->

    <!--== Map Area Start ==-->
    
    <!--== Map Area End ==-->

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