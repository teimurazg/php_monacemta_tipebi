<!DOCTYPE html>
<html>

<body>

    <?php

    // ცვლადები                    (მონაცემთა ტიპები)



    // (1) String   (ტექსტი)                            "Hello World"; 

    $a = "Hello World";
    echo var_dump($a) . "<br/>";



    // (2) Integer  (მთელი რიცხვები)                    1;  27;  50;

    $b = 32;
    echo var_dump($b) .  "<br/>";



    // (3) Float    (არამთელი რიცხვები, ათწილადები)    1.5;  10.365;  0.4;

    $c = 32.5;
    echo var_dump($c) . "<br/>";



    // (4) Boolean  (True ან False)                       True(1);  False(0);

    if (TRUE)  
        echo "This condition is TRUE.";  
    if (FALSE)  
        echo "This condition is FALSE.". "<br/>";



    // Null   (ცვლადს მნიშვნელობა არ აქვს მინიჭებული)             Null;

    $nl = NULL;  
    echo $nl. "<br/>";   //it will not give any output 






    // Type Casting (ცვლადის ტიპის გამოყენება სხვა ტიპით)

    // (5 & 6) (სტრინგის ტიპის შეცბლა ინტეჯერით)

    $x = "10";                               
    $y = (int)$x;

    echo var_dump ($x). "<br/>";
    echo var_dump ($y). "<br/>"; 

    // (7 & 8) (ინტეჯერის ტიპის შეცვლა სტრინგით)

    $x = 10;                               
    $y = (string)$x;

    echo var_dump ($x). "<br/>";
    echo var_dump ($y). "<br/>"; 

    // (9 & 10) (სტრინგის ტიპის შეცვლა ფლოატათ)

    $x = "3.14";                               
    $y = (float)$x;

    echo var_dump ($x). "<br/>";
    echo var_dump ($y). "<br/>";

    // (11 & 12) (სტრინგის ტიპის შეცვლა ბოლიანათ)

    $x = "";                               
    $y = (bool)$x;

    echo var_dump ($x). "<br/>";
    echo var_dump ($y). "<br/>";




    // (13) Constants (კონსტანტები): კონსტანტური ცვლაცი არის ცვლადი რომლის მნიშვნელობასაც
    // ერთხელ გამოცხადების შემდეგ ვეღარ შევცვლით)

    // ცვლადის მინიჭება ----> define(name,value)

    define("AGE", 21);

    echo var_dump(AGE). "<br/>";



    // (14) PHP Array (მასივები) სპეციალური ტიპის ცვლადებია რომელსაც შეუძლია ერთდროულად ერთზე მეტი მნიშვნელობა ქონდეს

    // ცვლადის მინიჭება ---> $names = ["lika", "ana", "nika", "nino",];

    // ინდექსირებული მასივების ელემენტებზე მიწვდომა ინდექსების საშუალებით
    // შეგვიძლია, --->   echo var_dump($names[0]);  output-->lika
    // ინდექსი არის მასივში ელემენტების რიგითობა, გადანომრვა იწყება 0 იდან.

    $names = ["lika", "ana", "nika", "nino", "anano"];

    echo var_dump($names). "<br/>";

    // (15)

    echo var_dump($names[3]). "<br/>";

    // (16) ასოციაციური მასივი, ამ მასივში გვაქ მცნება Key გასაღები რომელსაც ვანიჭებთ
    // მნიშვნელობას და მასივის მნიშვნელობის ამოღებისას შეგვიძლია გამოვიყენოთ
    // key;  ასოციაციის მასივის შექმნა  ---> $ages=["Anna"=>21, "Nutsa"=>23];

    $ages = ["Anna"=>21, "Nutsa"=>23, "nika" => 5];

    echo var_dump($ages["nika"]);






   


    ?>
</body>

</html>