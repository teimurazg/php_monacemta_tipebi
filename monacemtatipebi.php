<!DOCTYPE html>
<html>

<body>

    <?php

    // ცვლადები                    (მონაცემთა ტიპები)



    // (1) String   (ტექსტი)                            "Hello World"; 

    $a = "Hello World";
    echo var_dump($a) . "<br/>";

    echo "<br/>";



    // (2) Integer  (მთელი რიცხვები)                    1;  27;  50;

    $b = 32;
    echo var_dump($b) .  "<br/>";

    echo "<br/>";



    // (3) Float    (არამთელი რიცხვები, ათწილადები)    1.5;  10.365;  0.4;

    $c = 32.5;
    echo var_dump($c) . "<br/>";

    echo "<br/>";



    // (4) Boolean  (True ან False)                       True(1);  False(0);

    if (TRUE)  
        echo "This condition is TRUE.";  
    if (FALSE)  
        echo "This condition is FALSE.". "<br/>";

        echo "<br/>";



    // Null   (ცვლადს მნიშვნელობა არ აქვს მინიჭებული)             Null;

    $nl = NULL;  
    echo $nl. "<br/>";   //it will not give any output 

    echo "<br/>";






    // Type Casting (ცვლადის ტიპის გამოყენება სხვა ტიპით)

    // (5 & 6) (სტრინგის ტიპის შეცბლა ინტეჯერით)

    $x = "10";                               
    $y = (int)$x;

    echo var_dump ($x). "<br/>";
    echo var_dump ($y). "<br/>"; 

    echo "<br/>";

    // (7 & 8) (ინტეჯერის ტიპის შეცვლა სტრინგით)

    $x = 10;                               
    $y = (string)$x;

    echo var_dump ($x). "<br/>";
    echo var_dump ($y). "<br/>"; 

    echo "<br/>";

    // (9 & 10) (სტრინგის ტიპის შეცვლა ფლოატათ)

    $x = "3.14";                               
    $y = (float)$x;

    echo var_dump ($x). "<br/>";
    echo var_dump ($y). "<br/>";

    echo "<br/>";

    // (11 & 12) (სტრინგის ტიპის შეცვლა ბოლიანათ)

    $x = "";                               
    $y = (bool)$x;

    echo var_dump ($x). "<br/>";
    echo var_dump ($y). "<br/>";

    echo "<br/>";




    // (13) Constants (კონსტანტები): კონსტანტური ცვლაცი არის ცვლადი რომლის მნიშვნელობასაც
    // ერთხელ გამოცხადების შემდეგ ვეღარ შევცვლით)

    // ცვლადის მინიჭება ----> define(name,value)

    define("AGE", 21);

    echo var_dump(AGE). "<br/>";

    echo "<br/>";



    // (14) PHP Array (მასივები) სპეციალური ტიპის ცვლადებია რომელსაც შეუძლია ერთდროულად ერთზე მეტი მნიშვნელობა ქონდეს

    // ცვლადის მინიჭება ---> $names = ["lika", "ana", "nika", "nino",];

    // ინდექსირებული მასივების ელემენტებზე მიწვდომა ინდექსების საშუალებით
    // შეგვიძლია, --->   echo var_dump($names[0]);  output-->lika
    // ინდექსი არის მასივში ელემენტების რიგითობა, გადანომრვა იწყება 0 იდან.

    $names = ["lika", "ana", "nika", "nino", "anano"];

    echo var_dump($names). "<br/>";

    echo "<br/>";

    // (15)

    echo var_dump($names[3]). "<br/>";

    echo "<br/>";

    // (16) ასოციაციური მასივი, ამ მასივში გვაქ მცნება Key გასაღები რომელსაც ვანიჭებთ
    // მნიშვნელობას და მასივის მნიშვნელობის ამოღებისას შეგვიძლია გამოვიყენოთ
    // key;  ასოციაციის მასივის შექმნა  ---> $ages=["Anna"=>21, "Nutsa"=>23];

    $ages = ["Anna"=>21, "Nutsa"=>23, "nika" => 10];

    echo var_dump($ages["nika"]);

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";



    // ლოგიკური პერატორები,    ოპერანდები    x == y

    // (17)  ოპერატპრო --> == <-- შედარების ოპერატორი ოპერატორის რეზულტატი ყოველთვის არის 
    // ჭეშმარიტი ან მცდარი, აბრუნებს ჭეშმარიტს თუ ოპერანდის ორივე მხარეს აქვს ეთი და იმავე მნიშვნელობა

    $x = 5;
    $y = 6;

    $x == $y;

    var_dump($x == $y);


    echo "<br/>";
    echo "<br/>";

    // (18) არ უდრის ოპერატორი --> != <-- ოპერატორის რეზულტატი არის ყოველტვის ჭეშმარიტი ან მცდარი
    // აბრუნებს True თ

    $x = 6;
    $y = 6;

    $x != $y;

    var_dump($x != $y);


    echo "<br/>";

    //

    $x = 6;
    $y = 5;

    $x == $y;

    var_dump($x > $y);

    echo "<br/>";

    //

    $x = 4;
    $y = 5;

    $x == $y;

    var_dump($x < $y);




    echo "<br/>";

    //  >=

    $x = 5;
    $y = 5;

    $x == $y;

    var_dump($x >= $y);




    echo "<br/>";

    // <=

    $x = 5;
    $y = 5;

    $x == $y;

    var_dump($x <= $y);


    echo "<br/>";
    echo "<br/>";

    // 







   


    ?>
</body>

</html>