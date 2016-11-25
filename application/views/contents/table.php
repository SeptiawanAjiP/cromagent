    <!--table content start-->

        <!-- page start-->
        <!-- untuk tabel dengan fungsi khusus akan dikerjakan apabila content sudah ada -->
        <div class="row">
            <div class=<?php echo '"'.$width.'"'; ?> >
                <section class="panel">
                    <header class="panel-heading">
                        <?php echo $title_table; ?>
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    
                    <thead>
                        <tr>
                        <?php
                            foreach ($vari as $value) {
                                echo '<th>'.$value.'</th>';
                            }
                        ?>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <!-- jika content sudah ada -->
                            <!-- <?php
                                //for ($i=0; $i < count($content); $i++) { 
                                //    foreach ($content[$i] as $value) {
                                //        echo '<td>'.$value.'</td>';
                                //    }
                                //}
                            ?> -->

                            <!-- hapus jika content sudah ada -->
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!-- ,,, -->
                        </tr>
                    </tbody>
                    
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
        
    <!--table content end-->