<html lang="en">
<head>
    <title>Find nCr</title>
</head>
<body>
    <h1>Find nCr</h1>
    <form method="post">
    Enter n: <input type="number" name="n"><br><br><br>
    Enter r: <input type="number" name="r"><br><br><br>
    <input type="submit" value="Calculate" name="Submit"/><br><br><br>
</form>
    <?php

    function fact( $n)
    {
        $res = 1;
        for ( $i = 2; $i <= $n; $i++)
        $res = $res * $i;
        return $res;
    }

    function nCr( $n, $r)
    {
        return fact($n) / (fact($r) *
                    fact($n - $r));
    }

    if(isset($_POST['Submit'])){
        $n = $_POST['n']; 
        $r = $_POST['r']; 
        echo "The combination is: ".nCr($n, $r);
      }
        
    ?>
</body>
</html>