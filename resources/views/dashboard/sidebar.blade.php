<!--  Sidebar starting -->
<!-- Sidebar  add this to class bg-gradient-primary-->
<ul style="background-color:#60c5e4;" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    {{-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{ asset('themes/img/cosnumero.jpg') }}" >
                  <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><img src="img/company_logo.png" > <sup></sup></div>
            </a> --}}

    <a style="margin-left:30px;" class="navbar-brand" href="{{ url('/') }}">
        {{-- color:#80FE01 --}}
        {{-- <span style="font-size:small;color::#8AA1B8;margin-top:-35px;margin-left:-21px;">Cosnumero </span></br> --}}

        {{-- <img style="margin-top:-35px;margin-left:-21px;" src="{{ asset('themes/img/cosnumero.jpg') }}" width="60" height="50" /> --}}

        {{-- <span style="font-size:small;color:#8AA1B8; margin-left:-21px;font-family: 'Georgia', Gadget, serif;">Nature's Way To Life</span> --}}

    </a>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider my-0"> --}}

    <!-- Nav Item - Dashboard -->
    <li style="color:#8AA1B8" class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">
            {{-- <img class="img-profile rounded-circle" src="{{ asset('img/lifecell.png') }}"> --}}
            {{-- <i class="fas fa-fw fa-tachometer-alt"></i> --}}
            <span><img class="img" src="{{ asset('img/lifecell.png') }}"></span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Records
    </div>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Technical</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <!-- add it bg-white -->
            <!-- style="background-color:lightgreen" -->
            <div style="background-color:lightgreen;" class=" py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            
                <a style="font-weight:bold;color:#2E59D9" class="collapse-item" href="{{ route('project_index') }}">Manage Project</a>
                
                {{-- <a style="color:#00bbff" class="collapse-item" href="#" data-toggle="modal" data-target="#multinode">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            MONITOR NODES
                        </a> --}}

                <!-- for inner folder -->
                {{-- <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#labpara"
                                          aria-expanded="true" aria-controls="labpara">
                                          <!-- <i class="fas fa-fw fa-cog"></i> -->
                                          <span>Lab Parameters</span>
                                      </a> --}}
                {{-- <div  id="labpara" class="collapse" aria-labelledby="headingTwo">
                                      <div style="background-color:lightgreen" class=" py-2 collapse-inner rounded">
                                            <a class="collapse-item" href="charts/lab_charts/voc_chart.php">VOC Data</a>
                                            <a class="collapse-item" href="charts/lab_charts/hum_chart.php">Humidity Data</a>
                                            <a class="collapse-item" href="charts/lab_charts/temp_chart.php">Temperature Data</a>
                                            <a class="collapse-item" href="charts/lab_charts/co2_chart.php">Co2 Data</a>
                                      </div>
                                      </div> --}}


                {{-- <!-- for inner folder -->
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#incubatordata"
                    aria-expanded="true" aria-controls="incubatordata">
                    <!-- <i class="fas fa-fw fa-cog"></i> -->
                    <span>Incubator Data</span>
                </a>
                <div id="incubatordata" class="collapse" aria-labelledby="headingTwo">
                    <div style="background-color:#60c5e4;" class=" py-2 collapse-inner rounded">

                        <a class="collapse-item" href="charts/temp_chart.php">Temperature Data</a>
                        <a class="collapse-item" href="charts/co2_chart.php">Co2 Data</a>
                    </div>
                </div> --}}


                {{-- <!-- for inner folder -->
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#weightdata"
                    aria-expanded="true" aria-controls="weightdata">
                    <!-- <i class="fas fa-fw fa-cog"></i> -->
                    <span>Level Monotor Data</span>
                </a>
                <div id="weightdata" class="collapse" aria-labelledby="headingTwo">
                    <div style="background-color:#60c5e4;" class=" py-2 collapse-inner rounded">
                        <a class="collapse-item" href="charts/voc_chart.php">CO2 Data</a>
                        <a class="collapse-item" href="charts/co2_chart.php">N2 Data</a>
                    </div>
                </div> --}}







            </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesdw" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Sales</span>
        </a>
        <div id="collapsesdw" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <!-- add it bg-white -->
            <div style="background-color:lightgreen;" class=" py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->                
                <a style="font-weight:bold;color:#2E59D9" class="collapse-item" href="{{ route('project_index') }}">View Raised Request</a>
                <a style="font-weight:bold;color:#2E59D9" class="collapse-item" href="{{ route('project_create') }}">Raise a request</a>
                <!-- <a class="collapse-item" href="buttons.php">Weighing Scale Data</a>
                        <a class="collapse-item" href="cards.php">Cryocan Data</a>
                        <a class="collapse-item" href="cards.php">Co2 Data</a> -->
            </div>
        </div>
    </li>


    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
                Addons
            </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Financial</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div style="background-color:lightgreen;" class=" py-2 collapse-inner rounded">
                <a style="font-weight:bold;color:#2E59D9" class="collapse-item" href="{{ route('project_index') }}">Review Project</a>
                <a style="font-weight:bold;color:#2E59D9" class="collapse-item" href="{{ route('project_index') }}">View Reviewed Projects</a>

                <!-- <a class="collapse-item" href="utilities-color.php">Patient Records</a>
                        <a class="collapse-item" href="utilities-border.php">Lab Data</a> -->
                <!-- <a class="collapse-item" href="utilities-animation.php">Animations</a> -->
                <!--  <a class="collapse-item" href="utilities-other.php">Other</a> -->

            </div>
        </div>
    </li>



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<!-- end of  Sidebar -->