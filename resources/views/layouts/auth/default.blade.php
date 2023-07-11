<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.auth.head')
</head>

<body>
    <div class="be-auth-wrapper">
        <div class="be-auth-content">
            @yield('content')
        </div>
    </div>

    @include('layouts.auth.foot')
</body>

</html>
