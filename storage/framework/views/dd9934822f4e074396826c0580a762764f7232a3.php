<!DOCTYPE html>
<html lang="pt-br">
<?php echo $__env->make('adm.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body data-topbar="colored">

<div id="layout-wrapper">

    
    <?php echo $__env->make('adm.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('adm.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Dashboard</h4>
                            </div>

                            <div class="state-information d-none d-sm-block">
                                <div class="state-graph">
                                    <div id="header-chart-1"></div>
                                    <div class="info">Balance $ 2,317</div>
                                </div>
                                <div class="state-graph">
                                    <div id="header-chart-2"></div>
                                    <div class="info">Item Sold 1230</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- Start page content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h5 class="text-uppercase verti-label font-size-16 text-white-50">Orçamentos
                                        </h5>
                                        <div class="text-white">
                                            <h5 class="text-uppercase font-size-16 text-white-50">Orçamentos</h5>
                                            <h3 class="mb-3 text-white">1,587</h3>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-cube-outline display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h5 class="text-uppercase verti-label font-size-16 text-white-50">Pageviews
                                        </h5>
                                        <div class="text-white">
                                            <h5 class="text-uppercase font-size-16 text-white-50">Pageviews</h5>
                                            <h3 class="mb-3 text-white">16,785</h3>

                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-buffer display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-xl-4 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h5 class="text-uppercase verti-label font-size-16 text-white-50">Visitas Mês
                                        </h5>
                                        <div class="text-white">
                                            <h5 class="text-uppercase font-size-16 text-white-50">Visitas Mês</h5>
                                            <h3 class="mb-3 text-white">6,785</h3>

                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-buffer display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->


                        <!-- End Col -->


                        <!-- End Col -->
                    </div>
                    <!-- End Row -->



                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Marcas mais buscadas</h4>
                                    <div data-simplebar style="max-height: 334px;">
                                        <div class="inbox-wid">
                                            <a href="#" class="text-dark">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img float-start me-3"><img
                                                                src="assets/images/users/avatar-1.jpg"
                                                                class="avatar-md rounded-circle" alt=""></div>
                                                    <h6 class="inbox-item-author mb-1 text-dark">Irene</h6>
                                                    <p class="inbox-item-text text-muted mb-0">Hey! there I'm
                                                        available...</p>
                                                    <p class="inbox-item-date text-muted">13:40 PM</p>
                                                </div>
                                            </a>
                                            <a href="#" class="text-dark">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img float-start me-3"><img
                                                                src="assets/images/users/avatar-2.jpg"
                                                                class="avatar-md rounded-circle" alt=""></div>
                                                    <h6 class="inbox-item-author mb-1 text-dark">Jennifer</h6>
                                                    <p class="inbox-item-text text-muted mb-0">I've finished it! See
                                                        you
                                                        so...</p>
                                                    <p class="inbox-item-date text-muted">13:34 PM</p>
                                                </div>
                                            </a>
                                            <a href="#" class="text-dark">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img float-start me-3"><img
                                                                src="assets/images/users/avatar-3.jpg"
                                                                class="avatar-md rounded-circle" alt=""></div>
                                                    <h6 class="inbox-item-author mb-1 text-dark">Richard</h6>
                                                    <p class="inbox-item-text text-muted mb-0">This theme is
                                                        awesome!
                                                    </p>
                                                    <p class="inbox-item-date text-muted">13:17 PM</p>
                                                </div>
                                            </a>
                                            <a href="#" class="text-dark">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img float-start me-3"><img
                                                                src="assets/images/users/avatar-4.jpg"
                                                                class="avatar-md rounded-circle" alt=""></div>
                                                    <h6 class="inbox-item-author mb-1 text-dark">Martin</h6>
                                                    <p class="inbox-item-text text-muted mb-0">Nice to meet you</p>
                                                    <p class="inbox-item-date text-muted">12:20 PM</p>
                                                </div>
                                            </a>
                                            <a href="#" class="text-dark">
                                                <div class="inbox-item">
                                                    <div class="inbox-item-img float-start me-3"><img
                                                                src="assets/images/users/avatar-5.jpg"
                                                                class="avatar-md rounded-circle" alt=""></div>
                                                    <h6 class="inbox-item-author mb-1 text-dark">Sean</h6>
                                                    <p class="inbox-item-text text-muted mb-0">Hey! there I'm
                                                        available...</p>
                                                    <p class="inbox-item-date text-muted">11:47 AM</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-5 text-dark">Modelos mais visitados</h4>
                                    <div>
                                        <ul class="nav nav-pills nav-justified recent-activity-tab mb-4"
                                            id="recent-activity-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="activity1-tab" data-bs-toggle="pill"
                                                   href="#activity1" role="tab" aria-controls="activity1"
                                                   aria-selected="true">21 Sep</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="activity2-tab" data-bs-toggle="pill"
                                                   href="#activity2" role="tab" aria-controls="activity2"
                                                   aria-selected="false">22 Sep</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="activity3-tab" data-bs-toggle="pill"
                                                   href="#activity3" role="tab" aria-controls="activity3"
                                                   aria-selected="false">23 Sep</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="activity4-tab" data-bs-toggle="pill"
                                                   href="#activity4" role="tab" aria-controls="activity4"
                                                   aria-selected="false">24 Sep</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="activity1" role="tabpanel"
                                                 aria-labelledby="activity1-tab">
                                                <div class="p-3">
                                                    <div class="text-muted">
                                                        <p>21 Sep, 2018</p>
                                                        <h5 class="text-dark font-size-16">Responded to need
                                                            “Volunteer
                                                            Activities”</h5>
                                                        <p>Aenean vulputate eleifend tellus</p>
                                                        <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae
                                                            sapien ut libero venenatis faucibus Nullam quis ante.
                                                        </p>
                                                        <a href="#" class="text-primary">Read More...</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="activity2" role="tabpanel"
                                                 aria-labelledby="activity2-tab">
                                                <div class="p-3">
                                                    <div class="text-muted">
                                                        <p>22 Sep, 2018</p>
                                                        <h5 class="text-dark font-size-16">Added an interest
                                                            “Volunteer
                                                            Activities”</h5>
                                                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit
                                                            amet consectetur velit sed quia non tempora incidunt.
                                                        </p>
                                                        <p>Ut enim ad minima veniam quis nostrum</p>
                                                        <a href="#" class="text-primary">Read More...</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="activity3" role="tabpanel"
                                                 aria-labelledby="activity3-tab">
                                                <div class="p-3">
                                                    <div class="text-muted">
                                                        <p>23 Sep, 2018</p>
                                                        <h5 class="text-dark font-size-16">Joined the group
                                                            “Boardsmanship Forum”
                                                        </h5>
                                                        <p>Nemo enim voluptatem quia voluptas</p>
                                                        <p>Donec pede justo fringilla vel aliquet nec vulputate eget
                                                            arcu. In enim justo rhoncus ut imperdiet a venenatis
                                                            vitae. </p>
                                                        <a href="#" class="text-primary">Read More...</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="activity4" role="tabpanel"
                                                 aria-labelledby="activity4-tab">
                                                <div class="p-3">
                                                    <div class="text-muted">
                                                        <p>24 Sep, 2018</p>
                                                        <h5 class="text-dark font-size-16">Attending the event “Some
                                                            New Event”
                                                        </h5>
                                                        <p>At vero eos et accusamus et iusto odio</p>
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit
                                                            voluptatem accusantium doloremque laudantium </p>
                                                        <a href="#" class="text-primary">Read More...</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Últimas Interações</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle mb-0">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <h5 class="font-size-16">Computers</h5>
                                                    <p class="text-muted mb-0">The languages only differ</p>
                                                </td>
                                                <td>
                                                    <div>
                                                                    <span class="peity-pie"
                                                                          data-peity='{ "fill": ["#1b82ec", "#f2f2f2"]}'
                                                                          data-width="54" data-height="54">70/100</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-16">70%</h5>
                                                    <p class="text-muted mb-0">Sales</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="font-size-16">Laptops</h5>
                                                    <p class="text-muted mb-0">Maecenas tempus tellus</p>
                                                </td>
                                                <td>
                                                    <div>
                                                                    <span class="peity-donut"
                                                                          data-peity='{ "fill": ["#f5b225", "#f2f2f2"], "innerRadius": 20, "radius": 32 }'
                                                                          data-width="54" data-height="54">9,4</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-16">84%</h5>
                                                    <p class="text-muted mb-0">Sales</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="font-size-16">Ipad</h5>
                                                    <p class="text-muted mb-0">Donec pede justo</p>
                                                </td>
                                                <td>
                                                    <div>
                                                                    <span class="peity-pie"
                                                                          data-peity='{ "fill": ["#1b82ec", "#f2f2f2"]}'
                                                                          data-width="54" data-height="54">62/100</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-16">62%</h5>
                                                    <p class="text-muted mb-0">Sales</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="font-size-16">Mobile</h5>
                                                    <p class="text-muted mb-0">Aenean leo ligula</p>
                                                </td>
                                                <td>
                                                    <div>
                                                                    <span class="peity-donut"
                                                                          data-peity='{ "fill": ["#f5b225", "#f2f2f2"], "innerRadius": 20, "radius": 32 }'
                                                                          data-width="54" data-height="54">20,4</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-16">89%</h5>
                                                    <p class="text-muted mb-0">Sales</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- end row -->



                </div>
                <!-- end page-content-wrapper-->

            </div>
            <!-- Container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <script>document.write(new Date().getFullYear())</script> © Agência Digital Vertex <span
                                class="d-none d-sm-inline-block"></span>
                    </div>

                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<?php echo $__env->make('adm.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH /home/servidor/Sites/ph/resources/views/adm/painel.blade.php ENDPATH**/ ?>