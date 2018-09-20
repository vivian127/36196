<title> 送出 </title>
<meta http-eqoiv="content-type" charset="utf-8"/>
<form method="get" action=".test.php">
   <input name="uaername" type="username"/>
   <br/>
   <input name="password" type="password"/>
   <br/>
   <input type="submit" value="確認送出"/>
</form>

<title> 接收 </title>
<meta http-eqviv="content-type" charset="utf-8"/>
<?php
$get_value1=$_get["username"];
$get_value2=$_get["password"];

echo "$get_value1";
echo "$get_value2";
-----------------------------------------------
<?php
function name (){ //name為此函數的名子，自取
    print($x);
    print('\n');
}