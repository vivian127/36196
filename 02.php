<!DOCTYPE html>
<head>
    <title> php </title>
    <meta eqoiv-http="content-type" charset="uft-8"/>
    <h4>php 變量</h4>
</head>
<body>
    <?php
      $txt="Hey Vivian!"; 
      $x=500;
      $y=16.7;
    
      echo $txt;
      echo "<br>";
      echo $x;
      echo "<br>";
      echo $y;    
    ?> 
</body>
</html>
<br><br>
<?php
  $txt="第三次練習，你打對了嗎?";
  $x=36196;
  $y=666;

  echo $txt;
  echo "<br>";
  echo $x;
  echo "<br>";
  echo $y;
?>
<br><br>
<?php
  $a="第四次練習";
  $b=666;
  $c=0.2354789;

  echo $a;
  echo "<br>";
  echo $b;
  echo "<br>";
  echo $c;
?>
<br><br>
<?php
  $d="第五次練習，不可以再打錯囉~";
  $e=0.2;
  $f=63.54;

  echo $d;
  echo "<br>";
  echo $e;
  echo "<br>";
  echo $f;
?>
<br><br>
<?php 
  $g="符號變數後名稱";
  $h=666;
  $i=888;

  echo $g;
  echo"<br>";
  echo $h;
  echo "<br>";
  echo $i;
?>
<br><br>
<?php 
  $txt="hey vivian";

  echo "hihihi $txt"; //輸出時打入文字後可加入變量哦~
?>
<br><br>
<?php
  $j=50;
  $k=1000;

  echo $j+$k;
?>
<br><br>
<?php 
  $Aa=300;
  $Bb=1000;

  echo $Aa-$Bb;
?>
<br><br>
<?php 
  $m=9;
  $n=8;

  echo $m*$n;
?>
<br><br>
<?php
  $o=100;
  $p=5;

  echo $o/$p
?>
<br><br>
<?php 
  $AA=10;
  $BB=20;
  $CC=5;
  
  echo $CC+$AA*$BB;
  echo "<br>";
  echo $BB/$CC+$AA;
?>
<br><br>
<?php
  $u=5; // 全域變數，Function是獨立的不被影響
  function test01(){

      echo"<p>Variable x inside function is:  </p>";
  }
  test01();
  echo"<p>Variable x outside function is: $u </p>";
?>  
<br><br>
<?php
  function test02(){ 
      $v=10; //區域變數
      echo"<p>Variable x inside function is: $v</p>";
  }
  test02();
  echo"<p>Variable x outside function is: </p>";
  ?>
  <br><br>
<?php
  $dd=10;
  $ee=15;
  function test03(){
      global $dd,$ee; //全域數
      $ee=$dd+$ee;  
  }
  test03();
  echo $ee;// ee為區域數，若echo有呼叫Function才會顯示d+e=e,若無則顯示全域數
?>
<br><br>
<?php
  function test04(){
      static $gg=0;
      echo $gg;
      $gg++;
  }
  test04();
  echo "<br>";
  test04();
  echo "<br>";
  test04();
?>

<title> 0907練習</title>
<meta http-eqoiv="content-type" charset="utf-8"/>
<form method="get" action="./000.php">
  帳號：<input name="username" type="username"/>
  <br/>
  密碼：<input name="password" type="password"/>
  <br/>
  <input type="submit" value="確認送出"/>
</form>
<br>
<?php
  $get_value1=$_GET["username"];
  $get_value2=$_GET["password"];

  echo "帳號：$get_value1";
  echo "<br>";
  echo "密碼：$get_value2";
?>
<br><br>
<?php
  $ZZ=10;
  $XX=20;

  echo $ZZ+$XX;
?>
<br><br>
<?php
  $txtx="安安安安安";

  echo "早早早 $txtx";
?>
<?php
  $oo=10;
  function test05(){
      echo"<p>這是全域變數所以這裡不會出現$ </p>";
    }
    test05();
    echo"<p>這裡非獨立範圍所以會顯示 $oo</p>";
?>
<?php
 function test06(){
     $pp=20;
     echo"<p>pp在區域範圍內所以這裡會顯示$pp</p>";
 }
    test06();
    echo"<p>這裡沒東西所以不顯示$</p>";
?>
<?php
  $yy=10;
  $rr=15;
  function test07(){
      global $yy,$rr;
      $rr=$yy+$rr;
  }
  test07();
  echo $rr;
?>
<br><br>
<?php
  function test08(){
      static $jj=-1;
      echo $jj;
      $jj++;
  }
  test08();
  echo "<br>";
  test08();
  echo "<br>";
  test08();
  echo "<br>";
  test08();
?>
<br><br>
<?php
  function test09(){
  static $ll=0;
  echo $ll;
  $ll--;
  }
  test09();
  echo "<br>";
  test09();
  echo "<br>";
  test09();
  echo "<br>";
  test09();
  echo "<br>";
?>