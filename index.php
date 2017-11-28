<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather Reporter</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

html,body{
  height: 100%;  /* we need to make html and body to be 100% so the backgorund image in the div container can cover the whole page.*/
}

.container {
  background-image: url("images/weather.jpg");
  width: 100%;
  height:100%;
  background-size: cover; /*THis will cover the image from repeating. if it's small image. */
  background-position: center;   /* this will help image to remain center even when the window is shrinked. */
  padding-top: 130px;
}

h1,p{
  color: white;
  padding: 10px 0px 10px 0;
}

.center{
  text-align: center;
}

.alert{
  margin-top: 50px;
  display:none;
}

#findWeather{
  margin-top: 30px;
}

    </style>
</head>


<body>

      <div class="container">
            <div class="row">
                  <div class="col-md-6 col-md-offset-3 center">
                    <h1> Weather Reporter</h1>
                    <p class="lead">Just enter the city name and we will get you the forecast of the weather</p>



                    <form >
                          <div class="form-group">
                                <input type="text" name="city" id="city" class="form-control" placeholder="Enter City Name.  Eg:- London, San Fransisco, Paris"</input>
                          </div>


                              <!-- we might need to change the following tag from button to input to make user send me a email-->
                              <button  id="findWeather" type="button" class="btn btn-success btn-lg ">Get me forecast!</button>
                      </form>
                        <div id="success" class="alert alert-success">Success!</div>

                        <div id="fail" class="alert alert-danger">Could not find forecast for the city. Check for Spelling error!</div>

                        <div id="blankCity" class="alert alert-danger">Please Enter a city!</div>
                  </div>


            </div>
      </div>









    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>
      $("#findWeather").click(function(){

            $(".alert").fadeOut();  // we are hiding all of the alert when the button is clicked. So old messages can disapears

        if($("#city").val()!=""){
                $.get("scraper.php?city="+$("#city").val(), function(data){


               if(data==""){

                   $("#fail").fadeIn();

                 }
               else{

                 $("#success").html(data).fadeIn();
               }
             });

           }

          else{

                $("#blankCity").fadeIn();
              }
      });
    </script>
</body>
</html>
