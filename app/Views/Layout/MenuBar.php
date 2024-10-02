
    <li class="nav-item">
        <a href="<?php echo base_url(); ?>" class="nav-link <?php if($system_setting['sideMenuDetails']['parentmenu'] == 'Home') {echo $system_setting['sideMenuDetails']['menu'];} ?>">
            <i class="nav-icon fa fa-home"></i>
            <p>
                Home
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo base_url('Data'); ?>" class="nav-link <?php if($system_setting['sideMenuDetails']['parentmenu'] == 'Data') {echo $system_setting['sideMenuDetails']['menu'];} ?>">
            <i class="nav-icon fa fa-file"></i>
            <p>
                Data Example
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo base_url('Dashboard/Mail_Test'); ?>" class="nav-link" target="_blank">
            <i class="nav-icon fa fa-paper-plane"></i>
            <p>
                Test Send Mail
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?php echo base_url('Dashboard/File'); ?>" class="nav-link" target="_blank">
            <i class="nav-icon fa fa-upload"></i>
            <p>
                Test Upload File
            </p>
        </a>
    </li>
    
    <li class="nav-item">
        <a href="<?php echo base_url('API/'); ?>" class="nav-link" target="_blank">
            <i class="nav-icon fa fa-upload"></i>
            <p>
                Test Call API
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fa fa-file"></i>
            <p>
                Parent
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle"></i>
                    <p>L1 Child</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-cogs"></i>
                    <p>
                        L1 Parent
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle"></i>
                            <p>L2 Child</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="https://ossdev3.usm.my/appsmus/AdminLTE-3.2.0/" class="nav-link" target="_blank">
            <i class="nav-icon fa fa-upload"></i>
            <p>
                AdminLTE
            </p>
        </a>
    </li>
    

