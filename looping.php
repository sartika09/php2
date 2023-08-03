<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
    
        echo "<h5>LOOPING PERTAMA</h5>";

        $y = 2;

        do{
            echo "$y -I Love PHP<br>";
            $y++;
        }
        while ($y++ < 21);

        echo "<h5>LOOPING KEDUA</h5>";

        $y = 20;

        do{
            echo "$y -I Love PHP<br>";
            $y--;
        }
        while ($y-- >1);

        
        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);
        echo "<br>";

        $rest = array();
        foreach ($numbers as $numbers) {
            $rest[] = $numbers % 5;
        }

        echo "<br>";
        echo "Array sisa baginya adalah:  "; 
        echo "<br>";

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";

        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];

        foreach ($items as $item) {
            $itemAssoc =[
               'id' => $item [0],
               'name' => $item[1],
               'price' => $item[2],
               'description' => $item[3],
               'source' => $item[4],
           ];
 
           print_r($itemAssoc);
           echo "<br>";
       }
        
        // Output: 
        
        echo "<h3>Soal No 4 Asterix </h3>";

        for ($i = 1; $i <=5; $i++) {
          // inner loop for asterisks in each row
          for ($j = 1; $j <= $i; $j++){
              echo "* ";
          }
          echo "<br>";
      }
        /* 
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
            Output: 
            * 
            * * 
            * * * 
            * * * * 
            * * * * *
        */
        echo "Asterix: ";
        echo "<br>";        
    ?>

</body>
</html>