<link rel="stylesheet" href="<?=base_url()?>assets/global/css/style.css" />
<style type="text/css">
  .hidden{display:none;}
</style>
 <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" async defer>
  $().ready(function(){   
    //
    $("#file_upload-1").change(function() {
      var info =  $('#file_upload-1')[0].files[0];
      $("#file_info-1").val(info.name);
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
  }     
  function remove_berkas(i){
      $('#berkas-'+i).remove();
  }
  
  function info(i){
    var info =  $('#file_upload-'+i)[0].files[0];
    $("#file_info-"+i).val(info.name);
  }   
  function batal () {
     $("#penanggung").val('');
     $("#penjelasan").val('');
     $("#materi").val('');
     $("#format").val('');
     $("#distribusi").val('');
     $("#edit").val('');
  }
  function simpan_data(){
    var jenis = $("#jenis_laporan").val();
    var penanggung = $("#penanggung").val();
    var penjelasan = $("#penjelasan").val();
    var materi = $("#materi").val();
    var format = $("#format").val();
    var distribusi = $("#distribusi").val();
    var edit = $("#edit").val();

    if (jenis == '') {
      alert("Pilih dulu jenis laporan") ;
    }else
    if (penanggung == '') {
      alert("Penanggung Jawab tidak boleh kosong");
    }
    else {
      tinyMCE.triggerSave();
      $.ajax({
        data    : {jenis_laporan:jenis,edit:edit,penjelasan:penjelasan,materi:materi,
                    format:format,distribusi:distribusi,penanggung:penanggung},
        secureuri: false,
        dataType  : "json",
        type    : "post",
        url     : "<?php echo base_url('master/save_penjelasan'); ?>",
        async     : false,
        success : function(result){
          alert(result);
          
           $("#penanggung").val('');
           $("#penjelasan").text('');
           $("#materi").text('');
           $("#format").text('');
           $("#distribusi").text('');
           $("#edit").val('');

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
                <form id="form" role="form" method="post" class="form-horizontal" >
                <input type="hidden" name="edit" id="edit"> 
             <div class="form-body">
             <div class="form-md-line-input">
                      <div class="col-md-2 ">
                         <label  for="">JENIS LAPORAN</label>
                      </div>
                        <div class="col-md-10">
                        <select class="select2" id="jenis_laporan" name="jenis_laporan" class="form-control">
                          <?php 
                          foreach ($jenis as $jn) { ?>
                            <option value="<?= strtolower($jn->menu) ?>"><?= $jn->alias ?></option>
                          <?}
                          ?>
                        </select>
                        </div>
                    </div>
                     <div class="form-md-line-input">
                      <div class="col-md-2 ">
                         <label  for="">PENGERTIAN</label>
                      </div>
                        <div class="col-md-10">
                      <textarea name="penjelasan" id="penjelasan"></textarea>
                        </div>
                    </div>
                    <div class="form-md-line-input">
                        <div class="col-md-2 ">
                         <label  for="">MATERI</label>
                      </div>
                    <div class="col-md-10">
                    <textarea name="materi" id="materi"></textarea>
                       </div>
                    
                    </div>
                     <div class="form-md-line-input">
                      <div class="col-md-2 ">
                         <label  for="">FORMAT</label>
                      </div>
                        <div class="col-md-10">
                      <textarea name="format" id="format"></textarea>
                        </div>
                    </div>
                     <div class="form-md-line-input">
                      <div class="col-md-2 ">
                         <label  for="">DISTRIBUSI</label>
                      </div>
                        <div class="col-md-10">
                      <textarea name="distribusi" id="distribusi"></textarea>
                        </div>
                    </div>
                      <div class="form-md-line-input">
                      <div class="col-md-2 ">
                        <label for="">PENANGGUNG JAWAB</label>
                        </div>
                           <div class="col-md-10">
                        <input type="text" id="penanggung" class="form-control" name="penanggung" required value=""placeholder="Masukkan Penanggung Jawab" required>
                    </div>
                    

                  </div>
                 
                    <br><br>
                    <div class="input-group">
                        <input type="button" onclick="simpan_data()" name="btn-simpan" class="btn btn-info" value="SIMPAN">
                        <input type="reset" name="btn-reset" class="btn btn-default" value="RESET">
                    </div>
                   
                </form>
                </br>
      </div>
      
  </div>

</div>

</body>
