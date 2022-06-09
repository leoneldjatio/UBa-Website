@extends('layouts/content')


@section('content')
    <div class="container white_round mt-4 shadow-custom">
        <h1>Contact us</h1>
        <div class="row">
            <div class="col-md-6">
                <h3>&nbsp</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        <i class="material-icons text-primary">home</i>
                        <h5><b>The University of Bamenda</b></h5>
                        P.O.Box 39 Bambili, NW Region - Cameroon
                    </li>
                    <li class="list-group-item">
                        <i class="material-icons text-primary">phone</i>
                        <h5><b>(+237) 233 360 033, &nbsp&nbsp&nbsp&nbsp (+237) 233 366 029</b></h5>
                        Mon - Fri: &nbsp&nbsp 8:00 AM - 3:30 PM
                    </li>
                    <li class="list-group-item">
                        <i class="material-icons text-primary">mail</i>
                        <h5><b>info@uniba-edu.cm</b></h5>
                        Send us your query anytime!
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2 class="text-primary mb-4 font-weight-bold">Quick Inquiry</h2>
                <form action="#" method="">
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Enter your name</label>
                        <input type="text" class="form-control py-3 bg-light" name="name" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="font-weight-bold">Enter your email address</label>
                        <input type="email" class="form-control bg-light" name="email" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="font-weight-bold">Subject of your message</label>
                        <input type="text" class="form-control bg-light" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="font-weight-bold">Type your message</label>
                        <textarea class="form-control bg-light" name="message" placeholder="Message" rows="6"
                            required></textarea>
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary py-3 px-5">
                </form>
            </div>
        </div>
    </div>

    <div class="partners container white_round shadow-custom">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3967.878860183047!2d10.2571228!3d6.0113671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105f3f8068027257%3A0x35cfcde9af5981bc!2sAdvanced+Teachers&#39;+Training+College+Annex+of+Bambili+(ENSAB)!5e0!3m2!1sen!2scm!4v1565099498122!5m2!1sen!2scm"
            width="100%" height="540" frameborder="0" style="border: 1px" allowfullscreen></iframe>
    </div>
@endsection
