<nav class="nav-sidebar">
                                    <ul class="nav">
                                        <li class="{{request()->segment(1)=='user/dashboard/profile' ? 'active' : ''}}">
                                            <a href="/user/dashboard/profile"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit My Profile </a>
                                        </li>
                                        <li class="{{request()->segment(1)=='editPersonalInfo' ? 'active' : ''}}">
                                            <a href="/editPersonalInfo"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Personal Info </a>
                                        </li>
                                        <li class="">
                                            <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i> Notifications / Preferences </a>
                                        </li>

                                        <h6 class="dropdown-header sidemenuheader">Photos</h6>
                                        <li class="{{request()->segment(1)=='editPhoto' ? 'active' : ''}}">
                                            <a href="/editPhoto"><i class="fa fa-picture-o" aria-hidden="true"></i> Edit My Photos </a>
                                        </li>
                                        <h6 class="dropdown-header sidemenuheader">Account &amp; Security</h6>
                                        <li class="{{request()->segment(1)=='changeUsername' ? 'active' : ''}}">
                                            <a href="/changeUsername"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Change Username </a>
                                        </li>
                                        <li class="{{request()->segment(1)=='changeEmail' ? 'active' : ''}}">
                                            <a href="/changeEmail"><i class="fa fa-envelope" aria-hidden="true"></i> Change Email </a>
                                        </li>
                                        <li class="{{request()->segment(1)=='changePassword' ? 'active' : ''}}">
                                            <a href="/changePassword"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Change Password </a>
                                        </li>
                                        <li class="{{request()->segment(1)=='membership/packages' ? 'active' : ''}}">
                                            <a href="/membership/packages"><i class="fa fa-delicious" aria-hidden="true"></i> Memberships History </a>
                                        </li>
                                        <li class="">
                                            <a href="#"><i class="fa fa-ban" aria-hidden="true"></i> Blocked Users </a>
                                        </li>
                                        <li class="">
                                            <a href="#"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Communication Preferences </a>
                                        </li>
                                        <!--        <li class="--><!--"><a href="/profile/devices"><i class=" sm-line  sm-line basic-smartphone sm-nav-dropdown-icons"></i>Devices <span class=" smicon-new smicon-angle-right pull-right arrow-font-size"></span></a></li>-->
                                        <!--      -->

                                        <li class="">
                                            <a href="#"><i class="fa fa-desktop" aria-hidden="true"></i> Devices </a>
                                        </li>

                                        <li class="deletesidemenu">
                                            <a href="#" data-username="fahim900"> <i class="fa fa-trash-o" aria-hidden="true"></i> Delete Profile </a>
                                        </li>
                                    </ul>
                                </nav>