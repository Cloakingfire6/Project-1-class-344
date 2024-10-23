<!DOCTYPE html>
<html>
  <head>
    <title>Chef Ethan's services  - Order Results</title>
  </head>
  <body>
    <?php
     $lengthofserviceqty = $_POST['lengthofserviceqty'];
     $hourqty = $_POST['hourqty'];
     $weekqty = $_POST['weekqty'];
    ?>
    <h1>Chef Ethan's requested services</h1>
    <h2>Order Results</h2> 
    <?php
     echo '<p>Order processed at';
     echo date('H:i,jS F Y');
     echo "</p>";
     echo '<p>Your order is as follows: </p>';
     echo htmlspecialchars($lengthofserviceqty).' months<br />';
     echo htmlspecialchars($hourqty).' hours<br />';
     echo htmlspecialchars($weekqty).' weekday<br />';
     $totalqty = 0;
     $totalamount = 0.00;
     $totalamount = 'your total is';
     define('MonthlyPRICE', 300);
     define('hourlyPRICE', 40);
     define('weeklyPRICE', 80);
     $totalamount = $lengthofserviceqty * monthlyPRICE
             + $hourqty * hourlyPRICE
             + $weekqty * weeklyPRICE;

     echo "Subtotal: $".number_format($totalamount,2)."<br />";

     $taxrate = 0.10;  // local sales tax is 10%
     $totalamount = $totalamount * (1 + $taxrate);
     echo "Total including tax: $".number_format($totalamount,2)."</p>";
     echo 'isset($lengthofserviceqty): '.isset($lengthofserviceqty).'<br />';
     echo 'isset($nothere): '.isset($nothere).'<br />';
     echo 'empty($lengthofserviceqty): '.empty($lengthofserviceqty).'<br />';
     echo 'empty($nothere): '.empty($nothere).'<br />';
    ?>       
  </body>
</html>
