               <!-- partial:partials/_footer.html -->
               
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

    <!-- for modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/modal-demo.js') }}"></script>

    <!-- sweet alert -->
    <script src="{{ asset('custom_js/sweet_alert.js') }}"></script>

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

    <!-- auto close session msg after 5 seconds -->
    <script>
      $("document").ready(function(){
         setTimeout(function(){
            $("#session-msges").remove();
         }, 5000 );
       });
    </script>
 </body>
</html>