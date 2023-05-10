    <div class="menu">
        <div class="dashboard">
            <a href="{{route('admin-dashboard')}}">Dashboard</a>
        </div>
        <div class="view-cars">
            <a href="{{route('admin-view-cars')}}">View Cars</a>
        </div>
        <div class="view-users">
            <a href="{{route('admin-view-users')}}">View Users</a>
        </div>
        <div class="add-car">
            <a href="{{route('admin-add-cars')}}">Add Car</a>
        </div>
        <div class="add-user">
            <a href="{{route('admin-add-users')}}">Add User</a>
        </div>
        <div class="add-user">
            <a href="{{route('view-ordered-cars')}}">Ordered Cars</a>
        </div>
        <div class="logout">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
