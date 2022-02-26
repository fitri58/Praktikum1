<?php
$ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu"];
echo "<ol>";
foreach ($ar_buah as $buah => $v) {
echo "<li> $buah - $v </li>";
}
echo "</ol>";
// Array sort mengurutkan nilai array dalam urutan menaik
sort ($ar_buah);
echo "<hr/>";
echo "</ol>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
echo "<li> $buah - $k </li>";
}
echo "</ol>";
// array arsort mengurutkan array assosiatif dalam urutan menurun, sesuai dengan nilai nya
arsort ($ar_buah);
echo "<hr/>";
echo "</ol>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
echo "<li> $buah - $k </li>";
}
echo "</ol>";
echo "<hr>";
?>
<!-- ============== -->
<?php
$tims = ["erwin","heru","ali", "zaki"];
array_pop($tims);
foreach ($tims as $person) {
echo $person. '<br/>';
}
echo "<hr>";
?>

<?php
$tims = ["erwin","heru","ali", "zaki"];
array_push($tims, "fitri");
foreach ($tims as $person) {
echo $person. '<br/>';
}
echo "<hr>";
?>

<?php
$tims = ["erwin","heru","ali", "zaki"];
array_shift($tims);
foreach ($tims as $person) {
echo "<br/>$person";
}
echo "<hr>";
?>

<?php
$tims = ["erwin","heru","ali", "zaki"];
array_unshift($tims,"joko","wati");
foreach ($tims as $person) {
echo "<br/>$person";
}
?>


