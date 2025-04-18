<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/login-images/benue-logo.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h6>Civil Servants App</h6>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Employee Mgt</div>
            </a>
            <ul>
                <li> <a href="{{route('employees.create')}}"><i class='bx bx-radio-circle'></i>Create Employee</a>
                </li>
                <li> <a href="{{ route('employees.index')}}"><i class='bx bx-radio-circle'></i>View Employee</a>
                </li>
                
                </li>
            </ul>
        </li>
        <li class="menu-label">Administration</li>
        {{-- <li>
            <a href="widgets.html">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Widgets</div>
            </a>
        </li> --}}
        <li>
            <a href="{{ route('mdas.index')}}">
                <div class="parent-icon"><i class="lni lni-layers"></i>
                </div>
                <div class="menu-title">Manage MDAs</div>
            </a>
        </li>
        <li>
            <a href="{{ route('pay-groups.index')}}">
                <div class="parent-icon"><i class="lni lni-wallet"></i>
                </div>
                <div class="menu-title">Manage Pay Groups</div>
            </a>
        </li>
        <li>
            <a href="{{ route('grade-levels.index')}}">
                <div class="parent-icon"><i class="lni lni-signal"></i>
                </div>
                <div class="menu-title">Manage Grade Levels</div>
            </a>
        </li>
          
        <li>
            <a href="{{ route('steps.index')}}">
                <div class="parent-icon"><i class="lni lni-world-alt"></i>
                </div>
                <div class="menu-title">Manage Steps</div>
            </a>
        </li>

        <li class="menu-label">Documents</li>
        <li>
            <a href="{{ route('employees.index') }}">
                <div class="parent-icon"><i class="lni lni-world-alt"></i>
                </div>
                <div class="menu-title">Manage Documents</div>
            </a>
        </li>

        <li>
            <a href="{{ route('employees.index')}}">
                <div class="parent-icon"><i class="lni lni-world-alt"></i>
                </div>
                <div class="menu-title">Transfer Employee</div>
            </a>
        </li>
          
        <li>
            <a href="{{ route('employees.index') }}">
                <div class="parent-icon"><i class="lni lni-world-alt"></i>
                </div>
                <div class="menu-title">Promote Employee</div>
            </a>
        </li>
          
        <li class="menu-label">Reports</li>
       

<li>
    <a href="">
        <div class="parent-icon"><i class="lni lni-map"></i></div>
        <div class="menu-title">By LGA</div>
    </a>
</li>

<li>
    <a href="">
        <div class="parent-icon"><i class="lni lni-apartment"></i></div>
        <div class="menu-title">By MDA</div>
    </a>
</li>

<li>
    <a href="">
        <div class="parent-icon"><i class="lni lni-network"></i></div>
        <div class="menu-title">By Rank</div>
    </a>
</li>

<li>
    <a href="">
        <div class="parent-icon"><i class="lni lni-users"></i></div>
        <div class="menu-title">By Gender</div>
    </a>
</li>

<li>
    <a href="">
        <div class="parent-icon"><i class="lni lni-graduation"></i></div>
        <div class="menu-title">By Qualification</div>
    </a>
</li>

<li>
    <a href="">
        <div class="parent-icon"><i class="lni lni-coin"></i></div>
        <div class="menu-title">By Pay Structure</div>
    </a>
</li>

<li>
    <a href="">
        <div class="parent-icon"><i class="lni lni-warning"></i></div>
        <div class="menu-title">Retired Staff</div>
    </a>
</li>

<li>
    <a href="">
        <div class="parent-icon"><i class="lni lni-alarm-clock"></i></div>
        <div class="menu-title">Retiring Soon</div>
    </a>
</li>

    
      
    </ul>
    <!--end navigation-->
</div>