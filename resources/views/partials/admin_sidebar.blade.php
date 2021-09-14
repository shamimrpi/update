    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{ URL::to('/admin') }}/profile/images/{{ Auth::user()->image }}" alt="User Image" style="height: 40px;width: 40px">
        <div>
          <p class="app-sidebar__user-name">{{ Auth::user()->first_name }}</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{ route('dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li><a class="app-menu__item active" href="{{ route('dashboard') }}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Customers</span></a></li>

        <li><a class="app-menu__item active" href="{{ route('dashboard') }}"><i class="app-menu__icon fa fa-product-hunt"></i><span class="app-menu__label">Product</span></a></li>
         <li><a class="app-menu__item active" href="{{ route('dashboard') }}"><i class="app-menu__icon fa fa-adjust"></i><span class="app-menu__label">Category</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop "></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fas fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fas fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fas fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>
        
      </ul>
    </aside>