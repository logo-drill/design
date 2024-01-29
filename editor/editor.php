<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs ======================== -->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Title goes here</title>
    <!-- CSS ================================================== -->
    <link href="../css/front-en.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Mobile Specific Metas ===================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- favicon ================================================== -->
    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <link rel="icon" type="image/png" href="favicon/favicon-32.png" />

</head>

<body class="">
    <div class="app">
        <header class="header-editor">
            <div class="header-editor-start">
                <button class="btn btn-gray btn-back">
                    <span class="material-symbols-outlined">
                        chevron_left
                    </span>
                </button>
                <button class="btn btn-gray">
                    Saved logos
                </button>
                <button class="btn btn-gray">
                    Make a copy
                </button>
            </div>
            <div class="header-editor-center"> <img class="logo" src="../media/logo/logo.svg"></div>
            <div class="header-editor-end">
                <button class="btn btn-gray btn-icon">
                    <span class="material-symbols-outlined">
                        share
                    </span></button>
                <button class="btn btn-brand btn-icon">
                    <span class="material-symbols-outlined">
                        download
                    </span> Download</button>
                <button class="btn btn-gray btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#account"
                    aria-controls="account">
                    <span class="material-symbols-outlined">
                        menu
                    </span>
                </button>
            </div>

        </header>
        <sidebar class="sidebar">
            <button class="sidebar-links">
                <span class="icon material-symbols-outlined">
                    visibility
                </span>
                <p class="sidebar-label">Preview</p>
            </button>
            <button class="sidebar-links">
                <span class="icon material-symbols-outlined">
                    tips_and_updates
                </span>

                <p class="sidebar-label">Suggested</p>
            </button>
            <button class="sidebar-links">
                <span class="icon material-symbols-outlined">
                    layers
                </span>

                <p class="sidebar-label">Layout</p>
            </button><button class="sidebar-links">
                <span class="icon material-symbols-outlined">
                    humidity_low
                </span>

                <p class="sidebar-label">Palette</p>
            </button><button class="sidebar-links">
                <span class="icon material-symbols-outlined">
                    auto_fix
                </span>
                <p class="sidebar-label">More Ideas</p>
            </button>
            <button class="sidebar-links">
                <span class="icon material-symbols-outlined">
                    wallpaper
                </span>

                <p class="sidebar-label">Background</p>
            </button>
            <button class="sidebar-links">
                <span class="icon material-symbols-outlined">
                    title
                </span>

                <p class="sidebar-label">Name</p>
            </button>
            <button class="sidebar-links">
                <span class="icon material-symbols-outlined">
                    abc
                </span>
                <p class="sidebar-label">Slogan</p>
            </button>
            <button class="sidebar-links">
                <span class="icon material-symbols-outlined">
                    star
                </span>
                <p class="sidebar-label">symbol</p>
            </button>
            <button class="sidebar-links">
                <span class="icon material-symbols-outlined">
                    circle
                </span>
                <p class="sidebar-label">Container</p>
            </button>
            <button class="sidebar-links">
                <span class="icon material-symbols-outlined">
                    history
                </span>

                <p class="sidebar-label">history</p>
            </button>
            <button class="sidebar-links">
                <span class="icon material-symbols-outlined">
                    favorite
                </span>

                <p class="sidebar-label">Your Logos</p>
            </button>
            <img class="logo" src="../media/logo/logo.svg">
        </sidebar>
        <div class="options">
            <div class="options-head">
                <div class="options-title">
                    Name Options
                    <div class="options-action">
                        <button class="btn btn-icon btn-gray btn-pill btn-sm" data-bs-toggle="modal"
                            data-bs-target="#fullScreenModal">
                            <span class="icn material-symbols-outlined">
                                open_in_full
                            </span>
                            Full Screen
                        </button>
                    </div>
                </div>
                <div class="btn-group options-btn">

                    <button class="btn btn-gray active" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Font Pairs </button>
                    <ul class="dropdown-menu custom-drop-down">
                        <li class="dropdown-menu-item"><a class="dropdown-menu-link" href="#">Font Family</a></li>
                        <li class="dropdown-menu-item"><a class="dropdown-menu-link" href="#">Font Family</a></li>
                        <li class="dropdown-menu-item"><a class="dropdown-menu-link" href="#">Font Family</a></li>
                        <li class="dropdown-menu-item"><a class="dropdown-menu-link" href="#">Font Family</a></li>
                    </ul>
                    <button class="btn btn-gray"> Color </button>

                </div>

                <div class="color-palette">
                    <button class="color-palette-btn" type="button">
                        <span class="color-name" style="background-color:#0058CD;"></span>
                    </button>
                    <button class="color-palette-btn active" type="button">
                        <span class="color-name" style="background-color:#00A4A4;"></span>
                    </button>
                    <button class="color-palette-btn" type="button">
                        <span class="color-name" style="background-color:#00A300;"></span>
                    </button>
                    <button class="color-palette-btn" type="button">
                        <span class="color-name" style="background-color:#6333BB;"></span>
                    </button>
                </div>
            </div>
            <div class="options-body">
                <div class="some-logos some-logos-single">
                    <div class="some-logos-item">
                        <img class="some-logos-link" src="../media/onboarding/inspiration/01.png" alt="">
                        <div class="hover-action">
                            <div class="txt-choose">Click to choose</div>
                        </div>
                    </div>
                    <div class="some-logos-item">
                        <img class="some-logos-link" src="../media/onboarding/inspiration/02.png" alt="">
                        <div class="hover-action">
                            <div class="txt-choose">Click to choose</div>
                        </div>
                    </div>
                    <div class="some-logos-item">
                        <img class="some-logos-link" src="../media/onboarding/inspiration/03.png" alt="">
                        <div class="hover-action">
                            <div class="txt-choose">Click to choose</div>
                        </div>
                    </div>
                    <div class="some-logos-item">
                        <img class="some-logos-link" src="../media/onboarding/inspiration/04.png" alt="">
                        <div class="hover-action">
                            <div class="txt-choose">Click to choose</div>
                        </div>
                    </div>
                    <div class="some-logos-item">
                        <img class="some-logos-link" src="../media/onboarding/inspiration/05.png" alt="">
                        <div class="hover-action">
                            <div class="txt-choose">Click to choose</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="options-foot"></div>
        </div>
        <main class="main">
            <div class="main-head">
                <div class="main-head-tools">
                    <input class="form-control w-75" type="search" placeholder="Real Estate">
                    <div class="btn-group">
                        <button class="btn btn-gray">ABC</button>
                        <button class="btn btn-gray">abc</button>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-gray"> <span class="material-symbols-outlined">
                                chevron_left
                            </span></button>

                        <button class="btn btn-gray">
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </button>
                        <button class="btn btn-gray"><span class="material-symbols-outlined">
                                expand_less
                            </span></button>
                        <button class="btn btn-gray">
                            <span class="material-symbols-outlined">
                                expand_more
                            </span></button>

                    </div>
                    <div class="dropdown">
                        <button class="btn btn-gray" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="material-symbols-outlined">
                                select_all
                            </span>
                        </button>

                        <div class="dropdown-menu p-3">
                            <div class="form-group feature-dropdown">
                                <div> <label class="form-label">Range Example:</label> <span class="txt-brand"><strong>
                                            10</strong></span>
                                </div>
                                <input class="form-input range" type="range">
                            </div>
                        </div>
                    </div>

                    <div class="btn-group"> <button class="btn btn-gray"><span class="material-symbols-outlined">
                                select_all
                            </span>
                        </button> <button class="btn btn-gray"><span class="material-symbols-outlined">
                                select_all
                            </span>
                        </button> <button class="btn btn-gray"><span class="material-symbols-outlined">
                                select_all
                            </span>
                        </button> <button class="btn btn-gray"><span class="material-symbols-outlined">
                                select_all
                            </span>
                        </button>

                    </div>

                </div>
            </div>
            <div class="main-body">
                <div class="previews">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tile">
                                <img class="background-media" src="../media/editor/640x480_01.jpg" alt="">
                                <div class="foreground-media option-1">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tile">
                                <img class="background-media" src="../media/editor/640x480_02.jpg" alt="">
                                <div class="foreground-media option-2">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tile">
                                <img class="background-media" src="../media/editor/640x480_03.jpg" alt="">
                                <div class="foreground-media option-4">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                                <div class="foreground-media option-5">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cms preview-cta">
                                <h4>Included in your logo package</h4>
                                <ul>
                                    <li>High resolution logo</li>
                                    <li>Vector EPS and SVG files</li>
                                    <li>Transparent background</li>
                                    <li>Lifetime phone support</li>
                                    <li>Black / White versions</li>
                                </ul>
                                <button class="btn btn-white btn-wide">Buy Now</button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="tile">
                                <img class="background-media" src="../media/editor/1240x930_1.jpg" alt="">
                                <div class="foreground-media option-6">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                                <div class="foreground-media option-7">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                                <div class="foreground-media option-8">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                                <div class="foreground-media option-9">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                                <div class="foreground-media option-10">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                                <div class="foreground-media option-11">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                                <div class="foreground-media option-12">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>


                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tile">
                                <img class="background-media" src="../media/editor/640x480_04.jpg" alt="">
                                <div class="foreground-media option-13">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tile">
                                <img class="background-media" src="../media/editor/640x480_05.jpg" alt="">
                                <div class="foreground-media option-14">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cms preview-cta">
                                <h4>Included in your logo package</h4>
                                <ul>

                                    <li>Print ready</li>
                                    <li>Make changes &amp; re-download *</li>
                                    <li>Font names &amp; colors</li>
                                    <li>Full Ownership</li>
                                </ul>
                                <button class="btn btn-white btn-wide">Buy Now</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tile">
                                <img class="background-media" src="../media/editor/640x480_06.jpg" alt="">
                                <div class="foreground-media option-15">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="tile">
                                <img class="background-media" src="../media/editor/1240x930_3.jpg" alt="">
                                <div class="foreground-media option-16">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                                <div class="foreground-media option-17">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                                <div class="foreground-media option-18">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                                <div class="foreground-media option-19">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                                <div class="foreground-media option-20">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tile">
                                <img class="background-media" src="../media/editor/640x480_07.jpg" alt="">
                                <div class="foreground-media option-21">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tile">
                                <img class="background-media" src="../media/editor/640x480_08.jpg" alt="">
                                <div class="foreground-media option-22">
                                    <img src="../media/editor/preview-logo.png" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-foot"></div>
            <div class="offcanvas offcanvas-custom offcanvas-end" tabindex="-1" id="account"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    ...
                </div>
            </div>
        </main>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="fullScreenModal" tabindex="-1" aria-labelledby="fullScreenModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="fullScreenModalLabel">Full Screen title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="some-logos">
                            <div class="some-logos-item">
                                <img class="some-logos-link" src="../media/onboarding/inspiration/01.png" alt="">
                                <div class="hover-action">
                                    <div class="txt-choose">Click to choose</div>
                                </div>
                            </div>
                            <div class="some-logos-item">
                                <img class="some-logos-link" src="../media/onboarding/inspiration/02.png" alt="">
                                <div class="hover-action">
                                    <div class="txt-choose">Click to choose</div>
                                </div>
                            </div>
                            <div class="some-logos-item">
                                <img class="some-logos-link" src="../media/onboarding/inspiration/03.png" alt="">
                                <div class="hover-action">
                                    <div class="txt-choose">Click to choose</div>
                                </div>
                            </div>
                            <div class="some-logos-item">
                                <img class="some-logos-link" src="../media/onboarding/inspiration/04.png" alt="">
                                <div class="hover-action">
                                    <div class="txt-choose">Click to choose</div>
                                </div>
                            </div>
                            <div class="some-logos-item">
                                <img class="some-logos-link" src="../media/onboarding/inspiration/05.png" alt="">
                                <div class="hover-action">
                                    <div class="txt-choose">Click to choose</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<!-- JS =======-->
<script src="./../js/min/main.js" type="text/javascript"></script>

</html>