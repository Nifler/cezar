<?php
        $arr=array(

                'first_name'=>'andr',
                'email'=>'',
                'birthday_start'=>'2006-08-16',
                'birthday_end'=>'2016-08-16',
                'registration_date_start'=>'2016-08-14',
                'registration_date_end'=>'2016-08-18'

        );

        echo $filtr=json_encode($arr);


        $filtres=json_decode($filtr);

        foreach ($filtres as $k => $v){
            if (empty($v)) continue;
            echo "<br> $k => $v";
        }