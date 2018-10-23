<?php
function kelipatan($a)
{

$x= 1;

//  do
//  //membuat variabel i = 1 dan membuat perulangan                            dan akan berhenti sampai i = 100
// {

for ($x = 0; $x <= $a; $x++) {
if($a%3==0)
{
    echo " Marlin <br>";///1a
}
else if($a%5==0)
{
    echo " Booking <br>";//1b
}
}



//1c dan 1d
do {

   if ($a%3==0 && $a%5==0)
   //jika hasil bagi an1tara bilangan i dengan 2 = 0 maka itu                       bilangan genap
  {
    echo " Marlin Booking <br>"; //Menampilkan bilangan genap
  }

  $x++;
}
while ($x <= 2);

do{

if($a%3==0)
{
   echo "Booking   <br>";
}
else if($a%5==0)
{
   echo "Marlin <br>";
}
$x++;
}while($x <= 5);

}


//1e
do {

   if ($a%3==0 && $a%5==0)
   //jika hasil bagi an1tara bilangan i dengan 2 = 0 maka itu                       bilangan genap
  {
    echo " Marlin Booking <br>"; //Menampilkan bilangan genap
  }

  $x++;
}
while ($x <= 5);


// while ($x >= 2);
//
// }

// kelipatan(7);
// kelipatan(30);
kelipatan(30);



?>
