<?php

    if($_POST['type'] == 'coupon_action'){

        $length = $_POST['length']; //post var length

        //Use can pick which characters you want in the coupon code
        $useLetters = true;
        $useMixedCase = true;
        $useNumbers = true;
        $useSymbols = false;


        $upperCase = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        $lowerCase = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        $symbols = ['!','@','#','$','%','^','&','*','(',')','_','-','[','{',']','}',';',':','<','>','?','/','|'];
        $numbers = [0,1,2,3,4,5,6,7,8,9];

        $code = []; //characters that make up the coupon code
        $coupon = '';
        
        if($useLetters){
            if($useMixedCase){
                $code = array_merge($code,$lowerCase,$upperCase);
            }else{
                $code = array_merge($code,$upperCase);
            }
        }

        if($useNumbers){
            $code = array_merge($code,$numbers);
        }


        if($useSymbols){
            $code = array_merge($code,$symbols);
        }


        for($i = 0; $i < $length; $i++){
            $coupon .= $code[mt_rand(0, count($code) - 1)]; //there's a '.' before '='
        }


        echo $coupon; //print out the coupon code, exit and open the index file
        exit(0); //not necessary to exit
    }
?>