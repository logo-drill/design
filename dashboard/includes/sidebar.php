<sidebar class="sidebar" id="sidebar">
    <div class="sidebar-logo"> <button class="sidebar-toggle active" type="button" title="Click to hide"> <span
                class="sidebar-toggle-icon"><span class="toggle-line"></span></span> </button>
        <a href="#" class="logo">
            <img title="Admin" src="./media/logos/logo.svg" alt="Admin"> </a>
    </div>
    <div class="sidebar-menu" id="sidebar-menu">
        <ul class="sidebar-nav">
            <li class="sidebar-nav-item">
                <a class="sidebar-nav-section">
                    <span class="sidebar-nav-icon">
                        <svg class="svg" width="24" height="24">
                            <use xlink:href="./media/retina/sprite-aside-menu.svg#dashboard"> </use>
                        </svg>
                    </span>
                    <span class="sidebar-nav-title">Dashboard</span> </a>
            </li>
            <li class="sidebar-nav-item">
                <a class="sidebar-nav-section">
                    <span class="sidebar-nav-icon">
                        <svg class="svg" width="24" height="24">
                            <use xlink:href="./media/retina/sprite-aside-menu.svg#dashboard"> </use>
                        </svg>
                    </span>
                    <span class="sidebar-nav-title">My Logos</span> </a>
            </li>
            <li class="sidebar-nav-item">
                <a class="sidebar-nav-section">
                    <span class="sidebar-nav-icon">
                        <svg class="svg" width="24" height="24">
                            <use xlink:href="./media/retina/sprite-aside-menu.svg#dashboard"> </use>
                        </svg>
                    </span>
                    <span class="sidebar-nav-title">Affiliate</span> </a>
            </li>
            <li class="sidebar-nav-item">
                <a class="sidebar-nav-section">
                    <span class="sidebar-nav-icon">
                        <svg class="svg" width="24" height="24">
                            <use xlink:href="./media/retina/sprite-aside-menu.svg#dashboard"> </use>
                        </svg>
                    </span>
                    <span class="sidebar-nav-title">Notifications</span> </a>
            </li>
            <li class="sidebar-nav-item">
                <a class="sidebar-nav-section">
                    <span class="sidebar-nav-icon">
                        <svg class="svg" width="24" height="24">
                            <use xlink:href="./media/retina/sprite-aside-menu.svg#dashboard"> </use>
                        </svg>
                    </span>
                    <span class="sidebar-nav-title">My Orders</span> </a>
            </li>

            <li class="sidebar-nav-item">
                <button class="sidebar-nav-section dropdown-toggle-custom " type="button" data-bs-toggle="collapse"
                    data-bs-target="#dashboard" aria-expanded="false" aria-controls="collapseOne" title="">
                    <span class="sidebar-nav-icon">
                        <svg class="svg" width="24" height="24">
                            <use xlink:href="./media/retina/sprite-aside-menu.svg#dashboard"> </use>
                        </svg>
                    </span>
                    <span class="sidebar-nav-title">Dashboard</span> <i
                        class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i>
                </button>
                <div class="sidebar-dropdown-menu  collapse show" id="dashboard" aria-labelledby=""
                    data-parent="#sidebar-menu">
                    <ul class="sidebar-nav sidebar-nav-level">
                        <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                href="dashboard-new.php"> <span class="sidebar-nav_text"> Dashboard</span></a> </li>
                        <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                href="index.php"> <span class="sidebar-nav_text"> Default Dashboard</span></a> </li>

                        <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                href="dashboard.php"> <span class="sidebar-nav_text"> Yo!kart Dashboard</span></a> </li>
                        <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                href="notifications.php"> <span class="sidebar-nav_text"> Notification</span></a> </li>
                    </ul>
                </div>
            </li>
            <!-- <li class="sidebar-nav-item">
                <div class="sidebar-nav-label">Projects</div>
            </li> -->
            <li class="sidebar-nav-item">
                <button class="sidebar-nav-section dropdown-toggle-custom collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#projects" aria-expanded="true"
                    aria-controls="collapseOne" title="">
                    <span class="sidebar-nav-icon">
                        <svg class="svg" width="24" height="24">
                            <use xlink:href="./media/retina/sprite-aside-menu.svg#projects"> </use>
                        </svg>
                    </span>
                    <span class="sidebar-nav-title">Projects</span> <i
                        class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i>
                </button>
                <div class="sidebar-dropdown-menu collapse" id="projects" aria-labelledby=""
                    data-parent="#sidebar-menu">
                    <ul class="sidebar-nav sidebar-nav-level">
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="view-project.php"
                                data-bs-target="#project-list" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">List</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="project-list" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="list-columns-1.php"> <span class="sidebar-nav_text">Columns
                                                1</span></a> </li>
                                    <li class="sidebar-nav_item"><a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="list-columns-2.php"> <span class="sidebar-nav_text">Columns 2 </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item"><a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="list-datatable.php"> <span class="sidebar-nav_text">Datatable
                                            </span></a> </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-nav_item"><a class="sidebar-nav_link dropdown-toggle-custom"
                                href="view-project.php"> <span class="sidebar-nav_text">View Project </span></a></li>
                        <li class="sidebar-nav_item"><a class="sidebar-nav_link dropdown-toggle-custom"
                                href="add-project.php"> <span class="sidebar-nav_text">Add Project </span></a></li>
                        <li class="sidebar-nav_item"><a class="sidebar-nav_link dropdown-toggle-custom"
                                href="edit-project.php"> <span class="sidebar-nav_text">Edit Project </span></a></li>
                    </ul>
                </div>
            </li>
            <!-- <li class="sidebar-nav-item">
                <div class="sidebar-nav-label">Features</div>
            </li> -->
            <li class="sidebar-nav-item">
                <button class="sidebar-nav-section dropdown-toggle-custom collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#features" aria-expanded="true"
                    aria-controls="collapseOne" title="">
                    <span class="sidebar-nav-icon">
                        <svg class="svg" width="24" height="24">
                            <use xlink:href="./media/retina/sprite-aside-menu.svg#features"> </use>
                        </svg>
                    </span>
                    <span class="sidebar-nav-title">Features</span> <i
                        class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i>
                </button>
                <div class="sidebar-dropdown-menu collapse" id="features" aria-labelledby=""
                    data-parent="#sidebar-menu">
                    <ul class="sidebar-nav sidebar-nav-level">
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#features-base" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">Base</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="features-base" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="colors.php"> <span class="sidebar-nav_text">State Colors </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="button-group.php"> <span class="sidebar-nav_text">Button Group </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="dropdown.php"> <span class="sidebar-nav_text">Dropdown </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="bootstrap.php"> <span class="sidebar-nav_text">Bootstrap Tabs </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="line.php"> <span class="sidebar-nav_text">Line Tabs </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="accordions.php"> <span class="sidebar-nav_text">Accordions </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="tables.php"> <span class="sidebar-nav_text">Tables </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="progress.php"> <span class="sidebar-nav_text">Progress </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="lightbox.php"> <span class="sidebar-nav_text">Featherlight </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="lightbox-gallery.php"> <span class="sidebar-nav_text">Featherlight
                                                Gallery </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="modal.php"> <span class="sidebar-nav_text">Modal </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="alerts.php"> <span class="sidebar-nav_text">Alerts </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="popover.php"> <span class="sidebar-nav_text">Popover </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="tooltip.php"> <span class="sidebar-nav_text">Tooltip </span> </a>
                                    </li>
                                </ul>
                            </div>
                            <ul> </ul>
                        </li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#features-general" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">General Components</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="features-general" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="buttons.php"> <span class="sidebar-nav_text">Button </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="typography.php"> <span class="sidebar-nav_text">Typography </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#features-icon" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Icon</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="features-icon"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"> <a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="feathericons.php"> <span class="sidebar-nav_text">Feather
                                                        </span> </a> </li>
                                                <li class="sidebar-nav_item"> <a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="flaticon.php"> <span class="sidebar-nav_text">Flaticon
                                                        </span> </a> </li>
                                                <li class="sidebar-nav_item"> <a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="fontawesome5.php"> <span
                                                            class="sidebar-nav_text">Fontawesome 5 </span> </a> </li>
                                                <li class="sidebar-nav_item"> <a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="lineawesome.php"> <span
                                                            class="sidebar-nav_text">Lineawesome </span> </a> </li>
                                                <li class="sidebar-nav_item"> <a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="socicon.php"> <span class="sidebar-nav_text">Socicons
                                                        </span> </a> </li>
                                                <li class="sidebar-nav_item"> <a
                                                        class="sidebar-nav_link dropdown-toggle-custom" href="svg.php">
                                                        <span class="sidebar-nav_text">SVG Icons </span> </a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#features-custom" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">Custom</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="features-custom" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="badge.php"> <span class="sidebar-nav_text">Badge </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="sidebar-nav.php"> <span class="sidebar-nav_text">sidebar-navigations
                                            </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="lists.php"> <span class="sidebar-nav_text">Lists </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="notes.php"> <span class="sidebar-nav_text">Notes </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="timeline.php"> <span class="sidebar-nav_text">Timeline </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="media.php"> <span class="sidebar-nav_text">Media </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="spinners.php"> <span class="sidebar-nav_text">Spinners </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="pagination.php"> <span class="sidebar-nav_text">Pagination </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="iconbox.php"> <span class="sidebar-nav_text">Iconbox </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="infobox.php"> <span class="sidebar-nav_text">Infobox </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="callout.php"> <span class="sidebar-nav_text">Callout </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="ribbon.php"> <span class="sidebar-nav_text">Ribbon </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="miscellaneous.php"> <span class="sidebar-nav_text">Miscellaneous
                                            </span> </a> </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#features-extended" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">Extended</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="features-extended" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="blockui.php"> <span class="sidebar-nav_text">Block UI </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="perfect-scrollbar.php"> <span class="sidebar-nav_text">Perfect
                                                Scrollbar </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="treeview.php"> <span class="sidebar-nav_text">Tree View </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="bootstrap-notify.php"> <span class="sidebar-nav_text">Bootstrap Notify
                                            </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="toastr.php"> <span class="sidebar-nav_text">Toastr </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="sweetalert2.php"> <span class="sidebar-nav_text">SweetAlert2 </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="dual-listbox.php"> <span class="sidebar-nav_text">Dual Listbox </span>
                                        </a> </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#features-cards" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">Cards</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="features-cards" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="base.php"> <span class="sidebar-nav_text">Base cards </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="advanced.php"> <span class="sidebar-nav_text">Advanced cards </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="tabbed.php"> <span class="sidebar-nav_text">Tabbed cards </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="draggable.php"> <span class="sidebar-nav_text">Draggable cards </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="tools.php"> <span class="sidebar-nav_text">card Tools </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="sticky-head.php"> <span class="sidebar-nav_text">Sticky Head </span>
                                        </a> </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#features-widgets" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">Widgets</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="features-widgets" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="lists.php"> <span class="sidebar-nav_text">Lists </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="charts.php"> <span class="sidebar-nav_text">Charts </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="general.php"> <span class="sidebar-nav_text">General </span> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#features-calendar" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">Calendar</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="features-calendar" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="base.php"> <span class="sidebar-nav_text">Basic Calendar </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="list-view.php"> <span class="sidebar-nav_text">List Views </span> </a>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="google.php"> <span class="sidebar-nav_text">Google Calendar </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="external-events.php"> <span class="sidebar-nav_text">External Events
                                            </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="background-events.php"> <span class="sidebar-nav_text">Background
                                                Events </span> </a> </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#features-maps" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">Maps</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="features-maps" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="google-maps.php"> <span class="sidebar-nav_text">Google Maps </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="jqvmaps.php"> <span class="sidebar-nav_text"> JQVMap </span> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#features-charts" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">Charts</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="features-charts" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#features-amcharts" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">amCharts</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="features-amcharts"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"> <a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="charts.php"> <span class="sidebar-nav_text">amCharts
                                                            Charts </span> </a> </li>
                                                <li class="sidebar-nav_item"> <a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="stock-charts.php"> <span class="sidebar-nav_text">amCharts
                                                            Stock Charts </span> </a> </li>
                                                <li class="sidebar-nav_item"> <a
                                                        class="sidebar-nav_link dropdown-toggle-custom" href="maps.php">
                                                        <span class="sidebar-nav_text">amCharts Maps </span> </a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="apex-charts.php"> <span class="sidebar-nav_text">Apex Charts </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="flotcharts.php"> <span class="sidebar-nav_text">Flot Charts </span>
                                        </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="google-charts.php"> <span class="sidebar-nav_text">Google Charts
                                            </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="morris-charts.php"> <span class="sidebar-nav_text">Morris Charts
                                            </span> </a> </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#features-utils" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">Utils</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="features-utils" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="session-timeout.php"> <span class="sidebar-nav_text">Session Timeout
                                            </span> </a> </li>
                                    <li class="sidebar-nav_item"> <a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="idle-timer.php"> <span class="sidebar-nav_text">Idle Timer </span>
                                        </a> </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- <li class="sidebar-nav-item">
                <div class="sidebar-nav-label">Users</div>
            </li> -->
            <li class="sidebar-nav-item">
                <button class="sidebar-nav-section dropdown-toggle-custom collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#users" aria-expanded="true" aria-controls="collapseOne"
                    title="">
                    <span class="sidebar-nav-icon">
                        <svg class="svg" width="24" height="24">
                            <use xlink:href="./media/retina/sprite-aside-menu.svg#users"> </use>
                        </svg>
                    </span>
                    <span class="sidebar-nav-title">Users</span> <i
                        class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i>
                </button>
                <div class="sidebar-dropdown-menu collapse" id="users" aria-labelledby="" data-parent="#sidebar-menu">
                    <ul class="sidebar-nav sidebar-nav-level">
                        <li class="sidebar-nav_item"><a class="sidebar-nav_link dropdown-toggle-custom "
                                href="add-user.php"><span class="sidebar-nav_text">Add User</span></a></li>
                        <li class="sidebar-nav_item"><a class="sidebar-nav_link dropdown-toggle-custom "
                                href="edit-user.php"><span class="sidebar-nav_text">Edit User</span></a></li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#users-list" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">List</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="users-list" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item"><a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="list-default.php"> <span class="sidebar-nav_text">Default </span></a>
                                    </li>
                                    <li class="sidebar-nav_item"><a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="list-datatable.php"> <span class="sidebar-nav_text">Datatable
                                            </span></a> </li>
                                    <li class="sidebar-nav_item"><a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="list-colums-1.php"> <span class="sidebar-nav_text">Columns 1
                                            </span></a> </li>
                                    <li class="sidebar-nav_item"><a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="list-colums-2.php"> <span class="sidebar-nav_text">Columns 2
                                            </span></a> </li>
                                </ul>
                            </div>
                            <ul> </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- <li class="sidebar-nav-item">
                <div class="sidebar-nav-label">Cruds</div>
            </li> -->
            <li class="sidebar-nav-item">
                <button class="sidebar-nav-section dropdown-toggle-custom collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#cruds" aria-expanded="true" aria-controls="collapseOne"
                    title="">
                    <span class="sidebar-nav-icon">
                        <svg class="svg" width="24" height="24">
                            <use xlink:href="./media/retina/sprite-aside-menu.svg#cruds"> </use>
                        </svg>
                    </span>
                    <span class="sidebar-nav-title">Cruds</span> <i
                        class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i>
                </button>
                <div class="sidebar-dropdown-menu collapse" id="cruds" aria-labelledby="" data-parent="#sidebar-menu">
                    <ul class="sidebar-nav sidebar-nav-level">
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#cruds-form-controls" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">Form & Controls</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="cruds-form-controls" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-fcontrol" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Form Control</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-fcontrol"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="base-input.php"> <span class="sidebar-nav_text">Base
                                                            Inputs</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="input-group.php"> <span class="sidebar-nav_text">Input
                                                            Groups </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="checkbox.php"> <span
                                                            class="sidebar-nav_text">Checkbox</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="radio.php"> <span class="sidebar-nav_text">Radio
                                                        </span></a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="switch.php"> <span class="sidebar-nav_text">Switch
                                                        </span></a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="option.php"> <span class="sidebar-nav_text">Mega
                                                            Options</span></a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-form-widget" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Form Widget</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-form-widget"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="bootstrap-datepicker.php"> <span
                                                            class="sidebar-nav_text">Datepicker</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="bootstrap-datetimepicker.php"> <span
                                                            class="sidebar-nav_text">DateTimepicker</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="bootstrap-timepicker.php"> <span
                                                            class="sidebar-nav_text">Timepicker</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="bootstrap-daterangepicker.php"> <span
                                                            class="sidebar-nav_text">Daterangepicker</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="tagify.php"> <span class="sidebar-nav_text">Tagify </span>
                                                    </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="bootstrap-touchspin.php"> <span
                                                            class="sidebar-nav_text">Touchspin</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="bootstrap-maxlength.php"> <span
                                                            class="sidebar-nav_text">Maxlength</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="bootstrap-switch.php"> <span
                                                            class="sidebar-nav_text">Switch</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="bootstrap-multipleselectsplitter.php"> <span
                                                            class="sidebar-nav_text">Multiple Select Splitter </span>
                                                    </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="bootstrap-select.php"> <span
                                                            class="sidebar-nav_text">Bootstrap Select </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="select2.php"> <span
                                                            class="sidebar-nav_text">Select2</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="typeahead.php"> <span
                                                            class="sidebar-nav_text">Typeahead</span></a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-form-widget-2" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Form Widget 2</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-form-widget-2"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="nouislider.php"> <span
                                                            class="sidebar-nav_text">noUiSlider</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="form-repeater.php"> <span class="sidebar-nav_text">Form
                                                            Repeater </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="ion-range-slider.php"> <span class="sidebar-nav_text">Ion
                                                            Range Slider </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="input-mask.php"> <span class="sidebar-nav_text">Input
                                                            Masks</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="quill.php"> <span class="sidebar-nav_text">Quill Text
                                                            Editor </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="summernote.php"> <span class="sidebar-nav_text">Summernote
                                                            WYSIWYG </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="bootstrap-markdown.php"> <span
                                                            class="sidebar-nav_text">Markdown Editor </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="autosize.php"> <span
                                                            class="sidebar-nav_text">Autosize</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="clipboard.php"> <span
                                                            class="sidebar-nav_text">Clipboard</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="recaptcha.php"> <span class="sidebar-nav_text">Google
                                                            reCaptcha </span> </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-form-validation" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Form Validation</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-form-validation"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="states.php"> <span class="sidebar-nav_text">Validation
                                                            States </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="form-controls.php"> <span class="sidebar-nav_text">Form
                                                            Controls </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="form-widgets.php"> <span class="sidebar-nav_text">Form
                                                            Widgets </span> </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-form-layout" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Form Layout</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-form-layout"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="default-forms.php"> <span class="sidebar-nav_text">Default
                                                            Forms </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="multi-column-forms.php"> <span
                                                            class="sidebar-nav_text">Multi Column Forms </span> </a>
                                                </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="action-bars.php"> <span class="sidebar-nav_text">Basic
                                                            Action Bars </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="sticky-action-bar.php"> <span
                                                            class="sidebar-nav_text">Sticky Action Bar </span> </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#cruds-ykdatatable" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">YKDatatable</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="cruds-ykdatatable" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-ykdatatable-base" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Base</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-ykdatatable-base"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="data-local.php"> <span class="sidebar-nav_text">Local
                                                            Data</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="data-json.php"> <span class="sidebar-nav_text">JSON
                                                            Data</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="data-ajax.php"> <span class="sidebar-nav_text">Ajax
                                                            Data</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="html-table.php"> <span class="sidebar-nav_text">HTML
                                                            Table</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="local-sort.php"> <span class="sidebar-nav_text">Local
                                                            Sort</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="responsive-datatable.php"> <span
                                                            class="sidebar-nav_text">Responsive Data Table</span></a>
                                                </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="translation.php"> <span
                                                            class="sidebar-nav_text">Translation</span></a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#cruds-ktdatatable" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">KTDatatable</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="cruds-ktdatatable" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-ktdatatable-base" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Base</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-ktdatatable-base"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="data-local.php"> <span class="sidebar-nav_text">Local
                                                            Data</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="data-json.php"> <span class="sidebar-nav_text">JSON
                                                            Data</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="data-ajax.php"> <span class="sidebar-nav_text">Ajax
                                                            Data</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="html-table.php"> <span class="sidebar-nav_text">HTML
                                                            Table</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="local-sort.php"> <span class="sidebar-nav_text">Local
                                                            Sort</span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="translation.php"> <span
                                                            class="sidebar-nav_text">Translation</span></a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-advanced" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Advanced</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-advanced"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="record-selection.php"> <span
                                                            class="sidebar-nav_text">Record Selection </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="row-details.php"> <span class="sidebar-nav_text">Row
                                                            Details </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="column-rendering.php"> <span
                                                            class="sidebar-nav_text">Column Rendering </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="column-width.php"> <span class="sidebar-nav_text">Column
                                                            Width </span> </a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="vertical.php"> <span class="sidebar-nav_text">Vertical
                                                            Scrolling </span> </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-child-datatables" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Child Datatables</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-child-datatables"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="data-local.php`"> <span class="sidebar-nav_text">Local
                                                            Data </span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="data-ajax.php"> <span class="sidebar-nav_text">Remote Data
                                                        </span></a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-api" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">API</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-api" aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="methods.php"> <span class="sidebar-nav_text">API Methods
                                                        </span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="events.php"> <span class="sidebar-nav_text">Events </span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#cruds-datatables" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">Datatables.net</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="cruds-datatables" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-datatable-basic" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Basic</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-datatable-basic"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="basic.php"> <span class="sidebar-nav_text">Basic Tables
                                                        </span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="scrollable.php"> <span class="sidebar-nav_text">Scrollable
                                                            Tables </span></a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="headers.php"> <span class="sidebar-nav_text">Complex
                                                            Headers </span></a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="pagination.php"> <span class="sidebar-nav_text">Pagination
                                                            Options </span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-datatable-advanced" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Advanced</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-datatable-advanced"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="column-rendering.php"> <span
                                                            class="sidebar-nav_text">Column Rendering </span></a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="multiple-controls.php"> <span
                                                            class="sidebar-nav_text">Multiple Controls </span></a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="column-visibilty.php"> <span
                                                            class="sidebar-nav_text">Column Visibility </span></a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="row-callback.php"> <span class="sidebar-nav_text">Row
                                                            Callback </span></a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="row-grouping.php"> <span class="sidebar-nav_text">Row
                                                            Grouping </span></a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="footer-callback.php"> <span
                                                            class="sidebar-nav_text">Footer Callback </span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-data-sources" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Data sources</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-data-sources"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom" href="html.php">
                                                        <span class="sidebar-nav_text">HTML </span></a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="javascript.php"> <span class="sidebar-nav_text">Javascript
                                                        </span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="ajax-client-side.php"> <span class="sidebar-nav_text">Ajax
                                                            Client-side </span></a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="ajax-server-side.php"> <span class="sidebar-nav_text">Ajax
                                                            Server-side </span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-search-options" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Search Options</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-search-options"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="column-search.php"> <span class="sidebar-nav_text">Column
                                                            Search </span></a></li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="advanced-search.php"> <span
                                                            class="sidebar-nav_text">Advanced Search </span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-nav_item">
                                        <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                            data-bs-target="#cruds-extensions" data-bs-toggle="collapse"> <span
                                                class="sidebar-nav_text">Extensions</span> <i
                                                class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                                        <div class="sidebar-dropdown-menu collapse" id="cruds-extensions"
                                            aria-labelledby="">
                                            <ul class="sidebar-nav sidebar-nav-level">
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="buttons.php"> <span class="sidebar-nav_text">Buttons
                                                        </span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="colreorder.php"> <span class="sidebar-nav_text">ColReorder
                                                        </span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="keytable.php"> <span class="sidebar-nav_text">KeyTable
                                                        </span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="responsive.php"> <span class="sidebar-nav_text">Responsive
                                                        </span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="rowgroup.php"> <span class="sidebar-nav_text">RowGroup
                                                        </span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="rowreorder.php"> <span class="sidebar-nav_text">RowReorder
                                                        </span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="scroller.php"> <span class="sidebar-nav_text">Scroller
                                                        </span></a> </li>
                                                <li class="sidebar-nav_item"><a
                                                        class="sidebar-nav_link dropdown-toggle-custom"
                                                        href="select.php"> <span class="sidebar-nav_text">Select
                                                        </span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-nav_item">
                            <a class="sidebar-nav_link dropdown-toggle-custom collapsed" href="#"
                                data-bs-target="#cruds-file-upload" data-bs-toggle="collapse"> <span
                                    class="sidebar-nav_text">File Upload</span> <i
                                    class="sidebar-nav_arrow dropdown-toggle-custom-arrow"></i> </a>
                            <div class="sidebar-dropdown-menu collapse" id="cruds-file-upload" aria-labelledby="">
                                <ul class="sidebar-nav sidebar-nav-level">
                                    <li class="sidebar-nav_item"><a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="avatar.php"> <span class="sidebar-nav_text">Avatar </span></a></li>
                                    <li class="sidebar-nav_item"><a class="sidebar-nav_link dropdown-toggle-custom"
                                            href="dropzone.php"> <span class="sidebar-nav_text">DropzoneJS </span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
    <div class="sidebar-foot">
        <ul class="sidebar-nav">
            <li class="sidebar-nav-item">
                <div class="sidebar-dropdown-menu">
                    <ul class="sidebar-nav">
                        <li class="sidebar-nav_item">
                            <a href="settings.php" class="sidebar-nav_link ">
                                <span class="sidebar-nav_icon">
                                    <svg class="svg" width="24" height="24">
                                        <use xlink:href="./media/retina/sprite-aside-menu.svg#settings"> </use>
                                    </svg>
                                </span>
                                <span class="sidebar-nav_text">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</sidebar>