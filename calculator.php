<?php
    if (isset($_POST['submit'])) {
        $salary = $_POST['salary'];
        $freetax = $_POST['tax'];
        $radio = $_POST['yearlymonthly'];

        if($salary < 10000) {
            echo $salary + $freetax;
        }

    elseif ($salary < 25000 && $salary > 10000 ) {
        echo $salary;
        echo "<br>";
        echo $firsttax = round($salary * (11 / 100));
        echo "<br>";
        echo $socialsecurity = round($salary * (4/100));
        echo "<br>";
        echo $hello = ($salary + $freetax)- $firsttax;
        echo "<br>";
        echo $social = round($salary *4/100);
        echo "<br>";
        echo $remain = round($salary - $socialsecurity - $hello) + $freetax;
    } 
    elseif ($salary > 25000 && $salary < 50000 ) {

        echo $firsttax = round($salary * (30 / 100));
    }
    elseif ($salary > 50000) {

        echo $firsttax = round($salary * (45 / 100));
    }   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calc.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form class="calculator" action="" method="POST">

            <label for="salary">Salary in USD</label>
            <input type="text" name="salary" id="salary"><br>

            <label for="yearly">Yearly</label>
            <input type="radio" name="yearlymonthly" id="yearly" value="yearly"><br>

            <label for="monthly">Monthly</label>
            <input type="radio" name="yearlymonthly" id="monthly" value="monthly"><br>

            <label for="tax">Salary after tax</label>
            <input type="text" name="tax" id="tax"><br>

            <button type="submit" name="submit">Calculate</button>
        </form>
        <br>
        <form>
            <table style="width:50%">
                <tr>
                    <th></th>
                    <th>Monthly</th>
                    <th>Yearly</th>
                </tr>
                <tr>
                    <td>Total salary</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tax amount</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Social security fee</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Salary after tax</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </form>
    </div>
    
</body>
</html>