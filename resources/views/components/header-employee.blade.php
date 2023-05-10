    <div class="menu">
        <div class="routes">
            <div class="view-cars">
                <a href="{{route('employee-view-cars')}}">View Cars</a>
            </div>
            <div class="add-car">
                <a href="{{route('employee-add-cars')}}">Add Car</a>
            </div>
        </div>
        <div class="logout">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
