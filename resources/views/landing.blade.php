<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
    <?=trans('land.title');?>
    </title>
    <meta name="description" content="<?=trans('land.description');?>">
    <meta name="keywords" content="<?=trans('land.keywords');?>">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('landing/styles/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/styles/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/styles/style.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<script>
  var price_list = {
  "price_30" : "<?=trans('land.price_30');?>",
  "price_60" : "<?=trans('land.price_60');?>",
  "price_120" : "<?=trans('land.price_120');?>",
  };

  var subscribe_list = {
  "month_15_2" : "<?=trans('land.month_15_2');?>",
  "month_15_3" : "<?=trans('land.month_15_3');?>",
  "month_15_5" : "<?=trans('land.month_15_5');?>",
  "month_15_7" : "<?=trans('land.month_15_7');?>",
  "month_30_2" : "<?=trans('land.month_30_2');?>",
  "month_30_3" : "<?=trans('land.month_30_3');?>",
  "month_30_5" : "<?=trans('land.month_30_5');?>",
  "month_30_7" : "<?=trans('land.month_30_7');?>",
  "month_60_2" : "<?=trans('land.month_60_2');?>",
  "month_60_3" : "<?=trans('land.month_60_3');?>",
  "month_60_5" : "<?=trans('land.month_60_5');?>",
  "month_60_7" : "<?=trans('land.month_60_7');?>",
  "month_120_2" : "<?=trans('land.month_120_2');?>",
  "month_120_3" : "<?=trans('land.month_120_3');?>",
  "month_120_5" : "<?=trans('land.month_120_5');?>",
  "month_120_7" : "<?=trans('land.month_120_7');?>",
  "min_15_2" : "<?=trans('land.min_15_2');?>",
  "min_15_3" : "<?=trans('land.min_15_3');?>",
  "min_15_5" : "<?=trans('land.min_15_5');?>",
  "min_15_7" : "<?=trans('land.min_15_7');?>",
  "min_30_2" : "<?=trans('land.min_30_2');?>",
  "min_30_3" : "<?=trans('land.min_30_3');?>",
  "min_30_5" : "<?=trans('land.min_30_5');?>",
  "min_30_7" : "<?=trans('land.min_30_7');?>",
  "min_60_2" : "<?=trans('land.min_60_2');?>",
  "min_60_3" : "<?=trans('land.min_60_3');?>",
  "min_60_5" : "<?=trans('land.min_60_5');?>",
  "min_60_7" : "<?=trans('land.min_60_7');?>",
  "min_120_2" : "<?=trans('land.min_120_2');?>",
  "min_120_3" : "<?=trans('land.min_120_3');?>",
  "min_120_5" : "<?=trans('land.min_120_5');?>",
  "min_120_7" : "<?=trans('land.min_120_7');?>",
  };


</script>
  </head>
  <body id="home_link">
    <div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href=".home_link" class="navbar-brand"><img src="{{ asset('landing/img/logo_color.svg') }}" height="50px" class="logo"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="langSelect" class="dropdown visible-xs hidden-sm visible-md visible-lg"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="selectLangData">@if($lang == "ru") {{trans('land.lang_ru')}}  @endif @if($lang == "en") {{trans('land.lang_en')}}  @endif</span><span class="myCaret">
                  <div class="arrow_down"></div></span></a>
              <ul class="dropdown-menu">
                <li ><a href="/update_lang?lang=ru" lang="ru" class="selectLang"><?=trans('land.lang_ru');?></a></li>
                <li ><a href="/update_lang?lang=en" lang="en" class="selectLang"><?=trans('land.lang_en');?></a></li>
              </ul>
            </li>
            <li class="visible-xs hidden-sm visible-md visible-lg"><a href=".about_us"><?=trans('land.menu_1');?></a></li>
            <li class="visible-xs hidden-sm visible-md visible-lg"><a href=".start"><?=trans('land.menu_2');?></a></li>
            <li class="visible-xs hidden-sm visible-md visible-lg"><a href=".goals"><?=trans('land.menu_3');?></a></li>
            <li class="visible-xs hidden-sm visible-md visible-lg"><a href=".prices"><?=trans('land.menu_4');?></a></li>
            <li style="" class="visible-xs hidden-sm visible-md visible-lg"><a class="subscriber" href=".subscribe"><?=trans('land.menu_5');?></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><!-- <a href="#" class="button-link">
                <button type="button" data-toggle="modal" data-target=".modal-comming" class="btn btn-default"><?=trans('land.reg');?></button></a> --><a href="#" class="button-link">
                <button type="button" style="font-size: 13px;" data-toggle="modal" data-target=".modal-comming" class="btn btn-primary"><?=trans('land.input2');?></button></a></li>
            <li><a class="link" href="/update_lang?lang=en">English</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid background-header-cover">
      <div class="row">
        <div class="col-md-12 title-background-header">
          <h1><?=trans('land.header_title');?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 logo"><img src="{{ asset('landing/img/logo_white.svg') }}"></div>
      </div>
      <div class="row">
        <div class="col-md-12 button-background-header">
          <button type="button" style="font-size:18px; font-family: 'Lato'; padding: 15px 60px;" data-toggle="modal" data-target=".modal-comming" class="btn btn-danger"><?=trans('land.home_button');?></button>
        </div>
      </div>
    </div>
    <div class="container-fluid background-header"></div>
    <div class="container-fluid block_1">
    <div class="container">
            <div class="row">
        <div id="about_us" class="col-md-12">
          <h2 class="titleBlockInverse"><?=trans('land.block1_title');?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="infoBlock">
            <div class="imageInfoBlock"><img src="{{ asset('landing/img/b1_e1.svg') }}"></div>
            <div class="titleInfoBlockInverse"><?=trans('land.block1_elem1_title');?></div>
            <div class="descriptionInfoBlockInverse"><?=trans('land.block1_elem1_description');?></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="infoBlock">
            <div class="imageInfoBlock"><img src="{{ asset('landing/img/b1_e2.svg') }}"></div>
            <div class="titleInfoBlockInverse"><?=trans('land.block1_elem2_title');?></div>
            <div class="descriptionInfoBlockInverse"><?=trans('land.block1_elem2_description');?></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="infoBlock">
            <div class="imageInfoBlock"><img src="{{ asset('landing/img/b1_e3.svg') }}"></div>
            <div class="titleInfoBlockInverse"><?=trans('land.block1_elem3_title');?></div>
            <div class="descriptionInfoBlockInverse"><?=trans('land.block1_elem3_description');?></div>
          </div>
        </div>
      </div>
    </div>

    </div>
    <div class="container-fluid block_2">
    <div class="container">
            <div class="row">
        <div class="col-md-12">
          <h2 class="titleBlock"><?=trans('land.block2_title');?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="infoBlock">
            <div class="imageInfoBlock"><img src="{{ asset('landing/img/b2_e1.svg') }}" class="px150"></div>
            <div class="titleInfoBlock"><?=trans('land.block2_elem1_title');?></div>
            <div class="descriptionInfoBlock"><?=trans('land.block2_elem1_description');?></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="infoBlock">
            <div class="imageInfoBlock"><img src="{{ asset('landing/img/b2_e2.svg') }}" class="px150"></div>
            <div class="titleInfoBlock"><?=trans('land.block2_elem2_title');?></div>
            <div class="descriptionInfoBlock"><?=trans('land.block2_elem2_description');?></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="infoBlock">
            <div class="imageInfoBlock"><img src="{{ asset('landing/img/b2_e3.svg') }}" class="px150"></div>
            <div class="titleInfoBlock inverseTitleInfoBlock"><?=trans('land.block2_elem3_title');?></div>
            <div class="descriptionInfoBlock"><?=trans('land.block2_elem3_description');?></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="infoBlock">
            <div class="imageInfoBlock"><img src="{{ asset('landing/img/b2_e4.svg') }}" class="px150"></div>
            <div class="titleInfoBlock"><?=trans('land.block2_elem4_title');?></div>
            <div class="descriptionInfoBlock"><?=trans('land.block2_elem4_description');?></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="infoBlock">
            <div class="imageInfoBlock"><img src="{{ asset('landing/img/b2_e5.svg') }}" class="px150"></div>
            <div class="titleInfoBlock"><?=trans('land.block2_elem5_title');?></div>
            <div class="descriptionInfoBlock"><?=trans('land.block2_elem5_description');?></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="infoBlock">
            <div class="imageInfoBlock"><img src="{{ asset('landing/img/b2_e6.svg') }}" class="px150"></div>
            <div class="titleInfoBlock"><?=trans('land.block2_elem6_title');?></div>
            <div class="descriptionInfoBlock"><?=trans('land.block2_elem6_description');?></div>
          </div>
        </div>
      </div>
    </div>

    </div>
    <div class="container-fluid block_3">
    <div class="container">
            <div class="row">
        <div id="start" class="col-md-12">
          <h2 class="titleBlock"><?=trans('land.block3_title');?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-md-offset-05">
          <div class="infoBlock2">
            <div class="imageInfoBlock2"><img src="{{ asset('landing/img/b3_e1.svg') }}"></div>
            <div class="titleInfoBlock2"><?=trans('land.block3_elem1_title');?></div>
            <div class="descriptionInfoBlock2"><?=trans('land.block3_elem1_description');?></div>
          </div>
        </div>
        <div class="col-md-1 nextIconT">
          <div class="nextIcon"></div>
        </div>
        <div class="col-md-2">
          <div class="infoBlock2">
            <div class="imageInfoBlock2"><img src="{{ asset('landing/img/b3_e2.svg') }}"></div>
            <div class="titleInfoBlock2"><?=trans('land.block3_elem2_title');?></div>
            <div class="descriptionInfoBlock2"><?=trans('land.block3_elem2_description');?></div>
          </div>
        </div>
        <div class="col-md-1 nextIconT">
          <div class="nextIcon"></div>
        </div>
        <div class="col-md-2">
          <div class="infoBlock2">
            <div class="imageInfoBlock2"><img src="{{ asset('landing/img/b3_e3.svg') }}"></div>
            <div class="titleInfoBlock2"><?=trans('land.block3_elem3_title');?></div>
            <div class="descriptionInfoBlock2"><?=trans('land.block3_elem3_description');?></div>
          </div>
        </div>
        <div class="col-md-1 nextIconT">
          <div class="nextIcon"></div>
        </div>
        <div class="col-md-2">
          <div class="infoBlock2">
            <div class="imageInfoBlock2"><img src="{{ asset('landing/img/b3_e4.svg') }}"></div>
            <div class="titleInfoBlock2"><?=trans('land.block3_elem4_title');?></div>
            <div class="descriptionInfoBlock2"><?=trans('land.block3_elem4_description');?></div>
          </div>
        </div>
      </div>
    </div>

    </div>
    <div style="padding-bottom:150px;" class="container-fluid block_4">
    <div class="container">
            <div class="row">
        <div id="goals" class="col-md-11 col-md-offset-1">
          <h2 style="" class="titleBlock left_text"><?=trans('land.block4_title');?><img src="{{ asset('landing/img/redo.svg') }}" style="margin-left:40px;margin-top:-70px;" class="redo"></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <div id="myCarousel" data-ride="carousel" data-interval="5000" class="carousel slide carousel-fade">
            <ul class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"><img src="{{ asset('landing/img/ico_1.svg') }}" class="not_active"><img src="{{ asset('landing/img/ico_1_active.svg') }}" class="carousel_active_elem"></li>
              <li data-target="#myCarousel" data-slide-to="1"><img src="{{ asset('landing/img/ico_2.svg') }}" class="not_active"><img src="{{ asset('landing/img/ico_2_active.svg') }}" class="carousel_active_elem"></li>
              <li data-target="#myCarousel" data-slide-to="2"><img src="{{ asset('landing/img/ico_3.svg') }}" class="not_active"><img src="{{ asset('landing/img/ico_3_active.svg') }}" class="carousel_active_elem"></li>
              <li data-target="#myCarousel" data-slide-to="3"><img src="{{ asset('landing/img/ico_4.svg') }}" class="not_active"><img src="{{ asset('landing/img/ico_4_active.svg') }}" class="carousel_active_elem"></li>
              <li data-target="#myCarousel" data-slide-to="4"><img src="{{ asset('landing/img/ico_5.svg') }}" class="not_active"><img src="{{ asset('landing/img/ico_5_active.svg') }}" class="carousel_active_elem"></li>
              <li data-target="#myCarousel" data-slide-to="5"><img src="{{ asset('landing/img/ico_6.svg') }}" class="not_active"><img src="{{ asset('landing/img/ico_6_active.svg') }}" class="carousel_active_elem"></li>
            </ul>
            <div class="carousel-inner">
              <div class="item active"><img src="{{ asset('landing/img/slide_1.svg') }}">
                <div class="container">
                  <div class="carousel-caption">
                    <h1><?=trans('land.block4_slide1_title');?></h1>
                    <div class="cont"><?=trans('land.block4_slide1_description');?></div>
                  </div>
                </div>
              </div>
              <div class="item"><img src="{{ asset('landing/img/slide_2.svg') }}">
                <div class="container">
                  <div class="carousel-caption">
                    <h1><?=trans('land.block4_slide2_title');?></h1>
                    <div class="cont">
                      <?=trans('land.block4_slide2_description');?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item"><img src="{{ asset('landing/img/slide_3.svg') }}">
                <div class="container">
                  <div class="carousel-caption">
                    <h1><?=trans('land.block4_slide3_title');?></h1>
                    <div class="cont"><?=trans('land.block4_slide3_description');?></div>
                  </div>
                </div>
              </div>
              <div class="item"><img src="{{ asset('landing/img/slide_4.svg') }}">
                <div class="container">
                  <div class="carousel-caption">
                    <h1><?=trans('land.block4_slide4_title');?></h1>
                    <div class="cont">
                      <?=trans('land.block4_slide4_description');?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item"><img src="{{ asset('landing/img/slide_5.svg') }}">
                <div class="container">
                  <div class="carousel-caption">
                    <h1><?=trans('land.block4_slide5_title');?></h1>
                    <div class="cont">
    <?=trans('land.block4_slide5_description');?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item"><img src="{{ asset('landing/img/slide_6.svg') }}">
                <div class="container">
                  <div class="carousel-caption">
                    <h1><?=trans('land.block4_slide6_title');?></h1>
                    <div class="cont"><?=trans('land.block4_slide6_description');?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
    <div class="container-fluid block_5">
    <div class="container">
            <div class="row">
        <div id="prices" class="col-md-12">
          <h2 style="margin-bottom: 0px;" class="titleBlockInverse"><?=trans('land.block5_title');?></h2>
          <h3 class="podTitleBlockInverse"><?=trans('land.block5_description');?></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 price-block-owner">
          <div class="price-block">
            <div class="price-image"><img src="{{ asset('landing/img/b5_e1.svg') }}"></div>
            <div class="price-title"><?=trans('land.block5_price1');?></div>
            <div class="price-sum"><?=trans("land.price_30");?> </div>
            <div class="price-sum-minute"><?=trans("land.valute");?> / 30 <?=trans('land.block5_min');?></div>
            <div class="price-minute"></div>
            <button type="button" data-toggle="modal" data-target=".modal-comming" style="padding-left:0px;padding-right:0px;font-size:12px;width:100%;" class="btn btn-primary price-button"><?=trans('land.block5_balance');?></button>
          </div>
        </div>
        <div class="col-md-4 price-block-owner">
          <div class="price-block inverse">
            <div class="price-image"><img src="{{ asset('landing/img/b5_e2.svg') }}"></div>
            <div class="price-title"><?=trans('land.block5_price2');?></div>
            <div class="price-sum inverse"><?=trans("land.price_60");?></div>
            <div class="price-sum-minute"><?=trans("land.valute");?> / 60 <?=trans('land.block5_min');?></div>
            <div class="price-minute"></div>
            <button type="button" data-toggle="modal" data-target=".modal-comming" style="padding-left:0px;padding-right:0px;font-size:12px;width:100%;" class="btn btn-warning price-button"><?=trans('land.block5_balance');?></button>
          </div>
        </div>
        <div class="col-md-4 price-block-owner">
          <div class="price-block">
            <div class="price-image"><img src="{{ asset('landing/img/b5_e3.svg') }}"></div>
            <div class="price-title"><?=trans('land.block5_price3');?></div>
            <div class="price-sum"><?=trans("land.price_120");?></div>
            <div class="price-sum-minute"><?=trans("land.valute");?> / 120 <?=trans('land.block5_min');?></div>
            <div class="price-minute"></div>
            <button type="button" data-toggle="modal" data-target=".modal-comming" style="padding-left:0px;padding-right:0px;font-size:12px;width:100%;" class="btn btn-primary price-button"><?=trans('land.block5_balance');?></button>
          </div>
        </div>
        <style>
            .price-sum-minute{
              font-size: 16px;
            }
        </style>
      </div>
    </div>

    </div>
    <div class="container-fluid block_2">
    <div class="container">
            <div class="row">
        <div id="subscribe" class="col-md-12">
          <h2 style="margin-bottom: 0px;" class="titleBlock"><?=trans('land.block6_title');?></h2>
          <h3 style="margin-bottom: 80px;color:#fff;" class="podTitleBlockInverse"><?=trans('land.block6_description');?></h3>
        </div>
      </div>
      <div class="row">
        <div style="background:#fff;border-radius:50px;padding:20px;" class="col-sm-12  col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 col-xs-12">
          <div style="b" class="title-subscribe"><?=trans('land.block6_minute_day');?></div>
          <div class="row min_circle">
            <div c="1" class="col-xs-2 col-xs-offset-05 circle active">15</div>
            <div l="1" class="col-xs-1 line"></div>
            <div c="2" class="col-xs-2 circle">30</div>
            <div l="2" class="col-xs-1 line"></div>
            <div c="3" class="col-xs-2 circle">60</div>
            <div l="3" class="col-xs-1 line"></div>
            <div c="4" class="col-xs-2 circle">120</div>
          </div>
          <div class="title-subscribe"><?=trans('land.block6_day_week');?></div>
          <div class="row week_circle">
            <div c="1" class="col-xs-2 col-xs-offset-05 circle active">2</div>
            <div l="1" class="col-xs-1 line"></div>
            <div c="2" class="col-xs-2 circle">3</div>
            <div l="2" class="col-xs-1 line"></div>
            <div c="3" class="col-xs-2 circle">5</div>
            <div l="3" class="col-xs-1 line"></div>
            <div c="4" class="col-xs-2 circle">7</div>
          </div>
          <div style="text-align:center;margin-top:40px;">
            <div class="info-data"><br><span class="min-day">15</span> <?=trans('land.block6_min_day');?> | <span class="day_week">3</span> <?=trans('land.block6_dayweek_in');?> <span class="days_d">30</span> <?=trans('land.block6_days');?></div><br>
            <div class="payment-data"><?=trans('land.to_pay');?> <span class="payment_num"><?=trans("land.month_15_2");?></span><span class="currency"> <?=trans('land.rub');?></span></div><br>
            <button type="button" data-toggle="modal" data-target=".modal-comming" style="padding: 15px 70px; margin-top:50px;" class="btn btn-danger"><?=trans('land.buy');?></button>
          </div>
        </div>
      </div>
    </div>

    </div>

    <div id="modal-comming" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal modal-comming fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><img src="{{ asset('landing/img/close.svg') }}"></button>
            <h4 id="modal-rigister-title" style="font-size: 19px;" class="modal-title"><?=trans('land.comming');?></h4>
          </div>
          <div class="modal-body">

    
                <form role="form" style="margin-top:0px;">
                  <div style="margin-top:0px;" class="form-group">

                    <input id="auth-teacher-email" type="email" placeholder="" class="input-email form-control">
                  </div>
                  <div class="form-group">
                           <button type="button" data-dismiss="modal" class="btn btn-danger"><?=trans('land.follow');?></button>
                  </div>
                     <div class="form-group">
                    <div class="social-links">
                      <div class="social-elems"><a href="#"><img src="{{ asset('landing/img/vk.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/fb.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/google_plus.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/mail_ru.svg') }}"></a></div>
                    </div>
                  </div>
                </form>
              
          
          </div>

        </div>
      </div>
    </div>



    <div id="modal-auth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal modal-auth fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><img src="{{ asset('landing/img/close.svg') }}"></button>
            <h4 id="modal-rigister-title" class="modal-title"><?=trans('land.input');?></h4>
          </div>
          <div class="modal-body">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#auth-student" data-toggle="tab" class="left-tab"><img src="{{ asset('landing/img/student.svg') }}"><span><?=trans('land.student');?></span></a></li>
              <li><a href="#auth-teacher" data-toggle="tab" class="right-tab"><img src="{{ asset('landing/img/teacher.svg') }}"><span><?=trans('land.teacher');?></span></a></li>
            </ul>
            <div class="tab-content">
              <div id="auth-student" class="tab-pane active">
                <form role="form" style="margin-top:50px;">
                  <div class="form-group">
                    <label for="auth-student-email"><?=trans('land.email');?></label>
                    <input id="auth-student-email" type="email" placeholder="" class="input-email form-control">
                  </div>
                  <div class="form-group">
                    <label for="auth-student-password"><?=trans('land.password');?></label>
                    <input id="auth-student-password" type="password" placeholder="" class="input-password form-control">
                    <div class="social-links">
                      <div class="social-links-title"><?=trans('land.social');?></div>
                      <div class="social-elems"><a href="#"><img src="{{ asset('landing/img/vk.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/fb.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/google_plus.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/mail_ru.svg') }}"></a></div>
                    </div>
                  </div>
                </form>
              </div>
              <div id="auth-teacher" class="tab-pane">
                <form role="form" style="margin-top:50px;">
                  <div class="form-group">
                    <label for="auth-teacher-email"><?=trans('land.email');?></label>
                    <input id="auth-teacher-email" type="email" placeholder="" class="input-email form-control">
                  </div>
                  <div class="form-group">
                    <label for="auth-teacher-password"><?=trans('land.password');?></label>
                    <input id="auth-teacher-password" type="password" placeholder="" class="input-password form-control">
                    <div class="social-links">
                      <div class="social-links-title"><?=trans('land.social');?></div>
                      <div class="social-elems"><a href="#"><img src="{{ asset('landing/img/vk.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/fb.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/google_plus.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/mail_ru.svg') }}"></a></div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-danger"><?=trans('land.input');?></button>
          </div>
        </div>
      </div>
    </div>
    <div id="modal-rigster" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal modal-register fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><img src="{{ asset('landing/img/close.svg') }}"></button>
            <h4 id="modal-rigister-title" class="modal-title"><?=trans('land.register');?></h4>
          </div>
          <div class="modal-body">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#register-student" data-toggle="tab" class="left-tab"><img src="{{ asset('landing/img/student.svg') }}"><span><?=trans('land.student');?></span></a></li>
              <li><a href="#register-teacher" data-toggle="tab" class="right-tab"><img src="{{ asset('landing/img/teacher.svg') }}"><span><?=trans('land.teacher');?></span></a></li>
            </ul>
            <div class="tab-content">
              <div id="register-student" class="tab-pane active">
                <div style="margin-top:20px;" class="social-links">
                  <div class="social-links-title"><?=trans('land.social');?></div>
                  <div class="social-elems"><a href="#"><img src="{{ asset('landing/img/vk.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/fb.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/google_plus.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/mail_ru.svg') }}"></a></div>
                </div>
                <form role="form" style="margin-top:50px;">
                  <div class="form-group">
                    <label for="register-student-email"><?=trans('land.email');?></label>
                    <input id="register-student-email" type="email" placeholder="" class="input-email form-control">
                  </div>
                  <div class="form-group">
                    <label for="register-student-name"><?=trans('land.nickname');?></label>
                    <input id="register-student-name" type="text" placeholder="" class="input-guest form-control">
                  </div>
                  <div class="form-group">
                    <label for="register-student-password"><?=trans('land.password');?></label>
                    <input id="register-student-password" type="password" placeholder="" class="input-password form-control">
                  </div>
                  <div class="form-group">
                    <label for="register-student-password-repeat"><?=trans('land.repeat');?></label>
                    <input id="register-student-password-repeat" type="password" placeholder="" class="input-password form-control">
                  </div>
                </form>
              </div>
              <div id="register-teacher" class="tab-pane">
                <div style="margin-top:20px;" class="social-links">
                  <div class="social-links-title"><?=trans('land.social');?></div>
                  <div class="social-elems"><a href="#"><img src="{{ asset('landing/img/vk.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/fb.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/google_plus.svg') }}"></a><a href="#"><img src="{{ asset('landing/img/mail_ru.svg') }}"></a></div>
                </div>
                <form role="form" style="margin-top:50px;">
                  <div class="form-group">
                    <label for="register-teacher-email"><?=trans('land.email');?></label>
                    <input id="register-teacher-email" type="email" placeholder="" class="input-email form-control">
                  </div>
                  <div class="form-group">
                    <label for="register-teacher-name"><?=trans('land.nickname');?></label>
                    <input id="register-teacher-name" type="text" placeholder="" class="input-guest form-control">
                  </div>
                  <div class="form-group">
                    <label for="register-teacher-password"><?=trans('land.password');?></label>
                    <input id="register-teacher-password" type="password" placeholder="" class="input-password form-control">
                  </div>
                  <div class="form-group">
                    <label for="register-teacher-password-repeat"><?=trans('land.repeat');?></label>
                    <input id="register-teacher-password-repeat" type="password" placeholder="" class="input-password form-control">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-danger"><?=trans('land.reg');?></button>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid footer">
      <div class="row">
        <div style="text-align:center;" class="col-md-4">
          <ul class="footer_menu">
            <li><a href=".about_us"><?=trans('land.footer_menu_1');?></a></li>
            <li><a href=".start"><?=trans('land.footer_menu_2');?></a></li>
            <li><a href=".goals"><?=trans('land.footer_menu_3');?></a></li>
            <li><a href=".prices"><?=trans('land.footer_menu_4');?></a></li>
            <li><a href=".subscribe"><?=trans('land.menu_5');?></a></li>
          </ul>
        </div>
        <div style="text-align:center;margin-top: 50px" class="col-md-4 hidden-lg visible-xs visible-sm visible-md">
          <ul class="social_links">
            <li><a><img src="{{ asset('landing/img/vk.svg') }}"></a></li>
            <li><a><img src="{{ asset('landing/img/fb.svg') }}"></a></li>
            <li><a><img src="{{ asset('landing/img/twitter.svg') }}"></a></li>
            <li><a><img src="{{ asset('landing/img/instagram.svg') }}"></a></li>
          </ul>
        </div>
        <div style="text-align:center;" class="col-md-4 padding-top-base">
          <div class="copyright-block"><span style="padding-right:10px;"><?=trans('land.contact_us');?> </span><a href="mailto: info@blubu.me" class="copyright_link">info@blubu.me</a><br><span style="font-size:15px;display:inline-block;margin-top:20px;">© <?=date("Y");?> Blubu 	</span></div>
        </div>
        <div style="text-align:center;" class="col-md-4 visible-lg hidden-xs hidden-sm hidden-md">
          <ul class="social_links">
            <li><a><img src="{{ asset('landing/img/vk.svg') }}"></a></li>
            <li><a><img src="{{ asset('landing/img/fb.svg') }}"></a></li>
            <li><a><img src="{{ asset('landing/img/twitter.svg') }}"></a></li>
            <li><a><img src="{{ asset('landing/img/instagram.svg') }}"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <style>
      .modal-open{
        padding-right: 0px !important;
        overflow: auto;
      }
    </style>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="{{ asset('landing/js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed-->
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/js/app.js') }}"></script>
    <script>

    </script>
  </body>
</html>