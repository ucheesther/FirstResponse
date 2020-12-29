<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" media="all" href="style.css"  />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<style>
    .container {
        font-family: 'Dancing Script';
        align-items: center;
        font-weight: 500;
        font-size: x-large;
        
    }
    body {
        background-image: url("images/logof.jpeg");
        backdrop-filter: blur(5px) ;
        background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
    }
    footer {
        font-weight: 100;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
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
                     <li><a class="white-text text-darken-4" href="hospital/hospital.php">Hospitals Nearby</a> </li>
                     <!-- <li><a class="white-text text-darken-4" href="#foot">About</a> </li> -->
                     
                 </ul>
             </div>
             
         </nav>
     </div>
     </header> 
     
     <ul class="sidenav" id="mobile-links">
         <li><a class="black-text text-darken-4" href="index.php">Home</a> </li>
         <li><a class="black-text text-darken-4" href="About.php">About Us</a> </li>
         <li><a class="black-text text-darken-4" href="hospitals/hospitals.php">Hospitals Nearby</a> </li>
                         
     </ul>