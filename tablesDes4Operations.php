<?php include("./exit.php"); ?>

<!doctype html>
<html>
  <head>
    <title>Table d'addition, de soustraction, de multiplication et de division en php</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex" />
    <link href="style.css" rel="stylesheet" media="all" type="text/css">
    <link rel="icon" href="/Images/favicon.ico" />
    <style>
    <? 
    // Afffiche les div les uns à la suite des autres sur une même ligne.
    ?>
    div
    {
       display: table-cell;
    }
    
    </style>
  </head>
  <body>
    <div>
      <table border="1" cellspacing="0">
        <tr>
          <td>
            <b>+</b>
          </td>
        <?php
        for ($i = 0; $i < 10; $i++)
          echo "<td bgcolor=\"#ca2525\">$i</td>";
        echo "</tr>";
        for ($j = 1; $j < 11; $j++)
        {
          echo "<tr><td bgcolor=\"#ca2525\">".$j."</td>";
          for ($k = 0; $k < 10; $k++)
            echo "<td>".($j+$k)."</td>";
          echo "</tr>";
        }
        ?>
      </table>
    </div>
    <div>
      &nbsp;
    </div>
    <div>
      <table border="1" cellspacing="0">
        <tr>
          <td>
           <b>-</b>
          </td>
        <?php
        for ($i = 0; $i < 10; $i++)
          echo "<td bgcolor=\"#ca2525\">".$i."</td>";
        echo "</tr>";
        for ($j = 1; $j < 11; $j++)
        {
          echo "<tr><td bgcolor=\"#ca2525\">".$j."</td>";
          for ($k = 0; $k < 10; $k++)
            echo "<td>".($j-$k)."</td>";
          echo "</tr>";
        }
        ?>
      </table>
    </div>
    <div>
      &nbsp;
    </div>
    <div>
      <table border="1" cellspacing="0">
        <tr>
          <td>
           <b>*</b>
          </td>
        <?php
        for ($i = 0; $i < 10; $i++)
          echo "<td bgcolor=\"#ca2525\">$i</td>";
        echo "</tr>";
        for ($j = 1; $j < 11; $j++)
        {
          echo "<tr><td bgcolor=\"#ca2525\">".$j."</td>";
          for ($k = 0; $k < 10; $k	++)
            echo "<td>".($j*$k)."</td>";
          echo "</tr>";
        }  
        ?>
      </table>
    </div>
    <br>
    <table border="1" cellspacing="0">
      <tr>
        <td>
          <b>/</b>
        </td>
        <?php
        for ($i = 0; $i < 10; $i++)
          echo "<td bgcolor=\"#ca2525\">".$i."</td>";
        echo "</tr>";
        for ($j = 1; $j < 11; $j++)
        {
          echo "<tr><td bgcolor=\"#ca2525\">".$j."</td>";
          for ($k = 0; $k < 10; $k++)
            if ($k == 0) 
           {
              echo "<td align=\"center\" /*bgcolor=\"#685a5a\"*/>-</td>";
           } else {
              echo "<td>".($j/$k)."</td>";
           }
          echo "</tr>";
        }
        ?>
    </table>
    <p class=src><a href="/FichiersTexte/tablesDes4Operations.txt">source php de la page</a></p>
  </body>
</html>
