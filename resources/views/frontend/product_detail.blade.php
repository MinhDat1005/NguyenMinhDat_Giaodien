<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon" /> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('asset/css/style.min.css')}}" rel="stylesheet" />
  </head>

  <body>
    <!-- Topbar Start -->
    <div class="container-fluid">
      <div class="row bg-secondary py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
          <div class="d-inline-flex align-items-center">
            <a class="text-dark" href="">FAQs</a>
            <span class="text-muted px-2">|</span>
            <a class="text-dark" href="">Help</a>
            <span class="text-muted px-2">|</span>
            <a class="text-dark" href="">Support</a>
          </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
          <div class="d-inline-flex align-items-center">
            <a class="text-dark px-2" href="">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="text-dark px-2" href="">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="text-dark px-2" href="">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="text-dark px-2" href="">
              <i class="fab fa-instagram"></i>
            </a>
            <a class="text-dark pl-2" href="">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
          <a href="" class="text-decoration-none">
            <h1 class="m-0 display-5 font-weight-semi-bold">
              <span class="text-primary font-weight-bold border px-3 mr-1"
                >E</span
              >Shopper
            </h1>
          </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
          <form action="">
            <div class="input-group">
              <input
                type="text"
                class="form-control"
                placeholder="Search for products"
              />
              <div class="input-group-append">
                <span class="input-group-text bg-transparent text-primary">
                  <i class="fa fa-search"></i>
                </span>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3 col-6 text-right">
          <a href="" class="btn border">
            <i class="fas fa-heart text-primary"></i>
            <span class="badge">0</span>
          </a>
          <a href="" class="btn border">
            <i class="fas fa-shopping-cart text-primary"></i>
            <span class="badge">0</span>
          </a>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid">
      <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
          <a
            class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
            data-toggle="collapse"
            href="#navbar-vertical"
            style="height: 65px; margin-top: -1px; padding: 0 30px"
          >
            <h6 class="m-0">Categories</h6>
            <i class="fa fa-angle-down text-dark"></i>
          </a>
          <nav
            class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
            id="navbar-vertical"
            style="width: calc(100% - 30px); z-index: 1"
          >
            <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
              <div class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown"
                  >Dresses <i class="fa fa-angle-down float-right mt-1"></i
                ></a>
                <div
                  class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0"
                >
                  <a href="" class="dropdown-item">Men's Dresses</a>
                  <a href="" class="dropdown-item">Women's Dresses</a>
                  <a href="" class="dropdown-item">Baby's Dresses</a>
                </div>
              </div>
              <a href="" class="nav-item nav-link">Shirts</a>
              <a href="" class="nav-item nav-link">Jeans</a>
              <a href="" class="nav-item nav-link">Swimwear</a>
              <a href="" class="nav-item nav-link">Sleepwear</a>
              <a href="" class="nav-item nav-link">Sportswear</a>
              <a href="" class="nav-item nav-link">Jumpsuits</a>
              <a href="" class="nav-item nav-link">Blazers</a>
              <a href="" class="nav-item nav-link">Jackets</a>
              <a href="" class="nav-item nav-link">Shoes</a>
            </div>
          </nav>
        </div>
        <div class="col-lg-9">
          <nav
            class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0"
          >
            <a href="" class="text-decoration-none d-block d-lg-none">
              <h1 class="m-0 display-5 font-weight-semi-bold">
                <span class="text-primary font-weight-bold border px-3 mr-1"
                  >E</span
                >Shopper
              </h1>
            </a>
            <button
              type="button"
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbarCollapse"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-between"
              id="navbarCollapse"
            >
              <div class="navbar-nav mr-auto py-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="shop.html" class="nav-item nav-link">Product</a>
                <a href="detail.html" class="nav-item nav-link active"
                  >Detail</a
                >
                <div class="nav-item dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    >Pages</a
                  >
                  <div class="dropdown-menu rounded-0 m-0">
                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                  </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
              </div>
              <div class="navbar-nav ml-auto py-0">
                <div class="nav-item dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                  >
                    <i class="fas fa-user"></i
                  ></a>
                  <div class="dropdown-menu rounded-0 m-0">
                    <a href="" class="nav-item nav-link"
                      ><i class="fas fa-user-plus"> Register</i></a
                    >
                    <a href="login.html" class="nav-item nav-link"
                      ><i class="fas fa-sign-in-alt"> Login</i></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 300px"
      >
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
        <div class="d-inline-flex">
          <p class="m-0"><a href="">Home</a></p>
          <p class="m-0 px-2">-</p>
          <p class="m-0">Shop Detail</p>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
      <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
          <div
            id="product-carousel"
            class="carousel slide"
            data-ride="carousel"
          >
            <div class="carousel-inner border">
              <div class="carousel-item active">
                <img
                  class="w-100 h-100"
                  src="{{asset('asset/img/product-1.jpg')}}"
                  alt="Image"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="w-100 h-100"
                  src="{{asset('asset/img/product-2.jpg')}}"
                  alt="Image"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="w-100 h-100"
                  src="{{asset('asset/img/product-3.jpg')}}"
                  alt="Image"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="w-100 h-100"
                  src="{{asset('asset/img/product-4.jpg')}}"
                  alt="Image"
                />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#product-carousel"
              data-slide="prev"
            >
              <i class="fa fa-2x fa-angle-left text-dark"></i>
            </a>
            <a
              class="carousel-control-next"
              href="#product-carousel"
              data-slide="next"
            >
              <i class="fa fa-2x fa-angle-right text-dark"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-7 pb-5">
          <h3 class="font-weight-semi-bold">Colorful Stylish Shirt</h3>
          <div class="d-flex mb-3">
            <div class="text-primary mr-2">
              <small class="fas fa-star"></small>
              <small class="fas fa-star"></small>
              <small class="fas fa-star"></small>
              <small class="fas fa-star-half-alt"></small>
              <small class="far fa-star"></small>
            </div>
            <small class="pt-1">(50 Reviews)</small>
          </div>
          <h3 class="font-weight-semi-bold mb-4">$150.00</h3>
          <p class="mb-4">
            Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat
            diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem
            magna lorem ut. Erat lorem duo dolor no sea nonumy. Accus labore
            stet, est lorem sit diam sea et justo, amet at lorem et eirmod ipsum
            diam et rebum kasd rebum.
          </p>
          <div class="d-flex mb-3">
            <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>
            <form>
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  class="custom-control-input"
                  id="size-1"
                  name="size"
                />
                <label class="custom-control-label" for="size-1">XS</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  class="custom-control-input"
                  id="size-2"
                  name="size"
                />
                <label class="custom-control-label" for="size-2">S</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  class="custom-control-input"
                  id="size-3"
                  name="size"
                />
                <label class="custom-control-label" for="size-3">M</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  class="custom-control-input"
                  id="size-4"
                  name="size"
                />
                <label class="custom-control-label" for="size-4">L</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  class="custom-control-input"
                  id="size-5"
                  name="size"
                />
                <label class="custom-control-label" for="size-5">XL</label>
              </div>
            </form>
          </div>
          <div class="d-flex mb-4">
            <p class="text-dark font-weight-medium mb-0 mr-3">Colors:</p>
            <form>
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  class="custom-control-input"
                  id="color-1"
                  name="color"
                />
                <label class="custom-control-label" for="color-1">Black</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  class="custom-control-input"
                  id="color-2"
                  name="color"
                />
                <label class="custom-control-label" for="color-2">White</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  class="custom-control-input"
                  id="color-3"
                  name="color"
                />
                <label class="custom-control-label" for="color-3">Red</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  class="custom-control-input"
                  id="color-4"
                  name="color"
                />
                <label class="custom-control-label" for="color-4">Blue</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input
                  type="radio"
                  class="custom-control-input"
                  id="color-5"
                  name="color"
                />
                <label class="custom-control-label" for="color-5">Green</label>
              </div>
            </form>
          </div>
          <div class="d-flex align-items-center mb-4 pt-2">
            <div class="input-group quantity mr-3" style="width: 130px">
              <div class="input-group-btn">
                <button class="btn btn-primary btn-minus">
                  <i class="fa fa-minus"></i>
                </button>
              </div>
              <input
                type="text"
                class="form-control bg-secondary text-center"
                value="1"
              />
              <div class="input-group-btn">
                <button class="btn btn-primary btn-plus">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <button class="btn btn-primary px-3">
              <i class="fa fa-shopping-cart mr-1"></i> Add To Cart
            </button>
          </div>
          <div class="d-flex pt-2">
            <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
            <div class="d-inline-flex">
              <ul class="example-2">
                <li class="icon-content">
                  <a
                    href="https://www.facebook.com/"
                    aria-label="facebook"
                    data-social="facebook"
                  >
                    <div class="filled"></div>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-facebook"
                      viewBox="0 0 16 16"
                      xml:space="preserve"
                    >
                      <path
                        d="M16 8.002C16 3.581 12.418 0 8 0S0 3.581 0 8.002c0 3.978 2.918 7.278 6.75 7.876V10.37H4.875V8.002H6.75V6.267c0-1.604.954-2.492 2.421-2.492.703 0 1.463.125 1.463.125v1.605h-1.237c-.812 0-1.066.504-1.066 1.019v1.225h2.281l-.362 2.368H8.332V15.88C13.082 15.43 16 12.39 16 8.002z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </a>
                  <div class="tooltip">Facebook</div>
                </li>

                <li class="icon-content">
                  <a
                    href="https://www.instagram.com/"
                    aria-label="Instagram"
                    data-social="instagram"
                  >
                    <div class="filled"></div>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-instagram"
                      viewBox="0 0 16 16"
                      xml:space="preserve"
                    >
                      <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </a>
                  <div class="tooltip">Instagram</div>
                </li>
                <li class="icon-content">
                  <a
                    href="https://youtube.com/"
                    aria-label="Youtube"
                    data-social="youtube"
                  >
                    <div class="filled"></div>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-youtube"
                      viewBox="0 0 16 16"
                      xml:space="preserve"
                    >
                      <path
                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </a>
                  <div class="tooltip">Youtube</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row px-xl-5">
        <div class="col">
          <div
            class="nav nav-tabs justify-content-center border-secondary mb-4"
          >
            <a
              class="nav-item nav-link active"
              data-toggle="tab"
              href="#tab-pane-1"
              >Description</a
            >
            <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2"
              >Information</a
            >
            <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3"
              >Reviews (0)</a
            >
          </div>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-pane-1">
              <h4 class="mb-3">Product Description</h4>
              <p>
                Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea.
                Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero
                diam ea vero et dolore rebum, dolor rebum eirmod consetetur
                invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd
                ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod.
                Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut
                diam consetetur duo justo est, sit sanctus diam tempor aliquyam
                eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at
                sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr
                sanctus eirmod takimata dolor ea invidunt.
              </p>
              <p>
                Dolore magna est eirmod sanctus dolor, amet diam et eirmod et
                ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem
                tempor. Gubergren amet amet labore sadipscing clita clita diam
                clita. Sea amet et sed ipsum lorem elitr et, amet et labore
                voluptua sit rebum. Ea erat sed et diam takimata sed justo.
                Magna takimata justo et amet magna et.
              </p>
            </div>
            <div class="tab-pane fade" id="tab-pane-2">
              <h4 class="mb-3">Additional Information</h4>
              <p>
                Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea.
                Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero
                diam ea vero et dolore rebum, dolor rebum eirmod consetetur
                invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd
                ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod.
                Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut
                diam consetetur duo justo est, sit sanctus diam tempor aliquyam
                eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at
                sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr
                sanctus eirmod takimata dolor ea invidunt.
              </p>
              <div class="row">
                <div class="col-md-6">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                      Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                    </li>
                    <li class="list-group-item px-0">
                      Amet kasd gubergren sit sanctus et lorem eos sadipscing
                      at.
                    </li>
                    <li class="list-group-item px-0">
                      Duo amet accusam eirmod nonumy stet et et stet eirmod.
                    </li>
                    <li class="list-group-item px-0">
                      Takimata ea clita labore amet ipsum erat justo voluptua.
                      Nonumy.
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-0">
                      Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                    </li>
                    <li class="list-group-item px-0">
                      Amet kasd gubergren sit sanctus et lorem eos sadipscing
                      at.
                    </li>
                    <li class="list-group-item px-0">
                      Duo amet accusam eirmod nonumy stet et et stet eirmod.
                    </li>
                    <li class="list-group-item px-0">
                      Takimata ea clita labore amet ipsum erat justo voluptua.
                      Nonumy.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-pane-3">
              <div class="row">
                <div class="col-md-6">
                  <h4 class="mb-4">1 review for "Colorful Stylish Shirt"</h4>
                  <div class="media mb-4">
                    <img
                      src="{{asset('asset/img/user.jpg')}}"
                      alt="Image"
                      class="img-fluid mr-3 mt-1"
                      style="width: 45px"
                    />
                    <div class="media-body">
                      <h6>
                        John Doe<small> - <i>01 Jan 2045</i></small>
                      </h6>
                      <div class="text-primary mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <p>
                        Diam amet duo labore stet elitr ea clita ipsum, tempor
                        labore accusam ipsum et no at. Kasd diam tempor rebum
                        magna dolores sed sed eirmod ipsum.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <h4 class="mb-4">Leave a review</h4>
                  <small
                    >Your email address will not be published. Required fields
                    are marked *</small
                  >
                  <div class="d-flex my-3">
                    <p class="mb-0 mr-2">Your Rating * :</p>
                    <div class="text-primary">
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                  </div>
                  <form>
                    <div class="form-group">
                      <label for="message">Your Review *</label>
                      <textarea
                        id="message"
                        cols="30"
                        rows="5"
                        class="form-control"
                      ></textarea>
                    </div>
                    <div class="form-group">
                      <label for="name">Your Name *</label>
                      <input type="text" class="form-control" id="name" />
                    </div>
                    <div class="form-group">
                      <label for="email">Your Email *</label>
                      <input type="email" class="form-control" id="email" />
                    </div>
                    <div class="form-group mb-0">
                      <input
                        type="submit"
                        value="Leave Your Review"
                        class="btn btn-primary px-3"
                      />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Shop Detail End -->

    <!-- Products Start -->
    <div class="container-fluid py-5">
      <div class="text-center mb-4">
        <h2 class="section-title px-5">
          <span class="px-2">You May Also Like</span>
        </h2>
      </div>
      <div class="row px-xl-5">
        <div class="col">
          <div class="owl-carousel related-carousel">
            <div class="card product-item border-0">
              <div
                class="card-header product-img position-relative overflow-hidden bg-transparent border p-0"
              >
                <img
                  class="img-fluid w-100"
                  src="{{asset('asset/img/product-1.jpg')}}"
                  alt=""
                />
              </div>
              <div
                class="card-body border-left border-right text-center p-0 pt-4 pb-3"
              >
                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                <div class="d-flex justify-content-center">
                  <h6>$123.00</h6>
                  <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                </div>
              </div>
              <div
                class="card-footer d-flex justify-content-between bg-light border"
              >
                <a href="" class="btn btn-sm text-dark p-0"
                  ><i class="fas fa-eye text-primary mr-1"></i>View Detail</a
                >
                <a href="" class="btn btn-sm text-dark p-0"
                  ><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To
                  Cart</a
                >
              </div>
            </div>
            <div class="card product-item border-0">
              <div
                class="card-header product-img position-relative overflow-hidden bg-transparent border p-0"
              >
                <img
                  class="img-fluid w-100"
                  src="{{asset('asset/img/product-2.jpg')}}"
                  alt=""
                />
              </div>
              <div
                class="card-body border-left border-right text-center p-0 pt-4 pb-3"
              >
                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                <div class="d-flex justify-content-center">
                  <h6>$123.00</h6>
                  <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                </div>
              </div>
              <div
                class="card-footer d-flex justify-content-between bg-light border"
              >
                <a href="" class="btn btn-sm text-dark p-0"
                  ><i class="fas fa-eye text-primary mr-1"></i>View Detail</a
                >
                <a href="" class="btn btn-sm text-dark p-0"
                  ><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To
                  Cart</a
                >
              </div>
            </div>
            <div class="card product-item border-0">
              <div
                class="card-header product-img position-relative overflow-hidden bg-transparent border p-0"
              >
                <img
                  class="img-fluid w-100"
                  src="{{asset('asset/img/product-8.jpg')}}"
                  alt=""
                />
              </div>
              <div
                class="card-body border-left border-right text-center p-0 pt-4 pb-3"
              >
                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                <div class="d-flex justify-content-center">
                  <h6>$123.00</h6>
                  <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                </div>
              </div>
              <div
                class="card-footer d-flex justify-content-between bg-light border"
              >
                <a href="" class="btn btn-sm text-dark p-0"
                  ><i class="fas fa-eye text-primary mr-1"></i>View Detail</a
                >
                <a href="" class="btn btn-sm text-dark p-0"
                  ><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To
                  Cart</a
                >
              </div>
            </div>
            <div class="card product-item border-0">
              <div
                class="card-header product-img position-relative overflow-hidden bg-transparent border p-0"
              >
                <img
                  class="img-fluid w-100"
                  src="{{asset('asset/img/product-7.jpg')}}"
                  alt=""
                />
              </div>
              <div
                class="card-body border-left border-right text-center p-0 pt-4 pb-3"
              >
                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                <div class="d-flex justify-content-center">
                  <h6>$123.00</h6>
                  <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                </div>
              </div>
              <div
                class="card-footer d-flex justify-content-between bg-light border"
              >
                <a href="" class="btn btn-sm text-dark p-0"
                  ><i class="fas fa-eye text-primary mr-1"></i>View Detail</a
                >
                <a href="" class="btn btn-sm text-dark p-0"
                  ><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To
                  Cart</a
                >
              </div>
            </div>
            <div class="card product-item border-0">
              <div
                class="card-header product-img position-relative overflow-hidden bg-transparent border p-0"
              >
                <img
                  class="img-fluid w-100"
                  src="{{asset('asset/img/product-8.jpg')}}"
                  alt=""
                />
              </div>
              <div
                class="card-body border-left border-right text-center p-0 pt-4 pb-3"
              >
                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                <div class="d-flex justify-content-center">
                  <h6>$123.00</h6>
                  <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                </div>
              </div>
              <div
                class="card-footer d-flex justify-content-between bg-light border"
              >
                <a href="" class="btn btn-sm text-dark p-0"
                  ><i class="fas fa-eye text-primary mr-1"></i>View Detail</a
                >
                <a href="" class="btn btn-sm text-dark p-0"
                  ><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To
                  Cart</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Products End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
      <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
          <a href="" class="text-decoration-none">
            <h1 class="mb-4 display-5 font-weight-semi-bold">
              <span
                class="text-primary font-weight-bold border border-white px-3 mr-1"
                >E</span
              >Shopper
            </h1>
          </a>
          <p>
            Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no
            sit erat lorem et magna ipsum dolore amet erat.
          </p>
          <p class="mb-2">
            <i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street,
            New York, USA
          </p>
          <p class="mb-2">
            <i class="fa fa-envelope text-primary mr-3"></i>info@example.com
          </p>
          <p class="mb-0">
            <i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890
          </p>
        </div>
        <div class="col-lg-8 col-md-12">
          <div class="row">
            <div class="col-md-4 mb-5">
              <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-dark mb-2" href="index.html"
                  ><i class="fa fa-angle-right mr-2"></i>Home</a
                >
                <a class="text-dark mb-2" href="shop.html"
                  ><i class="fa fa-angle-right mr-2"></i>Our Shop</a
                >
                <a class="text-dark mb-2" href="detail.html"
                  ><i class="fa fa-angle-right mr-2"></i>Shop Detail</a
                >
                <a class="text-dark mb-2" href="cart.html"
                  ><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a
                >
                <a class="text-dark mb-2" href="checkout.html"
                  ><i class="fa fa-angle-right mr-2"></i>Checkout</a
                >
                <a class="text-dark" href="contact.html"
                  ><i class="fa fa-angle-right mr-2"></i>Contact Us</a
                >
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-dark mb-2" href="index.html"
                  ><i class="fa fa-angle-right mr-2"></i>Home</a
                >
                <a class="text-dark mb-2" href="shop.html"
                  ><i class="fa fa-angle-right mr-2"></i>Our Shop</a
                >
                <a class="text-dark mb-2" href="detail.html"
                  ><i class="fa fa-angle-right mr-2"></i>Shop Detail</a
                >
                <a class="text-dark mb-2" href="cart.html"
                  ><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a
                >
                <a class="text-dark mb-2" href="checkout.html"
                  ><i class="fa fa-angle-right mr-2"></i>Checkout</a
                >
                <a class="text-dark" href="contact.html"
                  ><i class="fa fa-angle-right mr-2"></i>Contact Us</a
                >
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
              <form action="">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control border-0 py-4"
                    placeholder="Your Name"
                    required="required"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control border-0 py-4"
                    placeholder="Your Email"
                    required="required"
                  />
                </div>
                <div>
                  <button
                    class="btn btn-primary btn-block border-0 py-3"
                    type="submit"
                  >
                    Subscribe Now
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row border-top border-light mx-xl-5 py-4">
        <div class="col-md-6 px-xl-0">
          <p class="mb-md-0 text-center text-md-left text-dark">
            &copy;
            <a class="text-dark font-weight-semi-bold" href="#"
              >Your Site Name</a
            >. All Rights Reserved.

            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed by
            <a
              class="text-dark font-weight-semi-bold"
              href="https://htmlcodex.com"
              >HTML Codex</a
            >
          </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
          <img class="img-fluid" src="{{asset('asset/img/payments.png')}}" alt="" />
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('asset/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('asset/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('asset/js/main.js')}}"></script>
  </body>
</html>