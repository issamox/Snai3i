<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('admin/files/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/files/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/files/bower_components/popper_js/dist/umd/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/files/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('admin/files/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('admin/files/bower_components/modernizr/modernizr.js') }}"></script>
<!-- Chart js -->
<script type="text/javascript" src="{{ asset('admin/files/bower_components/chart_js/dist/Chart.js') }}"></script>
<!-- amchart js -->
<script src="{{ asset('admin/files/assets/pages/widget/amchart/amcharts.js') }}"></script>
<script src="{{ asset('admin/files/assets/pages/widget/amchart/serial.js') }}"></script>
<script src="{{ asset('admin/files/assets/pages/widget/amchart/light.js') }}"></script>
<script src="{{ asset('admin/files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/files/assets/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('admin/files/assets/js/pcoded.min.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('admin/files/assets/js/jquery.filer.min.js') }}"></script>
<script src="{{ asset('admin/files/assets/js/vartical-layout.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/files/assets/pages/dashboard/custom-dashboard.js') }}"></script>
<script src="{{ asset('admin/files/assets/js/sweetalert2.min.js') }}"></script>
<!-- j-pro js -->
{{--<script type="text/javascript" src="{{ asset('admin/files/assets/pages/j-pro/js/jquery.ui.min.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('admin/files/assets/pages/j-pro/js/jquery.maskedinput.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/files/assets/pages/j-pro/js/jquery.j-pro.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/files/assets/js/script.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#filer_input').filer({
            limit: 3,
            maxSize: 3,
            extensions: ["jpg", "png", "gif"],
            showThumbs: true
        });

        $(".photo").click(function () {
            $(".input_file").click();
        });

        $(".input_file").change(function(event) {
            var tmppath = URL.createObjectURL(event.target.files[0]);
            $(".photo").fadeIn("slow").attr('src',URL.createObjectURL(event.target.files[0]));
        });

        $(".btn_delete").on("click",function (e) {
            e.preventDefault();
            Swal.fire({
                title:'êtes-vous sûr',
                text: 'Voulez-vous vraiment supprimer ?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Non',
                confirmButtonText: 'Oui'
            }).then((result) => {
                if (result.value) {
                   $(this).next().find(".delete_form_btn").click();
                }
            });
        });

    });
</script>
<center><font size="2">This is the free demo result. For a full version of this website, please go to  <a href="https://www6.waybackmachinedownloader.com/website-downloader-online/scrape-all-files/">Website Downloader</a></font></center>
@yield('scripts')
</body>
</html>
