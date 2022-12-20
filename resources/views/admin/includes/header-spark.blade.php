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
            <a href="#"  class="sidebar-link collapsed">
                <i class="align-middle me-2 fas fa-fw fa-pen"></i> <span class="align-middle">Watch coupon</span>
            </a>
            <a href="{{route('admin.categories.create')}}"  class="sidebar-link collapsed">
                <i class="align-middle me-2 fas fa-fw fa-pen"></i> <span class="align-middle">Add Category</span>
            </a>
            <a href="#"  class="sidebar-link collapsed">
                <i class="align-middle me-2 fas fa-fw fa-pen"></i> <span class="align-middle">Add Coupon</span>
            </a>
    </div>
</nav>
