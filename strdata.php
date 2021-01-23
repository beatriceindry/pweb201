<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

        $varA[] = "Evelyn";
        $varA[] = "Sofyan";
        $varA[] = "Jervin";
        $varA[] = "Beatrice";
        $varA[] = "Heidi Angela";

        $agama = [
          1 => "islam",
          2 => "kristen",
          3 => "katolik",
          4 => "buddha",
          5 => "hindu"
        ];

        $lp = [
          "L" => 'Laki-laki',
          "P" => 'Perempuan'
        ];

        $mhs =[
        ['nim' => '51018002','nama' => 'Beatrice','umur' => 20],
        ['nim' => '51018003','nama' => 'Calvina','umur' => 20],
        ['nim' => '51018004','nama' => 'Charlos','umur' => 20]
      ];
     ?>

     <h1>
       <?= $mhs[2]["nim"]?>
     </h1>
  </body>
</html>
