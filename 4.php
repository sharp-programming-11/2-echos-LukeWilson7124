<?php

//Define some variables to be echoed in HTML body

$my_str = "page4";

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Echos</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body id="<?php echo $my_str;?>">

    <h1> This is page four </h1>

   <h2> Here they are: </h2>
    <ul>
            <li> <a  a href="index.php"> first php file  </a> </li>
      <li> <a href="2.php"> second php file </a> </li>
          <li> <a href="3.php"> third php file </a> </li>
              <li> <a href="4.php"> fourth php file </a> </li>
   </ul>

  </body>
</html>
