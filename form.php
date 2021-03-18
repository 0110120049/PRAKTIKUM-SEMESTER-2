<!DOCTYPE html>
<head>
    <title>FORM NILAI SISWA</title>
</head>
<body>
        <form method="POST" action="proses1.php">
Nama :  <input type="text" name="nama" value="" size="30"/><br/>
Mata Kuliah :<select name="matakuliah">
                <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                <option value="Basis Data I">Basis Data I</option>
                <option value="Pemrograman Web">Pemrograman Web</option>
            </select><br/>
Nilai UTS :                <input type="text" name="nilai_uts" value=""size="6"/><br/>
Nilai UAS :                <input type="text" name="nilai_uas" value=""size="6"/><br/>
Nilai Tugas/Praktikum :    <input type="text" name="nilai_tugas"value="" size="6"/><br/>
        <input type="submit" value="Simpan" name="proses"/>
        </form>
</body>
</html>
