<?php 
//1.mengambil data json
$data = file_get_contents("data/kecamatan.json");

//2.konversikan dat ajson ke array
$kabupaten = $_POST['regency_id']; // menerima data yang dikirimkan
$kecamatan = json_decode($data, true);
//3.menampilkan array
echo "<option disabled>PILIH</option>";
foreach($kecamatan as $key => $value) {
    if ($kecamatan[$key]['regency_id'] == $kabupaten) {
    echo "<option value=".$kecamatan[$key]['id'].">";
    echo $kecamatan[$key]['name'];
    echo "</option>";
}
}
?>