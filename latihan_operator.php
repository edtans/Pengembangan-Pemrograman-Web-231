<?php
    #deklarasi variabel, dimulai tanda '$'
    $nama = 'Edo'; //tipe String
    $bilangan1 = 5; //tipe integer
    $bilangan2 = 2.5; //tipe double

    #cek bilangan genap dan ganjil
    if ($bilangan1 % 2 == 0)
    {
        echo "Genap";
    }
    else
        echo "Ganjil";

    echo "<hr>";
    #PHP Conditional Assignment Operators
    $cetak = $bilangan1 % 2 == 0 ? "Genap" : "Ganjil";
    echo $cetak;

    echo "<hr>";
    #Cara 3: Switch Case
    switch ($bilangan1 % 2)
    {
        case 0:
            echo "Genap";
            break;
        case 1:
            echo "Ganjil";
            break;
    }

    
    


?>