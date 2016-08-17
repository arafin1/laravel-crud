
First of all you have to create table in MYSQL. I used XAMMP.
Table rows are :
       id(AI,Primary-key)
        name,email,mobile,gender,os
Then create model by using following command:
   
         php artisan make:model curd 
then 

        php artisan make:controller testing --resource
 
which will autometically adds necessary field in testing controller.
        



Preview:

![preview.JPG](https://bitbucket.org/repo/4LKjaG/images/1857139203-preview.JPG)