<?php
include 'Includes/headerindex.php';
//connection to database
include 'Includes/config.php';


//get info from the database
$select_query = "SELECT * FROM instructions ORDER BY id" ;
$result = mysqli_query($conn, $select_query);
// to fetch all data from db
$instructions= mysqli_fetch_all($result, MYSQLI_ASSOC);
// print_r($instructions);
// echo $instructions ["instruction"];
//print_r ($instructions);
//end of the connection 
mysqli_close($conn);            

?>

  
<div class="slides">
        <div class="mySlides fade slideshow-container">
         
          <img src="images/firstresponse.png" style="width:100% ; height: 300px">
        
        </div>
        
        <div class="mySlides fade">
          
          <img src="images/card_images/gettyimages-1.jpg" style="width:100% ; height: 300px">
          
        </div>
        
        <div class="mySlides fade">
        
          <img src="images/medicine-gif.gif" style="width:100% ; height: 300px">
        
        </div>
        
        <div class="mySlides fade">
        
            <img src="images/doc.jpg" style="width:100% ; height: 300px">
          
          </div>
          <div class="mySlides fade">
        
            <img src="images/inhaler.jpg" style="width:100% ; height: 300px">
          
          </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
        
        </div>
        
        

    <div class="container">
        <div class="row">
             <?php foreach($instructions as $emergency){ ?>
            <div class="col l6 m6 s12">
                <div class="card ">
                 <div class="card_image">  <img src="images/card_images/<?php echo $emergency['images']; ?>" /> </div> 
                        <div class="card_title  ">
                        <p ><a href="card.php?id=<?php echo $emergency ['id']?> " class= "black-text "> <?php echo $emergency["emergency"]; ?> </a><i class="material-icons right">more_vert</i></p>
                        </div>
                        
                </div>
            </div>   
            <?php }?>                 
        </div>
    </div>

   








<?php
include 'Includes/footerindex.php';
?>