    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/charts/chartist.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="../../../app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END: Page JS-->

    <script>
        $(document).ready(function(){
            App.init();
        });
    </script>
    

    <script>
        function noty(msg, option = 1)
        {
            Snacrbar.show({
                text: msg.toUpperCase(),
                actionText: 'CERRADO',
                actionTextColor: '#fff',
                backgroundColor: option == 1 ? '#3b3f5c' : '#e7515a',
                pos: 'top-right'
            });
        }
    </script>

  

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

<?php /**PATH D:\Nueva carpeta\Consultoria\resources\views/layouts/Theme/scripts.blade.php ENDPATH**/ ?>