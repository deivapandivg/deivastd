<!DOCTYPE html>
<html>
    <?php include('config.php');?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@webpixels/css@1.1.5/dist/index.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
    <script src="jquery-3.6.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
<!-- <a href="https://webpixels.io/components?ref=codepen" class="btn w-full btn-primary text-truncate rounded-0 py-2 border-0 position-relative" style="z-index: 1000;">
    <strong>Crafted with Webpixels CSS:</strong> The design system for Bootstrap 5. Browse all components →
</a> -->

<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="...">
            </a>
            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-parent-child">
                            <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
                            <span class="avatar-child avatar-badge bg-success"></span>
                        </div>
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                        <!-- <a href="#" class="dropdown-item">Profile</a> -->
                        <!-- <a href="#" class="dropdown-item">Settings</a> -->
                        <!-- <a href="#" class="dropdown-item">Billing</a> -->
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-house"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bar-chart"></i> Analitycs
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <!-- <hr class="navbar-divider  opacity-20"> -->
                <!-- Navigation -->
                <!-- Push content down -->
                <!-- <div class="mt-auto"></div> -->
                <!-- User (md) -->
                <ul class="navbar-nav">
                   <!--  <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-person-square"></i> Account
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom py-5">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">Application</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">
                                <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-pencil"></i>
                                    </span>
                                    <span>Edit</span>
                                </a>
                                <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Create</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->
                    <!-- <ul class="nav nav-tabs mt-4 overflow-x border-0">
                        <li class="nav-item ">
                            <a href="#" class="nav-link active">All files</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link font-regular">Shared</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link font-regular">File requests</a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->
                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Applications</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table  table-striped  Student">
                            <thead class="thead-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                     <th>MobileNumber</th>
                                    <th>Dob</th>
                                    <th>Gender</th>
                                    <th>Qualification</th>
                                    <th>Address</th>
                                    <th>State</th>
                                    <th>District</th>
                                    <th>CreatedAt</th> 
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            
                             $Getstudents=mysqli_query($con, "SELECT a.StdId,a.StdName,a.EmailId,a.MobileNumber,a.Dob,a.Gender,b.QualificationName, a.Qualification,a.Address,c.State,d.District,a.CreatedAt FROM students as a LEFT JOIN qualifications as b on a.Qualification =  b.QualificationId LEFT JOIN State as c on a.State=c.StateId LEFT JOIN district as d on a.District=d.DistrictId WHERE a.deleted= 'No'");
                                while($RowStd=mysqli_fetch_array($Getstudents))
                                {
                                    $qualifications = explode(',', $RowStd['Qualification']);
                                      $qualificationNames = array();
                                        foreach ($qualifications as $qualificationsss) {
                                        $qualificationNameQuery = mysqli_query($con, "SELECT QualificationName FROM qualifications WHERE QualificationId = '$qualificationsss'");
                                        $qualificationNameResult = mysqli_fetch_assoc($qualificationNameQuery);
                                        $qualificationNames[] = $qualificationNameResult['QualificationName'];
                                    }

                                    $qualificationNamesString = implode(', ', $qualificationNames);
                                ?>
                                <tr>
                                    <td><?= $RowStd['StdId'] ?> </td>
                                    <td><?= $RowStd['StdName'] ?> </td>
                                    <td><?= $RowStd['EmailId'] ?> </td>
                                    <td><?= $RowStd['MobileNumber'] ?> </td>
                                    <td><?= $RowStd['Dob'] ?> </td>
                                    <td><?= $RowStd['Gender'] ?> </td>
                                    
                                    <td><?= $qualificationNamesString ?> </td> 

                                    <td><?= $RowStd['Address'] ?> </td>
                                    <td><?= $RowStd['State'] ?> </td>
                                    <td><?= $RowStd['District'] ?> </td>
                                    <td><?= $RowStd['CreatedAt'] ?> </td> 
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                    <!-- <div class="card-footer border-0 py-5">
                        <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
                    </div> -->
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">
       $(".Student").DataTable({
      "destroy" : true,
      "order": [[ 0, "desc" ]],
      "pageLength" : 25,
      "stateSave" : true,
   });
</script>
</body>
</html>