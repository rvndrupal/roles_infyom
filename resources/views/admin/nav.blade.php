<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Navegación</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="{{ route('admin.page') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
    @can('users.index')
    <li class="treeview">
        <a href="#"><i class="fa fa-bars"></i> <span>Admin Usuarios</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{ route('users.index') }}"><i class="fa fa-eye"></i>Lista</a></li>
        <li><a href="{{ route('users.create') }}"><i class="fa fa-eye"></i>Agregar</a></li>
        </ul>
    </li>
    @endcan

    @can('roles.index')
    <li><a href="{{ route('roles.index') }}"><i class="fa fa-lock"></i> <span>Roles</span></a></li>
    @endcan
    <li class="treeview">
        <a href="#"><i class="fa fa-bars"></i> <span>Admin</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{ route('products.index') }}"><i class="fa fa-eye"></i>Productos</a></li>
        <li><a href="{{ route('clientes.index') }}"><i class="fa fa-eye"></i>Clientes</a></li>
        <li><a href="{{ route('alumnos.index') }}"><i class="fa fa-eye"></i>Alumnos</a></li>
        <li><a href="{{ route('proveedores.index') }}"><i class="fa fa-eye"></i>Proveedores</a></li>
        </ul>


    </li>
</ul>
