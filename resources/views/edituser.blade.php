{{View:: make('title')}}
<style>
input {
  width: 100%;
  padding: 6px 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
<div class="container" style="border-radius:5px; background-color:#f2f2f2; padding:20px;">

<form action="useredit?rid={{ Request::get('rid') }}" method="post">
@csrf
<div>
    <label style="font-size:14px; font-weight:bold;" for="exampleInputName1" class="form-label">Full Name</lable>
    <input maxlength="100" value="{{ $users->name }}" type="text" name="fullname" id="exampleInputName">
</div>

<div>
    <label style="font-size:14px; font-weight:bold;" for="exampleInputEmail" class="form-label">Email Address</lable>
    <input maxlength="100" value="{{ $users->email }}" type="email" name="email" id="exampleInputEmail">
</div>

<div>
    <label style="font-size:14px; font-weight:bold;" for="exampleInputPassword1" class="form-label">Password</lable>
    <input maxlength="100" value="{{ $users->password }}" type="text" name="password" id="exampleInputPassword1">
</div>

<button type="submit" style="width:80px; background-color: #4CAF50; color: white;padding:5px 12px;
margin:4px 0; border: none; border-radius: 4px; cursor: pointer;">Update</button>
<button type="button" style="width:80px; background-color: gray; color: white;padding:5px 12px;
margin:4px 0; border: none; border-radius: 4px; cursor: pointer;" 
onclick="javascript:history.back()">Cancel</button>
<!-- onclick="window.location.href='userlist'">Cancel</button> -->
</form>
</div>

{{View:: make('footer')}}