<title> 0101 </title>
<meta http-eqoiv="content-type" charset="utf-8"/>
<?php
  $get_value1=$_GET["uaername"];
  $get_value2=$_GET["password"];
  $get_value3=$_GET["radio"];
  $get_value4=$_GET["interest"];

  echo "帳號：$get_value1";
  echo "密碼：$get_value2";
//   echo "性別：$get_value3";
//   echo "興趣：$get_value4";
if( $ger_value3=="male"){
    echo "性別:男性"
  ;}
  else
  {echo "性別:女性"
    ;};

    if( $get_value4=="jog"){
      echo "興趣:慢跑"
    ;}
    elseif($get_value4=="swin"){
      echo"興趣:游泳"
    ;}
    elseif($get_value4=="balls"){
      echo"興趣:球類"
    ;}
    else { echo "興趣:其他";
    };
    
?>
  ?>