<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li>
                <a href="{{url('/')}}">
                    <img src="{{url('/images/logo.png')}}" alt="solidlogistics" style="width: 25%">
                </a>
            </li>
            <li class="treeview {{Request::is("dashboard")?'active':''}}">
                <a href="#"> <img src="{{url('/images/icon-dashboard.png')}}" title="Dashboard" />
                    <span>Dashboard</span></a>
            </li>

            <li class="treeview">
                <a href="#"><img src="{{url('/images/icon-documents.png')}}" title="Report" />
                    <span>Report</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Archive</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
