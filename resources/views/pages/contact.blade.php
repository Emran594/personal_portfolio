@extends('layouts.layout')
@section('content')
    <!--========================
        BREADCRUMB START
    =========================-->
    <section class="breadcrumb">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <h1>CONTACT ME</h1>
            </div>
          </div>
        </div>
      </section>
      <!--========================
          BREADCRUMB END
      =========================-->
  
      <!--======================== 
          CONTACT US START
      =========================-->
      <section class="contact_us pb_120 xs_pb_80">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="details_page_header mb-0">
                <h2 class="has-animation">
                  You're launching a business and we can help you make it look
                  pretty.
                </h2>
              </div>
            </div>
          </div>
          <div class="contact_header mt_110 xs_mt_70">
            <ul>
              <li>
                <span>Contact</span>
                <a href="callto:+18008450000">+1 800 845 00 00</a>
              </li>
              <li>
                <span>Email</span>
                <a href="mailto:petrix99@gmail.com">petrix99@gmail.com</a>
              </li>
              <li>
                <span>address</span>
                <p>750 St, Office 1138, San Francisco, CA 94108</p>
              </li>
            </ul>
          </div>
          <div class="contact_form">
            <h3 class="has-animation">
              By all means, send us an email and get in touch.
            </h3>
            <div class="row">
              <div class="col-md-6">
                <input type="text" placeholder="Name" >
              </div>
              <div class="col-md-6">
                <input type="email" placeholder="Email" >
              </div>
              <div class="col-xl-12">
                <textarea rows="7" placeholder="Message"></textarea>
                <button type="submit" class="common_btn">Send Me Quotes</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--========================
          CONTACT US END
      =========================-->
@endsection