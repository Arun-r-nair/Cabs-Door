<?php
include '../connection.php';
$y=$_GET['y'];


$pol=mysqli_query($dbcon,"select * from sub_cate where cate='$y'");
if(mysqli_num_rows($pol)>0)
{
    ?>
<select name="t3" class="form-control" required="required"onchange="loadtaluk(this.value);loaddis_hos(this.value)">
<option value="">Choose One</option>
<?php
while($pol1=mysqli_fetch_row($pol))
{
    ?>
<option value="<?php echo $pol1[0] ?>"><?php echo $pol1[2] ?></option>
<?php
}
?>
</select>
<?php
}
else{
    ?>
<select name="t3" class="form-control" required="required">
<option value="">Choose One</option>
  </select>
<?php
}
?>