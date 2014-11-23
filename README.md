## PDF maker Package for Laravel 4.2

### Installation
Add this package to your composer.json and run composer update.
"Majid/phptopdf": "dev-master"


Add the ServiceProvider to the providers array in
```php
 app/config/app.php
```
```php
'Majid\Phptopdf\PhptopdfServiceProvider'
```

then go to [phptopdf sign up page](https://phptopdf.com/signup/) and sign up , it's free. then get API_KEY from site and just copy and paste it in line 5 of file mentiond below.
```php
your_project_path/vendor/phptopdf/src/Majid/Phptopdf/phptopdf.php
```

```php
$my_html = '<HTML>';
$my_html .= "<link rel=\"stylesheet\" href=\"http://phptopdf.com/bootstrap.css\">";


$my_html .= "<div>".
$my_html .= "what ever html element and php function which has html element output you can use here like below"
$my_html .= "<div/>"

$math_var = (2+3) * 7;
$my_html .= "<div>".
$my_html .= $math_var;
$my_html .= "<div/>"



$my_html .= '</HTML>';
$pdf_options = array(
  "encoding" => 'UTF-8',
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'save',
  "save_directory" =>  app_path().'/../public/files/pdf',
  "file_name" => 'factor.pdf'
  );

  Phptopdf::phptopdf($pdf_options);

```

As you can see phptopdf function is a function which is available in phptopdf library and I just gathered all of its function under my class and you can use all of its functions as below :
```php
Phptopdf::phptopdf
Phptopdf::phptopdf_url
Phptopdf::phptopdf_html
```
see [phptopdf.com](http://www.phptopdf.com) for functions arguments and right syntax.
```php
Phptopdf::phptopdf($pdf_options);
```
and finally you can read [phptopdf official web site](http://wwww.phptopdf.com) for more documentation.
##License
this package was created by Majid Abdolhosseini and is released under the MIT License.
