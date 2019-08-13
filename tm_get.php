<html>
<head>
<link rel="stylesheet" href="tm.css"></link>
</head>
<body>
<center><h1> Showing music events near <?php echo $_GET["city"]; ?> <div>
  <center><div w-type="calendar" w-tmapikey="9og4mkzbjwQKp75PFbmG3icLDt1UFk7a" w-googleapikey="YOUR_GOOGLE_API_KEY" w-keyword="music" w-theme="calendar"
  w-colorscheme="light" w-width="500" w-height="600" w-size="50" w-border="1" w-borderradius="10" w-postalcode="" w-radius="50"
  w-countrycode="US" w-city="<?php echo $_GET["city"]; ?>" w-period="week" w-periodweek="week" w-layout="vertical" w-classificationid="" w-attractionid=""
  w-promoterid="" w-venueid="" w-affiliateid="" w-segmentid="" w-proportion="standart" w-latlong=""></div>

</div>
  <script src="https://ticketmaster-api-staging.github.io/products-and-docs/widgets/calendar/1.0.0/lib/main-widget.js"></script>
<form action="tm_get.php" method="get">
City: <input type="text" name="city">
<input type="submit">
</form>

<p></p>
<p><center><a href="home.html"><button class="button" style="height:100px;width:200px"><font family= georgia><h2>Back to Home Page</h2></button></a></center></p>

</body>
</html>
