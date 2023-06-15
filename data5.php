<?php
include('koneksi.php');

$sql = "SELECT vendor_id, COUNT(*) as total_barang
FROM nama_tabel
GROUP BY vendor_id
ORDER BY total_barang DESC
LIMIT 1";
$result = mysqli_query($conn,$sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil,array(
        "name"=>$row['kategori'],
        "total"=>$row['total'],
        "y"=>$row['persentase']
    ));
}

$data5 = json_encode($hasil);

?>