@extends('layouts/layoutMaster')

@section('title', 'Help Center - Pages')

<!-- Page -->
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-help-center.css')}}" />
@endsection

@section('content')
<div class="card overflow-hidden">
  <!-- Help Center Header -->
  <div class="help-center-header d-flex flex-column justify-content-center align-items-center">
    <h3 class="text-center zindex-1">Hi, how can we help?</h3>
    <div class="input-wrapper my-3 input-group input-group-merge zindex-1">
      <span class="input-group-text" id="basic-addon1"><i class="bx bx-search-alt bx-xs text-muted"></i></span>
      <input type="text" class="form-control form-control-lg" placeholder="Find anything (features, payment or reset password)" aria-label="Search" aria-describedby="basic-addon1" />
    </div>
    <p class="text-center zindex-1 px-3 mb-0">Common troubleshooting topics: eCommerce, Blogging to Payment</p>
  </div>
  <!-- /Help Center Header -->

  <!-- Popular Articles -->
  <div class="help-center-popular-articles py-5">
    <div class="container-xl">
      <h4 class="text-center mt-2 pb-3">Popular Articles</h4>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="row mb-3">
            <div class="col-md-4 mb-md-0 mb-4">
              <div class="card border shadow-none">
                <div class="card-body text-center">
                  <img class="mb-4" src="{{asset('assets/img/icons/unicons/rocket-square.png')}}" height="48" alt="Help center articles">
                  <h5>Getting Started</h5>
                  <p> Whether you're new or you're a power user, this article will… </p>
                  <a class="btn btn-label-primary" href="{{url('pages/help-center-article')}}">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-md-0 mb-4">
              <div class="card border shadow-none">
                <div class="card-body text-center">
                  <img class="mb-4" src="{{asset('assets/img/icons/unicons/cube.png')}}" height="48" alt="Help center articles">
                  <h5>First Steps</h5>
                  <p> Are you a new customer wondering how to get started? </p>
                  <a class="btn btn-label-primary" href="{{url('pages/help-center-article')}}">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border shadow-none">
                <div class="card-body text-center">
                  <img class="mb-4" src="{{asset('assets/img/icons/unicons/desktop.png')}}" height="48" alt="Help center articles">
                  <h5>Add External Content</h5>
                  <p> This article will show you how to expand the functionality of... </p>
                  <a class="btn btn-label-primary" href="{{url('pages/help-center-article')}}">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Popular Articles -->

  <!-- Knowledge Base -->
  <div class="help-center-knowledge-base help-center-bg-alt pt-5 pb-4">
    <div class="container-xl py-2">
      <h4 class="text-center pb-4">Knowledge Base</h4>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <span class="badge bg-label-success p-2 rounded me-2"><i class="bx bx-cart bx-sm"></i></span>
                    <h5 class="fw-semibold mt-3 ms-1">eCommerce</h5>
                  </div>
                  <ul>
                    <li class="text-primary py-1"><a href="{{url('pages/help-center-categories')}}">Pricing Wizard</a></li>
                    <li class="text-primary pb-1"><a href="{{url('pages/help-center-categories')}}">Square Sync</a></li>
                  </ul>
                  <p class="mb-0 fw-semibold">
                    <a href="javascript:void(0);">56 articles</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <span class="badge bg-label-info p-2 rounded me-2"><i class="bx bx-laptop bx-sm"></i></span>
                    <h5 class="fw-semibold mt-3 ms-1">Building Your Website</h5>
                  </div>
                  <ul>
                    <li class="text-primary py-1"><a href="{{url('pages/help-center-categories')}}">First Steps</a></li>
                    <li class="text-primary pb-1"><a href="{{url('pages/help-center-categories')}}">Add Images</a></li>
                  </ul>
                  <p class="mb-0 fw-semibold">
                    <a href="javascript:void(0);">111 articles</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <span class="badge bg-label-primary p-2 rounded me-2"><i class="bx bx-user bx-sm"></i></span>
                    <h5 class="fw-semibold mt-3 ms-1">Your Account</h5>
                  </div>
                  <ul>
                    <li class="text-primary py-1"><a href="{{url('pages/help-center-categories')}}">Insights</a></li>
                    <li class="text-primary pb-1">
                      <a href="{{url('pages/help-center-categories')}}">Manage Your Orders</a>
                    </li>
                  </ul>
                  <p class="mb-0 fw-semibold">
                    <a href="javascript:void(0);">29 articles</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <span class="badge bg-label-danger p-2 rounded me-2"><i class="bx bx-world bx-sm"></i></span>
                    <h5 class="fw-semibold mt-3 ms-1">Domains and Email</h5>
                  </div>
                  <ul>
                    <li class="text-primary py-1">
                      <a href="{{url('pages/help-center-categories')}}">Access to Admin Account</a>
                    </li>
                    <li class="text-primary pb-1">
                      <a href="{{url('pages/help-center-categories')}}">Send Email From an Alias</a>
                    </li>
                  </ul>
                  <p class="mb-0 fw-semibold">
                    <a href="javascript:void(0);">22 articles</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <span class="badge bg-label-warning p-2 rounded me-2"><i class="bx bx-mobile-alt bx-sm"></i></span>
                    <h5 class="fw-semibold mt-3 ms-1">Mobile Apps</h5>
                  </div>
                  <ul>
                    <li class="text-primary py-1">
                      <a href="{{url('pages/help-center-categories')}}">Getting Started with the App</a>
                    </li>
                    <li class="text-primary pb-1">
                      <a href="{{url('pages/help-center-categories')}}">Getting Started with Android</a>
                    </li>
                  </ul>
                  <p class="mb-0 fw-semibold">
                    <a href="javascript:void(0);">24 articles</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-2">
                    <span class="badge bg-label-secondary p-2 rounded me-2"><i class="bx bx-envelope bx-sm"></i></span>
                    <h5 class="fw-semibold mt-3 ms-1">Email Marketing</h5>
                  </div>
                  <ul>
                    <li class="text-primary py-1"><a href="{{url('pages/help-center-categories')}}">Getting Started</a></li>
                    <li class="text-primary pb-1">
                      <a href="{{url('pages/help-center-categories')}}">How does this work?</a>
                    </li>
                  </ul>
                  <p class="mb-0 fw-semibold">
                    <a href="javascript:void(0);">27 articles</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Knowledge Base -->

  <!-- Keep Learning -->
  <div class="help-center-keep-learning py-5">
    <div class="container-xl my-3">
      <h4 class="text-center pb-4">Keep Learning</h4>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="row">
            <div class="col-md-4 mb-md-0 mb-4 text-center">
              <img src="{{asset('assets/img/icons/unicons/chart.png')}}" class="mb-2" height="48" alt="Help center blog">
              <h5 class="my-3">Blogging</h5>
              <p class="mb-1"> Expert tips and tools to improve your website or online store using our blog. </p>
              <a href="{{url('pages/help-center-categories')}}" class="d-flex align-items-center justify-content-center mt-2">
                <span class="align-middle me-1">Learn More</span>
                <i class="bx bx-right-arrow-circle scaleX-n1-rtl"></i>
              </a>
            </div>
            <div class="col-md-4 mb-md-0 mb-4 text-center">
              <img src="{{asset('assets/img/icons/unicons/cc-warning.png')}}" class="mb-2" height="48" alt="Help center inspiration">
              <h5 class="my-3">Inspiration Center</h5>
              <p class="mb-1"> Inspiration from experts to help you start and grow your big ideas. </p>
              <a href="{{url('pages/help-center-categories')}}" class="d-flex align-items-center justify-content-center mt-2">
                <span class="align-middle me-1">Learn More</span>
                <i class="bx bx-right-arrow-circle scaleX-n1-rtl"></i></a>
            </div>
            <div class="col-md-4 text-center">
              <img src="{{asset('assets/img/icons/unicons/community.png')}}" class="mb-2" height="48" alt="Help center inspiration">
              <h5 class="my-3">Community</h5>
              <p class="mb-1"> A group of people living in the same place or having a particular. </p>
              <a href="{{url('pages/help-center-categories')}}" class="d-flex align-items-center justify-content-center mt-2">
                <span class="align-middle me-1">Learn More</span>
                <i class="bx bx-right-arrow-circle scaleX-n1-rtl"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Keep Learning -->

  <!-- Help Area -->
  <div class="help-center-contact-us help-center-bg-alt">
    <div class="container-xl">
      <div class="row justify-content-center py-5 my-3">
        <div class="col-md-8 col-lg-6 text-center">
          <h4>Still need help?</h4>
          <p class="mb-4">Our specialists are always happy to help. Contact us during standard <br>
            business hours or email us 24/7 and we'll get back to you.</p>
          <div class="d-flex justify-content-center flex-wrap gap-4">
            <a href="javascript:void(0);" class="btn btn-label-primary">Visit our community</a>
            <a href="javascript:void(0);" class="btn btn-label-primary">Contact us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Help Area -->
</div>
@endsection
