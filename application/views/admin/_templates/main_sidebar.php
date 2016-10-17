<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar menu -->
        <ul class="sidebar-menu">
            <li class="header text-uppercase"><?php echo lang('menu_main_navigation'); ?></li>

            <li class="<?= active_link_controller('dashboard') ?>">
                <a href="<?php echo site_url('admin/dashboard'); ?>">
                    <i class="fa fa-dashboard"></i>
                    <span><?php echo lang('menu_dashboard'); ?></span>
                </a>
            </li>

            <!-- Users menu -->
            <li class="header text-uppercase"><?php echo lang('menu_users'); ?></li>

            <li class="<?=(active_link_controller('users_controller') == 'active')? active_link_function('index_admin') : ''; ?>">
                <a href="<?php echo site_url('admin/system/users'); ?>">
                    <i class="fa fa-shield"></i>
                    <span><?php echo lang('menu_users_admin'); ?></span>
                </a>
            </li>
            <?php if ($user_data->user_type == 'a'): ?>
                <li class="<?=(active_link_controller('users_controller') == 'active')? active_link_function('index_client') : ''; ?>">
                    <a href="<?php echo site_url('admin/client/users'); ?>">
                        <i class="fa fa-shield"></i>
                        <span><?php echo ($user_data->user_type == 'a') ? lang('menu_users_clients') : lang('menu_users_outlets'); ?></span>
                    </a>
                </li>

                <li class="<?=(active_link_controller('users_controller') == 'active')? active_link_function('add') : ''; ?>">
                    <a href="<?php echo site_url('admin/user/add'); ?>">
                        <i class="fa fa-shield"></i>
                        <span><?php echo lang('menu_user_add'); ?></span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </section>
</aside>
