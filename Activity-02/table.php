<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
    <link rel="stylesheet" href="tablestyle.css">
</head>

<body>
    <h1 class="menu-title">Dynamic Table</h1>
    <?php
    $products = array(
        array("name"=>"Apple", "price"=>10.50, "stock"=>12),
        array("name"=>"Orange", "price"=>5.60, "stock"=>7),
        array("name"=>"Melon", "price"=>7.00, "stock"=>5),
    );
    ?>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        <?php
        foreach($products as $p){
           
            $rowClass = $p["stock"] < 10 ? 'class="low-stock"' : '';
        ?>
        <tr <?= $rowClass ?>>
            <td><?= $p["name"] ?></td>
            <td><?= $p["price"] ?></td>
            <td><?= $p["stock"] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>