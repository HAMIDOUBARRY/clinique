<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{route('home')}}">
            <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
            <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="{{route('home')}}" class="dropdown-toggle">
                        <span class="micon fa fa-house" style="font-size: 2.5em;"></span><span class="mtext">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span  class="micon fa fa-calendar-check-o" style="font-size: 2.5em;"></span>
                         <span class="mtext">RENDEZ VOUS</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon fa fa-user-nurse" style="font-size: 2.5em;"></span>
                        <span class="mtext">GESTION PATIENT</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">PATIENT</a></li>
                        <li>
                            <a href="advanced-components.html">HOSPITALISATION</a>
                        </li>
                        <li><a href="form-wizard.html">PRESCRIPTION</a></li>
                       
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-calendar-alt" style="font-size: 2.5em;"></span>
                        <span class="mtext">Calendar</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon fa fa-medkit" style="font-size: 2.5em;" ></span>
                        <span class="mtext"> TRAITEMENT</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">TRAITEMENT</a></li>
                        <li><a href="#">HOPITALS</a></li>
                        <li><a href="#">EXAMEN BIOLOGIQUE</a></li>
                        <li><a href="#">EXAMEN RADIOLOGIE</a></li>


                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon fa fa-stethoscope"  style="font-size: 2.5em;"></span>
                        <span class="mtext">CONSULTATION</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">CONSULTATION</a></li>
                        <li><a href="#">TYPE_CONSULTATION</a></li>
                        <li><a href="#">PATIENT</a></li>
                        <li><a href="#">MEDECIN</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon fa fa-user-md"  style="font-size: 2.5em;"></span>
                        <span class="mtext">MEDECIN</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="highchart.html">MEDEDCIN</a></li>
                        <li><a href="knob-chart.html">SPECIALITE</a></li>
                        <li><a href="jvectormap.html">DEPARTEMENT</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span  class="micon fa fa-hospital"  style="font-size: 2.5em;"></span>
                        <span class="mtext">HOSPITALISATION</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">HOSPITALISER</a></li>
                        <li><a href="#">CHAMBRE_HOSPITALISER</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon fa fa-bed"  style="font-size: 2.5em;"></span>
                        <span class="mtext">CHAMBRE</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">CHAMBRE</a></li>
                        <li><a href="#">CHAMBRE_HOSPITALISER</a></li>
                    </ul>
                </li>

                
                <li>
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-file-invoice"  style="font-size: 2.5em;"></span><span class="mtext">FACTURE</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-person"  style="font-size: 2.5em;"></span>
                        <span class="mtext">USER</span>
                    </a>
                </li>
                
               
            
            </ul>
        </div>
    </div>
</div>