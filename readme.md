## php_curd_demo

The “CRUD” means Create, Read, Update, Delete and is the most frequent functions used in daily operation. Here shows a simple CRUD app in PHP for reference. Let’s follow the methods explained in the article of my blog “[Building PHP Web Apps Without Framework](https://charles4code.blogspot.com/2018/09/building-php-web-apps-without-framework.html)” and start to build a product list web site.

### Seven Basic Operations

There are seven operations need to identified. They are:

- list_products: get and show all products.
- show_product: get product data for a specific prod_id.
- new_product: get a new form to enter product data.
- create_product: create a product and save to database.
- edit_product: get and edit product data for a specific prod_id.
- update_product update product data of a specific prod_id to database.
- delete_product delete product for a specific prod_id.

The operations 3 and 4 are consecutive steps, which mean when a user creates a product by finishing product data entry (operation 3), the system save product data to database at once (operation 4).

Likewise, operation 5 and 6 have the same situation. The system gets and shows the product data on the screen (operation 5), then it saves the data back to database while data has been edited by a user (operation 6).

This demo application is also described in [A Simple CRUD App in PHP](https://charles4code.blogspot.com/2018/09/a-simple-crud-app-in-php.html).
