<?php
//koneksi database
require 'config.php';
if(isset($_GET['P01'])){
    $query1;
  }else if(isset($_GET['P02'])){
    $query2;
    }else if(isset($_GET['P03'])){
        $query3;
        }else if (isset($_GET['P04'])){
            $query4;
            }else if (isset($_GET['P05'])){
              $query5;
              }else if (isset($_GET['P06'])){
                $query6;
};

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="SkuyNyetir​, Pricing Plans, Free, $49.99">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Paket</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Paket.css" media="screen">
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
    <meta property="og:title" content="Paket">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-5384"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-custom-font u-text u-text-default u-text-1">SkuyNyetir<span style="font-weight: 700;"></span>
        </h1>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-14d2" data-image-width="480" data-image-height="480">
    <form action="" method="get">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">PILIH KURSUS MOBIL</h2>
        <p class="u-text u-text-2">Silakan pilih sesuai dengan yang anda inginkan</p>
        <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row" style="">
              <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" data-image-width="1280" data-image-height="853">
                <div class="u-border-5 u-border-grey-25 u-container-layout u-container-layout-1">
                  <h4 class="u-align-center u-text u-text-body-alt-color u-text-3">KURSUS MATIC</h4>
                  <div class="u-align-center u-container-style u-gradient u-group u-shape-rectangle u-group-1">
                    <div class="u-container-layout u-container-layout-2">
                      <h4 class="u-text u-text-default u-text-4">6x Pertemuan</h4>
                      <p class="u-text u-text-default u-text-5">1 Februari 2022 - 14 Maret 2022</p>
                      <h5 class="u-text u-text-default u-text-6">Rp800.000</h5>
                      <button type="submit" id="P04" name="P04" class="u-btn u-button-style u-btn-1">Pilih</buttom>
                    </div>
                  </div>
                  <div class="u-align-center u-container-style u-gradient u-group u-shape-rectangle u-group-2">
                    <div class="u-container-layout u-container-layout-3">
                      <h4 class="u-text u-text-default u-text-7">8x Pertemuan</h4>
                      <p class="u-text u-text-default u-text-8">1 Februari 2022 - 30 Maret 2022</p>
                      <h5 class="u-text u-text-default u-text-9">Rp1.000.000</h5>
                      <button type="submit" id="P05" name="P05" class="u-btn u-button-style u-btn-1">Pilih</buttom>
                    </div>
                  </div>
                  <div class="u-align-center u-container-style u-gradient u-group u-shape-rectangle u-group-3">
                    <div class="u-container-layout u-valign-bottom u-container-layout-4">
                      <h4 class="u-text u-text-default u-text-10">10x Pertemuan</h4>
                      <p class="u-text u-text-default u-text-11">1 Februari 2022 - 14 April 2022</p>
                      <h5 class="u-text u-text-default u-text-12">Rp1.300.000</h5>
                      <button type="submit" id="P06" name="P06" class="u-btn u-button-style u-btn-1">Pilih</buttom>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-container-style u-image u-layout-cell u-size-30 u-image-2" data-image-width="1280" data-image-height="853">
                <div class="u-border-5 u-border-grey-25 u-container-layout u-container-layout-5">
                  <h4 class="u-align-center u-text u-text-body-alt-color u-text-13">KURSUS MANUAL<span style="font-weight: 700;"></span>
                  </h4>
                  <div class="u-align-center u-container-style u-gradient u-group u-shape-rectangle u-group-4">
                    <div class="u-container-layout u-container-layout-6">
                      <h4 class="u-text u-text-default u-text-14">6x Pertemuan</h4>
                      <p class="u-text u-text-default u-text-15">1 Februari 2022 - 14 Maret 2022</p>
                      <h5 class="u-text u-text-default u-text-16">Rp700.000</h5>
                      <button type="submit" id="P01" name="P01" class="u-btn u-button-style u-btn-1">Pilih</buttom>
                    </div>
                  </div>
                  <div class="u-align-center u-container-style u-gradient u-group u-shape-rectangle u-group-5">
                    <div class="u-container-layout u-container-layout-7">
                      <h4 class="u-text u-text-default u-text-17">8x Pertemuan</h4>
                      <p class="u-text u-text-default u-text-18">1 Februari 2022 - 30 Maret 2022</p>
                      <h5 class="u-text u-text-default u-text-19">Rp900.000</h5>
                      <button type="submit" id="P02" name="P02" class="u-btn u-button-style u-btn-1">Pilih</buttom>
                    </div>
                  </div>
                  <div class="u-align-center u-container-style u-gradient u-group u-shape-rectangle u-group-6">
                    <div class="u-container-layout u-container-layout-8">
                      <h4 class="u-text u-text-default u-text-20">10x Pertemuan</h4>
                      <p class="u-text u-text-default u-text-21">1 Februari 2022 - 14 April 2022</p>
                      <h5 class="u-text u-text-default u-text-22">Rp1.200.000</h5>
                      <button type="submit" id="P03" name="P03" class="u-btn u-button-style u-btn-1">Pilih</buttom>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="Registrasi.php" data-page-id="76393785" class="u-btn u-button-style u-btn-2">NEXT PAGE</a>
      </div>
    </form>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-1891"><div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
        <blockquote class="u-custom-font u-font-titillium-web u-text u-text-default u-text-1"> LIVE FOR DRIVE, DRIVE FOR LIVE</blockquote>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>