<!doctype html>
<html lang="en" class="pxp-root">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&amp;display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">

        <title>aex freight</title>
    </head>
    <body style="background-color: var(--pxpMainColorLight);">
        <div class="pxp-preloader"><span>Loading...</span></div>

        <div class="pxp-dashboard-side-panel d-none d-lg-block">
            <div class="pxp-logo">
                <a href="index.php" class="pxp-animate"><img src="images/logo.png" alt="logo"></a>
            </div>

            <nav class="mt-3 mt-lg-4 d-flex justify-content-between flex-column pb-100">
                <div class="pxp-dashboard-side-label">Admin tools</div>
                <ul class="list-unstyled">
                    <li><a href="company-dashboard-profile.php"><span class="fa fa-pencil"></span>Profile</a></li>
                    <li class="pxp-active"><a href="company-dashboard-new-job.php"><span class="fa fa-file-text-o"></span>New Job Offer</a></li>
                    <li><a href="#"><span class="fa fa-briefcase"></span>settings</a></li>
                    <li><a href="#"><span class="fa fa-user-circle-o"></span>Account and Payment</a></li>
                </ul>
            </nav>
        </div>
        <div class="pxp-dashboard-content">
            <div class="pxp-dashboard-content-header">
                <div class="pxp-nav-trigger navbar pxp-is-dashboard d-lg-none">
                    <a role="button" data-bs-toggle="offcanvas" data-bs-target="#pxpMobileNav" aria-controls="pxpMobileNav">
                        <div class="pxp-line-1"></div>
                        <div class="pxp-line-2"></div>
                        <div class="pxp-line-3"></div>
                    </a>
                    <div class="offcanvas offcanvas-start pxp-nav-mobile-container pxp-is-dashboard" tabindex="-1" id="pxpMobileNav">
                        <div class="offcanvas-header">
                            <div class="pxp-logo">
                                <a href="index-2.php" class="pxp-animate"><span style="color: var(--pxpMainColor)">j</span>obster</a>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <nav class="pxp-nav-mobile">
                                <ul class="navbar-nav justify-content-end flex-grow-1">
                                    <li class="pxp-dropdown-header">Admin tools</li>
                                    <li class="nav-item"><a href="company-dashboard-profile.php"><span class="fa fa-pencil"></span>Profile</a></li>
                                    <li class="nav-item"><a href="company-dashboard-new-job.php"><span class="fa fa-file-text-o"></span>New Job Offer</a></li>
                                    <li class="nav-item"><a href="#"><span class="fa fa-credit-card"></span>settings</a></li>
                                    <li class="nav-item"><a href="#"><span class="fa fa-lock"></span>Account and Payment</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pxp-dashboard-content-details">
                <h1>New Job Offer</h1>
                <p class="pxp-text-light">Add a new job to your company's jobs list.</p>

                <form>
                    <div class="row mt-4 mt-lg-5">
                        <div class="col-xxl-6">
                            <div class="mb-3">
                                <label for="pxp-company-job-title" class="form-label">Job title</label>
                                <input type="text" id="pxp-company-job-title" class="form-control" placeholder="Add title">
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-3">
                            <label for="pxp-company-job-location" class="form-label">Location</label>
                            <input type="text" id="pxp-company-job-location" class="form-control" placeholder="E.g. San Francisco, CA">
                        </div>
                        <div class="col-md-6 col-xxl-3">
                            <div class="mb-3">
                                <label for="pxp-company-job-category" class="form-label">Category</label>
                                <select id="pxp-company-job-category" class="form-select">
                                    <option>Select a category</option>
                                    <option>Marketing & Communication</option>
                                    <option>Software Engineering</option>
                                    <option>Project Management</option>
                                    <option>Finance</option>
                                    <option>Retail</option>
                                    <option>Sales</option>
                                    <option>Manufacturing</option>
                                    <option>IT</option>
                                    <option>Business Development</option>
                                    <option>Human Resources</option>
                                    <option>Customer Service</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="pxp-company-job-description" class="form-label">Job description</label>
                        <textarea class="form-control" id="pxp-company-job-description" placeholder="Type the description here..."></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-xxl-3">
                            <div class="mb-3">
                                <label for="pxp-company-job-experience" class="form-label">Experience</label>
                                <input type="text" id="pxp-company-job-experience" class="form-control" placeholder="E.g. Minimum 3 years">
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-3">
                            <div class="mb-3">
                                <label for="pxp-company-job-level" class="form-label">Career level</label>
                                <select id="pxp-company-job-level" class="form-select">
                                    <option>No Experience</option>
                                    <option>Entry-Level</option>
                                    <option>Mid-Level</option>
                                    <option>Senior-Level</option>
                                    <option>Manager / Executive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-3">
                            <div class="mb-3">
                                <label for="pxp-company-job-type" class="form-label">Employment type</label>
                                <select id="pxp-company-job-type" class="form-select">
                                    <option>Full Time</option>
                                    <option>Part Time</option>
                                    <option>Remote</option>
                                    <option>Internship</option>
                                    <option>Contract</option>
                                    <option>Training</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-3">
                            <div class="mb-3">
                                <label for="pxp-company-job-salary" class="form-label">Salary range</label>
                                <select id="pxp-company-job-salary" class="form-select">
                                    <option>Select range</option>
                                    <option>$700 - $1000</option>
                                    <option>$1000 - $1200</option>
                                    <option>$1200 - $1400</option>
                                    <option>$1500 - $1800</option>
                                    <option>$2000 - $3000</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 mt-lg-5">
                        <button class="btn rounded-pill pxp-section-cta">Publish Job</button>
                        <button class="btn rounded-pill pxp-section-cta-o ms-3">Save Draft</button>
                    </div>
                </form>
            </div>

            <footer>
                <div class="pxp-footer-copyright pxp-text-light">© 2022 aex freight. All Right Reserved.</div>
            </footer>
        </div>

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/nav.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>