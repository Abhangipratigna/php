<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            manage employee
                            </a>
                          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Add team 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Add team </a>
                                    <a class="nav-link" href="layout-sidenav-light.html">manage team </a>
                                </nav>
                            </div>
                            <a class="nav-link" href="<?php echo $mainurl;?>managecontact">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                manage contact
                                <button type="button" class="btn btn-primary ms-3">
                                            <span class="badge bg-danger"><?php echo $countalldata[0]["total"]?></span>
                                          </button>
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                manage feedback
                            </a>
                        </div>
                    </div>
                   