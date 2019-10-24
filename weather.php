

<!DOCTYPE html>
<html>
<head>
  <title>Weather App</title>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<style type="text/css">
  
  a {
    color: white;
    text-decoration: none;
}

a:hover 
{
     color:white; 
     text-decoration:none; 
     cursor:pointer;  
}


  .collapsible {
  
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 15px;
  }



  .collapsibleContent {
    padding: 0 18px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    
  }
  .greenbox{
    margin: 3% auto;
    background-color: green;
    border-radius: 6px;
    height: 300px;
    width: 60%;
    color: white;
    font-family: Times New Roman;
    font-size: 15px;

  }

  .wtitle{
    color: white;
    font-style: italic;
    font-family: Times New Roman;
    text-align: center;
    font-size: 30px;
    padding-top: 2%; 
  }

  .formElement{
    color: white;
    font-style: normal;
    font-family: Times New Roman;
    font-size: 15px; 
    width: 50%; 
    float: left;
    font-weight: bold;

  }

  .part1{
    padding-top: 2%;
    float: left;
    padding-left: 5%;
    width: 90%;


    
  }

  .current{
    width: 50%;
    float: left;


  }
  select{
    width: 200px;
  }

  .vl{
    border-left: 6px solid white;
    height: 200px;
    position: absolute;
    left: 50%;
    margin-left: -3px;

  }
  button{
    float: right;
    margin: 2px;
    border-radius: 2px;
    border: 2px white;

  }

  .button2{
    margin-right: 40px;
  }
  
  .part2{
    padding-left: 50%;

  }

  input{
    max-height: 15px;
    
  }

  .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0);
  transition: 0.3s;
  width: 30%;
  background-color: #00bfff;
  margin: auto;
  border-radius: 5px;
      }

    .container {
      padding: 10px;
      color:white;
    }
    .container img{
      float:left;
      padding:10px;
      margin: auto;


    }
    .imgContainer img{

      padding:10px 10px 10px 15px ;


    }

    .imgContainer figcaption{

      padding:11px;

    }

    .contentTable{
     
      border-collapse: collapse;
      color: white;
      font-weight:bold;
      margin: 50px auto;


    }

    div table, div td{

      border: 2px solid #22c3bb;
      background-color: #3ca1c3;
      padding: 10px;

    }

    .error{
      border: 2px solid #a9a9a9;
      background-color: #e6e6e6;
      font-style: Times New Roman;
      margin: auto;
      padding: 3px 40px 3px 40px;
      width: 400px;
      text-align: center;
    } 


</style>
<body>

<script type="text/javascript">
  function myClear(){
    document.getElementById("formAddr").reset();
    
  }

  function mycheck(){

    
    document.getElementById("Street").setAttribute("disabled","disabled");
    document.getElementById("City").setAttribute("disabled","disabled");
    document.getElementById("State").setAttribute("disabled","disabled");
  
  }

</script>


<div class="greenbox">
  <div class="wtitle">Weather Search</div>
  <div class="formElement">
    <form class="part1" id="formAddr" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <table style="border: 0px; background-color: green; padding: 0px;">
        <tr>
          <td style="border: 0px; background-color: green; padding: 5px; font-size: 18px;">Street</td>
          <td style="border: 0px; background-color: green; padding: 5px;"><input type="text" name="Street" id="Street"></td>
        </tr>

        <tr>
          

          <td style="border: 0px; background-color: green; padding: 5px; font-size: 18px;">City</td>
          <td style="border: 0px; background-color: green; padding: 5px;"><input type="text" name="City" id="City"></td>
        
        

        </tr>
        <tr>
          <td style="border: 0px; background-color: green; padding: 5px; font-size: 18px;">State</td>
          <td style="border: 0px; background-color: green; padding: 5px;"><select name="State" id="State">
          <option value="state" selected>State</option>
          <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="DC">District Of Columbia</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>
        </select></td>
        </tr>
      </table>
      
        
        
        
      <br><br><br><br><br><br>
      
      <button name="clear" value="clear" onclick="myClear()">clear</button>
      <button name="search" type="submit" value="search">search</button>
    

  </div>
  <div class="vl"></div>
  <div class="current">
    
      <table style="border: 0px; background-color: green; padding: 0px;">
        <tr>
          <td style="border: 0px; background-color: green; padding-left: 100px; font-size: 18px;"><input style="" type="checkbox" name="currentlocation" value="currentlocation" id="checkAddr" onclick="mycheck()">Current Location</td>
        </tr>
      </table>
      
    </form>
  </div>
