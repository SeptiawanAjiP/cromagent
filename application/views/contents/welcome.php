<!--main content start-->
  <section id="main-content">
      <section class="wrapper">
        <!--User Registration-->
		<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Welcome! (INI CUMA HALAMAN SEMENTARA)
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body" style="text-align: center;">
                    <?php
                      if ($this->session->userdata('notice') == "") {
                        # code...
                        echo 'Welcome '. $this->session->userdata('user');
                      } else {
                        echo $this->session->userdata('notice');
                      }
                    ?>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
      </section>
  </section>
<!--main content end-->