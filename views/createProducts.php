<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Create Product Details</title>
</head>
<body>
<form action="/create" method="post" enctype="multipart/form-data">
    <h2>Create a products and save it..</h2>
    <a href="/list" class="list">See to the product list ?</a>
    <div class="container">
        <div class="productName common">
            <input type="hidden" name="action" value="form">
            <label>ProductName *</label><span><?php echo $error = ""; ?></span>
            <input type="text" name="productName" placeholder="Enter a product name">
        </div>
        <div class="prodcutImg common">
            <label>ProductImg </label>
            <input type="file" name="productImg">
        </div>
        <div class="SKU common">
            <label>SKU :</label>
            <input type="text" name="SKU" >
        </div>
        <div class="productPrice common">
            <label>ProductPrice :</label>
            <input type="number" name="productPrice" placeholder="Enter the product price">
        </div>
        <div class="productBrand common">
            <label>ProductBrand *</label>
            <select name="productBrand" id="">
                <option value="Realme">Realme</option>
                <option value="sony">sony</option>
                <option value="oneplus">oneplus</option>
                <option value="boat">boat</option>
            </select>
        </div>
        <div class="manufactureDate common">
        <label>ManufactureDate :</label>
            <input type="date" name="manufacturingDate">
        </div>
        <div class="availableStock common">
            <label>Available Stock :</label>
            <input type="number" name="availableStock" placeholder="Enter the stock count">
        </div>
        <div>
            <button class="submit" value="Submit">save products</button>

        </div>
    </div>
</form>
</body>
</html>