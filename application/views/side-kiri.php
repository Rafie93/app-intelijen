<!-- aBEGIN SIDEBAR -->
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start active open">
                            <a href="<?php echo base_url('dashboard'); ?>" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">HOME</span>
                                <span class="selected"></span>
                                <span class="selected"></span>
                            </a>         
                        </li>
                         <li class="heading">
                            <h3 class="uppercase">PERATURAN KABA INTELKAM</h3>
                        </li>
                           <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-docs"></i>
                                <span class="title">PERATURAN KABA</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="" class="nav-link nav-toggle">
                                    <i class="icon-lock"></i>
                                    <span class="title">NOMOR 2 THN 2012</span>
                                </a>
                                
                            </li>
                            <li class="nav-item  ">
                                <a href="" class="nav-link nav-toggle">
                                    <i class="icon-lock"></i>
                                    <span class="title">NOMOR 4 THN 2014</span>
                                </a>
                                
                            </li>
                       
                            </ul>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase">INTELIJEN STRATEGIS</h3>
                        </li>
                           <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-docs"></i>
                                <span class="title">INTELIJEN STRATEGIS</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                               <?php 
                                $strategis = $this->model->menu('INTELIJEN STRATEGIS');
                                foreach ($strategis as $str) {?>
                                      <li class="nav-item  ">
                                            <a href="<?php echo base_url( $str->link); ?>" class="nav-link nav-toggle">
                                                <i class="icon-list"></i>
                                                <span class="title"><?= $str->alias ?></span>
                                            </a>     
                                     </li>
                            <? } ?>             
                            </ul>
                        </li>
                        
                        <li class="heading">
                            <h3 class="uppercase">INTELIJEN TAKTIS</h3>
                        </li>
                         <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-docs"></i>
                                <span class="title">INTELIJEN TAKTIS</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                 <?php 
                                $strategis = $this->model->menu('INTELIJEN TAKTIS');
                                foreach ($strategis as $str) { ?>
                                      <li class="nav-item  ">
                                            <a href="<?php echo base_url( $str->link); ?>" class="nav-link">
                                                <i class="icon-docs"></i>
                                                <span class="title"><?= $str->alias ?></span>
                                            </a>     
                                     </li>
                            <? } ?>
                               
                                
                            </ul>
                        </li>

                        <li class="heading">
                            <h3 class="uppercase">MASTER</h3>
                        </li>
                           <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-docs"></i>
                                <span class="title">MASTER</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                               <?php 
                                $master = $this->model->menu('MASTER');
                                foreach ($master as $m) {?>
                                      <li class="nav-item  ">
                                            <a href="<?php echo base_url( $m->link); ?>" class="nav-link nav-toggle">
                                                <i class="icon-tag"></i>
                                                <span class="title"><?= $m->alias ?></span>
                                            </a>     
                                     </li>
                            <? } ?>             
                            </ul>
                        </li>
                       

                        <li class="heading">
                            <h3 class="uppercase">SISTEM</h3>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-docs"></i>
                                <span class="title">SISTEM</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                               <?php 
                                $sistem = $this->model->menu('SISTEM');
                                foreach ($sistem as $s) {?>
                                      <li class="nav-item  ">
                                            <a href="<?php echo base_url( $s->link); ?>" class="nav-link nav-toggle">
                                                <i class="icon-lock"></i>
                                                <span class="title"><?= $s->alias ?></span>
                                            </a>     
                                     </li>
                            <? } ?>             
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="<?php echo base_url('admin'); ?>" class="nav-link nav-toggle">
                                <i class="icon-lock"></i>
                                <span class="title">LOGOUT</span>
                            </a>
                            
                        </li>
                 
                        
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->