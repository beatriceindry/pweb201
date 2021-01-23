<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>
    <?php
    if (isset ($_GET['max'])) {
      $max = $_GET['max'];
    } else {
      $max = 10;
    }
    if ($max > 10) {
      $max = 10;
    }
     ?>
     <h1>Tabel Perkalian</h1>
    <table border='0' cellspacing='0' cellpadding='5'>
      <tr>
      <?php
      for ($b=1; $b <= $max ; $b++) {
        ?>
        <td>
          <table border='1' cellspacing='0' cellpadding='5'>
            <?php
            for ($c=1; $c <=10 ; $c++) {
              echo "<tr>";
              echo "<td align='center'>" . $c . " x " . $b . " = " . $c * $b . "</td>";
              echo "</tr>";
            }
             ?>
          </table>
        </td>
        <?php
      }
      ?>
    </tr>
   </table>
  </body>
</html>
