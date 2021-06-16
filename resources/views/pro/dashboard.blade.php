<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
@include('pro.layouts.head')
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
     @include('pro.layouts.sider')


     <div class="flex flex-col flex-1 w-full">
       @include('pro.layouts.header')
        <main class="h-full overflow-y-auto">




            @yield('content')





        </main>
      </div>
    </div>
  </body>
</html>
