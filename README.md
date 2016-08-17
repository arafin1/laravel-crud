First of all you have to create table in MYSQL. I used XAMMP.
Table rows are :

       id(AI,Primary-key)
        name,email,mobile,gender,os

Then create model by using following command:
   
         php artisan make:model curd 
then 

        php artisan make:controller testing --resource
 
which will autometically adds necessary field in testing controller.

You will fins form ERROR like "class form not found 
thsn simply follow these steps to wash the error :::--

Begin by installing this package through Composer. Edit your project's composer.json file to require laravelcollective/html

"require": {
    "laravelcollective/html": "~5.0"
}
Next, update Composer from the Terminal:

composer update

Next, add your new provider to the providers array of config/app.php:

'providers' => [
  // ...
  'Collective\Html\HtmlServiceProvider',
  // ...
],
Finally, add two class aliases to the aliases array of config/app.php:

'aliases' => [
// ...
  'Form' => 'Collective\Html\FormFacade',
  'Html' => 'Collective\Html\HtmlFacade',
// ...
],

Preview:

![preview.JPG](https://bitbucket.org/repo/4LKjaG/images/1857139203-preview.JPG)