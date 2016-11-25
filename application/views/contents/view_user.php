<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Shop List
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>No. KTP</th>
                        <th>Username</th>
                        <th>Shop Name</th>
                        <th>Activated Date</th>
                        <th>Deactivated Date</th>
                        <th>Last Received Order</th>
                        <th>Last Sold Product</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                        for ($i=0; $i < count($shopList) ; $i++) { 
                            # code...
                            echo '<tr>';
                            echo '<td>'. $shopList[$i]['noKtp'] .'</td>';
                            echo '<td>'. $shopList[$i]['namaPemilik'] .'</td>';
                            echo '<td>'. $shopList[$i]['namaWarung'] .'</td>';
                            echo '<td>'. $shopList[$i]['tglActivasi'] .'</td>';
                            echo '<td>'. $shopList[$i]['tglDeactivasi'] .'</td>';
                            echo '<td>'. $shopList[$i]['lastOrder'] .'</td>';
                            echo '<td>'. $shopList[$i]['lastProduck'] .'</td>';
                            echo '</tr>';
                        }

                    ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->