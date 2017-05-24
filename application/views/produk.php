
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><?= $judul?>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                           
                            <!-- BEGIN THEME PANEL -->
                      
                            <!-- END THEME PANEL -->
                        </div> 
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="">PRODUK</a>
                        </li>
                        <li>
                            <span class="active"><?= $judul?></span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">

                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat red">
                                <div class="visual">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                       <span data-counter="counterup">MEMBUAT</span></div>
                                    <div class="desc"> <?= $judul?></div>
                                </div>
                                <a class="more" href="<?= base_url($url_create); ?>"> PROSES
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="fa fa-group fa-icon-medium"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                         <span data-counter="counterup">PENJELASAN</span>
                                    </div>
                                    <div class="desc"> <?= $judul?> </div>
                                </div>
                                <a class="more" href="<?= base_url($url_penjelasan); ?>"> PROSES
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>

                         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat red">
                                <div class="visual">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                       <span data-counter="counterup">MENCARI</span></div>
                                    <div class="desc"> <?= $judul?> </div>
                                </div>
                                <a class="more" href="<?= base_url($url_data); ?>"> PROSES
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat yellow">
                                <div class="visual">
                                    <i class="fa fa-briefcase fa-icon-medium"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup">MENCETAK</span></div>
                                    <div class="desc"> <?= $judul?> </div>
                                </div>
                                <a class="more" href="?page=daftar_isi_saldo"> PROSES
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat blue">
                                <div class="visual">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                       <span data-counter="counterup">REKAP</span>
                                    </div>
                                    <div class="desc"><?= $judul?></div>
                                </div>
                                <a class="more" href="<?= base_url($url_rekap); ?>"> PROSES
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                       <span data-counter="counterup" data-value="0">0</span></div>
                                    <div class="desc"> TOTAL DATA BULAN INI</div>
                                </div>
                                <a class="more" href="javascript:;"> VIEW
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                       <span data-counter="counterup">0</span></div>
                                    <div class="desc"> TOTAL KESELURUHAN</div>
                                </div>
                                <a class="more" href="javascript:;"> View more
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>

                         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat purple">
                                <div class="visual">
                                    <i class="fa fa-comments"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup">KEMBALI</span></div>
                                    <div class="desc">  </div>
                                </div>
                                <a class="more" href="?page=daftar_pencairan"> PROSES
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="clearfix"></div>