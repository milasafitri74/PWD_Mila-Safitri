<html>
<head>
    <title>FLORENSIA HOTEL</title>
</head>
    <body>
        <center>
            <h1>Form Input</h1>
            <form method="post" action="hitung.php" style="width: 600px;">
                <table border="0">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input required="" type="text" name="nama" /></td>
                    </tr>
                    <tr>
                        <td>Lama</td>
                        <td>:</td>
                        <td><input required="" type="number" name="lama"/> Hari</td>
                    </tr>
                    <tr>
                        <td>Kode Booking</td>
                        <td>:</td>
                        <td><select name="kode_book" required="">
                            <option value="" selected="selected">Kode Booking
                            <option value="1">AL02102</option>
                            <option value="2">BG03025</option>
                            <option value="3">CR02111</option>
                            <option value="4">KM03075</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td><input type="number" required="" name="jumlah"/> Orang</td>
                    </tr>
                    <tr>
                        <td>Jenis Pembayaran</td>
                        <td>:</td>
                        <td>
                        <select name="jp" required="">
                            <option value="" selected="selected">Pilih Jenis Pembayaran</option>
                            <option value="1">Kartu Kredit</option>
                            <option value="2">Debit</option>
                            <option value="3">Cash</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="submit" value="Proses"/>
                            <input type="reset" value="Hapus"/>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
