<!doctype html>
<html lang="en">
    @include('super.layouts.head')
<body class="bg-gray-200">
    @include('super.layouts.style')
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">


        @include('super.layouts.navbar')


        @include('super.layouts.sidebar')

        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

        @yield('content')

    </div>

  </div>
</div>
@include('super.layouts.footer')
@include('super.layouts.js')
</body>
</html>
