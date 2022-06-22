# esculApp_origin
for use esculapp with the data_example, import the esculapp_example.sql in your MySQL administration tool like phpadmin
config the file manager.php (model/manager.php) : modifie user_name and password in the function "dbConnect()" below
  $db = new PDO('mysql:host=localhost;dbname=esculapp_example;charset=utf8', 'user_name', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
