<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> AELUM CONSULTING </title>
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  </head>
<body>

<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">AELUM CONSULTING</span></div>
<div id="full" style="color: white;margin-top: 5px;">Registration closes in <span id="time">03:00</span> minutes!</div>
<div class="col-md-2 col-md-offset-4">
<button onclick="setTimeout(myFunction);"><a href="#" class="btn btn-primary logb" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b> Signup form </b> </span></a></div></button>

</div>
</div>

<div class="bg1">
<div class="row" id="github" style="display: none;">

<div class="col-md-7"></div>
<div class="col-md-4 panel"> 
  <form class="form-horizontal" name="form" action="./dbconnect.php" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <h3 align="center">Registration Form</h3>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">  
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input name="name" placeholder="Enter your name" class="form-control input-md" type="text" value="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="email"></label>  
  <div class="col-md-12">
  <input name="email" placeholder="Enter your Email" class="form-control input-md" type="text" value="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="dob"></label>  
  <div class="col-md-12">
  <input type="date" name="dob" placeholder="Enter your dob" class="form-control input-md" type="number" value="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label title1" for="About yourself"></label>
  <div class="col-md-12">
    <textarea name="about" placeholder="About yourself" class="form-control input-md" type="username" value="" style=""></textarea>

  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12" style="text-align: center"> 
    <input  type="submit" value=" Register Now " class="btn btn-primary" style="text-align:center" />
  </div>
</div>

</fieldset>
</form>

<script>
function startTimer(duration, display) {
    var c=0;
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
        console.log(timer);
        if (timer==0) {
            c=1;
         var x = document.getElementById("github");
          var y = document.getElementById("full");
         x.style.display="none";
         y.style.display="none";
         alert('Time is up for registration');
        }


        if (--timer < 0) {
            timer = duration;
                    }
    }, 1000);
    
}

function myFunction() {

   var x = document.getElementById("github");
   x.style.display="block";
    var fiveMinutes = 60 * 3,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
    console.log(fiveMinutes);
 
}
</script>

</body>
</html>