<?php
/*
Mau Recode Lu ? mikir makan nya ajg:v??
*/
echo "

\033[1;32m@@@@@@@@@@@@@@@@@@@@@@@@@@@@
\033[1;32m@ TOMBOL KANAK-KIRI TERMUX       @
\033[1;32m@ AUTHOR BY : ./PLISEC_290   @
\033[1;32m@ MY TEAM : GalaxyXploiterTeam    @
\033[1;32m@@@@@@@@@@@@@@@@@@@@@@@@@@@@
";



echo "\e[0;36m TEKAN ENTER UNTUK MENGAKTIFKAN PROGRAM\n MEMULAI : ";
$gaada = trim(fgets(STDIN));
$dir = "/data/data/com.termux/files/home/.termux";
$file_to_write = 'termux.properties';
$content_to_write = "extra-keys = [['ESC','/','-','HOME','UP','END','PGUP'],['TAB','CTRL','ALT','LEFT','DOWN','RIGHT','PGDN']]";
if( is_dir($dir) === false )
{
    mkdir($dir);
}
$file = fopen($dir . '/' . $file_to_write,"w");
fwrite($file, $content_to_write);
fclose($file);
include $dir . '/' . $file_to_write;
system('termux-reload-settings');
system("clear");
echo "\e[0;41m  //////////////////////////
 // [+] BERHASIL 100% [+] //
////////////////////////////\e[0;36m

  SILAHKAN LOGIN ULANG TERMUX ANDA ^_^
  \033[1;32m@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
  @ \033[1;32mAUTHOR BY: ./PLISEC_290       @
  @ \033[1;32mMY TEAM  : GalaxyXploiterTeam   @
  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
\033[1;31mTHANKS TO : GALAXI CYBER ANONYMOUS , UMC , WOTSEC , ST45T
\033[1;31m AND THANKS TO : ALL CYBER ID
";
?>
