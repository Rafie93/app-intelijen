<head>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>

<body>
 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
             <h1><?= str_replace('%20', ' ', $judul) ?>
                 <small><?= str_replace('%20', ' ', $sub_judul) ?></small>
             </h1>
       </div>
</div>

<div id="container">
	<h1>PENJELASAN <?= str_replace('%20', ' ', $judul) ?></h1>

	<div id="body">
	<div class="portlet-body">
	<?php 
	  $no = 1 ;
	 foreach ($row as $data) { ?>
	 	<h1>PENGERTIAN</h1>
	 	<code>
	 		<?= $no .")". $data->pengertian ;?>	
	 	</code>
	 	<h1>MATERI</h1>
	 	<code>
	 		<?= $no .")". $data->materi ;?>	
	 	</code>
	 	<h1>FORMAT</h1>
	 	<code>
	 		<?= $no .")". $data->format ;?>	
	 	</code>
	 	<h1>DISTRIBUSI</h1>
	 	<code>
	 		<?= $no .")". $data->distribusi ;?>	
	 	</code>

	 	<h1>PENANGGUNG JAWAB</h1>
	 	<code>
	 		<?=  $data->penanggung_jawab ;?>	
	 	</code>


	 <? $no++ ;}
	?>
		
		
		
	</div>
		
		
	</div>

</div>

</body>
