<?php
$proses = $_POST['proses'];
if(!empty($proses)){

    $_nama = $_POST['nama'];
    $_mata_kuliah = $_POST['matakuliah'];
    $_nilaiuts = $_POST['nilai_uts'];
    $_nilaiuas = $_POST['nilai_uas'];
    $_nilaitugas = $_POST['nilai_tugas'];
}
?>

<h3>Daftar Nilai Siswa</h3>
<table border="1" width="100%">
<thead>
<tr>
<th>No</th><th>NAMA</th><th>MATA KULIAH</th><th>NILAI UTS</th>
<th>NILAI UAS</th><th>NILAI TUGAS</th>
</thead>
<tbody>
<?php
  $nomor = 1;
  echo '<tr><td>'.$nomor.'</td><td>'.$_nama.'</td><td>'.$_mata_kuliah.'</td>
  <td align="center">'.$_nilaiuts.'</td><td align="center">'.$_nilaiuas.'</td>
  <td align="center">'.$_nilaitugas.'</td></tr>'
?>
