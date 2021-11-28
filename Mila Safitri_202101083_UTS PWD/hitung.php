<style>
    .isi{
        width: 150px;
    }
</style>
<?php
$nama=$_POST['nama'];
$lama=$_POST['lama'];
$kode_book=$_POST['kode_book']; 
$jumlah=$_POST['jumlah'];   
$jp=$_POST['jp'];
$bed = 75000;

if($kode_book == 1){
    $kode = "AL02102";
    $nama_kamar = "Almanda";
    $lantai = "02";
    $nomor = "102";
    $harga = 450000;
}else if($kode_book == 2){
    $kode = "BG03025";
    $nama_kamar = "Bougenvile";
    $lantai = "03";
    $nomor = "025";
    $harga = 350000;
}else if($kode_book == 3){
    $kode = "CR02111";
    $nama_kamar = "Crysan";
    $lantai = "02";
    $nomor = "111";
    $harga = 375000;
}else{
    $kode = "KM03075";
    $nama_kamar = "Kemuning";
    $lantai = "03";
    $nomor = "075";
    $harga = 425000;
}   

if($jumlah > 2){
    $tambah_bed = ($jumlah - 2) * $bed;
}else{
    $tambah_bed = 0;
}

$total_ex = ($lama * $harga) + $tambah_bed; 

if($jp == 1){
    $jenis = "Kartu Kredit";
    $pot = (2/100) * $total_ex;
    $total = $total_ex + $pot;
    $judul = "Tambahan";
}else if($jp == 2){
    $jenis = "Debbit";
    $pot = (1.5/100) * $total_ex;
    $total = $total_ex - $pot;
    $judul = "Potongan";
}else{
    $jenis = "Cash";
    $pot = 0;
    $total = $total_ex;
    $judul = "Potongan / Tambahan";
}
?>
<form method="POST">
    <table width="750" align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td class="isi"><?php echo $nama; ?></td>
            <td>Kode Booking</td>
            <td>:</td>
            <td class="isi"><?php echo $kode; ?></td>
        </tr>
        <tr>
            <td>Nama Kamar</td>
            <td>:</td>
            <td class="isi"><?php echo $nama_kamar; ?></td>
            <td>Lantai</td>
            <td>:</td>
            <td class="isi"><?php echo $lantai; ?></td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td>:</td>
            <td class="isi"><?php echo $nomor; ?></td>
            <td>Jumlah</td>
            <td>:</td>
            <td class="isi"><?php echo $jumlah; ?> Orang</td>
        </tr>
        <tr>
            <td>Lama</td>
            <td>:</td>
            <td class="isi"><?php echo $lama; ?> Hari </td>
            <td>Jenis Pembayaran</td>
            <td>:</td>
            <td class="isi"><?php echo $jenis; ?></td>
        </tr>
        <tr>
            <td><?php echo $judul; ?></td>
            <td>:</td>
            <td class="isi"><?php echo $pot; ?></td>
            <td>Biaya Spring Bad Tambahan</td>
            <td>:</td>
            <td><?php echo $tambah_bed?></td>
        </tr>
        <tr>
            <td>Total Biaya seluruhnya</td>
            <td>:</td>
            <td class="isi">Rp. <?php echo $total; ?></td>
            <td></td>
            <td></td>
            <td class="isi"></td>
        </tr>
        <tr>
            <td><a href="index.php">Kembali</a></td>
        </tr>
    </table>
</form>