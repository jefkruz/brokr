<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">

            <li><a href="{{route('home')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-dashboard-1"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="{{route('referrals')}}" class="ai-icon" aria-expanded="false">
                    <i class="fas fa-users"></i>
                    <span class="nav-text">My Team</span>
                </a>
            </li>
            <li><a href="{{route('receipts.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-bar-chart-2"></i>
                    <span class="nav-text">My Transactions</span>
                </a>
            </li>

            <li><a href="{{route('viewcommission')}}" class="ai-icon" aria-expanded="false">
                    <i class="fas fa-money-bill-alt"></i>
                    <span class="nav-text">My Commissions</span>
                </a>
            </li>

            <li><a href="javascript:void()" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-home"></i>
                    <span class="nav-text">Properties</span>
                </a>
            </li>

            <li><a href="{{route('profileshare',Auth::user()->username)}}" class="ai-icon" aria-expanded="false">
                    <i class="nav-icon fas fa-share-alt"></i>
                    <span class="nav-text"> Share Properties</span>
                </a>
            </li>


            <li><a href="{{route('profile')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-user"></i>
                    <span class="nav-text">My Profile</span>
                </a>
            </li>
        </ul>


    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
