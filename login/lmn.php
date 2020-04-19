<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login page</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body background="feedback.jpeg">
    <style>
body {
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
     <div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
         <a href="#" class="navbar-brand">
            <img src="logo.jpeg" height="28" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="lmn.PHP" class="nav-item nav-link active">Home</a>
            </div>
        </div>
        <div class="navbar-nav ml-auto">
                <a href="lg.php" class="nav-item nav-link">Login</a>
                 <a href="sg.php" class="nav-item nav-link">Signup</a>
            </div>
    </nav>
    <br><br><br>
    <div class="abc" align="center">
    <h1><b>1 US DOLLAR <br>=<br>
    <?php
// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "https://free.currconv.com/api/v7/convert?q=USD_INR&compact=ultra&apiKey=56215cdff01a1e06c747");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
// grab URL and pass it to the browser
$response=curl_exec($ch);
$result=json_decode($response);
echo $result->USD_INR;
// close cURL resource, and free up system resources
curl_close($ch);
?> INDIAN RUPEE</b></h1>
</div>
</body>

</html>