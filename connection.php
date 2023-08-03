<?php
try{
$connection = new PDO("mysql:host=localhost;dbname=projectfinmodule","root","");
try{

}catch(EXception $e){
  echo $e->getMessage();
  
}
}catch(EXception $error){
  echo "CONNECTION ERROR : " . $error->getMessage();
  
};


try{
  $countCv = new PDO("mysql:host=localhost;dbname=projectfinmodule","root","");
}catch(EXception $error){
echo "Error in counter : " . $error->getMessage();
}

?>