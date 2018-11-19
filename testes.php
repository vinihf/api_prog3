<?php
  
  /*Retorna um array em Json
  $jogos = file_get_contents("http://worldcup.sfg.io/matches");
  echo($jogos);
  vamos visualizar em http://jsonviewer.stack.hu/
  */

  /*
  Vamos imprimir informações de cada partida
  
  $jogos = json_decode(file_get_contents("http://worldcup.sfg.io/matches"));

  foreach($jogos as $jogo)
  {
     echo $jogo->{'home_team'}->{'country'}." ".$jogo->{'home_team'}->{'goals'}." x ".$jogo->{'away_team'}->{'goals'}." ".$jogo->{'away_team'}->{'country'}."<br>";
  }*/


  /*$total = 0;
  $contador = 0;
  
  foreach($jogos as $jogo)
  {
    if($jogo->{'status'} == 'completed')
    {
      echo $jogo->{'home_team'}->{'country'}." ".$jogo->{'home_team'}->{'goals'}." x ".$jogo->{'away_team'}->{'goals'}." ".$jogo->{'away_team'}->{'country'}."<br>";
      $total += ($jogo->{'home_team'}->{'goals'}+$jogo->{'away_team'}->{'goals'});
      $contador++;
    }
  }
  
  echo "<br>";
  echo "Total de gols:".$total;
  echo "<br>";
  echo "Média de gols:".($total/$contador);*/
?>