@extends('layouts.layout')

@section('content')
    <!--========================
        BREADCRUMB START
    =========================-->
    <section class="breadcrumb">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <h1>about me</h1>
            </div>
          </div>
        </div>
      </section>
      <!--========================
          BREADCRUMB END
      =========================-->
      @include('components.about')
      @include('components.skill')
      @include('components.award')
      @include('components.experience')
      @include('components.contact')

    
@endsection