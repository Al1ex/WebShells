<?php 
$a=array( "|","!", "@", "#", "%", "^", "&", "*", "(",  ")",  "-", "=", "_", "+", "<", ">", "?", "." , "{" , "}", "[", "]", "\\","~","`","/"); //特殊字符
$alength=count($a);

for($x=0;$x<$alength;$x++) {

for($b=0;$b<$alength;$b++){
echo "the result is ".($a[$x]^$a[$b])." the str is ".$a[$x].$a[$b]."<br>"; //输出遍历异或结果
}}
?>