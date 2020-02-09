<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>پروژه مهندسی سیستم های تجارت الکترونیکی</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/flaticon.css" rel="stylesheet">


    <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>


    <!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
    <![endif]-->


</head>
<body>
<div style="overflow:hidden;">
    <header class="header" id="header"><!--header-start-->
        <div class="container">
            <figure class="logo animated fadeInDown delay-07s">
                <a href="#"><img src="img/logo.png" alt=""></a>
            </figure>
            <h1 class="animated fadeInDown delay-07s">
پروژه درس مهندسی سیستم های تجارت الکترونیکی            </h1>
            <ul class="we-create animated fadeInUp delay-1s">
                <li style="font-size: large">سناریو ارائه خدمات قابل پیکره بندی تبلیغات بر روی بیلبوردهای الکترونیکی شهری</li>
            </ul>
            <a class="link animated fadeInUp delay-1s" href="#Portfolio">
                شروع کنید
            </a>
        </div>
    </header><!--header-end-->

</div>



<nav class="main-nav-outer" id="test"><!--main-nav-start-->
    <div class="container">
        <ul class="main-nav">
            <li><a href="#header">صفحه اصلی</a></li>
            <li><a href="#service">خدمات</a></li>
            <li><a href="#Portfolio"> پلن های تبلیغی </a></li>
            <li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li>
            <li><a href="Billboards">بیلبورد ها </a></li>
            <li><a href="#team">تیم ما</a></li>
            @guest
                <li><a href="login"> ورود  <i class="fa-sign-in" style="margin:5px"></i></a></li>
                <li><a href="register"> ثبت نام  <i class="fa fa-plus-square" style="margin:5px"></i></a></li>
            @else

            <li><a href="home"> حساب کاربری من  <i class="fa-user " style="margin:5px"></i></a></li>


                @endguest
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section" id="service"><!--main-section-start-->
    <div class="container">
        @guest
        <h2 style="padding-left: 80px;">خدمات</h2>
        <h6 style="padding-left:60px;">ارائه دهنده تبلیغات الکترونیکی بیلبورد های شهر </h6>

        @else

            <h2>خدمات</h2>
            <h6>ارائه دهنده تبلیغات الکترونیکی بیلبورد های شهر </h6>
            @endguest
        <div class="row">
            <div class="col-lg-4 col-sm-6 wow fadeInRight delay-05s">
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa-paw"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>
                            قابلیت انتخاب محتوای تبلیغ
                        </h3>
                        <p>شما می توانید محتوای تبلیغ خود را طراحی کنید و به ما تحویل دهید تا آن ها را نمایش دهیم</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa-gear"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>
                             طراحی تبلیغ
                        </h3>
                        <p>در صورت نیاز ، ما آماده ایم تا برای شما طراحی محتوای تبلیغ انجام دهیم </p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa-apple"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>
                           نسخه اپلیکیشن
                        </h3>
                        <p> امکان دسترسی به خدمات ما در آینده نزدیک روی اپلیکیشن امکان پذیر است </p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa-medkit"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>
                            24/7 پشتیبانی
                        </h3>
                        <p>ما به شما اطمینان می دهیم که سفارش شما بدون هیچ نقصی انجام شود </p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-left wow fadeInUp delay-02s">
                <img src="img/bil2.jpg" class="img-roundedphp" style="width: 650px; height: 365px;" alt="">
            </figure>

        </div>
    </div>
</section><!--main-section-end-->



