  <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <script>document.write(new Date().getFullYear())</script> <a href="https://codexmyanmar.com/" target="_blank">Lucky7</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i> Lucky7</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
  </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('assets/backend/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('assets/backend/vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('assets/backend/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/backend/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/backend/js/misc.js') }}"></script>
  <script src="{{ asset('assets/backend/js/settings.js') }}"></script>
  <script src="{{ asset('assets/backend/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('assets/backend/js/dashboard.js') }}"></script>
  <!-- End custom js for this page-->

  <!-- Custom js for this page-->
  <script src="{{ asset('assets/backend/js/data-table.js') }}"></script>
  <script src="{{ asset('assets/backend/js/select2.js') }}"></script>

  <script src="{{ asset('assets/backend/js/js-grid.js') }}"></script>
  <script src="{{ asset('assets/backend/js/db.js') }}"></script>
  <!-- <script src="{{ asset('assets/backend/js/x-editable.js') }}"></script> -->
  <!-- End custom js for this page-->

  <script src="{{ asset('assets/backend/js/formpickers.js') }}"></script>
  <script src="{{ asset('assets/backend/js/form-addons.js') }}"></script>
  <script src="{{ asset('assets/backend/js/x-editable.js') }}"></script>
  <script src="{{ asset('assets/backend/js/dropify.js') }}"></script>
  <script src="{{ asset('assets/backend/js/dropzone.js') }}"></script>
  <script src="{{ asset('assets/backend/js/jquery-file-upload.js') }}"></script>
  <script src="{{ asset('assets/backend/js/formpickers.js') }}"></script>
  <script src="{{ asset('assets/backend/js/form-repeater.js') }}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <!--roms-->

<script src="{{ asset('js/app.plugin.js') }}"></script>
<script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>


<script type="text/javascript">

    $(document).ready(function () {

        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                $(this).remove();
            });
        }, 5000);

    });
</script>

<script type="text/javascript" src="{{ asset('js/tableExport/tableExport.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tableExport/jquery.base64.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/tableExport/jspdf/libs/sprintf.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tableExport/jspdf/jspdf.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tableExport/jspdf/libs/base64.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/select2/select2.min.js') }}"></script>
<script type="text/javascript">
    $('#product_id').select2();
</script>


</body>
</html>
