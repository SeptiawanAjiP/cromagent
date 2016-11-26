</section>
<!-- Placed js at the end of the document so the pages load faster 
 page end untuk map-->

<!--Core js-->
<script src="<?php echo base_url()?>js/jquery.js"></script>
<script src="<?php echo base_url()?>bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo base_url()?>js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url()?>js/jquery.scrollTo.min.js"></script>>
<script src="<?php echo base_url()?>js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url()?>js/jquery.nicescroll.js"></script>

<script src="<?php echo base_url()?>js/bootstrap-switch.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>js/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>js/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-multi-select/js/jquery.quicksearch.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

<script src="<?php echo base_url()?>js/jquery-tags-input/jquery.tagsinput.js"></script>

<script src="<?php echo base_url()?>js/select2/select2.js"></script>
<script src="<?php echo base_url()?>js/select-init.js"></script>


<!--dynamic table-->
<script type="text/javascript" language="javascript" src="<?php echo base_url()?>js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/data-tables/DT_bootstrap.js"></script>

<!--dynamic table initialization -->
<script src="<?php echo base_url()?>js/dynamic_table_init.js"></script>

<!-- jQuery File Upload Dependencies -->
<script src="<?php echo base_url()?>js/mini-upload-form/assets/js/jquery.ui.widget.js"></script>
<script src="<?php echo base_url()?>js/mini-upload-form/assets/js/jquery.iframe-transport.js"></script>
<script src="<?php echo base_url()?>js/mini-upload-form/assets/js/jquery.fileupload.js"></script>

<!-- Our main JS file -->
<script src="<?php echo base_url()?>js/mini-upload-form/assets/js/script.js"></script>

<!--common script init for all pages-->
<script src="<?php echo base_url()?>js/scripts.js"></script>

<script type="text/javascript">
function noMenu() {
  return false;
}
$('body').bind('copy paste',function(e) {
   e.preventDefault(); return false; 
});
</script>

<!-- google-map -->
<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7&key=AIzaSyDQFjRggMlnBZO62jcu0-awkKaSiA50kho&libraries=places"></script>
<!-- <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7&key=AIzaSyASRaAEI4rEQWLHvhPxCvBm-2_n1Hy5IpM"></script> -->

<script type="text/javascript">
    <?php 
    $js_array = json_encode($LocsE);
    echo "var js_array = ".$js_array.";\n";
    ?>
    var LocsE =[];
    for (var i = js_array.length - 1; i >= 0; i--) {
        LocsE.push(js_array[i]);
    }
    console.log(LocsE);
</script>
<script src="<?php echo base_url()?>js/google-map/maplace.js"></script>
<script src="<?php echo base_url()?>js/google-map/points.js"></script>
<script src="<?php echo base_url()?>js/mini-upload-form/assets/js/script.js"></script>
<script>
    //ul list example
    new Maplace({
        locations: LocsE,
        map_div: '#gmap-list',
        controls_type: '',
        controls_title: ''
    }).Load();
</script>


</body>
</html>
