{{View:: make('title')}}

<div class="container" style="margin-top: 10px;">
<form action="userlist" method="post">
@csrf
<input value="{{request()->input('search')}}" name="search" type="search" class="form-control"
placeholder="Search..." aria-label="Search" style="float: right; width: 200px; margin-bottom: 10px;">
</form>
</div>

<div class=container>
<div class="bd-example">
        <table class="table table-striped">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Password</th>
                <th scope="col">Created Date</th>
                <th scope="col">Action</th>
            </tr>
        </thread>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ date('D, d F Y',strtotime($user->created_at)) }}</td>
            <td>
            <button style="width:80px; background-color: #87CEEB; color: white;padding:5px 12px;
            border: none; border-radius: 4px; cursor: pointer;"
            onclick="window.location.href='editmyuser?rid={{ $user->id }}'">Edit</button>
            <button style="width:80px; background-color: #DC143C; color: white;padding:5px 12px;
            border: none; border-radius: 4px; cursor: pointer;"
            onclick="window.location.href='/userdelete?rid={{ $user->id }}'">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

<style>
.h-5 {
height: 1em;
}

.flex {
text-align: center;
width: 100%;
}

.leading-5{
padding: 0.7em;
}
</style>

    <div class="pagination">
        {{ $users->links('vendor.pagination.bootstrap-4') }}
        <!-- {{ $users->appends(['search' => Request::get('search')])->links() }} -->
    </div>

{{View:: make('footer')}}