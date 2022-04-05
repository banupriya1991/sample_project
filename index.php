<?php
include ("header.php");

?>
<link href="style.css" rel='stylesheet' type='text/css' />
 <div id="left">
<div id="slider">  
  <div class="slide" >
    <img src="mountain.jpg" >
  </div>
  
  <div class="slide" >
     <img src="sea.jpg" >
  </div>
 
  <div class="slide" >
    <img src="effil.jpg" >
  </div>
  <div class="slide" >
    <img src="beach.jpg" >
  </div>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
  <!--Controlling arrows-->
  <span class="controls" onclick="prevSlide(-1)" id="left-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i>
</span>
  <span class="controls" id="right-arrow" onclick="nextSlide(1)"><i class="fa fa-angle-right" aria-hidden="true"></i>
</span>
</div>
  <div id="dots-con">
 <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
 </div>
 
 </div>
<div id="right">

<div style="padding-left:20px">
  <h1>Welcome to our Solutions</h1>
  <p>Please Fill the form to continue</p>
  <form action="#" > 
 <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">  
        <input type="text" id="name" >
    
  
  <span id="error1" style="display:none">* Please Enter Name </span>
  <br> </div>
 </div>
  <div class="row">
      <div class="col-25">
        <label for="fname">Email</label>
      </div>
      <div class="col-75">  
  <input type="email" id="email" >
  <span id="error2" style="display:none">* Please Enter valid Email </span>
  <br><br>
  </div>
  </div>
  <div class="row">
      <div class="col-25">
        <label for="fname">Phone number</label>
      </div>
      <div class="col-75">  
      <input type="text" id="ph_number" pattern="\d{3}[\-]\d{3}[\-]\d{4}" >
      <span id="error3" style="display:none">Please Enter valid phone number with 10 digits</span>
  <br>
  </div>
  </div>
  <div class="row">
      <div class="col-25">
        <label for="fname">Description</label>
      </div>
      <div class="col-75">  
   <textarea name="comment" rows="5" cols="40" id="desc"></textarea>
  <br>
  </div></div>
  <input type="button" name="submit" value="Submit" onclick="check_validation();" >  
</form>
  
</div>
</div> 
 <script>
 var slides = document.querySelectorAll(".slide");
var dots = document.querySelectorAll(".dot");
var index = 0;
function check_validation()
{
	document.getElementById("error1").style.display="none";
	document.getElementById("error2").style.display="none";
	document.getElementById("error3").style.display="none";
	if(document.getElementById("name").value=='')
	{
		document.getElementById("error1").style.display="block";	
	}else
	{
		name_val=document.getElementById("name").value;
	}
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   if(document.getElementById("email").value.match(mailformat))
   {
	   email_val=document.getElementById("email").value;
	   
    }else
	{
		document.getElementById("error2").style.display="block";
	}
	var phoneno=/^\d{10}$/;
	if(document.getElementById("ph_number").value.match(phoneno))
	{
		ph_val=document.getElementById("ph_number").value;
		
	}else
	{
		document.getElementById("error3").style.display="block";
	}
	desc_val=document.getElementById("desc").value;
	alert(name_val+'email:'+email_val+'phone number:'+ph_val+'desc:'+desc_val);
	
}


function prevSlide(n){
  index+=n;
  console.log("prevSlide is called");
  changeSlide();
}

function nextSlide(n){
  index+=n;
  changeSlide();
}

changeSlide();

function changeSlide(){
    
  if(index>slides.length-1)
    index=0;
  
  if(index<0)
    index=slides.length-1;
  
  
  
    for(let i=0;i<slides.length;i++){
      slides[i].style.display = "none";
      
      dots[i].classList.remove("active");
      
      
    }
    
    slides[index].style.display = "block";
    dots[index].classList.add("active");

  

}
 </script>
 