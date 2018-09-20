<!DOCTYPE html>
    <head>
        <title>02練習</title>
        <meta http-eqoiv="content-type" charset="utf-8"/>
     </head>
    <body>
        <h4>創建一個PHP常量</h4>
        <?php
           define("VIVIAN","Welcome to w3shools.com!");
           echo VIVIAN;
           //句法 "define(name,value,case-insensitive)"
           //name:指定常量的名稱
           //value:指定常量的值
           //case-insensitive:指定常量名稱是否不區分大小寫，默認值為"有區分大小寫"
        ?>
        <br>
        <?php
           define("VIVIAN","walcome to w3shools.com!",true);
           echo vivian ;
           //"true"不區分大小寫
        ?>
        <br>
        <?php
           define("FUNY","WALCOME TO W3SHOOLS.COM!");
           //defin常量
           function test01() {
               echo FUNY;     
           } 
           //常量是全局的，可以在整個腳本中使用
           //在函數內部使用常量，即使函數於外部定義，亦可使用
           test01();
        ?>
        <br>
        <h3>php條件語句</h3>
        <h4>php if語句</h4>
        
        <?php
           $t=date("H");
           if($t<"20") {
               echo "祝您有個美好的早晨!";
           }  
        ?>
        <br>
        <h4>if與else語句</h4>
        <?php
           $k=date("H");
           if($k<"20"){
               echo"祝您有個美好的早晨";
           } else {
               echo"祝您有個美好的夜晚";
           }
        ?>
        <br>
        <h4>if/elseif/else語句</h4>
        <?php
           $q=date("H");
           if($q < "10") {
               echo"祝大家早安!!";
           } elseif($q < "12") {
               echo"祝你有個美好的一天!!";
           } else{
               echo"祝您晚安!!";
           }
        // 設定變數與功能
        //if(條件){輸入達成條件顯示語句}
        //elseif(條件){輸入達成條件顯示語句}    
        //else {未達成以上條件時，輸入顯示語句}
        ?>
        <h4>php Switch語句</h4>
        <?php
        $color="pink";
        switch ($color)
        {
            case "red";
               echo "你喜歡的顏色是紅色";
               break;
            case "blue";
               echo "你喜歡的顏色是藍色";
               break;
            case "green";
               echo "你喜歡的顏色是綠色";
               break;
            default;
               echo "你喜歡的顏色不是紅色、藍色、綠色";
        }
        //設定變數與需求
        //swith啟用功能項(輸入變數)
        //case 輸入值 / echo值的顯示文字
        //break 需求與值無法匹配時，會自動匹配下一個
        //default 默認值，當匹配皆不正確，顯示默認文字
        ?>
        <br>
        <h4>while循環語句</h4>
        <?php
            $ab=100;
            while($ab<=105){
                echo "編號：$ab<br>";
                $ab++;
        }  
        // 指定條件為真，就循環歷代碼；若條件為假則不顯示
        ?>
        <br>
        <h4>do/while循環語句</h4>
        <?php
            $ba=15;
            do{
                echo"編號；$ba<br>";
                $ba++;
            } 
            while($ba<=20);
        //先經歷代碼，若指定條件為真，就重複循環
        //指定條件為假，也會顯示假的代碼
        ?>
        <br>
        <h4>for循環語句</h4>
        <?php
            for($aa=0;$aa<=5;$aa++){
                echo "編號：$aa<br>";
            }
        //若知道腳本應運行多少次時，將使用該循環
        ?>
        <h4>foreach循環語句</h4>
        <?php
            $color=array("red","green","blue","yellow");
            foreach ($color as $value){
                echo "$value<br>";
            }
        //foreach循環適用於數組，用於循環遍歷數組中每個鍵/值對
        ?>
        <br>
        <?php
            $arr = array(5,3,6,2,8,10);
            for($i = count($arr)-1;$i>=0;$i--){
                for($j = 0 ; $j < $i ; $j++){
                    if($arr[$j+1] > $arr[$j] ){
                    $aa = $arr[$j+1];
                    $arr[$j+1] = $arr[$j];
                    $arr[$j] = $aa;
                    }
                }
            }         
            print_r($arr);
            //看的不是很懂
        ?>
        
    </body>
</html>