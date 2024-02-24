<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('template/backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('template/backend/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('template/backend/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('template/backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('template/backend/assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('template/backend/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('template/backend/assets/js/main.js') }}"></script>
<script src="{{ asset('template/backend/assets/js/upload-image.js') }}"></script>


<!-- Page JS -->
<script src="{{ asset('template/backend/assets/js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

@yield('scripts')