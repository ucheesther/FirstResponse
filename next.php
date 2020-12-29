<?php
include 'Includes/headerindex.php';
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
        
         <!-- cards 6 -->
 
    <div class="container">
        <div class="row">
            <div class="col l6 m12 s12">
                <div class="card ">
                    <div class="card_image"> <img src="images/card_images/fractures.jpg" class="activator"/> </div>
                        <div class="card_title  ">
                        <p class="activator">Fractures <i class="material-icons right">more_vert</i></p>
                        </div>
                        <div class="card-reveal">
                            <div class="card-title  text-darken-4" style= "font-weight : bold;" >Fractures <i class="material-icons right black-text"id="close" >close</i></div>
                            <p> IT IS A FRACTURE IF: <br>
                                . Pain at or around the suspected area <br>
                                . Tenderness, discomfort or general pressure around the area <br>
                                . Swelling about the area <br>
                                . Deformity of the limb <br>
                                . Irregular look of the bone. <br>
                                WHAT TO DO:<br>
                                -Call for help from a medical personnel or help getting the victim to the closest hospital <br>
                                - Do not attempt to live the person unless it is necessary to avoid further injury and harm<br>
                                - Stop any bleeding by applying pressure to the wound with a clean sterile cloth<br>
                                - Do not try to realign the bone or anything keep the fractured area immobile while waiting for medical help<br>
                                - Apply ice packs to limit swelling and help relieve pain. Do not apply the ice packs directly on the skin. Wrap in a towel or piece of cloth <br>
                                - If the person feels faint or is breathing in short rapid breaths, lay the person down with the head slightly lower than the upper part of the body, and if possible, elevate the legs.<br>
                                 </p>
                        </div>
                </div>
            </div>   
            <div class="col l6 m12 s12">
                <div class="card ">
                    <div class="card_image"> <img src="images/card_images/gunshotwound.png" class="activator"/> </div>
                        <div class="card_title  ">
                        <p class="activator">Gunshot wounds <i class="material-icons right">more_vert</i></p>
                        </div>
                        <div class="card-reveal">
                            <div class="card-title  text-darken-4" style= "font-weight : bold;" >Gunshot wounds <i class="material-icons right black-text"id="close" >close</i></div>
                            <p>WHAT TO DO:<br>
                                -Call for medical assistance immediately<br>
                                -Pay attention to both entry and exit wounds<br>
                                - Stop the bleeding by applying pressure to the wound’s opening with a towel, shirt or gauze<br>
                                -Begin CPR if the patient is not breathing<br>
                                -Apply tight bandage and continue adding pressure to the wound<br>
                                -For wounds on the chest, seal the wound with a plastic to stop air being sucked into it and causing a collapsed lung<br>
                                -Let patient stay in a position most comfortable to them and observe closely<br>
                                - Don’t try to remove bullets still in the body as this may worsen internal damage and bleeding<br>
                                - If they start to vomit or lose consciousness, turn them to their injured side to avoid blood drainage to the uninjured side due to gravity  <br>
                                  </p>
                        </div>
                </div>
            </div>                          
        </div>
    </div>
   
