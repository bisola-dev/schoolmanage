<?php
require_once("konnect.php");
require_once("adminkonnect.php");

$sqlrt = "SELECT id, sname, fname, oname, emal, dgrad, pix, dcourse,statuz FROM yabaweb_alumni_db";
$result = $conn->query($sqlrt);
$arr_users = [];
if ($result !== false && $result->num_rows > 0) {

    $arr_users = $result->fetch_all(MYSQLI_ASSOC);






if (isset($_POST['enabled'])){
    $candid = trim(strip_tags($_POST['candid']));
                              
      //selecting database
$db= mysqli_select_db($conn, $dbname);


//sql query to fetch info. of registered user and finds user match.  

$queryx = mysqli_query($conn, "UPDATE yabaweb_alumni_db SET statuz = 0 WHERE id=$candid");
 
     
    echo'<script type="text/javascript">
        alert("user successfully enabled.")
        </script>';
    
}


if (isset($_POST['disabled'])){
    $candid = trim(strip_tags($_POST['candid']));
                     
     
      //selecting database
$db= mysqli_select_db($conn, $dbname);


//sql query to fetch info. of registered user and finds user match.  

$queryy = mysqli_query($conn, "UPDATE  yabaweb_alumni_db SET statuz = 1 WHERE id=$candid");
 
     
     echo'<script type="text/javascript">
        alert("User successfully disabled.")
        </script>';

}



}



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
                           <div class="btn-group">
                              <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                              <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                              <ul class="dropdown-menu exp-drop" role="menu">
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false'});"> 
                                    <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});">
                                    <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON (ignoreColumn)</a>
                                 </li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'true'});">
                                    <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON (with Escape)</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                    <img src="assets/dist/img/xml.png" width="24" alt="logo"> XML</a>
                                 </li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'sql'});"> 
                                    <img src="assets/dist/img/sql.png" width="24" alt="logo"> SQL</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});"> 
                                    <img src="assets/dist/img/csv.png" width="24" alt="logo"> CSV</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'txt',escape:'false'});"> 
                                    <img src="assets/dist/img/txt.png" width="24" alt="logo"> TXT</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});"> 
                                    <img src="assets/dist/img/xls.png" width="24" alt="logo"> XLS</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'doc',escape:'false'});">
                                    <img src="assets/dist/img/word.png" width="24" alt="logo"> Word</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'powerpoint',escape:'false'});"> 
                                    <img src="assets/dist/img/ppt.png" width="24" alt="logo"> PowerPoint</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'png',escape:'false'});"> 
                                    <img src="assets/dist/img/png.png" width="24" alt="logo">PNG</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> 
                                    <img src="assets/dist/img/pdf.png" width="24" alt="logo"> PDF</a>
                                 </li>
                              </ul>
                           </div>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datatable</title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
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
            <?php 
            $count=1;
            if(!empty($arr_users)) { ?>
                <?php foreach($arr_users as $user) { 

                                       $idm = $user['id'];
                                       $sname = $user['sname'];
                                       $fname =$user['fname'];
                                       $oname = $user['oname'];
                                       $emal = $user['emal'];
                                   
                                       $dcourse = $user['dcourse'];
                                       $dgrad = $user['dgrad'];
                                       $statuz = $user['statuz'];
                                       $pix = $user['pix'];

                                       if($statuz =="0"){
                                          $button ="DISABLE USER";
                                          $bname= "disabled";
                                          $bcolour="danger";

                                       }
                                       else {
                                          $button ="ENABLE USER";
                                          $bname= "enabled";
                                          $bcolour="success";

                                       }
                                      $fulln=$sname.' '.$fname.' '.$oname;

                    ?>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $fulln; ?></td>
                        <td><?php echo $emal; ?></td>
                        <td><?php echo $dcourse; ?></td>
                        <td><?php echo $dgrad; ?></td>
                        <td><img width="70px" src="<?php if($pix==""){echo "imagez/def.jpg";}
                    else{echo "imagez/$pix";}?>"/></td> 

                         <td><form method="post"  action="">
                        <input type="hidden" name="candid" value="<?php echo $idm;?>">
                    <button type ="submit" name="<?php echo $bname;?>" class="btn btn-<?php echo $bcolour;?>"><?php echo $button;?> </button><br><br>
                        
                            </td>
</form>
                        
                    </tr>
                <?php $count++;} ?>  
            <?php } ?>
        </tbody>
    </table>

</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#userTable').DataTable();
    });
    </script>
</body>
</html>