<?php 
include("../model/fonction_get.php");
include("../model/fonction_membre_add.php");
include('../model/connection.php');
?>
<?php
session_start();
if(empty($_SESSION)){
    header('location: payment.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   <link rel="stylesheet" href="test../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

            <!-- Start Header  -->
<header>
   <div class="container">
    <div class="logo">
       <a href="">Fitness <span>Club</span></a>
    </div>
    <a href="javascript:void(0)" class="ham-burger">
         <span></span>  
         <span></span>
    </a>
    <div class="nav">
    <ul>
      <li><a href="admin_dashbord.php">Members</a></li>
        <li><a href="trainer_details.php">Member details</a></li>
        <li><a href="package.php">Package details</a></li>
        <li><a href="payment.php"class="active">Payments</a></li>
        <li><a href="trainer.php" >Trainer</a></li>
        <li><a href="add_trainer.php">Add new Trainer</a></li>
        <li><?php if(!empty($_SESSION)): ?><a href="logout.php" tite="Logout">logout</a><?php endif; ?></li>
        
      </ul>
    </div>
   </div>
 </header>
 <!-- End Header  -->

  <!-- Start Home -->
  <section class="home wow flash" id="home">
     <div class="container">
        <h1 class="wow">It's <span>gym</span> time. Let's go</h1>
        <h1 class="wow">We are ready to <span>fit you</span></h1>
     </div>
      <!-- go down -->
          <a href="#" class="go-down">
              <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
      <!-- go down -->

  </section>





 <div class="container">
<div class="card">
    <div class="card-body" style="background-color:#c11325;color:#ffffff;">
        <div class="row">
            <div class="col-md-3">
                <h3>Payment Details</h3>
            </div>
             </div></div>
     <div class="card-body" style="background-color:#c11325;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Payment id</th>
            <th>Amount</th>
            <th>Payment Type</th>
            <th>Customer ID</th>
           <!-- <th>Customer Name</th>-->
         
        </tr>   
        </thead>
        
        <tbody>
        <?php get_payment(); ?>
        </tbody>
    </table>
    <div class="card-body">
                <h3>Make new Payment</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="../model/fonction_membre_add.php" method="post">
 
                    <label>Amount</label>
                    <input type="text" name="Amount" class="form-control"><br>
                    <label>Customer ID</label>
                    <input type="text" name="customer_id" class="form-control"><br>
                   <!-- <label>Customer Name</label>
                    <input type="text" name="customer_name" class="form-control"><br>-->
                    <label>Payment Type</label>
                    <input type="text" name="payment_type" class="form-control"><br> 
                    <input type="submit" class="btn btn-primary" name="pay_submit" value="PAY" style="background-color: #fff; color: #000; border: none; cursor: pointer;">
     </div>
    </div>
    </div>
    
    <script src="test.js"></script>
<script src="js/wow.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 <script>
	$(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){
       
        $(".nav").toggleClass("open")

        $(".ham-burger").toggleClass("active");
      })      
      $(".accordian-container").click(function(){
      	$(".accordian-container").children(".body").slideUp();
      	$(".accordian-container").removeClass("active")
      	$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
      	$(this).children(".body").slideDown();
      	$(this).addClass("active")
      	$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
      })

       $(".nav ul li a, .go-down").click(function(event){
         if(this.hash !== ""){

              event.preventDefault();

              var hash=this.hash; 

              $('html,body').animate({
                scrollTop:$(hash).offset().top
              },800 , function(){
                 window.location.hash=hash;
              });

              // add active class in navigation
              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
         }
      })
})

</script>
<script src="js/wow.min.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
      }
    );
    wow.init();
  </script>
    </body>
</html>