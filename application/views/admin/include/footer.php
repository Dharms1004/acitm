        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Acitm - Admin Copyright@ <a href="http://www.acitm.co.in">Acitm</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url();?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url();?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url();?>assets/dist/js/sb-admin-2.js"></script>

    <!-- calender -->
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script>
    (function($) {

var $valFn = $.fn.val;
$.fn.extend({
    val: function() {
        var valCatch = $valFn.apply(this, arguments);
        var placeholder = $(this).attr("placeholder");
        
        // To check this val is called to set value and the val is for datePicker element 
        if (!arguments.length && this.hasClass('hasDatepicker')) {
            if (valCatch.indexOf(placeholder) != -1) {
                return valCatch.replace(placeholder, "");
            }
        }
        return valCatch;
    }
});
$(".datepicker").datepicker({
    dateFormat: 'dd/mm/yy',
    onSelect: function(arg) {
        $(this).val(arg);
    }
});
})(jQuery);

// Insert placeholder as prefix in the value, when user makes a change.

</script>

    <style type="text/css">
        .ui-datepicker {
            width: 210px;
        }
    </style>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/blitzer/jquery-ui.css">
    <!-- calender -->
</body>

</html>
