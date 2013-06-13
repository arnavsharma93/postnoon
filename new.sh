echo $1;
var=$1;
sudo cp $1_view.php old/ ;
sudo cp viewtemplate.php $1_view.php ;
sudo chmod 777 * ;
open -a MacVim  old/$1_view.php;
open -a MacVim $1_view.php;
