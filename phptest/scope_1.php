<?php
$a=1; //全域變數
function func(){
  $a=2; //區域變數不會改變全域變數之值
  echo $a; 
  }
func(); //顯示 2 (顯示區域變數之值)
echo $a; //顯示 1 (顯示全域變數之值, 不會被函式修改) 
?>