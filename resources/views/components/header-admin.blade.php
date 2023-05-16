<div class="menu">
    <div class="routes">
        <div class="dashboard">
            <a href="{{route('admin-dashboard')}}" aria-label="Dashboard">Dashboard</a>
        </div>
        <div class="view-cars">
            <a href="{{route('admin-view-cars')}}" aria-label="View car">View Cars</a>
        </div>
        <div class="view-users">
            <a href="{{route('admin-view-users')}}" aria-label="View users">View Users</a>
        </div>
        <div class="add-car">
            <a href="{{route('admin-add-cars')}}" aria-label="Add car">Add Car</a>
        </div>
        <div class="add-user">
            <a href="{{route('admin-add-users')}}" aria-label="Add user">Add User</a>
        </div>
        <div class="order-cars">
            <a href="{{route('admin-view-orders')}}" aria-label="View orders">View Orders</a>
        </div>
    </div>
    <div class="logout">
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" aria-label="Logout">Logout</button>
        </form>
    </div>
</div>
