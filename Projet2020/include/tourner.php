<?php

//insertion de la connection a la base de données
include 'connectAD.php';

//selection les infos pour la tournée
$sql = "SELECT TRNNUM,TRNDTE,CHFNOM,VEHIMMAT,REMMAT
            FROM tournee,chauffeur
            WHERE tournee.CHFID=chauffeur.CHFID;";

$result = executeSQL($sql);

if($result) {
    while ($row = mysqli_fetch_array($result)) {
        ?>

      <!-- creation des ligne des tournée -->
        <tr>
          <td><?php echo $row['TRNNUM']; ?></td>
          <td><?php echo $row['TRNDTE']; ?></td>
          <td><?php echo $row['CHFNOM']; ?></td>
          <td><?php echo $row['VEHIMMAT']; ?></td>
          <!-- Nouveauté remorque -->
          <td><?php
            $REMMAT = $row['REMMAT'];
            if ($REMMAT = $REMMAT ) {
              echo $row['REMMAT'];
            }
            else {
              echo "AUCUNE";
            }
          ?></td>
          <td>
            <?php
              //ajout de l'info "depart"
              $TRNNUM = $row['TRNNUM'];

              $depart_sql =  "SELECT LIEUNOM
                      FROM lieu,etape
                      WHERE etape.LIEUID = lieu.LIEUID
                      AND etape.TRNNUM = ".$TRNNUM."
                      ORDER BY ETPHREDEBUT ASC;";

              $depart = executeSQL($depart_sql);
              $depart = mysqli_fetch_array($depart);

              echo $depart[0];
            ?>
          </td>

          <td>
            <?php
            //ajout de l'info "arrivee"
              $arrivee_sql =  "SELECT LIEUNOM
                      FROM lieu,etape
                      WHERE etape.LIEUID = lieu.LIEUID
                      AND etape.TRNNUM = ".$TRNNUM."
                      ORDER BY ETPHREDEBUT DESC;";

              $arrivee = executeSQL($arrivee_sql);
              $arrivee = mysqli_fetch_array($arrivee);

              echo $arrivee[0];
            ?>
          </td>

          <td>
            <form id="form_effacer" action="../admin/pages/supprimer.php" method="get">
              <input id="tournee" name="tournee" type="hidden" value="<?php echo "$TRNNUM" ?>" />
              <button id="effacer" name="effacer" type="submit" onclick="if(confirm('Voulez vous vraiment suprimer ?'))
                       show_alert('On suprime');
                       else show_alert('On ne fait rien') ;"
                       value="Supprimer" /><img src="../admin/pages/image/supr.png"></button>
            </form>
          </td>

          <td>
            <form id="AC12" action="index.php?page=AC12_modifier" method="post">
              <input id="tournee" name="tournee" type="hidden" value="<?php echo "$TRNNUM" ?>" />
              <button id="modifier" name="modifier" type="submit" value="Modifier" /><img src="../admin/pages/image/edit2.png"></button>
            </form>
          </td>
        <tr />
      <?php
          }
        }
      ?>
    </table>
