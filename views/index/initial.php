<?php include ("../views/head.php"); ?>
<h1>BLACK JACK!</h1>

<?php if(count($board->getPlayers())):?>
  <h3>Liste des joueurs</h3>
  <ul>
    <?php foreach($board->getPlayers() as $player):?>
      <li>
        <?php echo $player->name; ?>
        (<?php echo $player->token; ?>)
        
      </li>
    <?php endforeach;?>
  </ul>
<?php else:?>
  <em>Pas encore de joueurs inscrits</em>
<?php endif;?>

<h3>Ajouter un joueur</h3>

<form method="post" action="/?controller=play&action=new_player">
  <input type="text" name="player_name">
  <select name="player_token">
    <option value="homme">Homme</option>
    <option value="femme">Femme</option>
  </select>
  <button type="submit">Ajouter</button>

</form>
<h3>Pret ??</h3>
<form>
  <button type="submit">Commencer la partie !</button>
</form>

<?php include("../views/foot.php"); ?>