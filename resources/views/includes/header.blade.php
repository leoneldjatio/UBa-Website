<div class="container py-5">
    <div
        class="top-banner d-flex flex-column flex-md-row text-center text-md-left justify-content-between align-items-center">
        <div class="logo ml-0 pl-0">
            <img class="img-fluid" src="{{ asset('images/ubalogo.png') }}">
            <h2 class="text-center d-none d-lg-block">
                The University of Bamenda<br>
                <hr><span class="slogan">The University of the Future</span>
            </h2>
        </div>

        <div class="nav-alt">
            <ul class="list-unstyled d-flex justify-content-end">
                <li><a href="https://uniba-edu.cm:2096/" target="_blank" class="mr-3">webmail</a></li>
                <li><a href="{{ asset('documents/Convocation-2019.pdf') }}" class="mr-3">alumni</a></li>
                <li><a href="#" class="mr-3">library</a></li>
                <li><a href="#" class="mr-3">consult</a></li>
                <li><a href="/admin" class="mr-3">admin</a></li>
            </ul>
            <form action="#" class="form-inline">
                <div class="input-group">
                    <input type="search" name="search" placeholder="Search this site..." class="form-control">
                    <div class="input-group-append">
                        <input type="submit" value="Search" class="btn btn-primary input-group-text">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<nav id="navbar" class="py-4">
    <div class="container" role="navigation">
        <ul class="nav nav-pills ml-0 d-flex flex-column flex-md-row">
            <li class="nav-item">
                <a class="nav-link {{ Config::get('app.page') === '/' ? 'active' : '' }} px-4" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Config::get('app.page') === 'about' ? 'active' : '' }}" href="/about">About us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Schools & Faculties
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">College of Technology</a>
                    <a class="dropdown-item" href="#">Faculty of Arts</a>
                    <a class="dropdown-item" href="#">Faculty of Economics and Management Sciences</a>
                    <a class="dropdown-item" href="#">Faculty of Education</a>
                    <a class="dropdown-item" href="#">Faculty of Health Sciences</a>
                    <a class="dropdown-item" href="#">Faculty of Law and Political Science</a>
                    <a class="dropdown-item" href="#">Faculty of Science</a>
                    <a class="dropdown-item" href="#">Higher Institute of Commerce and Management</a>
                    <a class="dropdown-item" href="#">Higher Institute of Transport and Logistics</a>
                    <a class="dropdown-item" href="http://httcbambili.net/" target="_blank">Higher Teacher Training
                        College </a>
                    <a class="dropdown-item" href="htttcuniba-edu.cm" target="_blank">Higher Technical Teacher Training
                        College</a>
                    <a class="dropdown-item" href="#">HND/HPD/B.TECH ACADEMIC ORGAN</a>
                    <a class="dropdown-item" href="https://nahpi.cm" target="_blank">National Higher Polytechnic
                        Institute</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Admissions
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="https://www.ubastudent.online/admission" target="_blank">Apply for
                        Admission</a>
                    <a class="dropdown-item" href="https://www.ubastudent.online/find_me" target="_blank">Check
                        Admission List</a>
                    <a class="dropdown-item"
                        href="{{ asset('documents/Fresh-students-fee-payment-procedure-UBa-2019.pdf') }}"
                        target="_blank">Online registration Procedure - FRESHMEN</a>
                    <a class="dropdown-item"
                        href="{{ asset('documents/Returning-students-fee-payment-procedure-UBa-2019.pdf') }}"
                        target="_blank">Online Registration Procedure - Returning Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Config::get('app.page') === 'blog' ? 'active' : '' }}" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.ubastudent.online" target="_blank">UBa Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Config::get('app.page') === 'contact' ? 'active' : '' }}" href="/contact">Contact
                    us</a>
            </li>
        </ul>
    </div>
</nav>
