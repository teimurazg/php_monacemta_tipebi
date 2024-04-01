<?php

// $elements = [1,89,3,45,5,61,7,8,9,10];

// foreach($elements as $element) {
//     echo "$element, ";
// }



foreach ($users as $key => $user) {
    if ($user == 'Nino') {
        echo $key;
        continue;
    }

    echo $user;
}