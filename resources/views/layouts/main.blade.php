<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>@yield('title','') | Eternity - Register</title>

    @include('include.head')

</head>

<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
    <!--  BEGIN NAVBAR  -->
     <div class="header-container">
        <header class="header navbar navbar-expand-sm">
        @include('include.navbar')
        
        </div>
       <!--  END NAVBAR  -->
       <!--  BEGIN MAIN CONTAINER  -->
       <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
        @include('include.topbar')

            </nav>
        </div>
        <!--  END TOPBAR  -->
           <!--  BEGIN CONTENT PART  -->
           <div id="content" class="main-content">
           @yield('content')

           @include('include.footer')



</body>
</html>