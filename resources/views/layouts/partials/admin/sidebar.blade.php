<style>
    .sb-sidenav .collapse.show {
    display: block !important;
    visibility: visible !important;
    height: auto !important;
}
</style>

<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">

            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Interface</div>
            <!-- Categories Section -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategories" aria-expanded="false">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Categories
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseCategories">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('categories.create') }}">Create Category</a>
                    <a class="nav-link" href="{{ route('categories.index') }}">View Categories</a>
                </nav>
            </div> 
            
            <!-- Brands Section -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Brands
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('brands.create') }}">Create Brand</a>
                    <a class="nav-link" href="{{ route('brands.index') }}">View Brands</a>
                </nav>
            </div>

        </div>
    </div>

    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        {{ Auth::user()->name }}
    </div>
</nav>
