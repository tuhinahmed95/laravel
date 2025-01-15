
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	<!-- core:css -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('backend')}}/assets/vendors/core/core.css">
	<!-- endinject -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('backend')}}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('backend')}}/assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="{{asset('backend')}}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
  integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <!-- Layout styles -->
	<link rel="stylesheet" href="{{asset('backend')}}/assets/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{asset('backend')}}/assets/images/favicon.png" />
  <style>
    .upload__box {
  padding:0;
}
.upload__inputfile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}
.upload__btn {
    display: block;
    font-weight: 600;
    color: #fff;
    text-align: center;
    min-width: 116px;
    padding: 6px;
    transition: all 0.3s ease;
    cursor: pointer;
    border: 2px solid;
    background-color: transparent;
    border-color: #f2f2f2;
    font-size: 14px;
    color: #000;
}
.upload__btn:hover {
  background-color: unset;
  color: #4045ba;
  transition: all 0.3s ease;
}
.upload__btn-box {
  margin-bottom: 10px;
}
.upload__img-wrap {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -10px;
}
.upload__img-box {
  width: 150px;
  padding: 0 10px;
  margin-bottom: 12px;
}
.upload__img-close {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 10px;
  right: 10px;
  text-align: center;
  line-height: 24px;
  z-index: 1;
  cursor: pointer;
}
.upload__img-close:after {
  content: "✖";
  font-size: 14px;
  color: white;
}

.img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding-bottom: 100%;
}
  </style>
