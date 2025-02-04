<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light"
    data-menu-styles="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
    <meta name="keywords"
        content="analytics dashboard,jobs dashboard,crm dashboard examples,personal dashboard,sales dashboard sample,best crm dashboard,crypto dashboard template,sales analytics dashboard,stocks dashboard,hrm dashboard,ecommerce admin panel template,sales admin dashboard,admin panel for ecommerce website,website template ecommerce,template dashboard,course dashboard,template ecommerce website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/img/brand-logos/favicon.ico') }}">

    <!-- Main JS -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

    <!-- Simplebar Css -->
    <link rel="stylesheet" href="{{ asset('/assets/libs/simplebar/simplebar.min.css') }}">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Quil Css -->
    <link id="style" href="{{ asset('/assets/libs/quill/quill.snow.css') }}" rel="stylesheet">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

    <!-- Filepond CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/libs/filepond/filepond.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css') }}">

    <!-- Flatpickr Css -->
    <link rel="stylesheet" href="{{ asset('/assets/libs/flatpickr/flatpickr.min.css') }}">




</head>
<style>
    .main-sidebar-header img {
        margin-left: 20px;
        margin-bottom: 10px;
        display: inline-block;
    }
</style>

<body class="">

    <!-- ========== Switcher  ========== -->
    <div id="hs-overlay-switcher" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1">
        <div class="ti-offcanvas-header z-10 relative">
            <h3 class="ti-offcanvas-title">
                Switcher
            </h3>
            <button type="button"
                class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-white/70 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                data-hs-overlay="#hs-overlay-switcher">
                <span class="sr-only">Close modal</span>
                <i class="ri-close-circle-line leading-none text-lg"></i>
            </button>
        </div>
        <div class="ti-offcanvas-body pt-0 border-b dark:border-white/10 z-10 relative">
            <div class="flex space-x-2 rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                <button type="button"
                    class="hs-tab-active:bg-secondary/10 w-full hs-tab-active:border-b-transparent hs-tab-active:text-secondary dark:hs-tab-active:bg-black/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-secondary -mb-px py-2 px-3 bg-white text-xs font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-bgdark dark:border-white/10 dark:text-white/70 active"
                    id="switcher-item-1" data-hs-tab="#switcher-1" aria-controls="switcher-1" role="tab">
                    Theme Style
                </button>
                <button type="button"
                    class="hs-tab-active:bg-secondary/10 w-full hs-tab-active:border-b-transparent hs-tab-active:text-secondary dark:hs-tab-active:bg-black/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-secondary -mb-px py-2 px-3 bg-white text-xs font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300"
                    id="switcher-item-2" data-hs-tab="#switcher-2" aria-controls="switcher-2" role="tab">
                    Theme Colors
                </button>
            </div>
        </div>
        <div class="ti-offcanvas-body" id="switcher-body">
            <div id="switcher-1" role="tabpanel" aria-labelledby="switcher-item-1" class="space-y-6">
                <div class="space-y-6">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-light-theme"
                                checked>
                            <label for="switcher-light-theme"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Light</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-dark-theme">
                            <label for="switcher-dark-theme"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Dark</label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Directions:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-ltr" checked>
                            <label for="switcher-ltr"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">LTR</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-rtl">
                            <label for="switcher-rtl"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">RTL</label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Navigation Styles:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="navigation-style" class="ti-form-radio"
                                id="switcher-vertical" checked>
                            <label for="switcher-vertical"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Vertical</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-style" class="ti-form-radio"
                                id="switcher-horizontal">
                            <label for="switcher-horizontal"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Horizontal</label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Navigation Menu Style:</p>
                    <div class="grid grid-cols-2 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-menu-click" checked>
                            <label for="switcher-menu-click"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Menu
                                Click</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-menu-hover">
                            <label for="switcher-menu-hover"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Menu
                                Hover</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-icon-click">
                            <label for="switcher-icon-click"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Icon
                                Click</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-icon-hover">
                            <label for="switcher-icon-hover"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Icon
                                Hover</label>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="lt:mr-2 rtl:ml-2">Note:</b>Works same for both
                        Vertical and
                        Horizontal
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Page Styles:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio"
                                id="switcher-regular" checked>
                            <label for="switcher-regular"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Regular</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio"
                                id="switcher-classic">
                            <label for="switcher-classic"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Classic</label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Layout Width Styles:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-full-width"
                                checked>
                            <label for="switcher-full-width"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">FullWidth</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-boxed">
                            <label for="switcher-boxed"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Boxed</label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Menu Positions:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-menu-positions" class="ti-form-radio"
                                id="switcher-menu-fixed" checked>
                            <label for="switcher-menu-fixed"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-menu-positions" class="ti-form-radio"
                                id="switcher-menu-scroll">
                            <label for="switcher-menu-scroll"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Scrollable </label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="switcher-style-head">Header Positions:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-header-positions" class="ti-form-radio"
                                id="switcher-header-fixed" checked>
                            <label for="switcher-header-fixed"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">
                                Fixed</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-header-positions" class="ti-form-radio"
                                id="switcher-header-scroll">
                            <label for="switcher-header-scroll"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Scrollable
                            </label>
                        </div>
                    </div>
                </div>
                <div class="space-y-6 sidemenu-layout-styles">
                    <p class="switcher-style-head">Sidemenu Layout Syles:</p>
                    <div class="grid grid-cols-2 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-default-menu" checked>
                            <label for="switcher-default-menu"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Default
                                Menu</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-closed-menu">
                            <label for="switcher-closed-menu"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">
                                Closed
                                Menu</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-icontext-menu">
                            <label for="switcher-icontext-menu"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Icon
                                Text</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-icon-overlay">
                            <label for="switcher-icon-overlay"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Icon
                                Overlay</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-detached">
                            <label for="switcher-detached"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 ">Detached</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-double-menu">
                            <label for="switcher-double-menu"
                                class="text-xs text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Double
                                Menu</label>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="ltr:mr-2 rtl:ml-2">Note:</b>Navigation menu
                        styles won't
                        work
                        here.</div>
                </div>
            </div>
            <div id="switcher-2" class="hidden space-y-6" role="tabpanel" aria-labelledby="switcher-item-2">
                <div class="theme-colors">
                    <p class="switcher-style-head">Menu Colors:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio"
                                name="menu-colors" id="switcher-menu-light" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Light Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio"
                                name="menu-colors" id="switcher-menu-dark" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Dark Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio"
                                name="menu-colors" id="switcher-menu-primary">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Color Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio"
                                name="menu-colors" id="switcher-menu-gradient">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Gradient Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent"
                                type="radio" name="menu-colors" id="switcher-menu-transparent">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Transparent Menu
                            </span>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="ltr:mr-2 rtl:ml-2">Note:</b>If you want to
                        change color
                        Menu
                        dynamically
                        change from below Theme Primary color picker.</div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Header Colors:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio"
                                name="header-colors" id="switcher-header-light" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Light Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio"
                                name="header-colors" id="switcher-header-dark">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Dark Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio"
                                name="header-colors" id="switcher-header-primary">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Color Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio"
                                name="header-colors" id="switcher-header-gradient">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Gradient Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent"
                                type="radio" name="header-colors" id="switcher-header-transparent">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                role="tooltip">
                                Transparent Header
                            </span>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="ltr:mr-2 rtl:ml-2">Note:</b>If you want to
                        change color
                        Header dynamically
                        change from below Theme Primary color picker.</div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Primary:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-1" type="radio"
                                name="theme-primary" id="switcher-primary" checked>
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-2" type="radio"
                                name="theme-primary" id="switcher-primary1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-3" type="radio"
                                name="theme-primary" id="switcher-primary2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-4" type="radio"
                                name="theme-primary" id="switcher-primary3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-5" type="radio"
                                name="theme-primary" id="switcher-primary4">
                        </div>
                        <div class="ti-form-radio switch-select ltr:pl-0 rtl:pr-0 mt-1 color-primary-light">
                            <div class="theme-container-primary"></div>
                            <div class="pickr-container-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Background:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-1" type="radio"
                                name="theme-background" id="switcher-background" checked>
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-2" type="radio"
                                name="theme-background" id="switcher-background1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-3" type="radio"
                                name="theme-background" id="switcher-background2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-4" type="radio"
                                name="theme-background" id="switcher-background3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-5" type="radio"
                                name="theme-background" id="switcher-background4">
                        </div>
                        <div class="ti-form-radio switch-select ltr:pl-0 rtl:pr-0 mt-1 color-bg-transparent">
                            <div class="theme-container-background"></div>
                            <div class="pickr-container-background"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-image theme-colors">
                    <p class="switcher-style-head">Menu With Background Image:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img1" type="radio" name="theme-images"
                                id="switcher-bg-img">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img2" type="radio" name="theme-images"
                                id="switcher-bg-img1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img3" type="radio" name="theme-images"
                                id="switcher-bg-img2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img4" type="radio" name="theme-images"
                                id="switcher-bg-img3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img5" type="radio" name="theme-images"
                                id="switcher-bg-img4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ti-offcanvas-footer !justify-center">
            <a id="reset-all" class="ti-btn ti-btn-danger" href="javascript:void(0);">Reset</a>
        </div>
    </div>
    <!-- ========== END Switcher  ========== -->

    <div class="page">

        <!-- Start::app-sidebar -->
        <aside class="app-sidebar" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header" class="ml10">

                <img src="{{ asset('front/assets/images/logo/loho.png') }}" alt="Logo">

            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar " id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg></div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->


                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="{{ route('admin_dashboard') }}" class="side-menu__item">
                                <i class="ri-apps-2-line side-menu__icon"></i>
                                <span class="side-menu__label">Dashboards</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('ownerData') }}" class="side-menu__item">
                                <i class="ri-apps-2-line side-menu__icon"></i>
                                <span class="side-menu__label">Owners</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('bankData') }}" class="side-menu__item">
                                <i class="ri-apps-2-line side-menu__icon"></i>
                                <span class="side-menu__label">Bank Accounts</span>
                            </a>
                        </li>

                        <li class="slide__category"><span class="category-name">Point Of Sale Area</span></li>

                        <li class="slide">
                            <a href="{{ route('pos') }}" class="side-menu__item">
                                <i class="ri-apps-2-line side-menu__icon"></i>
                                <span class="side-menu__label">Pos</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('sales') }}" class="side-menu__item">
                                <i class="ri-apps-2-line side-menu__icon"></i>
                                <span class="side-menu__label">Sales</span>
                            </a>
                        </li>

                        <li class="slide">
                            <a href="{{ route('return') }}" class="side-menu__item">
                                <i class="ri-apps-2-line side-menu__icon"></i>
                                <span class="side-menu__label">Return</span>
                            </a>
                        </li>

                        <li class="slide  has-sub">
                            <a href="javascript:void(0)" class="side-menu__item">
                                <i class="ri-home-8-line side-menu__icon"></i>
                                <span class="side-menu__label">Purchases</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide"><a href="{{ route('addPurchases') }}" class="side-menu__item">Add
                                        Purchases</a>
                                </li>
                                <li class="slide"><a href="{{ route('addPurchasesData') }}"
                                        class="side-menu__item">Manage
                                        Purchases</a></li>
                            </ul>
                        </li>
                        <li class="slide  has-sub">
                            <a href="javascript:void(0)" class="side-menu__item">
                                <i class="ri-home-8-line side-menu__icon"></i>
                                <span class="side-menu__label">Damages</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide"><a href="{{ route('addDamages') }}" class="side-menu__item">Add
                                        Damages</a>
                                </li>
                                <li class="slide"><a href="{{ route('addDamagesData') }}"
                                        class="side-menu__item">Manage Damages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <li class="slide__category"><span class="category-name">Product Information</span></li>
                        <!-- Start::slide -->

                        <li class="slide  has-sub">
                            <a href="javascript:void(0)" class="side-menu__item">
                                <i class="ri-home-8-line side-menu__icon"></i>
                                <span class="side-menu__label">Brand</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <!-- <li class="slide side-menu__label1"><a href="javascript:void(0)">Dashboards</a></li> -->
                                <li class="slide"><a href="{{ route('brand') }}" class="side-menu__item">Add
                                        Brand</a>
                                </li>
                                <li class="slide"><a href="{{ route('BrandData') }}" class="side-menu__item">All
                                        Brand</a>
                                </li>
                            </ul>
                        </li>

                        <li class="slide  has-sub">
                            <a href="javascript:void(0)" class="side-menu__item">
                                <i class="ri-home-8-line side-menu__icon"></i>
                                <span class="side-menu__label">Category</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">

                                <li class="slide"><a href="{{ route('category') }}" class="side-menu__item">Add
                                        Category</a>
                                </li>
                                <li class="slide"><a href="{{ route('categoryData') }}" class="side-menu__item">All
                                        Category</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide  has-sub">
                            <a href="javascript:void(0)" class="side-menu__item">
                                <i class="ri-home-8-line side-menu__icon"></i>
                                <span class="side-menu__label">Sub Category</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <!-- <li class="slide side-menu__label1"><a href="javascript:void(0)">Dashboards</a></li> -->
                                <li class="slide"><a href="{{ route('subCategory') }}" class="side-menu__item">Add
                                        Sub Category</a>
                                </li>
                                <li class="slide"><a href="{{ route('subCategoryAll') }}"
                                        class="side-menu__item">All
                                        Sub Category</a>
                                </li>
                            </ul>
                        </li>



                        <li class="slide  has-sub">
                            <a href="javascript:void(0)" class="side-menu__item">
                                <i class="ri-home-8-line side-menu__icon"></i>
                                <span class="side-menu__label">Product</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">

                                <li class="slide"><a href="{{ route('addProduct') }}" class="side-menu__item">Add
                                        Products</a>
                                </li>
                                <li class="slide"><a href="{{ route('productData') }}" class="side-menu__item">All
                                        Products</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <li class="slide__category"><span class="category-name">Order Area</span></li>

                        <li class="slide  has-sub">
                            <a href="javascript:void(0)" class="side-menu__item">
                                <i class="ri-home-8-line side-menu__icon"></i>
                                <span class="side-menu__label">Online Order </span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide"><a href="{{ route('pendingOnline') }}"
                                        class="side-menu__item">Pending
                                        Order</a>
                                </li>
                                <li class="slide"><a href="{{ route('confirmOnline') }}"
                                        class="side-menu__item">Confirm
                                        Order</a>
                                </li>

                            </ul>
                        </li>


                        <li class="slide__category"><span class="category-name">Affiliated Area</span></li>


                        <li class="slide  has-sub">
                            <a href="javascript:void(0)" class="side-menu__item">
                                <i class="ri-home-8-line side-menu__icon"></i>
                                <span class="side-menu__label">Affiliated </span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide"><a href="{{ route('affiliate') }}" class="side-menu__item"> ADD
                                        Affiliated
                                        packages </a>
                                </li>
                                <li class="slide"><a href="{{ route('allAffiliate') }}"
                                        class="side-menu__item">Affiliated packages
                                        Data</a>
                                </li>
                                <li class="slide"><a href="{{ route('allAffiliateData') }}"
                                        class="side-menu__item">Affiliated User Application</a>
                                </li>
                            </ul>
                        </li>

                        <li class="slide__category"><span class="category-name">Work Place</span></li>


                        <li class="slide  has-sub">
                            <a href="javascript:void(0)" class="side-menu__item">
                                <i class="ri-home-8-line side-menu__icon"></i>
                                <span class="side-menu__label">Work Place </span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide"><a href="{{ route('workPlaceAdd') }}" class="side-menu__item">
                                        Add Work Place
                                    </a>
                                </li>
                                <li class="slide"><a href="{{ route('allWorkPlace') }}" class="side-menu__item">All
                                        Work Place Data </a>
                                </li>
                                <li class="slide"><a href="{{ route('allWorkPlaceData') }}"
                                        class="side-menu__item">
                                        Work Place User Data </a>
                                </li>
                            </ul>
                        </li>



                    </ul>

                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::Header -->
        <header class="header custom-sticky !top-0 !w-full">
            <nav class="main-header" aria-label="Global">
                <div class="header-content">
                    <div class="header-left">
                        <!-- Navigation Toggle -->
                        <div class="">
                            <button type="button" class="sidebar-toggle !w-100 !h-100">
                                <span class="sr-only">Toggle Navigation</span>
                                <i class="ri-arrow-right-circle-line header-icon"></i>
                            </button>
                        </div>
                        <!-- End Navigation Toggle -->
                    </div>

                    <div class="responsive-logo">
                        <a class="responsive-logo-dark" href="index.html" aria-label="Brand"><img
                                src="../assets/img/brand-logos/desktop-logo.png" alt="logo" class="mx-auto"></a>
                        <a class="responsive-logo-light" href="index.html" aria-label="Brand"><img
                                src="../assets/img/brand-logos/desktop-dark.png" alt="logo" class="mx-auto"></a>
                    </div>

                    <div class="header-right">
                        <div class="responsive-headernav">
                            <div class="header-nav-right">
                                <div class="header-country hs-dropdown ti-dropdown hidden sm:block"
                                    data-hs-dropdown-placement="bottom-right">

                                </div>

                                <div class="header-theme-mode hidden sm:block">
                                    <a aria-label="anchor"
                                        class="hs-dark-mode-active:hidden flex hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                        href="javascript:;" data-hs-theme-click-value="dark">
                                        <i class="ri-moon-line header-icon"></i>
                                    </a>
                                    <a aria-label="anchor"
                                        class="hs-dark-mode-active:flex hidden hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                        href="javascript:;" data-hs-theme-click-value="light">
                                        <i class="ri-sun-line header-icon"></i>
                                    </a>
                                </div>
                                <div class="header-fullscreen hidden lg:block">
                                    <a aria-label="anchor" href="javascript:void(0);" onclick="openFullscreen();"
                                        class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                        <i class="ri-fullscreen-line header-icon full-screen-open"></i>
                                        <i
                                            class="ri-fullscreen-line header-icon fullscreen-exit-line full-screen-close hidden"></i>
                                    </a>
                                </div>

                                <div class="header-notification hs-dropdown ti-dropdown hidden sm:block"
                                    data-hs-dropdown-placement="bottom-right">
                                    <button id="dropdown-notification" type="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle p-0 border-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                        <i class="ri-notification-2-line header-icon animate-bell"></i>
                                        <span
                                            class="flex absolute h-5 w-5 top-0 ltr:right-0 rtl:left-0 -mt-1 ltr:-mr-1 rtl:-ml-1">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-success/80 opacity-75"></span>
                                            <span
                                                class="relative inline-flex rounded-full h-5 w-5 bg-success text-white justify-center items-center"
                                                id="notify-data">4</span>
                                        </span>
                                    </button>
                                    <div class="hs-dropdown-menu ti-dropdown-menu w-[20rem] border-0"
                                        aria-labelledby="dropdown-notification">
                                        <div
                                            class="ti-dropdown-header !bg-primary border-b dark:border-white/10 flex justify-between items-center">
                                            <p class="ti-dropdown-header-title !text-white font-semibold">Notifications
                                            </p>
                                            <a href="javascript:void(0)"
                                                class="badge bg-black/20 text-white rounded-sm">Mark All Read</a>
                                        </div>
                                        <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10">
                                            <div class="py-2 first:pt-0 last:pb-0" id="allNotifyContainer">
                                                <div class="ti-dropdown-item relative header-box">
                                                    <a href="mail-inbox.html"
                                                        class="flex space-x-3 rtl:space-x-reverse">
                                                        <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                                            <img src="../assets/img/users/17.jpg" alt="img"
                                                                class="rounded-sm">
                                                        </div>
                                                        <div class="relative w-full">
                                                            <h5
                                                                class="text-sm text-gray-800 dark:text-white font-semibold mb-1">
                                                                Elon Isk</h5>
                                                            <p class="text-xs mb-1 max-w-[200px] truncate">Hello there!
                                                                How are you doing? Call me
                                                                when...</p>
                                                            <p class="text-xs text-gray-400 dark:text-white/70">2 min
                                                            </p>
                                                        </div>
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                                        <i class="ri-close-circle-line"></i>
                                                    </a>
                                                </div>
                                                <div class="ti-dropdown-item relative header-box">
                                                    <a href="mail-inbox.html"
                                                        class="flex items-center space-x-3 rtl:space-x-reverse">
                                                        <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                                            <img src="../assets/img/users/2.jpg" alt="img"
                                                                class="rounded-sm">
                                                        </div>
                                                        <div class="relative w-full">
                                                            <h5
                                                                class="text-sm text-gray-800 dark:text-white font-semibold mb-1">
                                                                Shakira Sen</h5>
                                                            <p class="text-xs mb-1 max-w-[200px] truncate">I would like
                                                                to discuss about that
                                                                assets...</p>
                                                            <p class="text-xs text-gray-400 dark:text-white/70">09:43
                                                            </p>
                                                        </div>
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                                        <i class="ri-close-circle-line"></i>
                                                    </a>
                                                </div>
                                                <div class="ti-dropdown-item relative header-box">
                                                    <a href="mail-inbox.html"
                                                        class="flex items-center space-x-3 rtl:space-x-reverse">
                                                        <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                                            <img src="../assets/img/users/21.jpg" alt="img"
                                                                class="rounded-sm">
                                                        </div>
                                                        <div class="relative w-full">
                                                            <h5
                                                                class="text-sm text-gray-800 dark:text-white font-semibold mb-1">
                                                                Sebastian</h5>
                                                            <p class="text-xs mb-1 max-w-[200px] truncate">Shall we go
                                                                to the cafe at downtown...</p>
                                                            <p class="text-xs text-gray-400 dark:text-white/70">
                                                                yesterday</p>
                                                        </div>
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                                        <i class="ri-close-circle-line"></i>
                                                    </a>
                                                </div>
                                                <div class="ti-dropdown-item relative header-box">
                                                    <a href="mail-inbox.html"
                                                        class="flex items-center space-x-3 rtl:space-x-reverse">
                                                        <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                                            <img src="../assets/img/users/11.jpg" alt="img"
                                                                class="rounded-sm">
                                                        </div>
                                                        <div class="relative w-full">
                                                            <h5
                                                                class="text-sm text-gray-800 dark:text-white font-semibold mb-1">
                                                                Charlie Davieson</h5>
                                                            <p class="text-xs mb-1 max-w-[200px] truncate">Lorem ipsum
                                                                dolor sit amet, consectetur</p>
                                                            <p class="text-xs text-gray-400 dark:text-white/70">
                                                                yesterday</p>
                                                        </div>
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                                        <i class="ri-close-circle-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="py-2 first:pt-0 px-5">
                                                <a class="w-full ti-btn ti-btn-primary p-2" href="mail-inbox.html">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="header-profile hs-dropdown ti-dropdown"
                                    data-hs-dropdown-placement="bottom-right">
                                    <button id="dropdown-profile" type="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle gap-2 p-0 flex-shrink-0 h-8 w-8 rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                        <img class="inline-block rounded-full ring-2 ring-white dark:ring-white/10"
                                            src="{{ asset('/assets/img/users/1.png') }}" alt="Image Description">
                                    </button>

                                    <div class="hs-dropdown-menu ti-dropdown-menu border-0 w-[20rem]"
                                        aria-labelledby="dropdown-profile">
                                        <div class="ti-dropdown-header !bg-primary flex">
                                            <div class="ltr:mr-3 rtl:ml-3">
                                                <img class="avatar shadow-none rounded-full !ring-transparent"
                                                    src="{{ asset('/assets/img/users/1.png') }}" alt="profile-img">
                                            </div>
                                            <div>
                                                <p class="ti-dropdown-header-title !text-white">
                                                    {{ Auth::user()->name }}</p>
                                                <p class="ti-dropdown-header-title !text-white">
                                                    {{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="mt-2 ti-dropdown-divider">
                                            <a href="{{ route('profile.edit') }}" class="ti-dropdown-item">
                                                <i class="ti ti-user-circle text-lg"></i>
                                                profile
                                            </a>

                                            <div class="flex justify-center">
                                                <form method="POST" accept="" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button class=" ti-btn rounded-full ti-btn-danger">Logout
                                                        me</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End::Header -->

        @yield('admin.content')

    </div>





    </div>

    <!-- Apex Charts JS -->
    <script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Index JS -->
    <script src="{{ asset('/assets/js/index-2.js') }}"></script>

    <!-- Back To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
    </div>

    <div id="responsive-overlay"></div>

    <!-- popperjs -->
    <script src="{{ asset('/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- sidebar JS -->
    <script src="{{ asset('/assets/js/defaultmenu.js') }}"></script>

    <!-- sticky JS -->
    <script src="{{ asset('/assets/js/sticky.js') }}"></script>

    <!-- Switch JS -->
    <script src="{{ asset('/assets/js/switch.js') }}"></script>

    <!-- Preline JS -->
    <script src="{{ asset('/assets/libs/preline/preline.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('/assets/libs/simplebar/simplebar.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('/assets/js/custom.js') }}"></script>

    <!-- Custom-Switcher JS -->
    <script src="{{ asset('/assets/js/custom-switcher.js') }}"></script>

    <!-- Quill Editor JS -->
    <script src="{{ asset('/assets/libs/quill/quill.min.js') }}"></script>

    <!-- Choices JS -->
    <script src="{{ asset('/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Filepond JS -->
    <script src="{{ asset('/assets/libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
    <script
        src="{{ asset('../assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}">
    </script>
    <script src="{{ asset('/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}">
    </script>
    <script src="{{ asset('/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js') }}">
    </script>
    <script src="{{ asset('/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js') }}">
    </script>
    <script src="{{ asset('/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js') }}">
    </script>

    <!-- Flatpickr JS -->
    <script src="{{ asset('/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- ADD Product JS -->
    <script src="{{ asset('/assets/js/addproduct.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
    <!-- Include jQuery version 3.5.1 from CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    @stack('script')


</body>

</html>
