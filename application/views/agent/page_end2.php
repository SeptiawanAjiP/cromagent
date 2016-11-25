</section>
<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="<?php echo base_url()?>js/jquery.js"></script>
<script src="<?php echo base_url()?>bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo base_url()?>js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url()?>js/jquery.scrollTo.min.js"></script>>
<script src="<?php echo base_url()?>js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url()?>js/jquery.nicescroll.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="<?php echo base_url()?>js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/data-tables/DT_bootstrap.js"></script>

<!--dynamic table initialization -->
<script src="<?php echo base_url()?>js/dynamic_table_init.js"></script>

<!-- jQuery File Upload Dependencies -->
<script src="<?php echo base_url()?>js/mini-upload-form/assets/js/jquery.ui.widget.js"></script>
<script src="<?php echo base_url()?>js/mini-upload-form/assets/js/jquery.iframe-transport.js"></script>
<script src="<?php echo base_url()?>js/mini-upload-form/assets/js/jquery.fileupload.js"></script>

<!--Google Map-->
<script>
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.

//get current location
function initMap() {
    var map = new google.maps.Map(document.getElementById('gmap-list'), { center: {lat: -34.397, lng: 150.644},zoom: 6});
    var infoWindow = new google.maps.InfoWindow({map: map});
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            document.getElementById('latitude').innerHTML = Object.values(pos);
            
            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
      'Error: The Geolocation service failed.' :
      'Error: Your browser doesn\'t support geolocation.');
}      
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=geometry&v=3.7&key=AIzaSyASRaAEI4rEQWLHvhPxCvBm-2_n1Hy5IpM&callback=initMap">
</script>

<!-- Our main JS file -->
<script src="<?php echo base_url()?>js/mini-upload-form/assets/js/script.js"></script>

<!--common script init for all pages-->
<script src="<?php echo base_url()?>js/scripts.js"></script>

<script>
    $(function ()
    {
        $("#wizard").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft"
        });

        $("#wizard-vertical").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            stepsOrientation: "vertical"
        });
    });
</script>
<script type="text/javascript">
function noMenu() {
  return false;
}
$('body').bind('copy paste',function(e) {
   e.preventDefault(); return false; 
});
</script>
</body>
</html>