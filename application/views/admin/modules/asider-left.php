<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close m-aside-left-close--skin-dark" id="m_aside_left_close_btn"><i class="la la-close"></i>
</button>
<style type="text/css"></style>
<div class="m-grid__item m-aside-left m-aside-left--skin-dark" id="m_aside_left" style="background: url('public/images/sidebar-5.jpg'); background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;background-position: center center;">
    <div style="background: rgba(147, 104, 233,0.9);background-attachment: fixed;background-size: 150% 150%;background-position: center center;
    background-size: 150% 150%;height: 100%;">
    <!-- BEGIN: Aside Menu -->    
    <div class="m-aside-menu m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark" id="m_ver_menu">
        <ul class="m-menu__nav m-menu__nav--dropdown-submenu-arrow">

            <li aria-haspopup="true"
                class="m-menu__item  <?= $active = ($this->uri->segment(2) == "dashboard") ? "m-menu__item--active" : "" ?>">
                <a class="m-menu__link" href="<?= base_url() . 'admin/dashboard'; ?>"><i
                            class="m-menu__link-icon flaticon-line-graph"></i> <span class="m-menu__link-title"><span
                                class="m-menu__link-wrap"><span
                                    class="m-menu__link-text">Dashboard</span> </span></span></a>
            </li>
            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">MODEL NETWORK SETTING</h4>
                 
            </li>                    
            <li class="m-menu__item general <?= $active = ($this->uri->segment(2) == "setting") ? "m-menu__item--active" : "" ?> " aria-haspopup="true">
            <a href="<?= base_url()?>admin/setting" class="m-menu__link ">
 <i class="m-menu__link-icon flaticon-user-ok"></i>
            <span class="m-menu__link-text">Setting</span></a>
            </li>
            
            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">MODEL NETWORK MANAGER</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>                    
            <li aria-haspopup="true"
                class="m-menu__item  <?= $active = ($this->uri->segment(2) == "users") ? "m-menu__item--active" : "" ?>">
                <a class="m-menu__link" href="<?= base_url() . 'admin/users'; ?>">            <i class="m-menu__link-icon flaticon-user-ok"></i> <span class="m-menu__link-title"><span
                                class="m-menu__link-wrap"><span
                                    class="m-menu__link-text">Users</span> </span></span></a>
            </li>            

            <li aria-haspopup="true"
                class="m-menu__item  <?= $active = ($this->uri->segment(2) == "coin") ? "m-menu__item--active" : "" ?>">
                <a class="m-menu__link" href="<?= base_url() . 'admin/coin'; ?>"><i
                            class="m-menu__link-icon flaticon-line-graph"></i> <span class="m-menu__link-title"><span
                                class="m-menu__link-wrap"><span
                                    class="m-menu__link-text">Coin</span> </span></span></a>
            </li>                             
            <li aria-haspopup="true"
                class="m-menu__item  <?= $active = ($this->uri->segment(2) == "loan") ? "m-menu__item--active" : "" ?>">
                <a class="m-menu__link" href="<?= base_url() . 'admin/loan'; ?>"><i
                            class="m-menu__link-icon flaticon-line-graph"></i> <span class="m-menu__link-title"><span
                                class="m-menu__link-wrap"><span
                                    class="m-menu__link-text">Loan</span> </span></span></a>
            </li> 
        </ul>
    </div><!-- END: Aside Menu -->
</div><!-- END: Left Aside -->
</div>