<section class="main-section alabaster"><!--main-section alabaster-start-->
    <div class="container">
        <div class="row">
            <figure class="col-lg-5 col-sm-4 wow fadeInRight">
                <img  src="img/bil.jpg" class="img-rounded" alt="">
            </figure>
            <div class="col-lg-7 col-sm-8 featured-work">
                <h2 style="text-align: right">
                    آن چه تحویل خواهید گرفت
                </h2>
                <P class="padding-b">پلن مناسب خود را انتخاب کنید و طرح مورد نظر را آپلود کنید بعد از تایید سفارش شما به موارد زیر دسترسی دارید </P>
                <div class="featured-box">
                    <div class="featured-box-col1 wow fadeInLeft delay-02s">
                        <i class="fa-magic"></i>
                    </div>
                    <div class="featured-box-col2 wow fadeInLeft delay-02s">
                        <h3>

                            افکت های ویژه </h3>
                        <p>ما تبلیغ شما را با بهترین افکت های نوری نمایش خواهیم داد  </p>
                    </div>
                </div>
                <div class="featured-box">
                    <div class="featured-box-col1 wow fadeInLeft delay-04s">
                        <i class="fa-gift"></i>
                    </div>
                    <div class="featured-box-col2 wow fadeInLeft delay-04s">
                        <h3>تخفیف های بعدی </h3>
                        <p>شما می توانید سفارش بعدی خود را با تخفیف خریداری کنید </p>
                    </div>
                </div>
                <div class="featured-box">
                    <div class="featured-box-col1 wow fadeInLeft delay-06s">
                        <i class="fa-dashboard"></i>
                    </div>
                    <div class="featured-box-col2 wow fadeInLeft delay-06s">
                        <h3>
                           داشبورد
                        </h3>
                        <p>شما می توانید وضعیت سفارش های خود را در داشبورد کاربری مشاهده کنید  </p>
                    </div>
                </div>
                <a class="Learn-More" href="#">بیشتر بدانید</a>
            </div>
        </div>
    </div>
</section><!--main-section alabaster-end-->




<section class="main-section paddind" id="Portfolio"><!--main-section-start-->

    <div id="pricing" class="container-fluid">
        <div class="text-center">
            <h2> پلن های مالی  </h2>
            <h3 style="color: #4e507f">پلن مالی مورد نظر خود را انتخاب کنید
            </h3><br>
        </div>
        <div class="row slideanim" >
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1 style="font-family: Yekan">معمولی </h1>
                    </div>
                    <div class="panel-body">
                         <p style="font-size:large" class="label label-danger">     اشتراکی  </p>
                       <br><br>
                        <p style="font-size:large" class="label label-warning"> 15 درصد تخفیف   </p>
                        <br>
                        <br>
                        <p style="font-size:large" class="label label-primary"> بیلبورد پل عابر پیاده   </p>
                    </div>
                    <div class="panel-footer">
                        <h3>200 هزار تومان </h3>
                        <h3><span class="badge badge-info">در روز </span></h3>
                        <a href="{{route('bill.test',['id'=>2,'b_id'=>110])}}" class="btn btn-lg"> انتخاب پلن</a>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1 style="font-family: Yekan">اقتصادی </h1>
                    </div>
                    <div class="panel-body">
                       
                       <p style="font-size:large" class="label label-danger">     اشتراکی  </p>
                       <br><br>
                        <p style="font-size:large" class="label label-warning"> 10 درصد تخفیف   </p>
                        <br>
                        <br>
                        <p style="font-size:large" class="label label-primary"> پانل های دیواری   </p>
                    </div>
                    <div class="panel-footer">
                        <h3>100 هزار تومان </h3>
                         <h3><span class="badge badge-info">در روز </span></h3>
                        <a href="{{route('bill.test',['id'=>1,'b_id'=>110])}}" class="btn btn-lg"> انتخاب پلن</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1 style="font-family: Yekan">ویژه </h1>
                    </div>
                    <div class="panel-body">
                         <p style="font-size:large" class="label label-danger">     اختصاصی  </p>
                       <br><br>
                        <p style="font-size:large" class="label label-warning"> 20 درصد تخفیف   </p>
                        <br>
                        <br>
                        <p style="font-size:large" class="label label-primary"> بیلبورد داربستی   </p>
                    </div>
                    <div class="panel-footer">
                        <h3>300 هزار تومان </h3>
                        <h3><span class="badge badge-info">در روز </span></h3>
                        <a href="{{route('bill.test',['id'=>3,'b_id'=>110])}}" class="btn btn-lg"> انتخاب پلن</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!--main-section-end-->







<section class="main-section client-part" id="client"><!--main-section client-part-start-->
    <div class="container">
        <b class="quote-left wow fadeInDown delay-03"><i class="fa-quote-left"></i></b>
        <div class="row">
            <div class="col-lg-12">
                <p class="client-part-haead wow fadeInDown delay-05">وجود سیستمی برای اجاره بیلبورد های سطح شهر بسیار ایده خوب و کاربردی است  </p>
            </div>
        </div>
        <ul class="client wow fadeIn delay-05s">
            <li><a href="#">
                    <img src="img/client-pic1.jpg" alt="">
                    <h3>علی الهامی پور</h3>
                    <span>

