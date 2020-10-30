@extends('layouts.app')

@section('content')

    <div class="container white_round shadow-custom shift-up">
        <!-- blog highlight section -->
        <div class="row">
            <div class="col-md-8">
                <h2 class="underlined mb-3">Latest Campus News</h2>
                <p>
                    The Vice-Chancellor of The University of Bamenda announces to the general public that <b>twenty-eight
                        (28) Teaching Positions</b> have been opened at the University within the framework of Numerical
                    Replacement in State Universities in 2020. <br>
                    Find the details and requirements of this call for applications in the press release sections of this
                    website.
                </p>

                {{-- Getting the latest blogs from database --}}
                <div class="row">
                    @if (count($posts) > 0)
                        @foreach ($posts as $post)
                            <div class="col-md-6">
                                <div class="card border-0 rounded-0 mb-3">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="Blog image"
                                        class="card-image-top rounded-0">
                                    <div class="card-body px-0">
                                        <h4 class="font-weight-bold text-dark"><a
                                                href="/blog/{{ $post->id }}">{{ $post->title }}</a>
                                        </h4>
                                        <p class="card-text">{{ $post->subtitle }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- Recent news section -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-light">
                        <h4 class="text-center">Press Releases</h4>
                    </div>
                    <div class="card-body p-0 scroll">
                        <ul class="list-group list-group-flush recent-news">

                            <li class="list-group-item">
                                <a href="{{ asset('documents/numerical-replacement-2020.pdf') }}" target="_blank">Call for
                                    Applications for Teaching Positions at The University of Bamenda Through Numerical
                                    Replacement - 2020</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/COLTECH ADMISION LIST_20070521_0001.pdf') }}"
                                    target="_blank">Post Graduate (Masters & Ph.D) Admission List into the <b>College of
                                        Technology - COLTECH</b> 2019</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/HICM ADMISSION LIST_20070521_0001.pdf') }}"
                                    target="_blank">Post Graduate (Masters & Ph.D) Admission List into the <b>Higher
                                        Institutte of Commerce and Management - HICM</b> 2019</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/HITL ADMISSION LIST_20070521_0001.pdf') }}"
                                    target="_blank">Post Graduate (Masters & Ph.D) Admission List into the <b>Higher
                                        Institutte of Transport and Logistics - HITL</b> 2019</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/FEMS ADMISION LIST_20070521_0001.pdf') }}" target="_blank">Post
                                    Graduate (Masters & Ph.D) Admission List into the <b>Faculty of Economics and Management
                                        Sciences - FEMS</b> 2019</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/FACULTY OF LAW AND OF POLITICAL SCIENCEADMISION LIST_20070521_0001.pdf') }}"
                                    target="_blank">Post Graduate (Masters & Ph.D) Admission List into the <b>Faculty of Law
                                        and Political Science - FLPS</b> 2019</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/FACULTY OF SCIENCE ADMISSION LIST_20070521_0001.pdf') }}"
                                    target="_blank">Post Graduate (Masters & Ph.D) Admission List into the <b>Faculty of
                                        Science - FS</b> 2019</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/FACULTY OF ARTS ADMISION LIST_20070521_0001.pdf') }}"
                                    target="_blank">Post Graduate (Masters & Ph.D) Admission List into the <b>Faculty of
                                        Arts - FA</b> 2019</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/nahpi_emp.pdf') }}" target="_blank"><b>Radio Announcement:</b>
                                    Employment opportunity for part time Instructors of the Higher National Polytechnic
                                    Institute (NAHPI)</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/enset1_results1.pdf') }}" target="_blank"><b>Results</b> for
                                    Competitive Entrance into the <b>1st year of First Cycle of Higher Technical Teachers
                                        Training College - HTTTC</b> for the 2019/2020 Academic Year</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/enset1_results3.pdf') }}" target="_blank"><b>Results</b> for
                                    Competitive Entrance into the <b>3rd year of First Cycle of Higher Technical Teachers
                                        Training College - HTTTC</b> for the 2019/2020 Academic Year</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/enset2_results.pdf') }}" target="_blank"><b>Results</b> for
                                    Competitive Entrance into the <b>1st year of Second Cycle of Higher Technical Teachers
                                        Training College - HTTTC</b> for the 2019/2020 Academic Year</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/results_ens1_2019.pdf') }}" target="_blank"><b>Results</b> for
                                    Competitive Entrance into the <b>1st year of First Cycle of Higher Teachers Training
                                        College - HTTC</b> for the 2019/2020 Academic Year</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/results_ens2_2019.pdf') }}" target="_blank"><b>Results</b> for
                                    Competitive Entrance into the <b>1st year of Second Cycle of Higher Teachers Training
                                        College - HTTC</b> for the 2019/2020 Academic Year</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/nahpi_results_y1.pdf') }}" target="_blank"><b>Results</b> for
                                    Competitive Entrance into the <b>1st Year of Higher National Polytechnic Institute</b>
                                    for the 2019/2020 Academic Year</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/nahpi_results_y3.pdf') }}" target="_blank"><b>Results</b> for
                                    Competitive Entrance into the <b>3rd Year of Higher National Polytechnic Institute</b>
                                    for the 2019/2020 Academic Year</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/coltech_results_2019.pdf') }}" target="_blank"><b>Results</b>
                                    for Competitive Entrance into the <b>College of Technology</b> for the 2019/2020
                                    Academic Year</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/fhs_results_2019.pdf') }}" target="_blank"><b>Results</b> for
                                    Competitive Entrance into the <b>Faculty of Health Sciences</b> for the 2019/2020
                                    Academic Year</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/hicm_private_2019.pdf') }}" target="_blank">Admission of
                                    <b>private candidates</b> into the Higher Institute of Commerce and Management (HICM)
                                    for the 2019/2020 Academic year</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/hitl_results_2019.pdf') }}" target="_blank"><b>Results</b> for
                                    Competitive Entrance into <b>HITL</b> for the 2019/2020 Academic Year</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/hicm_results_2019.pdf') }}" target="_blank"><b>Results</b> for
                                    Competitive Entrance into <b>HICM</b> for the 2019/2020 Academic Year</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/hnd_hpd_2019.pdf') }}" target="_blank">Admissions into the
                                    <b>Higher Nationa Diploma (HND), Higher Professional Diploma (HPD)</b> and <b>Capacité
                                        en Droit</b> 2019</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/solemn_declaration_fetuc_eng.pdf') }}" target="_blank">Solemn
                                    Declaration of the Cameroon Students’ Forum <b>(FETUC)</b> which held at the University
                                    of Yaoundé II – SOA from 25th to 27th June 2019 - <b>ENGLISH</b></a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/solemn_declaration_fetuc_fre.pdf') }}" target="_blank">Solemn
                                    Declaration of the Cameroon Students’ Forum <b>(FETUC)</b> which held at the University
                                    of Yaoundé II – SOA from 25th to 27th June 2019 - <b>FRENCH</b></a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ asset('documents/faculties-1-1-2019.pdf') }}" target="_blank">Admissions into
                                    the various <b>Undergraduate Degree Programmes</b> of all faculties, 2019</a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <!-- <ul class="pagination">
                                                                                                                                                                                                                                                                                                                                                                                                                                                <li class>1</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul> -->
                        <a href="#" class="btn btn-success btn-sm">Load more</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Albums and Photos -->
    <section class="partners container white_round shadow-custom">
        @if (count($albums) > 0)
            <h2 class="underlined mb-3">Albums</h2>
            <hr>
            <div class="row">
                @foreach ($albums as $album)
                    <div class="col-md-4">
                        <a href="/album/{{ $album->id }}" class="">
                            <div class="card mb-3 alb">
                                <img src="{{ url('/storage/' . $album->cover_image) }}" alt="Blog image"
                                    class="card-image-top img-fluid">
                                <div class="card-body">
                                    <p class="text-center text-uppercase">{{ $album->name }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

            <hr>
        @else
            <hr>
        @endif
    </section>

    <!-- Why Choose us & Call to action -->
    <section class="choose-us container white_round shadow-custom py-lg-5 mb-5">
        <!-- Why choose us -->
        <div class="row">
            <div class="col-lg-4 text-center mb-5 mt-4 mt-lg-0 text-lg-left mb-lg-0">
                <h2 class="text-dark font-weight-bold title">Why we are <span class="text-primary">the best.</span></h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, vitae autem at neque sequi ex. Earum
                    corporis maxime ab error?
                </p>
                <a href="/contact" class="btn btn-primary btn-lg py-3 px-5">Get registered</a>
            </div>
            <div class="col-lg-8 why-us mt-4 mt-lg-0">
                <div class="why text-center text-lg-left px-md-1">
                    <img src="{{ asset('icons/graduate.svg') }}" class="img-fluid">
                    <p class="lead font-weight-bold text-primary">Best graduates</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, a!</p>
                </div>
                <div class="why text-center text-lg-left px-md-1">
                    <img src="{{ asset('icons/homework.svg') }}">
                    <p class="lead font-weight-bold text-primary">Recent content</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, a!</p>
                </div>
                <div class="why text-center text-lg-left px-md-1">
                    <img src="{{ asset('icons/planet.svg') }}">
                    <p class="lead font-weight-bold text-primary">Inclusive learning</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, a!</p>
                </div>
                <div class="why text-center text-lg-left px-md-1">
                    <img src="{{ asset('icons/reward.svg') }}">
                    <p class="lead font-weight-bold text-primary">Qualified staff</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, a!</p>
                </div>
                <div class="why text-center text-lg-left px-md-1">
                    <img src="{{ asset('icons/target.svg') }}">
                    <p class="lead font-weight-bold text-primary">Targeted market</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, a!</p>
                </div>
                <div class="why text-center text-lg-left px-md-1">
                    <img src="{{ asset('icons/light-bulb.svg') }}">
                    <p class="lead font-weight-bold text-primary">Creative Freedom</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, a!</p>
                </div>
            </div>
        </div>

        <!-- Call to action -->
        <div class="d-none alert alert-warning" id="contact-alert">
            <p>Fill out an application form right now to secure your chance of being admitted and gain an opprtunity to
                study at the University of Bamenda. Do not hesitate, for a great deal of educational experiences awaits you.
            </p>
            <a href="https://www.ubastudent.online/admission" target="_blank" type="button"
                class="btn btn-success px-4 ml-5">Enroll now</a>
        </div>
    </section>

    <!-- Partners and Affiliates -->
    <section class="partners container white_round shadow-custom">
        <h2 class="title text-dark font-weight-bold text-center my-5">Our Partners &amp <span
                class="text-primary">Affiliates</span></h2>
        <ul class="partner-list list-unstyled d-flex flex-column flex-md-row justify-content-center">
            <li>
                <a href="http://www.uy1.uninet.cm" target="_blank">
                    <img src="{{ asset('images/uylogo.png') }}" alt="partners" class="img-thumbnail img-fluid"><br><br>
                    <h6>THE UNIVERSITY<br>OF<br>YAOUNDE 1</h6>
                </a>
            </li>
            <li>
                <a href="https://www.ubuea.cm" target="_blank">
                    <img src="{{ asset('images/ublogo.jpg') }}" alt="partners" class="img-thumbnail img-fluid"><br><br>
                    <h6>UNIVERSITY<br>OF<br>BUEA</h6>
                </a>
            </li>
            <li>
                <a href="https://www.univ-dschang.org" target="_blank">
                    <img src="{{ asset('images/udslogo.png') }}" alt="partners" class="img-thumbnail img-fluid"><br><br>
                    <h6>UNIVERSITY<br>OF<br>DSCHANG</h6>
                </a>
            </li>
            <li>
                <a href="http://www.univ-maroua.cm/en" target="_blank">
                    <img src="{{ asset('images/umlogo.png') }}" alt="partners" class="img-thumbnail img-fluid"><br><br>
                    <h6>UNIVERSITY<br>OF<br>MAROUA</h6>
                </a>
            </li>
            <li>
                <a href="http://www.univ-douala.cm" target="_blank">
                    <img src="{{ asset('images/udlogo.jpg') }}" alt="partners" class="img-thumbnail img-fluid"><br><br>
                    <h6>UNIVERSITY<br>OF<br>DOUALA</h6>
                </a>
            </li>
            <li>
                <a href="https://www.univ-yaounde2.org" target="_blank">
                    <img src="{{ asset('images/uy2logo.png') }}" alt="partners" class="img-thumbnail img-fluid"><br><br>
                    <h6>UNIVERSITY<br>OF<br>YAOUNDE 2</h6>
                </a>
            </li>
        </ul>

        <!-- Call to action -->
        <div class="d-none alert alert-warning" id="contact-alert">
            <p>The University of Bamenda is always ready to receive and respond to your queries. Contact us in case of any
                inquiry or any worries that may need addressing. Visit us, call us, write us, or e-mail us.</p>
            <a href="/contact" type="button" class="btn btn-success px-4 ml-5">Contact us</a>
        </div>
    </section>
@endsection
