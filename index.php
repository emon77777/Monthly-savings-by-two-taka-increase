<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>Daily Savings amount By two Taka Increase</h1>
    </div>
    <div style="width:100%; float:left;text-align:center;">
        <div style="width:7%; float:left;">
            <?php
                $n = 2;
                $res = 0;
                $total = 0;
                for($i=1; $i<=365; $i++){
                    echo "<pre>";
                    $n = $n + 2;
                    $res = $res + $n;
                    echo "<p style='margin:0px'>".$i . ' = '. $n."</p>";
                    if($i % 30 == 0){
                        echo "<br>";
                        echo "=========";
                        echo "<br>";
                        echo "<h4 style='margin:0px'>".$res."</h4>";
                        echo "=========";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        $total = $total + $res;
                        $res = 0;
                        echo "</div>";
                        echo "<div style='width:7%; float:left;'>";
                    }
                }
                echo "<br>";
                echo "=========";
                echo "<br>";
                echo "<h4 style='margin:0px'>".$res."</h4>";
                echo "=========";
                echo "<br>";
            ?>
        </div>
    </div>
        <div style="text-align: center;margin-bottom:10%;">
            <hr>
            <h2><?='Grand Total = '.($total + $res);?></h2>
            <hr>
        </div>
</body>
</html>
