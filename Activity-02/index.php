<html>
    <body>
        <h1>Hello,from Abner B. Subibi</h1>

        <h3>Your First PHP Program</h3>

         <h3>Step #3</h3>
        <?php
            echo "Hello World!<br>";
        ?>

        <?php
            $x = 15;
            $y = 3;
            $sum = $x + $y;
            echo "The sum is $sum.";
        ?>

        <?php
            $x = 15;
            $y = 3;
            if ($x % $y == 0) {
                echo "$y is a factor of $x <br>";  
            } else {
                echo "$y is NOT a factor of $x <br>";
            } 
        ?>

        <h3>Step #4: Multiples of 3 or 5 (1-100) 6.2</h3>
        <?php
            for($i = 1; $i <= 100; $i++) {
                if ($i % 3 == 0 || $i % 5 == 0) {
                    echo "$i <br>";
                }
            }
        ?>
        
        <h3>Step #5.0: Create and Display Array 8.1</h3>
        <?php
            $products = array("Product A", "Product B", "Product C");
            echo "Array created and displayed:<br>";
            var_dump($products);
        ?>

        <h3>Step #5: Indexed Array 8.4</h3>
        <?php
            $products = array("Product A", "Product B", "Product C");
            foreach($products as $p){
                echo "$p <br>";
            }
        ?>

        <h3>Step #5.1: Change Array Value 8.3</h3>
        <?php
            $products = array("Product A", "Product B", "Product C");
            $products[1] = "Product D";
            echo "After changing second item:<br>";
            var_dump($products);
        ?>

        <h3>Step #6: Associative Array 8.5</h3>
        <?php
            $product = array("name" => "Product A", "price" => 10.50, "stock" => 12);
            echo $product["name"] . "<br>";
        ?>

        <h3>Step #7: Two-Dimensional Associative Array 8.6</h3>
        <?php
            $products = array(
                array("name"=>"Product A", "price"=>10.50, "stock"=>12),
                array("name"=>"Product B", "price"=>5.60, "stock"=>7),
                array("name"=>"Product C", "price"=>7.00, "stock"=>5)
            );
            
           
            echo "Two-dimensional associative array created:<br>";
            echo "<pre>";
            print_r($products);
            echo "</pre>";
        ?>

        <h3>Step #8: Loop Through Associative Array 8.8</h3>
        <?php
            foreach($products as $p){
                
                echo $p["name"] . " is " . $p["price"] . " pesos <br>";
            }
        ?>
    </body>
</html>
