@extends('layouts.layout')
@section('content')
<section class="banner">
    <div class="container container_large">
      <div class="row">
        <div class="col-12">
          <div class="banner_img">
            <div class="banner_text">
              <div class="banner_text_top">
                <p>
                  Hello, I’m Emran Sikder, Backend
                  developer Specialized In Laravel based in Bangladesh.
                </p>
              </div>
              <div class="banner_text_center">
                <h1>I Love <span>lara</span>vel</h1>
              </div>
              <div class="banner_text_bottom">
                <div class="text">
                  <a class="scroll" href="#">
                    <i class="pt-icon-down"></i>
                  </a>
                  <span>Scroll Down</span>
                </div>
                <div class="text text_right">
                  <p>
                    Feel Free to send me a message if you want to enhance your
                    recruitment.
                  </p>
                  <ul class="d-flex flex-wrap">
                    <li><a href="https://www.facebook.com/emran.sikder.737">Facebook</a></li>
                    <li><a href="https://www.linkedin.com/in/emran-sikder-3b3697122/">. Linkedin</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="img">
              <img
                src="images/banner_img.png"
                alt="banner"
                class="img-fluid" >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    @include('components.about')
    @include('components.skill')
    @include('components.experience')
    @include('components.award')
@endsection
