<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Menu Heading (Core)-->
                <div class="sidenav-menu-heading">Core</div>
                <!-- Sidenav Accordion (Dashboard)-->
                <a class="nav-link   {{ $parentSectionMain  == 'vehicle-main' ? 'active' : 'collapsed' }}" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Vehicle Management
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ $parentSectionMain  == 'vehicle-main' ? 'show' : '' }}" id="collapseDashboards" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <a class="nav-link {{ $elementName == 'vehicle-index' ? 'active' : 'collapsed' }}" href="{{  route('vehicle.index') }}">List of Vehicle</a>
                        <a class="nav-link {{ $elementName == 'vehicle-create' ? 'active' : 'collapsed' }}" href="{{  route('vehicle.create') }}">New Vehicle</a>
                    </nav>
                </div>
                <!-- Sidenav Footer-->
                <!--<div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Logged in as:</div>
                    <div class="sidenav-footer-title">Valerie Luna</div>
                </div>
            </div>-->
    </nav>
</div>
