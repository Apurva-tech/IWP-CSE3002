<html xmlns="http://www.w3.org/1999/xhtml" >

<body>
  <h1>Welcome to our page!</h1>
  
  Hello!! <?php 
if(isset($_POST['Submit'])){
  $name =  $_POST["name"]; 
  echo $name;
}

echo "<br><br>"; 
date_default_timezone_set('Asia/Calcutta');
$Hour = date('G');

if ( $Hour >= 5 && $Hour <= 11 ) {
    echo "Good Morning";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    echo "Good Afternoon";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    echo "Good Evening";
}

echo "<br><br>"; 

if(isset($_POST['Submit'])){
    $color = htmlentities($_POST['color'], ENT_QUOTES); 
    switch ($color) {
        case "r-red":
          echo '<body style="background-color:red">'; 
          break;
          case "b-blue":
            echo '<body style="background-color:blue">';
            break;
            case "g-green":
              echo '<body style="background-color:green">';
              break;
              case "o-orange":
                echo '<body style="background-color:orange">';
                break;
                case "l-black":
          echo '<body style="background-color:black">';
          break;
          case "w-white":
            echo '<body style="background-color:white">';
            break;
            default:
          echo "Wrong Input";
      }
    }

function checkPalindrome($string){ 
  if (strrev($string) == $string){ 
    return 1; 
  }
  else{
    return 0;
  }
}

?>

<form method="post">
    Name: <input type="text" name="name"><br><br><br>
    <label for="color">Choose Color:</label>    
    <input type="text" name="color"/> <br><br> 
    <label for="palindrome">Check Palindrome:</label>   
    <input type="text" name="palindrome"/> <br><br> 
    <input type="submit" value="Submit changes and test" name="Submit"/>
</form>

<?php 

if(isset($_POST['Submit'])){
  if(checkPalindrome($_POST['palindrome'])){
    echo "<br>The string is palindrome"; 
  } 
  else{
    echo "<br>The string is not palindrome"; 
  }
}

?>

</body>
</html>