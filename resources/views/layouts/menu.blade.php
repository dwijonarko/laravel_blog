<div class="side-menu">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Main Menu -->
        <div class="side-menu-container">
            <ul class="nav navbar-nav">
                <li class="{{ request()->is('home*') ? 'active' : '' }}"><a href="{{url('/home')}}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                <li class="{{ request()->is('kategori*') ? 'active':''}}"><a href="{{url('/kategori')}}"><span class="glyphicon glyphicon-plane"></span> Kategori</a></li>
                <li class="{{ request()->is('artikel*') ? 'active':''}}"><a href="{{url('/artikel')}}"><span class="glyphicon glyphicon-pencil"></span> Artikel</a></li> 
                 <li class="{{ request()->is('user*') ? 'active':''}}"><a href="{{url('/user')}}"><span class="glyphicon glyphicon-user"></span> User</a></li> 

                <!-- Dropdown-->
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl1">
                        <span class="glyphicon glyphicon-user"></span> Sub Level <span class="caret"></span>
                    </a>

                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>

                                <!-- Dropdown level 2 -->
                                <li class="panel panel-default" id="dropdown">
                                    <a data-toggle="collapse" href="#dropdown-lvl2">
                                        <span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>
                                    </a>
                                    <div id="dropdown-lvl2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="nav navbar-nav">
                                                <li><a href="#">Link</a></li>
                                                <li><a href="#">Link</a></li>
                                                <li><a href="#">Link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

</div>