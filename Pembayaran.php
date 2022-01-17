<?php
require 'config.php';
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "" , "skuynyetir");
$query  =mysqli_query($conn, "SELECT * FROM pengguna ORDER BY id_pengguna DESC LIMIT 1");
$data = mysqli_fetch_array($query);
//jenispaket();

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="SkuyNyetir​">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Pembayaran.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900|Krona+One:400">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "SkuyNyetir"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Pembayaran">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-5384"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-custom-font u-text u-text-default u-text-1">SkuyNyetir<span style="font-weight: 700;"></span>
        </h1>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-05f4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="17.6%">
              <col width="82.4%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 21px;">
                <th class="u-border-1 u-border-black u-table-cell">DATA DIRI</th>
                <th class="u-border-1 u-border-black u-table-cell"></th>
              </tr>
            </thead>
            <tbody class="u-table-body">
              <tr style="height: 75px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell">Nama</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">
                <?= $data['nama_lengkap']?>
                </td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell">&nbsp;Alamat Rumah</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">
                <?= $data['alamat']?>
                </td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell">No.Hp</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">
                <?= $data['no_telp']?>
                </td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell">Email<br>
                </td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">
                <?= $data['email']?>
                </td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell"> Tempat Lahir</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">
                <?= $data['tempat_lahir']?>
                </td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell">Tanggal Lahir</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">
                <?= $data['tgl_lahir']?>
                </td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell">Jenis Kelamin</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">
                <?= $data['jenis_kelamin']?>
                </td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell">Pengajar</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?= $data['pengajar']?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="u-expanded-width u-table u-table-responsive u-table-2">
          <table class="u-table-entity">
            <colgroup>
              <col width="22.98%">
              <col width="77.02%">
            </colgroup>
            <tbody class="u-table-alt-palette-1-light-3 u-table-body">
              <tr style="height: 90px;">
                <td class="u-border-2 u-border-grey-75 u-table-cell">Berapa Kali Pertemuan</td>
                <td class="u-border-2 u-border-grey-75 u-table-cell"><?= $data['banyak_pertemuan']?>x</td>
              </tr>
              <tr style="height: 90px;">
                <td class="u-border-2 u-border-grey-75 u-table-cell">Jenis Kursus Mobil</td>
                <td class="u-border-2 u-border-grey-75 u-table-cell"><?= $data['transmisi']?></td>
              </tr>
              <tr style="height: 90px;">
                <td class="u-border-2 u-border-grey-75 u-table-cell">Total Biaya</td>
                <td class="u-border-2 u-border-grey-75 u-table-cell"><?= $data['harga']?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <a href="Finish.html" data-page-id="48133506" class="u-btn u-button-style u-hover-palette-1-dark-2 u-palette-1-base u-btn-1">KONFIRMASI PEMBAYARAN</a>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-1891"><div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
        <blockquote class="u-custom-font u-font-titillium-web u-text u-text-default u-text-1"> LIVE FOR DRIVE, DRIVE FOR LIVE</blockquote>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
    </section>
  </body>
</html>