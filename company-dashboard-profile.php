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
                    <li class="pxp-active"><a href="company-dashboard-profile.php"><span class="fa fa-pencil"></span>Profile</a></li>
                    <li><a href="company-dashboard-new-job.php"><span class="fa fa-file-text-o"></span>New Job Offer</a></li>
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
                <h1>Edit Profile</h1>
                <p class="pxp-text-light">Edit your company profile page info.</p>

                <form>
                    <div class="row mt-4 mt-lg-5">
                        <div class="col-xxl-8">
                            <div class="mb-3">
                                <label for="pxp-company-name" class="form-label">Company name</label>
                                <input type="text" id="pxp-company-name" class="form-control" placeholder="Add company name">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pxp-company-email" class="form-label">Email</label>
                                        <input type="email" id="pxp-company-email" class="form-control" placeholder="company@email.com">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pxp-company-phone" class="form-label">Phone</label>
                                        <input type="tel" id="pxp-company-phone" class="form-control" placeholder="(+12) 345 6789">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="pxp-company-website" class="form-label">Website</label>
                                <input type="url" id="pxp-company-website" class="form-control" placeholder="https:///">
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="form-label">&nbsp;</div>
                            <div class="pxp-company-cover mb-3">
                                <input type="file" id="pxp-company-cover-choose-file" accept="image/*">
                                <label for="pxp-company-cover-choose-file" class="pxp-cover"><span>Upload Cover Image</span></label>
                            </div>
                            <div class="pxp-company-logo mb-3">
                                <input type="file" id="pxp-company-logo-choose-file" accept="image/*">
                                <label for="pxp-company-logo-choose-file" class="pxp-cover"><span>Upload<br>Logo</span></label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="pxp-company-about" class="form-label">About the company</label>
                        <textarea class="form-control" id="pxp-company-about" placeholder="Type your info here..."></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-company-industry" class="form-label">Industry</label>
                                <input type="text" id="pxp-company-industry" class="form-control" placeholder="E.g. Software">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-company-founded" class="form-label">Founded in</label>
                                <input type="text" id="pxp-company-founded" class="form-control" placeholder="E.g. 2001">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-company-size" class="form-label">Company size</label>
                                <select id="pxp-company-size" class="form-select">
                                    <option value="">&lt; 50 employees</option>
                                    <option value="">50 - 100 employees</option>
                                    <option value="">100 - 150 employees</option>
                                    <option value="">150 - 200 employees</option>
                                    <option value="">200 - 250 employees</option>
                                    <option value="">250 - 300 employees</option>
                                    <option value="">&gt; 300 employees</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 mt-lg-5">
                        <h2>Company Location</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pxp-company-country" class="form-label">Country/State</label>
                                    <input type="text" id="pxp-company-country" class="form-control" placeholder="E.g. United States, CA">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pxp-company-city" class="form-label">City</label>
                                    <input type="text" id="pxp-company-city" class="form-control" placeholder="E.g. San Francisco">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="pxp-company-address" class="form-label">Address</label>
                            <input type="text" id="pxp-company-address" class="form-control" placeholder="Type full address here...">
                        </div>
                    </div>

                    <div class="mt-4 mt-lg-5">
                        <h2>Social Media</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pxp-company-facebook" class="form-label">Facebook</label>
                                    <input type="url" id="pxp-company-facebook" class="form-control" placeholder="https:///">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pxp-company-twitter" class="form-label">Twitter</label>
                                    <input type="url" id="pxp-company-twitter" class="form-control" placeholder="https:///">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pxp-company-instagram" class="form-label">Instagram</label>
                                    <input type="url" id="pxp-company-instagram" class="form-control" placeholder="https:///">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pxp-company-linkedin" class="form-label">Linkedin</label>
                                    <input type="url" id="pxp-company-linkedin" class="form-control" placeholder="https:///">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 mt-lg-5">
                        <button class="btn rounded-pill pxp-section-cta">Save Profile</button>
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