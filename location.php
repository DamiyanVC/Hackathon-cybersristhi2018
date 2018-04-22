<!DOCTYPE html>
<html>
    <head>
        <title>
            give your location
        </title>
        <link rel="stylesheet" href="cssfile/location.css">
    </head>
    <body onload="getLocation();">
       
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="emergency" class="avatar">
  </div>

  <div class="container">
<form method="post" action="lan.php">
      <label for="uname"><b>longitude</b></label>
    <input type="text" placeholder="Longitude" name="lon" id="lon" required>

    <label for="psw"><b>Latitude</b></label>
    <input type="text" placeholder="latitude" name="lat" id="lat" required>
        
    <input type="submit" value="submit" name="submit" id="submit">
      </form>
  </div>


        <script>
            var x = document.getElementById("lon");
            var y=   document.getElementById("lat");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.value =  position.coords.latitude ;
    y.value= position.coords.longitude;
}
        </script>
    </body>
</html>

      
