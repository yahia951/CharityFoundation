@extends('front.layouts.app')

@section('main_content')
<div class="slider">
    <div class="slide-carousel owl-carousel">
        <div class="item" style="background-image:url(uploads/slide-1.jpg);">
            <div class="bg"></div>
            <div class="text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text-wrapper">
                                <div class="text-content">
                                    <h2>Help the Child <br>in need</h2>
                                    <p>
                                        We should support kids who are having a tough time. It's about being kind and giving a hand to children facing problems like being poor, sick, or in trouble. When we help, we show them that they're not alone and that things can get better. 
                                    </p>
                                    <div class="button-style-1 mt_20">
                                        <a href="">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image:url(uploads/slide-2.jpg);">
            <div class="bg"></div>
            <div class="text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text-wrapper">
                                <div class="text-content">
                                    <h2>Fight for right <br>causes</h2>
                                    <p>
                                        We work hard to support and raise awareness for important issues that need attention and action. Our goal is to make the world a better place by advocating for justice, equality, and positive change. Your support and involvement can help a lot.
                                    </p>
                                    <div class="button-style-1">
                                        <a href="">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="special pt_70 pb_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full-section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left-side">
                                <div class="inner">
                                    <h2>Our Mission</h2>
                                    <h3>What We Do</h3>
                                    <p>
                                        At our charity, we are committed to making a positive impact in the lives of those in need. We provide vital support in areas such as education, healthcare, disaster relief, and addressing hunger and homelessness. We collaborate with local partners and volunteers to directly help individuals and families.
                                    </p>
                                    <p>
                                        We also focus on raising awareness about critical social and environmental issues. Our efforts include campaigns, events, and partnerships with like-minded organizations to promote awareness and advocate for change. Join us in making the world a better place through fundraising, volunteering, or simply spreading the word. Together, we can be a force for good and contribute to a more compassionate and equitable society.
                                    </p>
                                    <div class="button-style-1 mt_20">
                                        <a href="">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-side" style="background-image: url(uploads/about-1.jpg);">
                                <a class="video-button" href="https://www.youtube.com/watch?v=TklWRCSM4SA"><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="cause pt_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Featured Causes</h2>
                    <p>
                        Our organization focuses on providing services to the homeless peoples.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="item pb_70">
                    <div class="photo">
                        <img src="uploads/cause-1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2>
                            <a href="cause.html">Child Support</a>
                        </h2>
                        <div class="short-des">
                            <p>
                                To provide food, shelter, clothing, education and medical assistance to homeless children and their families.
                            </p>
                        </div>
                        <div class="progress mb_10">
                            <div class="progress-bar w-0" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70" style="animation: progressAnimation1 2s linear forwards;"></div>
                            <style>
                                @keyframes progressAnimation1 {from {width: 0;}to {width: 70%;}}
                            </style>
                        </div>
                        <div class="lbl mb_20">
                            <div class="goal">Goal: $4000</div>
                            <div class="raised">Raised: $3500</div>
                        </div>
                        <div class="button-style-2">
                            <a href="cause.html">Donate Now <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item pb_70">
                    <div class="photo">
                        <img src="uploads/cause-2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2>
                            <a href="cause.html">Help to Mothers</a>
                        </h2>
                        <div class="short-des">
                            <p>
                                To help the mothers who are homeless & helpless, we provide them food, shelter & medical assistance.
                            </p>
                        </div>
                        <div class="progress mb_10">
                            <div class="progress-bar w-0" role="progressbar" aria-label="Example with label" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="animation: progressAnimation2 2s linear forwards;"></div>
                            <style>
                                @keyframes progressAnimation2 {from {width: 0;}to {width: 90%;}}
                            </style>
                        </div>
                        <div class="lbl mb_20">
                            <div class="goal">Goal: $5000</div>
                            <div class="raised">Raised: $4500</div>
                        </div>
                        <div class="button-style-2">
                            <a href="cause.html">Donate Now <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item pb_70">
                    <div class="photo">
                        <img src="uploads/cause-3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2>
                            <a href="cause.html">Water for All</a>
                        </h2>
                        <div class="short-des">
                            <p>
                                To provide clean water to the homeless peoples, we have taken a project to provide them clean water.
                            </p>
                        </div>
                        <div class="progress mb_10">
                            <div class="progress-bar w-0" role="progressbar" aria-label="Example with label" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="animation: progressAnimation3 2s linear forwards;"></div>
                            <style>
                                @keyframes progressAnimation3 {from {width: 0;}to {width: 30%;}}
                            </style>
                        </div>
                        <div class="lbl mb_20">
                            <div class="goal">Goal: $3000</div>
                            <div class="raised">Raised: $1000</div>
                        </div>
                        <div class="button-style-2">
                            <a href="cause.html">Donate Now <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="why-choose pt_70" style="background-image: url(uploads/why-choose-bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="inner pb_70">
                    <div class="icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="text">
                        <h2>Become a Volunteer</h2>
                        <p>
                            In order to become a volunteer, you need to fill out the form and send us. We will review your form and contact you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="inner pb_70">
                    <div class="icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="text">
                        <h2>Foundation & Events</h2>
                        <p>
                            We organize many events for fund raising. You can also organize events and help us to raise fund for the poor people.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="inner pb_70">
                    <div class="icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <div class="text">
                        <h2>Make a Donation</h2>
                        <p>
                            You can also donate us. We will use your donation to help the poor people. You can donate us by PayPal or Stripe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="event pt_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Upcoming Events</h2>
                    <p>
                        You can organize events and help us to raise fund for the poor people.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="item pb_70">
                    <div class="photo">
                        <img src="uploads/event-1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2>
                            <a href="event.html">Abled child cancer</a>
                        </h2>
                        <div class="date-time">
                            <i class="fas fa-calendar-alt"></i> 23 Sep 2023, 09:30 AM
                        </div>
                        <div class="short-des">
                            <p>
                                To provide food, shelter, clothing, education and medical assistance to homeless children and their families.
                            </p>
                        </div>
                        <div class="button-style-2">
                            <a href="event.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item pb_70">
                    <div class="photo">
                        <img src="uploads/event-2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2>
                            <a href="event.html">Contribute for Recovery</a>
                        </h2>
                        <div class="date-time">
                            <i class="fas fa-calendar-alt"></i> 23 Sep 2023, 09:30 AM
                        </div>
                        <div class="short-des">
                            <p>
                                To help the mothers who are homeless & helpless, we provide them food, shelter & medical assistance.
                            </p>
                        </div>
                        <div class="button-style-2">
                            <a href="event.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item pb_70">
                    <div class="photo">
                        <img src="uploads/event-3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2>
                            <a href="event.html">Playing For World</a>
                        </h2>
                        <div class="date-time">
                            <i class="fas fa-calendar-alt"></i> 23 Sep 2023, 09:30 AM
                        </div>
                        <div class="short-des">
                            <p>
                                To provide clean water to the homeless peoples, we have taken a project to provide them clean water.
                            </p>
                        </div>
                        <div class="button-style-2">
                            <a href="event.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="testimonial pt_70 pb_70" style="background-image: url(uploads/testimonial-bg.jpg)">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Our Happy Clients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-carousel owl-carousel">
                    <div class="item">
                        <div class="photo">
                            <img src="uploads/t1.jpg" alt="" />
                        </div>
                        <div class="text">
                            <h4>Robert Krol</h4>
                            <p>CEO, ABC Company</p>
                        </div>
                        <div class="description">
                            <p>
                                Volunteering with this charity has been a transformative experience. Their unwavering dedication to helping those in need is truly inspiring. I'm proud to be part of their mission, witnessing the remarkable impact they make. I'm grateful for the opportunity to contribute to their efforts.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo">
                            <img src="uploads/t2.jpg" alt="" />
                        </div>
                        <div class="text">
                            <h4>Sal Harvey</h4>
                            <p>Director, DEF Company</p>
                        </div>
                        <div class="description">
                            <p>
                                As a long-time donor, I'm consistently impressed by this charity's transparency and life-changing impact. They provide real support to those in need, making a meaningful difference in various communities. I'm proud to be a part of their mission and will continue to support their efforts.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="blog pt_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Latest News</h2>
                    <p>
                        Check out the latest news and updates from our blog post
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="item pb_70">
                    <div class="photo">
                        <img src="uploads/blog-1.jpg" alt="" />
                    </div>
                    <div class="text">
                        <h2>
                            <a href="post.html">Partnering to create a strong community</a>
                        </h2>
                        <div class="short-des">
                            <p>
                                In order to create a good community we need to work together. We need to help, support each other and be respectful to each other.
                            </p>
                        </div>
                        <div class="button-style-2 mt_20">
                            <a href="post.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item pb_70">
                    <div class="photo">
                        <img src="uploads/blog-2.jpg" alt="" />
                    </div>
                    <div class="text">
                        <h2>
                            <a href="post.html">Turning your emergency donation into instant aid</a>
                        </h2>
                        <div class="short-des">
                            <p>
                                We are working hard to help the poor people. We are trying to provide them food, shelter, clothing, education and medical assistance.
                            </p>
                        </div>
                        <div class="button-style-2 mt_20">
                            <a href="post.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="item pb_70">
                    <div class="photo">
                        <img src="uploads/blog-3.jpg" alt="" />
                    </div>
                    <div class="text">
                        <h2>
                            <a href="post.html">Charity provides educational boost for children</a>
                        </h2>
                        <div class="short-des">
                            <p>
                                In order boost the education of the children, we are providing them books, pens, pencils, notebooks and other necessary things.
                            </p>
                        </div>
                        <div class="button-style-2 mt_20">
                            <a href="post.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection