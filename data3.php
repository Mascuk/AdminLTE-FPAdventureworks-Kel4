<?php
include('koneksi.php'); 


$sql1 = "SELECT p.PName, SUM(sf.order_qty) AS total_qty
FROM sales_fact sf
JOIN product p ON sf.product_id = p.Product_id
GROUP BY p.PName
ORDER BY total_qty DESC;
";

$result1 = mysqli_query($conn, $sql1);

$produk_terjual = array();


while ($row = mysqli_fetch_array($result1)) {
    array_push($produk_terjual,array(
        "nama_produk"=>$row['PName'],
        "total_terjual"=>$row['total_qty'],
    ));
}

$data3 = json_encode($produk_terjual);

?>