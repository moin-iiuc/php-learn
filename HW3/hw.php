<?php
include 'func1.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Moinul's Space</title>
</head>

<body>
    <h2 style='color:blue'>Calculator</h2><br>
    <form action method="post">
        <label>First Number:</label>
        <input type="number" name="num1" placeholder="First Number">
        <br><label>Second Number:</label>
        <input type="number" name="num2" placeholder="Last Number">
        <br>
        <input type="submit" name="add" value="Add">
        <input type="submit" name="sub" value="Sub">
        <input type="submit" name="mul" value="Mul">
        <input type="submit" name="div" value="Div">
        <input type="submit" name="mod" value="Mod">
        <input type="submit" name="pow" value="Pow">
    </form>

    <?php
if(isset($_POST['add'])){
    $f_num=$_POST['num1'];
    $l_num=$_POST['num2'];
    if(empty($f_num) or empty($l_num))
    {
        echo "<h4 style='color:red'> Input Both Numbers</h4>";
    }
    else{
        $showin=new showinfo;
        $showin->add($f_num,$l_num);
    }
}
elseif(isset($_POST['sub'])){
    $f_num=$_POST['num1'];
    $l_num=$_POST['num2'];
    if(empty($f_num) or empty($l_num))
    {
        echo "<h4 style='color:red'> Input Both Numbers</h4>";
    }
    else{
        $showin=new showinfo;
        $showin->sub($f_num,$l_num);
    }
}
elseif(isset($_POST['mul'])){
    $f_num=$_POST['num1'];
    $l_num=$_POST['num2'];
    if(empty($f_num) or empty($l_num))
    {
        echo "<h4 style='color:red'> Input Both Numbers</h4>";
    }
    else{
        $showin=new showinfo;
        $showin->mul($f_num,$l_num);
    }
}
elseif(isset($_POST['div'])){
    $f_num=$_POST['num1'];
    $l_num=$_POST['num2'];
    if(empty($f_num) or empty($l_num))
    {
        echo "<h4 style='color:red'> Input Both Numbers</h4>";
    }
    else{
        $showin=new showinfo;
        $showin->div($f_num,$l_num);
    }
}
elseif(isset($_POST['mod'])){
    $f_num=$_POST['num1'];
    $l_num=$_POST['num2'];
    if(empty($f_num) or empty($l_num))
    {
        echo "<h4 style='color:red'> Input Both Numbers</h4>";
    }
    else{
        $showin=new showinfo;
        $showin->mod($f_num,$l_num);
    }
}
elseif(isset($_POST['pow'])){
    $f_num=$_POST['num1'];
    $l_num=$_POST['num2'];
    if(empty($f_num) or empty($l_num))
    {
        echo "<h4 style='color:red'> Input Both Numbers</h4>";
    }
    else{
        $showin=new showinfo;
        $showin->pow($f_num,$l_num);
    }
}
?>
</body>

</html>
