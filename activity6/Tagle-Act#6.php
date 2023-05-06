<?php
    $salary = array(25000, 30350,40250,20125,35358);
    $sample_string = "John Mark";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 6</title>
    <style>
        td, tr, table
        {
            border: thin solid black;
            border-collapse: collapse;
            padding: 20px;
        }
        input[type="text"]
        {
            border: none;
            outline: none;
            padding: 3px;
            border-bottom: thin solid black;
        }
        .first
        {
            color: red;
        }
    </style>
</head>
<body>
    <table>
    <?php
        $total = 0 ;
        foreach ($salary as $employee => $value)
        {
            $total += $value;?>
            <tr>
                <td>Salary of employee <?php echo $employee+1;?></td>
                <td><?php echo number_format($value,2)." php";?></td>
            </tr>
        <?php
        }
    ?>
    <tr>
        <td>TOTAL: </td>
        <td><?php echo number_format($total,2)." php";?></td>
    </tr>
    </table>
    <hr>
    <form id = "nameForm" action="Tagle-Act%236.php" method="post">
        <b>Expected output: </b><br>
        <label for="name">Enter your name: </label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Submt">
    </form>
    Your name is 
    <u>
        <?php if(isset($_POST["name"]))
        {echo $_POST["name"];}
        else {echo "        ";  }?>
    </u>
    <hr>
    <b>Expected Output: </b><br>
    Sample string: <span><?php echo $sample_string?></span>
    <br>
    Output:  
    <?php
        $words = explode(" ",$sample_string);
        $first_word = $words[0];
        $rest = implode(" ", array_slice($words, 1));
        echo "<span class=first>$first_word</span> $rest";
    ?>
</body>
</html>