<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="mysource_files/favicon.ico">
      <title>Roshan_Adex</title>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
      <link href="mysource_files/style.css" rel="stylesheet">
   </head>
   <body>
      <div class="container">
         <header class="header clearfix" style="background-color: #ffffff">
            <nav>
               <ul class="nav nav-pills pull-right">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
               </ul>
            </nav>
            <hr>
            <h1>
               <script>
                  document.write("Hostname: " + window.location.hostname);
               </script>
            </h1>
            <hr>
            <?php
               $instance_id = file_get_contents('http://169.254.169.254/latest/meta-data/instance-id');
               $instance_name = file_get_contents('http://169.254.169.254/latest/meta-data/tags/instance/Name');
               ?>
            <h5> <strong> <?php echo "instance-id:" . $instance_id; ?> </strong> </h5>
            <h5> <strong> <?php echo "instance-Name:" . $instance_name; ?> </strong> </h5>
            <hr>
            <ol class="breadcrumb">
               <li><a href="#">Home</a></li>
               <li><a href="#">Level 1</a></li>
               <li class="active">Level 2</li>
            </ol>
         </header>
         <div class="page-heading">
            <h1>Eat Sleep Code Repeat
            
            <?php
$servername = "localhost";
$username = "root";
$password = "password";
$database = "task_ansible"

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
            
            </h1>
         </div>
         <div class="row">
            <div class="col-sm-3">
               <ul class="nav nav-pills nav-stacked">
                  <li><a href="#">Level 2</a></li>
                  <li class="active">
                     <a href="#">Level 2</a>
                     <ul>
                        <li><a href="#">Level 3</a></li>
                        <li><a href="#">Level 3</a></li>
                        <li><a href="#">Level 3</a></li>
                     </ul>
                  </li>
                  <li><a href="#">Level 2</a></li>
               </ul>
            </div>
            <div class="col-sm-6">
               <div class="page-contents">
                  <h2>Why do programmers prefer dark mode?</h2>
                  <p>Because light attracts bugs.</p>
                  <hr>
                  <h4>There are 10 types of people in the world: those who understand binary, and those who don't.</h4>
                  <p>For those who may not know, binary is a numbering system that uses only 0s and 1s to represent numbers. In binary, the number 10 actually represents the decimal value of 2. So the joke is a play on words, implying that the phrase "10 types of people" could be interpreted as either "ten types of people" or "two types of people".</p>
                  <hr>
                  <h4>Why was the computer cold?</h4>
                  <p>Because it left its Windows open!</p>
               </div>
            </div>
            <div class="col-sm-3">
               <h2> ><_><</h2>
               <br> <br>
               <h2>Happy Learning</h2>
            </div>
         </div>
         <footer class="footer">
            <p class="pull-right">
               Last Updated: May, 2023
            </p>
            <p>&copy; 2023 Roshan Poudel</p>
         </footer>
      </div>
   </body>
</html>
