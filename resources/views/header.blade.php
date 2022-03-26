<div class="container">
@if(session()->has('user'))
    {{View:: make('user')}}
@else
    @yield('login')
@endif
</div>