<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
    <div class="main-content">
        <header class="header">
            <h1>Dashboard</h1>
        </header>
        <div class="content">
            @yield('content')
        </div>
        @include('layout.footer')
        @include('layout.sidebar')
    </div>
</body>
</html>
