<!-- <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2">2022&copy;</span>
            <a href="https://www.designdirectuk.com/" target="_blank"
               class="text-dark-75 text-hover-primary">Student MAnagement System</a>
        </div>
    </div>
</div>
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">
            User Profile
        </h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <div class="offcanvas-content pr-5 mr-n5">
        <div class="d-flex align-items-center mt-5">
            <div class="d-flex flex-column">
                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                    {{ Auth::user()->name }}
                </a>
                <div class="text-muted mt-1">
                    {{ Auth::user()->roles[0]->name }}
                </div>
                <div class="navi mt-2">
                    <a href="mailto:{{ Auth::user()->email }}" class="navi-item">
<span class="navi-link p-0 pb-2">
<span class="navi-icon mr-1">
<i class="fa fa-envelope-open text-primary"></i>
</span>
<span class="navi-text text-muted text-hover-primary">{{ Auth::user()->email }}</span>
</span>
                    </a>
                    <a href="{{ url('logout') }}"
                       class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign
                        Out</a>
                </div>
            </div>
        </div>
        <div class="separator separator-dashed mt-8 mb-5"></div>
        <div class="navi navi-spacer-x-0 p-0">
            <a href="{{ url('admin/password/reset') }}" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
                            <i class="fa fa-key text-success"></i>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">
                            Change Password
                        </div>
                        <div class="text-muted">
                            Change your login password
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
</div>

<div id="kt_scrolltop" class="scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>
 -->