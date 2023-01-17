<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                                                    <!-- Sidebar Toggle (Topbar) -->
                                                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                                        <i class="fa fa-bars"></i>
                                                    </button> 
                                                    <ul class="navbar-nav ml-auto">
                                                        <li class="nav-item dropdown no-arrow">
                                                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Bienvenid@!  <?php  
                                                            echo $_SESSION["logged_name"];
                                                            ?></span>
                                                            <span style="display:none;" id="lbl_usuarioSession" name="lbl_usuarioSession"><?php  
                                                            echo $_SESSION["logged_username"];
                                                            ?></span>
                                                            <img class="img-profile rounded-circle"
                                                            src="img/undraw_profile.svg">
                                                        </a>
                                                        <!-- Dropdown - User Information -->
                                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                                        aria-labelledby="userDropdown">
                                                        <a class="dropdown-item" href="#">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                                Logout
                                                            </a>
                                                        </div>
                                                    </li>


                                                </ul>

                                            </nav>