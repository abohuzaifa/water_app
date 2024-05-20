<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr' }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Labeey</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/icon.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        
        <h1><a href="index.html"><img src="<?= asset("img/icon.png") ?>" alt="" style="{{session('lang_local') == 'en' ? 'margin-right: 10px;' : 'margin-left: 10px;'}}"><span>{{trans('lang.labeey')}}</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">{{trans('lang.home')}}</a></li>
          <li><a class="nav-link scrollto" href="#about">{{trans('lang.about')}}</a></li>
          <!-- <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li> -->
          <li><a class="nav-link scrollto" href="#terms_and_conditions">{{trans('lang.terms_and_conditions')}}</a></li>
          <li><a class="nav-link scrollto" href="#privacy_policy">{{trans('lang.privacy_policy')}}</a></li>
          <li><a class="nav-link scrollto" href="#contact">{{trans('lang.contact')}}</a></li>
          <li class="dropdown"><a href="#"><span>{{trans('lang.language')}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('lang/en') }}">English</a></li>
              <li><a href="{{ url('lang/ar') }}">العربية</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>{{trans('lang.build_your_ecom_shop_with')}} <span>{{trans('lang.labeey')}}</span></h1>
            <h2>{{trans('lang.we_are_offering_best_deals_and_discounts')}}</h2>
            <div class="text-center text-lg-start">
              <a href="#contact" class="btn-get-started scrollto">{{trans('lang.get_started')}}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{asset('img/slider2.PNG')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <!-- <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a>
          </div> -->

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Iure at voluptas aspernatur dignissimos doloribus repudiandae.</li>
              <li><i class="bi bi-check"></i> Est ipsa assumenda id facilis nesciunt placeat sed doloribus praesentium.</li>
            </ul>
            <p>
              Voluptas nisi in quia excepturi nihil voluptas nam et ut. Expedita omnis eum consequatur non. Sed in asperiores aut repellendus. Error quisquam ab maiores. Quibusdam sit in officia
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <p>
              Inventore id enim dolor dicta qui et magni molestiae. Mollitia optio officia illum ut cupiditate eos autem. Soluta dolorum repellendus repellat amet autem rerum illum in. Quibusdam occaecati est nisi esse. Saepe aut dignissimos distinctio id enim.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
            <p>
              Qui consequatur temporibus. Enim et corporis sit sunt harum praesentium suscipit ut voluptatem. Et nihil magni debitis consequatur est.
            </p>
            <p>
              Suscipit enim et. Ut optio esse quidem quam reiciendis esse odit excepturi. Vel dolores rerum soluta explicabo vel fugiat eum non.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Et praesentium laboriosam architecto nam .</li>
              <li><i class="bi bi-check"></i> Eius et voluptate. Enim earum tempore aliquid. Nobis et sunt consequatur. Aut repellat in numquam velit quo dignissimos et.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Details Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>{{trans('lang.contact')}}</h2>
          <p>{{trans('lang.contact_us')}}</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>{{trans('lang.location')}}:</h4>
                <p>Madinah, KSA</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>{{trans('lang.email')}}:</h4>
                <p>labeey17@gmail.com </p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>{{trans('lang.call')}}:</h4>
                <p>+966 54 499 9041</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            {!! Form::open(array('route' => 'contact.store','method'=>'POST')) !!}
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="{{trans('lang.your_name')}}" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="{{trans('lang.your_email')}}" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="{{trans('lang.subject')}}" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="{{trans('lang.message')}}" required></textarea>
              </div>
              @if ($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{ $message }}</p>
              </div>
              @endif
              <div class="text-center"><button type="submit">{{trans('lang.send_message')}}</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Privacy Section ======= -->
    <section id="privacy_policy" class="faq section-bg {{ app()->isLocale('ar') ? 'd-none' : '' }}">
      <div class="container-fluid">

        <div class="row" style="padding: 10px; margin-left:10px;">
          <h1>Privacy policy</h1>
            <p>costumers ACCESSING, BROWSING OR OTHERWISE USING THE WEBSITE eShop.com, Missed Call Service or mobile application INDICATES user is in AGREEMENT with eShop vegetables & fruits Pvt Ltd for ALL THE TERMS AND CONDITIONS MENTIONED henceforth. User is requested to READ terms and conditions CAREFULLY BEFORE PROCEEDING FURTHER.</p>
            <p>User is the person, group of person, company, trust, society, legal entity, legal personality or anyone who visits website, mobile app or gives missed call or places order with eShop via phone or website or mobile application or browse through website www.eShop.com.</p>
            <p>eShop reserves the right to add, alter, change, modify or delete any of these terms and conditions at any time without prior information. The altered terms and conditions becomes binding on the user since the moment same are unloaded on the website www.eShop.com</p>

            <p>eShop is in trade of fresh fruits and vegetables and delivers the order to home (user’s desired address) directly.</p>

            <p>That any user who gives missed call/call for order on any number published/used by eShop.com, consents to receive, accept calls and messages or any after communication from eShop vegetables & fruits Pvt Ltd for Promotion and Telemarketing Purposes within a week.</p>

            <p>If a customer do not wish to receive any communication from eShop, please SMS NO OFFERS to 9512512125.</p>

            <p>eShop accept orders on all seven days and user will receive the delivery next day from date of order placement, as we at eShop procure the fresh produce from the procurement center and deliver it straight to user.</p>

            <p>There is Minimum Order value of Rs. 200. There are no delivery charges on an order worth Rs. 200 or above. In special cases, if permitted, order value is less then Rs. 200/– , Rs. 40 as shipping charges shall be charged from user.</p>

            <p>eShop updates the prices on daily basis and the price displayed at our website www.eShop.com, at the time of placement of order by user he/she/it will be charged as per the price listed at the website www.eShop.com.</p>

            <p>In the event, though there are remote possibilities, of wrong invoice generation due to any reason, in case it happens eShop vegetables & fruits Pvt Ltd reserve its right to again raise the correct invoice at the revised amount and same shall be paid by user.</p>

            <p>At times it is difficult to weigh certain vegetables or fruits exactly as per the order or desired quantity of user, hence the delivery might be with five percent variation on both higher or lower side of exact ordered quantity, user are hereby under takes to pay to eShop vegetables & fruits Pvt Ltd as per the final invoice. We at eShop understands and our endeavor is to always deliver in exact quantity in consonance with quantity ordered but every time it’s not possible but eShop guarantee the fair deal and weight to all its users. eShop further assures its users that at no instance delivery weights/quantity vary dramatically from what quantity ordered by user.</p>

            <p>If some product is not available or is not of good quality, the same item will not be delivered and will be adjusted accordingly in the invoice; all rights in this regards are reserved with eShop. Images of Fruits & Vegetables present in the website are for demonstration purpose and may not resemble exactly in size, colour, weight, contrast etc; though we assure our best to maintain the best quality in product, which is being our foremost commitment to the customer.</p>

            <p>All orders placed before 11 PM in the Night will be delivered next day or as per delivery date chosen.</p>
        </div>

      </div>
    </section>
    <section id="privacy_policy" class="faq section-bg {{ app()->isLocale('ar') ? '' : 'd-none' }}">
      <div class="container-fluid">

        <div class="row" style="padding: 10px; margin-left:10px;">
          <h1>{{trans('lang.privacy_policy')}}</h1>
            <p>الوصول إلى موقع الويب eShop.com أو خدمة المكالمات الفائتة أو تطبيق الهاتف المحمول أو تصفحه أو استخدامه بطريقة أخرى يشير إلى أن المستخدم موافق على موافقة شركة eShop Greens & Fruits Pvt Ltd على جميع الشروط والأحكام المذكورة من الآن فصاعدًا. يُطلب من المستخدم قراءة الشروط والأحكام بعناية قبل المتابعة.</p>
            <p>المستخدم هو الشخص أو مجموعة الأشخاص أو الشركة أو الثقة أو المجتمع أو الكيان القانوني أو الشخصية القانونية أو أي شخص يزور موقع الويب أو تطبيق الهاتف المحمول أو يعطي مكالمة لم يرد عليها أو يقدم طلبًا مع eShop عبر الهاتف أو موقع الويب أو تطبيق الهاتف المحمول أو يتصفح موقع الويب www. eShop.com.</p>
            <p>يحتفظ eShop بالحق في إضافة أو تغيير أو تغيير أو تعديل أو حذف أي من هذه الشروط والأحكام في أي وقت دون معلومات مسبقة. تصبح الشروط والأحكام المعدلة ملزمة للمستخدم منذ لحظة تحميلها على الموقع الإلكتروني www.eShop.com</p>

            <p>يقوم متجر eShop بتجارة الفواكه والخضروات الطازجة ويقوم بتوصيل الطلب إلى المنزل (العنوان المطلوب للمستخدم) مباشرةً.</p>

            <p>أن أي مستخدم يقوم بإجراء مكالمة لم يتم الرد عليها/مكالمة لطلب على أي رقم منشور/مستخدم بواسطة eShop.com، يوافق على تلقي وقبول المكالمات والرسائل أو أي اتصال بعد ذلك من eShop Greens & Fruits Pvt Ltd لأغراض الترويج والتسويق عبر الهاتف في غضون أسبوع.</p>

            <p>إذا كان العميل لا يرغب في تلقي أي اتصالات من eShop، يرجى إرسال رسالة نصية قصيرة بعدم وجود عروض إلى الرقم 9512512125.</p>

            <p>يقبل eShop الطلبات طوال الأيام السبعة وسيتلقى المستخدم التسليم في اليوم التالي من تاريخ تقديم الطلب، حيث أننا في eShop نشتري المنتجات الطازجة من مركز المشتريات ونسلمها مباشرة إلى المستخدم.</p>

            <p>هناك حد أدنى لقيمة الطلب روبية. 200. لا توجد رسوم توصيل لطلب بقيمة روبية. 200 أو أعلى. في حالات خاصة، إذا كان مسموحًا بذلك، تكون قيمة الطلب أقل من Rs. 200 / - روبية. 40 كما سيتم فرض رسوم الشحن من المستخدم.</p>

            <p>يقوم eShop بتحديث الأسعار على أساس يومي والسعر المعروض على موقعنا الإلكتروني www.eShop.com، في وقت تقديم الطلب من قبل المستخدم، سيتم محاسبته وفقًا للسعر المدرج على الموقع الإلكتروني www.eShop.com .</p>

            <p>في حالة، على الرغم من وجود احتمالات بعيدة، لإنشاء فاتورة خاطئة لأي سبب من الأسباب، في حالة حدوث ذلك، تحتفظ شركة eShop للخضراوات والفواكه Pvt Ltd بحقها في رفع الفاتورة الصحيحة مرة أخرى بالمبلغ المعدل ويجب على المستخدم دفع نفس المبلغ.</p>

            <p>في بعض الأحيان، يكون من الصعب وزن بعض الخضروات أو الفواكه تمامًا حسب الطلب أو الكمية المطلوبة من المستخدم، ومن ثم قد يتم التسليم مع اختلاف بنسبة خمسة بالمائة على كلا الجانبين الأعلى أو الأدنى من الكمية المطلوبة بالضبط، بموجب هذا، يتحمل المستخدم مسؤولية الدفع متجر eShop للخضروات والفواكه المحدودة حسب الفاتورة النهائية. نحن في eShop نتفهم ذلك وسعينا هو تقديم الكمية المحددة دائمًا بما يتوافق مع الكمية المطلوبة ولكن في كل مرة لا يكون ذلك ممكنًا، لكن eShop يضمن الصفقة العادلة والوزن لجميع مستخدميه. ويؤكد eShop لمستخدميه أيضًا أن أوزان/كمية التسليم لا تختلف بأي حال من الأحوال بشكل كبير عن الكمية التي طلبها المستخدم.</p>

            <p>إذا لم يكن بعض المنتجات متوفرًا أو لم يكن ذو نوعية جيدة، فلن يتم تسليم نفس المنتج وسيتم تعديله وفقًا لذلك في الفاتورة؛ جميع الحقوق في هذا الصدد محفوظة لدى eShop. صور الفواكه والخضروات الموجودة في الموقع هي لأغراض توضيحية وقد لا تتطابق تمامًا من حيث الحجم واللون والوزن والتباين وما إلى ذلك؛ على الرغم من أننا نؤكد أننا نبذل قصارى جهدنا للحفاظ على أفضل جودة للمنتج، وهو التزامنا الأول تجاه العميل.</p>

            <p>سيتم تسليم جميع الطلبات المقدمة قبل الساعة 11 مساءً ليلاً في اليوم التالي أو حسب تاريخ التسليم المختار.</p>
        </div>

      </div>
    </section>
    <!-- End Privacy Section -->

    <!-- ======= Privacy Section ======= -->
    <section id="terms_and_conditions" class="contact {{ app()->isLocale('ar') ? 'd-none' : '' }}">
      <div class="container-fluid">

        <div class="row" style="padding: 10px; margin-left:10px;">
          <h1>Terms & Conditions</h1>
            <p>costumers eshop.com is a sole proprietary firm , Juridical rights of eshop.com are reserved with eshop</p>

            <p>Personal Information eshop.com and the website eshop.com (”The Site”) . respects your privacy. This Privacy Policy succinctly provides the manner your data is collected and used by eshop.com. on the Site. As a visitor to the Site/ Customer you are advised to please read the Privacy Policy carefully.</p>



            <p>Services Overview As part of the registration process on the Site, eshop.com may collect the following personally identifiable information about you: Name including first and last name, alternate email address, mobile phone number and contact details, Postal code, GPS location, Demographic profile (like your age, gender, occupation, education, address etc.) and information about the pages on the site you visit/access, the links you click on the site, the number of times you access the page and any such browsing information.</p>



            <p>Eligibility Services of the Site would be available to only select geographies in India. Persons who are "incompetent to contract" within the meaning of the Indian Contract Act, 1872 including un-discharged insolvents etc. are not eligible to use the Site. If you are a minor i.e. under the age of 18 years but at least 13 years of age you may use the Site only under the supervision of a parent or legal guardian who agrees to be bound by these Terms of Use. If your age is below 18 years, your parents or legal guardians can transact on behalf of you if they are registered users. You are prohibited from purchasing any material which is for adult consumption and the sale of which to minors is prohibited.</p>



            <p>License & Site Access eshop.com grants you a limited sub-license to access and make personal use of this site and not to download (other than page caching) or modify it, or any portion of it, except with express written consent of eshop.com. This license does not include any resale or commercial use of this site or its contents; any collection and use of any product listings, descriptions, or prices; any derivative use of this site or its contents; any downloading or copying of account information for the benefit of another merchant; or any use of data mining, robots, or similar data gathering and extraction tools. This site or any portion of this site may not be reproduced, duplicated, copied, sold, resold, visited or otherwise exploited for any commercial purpose without express written consent of eshop.com. You may not frame or utilize framing techniques to enclose any trademark, logo, or other proprietary information (including images, text, page layout, or form) of the Site or of eshop.com and its affiliates without express written consent. You may not use any meta tags or any other "hidden text" utilizing the Site’s or eshop.com’s name or eshop.com’s name or trademarks without the express written consent of eshop.com. Any unauthorized use, terminates the permission or license granted by eshop.com</p>



            <p>Account & Registration Obligations All shoppers have to register and login for placing orders on the Site. You have to keep your account and registration details current and correct for communications related to your purchases from the site. By agreeing to the terms and conditions, the shopper agrees to receive promotional communication and newsletters upon registration. The customer can opt out either by unsubscribing in "My Account" or by contacting the customer service.</p>



            <p>Pricing All the products listed on the Site will be sold at MRP unless otherwise specified. The prices mentioned at the time of ordering will be the prices charged on the date of the delivery. Although prices of most of the products do not fluctuate on a daily basis but some of the commodities and fresh food prices do change on a daily basis. In case the prices are higher or lower on the date of delivery not additional charges will be collected or refunded as the case may be at the time of the delivery of the order.</p>



            <p>Cancellation by Site / Customer You as a customer can cancel your order anytime up to the cut-off time of the slot for which you have placed an order by calling our customer service. In such a case we will Credit your wallet against any payments already made by you for the order. If we suspect any fraudulent transaction by any customer or any transaction which defies the terms & conditions of using the website, we at our sole discretion could cancel such orders. We will maintain a negative list of all fraudulent transactions and customers and would deny access to them or cancel any orders placed by them.</p>



            <p>Return & Refunds We have a "no questions asked return policy" which entitles all our Delivery Ambassadors to return the product at the time of delivery if due to any reason they are not satisfied with the quality or freshness of the product. We will take the returned product back with us and issue a credit note for the value of the return products which will be credited to your account on the Site. This can be used to pay your subsequent shopping bills. Refund will be processed through same online mode within 7 working days.</p>





            <p>Delivery & Shipping Charge</p>



            <p>1.You can expect to receive your order depending on the delivery option you have chosen.</p>



            <p>2.You can order 24*7 in website & mobile application , Our delivery timeings are between 06:00 AM - 02:00PM Same day delivery.</p>



            <p>3.You will get free shipping on order amount above Rs.150.</p>

            <p>You Agree and Confirm</p>

            <p>1. That in the event that a non-delivery occurs on account of a mistake by you (i.e. wrong name or address or any other wrong information) any extra cost incurred by eshop. for redelivery shall be claimed from you.</p>

            <p>2. That you will use the services provided by the Site, its affiliates, consultants and contracted companies, for lawful purposes only and comply with all applicable laws and regulations while using and transacting on the Site.</p>

            <p>3. You will provide authentic and true information in all instances where such information is requested you. eshop reserves the right to confirm and validate the information and other details provided by you at any point of time. If upon confirmation your details are found not to be true (wholly or partly), it has the right in its sole discretion to reject the registration and debar you from using the Services and / or other affiliated websites without prior intimation whatsoever.</p>

            <p>4. That you are accessing the services available on this Site and transacting at your sole risk and are using your best and prudent judgment before entering into any transaction through this Site.</p>

            <p>5. That the address at which delivery of the product ordered by you is to be made will be correct and proper in all respects.</p>

            <p>6. That before placing an order you will check the product description carefully. By placing an order for a product you agree to be bound by the conditions of sale included in the item's description.</p>



            <p>You may not use the Site for any of the following purposes:</p>

              <p>1. Disseminating any unlawful, harassing, libelous, abusive, threatening, harmful, vulgar, obscene, or otherwise objectionable material.</p>

              <p>2. Transmitting material that encourages conduct that constitutes a criminal offence or results in civil liability or otherwise breaches any relevant laws, regulations or code of practice.</p>

              <p>3. Gaining unauthorized access to other computer systems.</p>

              <p>4. Interfering with any other person's use or enjoyment of the Site.</p>

              <p>5. Breaching any applicable laws;</p>

              <p>6. Interfering or disrupting networks or web sites connected to the Site.</p>

              <p>7. Making, transmitting or storing electronic copies of materials protected by copyright without the permission of the owner.</p>



              <p>Colors we have made every effort to display the colors of our products that appear on the Website as accurately as possible. However, as the actual colors you see will depend on your monitor, we cannot guarantee that your monitor's display of any color will be accurate.</p>



              <p>Modification of Terms & Conditions of Service eshop may at any time modify the Terms & Conditions of Use of the Website without any prior notification to you. You can access the latest version of these Terms & Conditions at any given time on the Site. You should regularly review the Terms & Conditions on the Site. In the event the modified Terms & Conditions is not acceptable to you, you should discontinue using the Service. However, if you continue to use the Service you shall be deemed to have agreed to accept and abide by the modified Terms & Conditions of Use of this Site.</p>



              <p>Governing Law and Jurisdiction This User Agreement shall be construed in accordance with the applicable laws of India. The Courts at Faridabad shall have exclusive jurisdiction in any proceedings arising out of this agreement. Any dispute or difference either in interpretation or otherwise, of any terms of this User Agreement between the parties hereto, the same shall be referred to an independent arbitrator who will be appointed by eshop and his decision shall be final and binding on the parties hereto. The above arbitration shall be in accordance with the Arbitration and Conciliation Act, 1996 as amended from time to time. The arbitration shall be held in Nagpur. The High Court of judicature at Nagpur Bench of Mumbai High Court alone shall have the jurisdiction and the Laws of India shall apply.</p>



            <p>Reviews, Feedback, Submissions All reviews, comments, feedback, postcards, suggestions, ideas, and other submissions disclosed, submitted or offered to the Site on or by this Site or otherwise disclosed, submitted or offered in connection with your use of this Site (collectively, the "Comments") shall be and remain the property of eshop Such disclosure, submission or offer of any Comments shall constitute an assignment to eshop of all worldwide rights, titles and interests in all copyrights and other intellectual properties in the Comments. Thus, eshop owns exclusively all such rights, titles and interests and shall not be limited in any way in its use, commercial or otherwise, of any Comments. eshopwill be entitled to use, reproduce, disclose, modify, adapt, create derivative works from, publish, display and distribute any Comments you submit for any purpose whatsoever, without restriction and without compensating you in any way. eshop is and shall be under no obligation (1) to maintain any Comments in confidence; (2) to pay you any compensation for any Comments; or (3) to respond to any Comments. You agree that any Comments submitted by you to the Site will not violate this policy or any right of any third party, including copyright, trademark, privacy or other personal or proprietary right(s), and will not cause injury to any person or entity. You further agree that no Comments submitted by you to the Website will be or contain libelous or otherwise unlawful, threatening, abusive or obscene material, or contain software viruses, political campaigning, commercial solicitation, chain letters, mass mailings or any form of "spam". eshop does not regularly review posted Comments, but does reserve the right (but not the obligation) to monitor and edit or remove any Comments submitted to the Site. You grant eshopthe right to use the name that you submit in connection with any Comments. You agree not to use a false email address, impersonate any person or entity, or otherwise mislead as to the origin of any Comments you submit. You are and shall remain solely responsible for the content of any Comments you make and you agree to indemnify eshop and its affiliates for all claims resulting from any Comments you submit. eshop and its affiliates take no responsibility and assume no liability for any Comments submitted by you or any third party.</p>



            <p>Copyright & Trademark eshop.com and eshop.com, its suppliers and licensors expressly reserve all intellectual property rights in all text, programs, products, processes, technology, content and other materials, which appear on this Site. Access to this Website does not confer and shall not be considered as conferring upon anyone any license under any of eshop.com or any third party's intellectual property rights. All rights, including copyright, in this website are owned by or licensed to eshop.com from eshop.com. Any use of this website or its contents, including copying or storing it or them in whole or part, other than for your own personal, non-commercial use is prohibited without the permission of eshop.com and/or eshop.com. You may not modify, distribute or re-post anything on this website for any purpose.The names and logos and all related product and service names, design marks and slogans are the trademarks or service marks of eshop.com, eshop.com, its affiliates, its partners or its suppliers. All other marks are the property of their respective companies. No trademark or service mark license is granted in connection with the materials contained on this Site. Access to this Site does not authorize anyone to use any name, logo or mark in any manner.References on this Site to any names, marks, products or services of third parties or hypertext links to third party sites or information are provided solely as a convenience to you and do not in any way constitute or imply eshop.com or eshop.com's endorsement, sponsorship or recommendation of the third party, information, product or service. eshop.com or eshop.com is not responsible for the content of any third party sites and does not make any representations regarding the content or accuracy of material on such sites. If you decide to link to any such third party websites, you do so entirely at your own risk. All materials, including images, text, illustrations, designs, icons, photographs, programs, music clips or downloads, video clips and written and other materials that are part of this Website (collectively, the "Contents") are intended solely for personal, non-commercial use. You may download or copy the Contents and other downloadable materials displayed on the Website for your personal use only. No right, title or interest in any downloaded materials or software is transferred to you as a result of any such downloading or copying. You may not reproduce (except as noted above), publish, transmit, distribute, display, modify, create derivative works from, sell or participate in any sale of or exploit in any way, in whole or in part, any of the Contents, the Website or any related software. All software used on this Website is the property of eshop.com or its licensees and suppliers and protected by Indian and international copyright laws. The Contents and software on this Website may be used only as a shopping resource. Any other use, including the reproduction, modification, distribution, transmission, republication, display, or performance, of the Contents on this Website is strictly prohibited. Unless otherwise noted, all Contents are copyrights, trademarks, trade dress and/or other intellectual property owned, controlled or licensed by eshop.com, one of its affiliates or by third parties who have licensed their materials to eshop.com and are protected by Indian and international copyright laws. The compilation (meaning the collection, arrangement, and assembly) of all Contents on this Website is the exclusive property of eshop.com and eshop.com and is also protected by Indian and international copyright laws.</p>



            <p>Objectionable Material You understand that by using this Site or any services provided on the Site, you may encounter Content that may be deemed by some to be offensive, indecent, or objectionable, which Content may or may not be identified as such. You agree to use the Site and any service at your sole risk and that to the fullest extent permitted under applicable law, eshop.com and/or eshop.com and its affiliates shall have no liability to you for Content that may be deemed offensive, indecent, or objectionable to you.</p>



            <p>Indemnity You agree to defend, indemnify and hold harmless eshop.com, eshop.com, its employees, directors, Coordinators, officers, agents, interns and their successors and assigns from and against any and all claims, liabilities, damages, losses, costs and expenses, including attorney's fees, caused by or arising out of claims based upon your actions or inactions, which may result in any loss or liability to eshop.com or eshop.com or any third party including but not limited to breach of any warranties, representations or undertakings or in relation to the non-fulfillment of any of your obligations under this User Agreement or arising out of the violation of any applicable laws, regulations including but not limited to Intellectual Property Rights, payment of statutory dues and taxes, claim of libel, defamation, violation of rights of privacy or publicity, loss of service by other subscribers and infringement of intellectual property or other rights. This clause shall survive the expiry or termination of this User Agreement.</p>



            <p>Termination This User Agreement is effective unless and until terminated by either you or eshop.com. You may terminate this User Agreement at any time, provided that you discontinue any further use of this Site. eshop.com may terminate this User Agreement at any time and may do so immediately without notice, and accordingly deny you access to the Site, Such termination will be without any liability to eshop.com. Upon any termination of the User Agreement by either you or eshop.com, you must promptly destroy all materials downloaded or otherwise obtained from this Site, as well as all copies of such materials, whether made under the User Agreement or otherwise. eshop.com's right to any Comments shall survive any termination of this User Agreement. Any such termination of the User Agreement shall not cancel your obligation to pay for the product already ordered from the Website or affect any liability that may have arisen under the User Agreement.</p>
        </div>

      </div>
    </section>

    <section id="terms_and_conditions" class="contact {{ app()->isLocale('ar') ? '' : 'd-none' }}">
      <div class="container-fluid">

        <div class="row" style="padding: 10px; margin-left:10px;">
          <h1>Terms & Conditions</h1>
            <p>العملاء eshop.com هي شركة خاصة، الحقوق القانونية لـ eshop.com محفوظة لدى eshop</p>

            <p>المعلومات الشخصية eshop.com والموقع الإلكتروني eshop.com ("الموقع") . يحترم خصوصيتك. توفر سياسة الخصوصية هذه بإيجاز الطريقة التي يتم بها جمع بياناتك واستخدامها بواسطة eshop.com. في الموقع. باعتبارك زائرًا للموقع/العميل، ننصحك بقراءة سياسة الخصوصية بعناية.</p>



            <p>نظرة عامة على الخدمات كجزء من عملية التسجيل على الموقع، قد يقوم eshop.com بجمع معلومات التعريف الشخصية التالية عنك: الاسم بما في ذلك الاسم الأول والأخير وعنوان البريد الإلكتروني البديل ورقم الهاتف المحمول وتفاصيل الاتصال والرمز البريدي وموقع GPS والديموغرافية ملفك الشخصي (مثل عمرك وجنسك ومهنتك وتعليمك وعنوانك وما إلى ذلك) ومعلومات حول صفحات الموقع التي تزورها/تصل إليها، والروابط التي تنقر عليها في الموقع، وعدد المرات التي تدخل فيها إلى الصفحة وأي معلومات تصفح من هذا القبيل .</p>



            <p>ستكون خدمات الأهلية الخاصة بالموقع متاحة فقط لمناطق جغرافية محددة في الهند. الأشخاص "غير المؤهلين للتعاقد" بالمعنى المقصود في قانون العقود الهندي لعام 1872، بما في ذلك المعسرين الذين لم يتم إبراء ذمتهم وما إلى ذلك، ليسوا مؤهلين لاستخدام الموقع. إذا كنت قاصرًا، أي أقل من 18 عامًا ولكن عمرك 13 عامًا على الأقل، فلا يجوز لك استخدام الموقع إلا تحت إشراف أحد الوالدين أو الوصي القانوني الذي يوافق على الالتزام بشروط الاستخدام هذه. إذا كان عمرك أقل من 18 عامًا، فيمكن لوالديك أو الأوصياء القانونيين عليك التعامل نيابةً عنك إذا كانوا مستخدمين مسجلين. يحظر عليك شراء أي مادة مخصصة لاستهلاك البالغين ويحظر بيعها للقاصرين.</p>



            <p>الترخيص والوصول إلى الموقع يمنحك موقع eshop.com ترخيصًا فرعيًا محدودًا للوصول إلى هذا الموقع واستخدامه شخصيًا وعدم تنزيله (بخلاف التخزين المؤقت للصفحة) أو تعديله أو أي جزء منه، إلا بموافقة كتابية صريحة من eshop .com. لا يتضمن هذا الترخيص أي إعادة بيع أو استخدام تجاري لهذا الموقع أو محتوياته؛ أي جمع واستخدام لأي قوائم أو أوصاف أو أسعار للمنتجات؛ أي استخدام مشتق لهذا الموقع أو محتوياته؛ أي تنزيل أو نسخ لمعلومات الحساب لصالح تاجر آخر؛ أو أي استخدام لاستخراج البيانات أو الروبوتات أو أدوات مماثلة لجمع البيانات واستخراجها. لا يجوز إعادة إنتاج هذا الموقع أو أي جزء منه أو نسخه أو بيعه أو إعادة بيعه أو زيارته أو استغلاله لأي غرض تجاري دون موافقة كتابية صريحة من eshop.com. لا يجوز لك تأطير أو استخدام تقنيات التأطير لإحاطة أي علامة تجارية أو شعار أو معلومات ملكية أخرى (بما في ذلك الصور أو النص أو تخطيط الصفحة أو النموذج) للموقع أو لموقع eshop.com والشركات التابعة له دون موافقة كتابية صريحة. لا يجوز لك استخدام أي علامات وصفية أو أي "نص مخفي" آخر يستخدم اسم الموقع أو eshop.com أو اسم eshop.com أو علاماته التجارية دون الحصول على موافقة كتابية صريحة من eshop.com. يؤدي أي استخدام غير مصرح به إلى إنهاء الإذن أو الترخيص الممنوح من قبل eshop.com</p>



            <p>التزامات الحساب والتسجيل يجب على جميع المتسوقين التسجيل وتسجيل الدخول لتقديم الطلبات على الموقع. يجب عليك الحفاظ على تفاصيل حسابك وتسجيلك محدثة وصحيحة للاتصالات المتعلقة بمشترياتك من الموقع. بالموافقة على الشروط والأحكام، يوافق المتسوق على تلقي الاتصالات والرسائل الإخبارية الترويجية عند التسجيل. يمكن للعميل إلغاء الاشتراك إما عن طريق إلغاء الاشتراك في "حسابي" أو عن طريق الاتصال بخدمة العملاء.</p>



            <p>التسعير سيتم بيع جميع المنتجات المدرجة على الموقع بسعر MRP ما لم ينص على خلاف ذلك. الأسعار المذكورة في وقت الطلب ستكون هي الأسعار المفروضة في تاريخ التسليم. على الرغم من أن أسعار معظم المنتجات لا تتقلب بشكل يومي، إلا أن أسعار بعض السلع والمواد الغذائية الطازجة تتغير بشكل يومي. في حالة ارتفاع الأسعار أو انخفاضها في تاريخ التسليم، لن يتم تحصيل أو استرداد أي رسوم إضافية حسب الحالة في وقت تسليم الطلب.</p>



            <p>الإلغاء حسب الموقع / العميل يمكنك كعميل إلغاء طلبك في أي وقت حتى الموعد النهائي للفتحة التي قمت بتقديم الطلب فيها عن طريق الاتصال بخدمة العملاء لدينا. في مثل هذه الحالة، سنقوم بإيداع محفظتك مقابل أي مدفوعات قمت بسدادها بالفعل مقابل الطلب. إذا اشتبهنا في أي معاملة احتيالية من قبل أي عميل أو أي معاملة تتحدى شروط وأحكام استخدام الموقع، فيمكننا وفقًا لتقديرنا الخاص إلغاء هذه الطلبات. سنحتفظ بقائمة سلبية لجميع المعاملات والعملاء الاحتياليين وسنرفض الوصول إليهم أو نلغي أي طلبات مقدمة من قبلهم.</p>



            <p>الإرجاع واسترداد الأموال لدينا "سياسة إرجاع بدون طرح أسئلة" والتي تخول لجميع سفراء التوصيل لدينا إرجاع المنتج في وقت التسليم إذا كانوا غير راضين لأي سبب عن جودة المنتج أو نضارته. سنأخذ المنتج المرتجع معنا ونصدر إشعارًا دائنًا بقيمة المنتجات المرتجعة التي سيتم إضافتها إلى حسابك على الموقع. يمكن استخدام هذا لدفع فواتير التسوق اللاحقة. ستتم معالجة استرداد الأموال من خلال نفس الوضع عبر الإنترنت خلال 7 أيام عمل.</p>





            <p>رسوم التوصيل والشحن</p>



            <p>1. يمكنك أن تتوقع استلام طلبك اعتمادًا على خيار التسليم الذي اخترته.</p>



            <p>2. يمكنك الطلب على مدار 24 ساعة طوال أيام الأسبوع عبر الموقع الإلكتروني وتطبيق الهاتف المحمول، وتكون أوقات التوصيل لدينا بين الساعة 06:00 صباحًا و02:00 ظهرًا، ويتم التسليم في نفس اليوم.</p>



            <p>3. سوف تحصل على شحن مجاني لمبلغ الطلب الذي يزيد عن 150 روبية.</p>

            <p>أنت توافق وتؤكد</p>

            <p>1. أنه في حالة حدوث عدم التسليم بسبب خطأ من جانبك (أي اسم أو عنوان خاطئ أو أي معلومات خاطئة أخرى)، فإن أي تكلفة إضافية يتكبدها eshop. لإعادة التسليم يجب أن تتم المطالبة منك.</p>

            <p>2. أنك ستستخدم الخدمات التي يقدمها الموقع والشركات التابعة له والاستشاريون والشركات المتعاقدة معها، لأغراض مشروعة فقط وتلتزم بجميع القوانين واللوائح المعمول بها أثناء استخدام الموقع والتعامل معه.</p>

            <p>3. ستقدم معلومات موثوقة وصحيحة في جميع الحالات التي تطلب فيها هذه المعلومات منك. تحتفظ eshop بالحق في تأكيد والتحقق من صحة المعلومات والتفاصيل الأخرى التي تقدمها في أي وقت. إذا تبين بعد التأكيد أن التفاصيل الخاصة بك غير صحيحة (كليًا أو جزئيًا)، فلها الحق وفقًا لتقديرها الخاص في رفض التسجيل ومنعك من استخدام الخدمات و/أو المواقع الإلكترونية التابعة الأخرى دون إشعار مسبق على الإطلاق.</p>

            <p>4. أنك تقوم بالوصول إلى الخدمات المتاحة على هذا الموقع وتجري المعاملات على مسؤوليتك وحدك وتستخدم حكمك الأفضل والحكيم قبل الدخول في أي معاملة من خلال هذا الموقع.</p>

            <p>5. أن العنوان الذي سيتم فيه تسليم المنتج الذي طلبته سيكون صحيحًا وسليمًا من جميع النواحي.</p>

            <p>6. قبل تقديم الطلب، سوف تتحقق من وصف المنتج بعناية. من خلال تقديم طلب لمنتج ما، فإنك توافق على الالتزام بشروط البيع المضمنة في وصف المنتج.</p>



            <p>لا يجوز لك استخدام الموقع لأي من الأغراض التالية:</p>

              <p>1. نشر أي مواد غير قانونية أو مضايقة أو تشهيرية أو مسيئة أو تهديدية أو ضارة أو مبتذلة أو فاحشة أو غير مرغوب فيها.</p>

              <p>2. نقل المواد التي تشجع السلوك الذي يشكل جريمة جنائية أو يؤدي إلى مسؤولية مدنية أو ينتهك أي قوانين أو لوائح أو قواعد ممارسة ذات صلة.</p>

              <p>3. الوصول غير المصرح به إلى أنظمة الكمبيوتر الأخرى.</p>

              <p>4. التدخل في استخدام أي شخص آخر للموقع أو استمتاعه به.</p>

              <p>5. خرق أية قوانين معمول بها؛</p>

              <p>6. التدخل أو تعطيل الشبكات أو مواقع الويب المتصلة بالموقع.</p>

              <p>7. عمل أو نقل أو تخزين نسخ إلكترونية من المواد المحمية بحقوق الطبع والنشر دون إذن المالك.</p>



              <p>الألوان لقد بذلنا قصارى جهدنا لعرض ألوان منتجاتنا التي تظهر على الموقع بأكبر قدر ممكن من الدقة. ومع ذلك، نظرًا لأن الألوان الفعلية التي تراها ستعتمد على شاشتك، فلا يمكننا ضمان دقة عرض شاشتك لأي لون.</p>



              <p>تعديل شروط وأحكام الخدمة يجوز لـ eshop في أي وقت تعديل شروط وأحكام استخدام الموقع دون أي إشعار مسبق لك. يمكنك الوصول إلى أحدث إصدار من هذه الشروط والأحكام في أي وقت على الموقع. يجب عليك مراجعة الشروط والأحكام الموجودة على الموقع بانتظام. في حالة عدم قبول الشروط والأحكام المعدلة بالنسبة لك، يجب عليك التوقف عن استخدام الخدمة. ومع ذلك، إذا واصلت استخدام الخدمة، فسيتم اعتبارك موافقًا على قبول شروط وأحكام الاستخدام المعدلة لهذا الموقع والالتزام بها.</p>



              <p>القانون الحاكم والاختصاص القضائي يجب تفسير اتفاقية المستخدم هذه وفقًا للقوانين المعمول بها في الهند. تتمتع المحاكم في فريد أباد بالاختصاص القضائي الحصري في أي إجراءات تنشأ عن هذه الاتفاقية. أي نزاع أو اختلاف سواء في التفسير أو غير ذلك، لأي شروط من شروط اتفاقية المستخدم هذه بين الطرفين، يحال إلى محكم مستقل سيتم تعيينه بواسطة eshop ويكون قراره نهائيًا وملزمًا للطرفين. يجب أن يكون التحكيم المذكور أعلاه وفقاً لقانون التحكيم والتوفيق لعام 1996 بصيغته المعدلة من وقت لآخر. سيتم عقد التحكيم في ناجبور. تتمتع محكمة القضاء العليا في محكمة ناجبور بمحكمة مومباي العليا وحدها بالولاية القضائية وتطبق قوانين الهند.</p>



            <p>المراجعات والتعليقات والإرسالات جميع المراجعات والتعليقات والملاحظات والبطاقات البريدية والاقتراحات والأفكار وغيرها من عمليات الإرسال التي تم الكشف عنها أو تقديمها أو عرضها على الموقع على هذا الموقع أو من خلاله أو الكشف عنها أو تقديمها أو عرضها بطريقة أخرى فيما يتعلق باستخدامك لهذا الموقع ( بشكل جماعي، "التعليقات") ستكون وستظل ملكًا لـ eshop. ويشكل هذا الكشف أو تقديم أو عرض أي تعليقات تنازلًا لـ eshop لجميع الحقوق والألقاب والمصالح في جميع أنحاء العالم في جميع حقوق الطبع والنشر والملكية الفكرية الأخرى في التعليقات. وبالتالي، يمتلك eshop حصريًا جميع هذه الحقوق والألقاب والمصالح ولا يجوز تقييد استخدامه لأي تعليقات بأي شكل من الأشكال، تجاريًا أو غير ذلك. يحق لـ eshop استخدام وإعادة إنتاج والإفصاح وتعديل وتكييف وإنشاء أعمال مشتقة من ونشر وعرض وتوزيع أي تعليقات ترسلها لأي غرض كان، دون قيود ودون تعويضك بأي شكل من الأشكال. eshop ليس ملزمًا بأي التزام (1) بالحفاظ على سرية أي تعليقات؛ (2) أن ندفع لك أي تعويض عن أي تعليقات؛ أو (3) للرد على أي تعليقات. أنت توافق على أن أي تعليقات تقدمها إلى الموقع لن تنتهك هذه السياسة أو أي حق لأي طرف ثالث، بما في ذلك حقوق الطبع والنشر أو العلامة التجارية أو الخصوصية أو أي حق (حقوق) شخصية أو ملكية أخرى، ولن تتسبب في إصابة أي شخص أو كيان. . أنت توافق أيضًا على ألا تحتوي أي تعليقات ترسلها إلى موقع الويب على مواد تشهيرية أو غير قانونية أو تهديدية أو مسيئة أو فاحشة، أو تحتوي على فيروسات برمجية أو حملات سياسية أو التماس تجاري أو رسائل متسلسلة أو رسائل بريدية جماعية أو أي شكل من أشكال "البريد العشوائي" ". لا يقوم eshop بمراجعة التعليقات المنشورة بانتظام، ولكنه يحتفظ بالحق (ولكن ليس الالتزام) بمراقبة وتحرير أو إزالة أي تعليقات مقدمة إلى الموقع. أنت تمنح eshop الحق في استخدام الاسم الذي ترسله فيما يتعلق بأي تعليقات. أنت توافق على عدم استخدام عنوان بريد إلكتروني مزيف، أو انتحال شخصية أي شخص أو كيان، أو التضليل فيما يتعلق بأصل أي تعليقات ترسلها. أنت وستظل المسؤول الوحيد عن محتوى أي تعليقات تقدمها وتوافق على تعويض eshop والشركات التابعة لها عن جميع المطالبات الناتجة عن أي تعليقات ترسلها. لا تتحمل eshop والشركات التابعة لها أي مسؤولية ولا تتحمل أي مسؤولية عن أي تعليقات تقدمها أنت أو أي طرف ثالث.</p>



            <p>حقوق الطبع والنشر والعلامات التجارية يحتفظ موقع eshop.com وeshop.com وموردوه ومرخصوه صراحة بجميع حقوق الملكية الفكرية في جميع النصوص والبرامج والمنتجات والعمليات والتكنولوجيا والمحتوى والمواد الأخرى التي تظهر على هذا الموقع. الوصول إلى هذا الموقع لا يمنح ولا يعتبر أنه يمنح أي شخص أي ترخيص بموجب أي من eshop.com أو حقوق الملكية الفكرية لأي طرف ثالث. جميع الحقوق، بما في ذلك حقوق الطبع والنشر، في هذا الموقع مملوكة أو مرخصة لـ eshop.com من eshop.com. يحظر أي استخدام لهذا الموقع أو محتوياته، بما في ذلك نسخها أو تخزينها كليًا أو جزئيًا، بخلاف استخدامك الشخصي وغير التجاري، دون الحصول على إذن من eshop.com و/أو eshop.com. لا يجوز لك تعديل أو توزيع أو إعادة نشر أي شيء على هذا الموقع لأي غرض. الأسماء والشعارات وجميع أسماء المنتجات والخدمات ذات الصلة وعلامات التصميم والشعارات هي العلامات التجارية أو علامات الخدمة الخاصة بـ eshop.com وeshop.com وموقعها الإلكتروني. الشركات التابعة لها أو شركائها أو مورديها. 
              جميع العلامات الأخرى هي ملك للشركات الخاصة بها. لا يتم منح أي ترخيص لعلامة تجارية أو علامة خدمة فيما يتعلق بالمواد الواردة في هذا الموقع. الوصول إلى هذا الموقع لا يسمح لأي شخص باستخدام أي اسم أو شعار أو علامة بأي شكل من الأشكال. يتم توفير المراجع في هذا الموقع إلى أي أسماء أو علامات أو منتجات أو خدمات لأطراف ثالثة أو روابط نصية تشعبية لمواقع أو معلومات لأطراف ثالثة فقط باعتبارها التي تناسبك ولا تشكل أو تشير بأي شكل من الأشكال إلى تأييد eshop.com أو eshop.com أو رعايتها أو توصيتها للطرف الثالث أو المعلومات أو المنتج أو الخدمة. eshop.com أو eshop.com ليس مسؤولاً عن محتوى أي مواقع تابعة لجهات خارجية ولا يقدم أي تعهدات فيما يتعلق بمحتوى أو دقة المواد الموجودة على هذه المواقع. إذا قررت الارتباط بأي من مواقع الطرف الثالث، فإنك تفعل ذلك بالكامل على مسؤوليتك الخاصة. جميع المواد، بما في ذلك الصور والنصوص والرسوم التوضيحية والتصميمات والأيقونات والصور الفوتوغرافية والبرامج ومقاطع الموسيقى أو التنزيلات ومقاطع الفيديو والمواد المكتوبة وغيرها من المواد التي تشكل جزءًا من هذا الموقع (يُشار إليها إجمالاً باسم "المحتويات") مخصصة فقط للأغراض الشخصية، اسخدام غير تجاري. يجوز لك تنزيل أو نسخ المحتويات والمواد الأخرى القابلة للتنزيل المعروضة على الموقع لاستخدامك الشخصي فقط. لا يتم نقل أي حق أو ملكية أو مصلحة في أي مواد أو برامج تم تنزيلها إليك نتيجة لأي تنزيل أو نسخ. لا يجوز لك إعادة إنتاج (باستثناء ما هو مذكور أعلاه) أو نشر أو نقل أو توزيع أو عرض أو تعديل أو إنشاء أعمال مشتقة من أو بيع أو المشاركة في أي بيع أو استغلال بأي شكل من الأشكال، كليًا أو جزئيًا، لأي من المحتويات، الموقع أو أي برامج ذات صلة. جميع البرامج المستخدمة في هذا الموقع هي ملك لموقع eshop.com أو المرخص لهم والموردين التابعين له، وهي محمية بموجب قوانين حقوق الطبع والنشر الهندية والدولية. لا يجوز استخدام المحتويات والبرامج الموجودة على هذا الموقع إلا كمورد للتسوق. يُمنع منعًا باتًا أي استخدام آخر، بما في ذلك إعادة إنتاج أو تعديل أو توزيع أو نقل أو إعادة نشر أو عرض أو أداء محتويات هذا الموقع. ما لم يُذكر خلاف ذلك، فإن جميع المحتويات هي حقوق طبع ونشر و/أو علامات تجارية ومظهر تجاري و/أو ملكية فكرية أخرى مملوكة أو خاضعة لسيطرة أو مرخصة بواسطة eshop.com أو إحدى الشركات التابعة لها أو بواسطة أطراف ثالثة قامت بترخيص موادها إلى eshop.com وتتم حمايتها بواسطة قوانين حقوق النشر الهندية والدولية. يعد تجميع (أي التجميع والترتيب والتجميع) لجميع محتويات هذا الموقع ملكية حصرية لـ eshop.com وeshop.com، كما أنه محمي بموجب قوانين حقوق الطبع والنشر الهندية والدولية.</p>



            <p>المواد المرفوضة أنت تدرك أنه باستخدام هذا الموقع أو أي خدمات مقدمة على الموقع، قد تواجه محتوى قد يعتبره البعض مهينًا أو غير لائق أو مرفوضًا، وقد يتم أو لا يتم تحديد المحتوى على هذا النحو. أنت توافق على استخدام الموقع وأي خدمة على مسؤوليتك وحدك وذلك إلى أقصى حد يسمح به القانون المعمول به، ولن يتحمل eshop.com و/أو eshop.com والشركات التابعة له أي مسؤولية تجاهك عن المحتوى الذي قد يعتبر مسيئًا، غير لائقة، أو غير مقبولة بالنسبة لك.</p>



            <p>التعويض أنت توافق على الدفاع عن وتعويض وحماية eshop.com وeshop.com وموظفيها ومديريها ومنسقيها ومسؤوليها ووكلاءها والمتدربين وخلفائهم والمتنازل لهم من وضد أي وجميع المطالبات والالتزامات والأضرار والخسائر والتكاليف والنفقات، بما في ذلك أتعاب المحاماة، الناجمة عن أو الناشئة عن المطالبات المستندة إلى تصرفاتك أو عدم تصرفك، والتي قد تؤدي إلى أي خسارة أو مسؤولية تجاه eshop.com أو eshop.com أو أي طرف ثالث بما في ذلك على سبيل المثال لا الحصر، خرق أي ضمانات أو الإقرارات أو التعهدات أو فيما يتعلق بعدم الوفاء بأي من التزاماتك بموجب اتفاقية المستخدم هذه أو الناشئة عن انتهاك أي قوانين أو لوائح معمول بها بما في ذلك على سبيل المثال لا الحصر حقوق الملكية الفكرية، ودفع المستحقات القانونية والضرائب، والمطالبة التشهير والتشهير وانتهاك حقوق الخصوصية أو الدعاية وفقدان الخدمة من قبل المشتركين الآخرين وانتهاك الملكية الفكرية أو الحقوق الأخرى. ويظل هذا الشرط ساريًا بعد انتهاء أو إنهاء اتفاقية المستخدم هذه.</p>



            <p>الإنهاء تظل اتفاقية المستخدم هذه سارية ما لم يتم إنهاؤها بواسطتك أو بواسطة eshop.com وحتى يتم ذلك. يجوز لك إنهاء اتفاقية المستخدم هذه في أي وقت، بشرط التوقف عن أي استخدام آخر لهذا الموقع. يجوز لـ eshop.com إنهاء اتفاقية المستخدم هذه في أي وقت، ويجوز له القيام بذلك على الفور دون سابق إنذار، وبالتالي يمنعك من الوصول إلى الموقع، وسيكون هذا الإنهاء دون أي مسؤولية على eshop.com. عند إنهاء اتفاقية المستخدم من جانبك أو من جانب eshop.com، يجب عليك على الفور تدمير جميع المواد التي تم تنزيلها أو الحصول عليها بطريقة أخرى من هذا الموقع، بالإضافة إلى جميع نسخ هذه المواد، سواء تم إجراؤها بموجب اتفاقية المستخدم أو غير ذلك. يظل حق eshop.com في أي تعليقات ساريًا بعد أي إنهاء لاتفاقية المستخدم هذه. لا يؤدي أي إنهاء لاتفاقية المستخدم إلى إلغاء التزامك بدفع ثمن المنتج الذي طلبته بالفعل من الموقع أو يؤثر على أي مسؤولية قد تنشأ بموجب اتفاقية المستخدم.</p>
        </div>

      </div>
    </section>
    
  <!-- End Privacy Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Bootslander</h3>
              <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
              <p>
                Madinah, KSA<br><br>
                <strong>Phone:</strong> +966 54 499 9041<br>
                <strong>Email:</strong> labeey17@gmail.com <br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Bootslander</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>