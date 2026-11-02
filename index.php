<?php
$nama = "";
$nim = "";
$jurusan = "";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $nim = $_GET['nim'] ?? "";
    $nama = $_GET['nama'] ?? "";
    $jurusan = $_GET['jurusan'] ?? "";
}

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Get</title>
 </head>
 <body>
    <h1>Praktikum Form Get</h1>
    <hr>
    <table style="width: 100%">
        <tbody>
            <tr>
              <th width="100" style="text-align: left;">NIM</th>
              <td width="10">:</td>
              <td>
                <?php echo $nim; ?>
              </td>
            </tr>
            <tr>
              <th width="100" style="text-align: left;">NAMA</th>
              <td width="10">:</td>
              <td>
                <?php echo $nama; ?>
              </td>
            </tr>
            <tr>
              <th width="100" style="text-align: left;">JURUSAN</th>
              <td width="10">:</td>
              <td>
                <?php echo $jurusan; ?>
              </td>
            </tr>
        </tbody>
    </table>
    <hr>

    <!--Form Data-->
    <h2>Form Data</h2>
    <form action="index.php"method="GET">
        <title>NIM</title>
        <p style="margin: 0px;">NIM</p>
        <input type="number" name="nim" id="nim">
        <br>
        <p style="margin: 0px;">Nama</p>
        <input type="text" name="nama" id="nama">
        <br>
        <p style="margin: 0px;">JURUSAN</p>
        <select name="jurusan" id="jurusan">
            <option value="">Pilih Jurusan</option>
            <option value="TI">TI</option>
            <option value="RSK">RSK</option>
            <option value="DKV">DKV</option>
            <option value="BD">BD</option>
        </select>
        <hr>

        <button type="submit">Simpan Data</button>
    </form>
 </body>
 </html>