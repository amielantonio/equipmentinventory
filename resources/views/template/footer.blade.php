

<footer class="site-footer">

</footer>

<!-- Scripts -->
<footer id="scripts">
    <script src="{{ asset('plugins/jquery/js/jquery.min.js') }}"></script>

    <!--BOOTSTRAP-->
    <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!--DATA TABLES-->
    <script src="{{ asset('plugins/datatables/js/jquery.dataTables.js') }}"></script>


    <script src="{{ asset('js/app.js') }}"></script>



</footer>

{{--Ajax Functions--}}
<div id="ajax-functions">
    @yield('ajax-script')
</div>


</body>
</html>
