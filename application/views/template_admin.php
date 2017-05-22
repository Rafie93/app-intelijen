<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>APP INTELIJEN || KEPOLISIAN </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url('assets/global/plugins/font-awesome/css/fontapi.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/uniform/css/uniform.default.css');?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/global/plugins/jquery-ui/ui-default.css');?>">
         <link rel="stylesheet" href="<?php echo base_url('assets/global/plugins/dataTables/dataTables.bootstrap.css');?>"/>
        <link href="<?php echo base_url('assets/global/plugins/font-awesome/css/font-material.css');?>" rel="stylesheet">
        <!-- END GLOBAL MANDATORY STYLES -->
          <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url('assets/global/css/components-md.min.css');?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url('assets/global/css/plugins-md.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url('assets/layouts/layout/css/layout.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/layouts/layout/css/themes/light.min.css');?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url('assets/layouts/layout/css/custom.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/select2/css/select2.min.css');?>" rel="stylesheet" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
         
        
        <script src="<?php echo base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/jquery-ui/jquery-ui.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/select2/js/select2.min.js');?>"></script>

        <script>
     $(document).ready(function() {
         $('.select2').select2();
          $(".datepickerku").datepicker({
            dateFormat: "yy-mm-dd",
            startdate: 1900,
            enddate: 2050,
            locale: 'id',
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            onClose: function() { 
             }
        });
          
          
        });
		</script>
        <script src="<?php echo base_url('assets/global/scripts/app.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/layouts/layout/scripts/layout.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/layouts/layout/scripts/demo.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/layouts/global/scripts/quick-sidebar.min.js');?>" type="text/javascript"></script>

        <script src="<?php echo base_url('assets/global/scripts/datatable.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/datatables/datatables.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/pages/scripts/table-datatables-managed.min.js');?>" type="text/javascript"></script>
        
    </head>
    <!-- END HEAD -->

<!--Start Header-->
<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
  
  <?php echo $header; ?>

<div class="clearfix"> </div>
       <div class="page-container">
             <!-- Menu -->
            <?php 
                echo $sidekiri;
             ?>
            <!-- END Menu -->
<div class="page-content-wrapper">
    <div class="page-content">
             <?php 
                echo $content;
             ?>
    </div>
</div>

        </div>
</div>
 <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2017 &copy; 
             </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->


</body>
</html>
