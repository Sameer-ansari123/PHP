    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>

<body>
    <?php
    echo "first line<br>";
    $x = 56;
    $y = "sameer";
    $txt = "sentence";
    echo  "complete this $txt !<br>";
    echo $x;
    echo "<br>";
    echo $y;
    $variable1 = 10;
    $variable2 = 5;

    // arithematic operation
    // addition method
    echo "The value of varable1 + variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    // substraction method
    echo "The value of variable1 - variable2 is ";
    echo $variable1 - $variable2;
    echo "<br>";
    // multiplication method
    echo "The value of variable1 * variable2 is  ";
    echo $variable1 * $variable2 ;
    echo "<br>";
    // division method
    echo "The value of variable1 / variable2 is ";
    echo $variable1 / $variable2 ;
    echo "<br>";
    echo "<br>";
    // assignment opration
    $newVar = $variable1;
    echo "the value of new Variable is ";
    echo $newVar ;
    echo "<br>";
    $newVar += 2;
    echo "The value of new Variable is increase is  ";
    echo $newVar ;
    print "<br>";
    print "another line is print ";
    echo "<br>";
    echo "<br>";

    // comparison method 
    $a ="example";
    var_dump($a);
    echo "<br>";
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";
    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";
    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";
    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);

    // increament /decrement method 
    echo "<br>";
    echo $variable1++; 
    echo "<br>";
    echo $variable1;
    echo "<br>";
    echo $variable1--;
    echo "<br>";
    echo $variable1;
    echo "<br>";
    echo ++$variable1;
    echo "<br>";
    echo $variable1;
    echo "<br>";
    echo --$variable1;
    echo "<br>";
    echo $variable1;
    echo "<br>";
   print str_word_count('sameer ansari');
   $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
    echo "<br>";
    echo pi();  
    echo "<br>";
    echo (max (2,3,5,8,7));
    echo "<br>";
    echo (min (2,3,5,4,7,1,0));
    echo "<br>";
    function myvalue(){
        return __FUNCTION__;
}
    echo myvalue();
    print __LINE__;
    
    echo "<br>";
    if (5 > 8){
        echo "if condition now apply here ";
    }else {
        echo "if condition not apply here ";
    }
    echo "<br>";
    $t = 15;
    if($t< 10){
        echo "have a good morning ";
    }elseif($t< 20) {
        echo "have a good day ";
    }else {
        echo "have a good night ";
        }
        // short hand if
        echo "<br>";
        $a = 5;
        if($a <10) $b = "Hello";
        echo $b;
        // Nasted 
        echo "<br>";
        $a = 12;
        if ($a > 10) {
            echo "Above 10";
            if ($a > 20) {
                echo "and also above 20";
            }else{
                echo "but not above 20";
            }
        }
    // switch ststement
        echo "<br>";
        $favcolor = "red";
        switch ($favcolor){
            case  "red":
                echo "my favourite color is red!";
                break;
                case  "green":
                    echo "my favourite color is green";
                    break;
                    case "yellow":
                        echo "my favourite color is yellow ";
                        break;
                        default:
                        echo " This is not my favourite color ";
                        break;
                    }

    // Do while Loop 
    echo "<br>";
    $i = 8;
     do {
        echo $i;
        $i++;
     }while($i < 5);
     echo "<br>";
     $i = 1;
     do {
        if($i == 5) break;
        echo "the value of i is ";
        echo $i;
        $i++;
        echo "<br>";
     }while($i < 6);   
     echo "<br>";
    //  for loop 
     for ($i=10; $i > 5; $i--) { 
            echo $i;
            echo "<br>";
    // another example
            for ($a=0; $a < 10; $a++) { 
                    echo $a;
            }     echo "<br>";
     }    
    // for each loop
        $color = Array ("red", "green", "yellow", "white", "black");
        foreach($color as $x){
            echo "print the color as $x <br>";
        }
        // Array statement
        $cars = array("Volvo","BMW","Toyota");
        foreach ($cars as $x){
            echo "$x <br>";
        }

        $fruit = array("apple", "banana", "cherry");
        $fruit [] = "orange";
        var_dump($fruit); 
        echo "<br>";
    
        $vegetable = array("tomato","potato", "lemon");
        array_push($vegetable,"onion","cucumber");
        var_dump($vegetable);
        echo "<br>";

        // remove array 
        $car = array ("BMW","Audi","toyota");
        array_splice($car,1,2);
        var_dump($car);
        echo "<br>";

        $car = array("Mastang","Ferrari","Meybach","Tesla");
        unset($car[1],$car[3]);
        var_dump($car);
        echo "<br>";


        $car = array("brand"=>"ford","model"=>"mustang","year"=>1994);
        $newarray =array_diff($car,["mustang",1994]);
        var_dump($newarray);
        echo "<br>";


        $car = array("BMW","Audi","Mercedez");
        array_pop($car);
        var_dump ($car);
        echo "<br>";

        $car = array("BMW","Audi","Mercedez");
        array_shift($car);
        var_dump($car);
       echo "<br>"; 

        $number = array(1,5,4,7,6);
        sort($number);
        var_dump($number);

        $car = array("BMW","Jetta","superb","laira");
        rsort($car);
        $clenght=count($car);
        for ($x=0; $x< $clenght; $x++){
            echo $car[$x];
            echo "<br>";
        } 


        $cars = array(
            array("Volve" ,22 ,18),
            array("BMW" ,30 ,15),
            array("Mercedez" ,20 , 10),
            array("Land Rover" ,25 ,15)
        );
        // multidimensional Arrays
        echo $cars[0][0]." :In Stock: " .$cars[0][1].",Sold:". $cars[0][2]."<br>";
        echo $cars[1][0]." :In Stock: " .$cars[1][1].",Sold:". $cars[1][2]."<br>";
        echo $cars[2][0]." :In Stock: " .$cars[2][1].",Sold:". $cars[2][2]."<br>";
        echo $cars[3][0]." :In Stock: " .$cars[3][1].",Sold:". $cars[3][2]."<br>";
        echo "<br>";

        // Another example
        $cars = array(
            array("Volve" ,22 ,18),
            array("BMW" ,30 ,15),
            array("Mercedez" ,20 ,10),
            array("Land Rover" ,25 ,15),
        );
        for ($row = 0; $row < 4; $row++){
            echo "<p><b> Row Number $row</p></b>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++){
                echo "<li>".$cars[$row][$col]."</li>";
            }
            echo "</ul>";
        }
 
        echo "<br>";
     // function statement
    function print5(){
        echo "five<br>";
    }
    print5();
    print5();

    // another examples

    function print_number($number){
        echo "<br>your number is ";
        echo $number;
    }
