<!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/backend/js/sb-admin-2.min.js"></script>
  
  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>assets/backend/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>assets/backend/js/demo/datatables-demo.js"></script>
  <?php echo "<script>".$this->session->flashdata('message')."</script>"?>
  <script src="<?php echo base_url() ?>assets/datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url('assets/timepicker/mdtimepicker.js') ?>"></script>
  <script>
    $(document).ready(function(){
    $('#timepicker').mdtimepicker(); //Initializes the time picker
    });
    </script>
    <script>
    $(document).ready(function(){
    $('#timepicker1').mdtimepicker(); //Initializes the time picker
    });
    </script>
  <!--Start of Tawk.to Script-->
  <!-- <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5c78e8c23341d22d9ce6c142/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script> -->
  <script type="text/javascript">
   $(function(){
    var date = new Date();
    date.setDate(date.getDate());

    $(".datepicker").datepicker({
        startDate: date,
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
   });
  </script>
