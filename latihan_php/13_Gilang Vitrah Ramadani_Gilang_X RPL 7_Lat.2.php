<?php
$siswa = array(
    ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'],
    ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'],
    ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'],
    ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'],
);
foreach ($siswa as $student) {
    echo $student['nama'];
    echo "<br>";
    echo $student['kelas'] . " " . $student['jurusan'];
    echo "<br>";
    echo "----------";
    echo "<br>";
};


?>

