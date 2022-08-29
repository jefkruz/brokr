<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">

            <li><a href="{{route('admin')}}" class="ai-icon" aria-expanded="false">
                    <i class=" fas fa-tachometer-alt"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="{{route('users.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="fas fa-users"></i>
                    <span class="nav-text">Realtors</span>
                </a>
            </li>
            <li><a href="{{route('receipts.admin')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-bar-chart-2"></i>
                    <span class="nav-text">Transactions</span>
                </a>
            </li>

            <li><a href="{{route('commissions.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="fas fa-money-bill-alt"></i>
                    <span class="nav-text">Commissions</span>
                </a>
            </li>

            <li><a href="{{route('properties.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="fas fa-building"></i>
                    <span class="nav-text">Properties</span>
                </a>
            </li>

{{--            <li><a href="{{route('profileshare',Auth::user()->username)}}" class="ai-icon" aria-expanded="false">--}}
{{--                    <i class="nav-icon fas fa-share-alt"></i>--}}
{{--                    <span class="nav-text"> Share Properties</span>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li><a href="{{route('posts.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="fas fa-newspaper"></i>
                    <span class="nav-text">Posts</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="{{route('settings')}}" aria-expanded="false">
                    <i class="fas fa-tools"></i>
                    <span class="nav-text">Homepage Settings</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('acts.index')}}">What we Do</a></li>
                    <li><a href="{{route('clients.index')}}">Our Clients</a></li>
                    <li><a href="{{route('teams.index')}}">Our Teams</a></li>

                </ul>
            </li>

        </ul>


    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
