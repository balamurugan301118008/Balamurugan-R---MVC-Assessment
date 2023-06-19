<?php
require_once 'connections.php';

class UserModel extends Database
{
    public function insertValues($data,$file)

    {
            if (empty($data['productName']) || empty($data['SKU']) || empty($data['productPrice']) || empty($data['productBrand']) || empty($data['manufacturingDate']) || empty($data['availableStock']) || empty($file['productImg'])) {
                echo "please fill the all inputs";
            }
            else {
                    $productName = $data['productName'];
                    $productImg = $file['productImg']['name'];
                    $imagePath = 'model/ProductImages/' . $productImg;
                    move_uploaded_file($file['productImg']['tmp_name'], $imagePath);
                    $productSKU = $data['SKU'];
                    $productPrice = $data['productPrice'];
                    $productBrand = $data['productBrand'];
                    switch ($productBrand) {
                        case 'Realme':
                            $Brand = 'Realme';
                            break;
                        case 'sony':
                            $Brand = 'sony';
                            break;
                        case 'oneplus':
                            $Brand = 'oneplus';
                            break;
                        case 'boat':
                            $Brand = 'boat';
                            break;
                    }
                    $manufacturingDate = $data['manufacturingDate'];
                    $availableStock = $data['availableStock'];
                    $this->db->query("INSERT INTO product_details (product_name,product_img,SKU,product_price,product_brand,manufacture_date,available_stock)VALUES ('$productName','$imagePath','$productSKU','$productPrice','$Brand','$manufacturingDate','$availableStock')");
                    header("location:/list");
                    require 'views/createProducts.php';
                }
            }

    public  function listProductList()
    {
     $fetchProductList =  $this->db->query("SELECT * FROM product_details ");
     $fetchProductList->execute();
     $final  = $fetchProductList->fetchAll(PDO::FETCH_OBJ);
     return $final;
    }
    public function deleteProducts($id)
    {
        $deleteValues =  $this->db->query("SELECT product_img FROM product_details WHERE id ='$id'");
        $deleteValues->execute();
        $deleteAll = $deleteValues->fetchAll();
        unlink($deleteAll[0]['product_img']);

        $this->db->query("DELETE FROM product_details WHERE id ='$id' ");
    }
    public  function editProducts($id)
    {
        $editStatement = $this->db->query("SELECT * FROM product_details WHERE id ='$id'");
        $editStatement->execute();
        $editFinal = $editStatement->fetchAll(PDO::FETCH_OBJ);
        return $editFinal;
    }
    public  function UpdateProductDetails($id,$data,$file)
    {
        $productName = $data['productName'];
        $productImg = $file['productImg']['name'];
        $imagePath = 'model/ProductImages/'.$productImg;
        move_uploaded_file($file['productImg']['tmp_name'],$imagePath);
        $productSKU = $data['SKU'];
        $productPrice = $data['productPrice'];
        $productBrand = $data['productBrand'];
        switch ($productBrand){
            case 'Realme':  $Brand = 'Realme';  break;
            case 'sony': $Brand = 'sony'; break;
            case 'oneplus': $Brand = 'oneplus'; break;
            case 'boat': $Brand = 'boat'; break;
        }
        $manufacturingDate = $data['manufacturingDate'];
        $availableStock = $data['availableStock'];
        $this->db->query("UPDATE product_details set product_name = '$productName',product_img ='$productImg',SKU = '$productSKU',product_price = '$productPrice',product_brand = '$productBrand',manufacture_date = '$manufacturingDate',available_stock='$availableStock' WHERE id='$id'");
//        $this->db->query("INSERT INTO product_details (product_name,product_img,SKU,product_price,product_brand,manufacture_date,available_stock)VALUES ('$productName','$imagePath','$productSKU','$productPrice','$Brand','$manufacturingDate','$availableStock') WHERE id ='$id'");
        header("location:/list");
    }
}