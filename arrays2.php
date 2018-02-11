<html>
<body>
<?php
/*First method to associate create arry */
$salaries = array("gayani"=> 200,
                  "nayani"=> 100,
                  "thayami"=> 50);
echo "Salary of gayani is" .$salaries['gayani']."</br>";
echo "Salary of nayani is" .$salaries['nayani']."</br>";
echo "Salary of thayami is" .$salaries['thayami']."</br>";

/*Second method to create arry */
$salaries['gayani']="high";
$salaries['nayani']="medium";
$salaries['thayami']="low";
echo "Salary of gayani is" .$salaries['gayani']."</br>";
echo "Salary of nayani is" .$salaries['nayani']."</br>";
echo "Salary of thayami is" .$salaries['thayami']."</br>";

?>
</body>
</html>