</head>
<body>
	<div class="main-wrapper">
	<!-- partial:partials/_sidebar.html -->
	<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{route('dash')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">web apps</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">User</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('user.list')}}" class="nav-link">User List</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Components</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">Category</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('category')}}" class="nav-link">Add Category</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('sub.category')}}" class="nav-link">Add Sub Category</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('category.trash')}}" class="nav-link">Trash Category</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
              <i class="link-icon" data-feather="anchor"></i>
              <span class="link-title">Products</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="advancedUI">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('add.product')}}" class="nav-link">Add New Product</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('product.list')}}" class="nav-link">Product List</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('brand')}}" class="nav-link">Brand</a>
                  </li>
                <li class="nav-item">
                  <a href="{{route('variation')}}" class="nav-link">Variation</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('coupon') }}">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Coupon</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('orders')}}">
              <i class="link-icon" data-feather="pie-chart"></i>
              <span class="link-title">Orders</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cancel.order.list')}}" >
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Order Cancel List</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('role.manage')}}">
              <i class="link-icon" data-feather="smile"></i>
              <span class="link-title">Role Manager</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
          </li>
          <li class="nav-item nav-category">Frontend Section</li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('banner')}}">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Banner</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('offer')}}">
              <i class="link-icon" data-feather="unlock"></i>
              <span class="link-title">Exciting Offers</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('subscribe')}}">
              <i class="link-icon" data-feather="cloud-off"></i>
              <span class="link-title">Subscriber List</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('tag')}}">
              <i class="link-icon" data-feather="cloud-off"></i>
              <span class="link-title">Tags</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
          </li>
          <li class="nav-item nav-category">Docs</li>
          <li class="nav-item">
            <a href="{{route('log.info')}}" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="hash"></i>
              <span class="link-title">Log Info</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- partial -->
    <div class="page-wrapper">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar">
        <a href="#" class="sidebar-toggler">
            <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
            <ul class="navbar-nav">
                <li class="nav-item dropdown nav-messages">
                    <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="mail"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="messageDropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium">9 New Messages</p>
                            <a href="javascript:;" class="text-muted">Clear all</a>
                        </div>
                        <div class="dropdown-body">
                            <a href="javascript:;" class="dropdown-item">
                                <div class="figure">
                                    <img src="https://via.placeholder.com/30x30" alt="userr">
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Leonardo Payne</p>
                                        <p class="sub-text text-muted">2 min ago</p>
                                    </div>
                                    <p class="sub-text text-muted">Project status</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <div class="figure">
                                    <img src="https://via.placeholder.com/30x30" alt="userr">
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Carl Henson</p>
                                        <p class="sub-text text-muted">30 min ago</p>
                                    </div>
                                    <p class="sub-text text-muted">Client meeting</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <div class="figure">
                                    <img src="https://via.placeholder.com/30x30" alt="userr">
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Jensen Combs</p>
                                        <p class="sub-text text-muted">1 hrs ago</p>
                                    </div>
                                    <p class="sub-text text-muted">Project updates</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <div class="figure">
                                    <img src="https://via.placeholder.com/30x30" alt="userr">
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Amiah Burton</p>
                                        <p class="sub-text text-muted">2 hrs ago</p>
                                    </div>
                                    <p class="sub-text text-muted">Project deadline</p>
                                </div>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <div class="figure">
                                    <img src="https://via.placeholder.com/30x30" alt="userr">
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>Yaretzi Mayo</p>
                                        <p class="sub-text text-muted">5 hr ago</p>
                                    </div>
                                    <p class="sub-text text-muted">New record</p>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer d-flex align-items-center justify-content-center">
                            <a href="javascript:;">View all</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown nav-notifications">
                    <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="bell"></i>
                        <div class="indicator">
                            <div class="circle"></div>
                        </div>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium">6 New Notifications</p>
                            <a href="javascript:;" class="text-muted">Clear all</a>
                        </div>
                        <div class="dropdown-body">
                            @foreach (App\Models\OrderCancel::all() as $cancelOrder)
                            <a href="javascript:;" class="dropdown-item">
                                <div class="icon">
                                    <i data-feather="user-plus"></i>
                                </div>
                                <div class="content">
                                    <p>Order Cancel Request</p>
                                    <p>Order ID: {{App\Models\Order::find($cancelOrder->order_id)->order_id}}</p>
                                    <p class="sub-text text-muted">{{$cancelOrder->created_at->diffForHumans()}}</p>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="dropdown-footer d-flex align-items-center justify-content-center">
                            <a href="javascript:;">View all</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown nav-profile">
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      @if (Auth::user()->photo == null)
                        <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                      @else
                      <img width="" src="{{asset('uploads/user')}}/{{Auth::user()->photo}}"/>
                      @endif

                    </a>
                    <div class="dropdown-menu" aria-labelledby="profileDropdown">
                        <div class="dropdown-header d-flex flex-column align-items-center">
                            <div class="figure mb-3">
                              @if (Auth::user()->photo == null)
                                <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                              @else
                              <img width="" src="{{asset('uploads/user')}}/{{Auth::user()->photo}}"/>
                              @endif
                            </div>
                            <div class="info text-center">
                                <p class="name font-weight-bold mb-0">{{Auth::user()->name}}</p>
                                <p class="email text-muted mb-3">{{Auth::user()->email}}</p>
                            </div>
                        </div>
                        <div class="dropdown-body">
                            <ul class="profile-nav p-0 pt-3">
                                <li class="nav-item">
                                    <a href="{{route('user.update')}}" class="nav-link">
                                        <i data-feather="user"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                                            <i data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- partial -->

    <div class="page-content">
        <div class="justify-content-between align-items-center flex-wrap grid-margin">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
            @yield('content')
        </div>
    </div>

    <!-- core:js -->
    <script src="{{asset('backend')}}/assets/vendors/core/core.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{asset('backend')}}/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{asset('backend')}}/assets/vendors/jquery.flot/jquery.flot.js"></script>
    <script src="{{asset('backend')}}/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
    <script src="{{asset('backend')}}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('backend')}}/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="{{asset('backend')}}/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('backend')}}/assets/vendors/feather-icons/feather.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/template.js"></script>
    <!-- endinject -->
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
    integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!-- custom js for this page -->
    <script src="{{asset('backend')}}/assets/js/dashboard.js"></script>
    <script src="{{asset('backend')}}/assets/js/datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- end custom js for this page -->
    @yield('footer_script')
</body>
</html>

