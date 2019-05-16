
@include('layouts.partial.loading')



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
@if(Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
 <div class="page">
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/back-end">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user-shield"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/back-end">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

     
     
 @if(Auth::user()->role_id == 1)

<li class="nav-item">
        <a class="nav-link" href="/jobseekerlist">
         <i class="fas fa-list"></i>
          <span>Job Seeker List</span></a>
      </li>

<li class="nav-item">
        <a class="nav-link" href="/adminapplylist">
         <i class="fas fa-list"></i>
          <span>Job Applied List</span></a>
      </li>

<li class="nav-item">
        <a class="nav-link" href="/jobownerlist">
        <i class="fas fa-list"></i>
          <span>Job Owner List</span></a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="/industry">
          <i class="fas fa-plus-square"></i>
          <span>Create Industry</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/log-viewer">
         <i class="fas fa-bookmark"></i>
          <span>Log Viewer</span></a>
      </li>
  <li class="nav-item">
        <a class="nav-link" href="/adminreport">
         <i class="fas fa-book"></i>
          <span>Report</span></a>
      </li>    

</ul>
       @endif  

        @if(Auth::user()->role_id == 2)

 <li class="nav-item">
        <a class="nav-link" href="/jobseekerlist">
         <i class="fas fa-list"></i>
          <span>Job Seeker List</span></a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="/postjob">
          <i class="fas fa-plus-square"></i>
          <span>Job Create</span></a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="/applylist">
         <i class="fas fa-list"></i>
          <span>Job Applied List</span></a>
      </li>
 <li class="nav-item">
        <a class="nav-link" href="/ownerreport">
         <i class="fas fa-book"></i>
          <span>Report</span></a>
      </li> 
<li class="nav-item">
        <a class="nav-link" href="/">
      <i class="fas fa-home"></i>
          <span>View Page</span></a>
      </li> 
       @endif 
      <!-- Nav Item - Tables -->
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            
            <!-- Nav Item - Messages -->
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
               @if(Auth::user()->role_id==1)
                <img class="img-profile rounded-circle" src="https://www.freeiconspng.com/uploads/businessman-icon-16.jpg">
                @endif
                 @if(Auth::user()->role_id==2)
                <img class="img-profile rounded-circle" src="https://cdn.dribbble.com/users/722246/screenshots/2076327/character-animated-2.gif">
                @endif
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                 @if(Auth::user()->role_id==2)
                <a class="dropdown-item" href="/viewjobowner">
                 
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                
                </a>
                 
                <div class="dropdown-divider"></div>
                 @endif
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
         <div class="container-fluid">

         	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Industry</h1>
            
          </div>
        @endif
<div class="container">
	{{$industry->links()}}
 @foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert"id="alert">
*{{$error}}
</div>
 @endforeach
<div class="row">
	<div class="col-md-4 card">
		<form action="/industry/store" method="post"> 
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		
			<label>Company Type:</label>
			 <input class="form-control" type='text' name='name'/>
			 <br>
			  	<input class="btn btn-primary"type='submit' value="Add Industry"/>
			
			 
		</form>

	</div>
	<div class="col-md-8">
                                  
  <table class="table table-striped"style="overflow-x:auto;">
   
      <tr>
        <th>ID</th>
        <th>Name</th>
        
        <th>Action</th>
      </tr>
    @foreach ($industry as $ind) 

  <tr>
   <td>{{ $ind->industry_id }}</td> 
   <td>{{ $ind->name }}</td>
   <td>
<a href='industry/edit/{{ $ind->industry_id }}'data-toggle="modal" data-target="#exampleModal"data-title="{{ $ind->name }}"
data-id="{{ $ind->industry_id }}"
	><i class="fas fa-edit"></i></i></a>

   </td>

      </tr>
       @endforeach 
    
     

 
  
  </table>
 

</div>
</div>
</div>

</div>


<form method="post"action="/industry/update">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
    <label>Company Type:</label>
    <input type="hidden" name="id"id="id">
    <input type="text" class="form-control" id="comtype"name="comtype">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
<div id="loading"></div>
 
@if(Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
</div>
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; AI Project Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a href="route('logout')" class="btn btn-primary btn-flat"

        onclick="event.preventDefault();

          document.getElementById('logout-form').submit();">  {{__('Logout') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>   
        </div>
      </div>
    </div>
  </div>
  </div>
 @endif

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script type="text/javascript">
  	$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 

  var comtype = button.data('title')
  var id=button.data('id')
  var modal = $(this)

  modal.find('.modal-body #comtype').val(comtype)
  modal.find('.modal-body #id').val(id)
})
  </script>
<script type="text/javascript">
  setTimeout(function(){
 
    $(".alert").hide("20")
 
    }, 1000);

</script>
</body>

</html>

