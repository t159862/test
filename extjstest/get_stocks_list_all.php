<?php
header('Content-Type: text/html;charset=UTF-8');
include("db.php");
$conn=mysql_connect($host, $username, $password); //�إ߳s�u
mysql_query("SET NAMES 'utf8'"); //�]�w�d�ߩҥΤ��r������ utf-8
mysql_select_db($database, $conn); //�}�Ҹ�Ʈw
$start=$_GET['start'];  //�^�� ExtJS �ǥX�Ѽ� 'start'
$limit=$_GET['limit'];  //�^�� ExtJS �ǥX�Ѽ� 'limit'
$SQL="SELECT COUNT(*) FROM `stocks_list`";
$RS=mysql_query($SQL, $conn);
list($total)=mysql_fetch_row($RS); //�����`����
$SQL="SELECT * FROM `stocks_list`"; 
$result=mysql_query($SQL, $conn); //���� SQL ���O
$stock=array(); 
for ($i=0; $i<mysql_numrows($result); $i++) { //���X������ (�C)
     $row=mysql_fetch_array($result); //���o�C�}�C
     $stock_name=$row["stock_name"];
     $stock_id=$row["stock_id"];
     $stock[$i]=array("stock_name" => $stock_name,
		              "stock_id" => $stock_id);
     } //end of for
$arr=array("totalProperty" => $total, "root" => $stock);
echo json_encode($arr);  //�N�}�C�ন JSON ��Ʈ榡�Ǧ^
?>