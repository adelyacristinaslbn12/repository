<html>
    <body>
<?php
$total_nilai=80;
//syntx
if($total_nilai>=100){
    echo"Selamat anda mendapatkan peringkat 1";
}else if($total_nilai>=90) {
    echo "Selamat anda mendapatkan peringkat 2";
}else{
    echo"Selamat anda mendapatkan peringkat 3";
}
echo "<br>";
$total_belanja=200000;
//syntx
if($total_belanja>=250000){
    echo"Selamat anda mendapatkan diskon sebesar 5%";
}else if($total_belanja>=150000) {
    echo "Selamat anda mendapatkan diskon sebesar 3%";
}else{
    echo"Anda tidak mendapatkan diskon";
}
echo "<br>";
$matkul=3;
//syntx
if($matkul==1){
    echo"Statistika";
}else if($matkul==2) {
    echo "Desaign Web";
}else{
    echo"Pemrograman Web";
}
echo "<br>";
$nilai=95;
//syntx
if($nilai>=90){
    echo"Selamat anda melewati ambang batas";
}else if($nilai>=80) {
    echo "Selamat anda diposisi rata-rata";
}else{
    echo"Mohon maaf anda tidak lulus";
}
echo "<br>";
$nama="Cristina";
//syntx
if($nama=="Cristina"){
    echo"Selamat datang Cristina";
}else if($nama=="Mazmur") {
    echo "Nama anda tidak terdeteksi";
}else{
    echo"Silahkan coba lagi";
}

?>
</body>
</html>