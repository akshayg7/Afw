<body>
<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header


Footer

    ''                                          Static Footer if no class is added
    'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-dark'                          Dark themed Header
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container" class="sidebar-o sidebar-dark sidebar-mini enable-page-overlay side-scroll page-header-fixed page-header-dark">
    <!-- Side Overlay-->
    <!--    <aside id="side-overlay">-->
    <!--        &lt;!&ndash; Side Header &ndash;&gt;-->
    <!--        &lt;!&ndash;        <div class="bg-image" style="background-image: url('assets/media/various/bg_side_overlay_header.jpg');">&ndash;&gt;-->
    <!--        &lt;!&ndash;            <div class="bg-primary-op">&ndash;&gt;-->
    <!--        &lt;!&ndash;                <div class="content-header">&ndash;&gt;-->
    <!--        &lt;!&ndash;                    &lt;!&ndash; User Avatar &ndash;&gt;&ndash;&gt;-->
    <!--        &lt;!&ndash;                    <a class="img-link mr-1" href="be_pages_generic_profile.html">&ndash;&gt;-->
    <!--        &lt;!&ndash;                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">&ndash;&gt;-->
    <!--        &lt;!&ndash;                    </a>&ndash;&gt;-->
    <!--        &lt;!&ndash;                    &lt;!&ndash; END User Avatar &ndash;&gt;&ndash;&gt;-->

    <!--        &lt;!&ndash;                    &lt;!&ndash; User Info &ndash;&gt;&ndash;&gt;-->
    <!--        &lt;!&ndash;                    <div class="ml-2">&ndash;&gt;-->
    <!--        &lt;!&ndash;                        <a class="text-white font-w600" href="be_pages_generic_profile.html">George Taylor</a>&ndash;&gt;-->
    <!--        &lt;!&ndash;                        <div class="text-white-75 font-size-sm font-italic">Full Stack Developer</div>&ndash;&gt;-->
    <!--        &lt;!&ndash;                    </div>&ndash;&gt;-->
    <!--        &lt;!&ndash;                    &lt;!&ndash; END User Info &ndash;&gt;&ndash;&gt;-->

    <!--        &lt;!&ndash;                    &lt;!&ndash; Close Side Overlay &ndash;&gt;&ndash;&gt;-->
    <!--        &lt;!&ndash;                    &lt;!&ndash; Layout API, functionality initialized in Template._uiApiLayout() &ndash;&gt;&ndash;&gt;-->
    <!--        &lt;!&ndash;                    <a class="ml-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">&ndash;&gt;-->
    <!--        &lt;!&ndash;                        <i class="fa fa-times-circle"></i>&ndash;&gt;-->
    <!--        &lt;!&ndash;                    </a>&ndash;&gt;-->
    <!--        &lt;!&ndash;                    &lt;!&ndash; END Close Side Overlay &ndash;&gt;&ndash;&gt;-->
    <!--        &lt;!&ndash;                </div>&ndash;&gt;-->
    <!--        &lt;!&ndash;            </div>&ndash;&gt;-->
    <!--        &lt;!&ndash;        </div>&ndash;&gt;-->
    <!--        &lt;!&ndash; END Side Header &ndash;&gt;-->

    <!--        &lt;!&ndash; Side Content &ndash;&gt;-->
    <!--        <div class="content-side">-->
    <!--            &lt;!&ndash; Side Overlay Tabs &ndash;&gt;-->
    <!--            <div class="block block-transparent pull-x pull-t">-->
    <!--                <ul class="nav nav-tabs nav-tabs-block nav-justified" data-toggle="tabs" role="tablist">-->
    <!--                    <li class="nav-item">-->
    <!--                        <a class="nav-link active" href="#so-settings">-->
    <!--                            <i class="fa fa-fw fa-cog"></i>-->
    <!--                        </a>-->
    <!--                    </li>-->
    <!--                    <li class="nav-item">-->
    <!--                        <a class="nav-link" href="#so-people">-->
    <!--                            <i class="far fa-fw fa-user-circle"></i>-->
    <!--                        </a>-->
    <!--                    </li>-->
    <!--                    <li class="nav-item">-->
    <!--                        <a class="nav-link" href="#so-profile">-->
    <!--                            <i class="far fa-fw fa-edit"></i>-->
    <!--                        </a>-->
    <!--                    </li>-->
    <!--                </ul>-->
    <!--                <div class="block-content tab-content overflow-hidden">-->
    <!--                    &lt;!&ndash; Settings Tab &ndash;&gt;-->
    <!--                    <div class="tab-pane pull-x fade fade-up show active" id="so-settings" role="tabpanel">-->
    <!--                        <div class="block mb-0">-->
    <!--                            &lt;!&ndash; Color Themes &ndash;&gt;-->
    <!--                            &lt;!&ndash; Toggle Themes functionality initialized in Template._uiHandleTheme() &ndash;&gt;-->
    <!--                            <div class="block-content block-content-sm block-content-full bg-body">-->
    <!--                                <span class="text-uppercase font-size-sm font-w700">Color Themes</span>-->
    <!--                            </div>-->
    <!--                            <div class="block-content block-content-full">-->
    <!--                                &lt;!&ndash;                                <div class="row gutters-tiny text-center">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    <div class="col-4 mb-1">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-default" data-toggle="theme" data-theme="default" href="#">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                            Default&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                        </a>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    </div>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    <div class="col-4 mb-1">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-xwork" data-toggle="theme" data-theme="assets/css/themes/xwork.min.css" href="#">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                            xWork&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                        </a>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    </div>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    <div class="col-4 mb-1">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-xmodern" data-toggle="theme" data-theme="assets/css/themes/xmodern.min.css" href="#">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                            xModern&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                        </a>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    </div>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    <div class="col-4 mb-1">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-xeco" data-toggle="theme" data-theme="assets/css/themes/xeco.min.css" href="#">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                            xEco&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                        </a>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    </div>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    <div class="col-4 mb-1">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-xsmooth" data-toggle="theme" data-theme="assets/css/themes/xsmooth.min.css" href="#">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                            xSmooth&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                        </a>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    </div>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    <div class="col-4 mb-1">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                        <a class="d-block py-3 text-white font-size-sm font-w600 bg-xinspire" data-toggle="theme" data-theme="assets/css/themes/xinspire.min.css" href="#">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                            xInspire&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                        </a>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    </div>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    <div class="col-12">&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" href="be_ui_color_themes.html">All Color Themes</a>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                    </div>&ndash;&gt;-->
    <!--                                &lt;!&ndash;                                </div>&ndash;&gt;-->
    <!--                            </div>-->
    <!--                            &lt;!&ndash; END Color Themes &ndash;&gt;-->

    <!--                            &lt;!&ndash; Sidebar &ndash;&gt;-->
    <!--                            <div class="block-content block-content-sm block-content-full bg-body">-->
    <!--                                <span class="text-uppercase font-size-sm font-w700">Sidebar</span>-->
    <!--                            </div>-->
    <!--                            <div class="block-content block-content-full">-->
    <!--                                <div class="row gutters-tiny text-center">-->
    <!--                                    <div class="col-6 mb-1">-->
    <!--                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-6 mb-1">-->
    <!--                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            &lt;!&ndash; END Sidebar &ndash;&gt;-->

    <!--                            &lt;!&ndash; Header &ndash;&gt;-->
    <!--                            <div class="block-content block-content-sm block-content-full bg-body">-->
    <!--                                <span class="text-uppercase font-size-sm font-w700">Header</span>-->
    <!--                            </div>-->
    <!--                            <div class="block-content block-content-full">-->
    <!--                                <div class="row gutters-tiny text-center mb-2">-->
    <!--                                    <div class="col-6 mb-1">-->
    <!--                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-6 mb-1">-->
    <!--                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-6 mb-1">-->
    <!--                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-6 mb-1">-->
    <!--                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            &lt;!&ndash; END Header &ndash;&gt;-->

    <!--                            &lt;!&ndash; Content &ndash;&gt;-->
    <!--                            <div class="block-content block-content-sm block-content-full bg-body">-->
    <!--                                <span class="text-uppercase font-size-sm font-w700">Content</span>-->
    <!--                            </div>-->
    <!--                            <div class="block-content block-content-full">-->
    <!--                                <div class="row gutters-tiny text-center">-->
    <!--                                    <div class="col-6 mb-1">-->
    <!--                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-6 mb-1">-->
    <!--                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-12 mb-1">-->
    <!--                                        <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            &lt;!&ndash; END Content &ndash;&gt;-->

    <!--                            &lt;!&ndash; Layout API &ndash;&gt;-->
    <!--                            <div class="block-content row justify-content-center border-top">-->
    <!--                                <div class="col-9">-->
    <!--                                    <a class="btn btn-block btn-hero-primary" href="be_layout_api.html">-->
    <!--                                        <i class="fa fa-fw fa-flask mr-1"></i> Layout API-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            &lt;!&ndash; END Layout API &ndash;&gt;-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    &lt;!&ndash; END Settings Tab &ndash;&gt;-->

    <!--                    &lt;!&ndash; People &ndash;&gt;-->
    <!--                    <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel">-->
    <!--                        <div class="block mb-0">-->
    <!--                            &lt;!&ndash; Online &ndash;&gt;-->
    <!--                            <div class="block-content block-content-sm block-content-full bg-body">-->
    <!--                                <span class="text-uppercase font-size-sm font-w700">Online</span>-->
    <!--                            </div>-->
    <!--                            <div class="block-content">-->
    <!--                                <ul class="nav-items">-->
    <!--                                    <li>-->
    <!--                                        <a class="media py-2" href="be_pages_generic_profile.html">-->
    <!--                                            <div class="mx-3 overlay-container">-->
    <!--                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar4.jpg" alt="">-->
    <!--                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>-->
    <!--                                            </div>-->
    <!--                                            <div class="media-body">-->
    <!--                                                <div class="font-w600">Helen Jacobs</div>-->
    <!--                                                <div class="font-size-sm text-muted">Photographer</div>-->
    <!--                                            </div>-->
    <!--                                        </a>-->
    <!--                                    </li>-->
    <!--                                    <li>-->
    <!--                                        <a class="media py-2" href="be_pages_generic_profile.html">-->
    <!--                                            <div class="mx-3 overlay-container">-->
    <!--                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">-->
    <!--                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>-->
    <!--                                            </div>-->
    <!--                                            <div class="media-body">-->
    <!--                                                <div class="font-w600">Thomas Riley</div>-->
    <!--                                                <div class="font-w400 font-size-sm text-muted">Web Designer</div>-->
    <!--                                            </div>-->
    <!--                                        </a>-->
    <!--                                    </li>-->
    <!--                                    <li>-->
    <!--                                        <a class="media py-2" href="be_pages_generic_profile.html">-->
    <!--                                            <div class="mx-3 overlay-container">-->
    <!--                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">-->
    <!--                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>-->
    <!--                                            </div>-->
    <!--                                            <div class="media-body">-->
    <!--                                                <div class="font-w600">Andrea Gardner</div>-->
    <!--                                                <div class="font-w400 font-size-sm text-muted">Web Developer</div>-->
    <!--                                            </div>-->
    <!--                                        </a>-->
    <!--                                    </li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                            &lt;!&ndash; Online &ndash;&gt;-->

    <!--                            &lt;!&ndash; Busy &ndash;&gt;-->
    <!--                            <div class="block-content block-content-sm block-content-full bg-body">-->
    <!--                                <span class="text-uppercase font-size-sm font-w700">Busy</span>-->
    <!--                            </div>-->
    <!--                            <div class="block-content">-->
    <!--                                <ul class="nav-items">-->
    <!--                                    <li>-->
    <!--                                        <a class="media py-2" href="be_pages_generic_profile.html">-->
    <!--                                            <div class="mx-3 overlay-container">-->
    <!--                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">-->
    <!--                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-danger"></span>-->
    <!--                                            </div>-->
    <!--                                            <div class="media-body">-->
    <!--                                                <div class="font-w600">Barbara Scott</div>-->
    <!--                                                <div class="font-w400 font-size-sm text-muted">UI Designer</div>-->
    <!--                                            </div>-->
    <!--                                        </a>-->
    <!--                                    </li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                            &lt;!&ndash; END Busy &ndash;&gt;-->

    <!--                            &lt;!&ndash; Away &ndash;&gt;-->
    <!--                            <div class="block-content block-content-sm block-content-full bg-body">-->
    <!--                                <span class="text-uppercase font-size-sm font-w700">Away</span>-->
    <!--                            </div>-->
    <!--                            <div class="block-content">-->
    <!--                                <ul class="nav-items">-->
    <!--                                    <li>-->
    <!--                                        <a class="media py-2" href="be_pages_generic_profile.html">-->
    <!--                                            <div class="mx-3 overlay-container">-->
    <!--                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar13.jpg" alt="">-->
    <!--                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>-->
    <!--                                            </div>-->
    <!--                                            <div class="media-body">-->
    <!--                                                <div class="font-w600">Jack Estrada</div>-->
    <!--                                                <div class="font-w400 font-size-sm text-muted">Copywriter</div>-->
    <!--                                            </div>-->
    <!--                                        </a>-->
    <!--                                    </li>-->
    <!--                                    <li>-->
    <!--                                        <a class="media py-2" href="be_pages_generic_profile.html">-->
    <!--                                            <div class="mx-3 overlay-container">-->
    <!--                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">-->
    <!--                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>-->
    <!--                                            </div>-->
    <!--                                            <div class="media-body">-->
    <!--                                                <div class="font-w600">Helen Jacobs</div>-->
    <!--                                                <div class="font-w400 font-size-sm text-muted">Writer</div>-->
    <!--                                            </div>-->
    <!--                                        </a>-->
    <!--                                    </li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                            &lt;!&ndash; END Away &ndash;&gt;-->

    <!--                            &lt;!&ndash; Offline &ndash;&gt;-->
    <!--                            <div class="block-content block-content-sm block-content-full bg-body">-->
    <!--                                <span class="text-uppercase font-size-sm font-w700">Offline</span>-->
    <!--                            </div>-->
    <!--                            <div class="block-content">-->
    <!--                                <ul class="nav-items">-->
    <!--                                    <li>-->
    <!--                                        <a class="media py-2" href="be_pages_generic_profile.html">-->
    <!--                                            <div class="mx-3 overlay-container">-->
    <!--                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar13.jpg" alt="">-->
    <!--                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>-->
    <!--                                            </div>-->
    <!--                                            <div class="media-body">-->
    <!--                                                <div class="font-w600">Jesse Fisher</div>-->
    <!--                                                <div class="font-w400 font-size-sm text-muted">Teacher</div>-->
    <!--                                            </div>-->
    <!--                                        </a>-->
    <!--                                    </li>-->
    <!--                                    <li>-->
    <!--                                        <a class="media py-2" href="be_pages_generic_profile.html">-->
    <!--                                            <div class="mx-3 overlay-container">-->
    <!--                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">-->
    <!--                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>-->
    <!--                                            </div>-->
    <!--                                            <div class="media-body">-->
    <!--                                                <div class="font-w600">Carol White</div>-->
    <!--                                                <div class="font-w400 font-size-sm text-muted">Photographer</div>-->
    <!--                                            </div>-->
    <!--                                        </a>-->
    <!--                                    </li>-->
    <!--                                    <li>-->
    <!--                                        <a class="media py-2" href="be_pages_generic_profile.html">-->
    <!--                                            <div class="mx-3 overlay-container">-->
    <!--                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">-->
    <!--                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>-->
    <!--                                            </div>-->
    <!--                                            <div class="media-body">-->
    <!--                                                <div class="font-w600">Lori Grant</div>-->
    <!--                                                <div class="font-w400 font-size-sm text-muted">Front-end Developer</div>-->
    <!--                                            </div>-->
    <!--                                        </a>-->
    <!--                                    </li>-->
    <!--                                    <li>-->
    <!--                                        <a class="media py-2" href="be_pages_generic_profile.html">-->
    <!--                                            <div class="mx-3 overlay-container">-->
    <!--                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar15.jpg" alt="">-->
    <!--                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>-->
    <!--                                            </div>-->
    <!--                                            <div class="media-body">-->
    <!--                                                <div class="font-w600">Wayne Garcia</div>-->
    <!--                                                <div class="font-w400 font-size-sm text-muted">UX Specialist</div>-->
    <!--                                            </div>-->
    <!--                                        </a>-->
    <!--                                    </li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                            &lt;!&ndash; END Offline &ndash;&gt;-->

    <!--                            &lt;!&ndash; Add People &ndash;&gt;-->
    <!--                            <div class="block-content row justify-content-center border-top">-->
    <!--                                <div class="col-9">-->
    <!--                                    <a class="btn btn-block btn-hero-primary" href="javascript:void(0)">-->
    <!--                                        <i class="fa fa-fw fa-plus mr-1"></i> Add People-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            &lt;!&ndash; END Add People &ndash;&gt;-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    &lt;!&ndash; END People &ndash;&gt;-->

    <!--                    &lt;!&ndash; Profile &ndash;&gt;-->
    <!--                    <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel">-->
    <!--                        <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">-->
    <!--                            <div class="block mb-0">-->
    <!--                                &lt;!&ndash; Personal &ndash;&gt;-->
    <!--                                <div class="block-content block-content-sm block-content-full bg-body">-->
    <!--                                    <span class="text-uppercase font-size-sm font-w700">Personal</span>-->
    <!--                                </div>-->
    <!--                                <div class="block-content block-content-full">-->
    <!--                                    <div class="form-group">-->
    <!--                                        <label>Username</label>-->
    <!--                                        <input type="text" readonly class="form-control" id="staticEmail" value="Admin">-->
    <!--                                    </div>-->
    <!--                                    <div class="form-group">-->
    <!--                                        <label for="so-profile-name">Name</label>-->
    <!--                                        <input type="text" class="form-control" id="so-profile-name" name="so-profile-name" value="George Taylor">-->
    <!--                                    </div>-->
    <!--                                    <div class="form-group">-->
    <!--                                        <label for="so-profile-email">Email</label>-->
    <!--                                        <input type="email" class="form-control" id="so-profile-email" name="so-profile-email" value="g.taylor@example.com">-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                &lt;!&ndash; END Personal &ndash;&gt;-->

    <!--                                &lt;!&ndash; Password Update &ndash;&gt;-->
    <!--                                <div class="block-content block-content-sm block-content-full bg-body">-->
    <!--                                    <span class="text-uppercase font-size-sm font-w700">Password Update</span>-->
    <!--                                </div>-->
    <!--                                <div class="block-content block-content-full">-->
    <!--                                    <div class="form-group">-->
    <!--                                        <label for="so-profile-password">Current Password</label>-->
    <!--                                        <input type="password" class="form-control" id="so-profile-password" name="so-profile-password">-->
    <!--                                    </div>-->
    <!--                                    <div class="form-group">-->
    <!--                                        <label for="so-profile-new-password">New Password</label>-->
    <!--                                        <input type="password" class="form-control" id="so-profile-new-password" name="so-profile-new-password">-->
    <!--                                    </div>-->
    <!--                                    <div class="form-group">-->
    <!--                                        <label for="so-profile-new-password-confirm">Confirm New Password</label>-->
    <!--                                        <input type="password" class="form-control" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                &lt;!&ndash; END Password Update &ndash;&gt;-->

    <!--                                &lt;!&ndash; Options &ndash;&gt;-->
    <!--                                <div class="block-content block-content-sm block-content-full bg-body">-->
    <!--                                    <span class="text-uppercase font-size-sm font-w700">Options</span>-->
    <!--                                </div>-->
    <!--                                <div class="block-content">-->
    <!--                                    <div class="custom-control custom-checkbox custom-control-primary mb-1">-->
    <!--                                        <input type="checkbox" class="custom-control-input" id="so-settings-status" name="so-settings-status" value="1">-->
    <!--                                        <label class="custom-control-label" for="so-settings-status">Online Status</label>-->
    <!--                                    </div>-->
    <!--                                    <p class="text-muted font-size-sm">-->
    <!--                                        Make your online status visible to other users of your app-->
    <!--                                    </p>-->
    <!--                                    <div class="custom-control custom-checkbox custom-control-primary mb-1">-->
    <!--                                        <input type="checkbox" class="custom-control-input" id="so-settings-notifications" name="so-settings-notifications" value="1" checked>-->
    <!--                                        <label class="custom-control-label" for="so-settings-notifications">Notifications</label>-->
    <!--                                    </div>-->
    <!--                                    <p class="text-muted font-size-sm">-->
    <!--                                        Receive desktop notifications regarding your projects and sales-->
    <!--                                    </p>-->
    <!--                                    <div class="custom-control custom-checkbox custom-control-primary mb-1">-->
    <!--                                        <input type="checkbox" class="custom-control-input" id="so-settings-updates" name="so-settings-updates" value="1" checked>-->
    <!--                                        <label class="custom-control-label" for="so-settings-updates">Auto Updates</label>-->
    <!--                                    </div>-->
    <!--                                    <p class="text-muted font-size-sm">-->
    <!--                                        If enabled, we will keep all your applications and servers up to date with the most recent features automatically-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                                &lt;!&ndash; END Options &ndash;&gt;-->

    <!--                                &lt;!&ndash; Submit &ndash;&gt;-->
    <!--                                <div class="block-content row justify-content-center border-top">-->
    <!--                                    <div class="col-9">-->
    <!--                                        <button type="submit" class="btn btn-block btn-hero-primary">-->
    <!--                                            <i class="fa fa-fw fa-save mr-1"></i> Save-->
    <!--                                        </button>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                &lt;!&ndash; END Submit &ndash;&gt;-->
    <!--                            </div>-->
    <!--                        </form>-->
    <!--                    </div>-->
    <!--                    &lt;!&ndash; END Profile &ndash;&gt;-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            &lt;!&ndash; END Side Overlay Tabs &ndash;&gt;-->
    <!--        </div>-->
    <!--        &lt;!&ndash; END Side Content &ndash;&gt;-->
    <!--    </aside>-->
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
        Sidebar Mini Mode - Display Helper classes

        Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
            If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

        Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
        Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
    -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
            <div class="content-header bg-white-10">
                <!-- Logo -->
                <a class="link-fx font-w600 font-size-lg text-white" href="index.html">
                            <span class="smini-visible">
                                <span class="text-white-75">A</span><span class="text-white">F</span>
                            </span>
                    <span class="smini-hidden">
                                <span class="text-white-75">AF</span><span class="text-white">W</span>
                            </span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Toggle Sidebar Style -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                    <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" data-toggle="layout" data-action="sidebar_style_toggle" href="javascript:void(0)">
                        <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                    </a>
                    <!-- END Toggle Sidebar Style -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                        <i class="fa fa-times-circle"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ url('/dashboard') }}">
                        <i class="nav-main-link-icon fa fa-home text-warning"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">manage</li>
                <li class="nav-main-item">
                    <a class="nav-main-link"  href="{{route('client')}}">
                        <i class="nav-main-link-icon fa fa-building text-danger-light"></i>
                        <span class="nav-main-link-name">Clients</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link"  href="{{route('vendor')}}">
                        <i class="nav-main-link-icon fa fa-truck-loading text-danger-light"></i>
                        <span class="nav-main-link-name">Vendors</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link"  href="{{route('billing')}}">
                        <i class="nav-main-link-icon fa fa-file-invoice text-warning-light"></i>
                        <span class="nav-main-link-name">Billing</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link"  href="{{route('quotations')}}">
                        <i class="nav-main-link-icon fa fa-file-invoice"></i>
                        <span class="nav-main-link-name">Quotes</span>
                    </a>
                </li>
                <li class="nav-main-heading"><a>GST</a></li>
                <li class="nav-main-item">
                    <a class="nav-main-link"  href="payments.html">
                        <i class="nav-main-link-icon fa fa-star text-danger"></i>
                        <span class="nav-main-link-name">Purchase</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link"  href="payments.html">
                        <i class="nav-main-link-icon si si-folder-alt text-warning-light"></i>
                        <span class="nav-main-link-name">Sale</span>
                    </a>
                </li>
                <li class="nav-main-heading"><a>Other</a>
                <li class="nav-main-item">
                    <a class="nav-main-link"  href="payments.html">
                        <i  class="nav-main-link-icon fa fa-box text-success"></i>
                        <span class="nav-main-link-name">Debts</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link"  href="payments.html">
                        <i  class="nav-main-link-icon fab fa-laravel text-success"></i>
                        <span class="nav-main-link-name">Notes</span>
                    </a>
                </li>
                </li>

            </ul>
            </li>
        </div>
    </nav>
    <!-- END Sidebar -->
