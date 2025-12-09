<h1>welcome in admin dashboard</h1>

<form action="{{ route('admin.logout') }}" method="post">
    @csrf
    <button type="submit" >Log out</button>
</form>

