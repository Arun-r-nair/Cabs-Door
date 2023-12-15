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
    <link rel="stylesheet" href="../ad_temp/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../ad_temp/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="../ad_temp/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->

    <?php

include 'menu.php';
?>
        

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Registered Police Station</strong>
                            </div>
                            <div class="card-body">
                                   <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from police order by id desc");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>District</th>
                                            <th>Person in Charge</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
                                        <tr>
                                            <td><?php echo $r_gal[3] ?> Station</td>
                                            <td><?php echo $r_gal[2] ?></td>
                                            <td><?php echo $r_gal[5] ?></td>
                                            <td><?php echo $r_gal[6] ?></td>
                                            <td><?php echo $r_gal[7] ?></td>
                                        </tr>
                                        <?php
                                        
                                        
                                                            }
                                                            ?>
                                    </tbody>
                                </table>
                                <?php
                                                        }
                                                        ?>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="../ad_temp/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../ad_temp/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../ad_temp/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../ad_temp/assets/js/main.js"></script>


    <script src="../ad_temp/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../ad_temp/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../ad_temp/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../ad_temp/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../ad_temp/vendors/jszip/dist/jszip.min.js"></script>
    <script src="../ad_temp/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../ad_temp/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="../ad_temp/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../ad_temp/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../ad_temp/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="../ad_temp/assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
