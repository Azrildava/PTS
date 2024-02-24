<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRE</title>
</head>
<body>
    <center>
        <h2>Form Biodata Diri</h2>
        <!-- form -->
        <form method = "REQUEST" action="hasil.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type = 'text' name = 'nama'></td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td>
                        <select name="jk" >
                        <option value="......"></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                        </select>
                </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type = 'date' name = 'tanggal_lahir'></td>
                
                </tr>
                <tr>
                    <td>Olahraga</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="olahraga" value="sepakbola">Sepak bola <br>
                        <input type="radio" name="olahraga" value="bulutangkis">Bulu tangkis <br>
                        <input type="radio" name="olahraga" value="berenang">Berenang <br>
                    </td>
                </tr>
                <tr>
                    <td>Pilihan kelas</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="kelas" value="pemula">pemula <br>
                        <input type="checkbox" name="kelas" value="menengah">Menengah <br>
                        <input type="checkbox" name="kelas" value="lanjutan">Lanjutan <br>
                    </td>
                </tr>
                <tr>
                    <td>kemampuan fisik</td>
                    <td>:</td>
                    <td><textarea name="kemampuan"></textarea></td>
                </tr>
                <tr>
                    <td>metode pembayaran</td>
                    <td>:</td>
                    <td>
                        <select name="metode">
                            <option value="....."></option>
                            <option value="Dana">Dana</option>
                            <option value="Gopay">Gopay</option>
                            <option value="Bank">Bank</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><input type = "submit" name = "simpan" value = 'kirim'></td>
                </tr>
            </table>
</form>
    </center>
</body>
</html>