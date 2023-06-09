               <!-- partial:partials/_footer.html -->

             @if($segment != "dashboard")
               <footer class="footer">
                  <div class="d-sm-flex justify-content-center justify-content-sm-between">
                     <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.  ApMass CRM</a> . All rights reserved.</span>
                     <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
                  </div>
               </footer>
            @endif


               <!-- partial -->
            </div>
            <!-- main-panel ends -->
         </div>
         <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="{{ asset('vendors/js/vendor.bundle.base.js')}}"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="{{ asset('vendors/chart.js/Chart.min.js')}}"></script>
      <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
      <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
      <script src="{{ asset('js/dataTables.select.min.js')}}"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="{{ asset('js/off-canvas.js')}}"></script>
      <script src="{{ asset('js/hoverable-collapse.js')}}"></script>
      <script src="{{ asset('js/template.js')}}"></script>
      <script src="{{ asset('js/settings.js')}}"></script>
      <script src="{{ asset('js/todolist.js')}}"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="{{ asset('js/dashboard.js')}}"></script>
      <script src="{{ asset('js/Chart.roundedBarCharts.js')}}"></script>
      <!-- End custom js for this page-->

      <!-- sweet alert -->
      <script src="{{ asset('custom_js/sweet_alert.js') }}"></script>

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