<!DOCTYPE html>
<html lang="en" data-theme="light" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>FATbit | Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="css/main-ltr.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body class="fb-body">
    <div class="app">
        <?php
        include 'includes/sidebar.php';
        ?>
        <main class="main">
            <?php
            include 'includes/new-header.php';
            ?>
            <div class="content" id="content">
                <?php
                include 'includes/sub-header.php';
                ?>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="row row-full-height">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="card card-flush commerce-card card-commerce-bg"
                                    style="background-image: url(./media/bg/card-commerce-bg-1.png);">
                                    <div class="card-head">
                                        <div class="card-head-label">
                                            <h6 class="h6"> Order Sales <i class="far fa-question-circle"
                                                    data-bs-toggle="tooltip" data-placement="top"
                                                    title="Tooltip on top"></i>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="h3">$442.88</h3>
                                                <span class="badge badge-success font-bold">+3.5%</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="commerce-card-graph">
                                                    <img src="./media/graph-order-sales.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-flush commerce-card card-commerce-bg"
                                    style="background-image: url(./media/bg/card-commerce-bg-2.png);">
                                    <div class="card-head">
                                        <div class="card-head-label">
                                            <h6 class="h6">Sales Earnings </h6>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="h3">$885.88</h3>
                                                <span class="badge badge-success font-bold">+2.5%</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="commerce-card-graph">
                                                    <img src="./media/graph-sales-earnings.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="card card-flush commerce-card card-commerce-bg"
                                    style="background-image: url(./media/bg/card-commerce-bg-3.png);">
                                    <div class="card-head">
                                        <div class="card-head-label">
                                            <h6 class="h6">New Users</h6>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="h3">$885.88</h3>
                                                <span class="badge badge-success font-bold">+2.5%</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="commerce-card-graph">
                                                    <img src="./media/graph-sales-earnings.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-flush commerce-card card-commerce-bg"
                                    style="background-image: url(./media/bg/card-commerce-bg-1.png);">
                                    <div class="card-head">
                                        <div class="card-head-label">
                                            <h6 class="h6">Total Orders</h6>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="h3">$885.88</h3>
                                                <span class="badge badge-success font-bold">+2.5%</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="commerce-card-graph">
                                                    <img src="./media/graph-sales-earnings.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Quick Stats-->
                    </div>
                    <div class="col-xl-6">
                        <!--begin:: Widgets/Order Statistics-->
                        <div class="card card--height-fluid">
                            <div class="card-head">
                                <div class="card-head-label">
                                    <h3 class="card-head-title">
                                        Order Statistics
                                    </h3>
                                </div>
                                <div class="card-head-toolbar dropdown">
                                    <a href="#" class="btn btn-outline-brand btn-sm dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        Export </a>
                                    <ul class="dropdown-menu dropdown-menu-anim">
                                        <li class="dropdown-menu-head">
                                            Export Options
                                            <i class="flaticon2-information" data-bs-toggle="tooltip"
                                                data-placement="right" title="Click to learn more..."></i>
                                        </li>
                                        <li class="dropdown-menu-separator"></li>
                                        <li class="dropdown-menu-item">
                                            <a href="#" class="dropdown-menu-link">
                                                <i class="dropdown-menu-icon flaticon2-drop"></i>
                                                <span class="dropdown-menu-text">Activity</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-menu-item">
                                            <a href="#" class="dropdown-menu-link">
                                                <i class="dropdown-menu-icon flaticon2-calendar-8"></i>
                                                <span class="dropdown-menu-text">FAQ</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-menu-item">
                                            <a href="#" class="dropdown-menu-link">
                                                <i class="dropdown-menu-icon flaticon2-link"></i>
                                                <span class="dropdown-menu-text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-menu-item">
                                            <a href="#" class="dropdown-menu-link">
                                                <i class="dropdown-menu-icon flaticon2-new-email"></i>
                                                <span class="dropdown-menu-text">Support</span>
                                                <span class="dropdown-menu-badge">
                                                    <span class="badge badge-success">5</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="separator"></li>
                                        <li class="dropdown-menu-item">
                                            <a class="btn btn-danger btn-bold btn-sm" href="#">Upgrade
                                                plan</a>
                                            <a class="btn btn-clean btn-bold btn-sm" href="#" data-bs-toggle="tooltip"
                                                data-placement="right" title="Click to learn more...">Learn more</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="card-body card-body--fluid">
                                <div class="widget12">
                                    <div class="widget12__content">
                                        <div class="widget12__item">
                                            <div class="widget12__info">
                                                <span class="widget12__desc">Annual Taxes EMS</span>
                                                <span class="widget12__value">$400,000</span>
                                            </div>
                                            <div class="widget12__info">
                                                <span class="widget12__desc">Finance Review Date</span>
                                                <span class="widget12__value">July 24,2019</span>
                                            </div>
                                        </div>
                                        <div class="widget12__item">
                                            <div class="widget12__info">
                                                <span class="widget12__desc">Avarage Revenue</span>
                                                <span class="widget12__value">$60M</span>
                                            </div>
                                            <div class="widget12__info">
                                                <span class="widget12__desc">Revenue Margin</span>
                                                <div class="widget12__progress">
                                                    <div class="progress progress--sm">
                                                        <div class="progress-bar bg-brand" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <span class="widget12__stat">
                                                        40%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget12__chart">
                                        <div class="ct-chart ct-chart-order-statistics"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Order Statistics-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card card-tabs card--height-fluid">
                            <div class="card-head">
                                <div class="card-head-label">
                                    <h3 class="card-head-title">
                                        Sales Reports
                                    </h3>
                                </div>
                                <div class="card-head-toolbar">
                                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab"
                                                href="#widget11_tab1_content" role="tab">
                                                Last Month
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#widget11_tab2_content"
                                                role="tab">
                                                All Time
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-table">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="widget11_tab1_content">
                                        <div class="widget11">
                                            <div class="table-responsive">
                                                <table class="table js--table-scrollable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Application</th>
                                                            <th>Sales</th>
                                                            <th>Change</th>
                                                            <th>Status</th>
                                                            <th class="align-right">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="col-check">
                                                                <label class="checkbox checkbox-single">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="widget11__title">Loop</a>
                                                                <span class="widget11__sub">CRM System</span>
                                                            </td>
                                                            <td>19,200</td>
                                                            <td>$63</td>
                                                            <td><span class="badge badge-inline badge-brand">new</span>
                                                            </td>
                                                            <td class="align-right font-brand font-bold">$34,740
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-check">
                                                                <label class="checkbox checkbox-single"><input
                                                                        type="checkbox"><span></span></label>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="widget11__title">Selto</a>
                                                                <span class="widget11__sub">Powerful Website
                                                                    Builder</span>
                                                            </td>
                                                            <td>24,310</td>
                                                            <td>$39</td>
                                                            <td><span
                                                                    class="badge badge-inline badge-success">approved</span>
                                                            </td>
                                                            <td class="align-right font-brand font-bold">$46,010
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-check">
                                                                <label class="checkbox checkbox-single"><input
                                                                        type="checkbox"><span></span></label>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="widget11__title">Jippo</a>
                                                                <span class="widget11__sub">The Best Selling
                                                                    App</span>
                                                            </td>
                                                            <td>9,076</td>
                                                            <td>$105</td>
                                                            <td><span
                                                                    class="badge badge-inline badge-warning">pending</span>
                                                            </td>
                                                            <td class="align-right font-brand font-bold">$67,800
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-check">
                                                                <label class="checkbox checkbox-single"><input
                                                                        type="checkbox"><span></span></label>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="widget11__title">Verto</a>
                                                                <span class="widget11__sub">Web Development
                                                                    Tool</span>
                                                            </td>
                                                            <td>11,094</td>
                                                            <td>$16</td>
                                                            <td><span class="badge badge-inline badge-danger">on
                                                                    hold</span></td>
                                                            <td class="align-right font-brand font-bold">$18,520
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="card-foot">
                                                <button type="button" class="btn btn-outline-brand btn-sm">Import
                                                    Report</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="widget11_tab2_content">
                                        <div class="widget11">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Application</th>
                                                            <th>Sales</th>
                                                            <th>Change</th>
                                                            <th>Status</th>
                                                            <th class="align-right">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="col-check">
                                                                <label class="checkbox checkbox-single">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <span class="widget11__title">Loop</span>
                                                                <span class="widget11__sub">CRM System</span>
                                                            </td>
                                                            <td>19,200</td>
                                                            <td>$63</td>
                                                            <td><span
                                                                    class="badge badge-inline badge-danger">pending</span>
                                                            </td>
                                                            <td class="align-right font-brand  font-bold">
                                                                $23,740</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-check">
                                                                <label class="checkbox checkbox-single"><input
                                                                        type="checkbox"><span></span></label>
                                                            </td>
                                                            <td>
                                                                <span class="widget11__title">Selto</span>
                                                                <span class="widget11__sub">Powerful Website
                                                                    Builder</span>
                                                            </td>
                                                            <td>24,310</td>
                                                            <td>$39</td>
                                                            <td><span
                                                                    class="badge badge-inline badge-success">new</span>
                                                            </td>
                                                            <td class="align-right font-success  font-bold">
                                                                $46,010</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-check">
                                                                <label class="checkbox checkbox-single"><input
                                                                        type="checkbox"><span></span></label>
                                                            </td>
                                                            <td>
                                                                <span class="widget11__title">Jippo</span>
                                                                <span class="widget11__sub">The Best Selling
                                                                    App</span>
                                                            </td>
                                                            <td>9,076</td>
                                                            <td>$105</td>
                                                            <td><span
                                                                    class="badge badge-inline badge-brand">approved</span>
                                                            </td>
                                                            <td class="align-right font-danger font-bold">
                                                                $15,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-check">
                                                                <label class="checkbox checkbox-single"><input
                                                                        type="checkbox"><span></span></label>
                                                            </td>
                                                            <td>
                                                                <span class="widget11__title">Verto</span>
                                                                <span class="widget11__sub">Web Development
                                                                    Tool</span>
                                                            </td>
                                                            <td>11,094</td>
                                                            <td>$16</td>
                                                            <td><span class="badge badge-inline badge-info">done</span>
                                                            </td>
                                                            <td class="align-right font-warning font-bold">
                                                                $8,520</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="widget11__action align-right">
                                                <button type="button" class="btn btn-success btn-bold btn-sm">Generate
                                                    Report</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="widget11_tab3_content">
                                    </div>
                                    <!--end::tab 3 content-->
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Sale Reports-->
                    </div>
                    <div class="col-xl-6">

                        <div class="card card--height-fluid">
                            <div class="card-head">
                                <div class="card-head-label">
                                    <h3 class="card-head-title">
                                        Recent Activities
                                    </h3>
                                </div>
                                <div class="card-head-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg icn-svg" xmlns="http://www.w3.org/2000/svg" width="24px"
                                                height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor">
                                                    </rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </button>


                                        <ul class="dropdown-menu dropdown-menu-anim">
                                            <li class="dropdown-menu-head">
                                                Export Options
                                                <i class="flaticon2-information" data-bs-toggle="tooltip"
                                                    data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="dropdown-menu-separator"></li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-drop"></i>
                                                    <span class="dropdown-menu-text">Activity</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-calendar-8"></i>
                                                    <span class="dropdown-menu-text">FAQ</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-link"></i>
                                                    <span class="dropdown-menu-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-new-email"></i>
                                                    <span class="dropdown-menu-text">Support</span>
                                                    <span class="dropdown-menu-badge">
                                                        <span class="badge badge-success">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-separator"></li>
                                            <li class="dropdown-menu-foot">
                                                <a class="btn btn-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                                <a class="btn btn-clean btn-bold btn-sm" href="#"
                                                    data-bs-toggle="tooltip" data-placement="right"
                                                    title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--Begin::Timeline 3 -->
                                <div class="timeline-v2">
                                    <div class="timeline-v2__items  padding-top-25 padding-bottom-30">
                                        <div class="timeline-v2__item">
                                            <span class="timeline-v2__item-time">10:00</span>
                                            <div class="timeline-v2__item-cricle">
                                                <i class="fa fa-genderless font-danger"></i>
                                            </div>
                                            <div class="timeline-v2__item-text  padding-top-5">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                                incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                        <div class="timeline-v2__item">
                                            <span class="timeline-v2__item-time">12:45</span>
                                            <div class="timeline-v2__item-cricle">
                                                <i class="fa fa-genderless font-success"></i>
                                            </div>
                                            <div class="timeline-v2__item-text timeline-v2__item-text--bold">
                                                AEOL Meeting With
                                            </div>
                                            <div class="list-pics list-pics--sm padding-l-20">
                                                <a href="#"><img src="./media/users/100_4.jpg" title=""></a>
                                                <a href="#"><img src="./media/users/100_13.jpg" title=""></a>
                                                <a href="#"><img src="./media/users/100_11.jpg" title=""></a>
                                                <a href="#"><img src="./media/users/100_14.jpg" title=""></a>
                                            </div>
                                        </div>
                                        <div class="timeline-v2__item">
                                            <span class="timeline-v2__item-time">14:00</span>
                                            <div class="timeline-v2__item-cricle">
                                                <i class="fa fa-genderless font-brand"></i>
                                            </div>
                                            <div class="timeline-v2__item-text padding-top-5">
                                                Make Deposit <a href="#" class="link link--brand font-bolder">USD
                                                    700</a> To ESL.
                                            </div>
                                        </div>
                                        <div class="timeline-v2__item">
                                            <span class="timeline-v2__item-time">16:00</span>
                                            <div class="timeline-v2__item-cricle">
                                                <i class="fa fa-genderless font-warning"></i>
                                            </div>
                                            <div class="timeline-v2__item-text padding-top-5">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                                incididunt ut labore et dolore magna elit enim at minim<br>
                                                veniam quis nostrud
                                            </div>
                                        </div>
                                        <div class="timeline-v2__item">
                                            <span class="timeline-v2__item-time">17:00</span>
                                            <div class="timeline-v2__item-cricle">
                                                <i class="fa fa-genderless font-info"></i>
                                            </div>
                                            <div class="timeline-v2__item-text padding-top-5">
                                                Placed a new order in <a href="#"
                                                    class="link link--brand font-bolder">SIGNATURE MOBILE</a>
                                                marketplace.
                                            </div>
                                        </div>
                                        <div class="timeline-v2__item">
                                            <span class="timeline-v2__item-time">16:00</span>
                                            <div class="timeline-v2__item-cricle">
                                                <i class="fa fa-genderless font-brand"></i>
                                            </div>
                                            <div class="timeline-v2__item-text padding-top-5">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                                incididunt ut labore et dolore magna elit enim at minim<br>
                                                veniam quis nostrud
                                            </div>
                                        </div>
                                        <div class="timeline-v2__item">
                                            <span class="timeline-v2__item-time">17:00</span>
                                            <div class="timeline-v2__item-cricle">
                                                <i class="fa fa-genderless font-danger"></i>
                                            </div>
                                            <div class="timeline-v2__item-text padding-top-5">
                                                Received a new feedback on <a href="#"
                                                    class="link link--brand font-bolder">FinancePro App</a>
                                                product.
                                            </div>
                                        </div>
                                        <div class="timeline-v2__item">
                                            <span class="timeline-v2__item-time">15:30</span>
                                            <div class="timeline-v2__item-cricle">
                                                <i class="fa fa-genderless font-danger"></i>
                                            </div>
                                            <div class="timeline-v2__item-text padding-top-5">
                                                New notification message has been received on <a href="#"
                                                    class="link link--brand font-bolder">LoopFin Pro</a>
                                                product.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End::Timeline 3 -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Sales Stats-->
                        <div class="card card--head--noborder card--height-fluid">
                            <div class="card-head card-head-noborder">
                                <div class="card-head-label">
                                    <h3 class="card-head-title">
                                        Sales Stats
                                    </h3>
                                </div>
                                <div class="card-head-toolbar">
                                    <div class="dropdown dropdown">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg icn-svg" xmlns="http://www.w3.org/2000/svg" width="24px"
                                                height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor">
                                                    </rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </button>

                                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-anim ">
                                            <li class="dropdown-menu-head">
                                                <span class="dropdown-menu-text">Finance</span>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-graph-1"></i>
                                                    <span class="dropdown-menu-text">Statistics</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-calendar-4"></i>
                                                    <span class="dropdown-menu-text">Events</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-layers-1"></i>
                                                    <span class="dropdown-menu-text">Reports</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-head">
                                                <span class="dropdown-menu-text">HR</span>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-calendar-4"></i>
                                                    <span class="dropdown-menu-text">Notifications</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-file-1"></i>
                                                    <span class="dropdown-menu-text">Files</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--begin::Widget 6-->
                                <div class="widget15">
                                    <div class="widget15__chart">
                                        <div class="ct-chart-order-sales-stats"></div>
                                    </div>
                                    <div class="widget15__items margin-t-40">
                                        <div class="row">
                                            <div class="col">
                                                <div class="widget15__item">
                                                    <span class="widget15__stats">
                                                        63%
                                                    </span>
                                                    <span class="widget15__text">
                                                        Sales Grow
                                                    </span>
                                                    <div class="space-10"></div>
                                                    <div class="progress widget15__chart-progress--sm">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="widget15__item">
                                                    <span class="widget15__stats">
                                                        54%
                                                    </span>
                                                    <span class="widget15__text">
                                                        Orders Grow
                                                    </span>
                                                    <div class="space-10"></div>
                                                    <div class="progress progress--sm">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="widget15__item">
                                                    <span class="widget15__stats">
                                                        41%
                                                    </span>
                                                    <span class="widget15__text">
                                                        Profit Grow
                                                    </span>
                                                    <div class="space-10"></div>
                                                    <div class="progress progress--sm">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="widget15__item">
                                                    <span class="widget15__stats">
                                                        79%
                                                    </span>
                                                    <span class="widget15__text">
                                                        Member Grow
                                                    </span>
                                                    <div class="space-10"></div>
                                                    <div class="progress progress--sm">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="widget15__desc">
                                                    * lorem ipsum dolor sit amet consectetuer sediat elit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Widget 6-->
                            </div>
                        </div>
                        <!--end:: Widgets/Sales Stats-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Top Locations-->
                        <div class="card card--head--noborder card--height-fluid">
                            <div class="card-head">
                                <div class="card-head-label">
                                    <h3 class="card-head-title">
                                        Top Locations
                                    </h3>
                                </div>
                                <div class="card-head-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg icn-svg" xmlns="http://www.w3.org/2000/svg" width="24px"
                                                height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor">
                                                    </rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-anim ">
                                            <li class="dropdown-menu-head">
                                                <span class="dropdown-menu-text">Finance</span>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-graph-1"></i>
                                                    <span class="dropdown-menu-text">Statistics</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-calendar-4"></i>
                                                    <span class="dropdown-menu-text">Events</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-layers-1"></i>
                                                    <span class="dropdown-menu-text">Reports</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-head">
                                                <span class="dropdown-menu-text">HR</span>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-calendar-4"></i>
                                                    <span class="dropdown-menu-text">Notifications</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-file-1"></i>
                                                    <span class="dropdown-menu-text">Files</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="widget15">
                                    <div class="widget15__map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.2445633768834!2d76.72417851512965!3d30.6552410816642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feef5b90fc51b%3A0x7541e61fcad7e6c4!2sAbly+Soft+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1565611731197!5m2!1sen!2sin"
                                            width="600" height="450" frameborder="0" style="border:0"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="widget15__items margin-t-30">
                                        <div class="row">
                                            <div class="col">
                                                <!--begin::widget item-->
                                                <div class="widget15__item">
                                                    <span class="widget15__stats">
                                                        63%
                                                    </span>
                                                    <span class="widget15__text">
                                                        London
                                                    </span>
                                                    <div class="space-10"></div>
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::widget item-->
                                            </div>
                                            <div class="col">
                                                <!--begin::widget item-->
                                                <div class="widget15__item">
                                                    <span class="widget15__stats">
                                                        54%
                                                    </span>
                                                    <span class="widget15__text">
                                                        Glasgow
                                                    </span>
                                                    <div class="space-10"></div>
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::widget item-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <!--begin::widget item-->
                                                <div class="widget15__item">
                                                    <span class="widget15__stats">
                                                        41%
                                                    </span>
                                                    <span class="widget15__text">
                                                        Dublin
                                                    </span>
                                                    <div class="space-10"></div>
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::widget item-->
                                            </div>
                                            <div class="col">
                                                <!--begin::widget item-->
                                                <div class="widget15__item">
                                                    <span class="widget15__stats">
                                                        79%
                                                    </span>
                                                    <span class="widget15__text">
                                                        Edinburgh
                                                    </span>
                                                    <div class="space-10"></div>
                                                    <div class="progress m-progress--sm">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <!--end::widget item-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Top Locations-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Trends-->
                        <div class="card card--head--noborder card--height-fluid">
                            <div class="card-head card-head-noborder">
                                <div class="card-head-label">
                                    <h3 class="card-head-title">
                                        Trends
                                    </h3>
                                </div>
                                <div class="card-head-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg icn-svg" xmlns="http://www.w3.org/2000/svg" width="24px"
                                                height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor">
                                                    </rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </button>

                                        <ul class="dropdown-menu dropdown-menu-anim">
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-line-chart"></i>
                                                    <span class="dropdown-menu-text">Reports</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-send"></i>
                                                    <span class="dropdown-menu-text">Messages</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-pie-chart-1"></i>
                                                    <span class="dropdown-menu-text">Charts</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-avatar"></i>
                                                    <span class="dropdown-menu-text">Members</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-settings"></i>
                                                    <span class="dropdown-menu-text">Settings</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body card-body--fluid card-body--fit">
                                <div class="widget4 widget4--sticky">
                                    <div class="widget4__chart">
                                        <div class="ct-chart-order-trends"></div>
                                    </div>
                                    <div class="widget4__items widget4__items--bottom card__space-x mb-4">
                                        <div class="widget4__item">
                                            <div class="widget4__img widget4__img--logo">
                                                <img src="./media/client-logos/logo3.png" alt="">
                                            </div>
                                            <div class="widget4__info">
                                                <a href="#" class="widget4__title">
                                                    Phyton
                                                </a>
                                                <span class="widget4__sub">
                                                    A Programming Language
                                                </span>
                                            </div>
                                            <span class="widget4__ext">
                                                <span class="widget4__number font-danger">+$17</span>
                                            </span>
                                        </div>
                                        <div class="widget4__item">
                                            <div class="widget4__img widget4__img--logo">
                                                <img src="./media/client-logos/logo1.png" alt="">
                                            </div>
                                            <div class="widget4__info">
                                                <a href="#" class="widget4__title">
                                                    FlyThemes
                                                </a>
                                                <span class="widget4__sub">
                                                    A Let's Fly Fast Again Language
                                                </span>
                                            </div>
                                            <span class="widget4__ext">
                                                <span class="widget4__number font-danger">+$300</span>
                                            </span>
                                        </div>
                                        <div class="widget4__item">
                                            <div class="widget4__img widget4__img--logo">
                                                <img src="./media/client-logos/logo2.png" alt="">
                                            </div>
                                            <div class="widget4__info">
                                                <a href="#" class="widget4__title">
                                                    AirApp
                                                </a>
                                                <span class="widget4__sub">
                                                    Awesome App For Project Management
                                                </span>
                                            </div>
                                            <span class="widget4__ext">
                                                <span class="widget4__number font-danger">+$6700</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Trends-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card card--height-fluid card--mobile ">
                            <div class="card-head card-head--lg card-head-noborder card-head--break-sm">
                                <div class="card-head-label">
                                    <h3 class="card-head-title">
                                        Exclusive Datatable Plugin
                                    </h3>
                                </div>
                                <div class="card-head-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="svg icn-svg" xmlns="http://www.w3.org/2000/svg" width="24px"
                                                height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor">
                                                    </rect>
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-anim">
                                            <li class="dropdown-menu-head">
                                                Export Options
                                                <i class="flaticon2-information" data-bs-toggle="tooltip"
                                                    data-placement="right" title="Click to learn more..."></i>
                                            </li>

                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-drop"></i>
                                                    <span class="dropdown-menu-text">Activity</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-calendar-8"></i>
                                                    <span class="dropdown-menu-text">FAQ</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-link"></i>
                                                    <span class="dropdown-menu-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-item">
                                                <a href="#" class="dropdown-menu-link">
                                                    <i class="dropdown-menu-icon flaticon2-new-email"></i>
                                                    <span class="dropdown-menu-text">Support</span>
                                                    <span class="dropdown-menu-badge">
                                                        <span class="badge badge-success">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-separator"></li>
                                            <li class="dropdown-menu-foot">
                                                <a class="btn btn-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                                <a class="btn btn-clean btn-bold btn-sm" href="#"
                                                    data-bs-toggle="tooltip" data-placement="right"
                                                    title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="card-table">
                                <!--begin: Datatable -->
                                <div class="datatable datatable--default datatable--scroll">
                                    <table class="table datatable__table js--table-scrollable">
                                        <thead class="datatable__head">
                                            <tr class="datatable__row">
                                                <th
                                                    class="datatable__cell--center datatable__cell datatable__cell--check">
                                                    <span><label
                                                            class="checkbox checkbox-single checkbox-all checkbox-solid"><input
                                                                type="checkbox">&nbsp;<span></span></label></span>
                                                </th>
                                                <th
                                                    class="datatable__cell datatable__cell--sort datatable__cell--sorted">
                                                    <span>Company <i class="flaticon2-arrow-up"></i></span>
                                                </th>
                                                <th class="datatable__cell datatable__cell--sort">
                                                    <span>Date</span>
                                                </th>
                                                <th class="datatable__cell datatable__cell--sort">
                                                    <span>Status</span>
                                                </th>
                                                <th data-field="Type" class="datatable__cell datatable__cell--sort">
                                                    <span>Managed
                                                        By</span>
                                                </th>
                                                <th data-field="Actions" data-autohide-disabled="false"
                                                    class="datatable__cell datatable__cell--sort">
                                                    <span>Actions</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="datatable__body">
                                            <tr class="datatable__row">
                                                <td class="datatable__cell--center datatable__cell datatable__cell--check"
                                                    data-field="RecordID"><span><label
                                                            class="checkbox checkbox-single checkbox-solid"><input
                                                                type="checkbox"
                                                                value="1">&nbsp;<span></span></label></span>
                                                </td>
                                                <td data-field="ShipName" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/client-logos/logo1.png"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Gleichner,
                                                                    Ziemann and
                                                                    Gutkowski</a> <span
                                                                    class="user-card-v2__email">Angular,
                                                                    React</span> </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="ShipDate" class="datatable__cell"><span><span
                                                            class="font-bold">2/12/2018</span></span></td>
                                                <td data-field="Status" class="datatable__cell"><span><span
                                                            class="btn btn-bold btn-sm btn-font-sm  btn-success">Success</span></span>
                                                </td>
                                                <td data-field="Type" class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic">
                                                                <div class="badge badge-xl badge-info">N</div>
                                                            </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Nixie
                                                                    Sailor</a> <span
                                                                    class="user-card-v2__desc">Designer</span>
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="Actions" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="dropdown"> <a data-bs-toggle="dropdown"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <svg class="svg icn-svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                    </g>
                                                                </svg> </a>

                                                            <ul class="dropdown-menu dropdown-menu-anim">
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-expand"></i>
                                                                        <span class="dropdown-menu-text">View</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-contract"></i>
                                                                        <span class="dropdown-menu-text">Edit</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-trash"></i>
                                                                        <span class="dropdown-menu-text">Delete</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-mail-1"></i>
                                                                        <span class="dropdown-menu-text">Export</span>
                                                                    </a> </li>
                                                            </ul>

                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <tr data-row="1" class="datatable__row datatable__row--even">
                                                <td class="datatable__cell--center datatable__cell datatable__cell--check"
                                                    data-field="RecordID"><span><label
                                                            class="checkbox checkbox-single checkbox-solid"><input
                                                                type="checkbox"
                                                                value="2">&nbsp;<span></span></label></span>
                                                </td>
                                                <td data-field="ShipName" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/client-logos/logo2.png"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name"
                                                                    href="#">Rosenbaum-Reichel</a> <span
                                                                    class="user-card-v2__email">Vue,
                                                                    Kendo</span> </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="ShipDate" class="datatable__cell"><span><span
                                                            class="font-bold">8/6/2017</span></span></td>
                                                <td data-field="Status" class="datatable__cell"><span><span
                                                            class="btn btn-bold btn-sm btn-font-sm  btn-danger">Done</span></span>
                                                </td>
                                                <td data-field="Type" class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic">
                                                                <div class="badge badge-xl badge-brand">E
                                                                </div>
                                                            </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Emelita
                                                                    Giraldez</a> <span
                                                                    class="user-card-v2__desc">Manager</span>
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="Actions" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="dropdown"> <a data-bs-toggle="dropdown"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <svg class="svg icn-svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                    </g>
                                                                </svg> </a>

                                                            <ul class="dropdown-menu dropdown-menu-anim">
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-expand"></i>
                                                                        <span class="dropdown-menu-text">View</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-contract"></i>
                                                                        <span class="dropdown-menu-text">Edit</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-trash"></i>
                                                                        <span class="dropdown-menu-text">Delete</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-mail-1"></i>
                                                                        <span class="dropdown-menu-text">Export</span>
                                                                    </a> </li>
                                                            </ul>

                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <tr data-row="2" class="datatable__row">
                                                <td class="datatable__cell--center datatable__cell datatable__cell--check"
                                                    data-field="RecordID"><span><label
                                                            class="checkbox checkbox-single checkbox-solid"><input
                                                                type="checkbox"
                                                                value="3">&nbsp;<span></span></label></span>
                                                </td>
                                                <td data-field="ShipName" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/client-logos/logo3.png"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Kulas,
                                                                    Cassin and Batz</a> <span
                                                                    class="user-card-v2__email">.NET, Oracle,
                                                                    MySQL</span> </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="ShipDate" class="datatable__cell"><span><span
                                                            class="font-bold">5/26/2016</span></span></td>
                                                <td data-field="Status" class="datatable__cell"><span><span
                                                            class="btn btn-bold btn-sm btn-font-sm  btn-brand">Pending</span></span>
                                                </td>
                                                <td data-field="Type" class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/users/100_6.jpg"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Ula
                                                                    Luckin</a> <span
                                                                    class="user-card-v2__desc">Sales</span>
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="Actions" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="dropdown"> <a data-bs-toggle="dropdown"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <svg class="svg icn-svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                    </g>
                                                                </svg> </a>

                                                            <ul class="dropdown-menu dropdown-menu-anim">
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-expand"></i>
                                                                        <span class="dropdown-menu-text">View</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-contract"></i>
                                                                        <span class="dropdown-menu-text">Edit</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-trash"></i>
                                                                        <span class="dropdown-menu-text">Delete</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-mail-1"></i>
                                                                        <span class="dropdown-menu-text">Export</span>
                                                                    </a> </li>
                                                            </ul>

                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <tr data-row="3" class="datatable__row datatable__row--even">
                                                <td class="datatable__cell--center datatable__cell datatable__cell--check"
                                                    data-field="RecordID"><span><label
                                                            class="checkbox checkbox-single checkbox-solid"><input
                                                                type="checkbox"
                                                                value="4">&nbsp;<span></span></label></span>
                                                </td>
                                                <td data-field="ShipName" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/client-logos/logo4.png"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name"
                                                                    href="#">Pfannerstill-Treutel</a> <span
                                                                    class="user-card-v2__email">Node, SASS,
                                                                    Webpack</span> </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="ShipDate" class="datatable__cell"><span><span
                                                            class="font-bold">7/2/2016</span></span></td>
                                                <td data-field="Status" class="datatable__cell"><span><span
                                                            class="btn btn-bold btn-sm btn-font-sm  btn-brand">Pending</span></span>
                                                </td>
                                                <td data-field="Type" class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/users/100_7.jpg"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Evangeline
                                                                    Cure</a> <span
                                                                    class="user-card-v2__desc">Architect</span>
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="Actions" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="dropdown"> <a data-bs-toggle="dropdown"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <svg class="svg icn-svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                    </g>
                                                                </svg> </a>

                                                            <ul class="dropdown-menu dropdown-menu-anim">
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-expand"></i>
                                                                        <span class="dropdown-menu-text">View</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-contract"></i>
                                                                        <span class="dropdown-menu-text">Edit</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-trash"></i>
                                                                        <span class="dropdown-menu-text">Delete</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-mail-1"></i>
                                                                        <span class="dropdown-menu-text">Export</span>
                                                                    </a> </li>
                                                            </ul>

                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <tr data-row="4" class="datatable__row">
                                                <td class="datatable__cell--center datatable__cell datatable__cell--check"
                                                    data-field="RecordID"><span><label
                                                            class="checkbox checkbox-single checkbox-solid"><input
                                                                type="checkbox"
                                                                value="5">&nbsp;<span></span></label></span>
                                                </td>
                                                <td data-field="ShipName" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/client-logos/logo5.png"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Dicki-Kling</a>
                                                                <span class="user-card-v2__email">MangoDB,
                                                                    Java</span>
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="ShipDate" class="datatable__cell"><span><span
                                                            class="font-bold">5/20/2017</span></span></td>
                                                <td data-field="Status" class="datatable__cell"><span><span
                                                            class="btn btn-bold btn-sm btn-font-sm  btn-danger">Processing</span></span>
                                                </td>
                                                <td data-field="Type" class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/users/100_8.jpg"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Tierney
                                                                    St. Louis</a> <span
                                                                    class="user-card-v2__desc">Sales</span>
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="Actions" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="dropdown"> <a data-bs-toggle="dropdown"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <svg class="svg icn-svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                    </g>
                                                                </svg> </a>

                                                            <ul class="dropdown-menu dropdown-menu-anim">
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-expand"></i>
                                                                        <span class="dropdown-menu-text">View</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-contract"></i>
                                                                        <span class="dropdown-menu-text">Edit</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-trash"></i>
                                                                        <span class="dropdown-menu-text">Delete</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-mail-1"></i>
                                                                        <span class="dropdown-menu-text">Export</span>
                                                                    </a> </li>
                                                            </ul>

                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <tr data-row="5" class="datatable__row datatable__row--even">
                                                <td class="datatable__cell--center datatable__cell datatable__cell--check"
                                                    data-field="RecordID"><span><label
                                                            class="checkbox checkbox-single checkbox-solid"><input
                                                                type="checkbox"
                                                                value="6">&nbsp;<span></span></label></span>
                                                </td>
                                                <td data-field="ShipName" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/client-logos/logo3.png"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Gleason,
                                                                    Kub and Marquardt</a> <span
                                                                    class="user-card-v2__email">.NET, Oracle,
                                                                    MySQL</span> </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="ShipDate" class="datatable__cell"><span><span
                                                            class="font-bold">11/26/2016</span></span></td>
                                                <td data-field="Status" class="datatable__cell"><span><span
                                                            class="btn btn-bold btn-sm btn-font-sm  btn-warning">Canceled</span></span>
                                                </td>
                                                <td data-field="Type" class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/users/100_9.jpg"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Gerhard
                                                                    Reinhard</a> <span
                                                                    class="user-card-v2__desc">Manager</span>
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="Actions" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="dropdown"> <a data-bs-toggle="dropdown"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <svg class="svg icn-svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                    </g>
                                                                </svg> </a>

                                                            <ul class="dropdown-menu dropdown-menu-anim">
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-expand"></i>
                                                                        <span class="dropdown-menu-text">View</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-contract"></i>
                                                                        <span class="dropdown-menu-text">Edit</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-trash"></i>
                                                                        <span class="dropdown-menu-text">Delete</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-mail-1"></i>
                                                                        <span class="dropdown-menu-text">Export</span>
                                                                    </a> </li>
                                                            </ul>

                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <tr data-row="6" class="datatable__row">
                                                <td class="datatable__cell--center datatable__cell datatable__cell--check"
                                                    data-field="RecordID"><span><label
                                                            class="checkbox checkbox-single checkbox-solid"><input
                                                                type="checkbox"
                                                                value="7">&nbsp;<span></span></label></span>
                                                </td>
                                                <td data-field="ShipName" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/client-logos/logo4.png"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Jenkins
                                                                    Inc</a> <span class="user-card-v2__email">Node,
                                                                    SASS,
                                                                    Webpack</span> </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="ShipDate" class="datatable__cell"><span><span
                                                            class="font-bold">6/28/2016</span></span></td>
                                                <td data-field="Status" class="datatable__cell"><span><span
                                                            class="btn btn-bold btn-sm btn-font-sm  btn-danger">Processing</span></span>
                                                </td>
                                                <td data-field="Type" class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/users/100_10.jpg"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Englebert
                                                                    Shelley</a> <span
                                                                    class="user-card-v2__desc">CEO</span> </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="Actions" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="dropdown"> <a data-bs-toggle="dropdown"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <svg class="svg icn-svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                    </g>
                                                                </svg> </a>

                                                            <ul class="dropdown-menu dropdown-menu-anim">
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-expand"></i>
                                                                        <span class="dropdown-menu-text">View</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-contract"></i>
                                                                        <span class="dropdown-menu-text">Edit</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-trash"></i>
                                                                        <span class="dropdown-menu-text">Delete</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-mail-1"></i>
                                                                        <span class="dropdown-menu-text">Export</span>
                                                                    </a> </li>
                                                            </ul>

                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <tr data-row="7" class="datatable__row datatable__row--even">
                                                <td class="datatable__cell--center datatable__cell datatable__cell--check"
                                                    data-field="RecordID"><span><label
                                                            class="checkbox checkbox-single checkbox-solid"><input
                                                                type="checkbox"
                                                                value="8">&nbsp;<span></span></label></span>
                                                </td>
                                                <td data-field="ShipName" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/client-logos/logo5.png"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Streich
                                                                    LLC</a> <span class="user-card-v2__email">MangoDB,
                                                                    Java</span> </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="ShipDate" class="datatable__cell"><span><span
                                                            class="font-bold">8/5/2016</span></span></td>
                                                <td data-field="Status" class="datatable__cell"><span><span
                                                            class="btn btn-bold btn-sm btn-font-sm  btn-danger">Done</span></span>
                                                </td>
                                                <td data-field="Type" class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/users/100_11.jpg"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Hazlett
                                                                    Kite</a> <span
                                                                    class="user-card-v2__desc">Developer</span>
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="Actions" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="dropdown"> <a data-bs-toggle="dropdown"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <svg class="svg icn-svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                    </g>
                                                                </svg> </a>

                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-expand"></i>
                                                                        <span class="dropdown-menu-text">View</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-contract"></i>
                                                                        <span class="dropdown-menu-text">Edit</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-trash"></i>
                                                                        <span class="dropdown-menu-text">Delete</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-mail-1"></i>
                                                                        <span class="dropdown-menu-text">Export</span>
                                                                    </a> </li>
                                                            </ul>

                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <tr data-row="8" class="datatable__row">
                                                <td class="datatable__cell--center datatable__cell datatable__cell--check"
                                                    data-field="RecordID"><span><label
                                                            class="checkbox checkbox-single checkbox-solid"><input
                                                                type="checkbox"
                                                                value="9">&nbsp;<span></span></label></span>
                                                </td>
                                                <td data-field="ShipName" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/client-logos/logo3.png"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Haley,
                                                                    Schamberger and Durgan</a> <span
                                                                    class="user-card-v2__email">.NET, Oracle,
                                                                    MySQL</span> </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="ShipDate" class="datatable__cell"><span><span
                                                            class="font-bold">3/31/2017</span></span></td>
                                                <td data-field="Status" class="datatable__cell"><span><span
                                                            class="btn btn-bold btn-sm btn-font-sm  btn-danger">Processing</span></span>
                                                </td>
                                                <td data-field="Type" class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/users/100_12.jpg"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Freida
                                                                    Morby</a> <span
                                                                    class="user-card-v2__desc">Developer</span>
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="Actions" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="dropdown"> <a data-bs-toggle="dropdown"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <svg class="svg icn-svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                    </g>
                                                                </svg> </a>

                                                            <ul class="dropdown-menu dropdown-menu-anim">
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-expand"></i>
                                                                        <span class="dropdown-menu-text">View</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-contract"></i>
                                                                        <span class="dropdown-menu-text">Edit</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-trash"></i>
                                                                        <span class="dropdown-menu-text">Delete</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-mail-1"></i>
                                                                        <span class="dropdown-menu-text">Export</span>
                                                                    </a> </li>
                                                            </ul>

                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <tr data-row="9" class="datatable__row datatable__row--even">
                                                <td class="datatable__cell--center datatable__cell datatable__cell--check"
                                                    data-field="RecordID"><span><label
                                                            class="checkbox checkbox-single checkbox-solid"><input
                                                                type="checkbox"
                                                                value="10">&nbsp;<span></span></label></span>
                                                </td>
                                                <td data-field="ShipName" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/client-logos/logo4.png"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Labadie,
                                                                    Predovic and Hammes</a> <span
                                                                    class="user-card-v2__email">Node, SASS,
                                                                    Webpack</span> </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="ShipDate" class="datatable__cell"><span><span
                                                            class="font-bold">1/26/2017</span></span></td>
                                                <td data-field="Status" class="datatable__cell"><span><span
                                                            class="btn btn-bold btn-sm btn-font-sm  btn-brand">Pending</span></span>
                                                </td>
                                                <td data-field="Type" class="datatable__cell"><span>
                                                        <div class="user-card-v2">
                                                            <div class="user-card-v2__pic"> <img alt="photo"
                                                                    src="./media/users/100_10.jpg"> </div>
                                                            <div class="user-card-v2__details"> <a
                                                                    class="user-card-v2__name" href="#">Obed
                                                                    Helian</a> <span
                                                                    class="user-card-v2__desc">Sales</span>
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                <td data-field="Actions" data-autohide-disabled="false"
                                                    class="datatable__cell"><span>
                                                        <div class="dropdown"> <a data-bs-toggle="dropdown"
                                                                class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                                <svg class="svg icn-svg"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor"></rect>
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="currentColor" opacity="0.3"></rect>
                                                                    </g>
                                                                </svg> </a>

                                                            <ul class="dropdown-menu dropdown-menu-anim">
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-expand"></i>
                                                                        <span class="dropdown-menu-text">View</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-contract"></i>
                                                                        <span class="dropdown-menu-text">Edit</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-trash"></i>
                                                                        <span class="dropdown-menu-text">Delete</span>
                                                                    </a> </li>
                                                                <li class="dropdown-menu-item"> <a
                                                                        class="dropdown-menu-link" href="#"> <i
                                                                            class="dropdown-menu-icon flaticon2-mail-1"></i>
                                                                        <span class="dropdown-menu-text">Export</span>
                                                                    </a> </li>
                                                            </ul>

                                                        </div>
                                                    </span></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <!--end: Datatable -->
                            </div>
                            <div class="card-foot">
                                <div class="pagination  pagination--brand">
                                    <ul class="pagination-links">
                                        <li class="pagination-link-first">
                                            <a href="#"><i class="fa fa-angle-double-left"></i></a>
                                        </li>
                                        <li class="pagination-link-next">
                                            <a href="#"><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">29</a>
                                        </li>
                                        <li>
                                            <a href="#">30</a>
                                        </li>
                                        <li class="pagination-link-active">
                                            <a href="#">31</a>
                                        </li>
                                        <li>
                                            <a href="#">32</a>
                                        </li>
                                        <li class="pagination-link-prev">
                                            <a href="#"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                        <li class="pagination-link-last">
                                            <a href="#"><i class="fa fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                    <div class="pagination-toolbar mt-4 mt-md-0">
                                        <select class="form-control font-brand" style="width: 60px;">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <span class="pagination-desc">
                                            Displaying 10 of 230 records
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card card--height-fluid">
                            <div class="card-head">
                                <div class="card-head-label">
                                    <h3 class="card-head-title">
                                        Application Sales
                                    </h3>
                                </div>
                                <div class="card-head-toolbar">
                                    <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab"
                                                href="#widget11_tab1_content" role="tab">
                                                Last Month
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#widget11_tab2_content"
                                                role="tab">
                                                All Time
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-table">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="widget11_tab1_content">
                                        <div class="">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Application</th>
                                                            <th>Sales</th>
                                                            <th>Change</th>
                                                            <th>Status</th>
                                                            <th class="align-right">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <label class="checkbox checkbox-single">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <span class="widget11__title">Vertex 2.0</span>
                                                                <span class="widget11__sub">Vertex To By
                                                                    Again</span>
                                                            </td>
                                                            <td>19,200</td>
                                                            <td>
                                                                <div class="widget11__chart">
                                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1"
                                                                        style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                                </div>
                                                            </td>
                                                            <td><span class="badge badge-danger badge-inline">in
                                                                    process</span></td>
                                                            <td class="align-right font-brand font-bold">$14,740
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="checkbox checkbox-single"><input
                                                                        type="checkbox"><span></span></label>
                                                            </td>
                                                            <td>
                                                                <span class="widget11__title">FATbit</span>
                                                                <span class="widget11__sub">Powerful Admin
                                                                    Theme</span>
                                                            </td>
                                                            <td>24,310</td>
                                                            <td>
                                                                <div class="widget11__chart"> </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-success badge-inline">pending</span>
                                                            </td>
                                                            <td class="align-right font-brand font-bold">$16,010
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="checkbox checkbox-single"><input
                                                                        type="checkbox"><span></span></label>
                                                            </td>
                                                            <td>
                                                                <span class="widget11__title">Apex</span>
                                                                <span class="widget11__sub">The Best Selling
                                                                    App</span>
                                                            </td>
                                                            <td>9,076</td>
                                                            <td>
                                                                <div class="widget11__chart">
                                                                    <canvas id="chart_sales_by_apps_1_3" width="100"
                                                                        height="50"></canvas>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-brand badge-inline">new</span>
                                                            </td>
                                                            <td class="align-right font-brand font-bold">$37,200
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="checkbox checkbox-single"><input
                                                                        type="checkbox"><span></span></label>
                                                            </td>
                                                            <td>
                                                                <span class="widget11__title">Cascades</span>
                                                                <span class="widget11__sub">Design Tool</span>
                                                            </td>
                                                            <td>11,094</td>
                                                            <td>
                                                                <div class="widget11__chart"> </div>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-warning badge-inline">new</span>
                                                            </td>
                                                            <td class="align-right font-brand font-bold">$8,520
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="widget11_tab2_content">
                                        <div class="widget11">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Application</th>
                                                            <th>Sales</th>
                                                            <th>Change</th>
                                                            <th>Status</th>
                                                            <th class="align-right">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <label class="checkbox checkbox-single">
                                                                    <input type="checkbox"><span></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <span class="widget11__title">Loop</span>
                                                                <span class="widget11__sub">CRM System</span>
                                                            </td>
                                                            <td>19,200</td>
                                                            <td>
                                                                <div class="widget11__chart"> </div>
                                                            </td>
                                                            <td><span class="badge badge-danger badge-inline">in
                                                                    process</span></td>
                                                            <td class="align-right font-brand">$34,740</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="checkbox checkbox-single"><input
                                                                        type="checkbox"><span></span></label>
                                                            </td>
                                                            <td>
                                                                <span class="widget11__title">Selto</span>
                                                                <span class="widget11__sub">Powerful Website
                                                                    Builder</span>
                                                            </td>
                                                            <td>24,310</td>
                                                            <td>
                                                                <div class="widget11__chart">
                                                                    <canvas id="chart_sales_by_apps_2_2" height="0"
                                                                        width="0"></canvas>
                                                                </div>
                                                            </td>
                                                            <td><span
                                                                    class="badge badge-success badge-inline">new</span>
                                                            </td>
                                                            <td class="align-right font-brand">$46,010</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="checkbox checkbox-single"><input
                                                                        type="checkbox"><span></span></label>
                                                            </td>
                                                            <td>
                                                                <span class="widget11__title">Jippo</span>
                                                                <span class="widget11__sub">The Best Selling
                                                                    App</span>
                                                            </td>
                                                            <td>9,076</td>
                                                            <td>
                                                                <div class="widget11__chart"> </div>
                                                            </td>
                                                            <td><span
                                                                    class="badge badge-brand badge-inline">approved</span>
                                                            </td>
                                                            <td class="align-right font-brand">$67,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="checkbox checkbox-single"><input
                                                                        type="checkbox"><span></span></label>
                                                            </td>
                                                            <td>
                                                                <span class="widget11__title">Verto</span>
                                                                <span class="widget11__sub">Web Development
                                                                    Tool</span>
                                                            </td>
                                                            <td>11,094</td>
                                                            <td>
                                                                <div class="widget11__chart"> </div>
                                                            </td>
                                                            <td><span
                                                                    class="badge badge-danger badge-inline">pending</span>
                                                            </td>
                                                            <td class="align-right font-brand">$18,520</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="widget11__action align-right">
                                                <button type="button" class="btn btn-outline-brand btn-bold">View All
                                                    Records</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-foot">
                                <button type="button" class="btn btn-outline-brand  ">View All Records</button>
                            </div>

                        </div>
                        <!--end:: Widgets/Application Sales-->
                    </div>
                    <div class="col-xl-6">
                        <!--begin:: Widgets/Latest Updates-->
                        <div class="card card--height-fluid ">
                            <div class="card-head">
                                <div class="card-head-label">
                                    <h3 class="card-head-title">
                                        Latest Updates
                                    </h3>
                                </div>
                                <div class="card-head-toolbar dropdown">
                                    <a href="#" class="btn btn-outline-brand btn-sm dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        Today
                                    </a>


                                    <ul class="dropdown-menu dropdown-menu-anim">
                                        <li class="dropdown-menu-head">
                                            Export Options
                                            <i class="flaticon2-information" data-bs-toggle="tooltip"
                                                data-placement="right" title="Click to learn more..."></i>
                                        </li>
                                        <li class="dropdown-menu-separator"></li>
                                        <li class="dropdown-menu-item">
                                            <a href="#" class="dropdown-menu-link">
                                                <i class="dropdown-menu-icon flaticon2-drop"></i>
                                                <span class="dropdown-menu-text">Activity</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-menu-item">
                                            <a href="#" class="dropdown-menu-link">
                                                <i class="dropdown-menu-icon flaticon2-calendar-8"></i>
                                                <span class="dropdown-menu-text">FAQ</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-menu-item">
                                            <a href="#" class="dropdown-menu-link">
                                                <i class="dropdown-menu-icon flaticon2-link"></i>
                                                <span class="dropdown-menu-text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-menu-item">
                                            <a href="#" class="dropdown-menu-link">
                                                <i class="dropdown-menu-icon flaticon2-new-email"></i>
                                                <span class="dropdown-menu-text">Support</span>
                                                <span class="dropdown-menu-badge">
                                                    <span class="badge badge-success">5</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="dropdown-menu-separator"></li>
                                        <li class="dropdown-menu-foot">
                                            <a class="btn btn-danger btn-bold btn-sm" href="#">Upgrade
                                                plan</a>
                                            <a class="btn btn-clean btn-bold btn-sm" href="#" data-bs-toggle="tooltip"
                                                data-placement="right" title="Click to learn more...">Learn more</a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                            <!--full height card body-->
                            <div class="card-body card-body--fluid card-body--fit">
                                <div class="widget4 widget4--sticky">
                                    <div class="widget4__items card__space-x margin-t-15">
                                        <div class="widget4__item">
                                            <span class="widget4__icon">
                                                <i class="flaticon2-graphic  font-brand"></i>
                                            </span>
                                            <a href="#" class="widget4__title">
                                                FATbit Admin Theme
                                            </a>
                                            <span class="widget4__number font-brand">+500</span>
                                        </div>
                                        <div class="widget4__item">
                                            <span class="widget4__icon">
                                                <i class="flaticon2-analytics-2  font-success"></i>
                                            </span>
                                            <a href="#" class="widget4__title">
                                                Green Maker Team
                                            </a>
                                            <span class="widget4__number font-success">-64</span>
                                        </div>
                                        <div class="widget4__item">
                                            <span class="widget4__icon">
                                                <i class="flaticon2-drop  font-danger"></i>
                                            </span>
                                            <a href="#" class="widget4__title">
                                                Make Apex Great Again
                                            </a>
                                            <span class="widget4__number font-danger">+1080</span>
                                        </div>
                                        <div class="widget4__item">
                                            <span class="widget4__icon">
                                                <i class="flaticon2-pie-chart-4 font-warning"></i>
                                            </span>
                                            <a href="#" class="widget4__title">
                                                A Programming Language
                                            </a>
                                            <span class="widget4__number font-warning">+19</span>
                                        </div>
                                    </div>
                                    <div class="widget4__chart margin-t-15"> </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Latest Updates-->
                    </div>
                </div>
            </div>

        </main>
    </div>
    <script src="js/vendors/chartist.js"></script>
    <script src="js/index-charts.js"></script>
    <?php include 'includes/footer.php'; ?>
</body>

</html>