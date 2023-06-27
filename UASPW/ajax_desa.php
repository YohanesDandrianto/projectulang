<?php 
//1.mengambil data json
$data = file_get_contents("data/desa.json");

//2.konversikan dat ajson ke array
$kecamatan = $_POST['district_id']; // menerima data yang dikirimkan
$desa = json_decode($data, true);
//3.menampilkan array
echo "<option disabled>PILIH</option>";

foreach($desa as $key => $value) {
    if ($desa[$key]['district_id'] == $kecamatan) {
    echo "<option value=".$desa[$key]['id'].">";
    echo $desa[$key]['name'];
    echo "</option>";
}
}
?>