<?php 
//1.mengambil data json
$data = file_get_contents("data/kabupaten.json");

//2.konversikan data json ke array
$provinsi = $_POST['province_id']; // menerima data yang dikirimkan
$kabupaten = json_decode($data, true);
//3.menampilkan array
echo "<option disabled>PILIH</option>";

foreach($kabupaten as $key => $value) {
    if ($kabupaten[$key]['province_id'] == $provinsi) {
        //jika PROVINCE_ID sama dengan data Yang dikirim
        echo "<option value=".$kabupaten[$key]['id'].">";
        echo $kabupaten[$key]['name'];
        echo "</option>";
}
}
?>