<?php
  $bg = array('bg.jpeg', 'bg2.jpeg', 'bg3.jpeg', 'bg4.jpeg', 'bg5.jpeg', 'bg6.jpeg', 'bg7.jpeg');

  $i = rand(0, count($bg)-1);
  $selectedBg = "$bg[$i]";
?>
<!doctype html>
<html>
<head>
<title>The Weather Predictor</title>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap-theme.min.css">

<style>
html, body {
height:100%;

}
.container {
 background-image:url(<?php echo $selectedBg; ?>);
width:100%;
height:100%;
 background-size:cover;
 background-position:center;
 padding-top:100px;
}
.center {
 text-align:center;
}
.white {
color:white;
}
p {
 padding-top:15px;
 padding-bottom:15px;
}
button {
 margin-top:20px;
 margin-bottom:20px;
}
.alert {
 margin-top:20px;
display:none;
}
.icon-addon.addon-md .glyphicon,
.icon-addon .glyphicon,
.icon-addon.addon-md .fa,
.icon-addon .fa {
    position: absolute;
    z-index: 2;
    left: 22px;
    font-size: 14px;
    width: 20px;
    margin-left: -2.5px;
    text-align: center;
    padding: 10px 0;
    top: 175px;
}
.icon-addon.addon-md .form-control,
.icon-addon .form-control {
    padding-left: 30px;
    float: left;
    font-weight: normal;
}
.footer p {
  color: white;
  clear: both;
  position: fixed;
  bottom: 0%;
  right: 32.5%;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3 center">
<h1 class="center white">Reliable 3-day Weather Prediction</h1>
<p class="lead center white">Enter your city, state and day (within the next 3 days) below to get a weather forecast.</p>
<form>
  <div class="form-group">
    <div class="icon-addon addon-md">
        <input type="text" class="form-control" name="city" id="city" placeholder=" Eg: San Francisco CA, Thursday" />
        <label for="map" class="glyphicon glyphicon-map-marker" rel="tooltip" title="map"></label>
    </div>
  </div>
<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
</form>
<div id="success" class="alert alert-success">Success!</div>
<div id="fail" class="alert alert-danger">Could not find weather data for that
city or day. Please try again.</div>
<div id="noCity" class="alert alert-danger">Please enter a city!</div>
</div>
</div>
<center><div class="footer">
  <p><em>developed by Francisco Arca and powered by www.wunderground.com</em></p>
</div></center>
</div>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<script>
$("#findMyWeather").click(function(event) {

 event.preventDefault();

 $(".alert").hide();

 if ($("#city").val()!="") {

 $.get("scraper.php?city="+$("#city").val(),
function( data ) {
 if (data=="") {
 $("#fail").fadeIn();
 } else {
 $("#success").html(data).fadeIn();
 }
 });
 } else {
 $("#noCity").fadeIn();
 }
 });
</script>

</body>


</html>
