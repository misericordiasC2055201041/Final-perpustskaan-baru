<?php
// Penggunaan tipe data object
class himpobjk
{
var $bagian = "LAB";
function ubah($str)
{
 $this->bagian = $str;
}
}
$bagian1 = new himpobjk;
print $bagian1->bagian;
print "<br>";
$bagian1->ubah("Bagian LAB");
print $bagian1->bagian;
?>
