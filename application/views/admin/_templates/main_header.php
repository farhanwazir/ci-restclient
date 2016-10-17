<?php /* */
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<header class="main-header"><a href="<?php /* */
    echo site_url('admin/dashboard'); ?>" class="logo"> <span class="logo-mini"><?php /* */
            echo $title_mini; ?></span> <span class="logo-lg"><b>Auri</b><?php /* */
            echo $title_lg; ?></span> </a>
    <nav class="navbar navbar-static-top" role="navigation"><a href="#" class="sidebar-toggle" data-toggle="offcanvas"
                                                               role="button"> <span
                class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span> </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">                <!-- User Account -->
                <li class="dropdown user user-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img
                            src="<?php /* */
                            echo base_url($avatar_dir . '/m_001.png'); ?>" class="user-image" alt="User Image"> <span
                            class="hidden-xs"><?= $user_data->name; ?></span> </a>
                    <ul class="dropdown-menu">                        <!-- User image -->
                        <li class="user-header"><img alt="User Image" class="img-circle" src="<?php /* */
                            echo base_url($avatar_dir . '/m_001.png'); ?>">

                            <p>                                <?= $user_data->name; ?>
                                <small>Account since <?= $user_data->created_at ?></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <!--<div class="pull-left"><a class="btn btn-default btn-flat" href="#">Profile</a></div>-->
                            <div class="pull-right"><a href="<?php /* */
                                echo site_url('auth/logout/admin'); ?>" class="btn btn-default btn-flat"><?php /* */
                                    echo lang('header_sign_out'); ?></a></div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
