<?php
include 'Includes/cardheader.php';
//connection to database
include 'Includes/config.php';

if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    //get info from the database   sql query
$select_query = "SELECT * FROM instructions WHERE id = $id" ;
$result = mysqli_query($conn, $select_query);
// to fetch just one data from db
$emergencies = mysqli_fetch_assoc($result);

//print_r ($emergency);
//end of the connection 
mysqli_close($conn);            

}

?>



<div class="container">
        <div class="row">
            <div class="col l12 m12 s12">
                <div class="card">
                    <!-- <div class="card_image"> <img src="images/card_images/<?php echo $emergencies['images']; ?>" class="activator"/> </div> -->
                   <div class="card-content">
                        <div  class ="card-title"><strong><p> <?php echo $emergencies["emergency"]; ?><i class="material-icons right black-text" id="close">close</i> </p></strong></div>
                        <div class ="content">
                        <?php echo $emergencies["instruction"]; ?>
                        </div>
                        <div class="card-action">
                            <a  class=" blue-text" href="index.php">BACK</a>
                        </div>
                      
                    </div>
                </div>
            </div>   
                              
        </div>
    </div>

<?php
include 'Includes/footercard.php';
?>