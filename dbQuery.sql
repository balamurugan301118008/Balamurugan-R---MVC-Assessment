drop database MVC_Assessment

create database MVC_Assessment;

create table product_details
 (
    id int not null AUTO_INCREMENT,
    product_name varchar(255),
    product_img varchar(255),
    SKU varchar(255),
    product_price int,
    product_brand varchar(255),
    manufacture_date Date,
    available_stock varchar(255),
    PRIMARY key(id)
);