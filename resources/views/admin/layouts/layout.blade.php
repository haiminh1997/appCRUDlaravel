<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield("title")</title>
    <!-- BOOTSTRAP STYLES-->
    <link href=" {{ secure_asset("bs-simple-admin/assets/css/bootstrap.css") }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href=" {{ secure_asset("bs-simple-admin/assets/css/font-awesome.css") }}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href=" {{ secure_asset("bs-simple-admin/assets/css/custom.css") }}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <script src='{{ secure_asset("tinymce_5.0.12/tinymce/js/tinymce/jquery.tinymce.min.js") }}' referrerpolicy="origin"></script>
    <script src='{{ secure_asset("tinymce_5.0.12/tinymce/js/tinymce/tinymce.min.js") }}' referrerpolicy="origin"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
</head>
<body>



<div id="wrapper">
    @include("admin.partials.header")

    <!-- /. NAV TOP  -->
        @include("admin.partials.sidebar")

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            @yield("content")
        </div>

        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
@include("admin.partials.footer")



<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src=" {{ secure_asset("bs-simple-admin/assets/js/jquery-1.10.2.js") }}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src=" {{ secure_asset("bs-simple-admin/assets/js/bootstrap.min.js") }}"></script>
<!-- CUSTOM SCRIPTS -->
<script src=" {{ secure_asset("bs-simple-admin/assets/js/custom.js") }}"></script>


</body>
</html>
