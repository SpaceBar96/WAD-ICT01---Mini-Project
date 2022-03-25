<div class="container">
@if(session()->has('user'))
    {{View:: make('user')}}
@else
    @yield('home')
@endif
</div>