<nav id="sidebar" class="sidebar">
    <a class="sidebar-brand" href="index.html">
        <svg>
            <use xlink:href="#ion-ios-pulse-strong"></use>
        </svg>
        Spark
    </a>
    <div class="sidebar-content">
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Admin
            </li>
            <a href="{{route('admin.dashboard')}}"  class="sidebar-link collapsed">
                <i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboards</span>
            </a>
            <li class="sidebar-item">
                <a data-bs-target="#categories" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Categories</span>
                </a>
                <ul id="categories" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.categories.index')}}">Watch categories</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.categories.create')}}">Add categories</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#brands" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Brands</span>
                </a>
                <ul id="brands" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.brands.index')}}">Watch brands</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.brand.create')}}">Add brand</a></li>
                </ul>
            </li>
    </div>
</nav>
