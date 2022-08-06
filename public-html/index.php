<?php
$website = 'http://www.zavrel.net';
?>

<!DOCTYPE html>  
<head>  
 <title>Hello World!</title>
</head>

<body>  
 <h1>Hello World!</h1>

 <a href="<?php echo $website; ?>"><?php echo "ZAVREL CONSULTING: $website"; ?></a>
 <?php
 $trueValue = true;
 $falseValue = false;
 ?>
 <p><?php echo "This is the content of trueValue: $trueValue"; ?></p>
 <p><?php echo "This is the content of falseVaue: $falseValue"; ?></p>

 <p>
    <?php
    $countries = array('Finland', 'France', 'Spain');
    print_r($countries);
    $countries[] = 'Italy';
    print_r($countries);
    ?>
 </p>

 <p>
    <?php
    echo $countries[1];
    ?>
 </p>

 <p>
    <?php
    echo count ($countries);
    ?>
 </p>

 <p>
    <?php
       $age = array(
        'John' => 35,
        'Paul' => 24,
        'George' => 27
       );
     print_r($age);
    ?>
</p>

<p>
    <?php
    echo $age ['Paul'];
    ?>
 </p>

 <script>
    var cars = ["Mercedez", "Volvo", "BMW", "Tesla"];
    for (i in cars) {
        console.log("The current car is" + cars[i]);
    }
 </script>

 <?php
     $cars = ["Mercedez", "Volvo", "BMW", "Tesla"];
     foreach ($cars as $i) {
        echo "The current car is $i<br>";
     }
 ?>

 <p>
    <?php
        class carBlueprint {
            //Here goes properties and methods
            
            //constructor
            public function _construct($newColor, $newMake) {
               $this->color = $newColor;
               $this->make = $newMake;
            }

            //setter methods
            public function setColor($newColour) {
                $this->color = $newColour;
            }
            //getter methods
            public function getcolor() {
                return "<br>New Color is:".$this->color."<br>";
            }
        }
        $firstRealCar = new carBlueprint('green', 'Volvo');

        var_dump($firstRealCar);
        echo $firstRealCar->color;

      
        echo $firstRealCar->getcolor();

        $secondRealCar = new CarBlueprint('brown', 'Mercedes');

        echo $secondRealCar->getColor();
        var_dump($secondRealCar);
    ?>

 </p>

 <P>
   <?php
        class sportCarBlueprint extends CarBlueprint {
         //constructor
         public function _construct($newCar, $newMake, $newSpoiler) {
            parent::_construct($newColor, $newMake);
            $this->spoiler = $newSpoiler;
         }

         public function activateSpoiler() {
            return "<br><strong>SPOILER ACTIVE!</strong><br>";
         }

        }
        
        $firstsportCar = new sportCarBlueprint('magenta', 'porsche', 'tail');
        $firstsportCar->setColor('PINK')
        var_dump($firstSportCar);
        $firstsportCar->activateSpoiler();
        
   ?>
 </P>

 <P>
   <?php
       function divideOneByNumber($number) {
         if ($number ==0){
            throw new Exception("Division by zero is not allowed.")
            
         }
         return 1/$number;
       }

       try {

       echo "The result of division is:".divideOneByNumber(0);

       }

       catch(Exception $e) {
         echo 'Message:'.$e->getMessage();
       }
 </P>

</body>
