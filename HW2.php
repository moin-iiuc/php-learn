<?php
//Else if
$day='Thu';
if($day=="Sat"){
    echo "Saturday";
}
elseif($day=="Sun"){
    echo "Sunday";
}
elseif($day=="Mon"){
    echo "Monday";
}
elseif($day=="Tues"){
    echo "Tuesday";
}
elseif($day=="Wed"){
    echo "Wednesday";
}
elseif($day=="Thu"){
    echo "Thursday<br>";
}
else{
    echo "Friday";
}

//Switch
$day1='sat';
switch ($day1) {
    case 'sat':
        echo "Saturday<br>";
        break;
    case 'sun':
        echo "Sunday<br>";
        break;
    case 'mon':
        echo "Monday<br>";
        break;
    case 'tue':
        echo "Tuesday<br>";
        break;
    case 'wed':
        echo "Wednesday<br>";
        break;
    case 'thurs':
        echo "Trsday<br>";
        break;
    default:
        echo "Friday<br>";
        break;
}
//Nested if else
$user='moin';
$password='error404';
if($user=='moin')
{
    if($password=='error404')
    {
        echo "Login Successful<br>";
    }
    else{
        echo "Password is not correct<br>";
    }
    
}
else{
    echo "User not found!<br>"; 
}
//While loop
echo "While loop:<br>";
$number=5;
while($number<=10)
{
    echo "This is PHP<br>";
    $number++;
}
//for loop
echo "For loop:<br>";
$number1=12;
for($i=1;$i<=$number1;$i++)
{
    echo $i."<br>";
}
//do while loop
echo "Do While loop:<br>";
$it=5;
do{
    echo "This is moin<br>";
    $it++;
}while($it<=10);
//array
$carlist = array("Volvo",'BMW','Toyota', 'Mercedes');
echo "1st element:" .$carlist[0] ."<br>";
echo "3rd element:" .$carlist[2] ."<br>";
echo "Array using loop: <br>";
$elements=count($carlist);
for($i=0;$i<$elements;$i++){
    echo $carlist[$i]."<br>";
}

//foreach associative array
echo "Associative array:<br>";
$stdlist =array(array("ID"=>'C201038', 'Name'=>'Moin'),array("ID"=>"C201001",'Name'=>'Ruhullullah'),array("ID"=>'C201002',"Name"=>'Mozahed'));
foreach($stdlist as $std)
{
    foreach($std as $student=>$value)
    {
        echo "$student: $value<br>";
    }
}

?>