<?php


class IndexController{

    private function getBoard(){
      $board = new Game();
  
      if(isset($_SESSION["saved_game"])){
        $board->load($_SESSION["saved_game"]);
      }
  
      return $board;
    }
  
    public function home(){
      $board = $this->getBoard();
  
      if($board->getStatus() == "initial"){
        include ("../views/index/initial.php");
    }else{
        include ("../views/index_home.php");
    }


    function home_test(){
        // cree un board
        
    
        // cree ou récupère le joueur
        if(isset($_SESSION["saved_game"])){
          $board->load($_SESSION["saved_game"]);
          $player = $board->getPlayer();
        }else{
          $player = new Player("Jp", "homme");
          $board->addPlayer($player);
        }
    
        $initialPosition = $board->getLocationOf($player);
    
    
        // sauvegarde de l'état
        $_SESSION["saved_game"] = $board->save();
    
        include ("../views/index/initial.php");
      }  
}
}

