<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pencatatan Data Penjualan</title>
</head>
<body>
    <h2>Sistem Pencatatan Data Penjualan</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data input
        $product1_name = $_POST['product1_name'];
        $price1 = $_POST['price1'];
        $quantity1 = $_POST['quantity1'];
        $total1 = $price1 * $quantity1;

        $product2_name = $_POST['product2_name'];
        $price2 = $_POST['price2'];
        $quantity2 = $_POST['quantity2'];
        $total2 = $price2 * $quantity2;

        $product3_name = $_POST['product3_name'];
        $price3 = $_POST['price3'];
        $quantity3 = $_POST['quantity3'];
        $total3 = $price3 * $quantity3;

        // Total penjualan
        $total_quantity = $quantity1 + $quantity2 + $quantity3;
        $total_sales = $total1 + $total2 + $total3;

        // Tampilkan laporan penjualan
        echo "
        <h2>Laporan Penjualan:</h2>
        <table border='1' cellpadding='5' cellspacing='0'>
            <tr>
                <th>Nama</th>
                <th>Harga Per Produk</th>
                <th>Jumlah Terjual</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>{$product1_name}</td>
                <td>{$price1}</td>
                <td>{$quantity1}</td>
                <td>{$total1}</td>
            </tr>
            <tr>
                <td>{$product2_name}</td>
                <td>{$price2}</td>
                <td>{$quantity2}</td>
                <td>{$total2}</td>
            </tr>
            <tr>
                <td>{$product3_name}</td>
                <td>{$price3}</td>
                <td>{$quantity3}</td>
                <td>{$total3}</td>
            </tr>
            <tr>
                <td colspan='2'>Total Penjualan</td>
                <td>{$total_quantity}</td>
                <td>{$total_sales}</td>
            </tr>
        </table>";
    } else {
        // Tampilkan form input
        echo "
        <form method='post' action=''>
            <h3>Form Input untuk Data Penjualan</h3>

            <label for='product1'>Nama Produk A:</label>
            <input type='text' name='product1_name' value='Produk A' readonly><br>

            <label for='price1'>Harga per Produk A:</label>
            <input type='number' name='price1' value='10000' required><br>

            <label for='quantity1'>Jumlah Terjual Produk A:</label>
            <input type='number' name='quantity1' value='5' required><br><br>

            <label for='product2'>Nama Produk B:</label>
            <input type='text' name='product2_name' value='Produk B' readonly><br>

            <label for='price2'>Harga per Produk B:</label>
            <input type='number' name='price2' value='7500' required><br>

            <label for='quantity2'>Jumlah Terjual Produk B:</label>
            <input type='number' name='quantity2' value='10' required><br><br>

            <label for='product3'>Nama Produk C:</label>
            <input type='text' name='product3_name' value='Produk C' readonly><br>

            <label for='price3'>Harga per Produk C:</label>
            <input type='number' name='price3' value='12000' required><br>

            <label for='quantity3'>Jumlah Terjual Produk C:</label>
            <input type='number' name='quantity3' value='8' required><br><br>

            <input type='submit' value='Kirim'>
        </form>";
    }
    ?>

</body>
</html>