<?php 
  $x1 = $_POST['x1'];
  $y1 = $_POST['y1'];
  $z1 = $_POST['z1'];

  $x2 = $_POST['x2'];
  $y2 = $_POST['y2'];
  $z2 = $_POST['z2'];

  $x3 = $_POST['x3'];
  $y3 = $_POST['y3'];
  $z3 = $_POST['z3'];
  

$underRadical = p2($x2-$x1) + p2($y2-$y1) + p2($z2-$z1);
echo "Point A to B sqrt of: ".$underRadical;

$underRadical = p2($x2-$x3) + p2($y2-$y3) + p2($z2-$z3);
echo "<br />Point B to C sqrt of: ".$underRadical;

$underRadical = p2($x1-$x3) + p2($y1-$y3) + p2($z1-$z3);
echo "<br />Point A to C sqrt of: ".$underRadical;

function p2($n){
  return ($n*$n);
}
?>