مشتری</span>
                </a></li>
        </ul>
    </div>
</section><!--main-section client-part-end-->

<section class="main-section team" id="team"><!--main-section team-start-->
    <div class="container">
        <h2>تیم ما</h2>
        <h6>تیم توسعه دهنده وب اپلیکیشن  </h6>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box pull-right  ">
                <div class="team-leader wow fadeInDown delay-03s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/2.png" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">محمد کاکویی نژاد  </h3>
                <span class="wow fadeInDown delay-03s">
توسعه دهنده </span>
                <p class="wow fadeInDown delay-03s">موسس و بنیان گذار استارتاپ </p>
            </div>

        </div>
    </div>
</section><!--main-section team-end-->



<section class="business-talking"><!--business-talking-start-->
    <div class="container">
        <h2>
با کمک ما دیده شوید         </h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
    <section class="main-section contact" id="contact">

        <div class="row">
            <div class="col-lg-6 col-sm-7 wow fadeInRight">
                <div class="contact-info-box address clearfix">
                    <h3><i class=" icon-map-marker"></i>آدرس : </h3>
                    <span>تهران-  خیابان انقلاب <br> خیابان سمیه دانشگاه امیرکبیر</span>
                </div>
                <div class="contact-info-box phone clearfix">
                    <h3><i class="fa-phone"></i>تلفن :</h3>
                    <span>1234567</span>
                </div>
                <div class="contact-info-box email clearfix">
                    <h3><i class="fa-pencil"></i>ایمیل:</h3>
                    <span>mohammadkakuei@gmail.com</span>
                </div>
                <div class="contact-info-box hours clearfix">
                    <h3><i class="fa-clock-o"></i>
                        ساعات کاری:
                    </h3>
                    <span><strong>
دوشنبه - پنجشنبه:
</strong>
10 صبح تا 6 شب
<br><strong>
جمعه:
</strong>
مردم در روزهای جمعه در حال حاضر چگونه است؟
<br><strong>
شنبه - یکشنبه:
</strong>بهترین برای پرسیدن</span>
                </div>
                <ul class="social-link">
                    <li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                <div class="form">

                    <form method="post" action="contact">
                        @csrf
                    <input class="input-text" type="text" name="name" value="نام *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-text" type="text" name="email" value="ایمیل *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <textarea class="input-text text-area" name="message" cols="0" rows="0" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">پیام *</textarea>
                    <input class="btn btn-success" type="submit" value="ارسال پیام">

                    </form>

                    @if(session()->has('success'))




                        <script>

                            alert('{{session('success')}}')
                        </script>
                        <div class="row">

                            <div class="col-12">
                                <div class="alert alert-success">

                                    {{session('success')}}



                                </div>


                            </div>

                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>
        <p class="text-center">تمام حقوق این سایت محفوظ برای صاحب اثر است   </p>
    </div>
</footer>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false

        });

    });
</script>

<script>
    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100
        }
    );
    wow.init();
    document.getElementById('').onclick = function() {
        var section = document.createElement('section');
        section.className = 'wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };
</script>


<script type="text/javascript">
    $(window).load(function(){

        $('.main-nav li a').bind('click',function(event){
            var $anchor = $(this);

            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 102
            }, 1500,'easeInOutExpo');
            /*
            if you don't want to use the easing effects:
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1000);
            */
            event.preventDefault();
        });
    })
</script>

<script type="text/javascript">

    $(window).load(function(){


        var $container = $('.portfolioContainer'),
            $body = $('body'),
            colW = 375,
            columns = null;


        $container.isotope({
            // disable window resizing
            resizable: true,
            masonry: {
                columnWidth: colW
            }
        });

        $(window).smartresize(function(){
            // check if columns has changed
            var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
            if ( currentColumns !== columns ) {
                // set new column count
                columns = currentColumns;
                // apply width to container manually, then trigger relayout
                $container.width( columns * colW )
                    .isotope('reLayout');
            }

        }).smartresize(); // trigger resize to set container width
        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({

                filter: selector,
            });
            return false;
        });

    });

</script>
</body>
</html>
