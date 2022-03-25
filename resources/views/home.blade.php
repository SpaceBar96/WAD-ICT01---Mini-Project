{{View:: make('title')}}

@if(session()->has('user'))
    {{View:: make('user')}}
@else
    @yield('login')
@endif

{{View:: make('footer')}}