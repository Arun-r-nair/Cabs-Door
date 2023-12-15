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
<?php
if(isset($_GET['chk1']))
{
      
    $chk=$_GET['chk1'];
   
        $upd2=mysqli_query($dbcon,"update book set st='1'where id='$chk'");
    
   
    if($upd2>0)
    {
       header("location:book.php");
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
       header("location:book.php");
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
                        <h2>Booking</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>All Booking</p>
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
                        
                        
                                        <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from book where aid='$usr' and st='0'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
                                        
                                        <div class="tech-info-table">
                                            
                                           <h4>Booking Enquiry</h4>  
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Cab</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>More</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                 $sel=  mysqli_query($dbcon,"select * from taxi where id='$r_gal[5]'");
                          $r=  mysqli_fetch_row($sel);
                                                                $i++;
                                                                ?>
                                        <tr>
                                            <td><?php echo $r[4] ?> <a target="_blank" href="car_dt.php?mid=<?php echo $r[0] ?>"><span class="fa fa-taxi"></span></a></td>
                                            <td><?php echo $r_gal[1] ?></td>
                                            <td><a href="tel:<?php echo $r_gal[2] ?>"><?php echo $r_gal[2] ?></a></td>
                                            <td><?php echo $r_gal[3] ?></td>
                                            <td><?php echo $r_gal[4] ?></td>
                                            <td><a href="book.php?chk1=<?php echo $r_gal[0] ?>"><span style="color: green" class="fa fa-check"></span></a>&nbsp;&nbsp; <a href="book.php?rem1=<?php echo $r_gal[0] ?>"><span style="color: red" class="fa fa-remove"></span></a></td>
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
                                        
                                        
                                        
                                        
                                        
                                        
                                        <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from book where aid='$usr' and st='1' and dt='$date'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
                                        
                                        <div class="tech-info-table">
                                            
                                           <h4>Today's Booking</h4>  
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>Cab</td>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $sel=  mysqli_query($dbcon,"select * from taxi where id='$r_gal[5]'");
                          $r=  mysqli_fetch_row($sel);
                                                                $i++;
                                                                ?>
                                        <tr>
                                            <td><?php echo $r[4] ?> <a target="_blank" href="car_dt.php?mid=<?php echo $r[0] ?>"><span class="fa fa-taxi"></span></a></td>
                                            <td><?php echo $r_gal[1] ?> </td>
                                            <td><?php echo $r_gal[2] ?></td>
                                            <td><?php echo $r_gal[3] ?></td>
                                            <td><?php echo $r_gal[4] ?></td>
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
                                        
                                        
                                        
                                        
                                        
                                        
                                        <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from book where aid='$usr'and st='1' and dt>$date");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
                                        
                                        <div class="tech-info-table">
                                            
                                           <h4>Next Bookings</h4>  
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            
                                            <th>Cab</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $sel=  mysqli_query($dbcon,"select * from taxi where id='$r_gal[5]'");
                          $r=  mysqli_fetch_row($sel);
                                                                $i++;
                                                                ?>
                                        <tr>
                                            <td><?php echo $r[4] ?> <a target="_blank" href="car_dt.php?mid=<?php echo $r[0] ?>"><span class="fa fa-taxi"></span></a></td>
                                            
                                            <td><?php echo $r_gal[1] ?></td>
                                            <td><?php echo $r_gal[2] ?></td>
                                            <td><?php echo $r_gal[3] ?></td>
                                            <td><?php echo $r_gal[4] ?></td>
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