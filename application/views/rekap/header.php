<?php
$dt_kop = $this->model->getKop();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Laporan</title>
    <style type="text/css">
    #tabel_ttd td{padding:0;}
    body {
      font-family: "Arial" ;
      font-size: 12px;
      border: 1px solid;
      padding: 0px 20px;
    }

    h2 {
      text-align: center;
      text-decoration: underline;
      margin-bottom: 10px;
    }
    h3{
      text-align: left;
      margin-bottom: 10px;
    }

    td {
      height:25px;
      text-align: center;
    }

    .isi_form {
      width: 100%;
      font-size: 11px;
    }

    .isi_form td {
      text-align: left;
      vertical-align: top;
    }

    .tebal {
      font-weight: bold;
    }

    .atas {
      border: none;
      border-left: 1px solid;
      border-right: 1px solid;
      border-bottom: 1px solid;
    }

    .samping {
      border: none;
      border-left: 1px solid;
      border-right: 1px solid;
    }

    .bawah {
      border: none;
      border-left: 1px solid;
      border-right: 1px solid;
      border-top: 1px solid;
    }

    .semua {
      border: 1px solid;
    }

    table {
      margin-bottom: 15px;
      font-size: 10px;
    }
    .zebra-table {
    width: 100%;
    border-collapse: collapse;
    overflow: hidden;
    }
    .zebra-table th,.zebra-table td{
    vertical-align: top;
    padding:6px 6px;
    text-align: left;
    margin:0;
    }
    .zebra-table tbody tr:nth-child(odd) { /* Make table like zebra */
    background:#eee;
    }
  </style>
</head>
<body>

  <table width="100%" align="center">
  <tr>
    <td width="10%">
    <?php 
    $gambar = $dt_kop->logo_kop;
    if ($gambar != '' || $gambar != null) { ?>
      <img src="<?=base_url('assets/gambar/'.$gambar);?>" border="0" width="90" height="80" style="margin-top:50px;"> 
    <?}
    ?>
      
    </td>
    <td width="80%">
      <br /><br />
      <font size="3" style="font-family:Arial;">
        <b>
          <?= strtoupper($dt_kop->judul_kop) ?>
        </b>
      </font>
      <br />
      <font size="3" style="font-family:Arial;">
        <b>
          <?= strtoupper($dt_kop->desc_kop) ?>
        </b>
      </font>
      <br />  
      <font size="2">
        <?= ($dt_kop->alamat) ?>
      </font>
      <br />  
      <font size="2">
  <!--      Telepon&nbsp;<img src="" height="10" width="10" style="margin-top:3px;">&nbsp;+62 511 304592
   -->  </font>
      <br />  
      <font size="2">
    
      </font>
      <br/>
    
    </td>
    <td width="10%">
    </td>
  </tr>
</table>
<hr />