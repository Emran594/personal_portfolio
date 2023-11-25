@extends('layouts.layout')
@section('content')
        <!--========================
        BREADCRUMB START
    =========================-->
    <section class="breadcrumb">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <h1>my works</h1>
            </div>
          </div>
        </div>
      </section>
      <!--========================
          BREADCRUMB END
      =========================-->
  
      <!--========================
          PORTFOLIO START
      =========================-->
      <section class="portfolio_page pb_120 xs_pb_80">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="details_page_header">
                <h2 class="has-animation">
                  We create resonant brands and digital experiences that amplify
                  your influence to effect change.
                </h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="portfolio_large fade_up">
                <a
                  href="portfolio_details.html"
                  data-cursor="<i class='fa-sharp fa-light fa-arrow-up-right'></i>"
                  class="portfolio_large_img"
                >
                  <img
                    src="images/portfolio_img_7.jpg"
                    alt="portfolio"
                    class="img-fluid w-100" >
                </a>
                <div class="portfolio_large_text">
                  <h2 class="has-animation">MOCKUP <span>Design</span></h2>
                  <p class="has-animation">Portfolio Details - 2023</p>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="portfolio_large fade_up">
                <a
                  href="https://www.youtube.com/watch?v=B-ytMSuwbf8"
                  class="play_btn"
                  data-cursor="<i class='fa-brands fa-youtube'></i>"
                >
                  <img
                    src="images/portfolio_img_11.jpg"
                    alt="portfolio"
                    class="img-fluid w-100" >
                </a>
                <div class="portfolio_large_text">
                  <h2 class="has-animation">Youtube <span>Video</span></h2>
                  <p class="has-animation">Video - 2023</p>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="portfolio_large fade_up">
                <a
                  href="https://vimeo.com/132528823"
                  class="play_btn"
                  data-cursor="<i class='fa-brands fa-vimeo-v'></i>"
                >
                  <img
                    src="images/portfolio_img_9.jpg"
                    alt="portfolio"
                    class="img-fluid w-100" >
                </a>
                <div class="portfolio_large_text">
                  <h2 class="has-animation">Vimeo <span>Video</span></h2>
                  <p class="has-animation">Video - 2023</p>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="portfolio_large fade_up">
                <a
                  href="https://w.soundcloud.com/player/?visual=true&amp;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F159967086&amp;show_artwork=true&amp;maxwidth=1020&amp;maxheight=1000&amp;auto_play=1"
                  class="play_btn"
                  data-cursor='<i class="fa-brands fa-soundcloud"></i>'
                >
                  <img
                    src="images/portfolio_img_10.jpg"
                    alt="portfolio"
                    class="img-fluid w-100" >
                </a>
                <div class="portfolio_large_text">
                  <h2 class="has-animation">soundcloud <span>Audio</span></h2>
                  <p class="has-animation">Audio - 2023</p>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="portfolio_large fade_up">
                <a
                  href="images/portfolio_img_11.jpg"
                  class="image_popup"
                  data-cursor='<i class="fa-sharp fa-regular fa-image"></i>'
                >
                  <img
                    src="images/portfolio_img_11.jpg"
                    alt="portfolio"
                    class="img-fluid w-100" >
                </a>
                <div class="portfolio_large_text">
                  <h2 class="has-animation">Image <span>view</span></h2>
                  <p class="has-animation">Image - 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--========================
          PORTFOLIO END
      =========================-->
@include('components.contact')  
@endsection