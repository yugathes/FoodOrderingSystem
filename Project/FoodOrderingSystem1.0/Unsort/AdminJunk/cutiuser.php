<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$q = intval($_GET['q']);
$con = mysqli_connect('localhost', 'globalel_cuti', 'Sz3759779', 'globalel_cuti');

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM jenisCuti WHERE usrID = '".$q."'";
$result = mysqli_query($con,$sql);?>
<div>
<form action="cutiuser.php" method="POST">
    <input type="text" name="number" value="Annual Leave" disabled>
    <input type="text"  name="number" value="Maternity Leave" disabled>
    <input type="text" name="number" value="Paternity Leave" disable>
    <input type="text" name="number" value="Compassionate Leave" disabled>
    <input type="text" name="number" value="Medical Leave" disabled>
    <input type="text" name="number" value="Emergency Leave" disabled>
<?php  while($row = mysqli_fetch_array($result)) { ?>
    <input type="number" name="aL" value="<?php echo $row['Annual']?>">
    <input type="number" name="mtL" value="<?php echo $row['Maternity']?>">
    <input type="number" name="pL" value="<?php echo $row['Paternity']?>">
    <input type="number" name="cL" value="<?php echo $row['Compassionate']?>">
    <input type="number" name="mL" value="<?php echo $row['Medical']?>">
    <input type="number" name="eL" value="<?php echo $row['Emergency']?>">
 </form>
 </div>
<?php   }   ?>
</body>
</html>