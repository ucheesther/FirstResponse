<?php
include 'Includes/aboutheader.php';
//connection to database
include 'Includes/config.php';


//get info from the database
$select_query = "SELECT * FROM instructions ORDER by date" ;
$result = mysqli_query($conn, $select_query);
$emergency = mysqli_fetch_all($result, MYSQLI_ASSOC);

//print_r ($emergency);
//end of the connection 
mysqli_close($conn);            

?>

<h3 class="center align"><u>About Us</u></h3>
<div class="container">
    <p>This site provides <a href="index.php">First Response</a> , <b>"Dos and Dont's"</b> for common household emergencies.</p><br>
    It provides useful practical information on what to do immediately a common accident occurs when there are no health practitioners around, or they are unreachable or can be used before the arrival of the doctor. <br>
    Users without any idea on what to do when faced with an emergencies for either their friends, family or even strangers can search out the first aid solutions here.<br>
    We have the <a href="hospitals/hospitals.php">Hospitals Nearby</a> page where you can search for hospitals closest to your location.<br>
    We hope you find informations in this site useful.<br>
    We would really appriciate a feedback.<br>
    <b>Thank you.</b>
</div>




<?php
include 'Includes/aboutfooter.php';
?>