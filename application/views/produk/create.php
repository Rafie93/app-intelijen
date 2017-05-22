<link rel="stylesheet" href="<?=base_url()?>assets/global/css/style.css" />
<style type="text/css">
	.hidden{display:none;}
</style>
 <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" async defer>
	$().ready(function(){
		$("#d_isi").hide();
		$(".d_upload").hide();
		$("input:radio[name=pembuatan]").change(function() {
			if (this.checked && this.value == 'manual') {
				$("#d_isi").show();
				$(".d_upload").hide();
			}else{
				$("#d_isi").hide();
				$(".d_upload").show();
			}
		});
		//
		$("#file_upload-1").change(function() {
			var info =  $('#file_upload-1')[0].files[0];
			$("#file_info-1").val(info.name);
		});

		$("#tambah_berkas").click(function () {
		var jum_berkas = $("#jum_berkas").val();
			var ii = parseInt(jum_berkas) + 1;
			$('#jum_berkas').val(ii);
	    
			$str = '<div id="berkas-'+ii+'" class="form-md-line-input" class="d_upload">'+
                    	'<div class="col-md-2 d_upload">'+
                    		'<label>Upload Berkas '+ii+'</label>'+
                    	'</div>'+
                    	'<div class="col-md-6 d_upload">'+
							'<input class="form-control" onChange="info('+ii+')"  type="file" id="file_upload-'+ii+'" name="file_upload-'+ii+'">'+
                    	'</div>'+
                    	'<div class="col-md-4 d_upload">'+
						'<input class="btn btn-danger" type="button" id="hapus_berkas" onClick="remove_berkas('+ii+')" value="- HAPUS">'+
                    	'</div>'+
						'<input type="hidden" class="fileUpload" id="file_info-'+ii+'" name="file_info-'+ii+'">'+
                    '</div>';
	        $('#berkas').append($str);
	        $(".fileUpload").change(function () {
	            $(this).parent().parent().find('.file').val($(this).val());
	        });
    	});

		//
		 tinymce.init({
		    selector: "textarea",
		    theme: "modern",
		    height: '300px',
		    paste_data_images: true,
		    init_instance_callback: "insert_contents",
		     setup: function (editor) {
          editor.on('change', function () {
              tinymce.triggerSave();
          });
        },
		    plugins: [
		      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
		      "searchreplace wordcount visualblocks visualchars code fullscreen",
		      "insertdatetime media nonbreaking save table contextmenu directionality",
		      "emoticons template paste textcolor colorpicker textpattern"
		    ],
		    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		    toolbar2: "print preview media | forecolor backcolor emoticons",
		    image_advtab: true,
		    file_picker_callback: function(callback, value, meta) {
		      if (meta.filetype == 'image') {
		        $('#upload').trigger('click');
		        $('#upload').on('change', function() {
		          var file = this.files[0];
		          var reader = new FileReader();
		          reader.onload = function(e) {
		            callback(e.target.result, {
		              alt: ''
		            });
		          };
		          reader.readAsDataURL(file);
		        });
		      }
		    },
		    templates: [{
		      title: 'Test template 1',
		      content: 'Test 1'
		    }, {
		      title: 'Test template 2',
		      content: 'Test 2'
		    }]
		  });
		//
	});	
	function insert_contents(inst){
   	 inst.setContent('<strong>Masukan isi laporan disini</strong>');  
	}			
	function remove_berkas(i){
  		$('#berkas-'+i).remove();
	}
	
	function info(i){
		var info =  $('#file_upload-'+i)[0].files[0];
		$("#file_info-"+i).val(info.name);
	}		
	function simpan_data(){
		var jenis = $("input:radio[name=pembuatan]").val();
		var judul = $("#judul").val();
		var tgl = $("#tgl_pembuatan").val();
		
		if (tgl_pembuatan == '') {
			alert('Tanggal Pembuatan Tidak Boleh Kosong');
		}else
		if (jenis == '') {
			alert("Pilih dulu jenis Pembuatan") ;
		}else
		if (judul == '') {
			alert("Judul tidak boleh kosong");
		}
		else {
			$.ajax({
				data 		: $('#form').serialize(),
				secureuri: false,
				dataType 	: "json",
				type 		: "post",
				url 		: "<?php echo base_url('produk/do_upload'); ?>",
				async 		: false,
				success : function(result){
					alert(result);
					$('#form').reset();
				}
			});
					
				
		}
	}					