</div>




<?php
  
      $lat = $lng = "";

      if(isset($_POST['search'])){

    


        if(isset($_POST['currentlocation']) && $_POST['currentlocation']!=""){

          $baseUrl = "http://ip-api.com/json";
          $content = file_get_contents($baseUrl);
          $MJSON = json_decode($content);
          $lat =  $MJSON->lat;
          $lng =  $MJSON->lon;
          $city = $MJSON->city;

        }

    
      else{

        $streetErr = "";
        if (empty($_POST["Street"]) || empty($_POST["City"]) || $_POST["State"] == "state") {
          $streetErr = "Please check the input address";
          echo "<div class='error'>".$streetErr."</div>";
          } 
          else {

           
            $street=$_POST['Street'];
            $city=$_POST['City'];
            $state=$_POST['State'];
         
            $googleKey = $darkKey = $darkURL = $googleURL = $lat = $lng = $xml = "";

            $googleKey = "AIzaSyBB2z_IP6C-hc_KtWbXueYQ94eXAOVY4W4";
            $darkKey = "fc31c19ef8e101c09bc1bf4e9d9218fc";

            $googleURL = "https://maps.googleapis.com/maps/api/geocode/xml?address=$street,$city,$state&key=$googleKey";
            $xml = simplexml_load_file($googleURL);
            $lat = $xml->result->geometry->location->lat;
            $lng = $xml->result->geometry->location->lng;
          }
        }

        if ($lat != "" && $lng != ""){

          
            
            $darkURL = "https://api.darksky.net/forecast/fc31c19ef8e101c09bc1bf4e9d9218fc/$lat,$lng?exclude=minutely,hourly,alerts,flags";

            $content = file_get_contents($darkURL);
            $myJSON = json_decode($content);

            $timezone = $myJSON->timezone;
            $temperature = $myJSON->currently->temperature;
            $summary = $myJSON->currently->summary;
            $humidity = $myJSON->currently->humidity;
            $pressure = $myJSON->currently->pressure;
            $windSpeed = $myJSON->currently->windSpeed;
            $visibility = $myJSON->currently->visibility;
            $cloudCover = $myJSON->currently->cloudCover;
            $ozone = $myJSON->currently->ozone;

            

                  echo " <div id='erase'><div class='card'>
                    <div class='container'>
                      <div style='; font-size:40px;'><b>$city</b></div> 
                      <div style='font-size:20px;'>$timezone</div>


                      <div><div style='font-size:60px; display:inline-block;'><b>".round($temperature)."</b><img src='degree.png' width='10px' height='10px' align='top' style='float:right;'></div><div style= 'font-size: 40px; display:inline-block;'><b>F</b></div></div>



                      <div style='font-size:40px;'><b>$summary</b></div>



                  <table style='border: 0px; background-color: #00bfff; padding: 5px;''>
                    <tr>";
                    if ($humidity == ""){}
                    else{

echo"
                <td style='border: 0px; background-color: #00bfff; padding: 8px;''><img src='drop.png' alt='drop' title='Humidity' width='20px' height='20px' >
                       <figcaption style='text-align:center;'><b>$humidity</b></figcaption></td>
                       ";
                     }

                     if ($pressure == ""){}
                    else{
                      echo "

                       <td style='border: 0px; background-color: #00bfff; padding: 11px;''>
                       <img src='pressure.png' alt='pressure' title='Pressure' width='20px' height='20px'  >
                       <figcaption style='text-align:center;'><b>$pressure</b></figcaption></td>";}

                       if ($windSpeed == ""){}
                    else{
                      echo "

                       <td style='border: 0px; background-color: #00bfff; padding: 11px;''>
                       <img src='wind.png' alt='wind' width='20px' title='WindSpeed'  height='20px' >
                       <figcaption style='text-align:center;'><b>$windSpeed</b></figcaption>
                       </td>";}

                       if ($visibility == ""){}
                    else{ echo "

                       <td style='border: 0px; background-color: #00bfff; padding: 11px;''>
                       <img src='thunder.png' alt='thunder' title='Visibility' width='20px' height='20px' >
                       <figcaption style='text-align:center;'><b>$visibility</b></figcaption>
                       </td>";}
                       if ($cloudCover == ""){}
                    else{ echo"

                       <td style='border: 0px; background-color: #00bfff; padding: 11px;''>
                       <img src='cloud.png' alt='cloud' title='CloudCover' width='20px' height='20px' >
                       <figcaption style='text-align:center;'><b>$cloudCover</b></figcaption>
                       </td>";}

                       if ($ozone == ""){}
                    else{ echo "


                        <td style='border: 0px; background-color: #00bfff; padding: 11px;''>
                       <img src='ozone.png' alt='ozone' title='Ozone' width='20px' height='20px' >
                       <figcaption style='text-align:center;'><b>$ozone</b></figcaption>
                       </td>";}

                       echo "



                </tr></table></div></div>";

    echo"<div>
        <table class='contentTable'>
        <tr><td style='text-align:center;'>Date</td>
          <td style='text-align:center;'>Status</td>
          <td style='text-align:center;'>Summary</td>
          <td style='text-align:center;'>TemperatureHigh</td>
          <td style='text-align:center;'>TemperatureLow</td>
          <td style='text-align:center;'>WindSpeed</td>
        </tr>";

        

        for ($x=0;$x<7;$x++) {
        $newtime = $myJSON->daily->data[$x]->time;
        $time = gmdate("Y-m-d",$newtime);
        $summary = $myJSON->daily->data[$x]->summary; 
        $temperatureHigh = $myJSON->daily->data[$x]->temperatureHigh; 
        $temperatureLow = $myJSON->daily->data[$x]->temperatureLow; 
        $windSpeed = $myJSON->daily->data[$x]->windSpeed;
        $icon = $myJSON->daily->data[$x]->icon; 


    if ($icon == "clear-day" || $icon =="clear-night"){
      $imgtag = "table_1.png"; 
    } 

    if($icon == "rain"){
      $imgtag = "table_2.png"; }

    if($icon == "snow"){
      $imgtag = "table_3.png"; }

    if($icon == "sleet"){
      $imgtag = "table_4.png"; }

    if($icon == "wind"){
      $imgtag = "table_5.png"; }

    if($icon == "fog"){
      $imgtag = "table_6.png"; }

    if($icon == "cloudy"){
      $imgtag = "table_7.png"; }

    if($icon == "partly-cloudy-day" || $icon == "partly-cloudy-night" ){
      $imgtag = "table_8.png"; }
 
          echo "
          <tr><td>$time</td>";
          $currentTime = $myJSON->daily->data[$x]->time;
          
          echo "
          <td style='text-align:center'><img src=".$imgtag." width='30px' height='30px'></td>
          <td style='text-align:center;'><a href='weather.php?hello=$currentTime&latitude=$lat&longitude=$lng&index=$x' onclick='myfunctionErase()'>$summary</a></td>
          <td style='text-align:center;'>$temperatureHigh</td>
          <td style='text-align:center;'>$temperatureLow</td>
          <td style='text-align:center;'>$windSpeed</td>
          </tr>";
        }

        echo "
        </table>
        </div> </div>";




          }





      }
    
      ?>

<script type="text/javascript">
  function myfunctionErase(){
  


    

        
        document.getElementById("erase").innerHTML = ""; 
   
  }
</script>

<?php
if (isset($_GET['hello'])) {
    $current_time = $_GET['hello'];
    $index = $_GET['index'];
    $lat = $_GET['latitude'];
    $lng = $_GET['longitude'];
    $url = "https://api.darksky.net/forecast/fc31c19ef8e101c09bc1bf4e9d9218fc/$lat,$lng,$current_time?exclude=minutely";
    $content2 = file_get_contents($url);
    $getJson = json_decode($content2);

    $summary2 = $getJson->currently->summary;
    $temperature2 = $getJson->currently->temperature;
    
    $precipitation = $getJson->currently->precipIntensity;

    if ($precipitation <= 0.001){
    $prepVal = "None";}
    if ($precipitation <= 0.0015 && $precipitation > 0.001 ){
    $prepVal = "Very Light";}
    if ($precipitation <= 0.05 && $precipitation > 0.0015 ){
    $prepVal = "Light";}
    if ($precipitation <= 0.01 && $precipitation > 0.05 ){
    $prepVal = "Moderate";}
    if ($precipitation>1){
    $prepVal = "Heavy";}


    $precipProbability = $getJson->currently->precipProbability;
    $precipProbability = $precipProbability*100;

    $windSpeed2 = $getJson->currently->windSpeed;
    $humidity2 = $getJson->currently->humidity; 
    $humidity2 = $humidity2*100;
    $visibility2 = $getJson->currently->visibility;
    $sunrise = $getJson->daily->data[0]->sunriseTime;
    $sunset = $getJson->daily->data[0]->sunsetTime; 

    $icon = $getJson->daily->data[0]->icon; 

    if ($icon == "clear-day" || $icon =="clear-night"){
      $imgtag = "clear-day.png"; 
    } 

    if($icon == "rain"){
      $imgtag = "rain.png"; }

    if($icon == "snow"){
      $imgtag = "snow.png"; }

    if($icon == "sleet"){
      $imgtag = "sleet.png"; }

    if($icon == "wind"){
      $imgtag = "windIcon.png"; }

    if($icon == "fog"){
      $imgtag = "fog.png"; }

    if($icon == "cloudy"){
      $imgtag = "cloudy.png"; }

    if($icon == "partly-cloudy-day" || $icon == "partly-cloudy-night" ){
      $imgtag = "partly-cloudy.png"; }




    #echo " ".$summary2." ".$temperature2." ".$precipitation." ".$precipProbability." ".$windSpeed2." ".$visibility2." ".$sunrise." ".$sunset;

    echo "<div id=''><div style='font-size: 40px; text-align:center; margin-bottom:10px;'><b>Daily Weather Detail</b></div>
        <div class='card' style='background-color: #A7D0D9; width:500px;'>
                    <div class='container' style='padding-left: 10px; padding-right: 20px;' >


                      <div style='font-size:50px; padding-left:10px;'><div style='float:right;'><img src=".$imgtag." width='200px' height='200px'></div><br><b>".$summary2."</b>
                      
                      <div><div style='font-size:70px; padding-left:10px; display:inline-block;'><b>".round($temperature2)."</b><img src='degree.png' width='10px' height='10px' align='top' style='float:right;'></div><div style= 'font-size: 40px; display:inline-block;'><b>F</b></div></div>

                      </div><br><br>

                      <div style='text-align:center;'>
                      <br>
                      <div style='font-size:20px;'><b>Precipitation: &nbsp<div style='font-size:30px; display:inline-block;'>".$prepVal."</div></b></div>
                      <div style='font-size:20px;'><b>Chance of Rain: &nbsp<div style='font-size:30px; display:inline-block;'>".$precipProbability."</div>%</b></div>
                      <div style='font-size:20px;'><b>Wind Speed: &nbsp<div style='font-size:30px;display:inline-block;'>".$windSpeed2." </div>mph</b></div>
                      <div style='font-size:20px;'><b>Humidity: &nbsp<div style='font-size:30px;display:inline-block;'>".$humidity2." </div>%</b></div>
                      <div style='font-size:20px;'><b>Visibility: &nbsp<div style='font-size:30px;display:inline-block;'>".$visibility2."</div> mi</b></div>
                      <div style='font-size:20px;'><b>Sunrise / Sunset: &nbsp<div style='font-size:30px;display:inline-block;'>".date('g',$sunrise)."</div> AM &nbsp/ &nbsp <div style='font-size:30px;display:inline-block;'>".date('g ', $sunset)."</div>PM</b></div><br> 
                      </div>
                      </div>
                    </div>
                  </div>
                  ";

                  $newarr = array(array());
                  
                  for($i=0;$i<=23;$i++){

                    $ht = $getJson->hourly->data[$i]->temperature;
                    $oldarr = array(array($i,$ht));
                    $newarr = array_merge($oldarr, $newarr);

                  }
                  unset($newarr[24]);
                  $dataPoints = $newarr; 
                  //print_r($dataPoints);

                  

      echo "<div style='text-align:center; margin-top:10px; font-size:40px;'><b>Day's Hourly Weather</b></div>";

      echo "<button class='collapsible' style='background-color:white;' onclick='changeImg()'><img src='down.png' width='30px' height='30px' id = 'imageTag'></button>
          <div class='collapsibleContent' ><div style='width:800px; margin-left:auto; margin-right:auto;'>
            <p id = 'curve_chart'></p></div>
          </div>";




  }
?>

<script type="text/javascript">



  
    var coll = document.getElementsByClassName("collapsible");
  var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}



</script>


<script type="text/javascript">
      
    function changeImg(){
      if(document.getElementById("imageTag").src == "up.png"){
        document.getElementById("imageTag").src = "down.png";

      }

      else{

        document.getElementById("imageTag").src = "up.png";

      }
    }



google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'T');
      var datapoints = <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>;

      data.addRows(datapoints);

      var options = {
        hAxis: {
          title: 'Time'
        },
        vAxis: {
          title: 'Temperature',
          textPosition: 'none'
        }


      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);

    }

    </script>


</body>
</html>