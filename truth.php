<?php
require_once("konnect.php");
require_once("adminkonnect.php");

// $sqlrt = "SELECT id, sname, fname, oname, emal, dgrad, pix, dcourse,statuz FROM yabaweb_alumni_db";
// $result = $conn->query($sqlrt);
// $arr_users = [];
// if ($result !== false && $result->num_rows > 0) {

//     $arr_users = $result->fetch_all(MYSQLI_ASSOC);






// if (isset($_POST['enabled'])){
//     $candid = trim(strip_tags($_POST['candid']));
                              
//       //selecting database
// $db= mysqli_select_db($conn, $dbname);


// //sql query to fetch info. of registered user and finds user match.  

// $queryx = mysqli_query($conn, "UPDATE yabaweb_alumni_db SET statuz = 0 WHERE id=$candid");
 
     
//     echo'<script type="text/javascript">
//         alert("user successfully enabled.")
//         </script>';
    
// }


// if (isset($_POST['disabled'])){
//     $candid = trim(strip_tags($_POST['candid']));
                     
     
//       //selecting database
// $db= mysqli_select_db($conn, $dbname);


// //sql query to fetch info. of registered user and finds user match.  

// $queryy = mysqli_query($conn, "UPDATE  yabaweb_alumni_db SET statuz = 1 WHERE id=$candid");
 
     
//      echo'<script type="text/javascript">
//         alert("User successfully disabled.")
//         </script>';

// }



// }



?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ALUMNI LIST</title>
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
      <!-- dataTables css -->
      <link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>
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
  <div class="wrapper">
    <!--preloader-->
   
      <!-- Site wrapper -->
   
                    
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
    <?php require_once("adminsidebar.php")?>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-money"></i>
               </div>
               <div class="header-title">
                  <h1>Alumni List</h1>
                  <small>Welcome administrator <?php echo $sefulln;?> </small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>Alumni List</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datatable</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css"/>
</head>
<body>


    <div class="row">
    <div class="col-md-12">
    <div class="table-responsive">
      <table class="table table-striped custom-table datatable" id="userTable">
         <thead>
            <th>Id</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Course</th>
            <th>Year Of Graduation</th>
            <th>Photo</th>
            <th>Action</th>

             
        </thead>
        <tbody>
            
        </tbody>
    </table>

</td>
</tr>
</tbody>
</table>
</div>

        </thead>
      </table>
   </div>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/datatables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script> -->
<script src="get_alumnis.js"></script>
    <script>
       
    $(document).ready(function() {
        $('#userTable').DataTable({
             paging: false,
    searching: true,
            });
    </script>
</body>
</html>