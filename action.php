<?php
if(isset($_POST['scode'])){
    
    // These are two action codes you can change later accrodingly :)
    $actual = "code1";
    $actua2 = "code2";

    // -- not needed to change anything below
    // --------------------------------------------
    $input = trim( strip_tags( $_POST['scode'] ) );
    if($actual == $input || $actua2 == $input ){
        echo "success";
    }else{
        echo "fail";
    }
}
?>