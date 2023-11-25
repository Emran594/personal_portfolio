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
        <!--========================
        PORTFOLIO START
    =========================-->
    <section class="portfolio pb_120 xs_pb_80" id="portfolio">
      <div class="section_heading section_heading_2">
        <div class="container-fluid">
          <h2>
            PORTFOLIO<span>PORTFOLIO</span>PORTFOLIO<span>PORTFOLIO</span>
          </h2>
        </div>
      </div>
      <div class="container portfolio_items">
        <div class="row justify-content-between">
          <div class="col-xl-6 col-md-6">
            <a
              href="portfolio_details.html"
              class="portfolio_item mt_120 xs_mt_80 hover_img h-400"
              data-cursor="<i class='fa-sharp fa-light fa-arrow-up-right'></i>"
            >
              <div class="img-box">
                <img
                  src="images/portfolio_img_1.jpg"
                  alt="portfolio"
                  class="img-fluid" ><img
                  src="images/portfolio_img_1.jpg"
                  alt="portfolio"
                  class="img-fluid img"
                  data-speed="0.3" >
              </div>

              <div class="text">
                <span>Details</span>
                <p>UI/UX Design Mockup</p>
              </div>
            </a>
            <a
              href="https://www.youtube.com/watch?v=B-ytMSuwbf8"
              class="portfolio_item mt_120 xs_mt_80 hover_img h-400 play_btn"
              data-cursor="<i class='fa-brands fa-youtube'></i>"
            >
              <div class="img-box">
                <img
                  src="images/portfolio_img_2.jpg"
                  alt="portfolio"
                  class="img-fluid" ><img
                  src="images/portfolio_img_2.jpg"
                  alt="portfolio"
                  class="img-fluid" >
              </div>
              <div class="text">
                <span>Youtube</span>
                <p>Custom design</p>
              </div>
            </a>
            <a
              href="images/portfolio_img_5.jpg"
              class="portfolio_item mt_120 xs_mt_80 hover_img h-600 image_popup"
              data-cursor='<i class="fa-sharp fa-regular fa-image"></i>'
            >
              <div class="img-box">
                <img
                  src="images/portfolio_img_5.jpg"
                  alt="portfolio"
                  class="img-fluid" >
                <img
                  src="images/portfolio_img_5.jpg"
                  alt="portfolio"
                  class="img-fluid img" >
              </div>

              <div class="text">
                <span>Image</span>
                <p>Product Mockup Design</p>
              </div>
            </a>
          </div>

          <div class="col-xl-6 col-md-6">
            <a
              href="https://vimeo.com/132528823"
              class="portfolio_item margin_left mt_120 xs_mt_80 h-600 hover_img play_btn"
              data-cursor="<i class='fa-brands fa-vimeo-v'></i>"
            >
              <div class="img-box">
                <img
                  src="images/portfolio_img_6.jpg"
                  alt="portfolio"
                  class="img-fluid" ><img
                  src="images/portfolio_img_6.jpg"
                  alt="portfolio"
                  class="img-fluid img" >
              </div>

              <div class="text">
                <span>Vimeo</span>
                <p>Box Mockup Design</p>
              </div>
            </a>
            <a
              href="https://w.soundcloud.com/player/?visual=true&amp;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F159967086&amp;show_artwork=true&amp;maxwidth=1020&amp;maxheight=1000&amp;auto_play=1"
              class="portfolio_item margin_left mt_120 xs_mt_80 hover_img h-400 play_btn"
              data-cursor='<i class="fa-brands fa-soundcloud"></i>'
            >
              <div class="img-box">
                <img
                  src="images/portfolio_img_3.jpg"
                  alt="portfolio"
                  class="img-fluid" ><img
                  src="images/portfolio_img_3.jpg"
                  alt="portfolio"
                  class="img-fluid img" >
              </div>

              <div class="text">
                <span>soundcloud</span>
                <p>Design Mockup</p>
              </div>
            </a>
            <a
              href="images/portfolio_img_4.jpg"
              class="portfolio_item margin_left mt_120 xs_mt_80 hover_img h-400 image_popup"
              data-cursor='<i class="fa-sharp fa-regular fa-image"></i>'
            >
              <div class="img-box">
                <img
                  src="images/portfolio_img_4.jpg"
                  alt="portfolio"
                  class="img-fluid" ><img
                  src="images/portfolio_img_4.jpg"
                  alt="portfolio"
                  class="img-fluid img" >
              </div>
              <div class="text">
                <span>Image</span>
                <p>Design Concept</p>
              </div>
            </a>
          </div>

          <div class="col-12 text-center mt_120 xs_mt_80">
            <a class="see_portfolio circle_btn" href="portfolio.html">
              <i class="fa-sharp fa-light fa-arrow-up-right"></i> See All Recent
              Projects</a
            >
          </div>
        </div>
      </div>
    </section>
    <!--========================
        PORTFOLIO END
    =========================-->
        <!--========================
        SERVICES START
    =========================-->
    <section class="services pb_120 xs_pb_80" id="service">
      <div class="section_heading section_heading_2">
        <div class="container-fluid">
          <h2>SERVICES<span>SERVICES</span>SERVICES<span>SERVICES</span></h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="services_text mt_105 xs_mt_65">
              <p class="text-anim">
                We specialize in the design and development of your Webflow,
                Shopify or WordPress powered website. Webhosting support through
                Webflow, WP Engine or equivalent. SEO best practices with a
                focus on page speed optimization. Familiarity with MySQL, PHP,
                JavaScript, Cloudflare, and WooCommerce.
              </p>
              <div class="mt_110 xs_mt_70 service_items">
                <div class="service_item fade_bottom" data-trigerId="service">
                  <h2>Web Development <sup>(01)</sup></h2>
                  <a
                    href="service_details.html"
                    class="image-view"
                    data-img-cursor="<img src='images/portfolio_img_7.jpg' />"
                    ><i class="fas fa-eye"></i
                  ></a>
                </div>
                <div class="service_item fade_bottom" data-trigerId="service">
                  <h2>UI/UX Design <sup>(02)</sup></h2>
                  <a
                    href="service_details.html"
                    class="image-view"
                    data-img-cursor="<img src='images/portfolio_img_11.jpg' />"
                    ><i class="fas fa-eye"></i
                  ></a>
                </div>
                <div class="service_item fade_bottom" data-trigerId="service">
                  <h2>Sound Design <sup>(03)</sup></h2>
                  <a
                    href="service_details.html"
                    class="image-view"
                    data-img-cursor="<img src='images/portfolio_img_9.jpg' />"
                    ><i class="fas fa-eye"></i
                  ></a>
                </div>
                <div class="service_item fade_bottom" data-trigerId="service">
                  <h2>Game Design <sup>(04)</sup></h2>
                  <a
                    href="service_details.html"
                    class="image-view"
                    data-img-cursor="<img src='images/portfolio_img_10.jpg' />"
                    ><i class="fas fa-eye"></i
                  ></a>
                </div>
                <div class="service_item fade_bottom" data-trigerId="service">
                  <h2>Branding Design <sup>(05)</sup></h2>
                  <a
                    href="service_details.html"
                    class="image-view"
                    data-img-cursor="<img src='images/portfolio_img_1.jpg' />"
                    ><i class="fas fa-eye"></i
                  ></a>
                </div>
                <div class="service_item fade_bottom" data-trigerId="service">
                  <h2>Digital Marketing <sup>(06)</sup></h2>
                  <a
                    href="service_details.html"
                    class="image-view"
                    data-img-cursor="<img src='images/portfolio_img_2.jpg' />"
                    ><i class="fas fa-eye"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--========================
        SERVICES END
    =========================-->
        <!--========================
        TESTIMONIAL START
    =========================-->
    <section
      class="testimonial pb_120 xs_pb_80"
      style="background: url(images/golden_bg.jpg)"
    >
      <div class="section_heading section_heading_2">
        <div class="container-fluid">
          <h2>
            testimonial<span>testimonial</span>testimonial<span
              >testimonial</span
            >
          </h2>
        </div>
      </div>
      <div class="container mt_120 xs_mt_80">
        <div class="row">
          <div class="col-xl-11 m-auto">
            <div class="testimonial_bg">
              <div class="row testi_slider">
                <div class="col-12">
                  <div class="testimonial_content">
                    <div class="testimonial_img">
                      <img
                        src="images/testimonial_img.jpg"
                        alt="testimonial"
                        class="img-fluid" >
                    </div>
                    <div class="testimonial_text">
                      <p>
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered some form, by
                        injected humour, or randomised words which slightly
                        believable. If you are going to use a passage
                      </p>
                      <h4>Devid Marko</h4>
                      <span> Web Developer </span>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="testimonial_content">
                    <div class="testimonial_img">
                      <img
                        src="images/testimonial_img.jpg"
                        alt="testimonial"
                        class="img-fluid" >
                    </div>
                    <div class="testimonial_text">
                      <p>
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered some form, by
                        injected humour, or randomised words which slightly
                        believable. If you are going to use a passage
                      </p>
                      <h4>Devid Marko</h4>
                      <span> Web Developer </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt_110 xs_mt_70" id="testimonial_brand">
        <div class="row">
          <div class="col-12">
            <div class="testimonial_brand">
              <p class="text-anim justify-content-center">
                More than 200+ companies trusted us worldwide
              </p>
              <ul>
                <li>
                  <img
                    src="images/brand_logo_1.png"
                    alt="brand"
                    class="img-fluid" >
                </li>
                <li>
                  <img
                    src="images/brand_logo_2.png"
                    alt="brand"
                    class="img-fluid" >
                </li>
                <li>
                  <img
                    src="images/brand_logo_3.png"
                    alt="brand"
                    class="img-fluid" >
                </li>
                <li>
                  <img
                    src="images/brand_logo_4.png"
                    alt="brand"
                    class="img-fluid" >
                </li>
                <li>
                  <img
                    src="images/brand_logo_5.png"
                    alt="brand"
                    class="img-fluid" >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--========================
        TESTIMONIAL END
    =========================-->
        <!--========================
        BLOG START
    =========================-->
    <section class="blog pb_125 xs_pb_85" id="blog">
      <div class="section_heading section_heading_2">
        <div class="container-fluid">
          <h2>Our News<span>Our News</span>Our News<span>Our News</span></h2>
        </div>
      </div>
      <div class="container mt_95 xs_mt_55">
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div class="single_blog fade_left" data-trigerId="blog">
              <h4>August 11, 2023</h4>
              <a class="title" href="blog_details.html"
                >Fresh design ideas & inspiration for 2023</a
              >
              <p>
                Duis aute irure dolor in reprehenderit velit esse cillum dolore
                eu fugiat
              </p>
              <a
                href="blog_details.html"
                data-cursor="<i class='fa-sharp fa-light fa-arrow-up-right'></i>"
                class="img hover_img"
              >
                <div class="img-box">
                  <img
                    src="images/blog_img_1.jpg"
                    alt="blog"
                    class="img-fluid" >
                  <img
                    src="images/blog_img_1.jpg"
                    alt="blog"
                    class="img-fluid" >
                </div>
              </a>
              <a class="read_btn" href="blog_details.html">read more</a>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="single_blog fade_left" data-trigerId="blog">
              <h4>August 11, 2023</h4>
              <a class="title" href="blog_details.html"
                >What are the new trends in web design?</a
              >
              <p>
                Duis aute irure dolor in reprehenderit velit esse cillum dolore
                eu fugiat
              </p>
              <a
                href="blog_details.html"
                data-cursor="<i class='fa-sharp fa-light fa-arrow-up-right'></i>"
                class="img hover_img"
              >
                <div class="img-box">
                  <img
                    src="images/blog_img_2.jpg"
                    alt="blog"
                    class="img-fluid" >
                  <img
                    src="images/blog_img_2.jpg"
                    alt="blog"
                    class="img-fluid" >
                </div>
              </a>
              <a class="read_btn" href="blog_details.html">read more</a>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="single_blog fade_left" data-trigerId="blog">
              <h4>August 11, 2023</h4>
              <a class="title" href="blog_details.html"
                >Fresh design ideas & inspiration for 2023</a
              >
              <p>
                Duis aute irure dolor in reprehenderit velit esse cillum dolore
                eu fugiat
              </p>
              <a
                href="blog_details.html"
                data-cursor="<i class='fa-sharp fa-light fa-arrow-up-right'></i>"
                class="img hover_img"
              >
                <div class="img-box">
                  <img
                    src="images/blog_img_3.jpg"
                    alt="blog"
                    class="img-fluid" >
                  <img
                    src="images/blog_img_3.jpg"
                    alt="blog"
                    class="img-fluid" >
                </div>
              </a>
              <a class="read_btn" href="blog_details.html">read more</a>
            </div>
          </div>
          <div class="col-12 text-center mt_60">
            <a class="common_btn btn_hover" href="blog_details.html"
              >Explore Our Blog</a
            >
          </div>
        </div>
      </div>
    </section>
    <!--========================
        BLOG END
    =========================-->

@include('components.contact')
@endsection