</script>
<body>
<div id="container">
	<h1>MEMBUAT <?= $judul ?></h1>
	<div id="body">
				<!-- FORM INPUT -->
			 <div class="portlet-body">
                <form id="form" role="form" method="post" action="<?php echo base_url('produk/do_upload'); ?>" class="form-horizontal"  enctype="multipart/form-data" >
                <input type="hidden" name="edit" id="edit"> 
                <input type="hidden" name="jenis_laporan" id="jenis_laporan" value="<?= $jenis?>"> 
                <input type="hidden" name="status" id="status" value="1"> 
                <input type="hidden" name="no_surat" id="no_surat" value="<?= $no_surat?>"> 
				<?php 
				if ($pesan != '' || $pesan != null) { ?>
					<div class="alert alert-info">
					<p>
						<?= $pesan;?>
					</p>
				</div>
				<?}
				?>
                    <div class="form-body">
                     <div class="form-md-line-input">
                   		<div class="col-md-2 ">
                    		 <label  for="">BIDANG</label>
                    	</div>
                       	<div class="col-md-10">
                        <select name="bidang" class="form-control">
                        	<option value=""></option>
                        	<?php 
                        	foreach ($bidang as $bd) { ?>
                        		<option value="<?= $bd->bidang ?>"><?= $bd->bidang ?></option>
                        	<?}
                        	?>
                        </select>
                       	</div>
                    </div>
                    <div class="form-md-line-input">
                        <div class="col-md-2 ">
                    		 <label  for="">TANGGAL</label>
                    	</div>
                    <div class="col-md-10">
                        <input type="text" id="tgl_pembuatan" class="form-control datepickerku" required name="tgl_pembuatan" value="<?= date('Y-m-d') ?>" required>
                       </div>

                    </div>
                      <div class="form-md-line-input">
                      <div class="col-md-2 ">
                        <label for="">JUDUL BERKAS</label>
                        </div>
                           <div class="col-md-10">
                        <input type="text" id="judul" class="form-control" name="judul" required value=""placeholder="Masukkan Judul Berkas" required>
                    </div></div>
                      <div class="form-md-line-input">
                      <div class="col-md-2 ">
                        <label for="">PRIHAL</label></div>
                        <div class="col-md-10">
                         <input type="text" id="prihal" name="prihal" class="form-control" placeholder="Beri narasi secara singkat dan jelas">
                    </div></div>
					
					<div class="form-md-line-input">
						 <div class="col-md-2 "> <label for="">Pilih Jenis Pembuatan</label> </div>
						 <div class="col-md-10"><input type="radio" name="pembuatan" value="upload" id="p_upload">Upload
						<input type="radio" name="pembuatan" value="manual" id="p_manual">Manual
						</div>
					</div>
					  <div class="form-md-line-input">
                        <label for="">CONTOH <?= $judul ?></label>
                        <input type="button" value="downnload">
                    </div>
                    <div class="form-md-line-input" id="d_isi">
                        <label for="">ISI</label>
                        <textarea name="isi" class="form-control"></textarea>
                         <input name="image" type="file" id="upload" class="hidden" onchange="">
                    </div>
                    <div class="form-md-line-input" class="d_upload">
                    	<div class="col-md-2 d_upload">
                    		<label>Upload Berkas 1</label>
                    	</div>
                    	<div class="col-md-6 d_upload">
							<input class="form-control" type="file" id="file_upload-1" name="file_upload-1">
                    	</div>
                    	<div class="col-md-4 d_upload">
							<input class="btn btn-success" type="button" id="tambah_berkas" id="tambah_berkas" value="+ TAMBAH BERKAS">
                    	</div>
						<input type="hidden" class="fileUpload" id="file_info-1" name="file_info-1">
						<input type="hidden" name="jum_berkas" id="jum_berkas" value="1">
						<br>
                    </div>
                     <div id="berkas">
		
					</div>
                    <br>
                    <div class="input-group">
                        <input type="submit"name="btn-simpan" class="btn btn-info" value="SIMPAN">
                        <input type="reset" name="btn-reset" class="btn btn-default" value="RESET">
                    </div>
                   
                </form>
                </br>
			</div>
			
	</div>

</div>

</body>
