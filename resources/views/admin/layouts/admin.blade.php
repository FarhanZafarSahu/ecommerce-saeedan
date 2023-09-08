<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/chartjs/Chart.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.svg')}}" type="image/x-icon">
    <!-- All cdns for Form.io -->
    <link rel="stylesheet" href="https://cdn.form.io/js/formio.full.min.css">
    <script src="https://cdn.form.io/js/formio.full.min.js"></script>
</head>
    @include('admin.parts.header')
    <div id="main">
        @include('admin.parts.navbar')
        
        @yield('content')
    
        @include('admin.parts.footer')
    </div>

<script src="{{asset('admin/assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/app.js')}}"></script>
    
    <script src="{{asset('admin/assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('admin/assets/js/main.js')}}"></script>
</body>
</html>