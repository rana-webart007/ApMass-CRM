</div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

<!-- container-scroller -->
  <!-- plugins:js -->
  <script src=".{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=".{{asset('js/off-canvas.js')}}"></script>
  <script src=".{{asset('js/hoverable-collapse.js')}}"></script>
  <script src=".{{asset('js/template.js')}}"></script>
  <script src=".{{asset('js/settings.js')}}"></script>
  <script src=".{{asset('js/todolist.js')}}"></script>
  <!-- endinject -->

  <!-- auto close session msg after 5 seconds -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script>
    $("document").ready(function(){
       setTimeout(function(){
          $("#session-msges-1").remove();
       }, 5000 );
     });
  </script>
</body>

</html>