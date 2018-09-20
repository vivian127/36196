<!DOCTYPE html>
<head>
    <title> php變量、ECHO、數據類型、字符串 </title>
    <meta http-eqoiv="content-type" charset="uft-8"/>
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
<?php
  echo "<h5>echo練習</h5>";
  echo "你";
  echo "好";
  echo "早";
  echo "安<br>";
  echo "我","可","以","使","用","逗","號";
?>
<br>
<?php 
  $txt1="文字檔01";
  $txt2="文字檔02";
  $A1=60;
  $A2=40;

  echo "<h4>".$txt1."</h4>";
  echo "這個是".$txt2."<br>";
  echo $A1+$A2;
?>
<br>
<?php
   print "<h4>print的練習</h4>";
   print "純文字練習，print中無法使用逗號間格，只,能.用.點.點."
?>
<br>
<?php
  $txt3="文字檔03";
  $txt4="文字檔04";
  $A3=99;
  $A4=100;

  print "<h4>".$txt3."</h4>";
  print "這個是".$txt4."<br>";
  print $A3*$A4;
?>
<br>
<h4>php整數</h4>
<?php 
  $A5=36196; 
  //$A5是一個整數
  var_dump($A5);
  //var_dump()是指函數返回數據類型和值
?>
<br>
<h4>php Float</h4>
<?php 
  $A6=3.1415927; 
  //$A6是一個浮點數
  var_dump($A6);
?>
<br>
<h4>php數組</h4>
<?php
  $cars = ["volvo","bmw","toyota"]; 
  var_dump($cars);
  //array 簡易陣列. 陣列可以存放許多資料，在PHP中，用array()可以建立一個陣列
  //array()可使用中括號取代"限php5.4版後"
?>
<br>
<h4>php對象</h4>
<?php
  class car {
    function car(){
      $this->model="VW";
    }
  }
  $herbie=new car();
  echo $herbie->model;
?>
<br>
<h4>PHP null值</h4>
<?php 
  $A7="等等就會消失的文字";
  $A7=null;
  var_dump($A7);
?>
<h3>php字符串函數</h3>
<h4>獲取字符串的長度</h4>
<?php 
  echo strlen("vivian"); 
  //strlen指函數返回字符串的長度
?>
<br>
<h4>計算字符串的字數</h4>
<?php
   echo str_word_count("vivian"); 
   // srr_word_count函數計算字符串中的單詞數
?>
<br>
<h4>反轉字符串</h4>
<?php 
  echo strrev("Huand Wan Ting"); //strrev函數反轉字符串
?>
<br>
<h4>在字符串中搜索特定文本</h4>
<?php
 echo strpos("hey vivian ","vivian"); 
 //strpos 函數搜尋字符串中的特定文本，找到匹配項則該函數返回第一個匹配字符位置，若無則返回false
?>
<br>
<h4>替換字符串中的文本</h4>
<?php 
  echo str_replace("world","vivian","hollo world!");
  // str_replace函數將某些字符替換為字符串中的其他文字
?>
