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

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cabs@Door</title>
    <meta name="description" content="Cabs@Door">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../ad_temp/apple-icon.png">
    <link rel="shortcut icon" href="../ad_temp/favicon.ico">

    <link rel="stylesheet" href="../ad_temp/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../ad_temp/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../ad_temp/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../ad_temp/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../ad_temp/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../ad_temp/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="../ad_temp/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <!-- /header -->
        <!-- Header-->
<?php

include 'menu.php';
?>
        
        <div class="content mt-3">
            
            <img style="width: 100%;height: 570px" src="../image/91b6bbe376bec2966cc8e88e0dd804c0.gif">
            
            
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="../ad_temp/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../ad_temp/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../ad_temp/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../ad_temp/assets/js/main.js"></script>


    <script src="../ad_temp/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="../ad_temp/assets/js/dashboard.js"></script>
    <script src="../ad_temp/assets/js/widgets.js"></script>
    <script src="../ad_temp/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="../ad_temp/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="../ad_temp/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