<!-- cards 7 -->
 
    <div class="container">
        <div class="row">
            <div class="col l6 m12 s12">
                <div class="card ">
                    <div class="card_image"> <img src="images/card_images/heartattack.png" class="activator"/> </div>
                        <div class="card_title  ">
                        <p class="activator">Heart attack <i class="material-icons right">more_vert</i></p>
                        </div>
                        <div class="card-reveal">
                            <div class="card-title  text-darken-4" style= "font-weight : bold;" >Heart attack <i class="material-icons right black-text"id="close" >close</i></div>
                            <p> WHAT TO DO: <br>
                                If you think someone is having a heart attack;<br>
                                -Have the person sit down rest and try to keep calm<br>
                                -Loosen any tight clothing<br>
                                -Ask if the person takes any chest pain medication and help the person take it<br>
                                - If the pain does not go away in 3 minutes after resting and taking the chest pain medication, seek emergency medical help<br>
                                -If the person is unconscious and unresponsive call for help and resume CPR<br>
                                -DO NOT leave the person alone except to call for help of its necessary <br>
                                -DO NOT allow the person convince you not to call for help<br>
                                -DO NOT wait to see if the symptoms go away<br>
                                -DO NOT give anything by mouth except a prescribed heart medication <br>
                                 </p>
                        </div>
                </div>
            </div>   
            <div class="col l6 m12 s12">
                <div class="card ">
                    <div class="card_image"> <img src="images/card_images/heatstroke.jpg" class="activator"/> </div>
                        <div class="card_title  ">
                        <p class="activator">Heatstroke  <i class="material-icons right">more_vert</i></p>
                        </div>
                        <div class="card-reveal">
                            <div class="card-title  text-darken-4" style= "font-weight : bold;" >Heatstroke  <i class="material-icons right black-text"id="close" >close</i></div>
                            <p>WHAT TO DO:<br>
                                -Seek immediate medical attention <br>
                                -Move the person out of the heat<br>
                                -Remove excess clothing <br>
                                -Cool them by placing them in a tub of cool water or with a cool shower spray<br>
                                -Watch out for seizures, unconsciousness for linger than five minutes and difficulty in breathing<br>
                                
                                  </p>
                        </div>
                </div>
            </div>                          
        </div>
    </div>
  
<!-- cards 8 -->
 
    <div class="container">
        <div class="row">
            <div class="col l6 m12 s12">
                <div class="card ">
                    <div class="card_image"> <img src="images/card_images/spicy.jpg" class="activator"/> </div>
                        <div class="card_title  ">
                        <p class="activator">Hot pepper in eyes or on skin <i class="material-icons right">more_vert</i></p>
                        </div>
                        <div class="card-reveal">
                            <div class="card-title  text-darken-4" style= "font-weight : bold;" >Hot pepper in eyes or on skin <i class="material-icons right black-text"id="close" >close</i></div>
                            <p> WHAT TO DO:<br>
                                -If you get pepper in your eyes, wash your hands thoroughly, soak a cotton ball in cold milk and place over the affected eye. You can also use for fingers for this<br>
                                -For skin, rub alcohol on affected area, and then soak the skin in milk or another dairy product <br>
                                -DO NOT use water as this spreads the pepper even further <br>
                                 </p>
                        </div>
                </div>
            </div>   
            <div class="col l6 m12 s12">
                <div class="card ">
                    <div class="card_image"> <img src="images/card_images/nose.jpg" class="activator"/> </div>
                        <div class="card_title  ">
                        <p class="activator">Nose bleeds  <i class="material-icons right">more_vert</i></p>
                        </div>
                        <div class="card-reveal">
                            <div class="card-title  text-darken-4" style= "font-weight : bold;" >Nose bleeds  <i class="material-icons right black-text"id="close" >close</i></div>
                            <p>WHAT TO DO:<br>
                                -Firmly pinch the entire soft part of the nose just above the nostrils<br>
                                -Sit and lean forward <br>
                                -Breathe through your mouth<br>
                                -Hold this position for 5 minutes<br>
                                -If bleeding continues, hold the position for another 10 minutes<br>
                                 </p>
                        </div>
                </div>
            </div>                          
        </div>
    </div>
    
