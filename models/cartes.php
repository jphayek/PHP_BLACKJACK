


<?php
session_start();
$jeu=array("as"=>11,
2=>2,
3=>3,
4=>4,
5=>5,
6=>6,
7=>7,
8=>8,
9=>9,
10=>10,
"valet"=>10,
"dame"=>10,
"roi"=>10);
?>
<form method="post" action="">
<?php
if(isset($_POST['new'])){
    unset($_SESSION["joueur"]);
    unset($_SESSION["croupier"]);
}
if($_SESSION["joueur"]["jeu"]==""){
   $carte=array_rand($jeu);
   $_SESSION["croupier"]["jeu"][]=$carte;
   $_SESSION["croupier"]["point"]+=$jeu[$carte];
   $carte=array_rand($jeu);
   $_SESSION["joueur"]["jeu"][]=$carte;
   $_SESSION["joueur"]["point"]+=$jeu[$carte];
}
if(isset($_POST['carte'])){
   $carte=array_rand($jeu);
   $_SESSION["joueur"]["jeu"][]=$carte;
   if($carte=="as"){
      $_SESSION["joueur"]["point"]=test_as($_SESSION['joueur']["point"]);
   }else{
      $_SESSION["joueur"]["point"]+=$jeu[$carte];
   }
   if($_SESSION["joueur"]["point"]>21)
      echo "<br/>".$_SESSION["joueur"]["point"]." <strong>points, vous avez perdu</strong><br/>";
}
if(isset($_POST["reste"])){
   while($_SESSION["croupier"]["point"]<17){
      $carte=array_rand($jeu);
      $_SESSION["croupier"]["jeu"][]=$carte;
      if($carte=='as'){
         $_SESSION["croupier"]["point"]=test_as($_SESSION["croupier"]["point"]);
      }else{
         $_SESSION["croupier"]["point"]+=$jeu[$carte];
      }
      if($_SESSION["croupier"]['point']>21){
         echo "<br/>".$_SESSION["croupier"]["point"]." points, le croupier a perdu<br/>";
      }
      if($_SESSION["croupier"]["point"]< $_SESSION["joueur"]["point"]){
         echo "<br/>le croupier a perdu<br/>";
      }else{
         echo "<br/>vous avez perdu<br/>";
      }
   }
}
?>
<p style="color:red;
font-size:30px;">le croupier :</p>
<?php
foreach($_SESSION["croupier"]["jeu"] as $value){
  echo $value." , "; 
}
echo "<br/>";
echo "point du croupier :".$_SESSION["croupier"]['point'];
echo "<br/>";
?>
<p style="font-size:30px;
color:yellow;">votre jeu :</p>
<?php
foreach($_SESSION['joueur']["jeu"] as $value){
  echo $value." , ";
 
}
?>
<input type="submit" name="carte" value= "carte" style="    width: 155px;
    height: 35px;
    border-radius: 50px;
    font-size: 25px;
    color: yellow"/>
<input type="submit" name="reste" value= "reste" style="    width: 155px;
    height: 35px;
    border-radius: 50px;
    font-size: 25px;
    color: red" />
<input type="submit" name="new" value= "nouvelle partie" style="    width: 155px;
    height: 35px;
    border-radius: 50px;
    font-size: 20px;
    color: cornflowerblue"/>
</form>
<?php
function test_as($total){
   if($total+11>21)
     return $total+=1;
   else
   return $total+=11;
}




