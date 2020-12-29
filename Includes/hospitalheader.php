<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospitals/Pharnacies Nearby</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApD5vFlvR4z60yOFRPB8mWtnh1e1N319Q&callback=initMap&libraries=places&v=weekly"
    defer
  ></script>
    <!-- <link rel="stylesheet" type="text/css" href="newh.css"/> -->

    <style>
      #map {
    height: 100%;
  
  }
  
  /* Optional: Makes the sample page fill the window. */
  html,
  body {
    height: 100%;
    /* margin: 0;
    padding: 0; */
  }
  
  body {
    padding: 0 !important;
  }
  
  table {
    font-size: 12px;
  }
  
  
  .hospital-search {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background: #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    left: 2;
    position: relative;
    top: 0;
    
    width: 800px;
    z-index: 1;
  }
  button{
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 3px solid black;
    border-radius: 2px;
    font-size: 12px;
    box-sizing: border-box;
  }
  input{
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 12px;
  }
  #findhospitals{
    font-weight: bold;
    padding: 12px 20px;
    margin: 8px 0;
  }
  select{
    width: 25%;
    font-size: 12px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  #map {
    margin-top: 70px;
    width: 100;
    position: relative;
  }

  
  #listing {
    position: absolute;
    width: 200px;
    height: 470px;
    overflow: auto;
    left: 40px;
    top: 218px;
    cursor: pointer;
    overflow-x: hidden;
  }
  
  #findhospitals {
    font-size: 14px;
  }
  
  #locationField {
    -webkit-box-flex: 1 1 190px;
    -ms-flex: 1 1 190px;
    flex: 1 1 190px;
    margin: 0 8px;
  }
  
  #controls {
    -webkit-box-flex: 1 1 140px;
    -ms-flex: 1 1 140px;
    flex: 1 1 140px;
  }
  
  #autocomplete {
    width: 100%;
  }
  
  #country {
    width: 100%;
  }
  
  .placeIcon {
    width: 20px;
    height: 34px;
    margin: 4px;
  }
  
  .hospitalIcon {
    width: 24px;
    height: 24px;
  }
  
  #resultsTable {
    border-collapse: collapse;
    width: 240px;
  }
  
  #rating {
    font-size: 13px;
    font-family: Arial Unicode MS;
  }
  
  .iw_table_row {
    height: 18px;
  }
  
  .iw_attribute_name {
    font-weight: bold;
    text-align: right;
  }
  
  .iw_table_icon {
    text-align: right;
  }
    </style>
  </head>
  <body>
    <header>
      <div class="navbar-fixed ">
       <nav class="nav-wrapper blue">
           <div class="container">
            <a href="index.php"><img src="images/1609250789282.png" title="First Response" width="300px" height="65px"/></a>
               <a href="#" data-target="mobile-links" class="sidenav-trigger"><i class="material-icons">menu</i></a>
               <ul id="nav-mobile" class="right hide-on-med-and-down">
                   <li><a class="white-text text-darken-4" href="index.php">Home</a> </li>
                   <li><a class="white-text text-darken-4" href="About.php">About Us</a> </li>
                   <li><a class="white-text text-darken-4" href="hospital.php">Hospitals Nearby</a> </li>
                   <!-- <li><a class="white-text text-darken-4" href="#foot">About</a> </li> -->
                   
               </ul>
           </div>
           
       </nav>
   </div>
   </header> <br/>
   
   <ul class="sidenav" id="mobile-links">
       <li><a class="black-text text-darken-4" href="index.php">Home</a> </li>
       <li><a class="black-text text-darken-4" href="About.php">About Us</a> </li>
       <li><a class="black-text text-darken-4" href="hospital.php">Hospitals Nearby</a> </li>
                       
   </ul>