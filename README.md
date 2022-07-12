# esculApp_origin

1) for use esculapp with the data_example, import the esculapp_example.sql in your MySQL administration tool like phpadmin

2) config the file manager.php (model/manager.php) : modifie user_name and password in the function "dbConnect()" below
  $db = new PDO('mysql:host=localhost;dbname=esculapp_example;charset=utf8', 'user_name', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

3) by default one account has been created in the table "login"
  email : john.doe@autre.fr
  password : admin

The function "connexions" is optional but if you want to use this, you must be adapt the function to your database
