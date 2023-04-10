<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculate Age by DoB input</title>
</head>
<body>
<?php
function ageCalculate($age)
{
    $dob= new DateTime($age);
    $today= new DateTime(date('m.d.y'));
    $diff= $today->diff($dob);
    return 'Your current age is :' .$diff->y. 'years,' .$diff->m. 'months,' .$diff->d. 'days.';

}
?>
<h1 class="center">Calculate Age from DOB using PHP</h1>
<hr>
<div>
  <form>
    <div>
      <label>Date of Birth</label>
      <input type="date" name="dob" value="<?php echo (isset($_GET['dob']))?$_GET['dob']:'';?>">
      <input type="submit" value="Calculate Age">
    </div>
  </form>
  <?php
    if(isset($_GET['dob']) && $_GET['dob']!=''){?>
      <div>
        
        <?php echo ageCalculate($_GET['dob']);?>
      </div>
    <?php }
  ?>
</div>