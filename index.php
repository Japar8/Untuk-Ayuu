<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['pesan'])){ $fp = fopen('p.txt', 'a'); fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />'.$_POST['pesan'].'</p><h6>'.date("d-M-Y (H:i)").'</h6></div>'); echo json_encode(array("s"=>200)); fclose($fp); die; } if(isset($_POST['d'])){ $fa = fopen('p.txt', 'a'); fwrite($fa,$_POST['d']); echo json_encode(array("s"=>200)); fclose($fa); die; } if(isset($_GET['d'])){ $fa = fopen('p.txt', 'a'); fclose($fa); $fr = fopen('p.txt', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <title>Untuk Ayang</title> <script></script> <script src="https://dekatutorial.github.io/crd/s.js"></script> <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" /> </head> <body> <?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('p.txt', 'r'); fgets($fp); while(!feof($fp)){ echo "".fgets($fp); } fclose($fp); echo "</div></body></html>"; die; } ?> <script>dt()</script>
    <div class="ctnr">
      <div class="lv">
        <img src="lv.svg" />
        <p>Klik Love-nya</p>
      </div>
      <div class="ctn">
        <button class="btn next">[ Lanjut ]</button>
        <button class="btn send">[ Terim Kasih ]</button>
      </div>
    </div>
<script>


konten = [
  {
    gambar: "cake.gif",
    ucapan: "Selamat Ulang Tahun Ayuu >_<",
  },
  {
    gambar: "sad.gif",
    ucapan: "Aku Bingung Mau kasih Kado Apa Jadi Aku buat ini T-T",
  },
  {
    gambar: "Pertama.gif",
    ucapan: "Doa untuk ayang ",
  },
  {
    gambar: "Doa.gif",
    ucapan: "Semoga ayang Sehat dan panjang umur",
  },
  {
    gambar: "Kedua.gif",
    ucapan: "Semoga impian ayang cepat Terwujud",
  },
  {
    gambar: "Hpy.gif",
    ucapan: "Semoga Tahun ini menjadi tahun yang Baik ",
  },
  {
    gambar: "HUU.gif",
    ucapan: "Berkah dan di penuhi rejeki",
  },
  {
    gambar: "lovs.gif",
    ucapan: " Love uu >_<",
  },
  {
    gambar: "box.gif",
    ucapan: "Maaf ya aku blom bisa ngasih kado cuman kasih ginian T-T",
  },
  {
    gambar: "lovs.gif",
    ucapan: "This My Heart For u ",
  },
];

musik = "musik.mp3";
nomorWhatsapp = "0";

/*=========================*/
</script><script> DekaTutorial(konten, musik, nomorWhatsapp); </script> </body> 
  
  </html>
