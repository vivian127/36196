<!DOCTYPE html>
    <head>
    <head>
        <title>03練習</title>
        <meta http-eqoiv="content-type" charset="utf-8"/>
    </head>
    <body>
        <?php
            function test01(){
            echo "hey vivian!!";
            }
            test01();
        //function 命名可用字母或下劃線開頭(非數字)
        //function 不分區大小寫
        ?>
        <br>
        <h4>php function參數</h4>
        <?php
            function name($test02){
                echo "My love $test02.<br>";
            } //單一函數
            name("01");
            name("02");
            name("03");
            name("04");
        ?>
        <br>
        <?php
            function rtyy($test03,$test04,$tset05){
                echo"姓名：$test03 ，生日：$test04 ，居住地：$tset05.<br>";
            } //多種函數，多種時中間要有逗號
            rtyy("01","1月","111");
            rtyy("02","3月","222");
            rtyy("03","5月","333");
            rtyy("04","8月","444");
        ?>
        <br>
        <h4>默認參數值</h4>
        <?php
            function setheight($minheight=50){
                echo"The height is $minheight<br>";
            }
            setheight(500);
            setheight(250);
            setheight(); //無輸入值，則將帶入默認值
            setheight(750);
        ?>
        <br>
        <h4>return 返回值</h4>
        <?php
            function viv($x,$y){
                $z=$x+$y;
                return $z;
            }
            echo "5+10=".viv(5,10)."<br>";
            echo "7+13=".viv(7,13)."<br>";
            echo "60+40=".viv(60,40)."<br>";
            echo "2+4=".viv(2,4)."<br>";
        ?>
        <br>
        <h4>arrays陣列</h4>
        <?php
            $test=array("蘋果","橘子","葡萄");
                echo "我喜歡".$test[0]."、".$test[1]."和".$test[2].".";
        ?>
        <br>
        <h4>count-獲取數組的長度</h4>
        <?php
            $clocs=array("粉色","紅色","藍色");
                echo count($clocs);
        ?>
        <br>
        <h4>for-循環索引數組</h4>
        <?php
            $cars=array("賓士","寶馬","奧迪");
            $vi=count($cars);
            
            for($o=0;$o<$vi;$o++){
            echo $cars[$o];
            echo "<br>";
            }
        ?>
        <br>
        <h4>關連數組</h4>
        <?php
            $ago=array("vivian"=>"23","anny"=>"29","winny"=>"32");
            echo "vivian is".$ago['vivian']. "year old.<br>";
            echo "anny is".$ago['anny']."year old.<br>";
            echo "winny is".$ago['winny']."year old.";
        ?>
        <br>
        <h4>foreach循環通過關連數組</h4>
        <?php
            $agoo=array("ai"=>"77","bi"=>"88","ci"=>"99");
            
            foreach($agoo as $xx=>$xx_value){
                echo"key=".$xx."，Value=".$xx_value;
                echo"<br>";
            }
        ?>
        <br>
        <h4>數組排序函數</h4>            
        <h4>按升序排數組：sort()"字母"</h4>
        <?php
             $ca=array("F","B","T");
             sort($ca); // 以字母排列從小到大排序
                 $test06=count($ca);
                 for($yy=0;$yy<$test06;$yy++){
                     echo $ca[$yy];
                     echo "<br>";
                 }
        ?>
        <br>
        <h4>按升序排數組：sort()"數字"</h4>
        <?php
            $num=array(100,66,2,0,98,254);
            sort($num); //以數字排列從小到大
                $test07=count($num);
                for($zz=0;$zz<$test07;$zz++){
                    echo $num[$zz];
                    echo "<br>";
                }
        ?>
        <br>
        <h4>按降序排序數組：rsort()"字母"</h4>
        <?php
            $yt=array("pink","blue","yellow");
            rsort($yt);
            $test08=count($yt);
            for($kk=0;$kk<$test08;$kk++){
                echo $yt[$kk];
                echo "<br>";
            } 
        ?>
        <br>
        <h4>按降序排序數組：rsort()"數字"</h4>
        <?php
           $abc=array(0,658,5,999,12,1066);
           rsort($abc);
           $test09=count($abc);
           for($tt=0;$tt<$test09;$tt++){
               echo $abc[$tt];
               echo "<br>";
           }
        ?>
        <br>
        <h4>排序組數(升序),根據"值"：asort</h4>
        <?php
            $op=array("A"=>"02","B"=>"06","C"=>"03"); 
            asort($op); //數字排序

            foreach($op as $t=>$t_value){                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
                echo"key=".$t."，value=".$t_value;
                echo"<br>";
            }
        ?>
        <br>
        <h4>排序數組(升序),根據"鍵"：ksort</h4>
        <?php 
            $po=array("ao"=>"95","tokk"=>"698","r"=>"9000");
            ksort($po); //字母排序

            foreach($po as $we=>$we_value){
                echo"key=".$we."，value=".$we_value;
                echo"<br>";
            }
        ?>
        <br>
        <h4>排序數組(降序),根據"值"</h4>
        <?php
            $yu=array("zx"=>"999","cv"=>"1280","bn"=>"02");
            arsort($yu);

            foreach($yu as $hh=>$hh_value){
                echo"key=".$hh."，value=".$hh_value;
                echo"<br>";
            }
        ?>
        <br>
        <h4>排序數組(降序),根據"鍵"</h4>
        <?php
            $uy=array("oo"=>"56","pp"=>"88","gg"=>"44");
            krsort($uy);

            foreach($uy as $ll=>$ll_value){
                echo "key=".$ll."，value=".$ll_value;
                echo "<br>";
            }
        ?>
        <br>
        <h4>全局變數：Superglobals</h4>
        
            
    </body>
</html>            