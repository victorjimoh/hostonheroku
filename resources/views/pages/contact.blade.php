@extends('layouts.navbar')
@section('contents')
<section class="title-container">
    <div class="container">
        <h3>Lets make something awesome together.</h3>
        <p>Drop us a line, or give an heads up if you intend on visiting us.</p>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                <div class="feature-item text-center">
                        <div class="feature-icon mb-3">
                        <i class="fas fa-question-circle feature-svg"></i>
                        </div>
                        <h4 class="mb-3">Contact Information</h4>
                        <p><i class="fas fa-phone-alt pr-4"></i> 08184781997</p>
                        <p><i class="fas fa-at pr-4"></i> adetob04@gmail.com</p>
                        <a href="#" class="link-for-frequently-asked-questions">Visit Us <i class="fas fa-chevron-right chevron-r "></i></a>
                    </div>

                    <div class="feature-item text-center">
                        <div class="feature-icon mb-3">
                        <i class="fas fa-comments feature-svg"></i>
                        </div>
                      
                        <h4 class="mb-3">FAQs</h4>
                        <p>Search our FAQs for answers to anything you ask.</p>
                        <a href="{{route('faqs')}}" class="link-for-frequently-asked-questions">Visit FAQs <i class="fas fa-chevron-right chevron-r "></i></a>
                    </div>

                    <div class="feature-item text-center">
                        <div class="feature-icon mb-3">
                        <i class="fas fa-comments feature-svg"></i>
                        </div>
                      
                        <h4 class="mb-3">Hello World</h4>
                        <p>Search our FAQs for answers to anything you ask.</p>
                        <a href="{{route('faqs')}}" class="link-for-frequently-asked-questions">Visit FAQs <i class="fas fa-chevron-right chevron-r "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br />
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-6 contact-info border-0 p-5">
                <h2 class="text-center">Tell us about yourself</h2>
                <p class = "text-center color-grey">Whether you have questions or you would just like to say hello, contact us.</p>
                
                <form class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control form-control-for-input" id="firstname" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control form-control-for-input" id="lastname" placeholder="Last Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control form-control-for-input" id="email" placeholder="email@site.com">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Phone Number</label>
                        <input type="number" class="form-control form-control-for-input" id="phonenumber" placeholder="+(xxx)xxxx-xxx-xxx">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Details</label>
                        <textarea class="form-control" id="textarea" rows="3" placeholder="We want to hear from you........."></textarea>
                    </div>
                    <div class="col-12 d-grid">
                        <button type="submit" class="btn btn-primary send-inquiry">Send Inquiry</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection