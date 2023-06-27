<?php 
//1.mengambil data json
$data = file_get_contents("data/provinsi.json");

//2.konversikan dat ajson ke array
$provinsi = json_decode($data, true);
//3.menampilkan array
echo "<option disabled>PILIH</option>";
foreach($provinsi as $key => $value) {
    echo "<option value=".$provinsi[$key]['id'].">";
    echo $provinsi[$key]['name'];
    echo "</option>";
}
?>