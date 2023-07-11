<!DOCTYPE html>
<html lang="en">
@include('layouts.base.head')

<head>

</head>

<body>



    <div class="be-wrapper">
        @include('layouts.base.sidebar')
        <div class="be-wrapper-right">
            @include('layouts.base.header')
            <div class="be-wrapper-content">
                @yield('content')
            </div>
        </div>
    </div>


    <div class="be-backdrop d-none" id="beBackdrop"></div>


    @include('layouts.base.foot')
</body>

</html>
