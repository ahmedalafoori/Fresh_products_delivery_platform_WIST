<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Big Cart</title>
    <link rel="stylesheet" href="{{asset('clients/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('clients/css/bootsrtap/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('clients/css/bootsrtap/bootstrap.min.css')}}" />
  </head>
  <body dir="rtl">

<!-- Start Head and Nav  -->
@include('Clint.Incloude.hedar')
<!-- End Head and Nav  -->

    <!-- Start Content  -->
    <section class="hero">
        <h1 class="title">سلسلة توريد المحاصيل</h1>
        <p class="description">
          تهدف سلسلة توريد المحاصيل إلى المصداقية و تسهيل معرفة المحاصيل المتوفرة
          وكيفية توفر المحصول منذ عملية الزراعة و حتى التصدير في جميع المزارع
          المتوفرة في الجمهورية
        </p>
        <div>
          <ul type="circle" class="buttonss">
            <li>
              <h3>زراعة المحاصيل</h3>
            </li>
            <li>
              <h3>جودة أفضل</h3>
            </li>
            <li>
              <h3>أسعار أرخص</h3>
            </li>
          </ul>
        </div>
        <div class="display_button">
          <button class="bg-success text-light">
            قراءة المزيد
            <img
              src="images/bootstrap-icons-1.11.3/arrow-left.svg"
              style="filter: invert(100%)"
            />
          </button>
          <a href="login.html">
            <button class="bg-success text-light">
              تسجيل الدخول
              <img
                src="images/bootstrap-icons-1.11.3/arrow-left.svg"
                style="filter: invert(100%)"
              /></button
          ></a>
        </div>
      </section>
      <!-- End Content  -->

      <!-- Start Subscribe Part -->
      <section class="container subscribe">
        <div class="form">
          <button class="bg-info">Subscribe</button>
          <input type="text" name="" placeholder="Enter your Email" />
        </div>
        <h3 class="text-light m-2">Subscribe Big Cart</h3>
      </section>
      <!-- End Subscribe Part -->

      <!-- Start Footer  -->
      <footer class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="footer-links">
              <a href="index.html" class="m-2">الرئيسية</a>
              <a href="products.html" class="m-2">المنتجات</a>
              <a href="productionsteps.html" class="m-2">مراحل تتبع المنتج</a>
              <a href="reports.html" class="m-2">التقارير</a>
              <a href="contactus.html" class="m-2">تواصل معنا</a>
              <a href="aboutus.html" class="m-2">من نحن</a>
            </div>
            <div>
              <a href="" class="m-3 copyright">Terms of Service</a>
              <a href="" class="m-3 copyright">Privacy of Policy</a>
            </div>
          </div>

          <div class="col-md-6">
            <div class="social">
              <a href="#"
                ><i class="m-2"
                  ><img
                    src="images/bootstrap-icons-1.11.3/youtube.svg"
                    alt="" /></i
              ></a>
              <a href="#"
                ><i class="m-2"
                  ><img src="images/bootstrap-icons-1.11.3/vimeo.svg" alt="" /></i
              ></a>
              <a href="#"
                ><i class="m-2"
                  ><img
                    src="images/bootstrap-icons-1.11.3/twitter-x.svg"
                    alt="" /></i
              ></a>
              <a href="#"
                ><i class="m-2"
                  ><img
                    src="images/bootstrap-icons-1.11.3/facebook.svg"
                    alt="" /></i
              ></a>
            </div>

            <div class="copyright">Big Cart All rights reserved &copy; 2024</div>
          </div>
        </div>
      </footer>
      <!-- End Footer  -->
    <!-- Start Content  -->
    @yield('content')
    <!-- End Content  -->
    <!-- Start Script  -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll(".header .nav a");
        const currentUrl = window.location.href;

        navLinks.forEach((link) => {
          if (link.href === currentUrl) {
            link.classList.add("active");
          }
        });
      });
    </script>
    <!-- End Script  -->
  </body>
</html>
