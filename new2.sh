echo $1;
var=$1;
sudo cp adclients_insert.php ${var}_insert.php;
sudo cp adclients_view.php ${var}_view.php;    
sudo cp adclients_form.php ${var}_form.php;
sudo chmod 777 ${var}_insert.php; 
sudo chmod 777 ${var}_view.php;   
sudo chmod 777 ${var}_form.php;

