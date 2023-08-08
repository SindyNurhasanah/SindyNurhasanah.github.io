<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form pemesanan nasi kotak</title>    
</head>
<body>
       <h1>FORM PEMESANAN NASI KOTAK</h1>
       <td><img src="images.png" width="90" height="90"></td>
       <form method="post" action="">
       <table border="0" align="center">
        <label>Cabang : </label>
        <select name="branch">
            <option value="Cempaka">Cempaka</option>
            <option value="Cisoka">Cisoka </option>
            <option value="Ciamis ">Ciamis </option>
            </select><br>
            <label>Nama Pelanggan:</label>
            <input type="text" name="name"></br>
            <label>Nomor Hp:</label>
            <input type="text" name="phoneNumber"></br>
            <label>Jumlah Pesanan:</label>
            <input type="text" name="quantity"></br>
            <input type="submit" name="submit" value="Pesan">
</form>


 <?php
 if(isset($_POST['submit'])) {
    $branch = $_POST['branch'];
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $quantity = $_POST['quantity'];
    $pricePerItem = 50000; //harga satunya (50 ribu)
    $discountPerItem = 50000;
    $MinimumQuantityForDiscount = 10;
    $totalPriceBeforeDiscount = $pricePerItem * $quantity;
    $totalDiscount = 0;
     if ($quantity > $MinimumQuantityForDiscount) {
        $totalDiscount = $discountPerItem * floor($quantity / $MinimumQuantityForDiscount);
     }
     $totalPriceAfterDiscount = $totalPriceBeforeDiscount -$totalDiscount;

     echo "Pesanan telah diterima :<br>";
     echo "Cabang: " . $branch . "<br>";
     echo "Nama: " . $name , "<br>";
     echo "Nomor Hp: " . $phoneNumber , "<br>";
     echo "Jumlah  : " . $quantity, "<br>";
     echo "Tagihan Awal Sebelum Diskon : Rp " . number_format($totalPriceBeforeDiscount, 0,',', '.') . "<br>";
     
     if ($totalDiscount > 0) {
        echo "Diskon: Rp " . number_format($totalDiscount, 0, ',', '.') . "<br>";
     }
     echo "Tagihan Akhir Setelah Diskon: Rp " . number_format($totalPriceAfterDiscount, 0, ',', '.') . "<br>";
     
 }
 ?>

       </body>
</html>