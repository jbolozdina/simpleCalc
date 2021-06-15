<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>main.php</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">

<body>

    <form action="main.php" method="get">
        <input type="text" name="exp">
        <input type="submit">
    </form>
    <h4></h4>


    <?php

        $num1 = "";
        $num2 = "";
        $exp = $_GET["exp"];
        $ops = ["+","-","/","*"];
        $op = ""; 
        $result = null;
        $lastIndex = 0;
        for($x = 0; $x < strlen($exp); $x++){
            if(!in_array($exp[$x], $ops)){
                $num1 .= $exp[$x];
            } else {
                $op = $exp[$x];
                $lastIndex = $x + 1;
                break;
            }
        }
        for($x = $lastIndex; $x < strlen($exp); $x++){
            if(!in_array($exp[$x], $ops)){
                $num2 .= $exp[$x];
            } else {
                $result = null;
            }
        }

        $num1 = floatval($num1);
        $num2 = floatval($num2);

        switch($op){
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "/":
                $result = $num1 / $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            default:
                $result = "N/A";
        }

    ?>

    <script>

        document.body.innerHTML += '<?php echo $result ?><br>';
        alert('<?php echo $num1,$op,$num2,"=",$result; ?>');

    </script>

</body>
</html>