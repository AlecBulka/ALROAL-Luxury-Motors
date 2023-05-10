<div class="menu">
    <div class="routes">
        <div class="dashboard">
            <a href="{{ route('user-dashboard') }}" aria-label="Dashboard">Dashboard</a>
        </div>
        <div class="saved-cars">
            <a href="{{ route('user-saved-cars') }}" aria-label="Saved cars">Saved Cars</a>
        </div>
        <div class="ordered-cars">
            <a href="#" aria-label="Ordered Cars">Ordered Cars</a>
        </div>
    </div>
    <div class="logout">
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>
