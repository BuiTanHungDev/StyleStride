
<!DOCTYPE html>
<html>
<head>
    @include('client/layouts/head')
</head>
<body>
    <div id="page-wrapper">
        @include("client/layouts/header")
        
        @yield('content')

        @include('client/layouts/footer')
    </div>
 @include('client/layouts/scripts')
   
</body>
</html>

