<div class="header">
    <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
        <a href="#">
            <i class="bi bi-list"></i>
        </a>
    </div>
    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
        {{-- <img width="100" src="{{ url('assets/images/logo.svg') }}" alt="logo"> --}}
        <h1>GiftCard</h1>
    </a>
    <!-- ./ Logo -->
    <div class="page-title">@yield('page-title')</div>
    <div class="header-menu">
        <div class="header-menu-header">
            <a href="{{ url('/') }}" class="top-menu-header-logo">
                <img src="{{ url('assets/images/logo.svg') }}" alt="logo">
            </a>
            <a href="{{ url('/') }}" class="btn btn-sm header-menu-close">
                <i class="bi bi-x"></i>
            </a>
        </div>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="{{ url('assets/images/user/man_avatar3.jpg') }}"
                         class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">Timotheus Bendan</div>
                    <small class="text-muted">Sales Manager</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-person dropdown-item-icon"></i> Profile
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                    <i class="bi bi-gear dropdown-item-icon"></i> Settings
                </a>
                <a href="{{ route('logout') }}" class="dropdown-item d-flex align-items-center text-danger"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        <ul class="navbar-nav">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link @if(!request()->segment(1)) active @endif">
                    <i class="bi bi-speedometer2"></i>
                   Dashboard
                </a>
                <div class="nav-sub-menu">
                    <ul>
                        <li>
                            <a @if(!request()->segment(1) || request()->is('dashboard')) class="active"
                               @endif href="{{ route('dashboard') }}">Dashboard</a>
                               <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a @if(request()->is('users-list')) class="active"
                                           @endif href="{{ route('users.index') }}"> User List
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('roles-add')) class="active"
                                           @endif href="{{ route('roles.index') }}">Role List
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('banner-add')) class="active"
                                           @endif href="{{ route('banner.index') }}">Banner List
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Products</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a @if(request()->is('product-list')) class="active"
                                           @endif href="{{ route('products.index') }}"> Product List
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('category-list')) class="active"
                                           @endif href="{{ route('categories.index') }}"> Category List
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('subcategories-list')) class="active"
                                           @endif href="{{ route('subcategories.index') }}"> Subcategory List
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Orders</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a @if(request()->is('orders')) class="active"
                                           @endif href="{{ route('orders.index') }}">Order List</a>
                                    </li>
                                    {{-- <li>
                                        <a @if(request()->is('order-detail')) class="active"
                                           @endif href="{{ route('order-detail') }}">Order Detail</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Vouchers</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a @if(request()->is('vouchers-detail')) class="active"
                                           @endif href="{{ route('vouchers.index') }}">Vouchers List</a>
                                    </li>
                                    {{-- <li>
                                        <a @if(request()->is('vouchers-detail')) class="active"
                                           @endif href="{{ route('vouchers.create') }}">Add Vouchers</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Shops / Store </a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a @if(request()->is('shops-detail')) class="active"
                                           @endif href="{{ route('shops.index') }}">Shops List</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('store-detail')) class="active"
                                           @endif href="{{ route('stores.index') }}">Store List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            {{-- <a href="#">Product Review </a> --}}
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a @if(request()->is('review-detail')) class="active"
                                           @endif href="">Review List</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                        
                        {{-- <li>
                            <a href="#">Buyer</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a @if(request()->is('buyer-dashboard')) class="active"
                                           @endif href="{{ route('buyer-dashboard') }}">Dashboard</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('buyer-orders')) class="active"
                                           @endif href="{{ route('buyer-orders') }}">Orders</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('buyer-addresses')) class="active"
                                           @endif href="{{ route('buyer-addresses') }}">Addresses</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('buyer-wishlist')) class="active"
                                           @endif href="{{ route('buyer-wishlist') }}">Wishlist</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                       
                        {{-- <li>
                            <a href="#">Invoices</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('invoices') }}"
                                           @if(request()->segment(1) == 'invoices') class="active" @endif>List</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('invoice-detail') }}"
                                           @if(request()->segment(1) == 'invoice-detail') class="active" @endif>Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-app"></i>
                    Support
                </a>
                <div class="nav-sub-menu">
                    <ul>
                        <li>
                            <a href="{{ route('chats') }}" @if(request()->is('chats')) class="active" @endif>Chats</a>
                        </li>
                        <li>
                            <a href="#">Email</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('email') }}"
                                           @if(request()->is('email')) class="active" @endif>Inbox</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('email-detail') }}"
                                           @if(request()->is('email-detail')) class="active" @endif>Email Details</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('email-template') }}" target="_blank">Email Template</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Todo List</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('todo-list') }}"
                                           @if(request()->is('todo-list')) class="active" @endif>Todo List</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('todo-detail') }}"
                                           @if(request()->is('todo-detail')) class="active" @endif>Todo Details</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-textarea"></i>
                    Pages
                </a>
                <div class="nav-sub-menu">
                    <ul>
                        <li>
                            <a href="#">Profile</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a @if(request()->is('profile-posts')) class="active"
                                           @endif href="{{ route('profile-posts') }}">Post</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('profile-connections')) class="active"
                                           @endif href="{{ route('profile-connections') }}">Connections</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Users</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li><a @if(request()->segment(1) == 'user-list') class="active"
                                           @endif href="{{ route('user-list') }}">List View</a></li>
                                    <li><a @if(request()->segment(1) == 'user-grid') class="active"
                                           @endif href="{{ route('user-grid') }}">Grid View</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Authentication</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('login') }}" target="_blank">Login</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}" target="_blank">Register</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('reset-password') }}" target="_blank">Reset Password</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('lock-screen') }}" target="_blank">Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('account-verified') }}" target="_blank">Account Verified</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Error Pages</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('404') }}" target="_blank">404</a>
                                    </li>
                                    <li>
                                        <a @if(request()->segment(1) == 'access-denied') class="active"
                                           @endif href="{{ route('access-denied') }}">Access Denied</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('under-construction') }}" target="_blank">Under
                                            Construction</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'settings') class="active"
                               @endif href="{{ route('settings') }}">Settings</a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'pricing-table') class="active"
                               @endif href="{{ route('pricing-table') }}">Pricing Table</a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'search-page') class="active"
                               @endif href="{{ route('search-page') }}">Search Page</a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'faq') class="active"
                               @endif href="{{ route('faq') }}">FAQ</a>
                        </li>
                    </ul>
                </div>
            </li> --}}
            {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-lock"></i>
                    UI
                </a>
                <div class="nav-sub-menu">
                    <ul>
                        <li>
                            <a href="#" target="_blank">Components</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a @if(request()->is('accordion')) class="active"
                                           @endif href="{{ route('accordion') }}">Accordion</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('alert')) class="active"
                                           @endif href="{{ route('alert') }}">Alerts</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('badge')) class="active"
                                           @endif href="{{ route('badge') }}">Badge</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('breadcrumb')) class="active"
                                           @endif href="{{ route('breadcrumb') }}">Breadcrumb</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('buttons')) class="active"
                                           @endif href="{{ route('buttons') }}">Buttons</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('button-group')) class="active"
                                           @endif href="{{ route('button-group') }}">Button Group</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('card')) class="active"
                                           @endif href="{{ route('card') }}">Card</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('card-masonry')) class="active"
                                           @endif href="{{ route('card-masonry') }}">Card Masonry</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('carousel')) class="active"
                                           @endif href="{{ route('carousel') }}">Carousel</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('collapse')) class="active"
                                           @endif href="{{ route('collapse') }}">Collapse</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('dropdown')) class="active"
                                           @endif href="{{ route('dropdown') }}">Dropdowns</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('list-group')) class="active"
                                           @endif href="{{ route('list-group') }}">List Group</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('modal')) class="active"
                                           @endif href="{{ route('modal') }}">Modal</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('navs-tabs')) class="active"
                                           @endif href="{{ route('navs-tabs') }}">Navs and Tabs</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('pagination')) class="active"
                                           @endif href="{{ route('pagination') }}">Pagination</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('popovers')) class="active"
                                           @endif href="{{ route('popovers') }}">Popovers</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('progress')) class="active"
                                           @endif href="{{ route('progress') }}">Progress</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('spinners')) class="active"
                                           @endif href="{{ route('spinners') }}">Spinners</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('toasts')) class="active"
                                           @endif href="{{ route('toasts') }}">Toasts</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('tables')) class="active"
                                           @endif href="{{ route('tables') }}">
                                            <span>Tables</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('tooltip')) class="active"
                                           @endif href="{{ route('tooltip') }}">Tooltip</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" target="_blank">Forms</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a href="#">Form Elements</a>
                                        <div class="nav-sub-menu">
                                            <ul>
                                                <li>
                                                    <a @if(request()->is('forms')) class="active"
                                                       @endif href="{{ route('forms') }}">Overview</a>
                                                </li>
                                                <li>
                                                    <a @if(request()->is('form-control')) class="active"
                                                       @endif href="{{ route('form-control') }}">Form Controls</a>
                                                </li>
                                                <li>
                                                    <a @if(request()->is('select')) class="active"
                                                       @endif href="{{ route('select') }}">Select</a>
                                                </li>
                                                <li>
                                                    <a @if(request()->is('checks-radios')) class="active"
                                                       @endif href="{{ route('checks-radios') }}">Checks and Radios</a>
                                                </li>
                                                <li>
                                                    <a @if(request()->is('range')) class="active"
                                                       @endif href="{{ route('range') }}">Range</a>
                                                </li>
                                                <li>
                                                    <a @if(request()->is('input-group')) class="active"
                                                       @endif href="{{ route('input-group') }}">Input Group</a>
                                                </li>
                                                <li>
                                                    <a @if(request()->is('floating-label')) class="active"
                                                       @endif href="{{ route('floating-label') }}">Floating Label</a>
                                                </li>
                                                <li>
                                                    <a @if(request()->is('forms-layout')) class="active"
                                                       @endif href="{{ route('forms-layout') }}">Form Layout</a>
                                                </li>
                                                <li>
                                                    <a @if(request()->is('form-validation')) class="active"
                                                       @endif href="{{ route('form-validation') }}">Validation</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a @if(request()->is('form-wizard')) class="active"
                                           @endif href="{{ route('form-wizard') }}">
                                            <span>Wizard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('form-repeater')) class="active"
                                           @endif href="{{ route('form-repeater') }}">
                                            <span>Repeater</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('file-upload')) class="active"
                                           @endif href="{{ route('file-upload') }}">
                                            <span>File Upload</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('ckeditor')) class="active"
                                           @endif href="{{ route('ckeditor') }}">
                                            <span>CKEditor</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('range-slider')) class="active"
                                           @endif href="{{ route('range-slider') }}">
                                            <span>Range Slider</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('select2')) class="active"
                                           @endif href="{{ route('select2') }}">
                                            <span>Select2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('tags-input')) class="active"
                                           @endif href="{{ route('tags-input') }}">
                                            <span>Tags Input</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('input-mask')) class="active"
                                           @endif href="{{ route('input-mask') }}">
                                            <span>Input Mask</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('datepicker')) class="active"
                                           @endif href="{{ route('datepicker') }}">
                                            <span>Datepicker</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('clockpicker')) class="active"
                                           @endif href="{{ route('clockpicker') }}">
                                            <span>Clock Picker</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Content</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a @if(request()->is('typography')) class="active"
                                           @endif href="{{ route('typography') }}">
                                            <span>Typography</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('images')) class="active"
                                           @endif href="{{ route('images') }}">
                                            <span>Images</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('figures')) class="active"
                                           @endif href="{{ route('figures') }}">
                                            <span>Figures</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('avatar')) class="active"
                                           @endif href="{{ route('avatar') }}">
                                            <span>Avatar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('icons')) class="active"
                                           @endif href="{{ route('icons') }}">
                                            <span>Icons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('colors')) class="active"
                                           @endif href="{{ route('colors') }}">
                                            <span>Colors</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Charts</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a @if(request()->is('apexchart')) class="active"
                                           @endif href="{{ route('apexchart') }}">Apex Chart</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('chartjs')) class="active"
                                           @endif href="{{ route('chartjs') }}">Chartjs</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('justgage')) class="active"
                                           @endif href="{{ route('justgage') }}">Justgage</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('morsis')) class="active"
                                           @endif href="{{ route('morsis') }}">Morsis</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Extensions</a>
                            <div class="nav-sub-menu">
                                <ul>
                                    <li>
                                        <a @if(request()->is('vector-map')) class="active"
                                           @endif href="{{ route('vector-map') }}">
                                            <span>Vector Map</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('datatable')) class="active"
                                           @endif href="{{ route('datatable') }}">
                                            <span>Datatable</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('sweet-alert')) class="active"
                                           @endif href="{{ route('sweet-alert') }}">Sweet Alert</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('lightbox')) class="active"
                                           @endif href="{{ route('lightbox') }}">Lightbox</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('introjs')) class="active"
                                           @endif href="{{ route('introjs') }}">Introjs</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('nestable')) class="active"
                                           @endif href="{{ route('nestable') }}">Nestable</a>
                                    </li>
                                    <li>
                                        <a @if(request()->is('rating')) class="active"
                                           @endif href="{{ route('rating') }}">Rating</a>
                                    </li>
                                    <li>
                                        
                                        <a @if(request()->is('code-highlighter')) class="active"
                                           @endif href="{{ route('code-highlighter') }}">Code Highlighter</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li> --}}
            <li class="nav-item">
                <a class="text-success" href="{{ route('settings', Auth::user()->id) }}">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
            </li>
            <li class="nav-item">
               
                <a href="{{ route('logout') }}" class="dropdown-item d-flex align-items-center text-danger"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>   
            </li>
            @endguest
        </ul>
    </div>
    <div class="header-bar ms-auto">
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item dropdown">
                {{-- <a href="#" class="nav-link" data-bs-toggle="dropdown">
                    <i class="bi bi-search icon-lg"></i>
                </a> --}}
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <h6 class="m-0 px-4 py-3 border-bottom">Search</h6>
                    <div class="dropdown-menu-body">
                        <div class="px-4 py-3">
                            <form>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search..."
                                           aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <button class="btn btn-outline-light" type="button" id="button-addon1">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                            <h6 class="mb-3">Last searched</h6>
                            <div>
                                <div class="d-flex align-items-center mb-3">
                                    <a href="#" class="avatar avatar-sm me-3">
                                    <span class="avatar-text rounded-circle">
                                        <i class="bi bi-search"></i>
                                    </span>
                                    </a>
                                    <a href="#" class="flex-fill">Reports for 2021</a>
                                    <a href="#" class="btn btn-sm" data-bs-toggle="tooltip" title=""
                                       data-bs-original-title="Remove">
                                        <i class="bi bi-x"></i>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <a href="#" class="avatar avatar-sm me-3">
                                    <span class="avatar-text rounded-circle">
                                        <i class="bi bi-search"></i>
                                    </span>
                                    </a>
                                    <a href="#" class="flex-fill">Current users</a>
                                    <a href="#" class="btn btn-sm" data-bs-toggle="tooltip" title=""
                                       data-bs-original-title="Remove">
                                        <i class="bi bi-x"></i>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <a href="#" class="avatar avatar-sm me-3">
                                    <span class="avatar-text rounded-circle">
                                        <i class="bi bi-search"></i>
                                    </span>
                                    </a>
                                    <a href="#" class="flex-fill">Meeting notes</a>
                                    <a href="#" class="btn btn-sm" data-bs-toggle="tooltip" title=""
                                       data-bs-original-title="Remove">
                                        <i class="bi bi-x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            {{-- <li class="nav-item">
                <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
                    <i class="bi bi-bell icon-lg"></i>
                </a>
            </li> --}}
            <li class="nav-item dropdown">
                {{-- <a href="#" class="nav-link nav-link-notify" data-count="3" data-bs-toggle="dropdown">
                    <i class="bi bi-cart2 icon-lg"></i>
                </a> --}}
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <h6 class="m-0 px-4 py-3 border-bottom">Shopping Cart</h6>
                    <div class="dropdown-menu-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="{{ url('assets/images/products/3.jpg') }}" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Digital clock</h6>
                                    <div>1 x $1.190,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="{{ url('assets/images/products/4.jpg') }}" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Toy Car</h6>
                                    <div>1 x $139.58</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="{{ url('assets/images/products/5.jpg') }}" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Sunglasses</h6>
                                    <div>2 x $50,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="{{ url('assets/images/products/6.jpg') }}" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Cake</h6>
                                    <div>1 x $10,50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="m-0 px-4 py-3 border-top small">Sub Total : <strong
                            class="text-primary">$1.442,78</strong></h6>
                </div>
            </li>
            <li class="nav-item ms-3">
                @yield('header-action-button')
            </li>
        </ul>
    </div>
    <!-- Header mobile buttons -->
    <div class="header-mobile-buttons">
        <a href="#" class="actions-btn">
            <i class="bi bi-three-dots"></i>
        </a>
    </div>
    <!-- ./ Header mobile buttons -->
</div>
