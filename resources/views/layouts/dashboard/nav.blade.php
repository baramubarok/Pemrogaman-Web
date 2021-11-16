<div class="nav-content d-flex">
    <!-- Logo Start -->
    <div class="logo position-relative">
        <a href="/">
            <!-- Logo can be added directly -->
            <!-- <img src="{{ asset('/img/logo/logo.svg') }}" alt="logo" /> -->
            <!-- Or added via css to provide different ones for different color themes -->
            <img src="{{ asset('img/logo/logo.svg') }}">
        </a>
    </div>
    <!-- Logo End -->
    <!-- User Menu Start -->
    <div class="user-container d-flex">
        <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <img class="profile" alt="profile" src="{{ asset('/img/profile/profile-9.jpg') }}" />
            <div class="name">Lisa Jackson</div>
        </a>
    </div>
    <!-- User Menu End -->
    <!-- Menu Start -->
    <div class="menu-container flex-grow-1">
        <ul id="menu" class="menu">
            <li>
                <a href="#dashboards" data-href="/user">
                    <i data-cs-icon="user" class="icon" data-cs-size="18"></i>
                    <span class="label">User</span>
                </a>
                {{-- <ul id="dashboards">
                    <li>
                        <a href="/user/orders">
                            <span class="label">Orders</span>
                        </a>
                    </li>
                    <li>
                        <a href="/user/edit-profile">
                            <span class="label">Edit Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="/user/edit-profile">
                            <span class="label">Verification</span>
                        </a>
                    </li>
                </ul> --}}
            </li>
            <li>
                <a href="#apps" data-href="/shop">
                    <i data-cs-icon="home" class="icon" data-cs-size="18"></i>
                    <span class="label">Shop</span>
                </a>
                <ul id="apps">
                    <li>
                        <a href="/shop/profile">
                            <span class="label">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="/shop/order">
                            <span class="label">Orders</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('custom-logout') }}">
                    <i data-cs-icon="logout" class="icon" data-cs-size="18"></i>
                    <span class="label">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Menu End -->
    <!-- Mobile Buttons Start -->
    <div class="mobile-buttons-container">
        <!-- Scrollspy Mobile Button Start -->
        <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
            <i data-cs-icon="menu-dropdown"></i>
        </a>
        <!-- Scrollspy Mobile Button End -->
        <!-- Scrollspy Mobile Dropdown Start -->
        <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
        <!-- Scrollspy Mobile Dropdown End -->
        <!-- Menu Button Start -->
        <a href="#" id="mobileMenuButton" class="menu-button">
            <i data-cs-icon="menu"></i>
        </a>
        <!-- Menu Button End -->
    </div>
    <!-- Mobile Buttons End -->
</div>
<div class="nav-shadow"></div>

<script>
    function logOut() {
        $('#logout-form').submit()
    }
</script>
