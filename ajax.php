<?php

    $db = mysqli_connect('localhost', "host1728258", '74ab39c6', 'host1728258');

    $data=$_POST;
    if($data['action']=='check'){
        $res = mysqli_query($db,"SELECT * FROM Users WHERE userid = ".$data['code']);


        $count = mysqli_num_rows($res);

        if( $count > 0 ) {
            echo $data['code'];
        }
        else{
            echo 'false';
        }

    }
    if($data['action']=='adduser'){

        $ex = "UPDATE Users SET name='".$data['name']."',class=".$data['class'].",letter=".$data['letter'].",
        profil=".$data['profil'].",email=\"".$data['email']."\" WHERE userid=".$data['userid'];

        mysqli_query($db,$ex);

        echo $ex;

    }
    mysqli_close($db);

?>