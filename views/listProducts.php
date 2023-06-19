<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/d1d43b39cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <title>ListProductDetails</title>
</head>
<body>
<h2>All the products are here</h2>
    <div class="ProductListContainer">
        <a href="/" class="createProducts">If you are create any products ?</a>
        <table>
            <tr>
                <th>ProdcutNo</th>
                <th>ProdcutName</th>
                <th>ProdcutImage</th>
                <th>ProdcutSKU</th>
                <th>ProdcutPrice</th>
                <th>ProdcutBrand</th>
                <th>ManufactureDate</th>
                <th>Available Stock </th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            <?php foreach ($productList as $key=> $values) : ?>
            <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $values->product_name ?></td>
                <td><img src="<?php echo $values->product_img ?>" width="75px" height="75px"></td>
                <td><?php echo $values->SKU ?></td>
                <td><?php echo $values->product_price ?></td>
                <td><?php echo $values->product_brand ?></td>
                <td><?php echo $values->manufacture_date ?></td>
                <td><?php echo $values->available_stock ?></td>
                <td>
                    <form action="/delete" method="post">
                        <button class="del" value="<?php echo $values->id ?>" name="delete">Delete</button>
                    </form>
                </td>
                <td>
                    <form action="/edit" method="post">
                        <button  class="edit" value="<?php  echo $values->id ?>" name="edit">Edit</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>