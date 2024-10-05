<?php

Data dalam format Array PHP: Nama Mahasiswa: Figo Ahnaf Kalevi NIM: G.231.22.0093 Usia: 20 Hobi: Ngegame, Tidur, Modif Motor 


// Decode JSON ke dalam array PHP
$arrayData = json_decode(json: $jsonData);

echo "Data dalam format Array PHP: ";

// Loop melalui array dan cetak key-value tanpa tanda panah
foreach ($arrayData as $key => $value) {
    // Jika value adalah array (misalnya, Hobi), cetak item satu per satu
    if (is_array(value: $value)) {
        echo $key. ": " . implode(separator: ", ", array: $value) . " ";
    } else {
        echo $key . ": " . $value. " ";
    }
}
?>

    // Jika value adalah array (misalnya, Hobi), cetak item satu per satu
    
    if (is_array(value: $value)) {
    
    echo $key.":" implode (separator: ", ", array: $value). "";
    
    } else {
    
    echo $key. ": " $value. "";
    
    }
    
    }
