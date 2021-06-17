<!DOCTYPE html>
<!--
Template Name: Nocobot
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
@include('user.layouts.head')
<body id="top">
    @include('user.layouts.header')
</div>
@include('user.accueil')


@yield('pro')

@yield('content')



  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{   URL::to('user/assets/layout/scripts/jquery.min.js')}}"></script>
<script src="{{   URL::to('user/assets/layout/scripts/jquery.backtotop.js')}}"></script>
<script src="{{   URL::to('user/assets/layout/scripts/jquery.mobilemenu.js')}}"></script>
</body>
</html>
