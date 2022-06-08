<?php
require_once "konnect.php";
require_once "adminkonnect.php";

$get_update_code = filter_input(INPUT_GET, 'update_code');
$alumni_id = base64_decode(filter_input(INPUT_GET, 'alumni_id'));

$queryx = mysqli_query($conn, "UPDATE yabaweb_alumni_db SET statuz = $get_update_code WHERE id=$alumni_id");
echo '<script type="text/javascript">
        window.location="truth.php"
        alert("User Status successfully Updated!");
        </script>';




?>