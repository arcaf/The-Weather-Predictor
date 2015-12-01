<?php
$city = $_GET['city'];

$city = str_replace(",", "", $city);

$city = explode(" ", $city);
if (sizeof($city) == 4){
  $contents = file_get_contents("http://api.wunderground.com/api/a2d7774054508c69/forecast/q/".$city[2]."/".$city[0]."_".$city[1].".json");
  $obj = json_decode($contents, true);

  for($i = 0; $i < 9; $i = $i+2){
      if ($city[3] == $obj["forecast"]["txt_forecast"]["forecastday"][$i]["title"]){
         print_r($obj["forecast"]["txt_forecast"]["forecastday"][$i]["fcttext"]."\xA");
         echo "<br>";
         echo "High (Farenheit): ";
         print_r($obj["forecast"]["simpleforecast"]["forecastday"][$i/2]["high"]["fahrenheit"]);
         echo "&deg;";
         echo "<br>";
         echo "Low (Farenheit): ";
         print_r($obj["forecast"]["simpleforecast"]["forecastday"][$i/2]["low"]["fahrenheit"]);
         echo "&deg;";
         echo "<br>";
        }
     }
  }
elseif (sizeof($city) == 3){
  $contents = file_get_contents("http://api.wunderground.com/api/a2d7774054508c69/forecast/q/".$city[1]."/".$city[0].".json");
  $obj = json_decode($contents, true);

  //var_dump($obj["forecast"]);
  for($i = 0; $i < 9; $i = $i+2){
      if ($city[2] == $obj["forecast"]["txt_forecast"]["forecastday"][$i]["title"]){
         print_r($obj["forecast"]["txt_forecast"]["forecastday"][$i]["fcttext"]."\xA");
         echo "<br>";
         echo "High (Farenheit): ";
         print_r($obj["forecast"]["simpleforecast"]["forecastday"][$i/2]["high"]["fahrenheit"]);
         echo "&deg;";
         echo "<br>";
         echo "Low (Farenheit): ";
         print_r($obj["forecast"]["simpleforecast"]["forecastday"][$i/2]["low"]["fahrenheit"]);
         echo "&deg;";
         echo "<br>";
        }
     }
   }
   else if (sizeof($city) == 5){
     $contents = file_get_contents("http://api.wunderground.com/api/a2d7774054508c69/forecast/q/".$city[3]."/".$city[0]."_".$city[1]."_".$city[2].".json");
     $obj = json_decode($contents, true);
     for($i = 0; $i < 9; $i = $i+2){
         if ($city[4] == $obj["forecast"]["txt_forecast"]["forecastday"][$i]["title"]){
            print_r($obj["forecast"]["txt_forecast"]["forecastday"][$i]["fcttext"]."\xA");
            echo "<br>";
            echo "High (Farenheit): ";
            print_r($obj["forecast"]["simpleforecast"]["forecastday"][$i/2]["high"]["fahrenheit"]);
            echo "&deg;";
            echo "<br>";
            echo "Low (Farenheit): ";
            print_r($obj["forecast"]["simpleforecast"]["forecastday"][$i/2]["low"]["fahrenheit"]);
            echo "&deg;";
            echo "<br>";
           }
        }
     }
     else if (sizeof($city) == 6){
       $contents = file_get_contents("http://api.wunderground.com/api/a2d7774054508c69/forecast/q/".$city[4]."/".$city[0]."_".$city[1]."_".$city[2]."_".$city[3].".json");
       $obj = json_decode($contents, true);
       for($i = 0; $i < 9; $i = $i+2){
           if ($city[5] == $obj["forecast"]["txt_forecast"]["forecastday"][$i]["title"]){
              print_r($obj["forecast"]["txt_forecast"]["forecastday"][$i]["fcttext"]."\xA");
              echo "<br>";
              echo "High (Farenheit): ";
              print_r($obj["forecast"]["simpleforecast"]["forecastday"][$i/2]["high"]["fahrenheit"]);
              echo "&deg;";
              echo "<br>";
              echo "Low (Farenheit): ";
              print_r($obj["forecast"]["simpleforecast"]["forecastday"][$i/2]["low"]["fahrenheit"]);
              echo "&deg;";
              echo "<br>";
             }
          }
       }

//echo $matches[0];

?>
