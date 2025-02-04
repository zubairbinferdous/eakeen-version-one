<div class="profile-card ">
    <div class="text-center mb-4">
        <img src="https://via.placeholder.com/100" class="rounded-circle mb-3" alt="User Avatar">
        <h5>{{ auth()->user()->name }}</h5>
        <p class="text-muted">{{ auth()->user()->email }}</p>
        <p class="text-muted">{{ auth()->user()->phone }}</p>
    </div>
    <hr>
    <nav>
        <a href="{{ route('dashboard') }}" class="sidebar-option active-option">
            <i class="bi bi-grid"></i> Dashboard
        </a>
        <a href="{{ route('affiliate_system') }}" class="sidebar-option">
            <i class="bi bi-people"></i> Affiliate
        </a>
        <a href="{{ route('UserOrder') }}" class="sidebar-option">
            <i class="bi bi-bag-check"></i> My Order
        </a>
        <a href="{{ route('workPlaceList') }}" class="sidebar-option">
            <i class="bi bi-bag-check"></i> Work Place
        </a>

    </nav>
    <form action="{{ route('logout') }}" method="POST" class="ml100">
        @csrf
        <div class="d-flex justify-center align-item-center mt10">
            <button class="btn-success btn-sm btn ">Logout</button>
        </div>
    </form>
</div>
