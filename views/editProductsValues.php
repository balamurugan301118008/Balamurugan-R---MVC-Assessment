<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Edit products</title>
</head>
<body>
<h2>Modifying your products and update it..</h2>
<?php foreach ($editProducts as $key=> $values) :?>
<form action="/update" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="productName common">
            <label>ProductName :</label>
            <input type="text" name="productName"  value="<?php echo $values->product_name ?>" placeholder="Enter a product name">
        </div>
        <div class="prodcutImg common">
            <label>ProductImg :</label>
            <input type="file" name="productImg" value="<?php echo $values->product_img ?>"><img src="<?php echo $values->product_img ?>" alt="" width="75px" height="75px">
        </div>
        <div class="SKU common">
            <label>SKU :</label>
            <input type="text" name="SKU" value="<?php echo $values->SKU ?>">
        </div>
        <div class="productPrice common">
            <label>ProductPrice :</label>
            <input type="number" name="productPrice"  value="<?php echo $values->product_price ?>" placeholder="Enter the product price">
        </div>
        <div class="productBrand common">
            <label>ProductBrand:</label>
            <select  name="productBrand" id="">
                <option value="Realme">Realme</option>
                <option value="sony">sony</option>
                <option value="oneplus">oneplus</option>
                <option value="boat">boat</option>
            </select>
        </div>
        <div class="manufactureDate common">
            <label>ManufactureDate :</label>
            <input type="date" name="manufacturingDate" value="<?php echo $values->manufacture_date ?>">
        </div>
        <div class="availableStock common">
            <label>Available Stock :</label>
            <input type="number" name="availableStock" placeholder="Enter the stock count" value="<?php echo $values->available_stock ?>">
        </div>
    </div>
    <div class="submit">
        <button name="update" class="update" value="<?php echo $values->id ?>">Update Product</button>
    </div>
</form>
<?php endforeach; ?>
</body>
</html>