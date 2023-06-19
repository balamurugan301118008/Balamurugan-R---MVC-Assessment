<?php
require_once 'model/userModel.php';

class UserController
{
    public $usermodel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
    }
    public function form()
    {
        require 'views/createProducts.php';
    }
    public function create()
    {
        $this->usermodel->insertValues($_POST,$_FILES);
    }
    public  function listProductDetails()
    {
        $productList = $this->usermodel->listProductList();
        require 'views/listProducts.php';
    }
    public function delete($id)
    {
        $this->usermodel->deleteProducts($id);
        header("location:/list");
    }
    public function edit($id)
    {
       $editProducts =  $this->usermodel->editProducts($id);
       require 'views/editProductsValues.php';
    }
    public function update($id)
    {
        $this->usermodel->UpdateProductDetails($id,$_POST,$_FILES);
    }
}