<!-- cards 9-->
 
    <div class="container">
        <div class="row">
            <div class="col l6 m12 s12">
                <div class="card ">
                    <div class="card_image"> <img src="images/card_images/ear.png" class="activator"/> </div>
                        <div class="card_title  ">
                        <p class="activator">Object in ear <i class="material-icons right">more_vert</i></p>
                        </div>
                        <div class="card-reveal">
                            <div class="card-title  text-darken-4" style= "font-weight : bold;" >Object in ear <i class="material-icons right black-text" id="close" > close</i></div>
                            <p> WHAT TO DO:<br>
                                -Do not probe the ear with a tool<br>
                                -Try removing the object if visible<br>
                                -Tilt the head to the affected side to try and dislodge the object<br>
                                -If it's an insect, tilt the head in the opposite direction,  pour in olive oil, baby oil or mineral oil to float the insect out<br>
                                -Oil should be warm but not hot<br>
                                -Do not use oil if it isn't an insect<br>
                                -Try washing the object out using ear syringe and warm water to irrigate the ear<br>
                                -If these fail and or there is discharge or blood and continuous pain in the ear, SEEK MEDICAL ATTENTION <br>
                                
                                 </p>
                        </div>
                </div>
            </div>   
            <div class="col l6 m12 s12">
                <div class="card ">
                    <div class="card_image"> <img src="images/card_images/seizures-illustration-vector-stock_gg121736272.jpg" class="activator"/> </div>
                        <div class="card_title  ">
                        <p class="activator">Seizures<i class="material-icons right">more_vert</i></p>
                        </div>
                        <div class="card-reveal">
                            <div class="card-title  text-darken-4" style= "font-weight : bold;" >Seizures<i class="material-icons right black-text" id="close" >close</i></div>
                            <p>WHAT TO DO:<br>
                                -Most seizures end in a few minutes. If there's difficulty in breathing or succession in the seizures please seek immediate medical attention for the victim<br>
                                -If not, stay with the person until the seizure ends and the person is fully awake. After, help the person to a safe place and communicate in simple terms what has happened <br>
                                -Ease the person to the floor<br>
                                -Gently turn the person to one side to help them breathe<br>
                                -DO NOT try to hold the person down to stop their movements <br>
                                -Clear the area around from anything sharp and prevent injury<br>
                                -Put something flat and soft like a folded cloth under their head<br>
                                -Remove glasses; loosen ties or any restricting clothing that might make it hard to breathe<br>
                                -DO NOT put anything in the person's mouth, this can damage their jaw<br>
                                -DO NOT try to give mouth to mouth/CPR the person will start breathing in their own soon enough<br>
                                -DO NOT offer the person food or water until the person is conscious enough<br>
                                -Comfort the person and speak calmly<br>
                                -Check to see if there are any drugs or medical information in the person's belongings to deal with such emergency <br>
                                -Keep yourself and everyone around calm<br>
                                -Make sure the person gets home safely<br>
                                    
                                  </p>
                        </div>
                </div>
            </div>                          
        </div>
    </div>
  
<!-- cards 10 -->
 
    <div class="container">
        <div class="row">
            <div class="col l6 m12 s12">
                <div class="card ">
                    <div class="card_image"> <img src="images/card_images/snake.webp" class="activator"/> </div>
                        <div class="card_title  ">
                        <p class="activator">Snake bite <i class="material-icons right">more_vert</i></p>
                        </div>
                        <div class="card-reveal">
                            <div class="card-title  text-darken-4" style= "font-weight : bold;" >Snake bite <i class="material-icons right black-text" id="close" >close</i></div>
                            <p>WHAT TO DO:<br>
                                Most snakes are not venomous or dangerous.  If you suspect you've been bitten by a venomous snake, especially if the bitten area changes colour, begins to swell or is painful, seek immediate medical attention. While waiting;<br>
                                -Remain still and calm to help slow the spread of the venom<br>
                                -Remove Jewelry and tight clothing <br>
                                -Position yourself so the bite is below the level of your heart<br>
                                -Clean the wound with soap and water<br>
                                -DO NOT apply ice<br>
                                -DO NOT cut the wound or attempt to remove the venom<br>
                                -DO NOT drink caffeine or alcohol this could speed up your body's absorption process <br>
                                -Try to remember the colour of the snake for identification by medical personnel <br>
                                
                                </p>
                        </div>
                </div>
            </div>   
            <div class="col l6 m12 s12">
                <div class="card ">
                    <div class="card_image"> <img src="images/card_images/sprain.jpg" class="activator"/> </div>
                        <div class="card_title  ">
                        <p class="activator">Sprains <i class="material-icons right">more_vert</i></p>
                        </div>
                        <div class="card-reveal">
                            <div class="card-title  text-darken-4" style= "font-weight : bold;" >Sprains <i class="material-icons right black-text" id="close">close</i></div>
                            <p>WHAT TO DO:<br>
                                -Rest<br>
                                -Ice<br>
                                -Compression<br>
                                -Elevation<br>
                                -For a severe sprain or strain please seek medical attention <br>
                                  </p>
                        </div>
                </div>
            </div>                          
        </div>
    </div>
 

    <?php
include 'Includes/nextfooter.php';
?>