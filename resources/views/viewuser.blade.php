{{View:: make('title')}}

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
            <a href="/editmyuser?rid={{ $user->id }}">Edit</a>
            <a href="/userdelete?rid={{ $user->id }}">Delete</a>
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