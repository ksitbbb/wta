<?php
$a = array(array(1,2,3),array(4,5,6),array(7,8,9));
$b = array(array(7,8,9),array(4,5,6),array(1,2,3));
echo "the first matrix
 :"."<br/>";
for ($row = 0; $row < 3; $row++) {
for ($col = 0; $col < 3; $col++)
echo " ".$a[$row][$col];
echo "<br/>";
}
echo "the second matrix
 :"."<br/>";
for ($row = 0; $row < 3; $row++) {
for ($col = 0; $col < 3; $col++)
echo " ".$b[$row][$col];
echo "<br/>";
}
echo "the transpose for the first matrix is:"."<br/>";
for ($row = 0; $row < 3; $row++) {
for ($col = 0; $col <3; $col++)
echo " ".$a[$col][$row];
echo "<br/>";
}
echo "the addition of matrices is:"."<br/>";
for ($row = 0; $row < 3; $row++) {
for ($col = 0; $col < 3; $col++)
echo " ".$a[$row][$col]+$b[$row][$col]." ";
echo "<br/>";
}
$m=count($a);
$n=count($a[2]);
$p=count($b);
$q=count($b[2]);
if($n!= $p){
echo "Incompatible matrices";
exit(0);
}

echo " The multiplication of matrices: <br/>";
$result=array();
for ($i=0; $i< $m; $i++) {
for($j=0; $j < $q; $j++) {
$result[$i][$j] = 0;
for($k=0; $k < $n; $k++)
$result[$i][$j] += $a[$i][$k] * $b[$k][$j];
}
}
for ($row = 0; $row < 3; $row++) {
for ($col = 0; $col < 3; $col++)
echo " ".$result[$row][$col];
echo "<br/>";
}
?>
