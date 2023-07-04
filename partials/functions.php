<?php 
    function generatePassword($length){
        $password = '';
        $letters = 'qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNMè+òàù,.-!"£$%&/()=?^|é*§°ç;:_@#[]';
        for($i=0; $i<$length; $i++){
            if($i % 2 === 0){
                $password .= rand(0,9);
            } else {
                $password .= substr($letters, rand(0, strlen($letters)), 1);
            };
        };
        return $password;
    }
?>