print_number(25);
print_number(15);
print_number(458);
echo "<br>";
function family_name($fname) {
echo "$fname refsnes .<br>";
}
family_name('john');
family_name('adam');
family_name('george');
family_name('hege');

function familyName($fname , $year){
    echo "$fname refsnse. born in $year <br>";
}
familyName("john", "1988");
familyName("adam", "1997");
familyName("george", "1999");
familyName("hege", "2004");



function setHeight($minheight = 50,$maxheight = 1000){
    echo "The minimum Height is : $minheight <br>.the maximum Height is $maxheight<br>";
}
echo "<br>";
setHeight(154,458);
setHeight();
setHeight(754,1250);
setHeight(10,1021);
echo "<br>";

function sum($x,$y){
    $z =$x + $y;
    return $z;
}
echo "7 + 5 =". sum(7,5)."<br>";
Echo "10 + 50 =". sum(10,50)."<br>";
echo "2 + 4 = " . sum(2,4);
echo "<br>";

// String function 

$str = addcslashes("sameer","e");
echo ($str);
echo "<br>";

$str = addslashes('my name is "sameer"');
echo($str);
echo "<br>";

$str = "sameer ansari";
echo $str ."<br>";
echo chop($str ,"ansari");
echo "<br>"; 

$str = "Hello World!";
echo $str ."<br>";
echo ltrim($str ,"Hello");
echo "<br>";    

$str = "Hello World!";
echo $str ."<br>";
echo rtrim($str ,"World!");
echo "<br>"; 


$number = 9;
$str = "beijing";
printf("There are %u million bicycle in %s " ,$number ,$str );
echo "<br>"; 

$number = 9;
$str = "beijing";
$txt = sprintf("There are %u million bicycle in %s ",$number ,$str );
echo $txt;

echo "<br>"; 
echo str_repeat(" sameer ",10);
echo "<br>"; 
echo str_replace("sameer","mohammmed", "sameer ansari");
echo "<br>"; 
echo str_shuffle("sameer ansari");
echo "<br>"; 
echo str_word_count("sameer ansari");
echo "<br>"; 
echo strchr("sameer ansari","ansari");
echo "<br>"; 
Echo strcmp("sameer ansari","sameer ansari");
echo "<br>"; 
echo strcspn("sameer ansari","i");
echo "<br>"; 
echo strlen("sameer");
echo "<br>"; 
echo strrchr("Hello World ! What a beatiful day !","What");
echo "<br>"; 
echo strrev("sameer ansari");
echo "<br>"; 
echo strtolower("Sameer ANSARI<br>");
echo strtoupper("Sameer ANSARI<br>");
echo strtr("Hilla World!","ia","eo");echo "<br>";
$arr = array("Hello"=>"sameer","World"=>"ansari");
echo strtr("Hello World<br>",$arr);
echo substr_compare("sameer ansari","sameer ansari",1);
echo substr_count("Hello World . The World is nice place to our country","World");
echo "<br>"; 
$str ="Hello World!";
echo $str ."<br>";
echo trim($str ,"Hed");
echo "<br>";
echo ucwords("Sameer ansari");
echo "<br>";
echo "Today date is ".date("d/m/y")."<br>";
echo "Today date is ".date("d-m-y")."<br>";
echo "Today date is ".date("d.m.y")."<br>";
$d = strtotime("tomorrow");
echo date("y/m/d h:i:sa")  ."<br>";

$num = 15478963568715014501 ;
$sum = 0;$rem = 0;
for ($i=0;$i<=strlen($num);$i++)
{
    $rem=$num%10;
    $sum = $sum + $rem;
    $num = $num/10;
}
echo "sum of digits is 15478963568715014501 is $sum";


    ?> 
</body>
</html>