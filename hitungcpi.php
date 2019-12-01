<!DOCTYPE html>
<html lang="en">
<?php
    include('koneksi.php');
?>

<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
        <div class="container mx-auto">
            <h2>Tambah Data Baru</h2>
            <form action="hitungcpi.php" method="POST" class="form-group row">
                Kota : <input type="text" name="kota" class="form-control"><br>
                Jenis : <input type="text" name="jenis" class="form-control"><br>
                Jumlah: <input type="text" name="jumlah" class="form-control"><br>
                Biaya : <input type="text" name="biaya" class="form-control"><br>
                Rekomendasi : <input type="text" name="rekomendasi" class="form-control"><br>
                Deskripsi : <input type="text" name="deskripsi" class="form-control"><br>
                Gambar : <input type="text" name="gambar" class="form-control"><br>
                c11 : 
                <select class="form-control" id="c11" name="c11">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                c12 : 
                <select class="form-control" id="c12" name="c12">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                c13 : 
                <select class="form-control" id="c13" name="c13">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                c14 : 
                <select class="form-control" id="c14" name="c14">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                c21 : 
                <select class="form-control" id="c21" name="c21">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                c22 : 
                <select class="form-control" id="c22" name="c22">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                c23 : 
                <select class="form-control" id="c23" name="c23">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                c24 : 
                <select class="form-control" id="c24" name="c24">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                c31 : 
                <select class="form-control" id="c31" name="c31">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                c32 : 
                <select class="form-control" id="c32" name="c32">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                c33 : 
                <select class="form-control" id="c33" name="c33">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br>
                <?php echo "<br>";?>
                <div class="container mx-auto">
                    <input type="submit" name="hitungCPI" value="Hitung CPI" class="btn btn-info">
                    <input type="reset" value="Batal" class="btn btn-warning">
                    <input type="submit" name="tambahData" value="Tambah Data" class="btn btn-success">
                </div>
            </form>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
    $kota = $_POST['kota'];
    $jenis = $_POST['jenis'];
    $jumlah = $_POST['jumlah'];
    $biaya = $_POST['biaya'];
    $rekomendasi = $_POST['rekomendasi'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];
    $c11 = $_POST['c11'];
    $c12 = $_POST['c12'];
    $c13 = $_POST['c13'];
    $c14 = $_POST['c14'];
    $c21 = $_POST['c21'];
    $c22 = $_POST['c22'];
    $c23 = $_POST['c23'];
    $c24 = $_POST['c24'];
    $c31 = $_POST['c31'];
    $c32 = $_POST['c32'];
    $c33 = $_POST['c33'];
    $cpi = $_POST['cpi'];

    if(isset($_POST['hitungCPI'])){
        $hasilcpi = ((($c11 / 1)*100)*0.4)+ ((($c12 / 1)*100)*0.4)+((($c13 / 1)*100)*0.4)+((($c14 / 1)*100)*0.4)+((($c21 / 1)*100)*0.3)+((($c22 / 1)*100)*0.3)+((($c23 / 1)*100)*0.3)+((($c24 / 1)*100)*0.3)+(((1 / $c31)*100)*0.3)+(((1 / $c32)*100)*0.3)+(((1 / $c33)*100)*0.3);
        echo '
        <div class="container mx-auto"><form action="hitungcpi.php" method="POST" class="form-group row">
                Kota : <input type="text" name="kota" class="form-control" value="'.$kota.'"><br>
                Jenis : <input type="text" name="jenis" class="form-control" value="'.$jenis.'"><br>
                Jumlah: <input type="text" name="jumlah" class="form-control" value="'.$jumlah.'"><br>
                Biaya : <input type="text" name="biaya" class="form-control" value="'.$biaya.'"><br>
                Rekomendasi : <input type="text" name="rekomendasi" class="form-control" value="'.$rekomendasi.'"><br>
                Deskripsi : <input type="text" name="deskripsi" class="form-control" value="'.$deskripsi.'"><br>
                Gambar : <input type="text" name="gambar" class="form-control" value="'.$gambar.'"><br>
                c11 : 
                <input type="number" id="c11" name="c11" value="'.$c11.'"><br>
                c12 : 
                <input type="number" id="c12" name="c12" value="'.$c12.'"><br>
                c13 : 
                <input type="number" id="c13" name="c13" value="'.$c13.'"><br>
                c14 : 
                <input type="number" id="c14" name="c14" value="'.$c14.'"><br>
                c21 : 
                <input type="number" id="c21" name="c21" value="'.$c21.'"><br>
                c22 : 
                <input type="number" id="c22" name="c22" value="'.$c22.'"><br>
                c23 : 
                <input type="number" id="c23" name="c23" value="'.$c23.'"><br>
                c24 : 
                <input type="number" id="c24" name="c24" value="'.$c24.'"><br>
                c31 : 
                <input type="number" id="c31" name="c31" value="'.$c31.'"><br>
                c32 : 
                <input type="number" id="c32" name="c32" value="'.$c32.'"><br>
                c33 : 
                <input type="number" id="c33" name="c33" value="'.$c33.'"><br>

                cpi : <input type="text" name="cpi" value="'.$hasilcpi.'" class="form-control"><br>
                <?php echo "<br>";?>
                <div class="container mx-auto">
                    <input type="submit" name="hitungCPI" value="Hitung CPI" class="btn btn-info">
                    <input type="reset" value="Batal" class="btn btn-warning">
                    <input type="submit" name="tambahData" value="Tambah Data" class="btn btn-success">
                </div>
            </form></div>        
        ';
    }

    if(isset($_POST['tambahData'])){
        $sql = "INSERT INTO tb(kota, jenis, jumlah, biaya, rekomendasi, deskripsi, gambar, c11, c12, c13, c14, c21, c22, c23, c24, c31, c32, c33, cpi)
        VALUES ('$kota', '$jenis', '$jumlah', '$biaya', '$rekomendasi', '$deskripsi', '$gambar', '$c11', '$c12', '$c13', '$c14', '$c21', '$c22', '$c23', '$c24', '$c31', '$c32', '$c33', '$cpi')";

        if (mysqli_query($con, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
 
?>