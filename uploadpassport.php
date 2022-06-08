<?php

require_once 'konnect.php';
require_once 'konnect2.php';

if (isset($_POST['submit'])) {
    // $pix=trim(strip_tags($_POST['pix']));

    $targetDir      = "imagez/";
    $fileName       = basename($_FILES["pix"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType       = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (isset($_POST["submit"]) && !empty($_FILES["pix"]["name"])) {

        if ($_FILES["pix"]["size"] > 500000) {

            $reportalert = '<script type="text/javascript">
                alert("Sorry, your file is too large.")</script>';

        }
        // }
        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {

            // Upload file to server
            if (move_uploaded_file($_FILES["pix"]["tmp_name"], $targetFilePath)) {
                // Insert image file name into database

                $new = "UPDATE yabaweb_alumni_db SET pix = '$fileName' WHERE emal = '$alumnamail'";

                if (mysqli_query($conn, $new)) {

                    $report = "Connected successfully to table and passport Saved";
                    $er     = base64_encode($report);
                    header("Location:uploadpassport.php?page=null&uploadstatus=1&msg=" . $er);

                } else {
                    $report = "Error connecting to the table: " . mysqli_error($conn);
                    $er     = base64_encode($report);

                    header("Location:uploadpassport.php?page=null&uploadstatus=2&msg=" . $er);

                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thememinister.com/crm/add-customer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 13:28:08 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CRM Admin Panel</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
   <body class="hold-transition sidebar-mini">
   <!--preloader-->

      <!-- Site wrapper -->
      <div class="wrapper">
      <header class="main-header">
            <a href="index-2.html" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="assets/dist/img/mini-logo.png" alt="">
               </span>
               <span class="logo-lg">
               <img src="assets/dist/img/logo.png" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               <!-- searchbar-->
               <a href="#search"><span class="pe-7s-search"></span></a>
               <div id="search">
                 <button type="button" class="close">×</button>
                 <form>
                   <input type="search" value="" placeholder="Search.." />
                   <button type="submit" class="btn btn-add">Search...</button>
                </form>
             </div>
             <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- Orders -->
                  
                     <!-- Messages -->
                  
                     <!-- Notifications -->
                    
                     <!-- Tasks -->
                 <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- Orders -->
                   
                     <!-- Messages -->
                  
                     <!-- Notifications -->
                    
                     <!-- Tasks -->
                    
                     <!-- Help -->
                  
                     <!-- user -->
                     
                  </ul>
               </div>
            </nav>
         </header>

         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
        <?php require_once "sidebar.php" ?>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Upload Passport</h1>
                  <small><?php echo $alumnafulln; ?></small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist">

                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="POST" action="" enctype="multipart/form-data">
                              <div class="form-group">
                                 <label>Upload Passport</label> <th><img width="70px" class="img-rounded" src="imagez/<?php echo $pix1; ?>" /></th>
                                 <input type="file" name="pix" class="form-control" placeholder="please upload your your passport photo" required>
                              </div>

                              <div>
                                <button type="submit" name="submit" class="btn btn-warning">UPLOAD</button>
                             </div>
                              <div class="row">
<?php
if (isset($_GET['uploadstatus']) && $_GET['uploadstatus'] == 1) {

    echo '<div class="alert alert-light alert-dismissable" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong>Passport Uploaded Successfully! </strong> </div>';

}
if (isset($_GET['uploadstatus']) && $_GET['uploadstatus'] == 2) {
    echo '<div class="alert alert-light alert-dismissable" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong>Oops! Passport Upload Failed! </strong> </div>';

}

?>


                              </div>

                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
          <footer class="main-footer">
            <strong> Copyright &copy; 2021 <a href="#">Yaba college of technology</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- ./wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- jquery-ui -->
      <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
      <!-- FastClick -->
      <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="assets/dist/js/custom.js" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
   </body>

<!-- Mirrored from thememinister.com/crm/add-customer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 13:28:08 GMT -->
</html>







