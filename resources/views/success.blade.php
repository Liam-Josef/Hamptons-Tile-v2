<x-home-master>

    @foreach($websites as $website)
    @section('square-logo')
        <img src="{{asset('storage/'. $website->logo_square_1)}}" alt="{{$website->name}}" height="30px" width="auto">
    @endsection

    @section('favicon')
        <link rel="icon" type="image/x-icon" href="{{asset('storage/' . $website->favicon)}}">
    @endsection

    @section('navbar-brand')
        {{$website->name}}
    @endsection

    @section('navbar-logo')
        <img src="{{asset('storage/'. $website->logo_horizontal_1)}}" alt="{{$website->name}}" height="25px" width="auto">
    @endsection
    @endforeach


    @section('styles')
            <style type="text/css">
                @media screen and (max-width: 790px) {
                    html, body{
                        height: 100vh;
                    }
                }
                html, body{
                    height: 100%;
                }
            </style>
    @endsection

    @section('xrap')
        <div class="xr_ap" id="xr_bph" style="width: 100%; height: 100%; left: 0px; top: 0px; overflow: hidden; position: fixed;">
            <div class="xr_ar xr_mvp_12 xr_mvpo " style="width: 100%; height: 100%;">
                <div class="xr_pbd"></div>

            </div>
        </div>
    @endsection

    @section('content')

            <div id="xr_xr" class="xr_noc" style="position:relative; text-align:left; margin:0 auto;" onmousedown="xr_mm(event);">
                <!--<![endif]-->
                <!--[if lt IE 9]>
                <div class="xr_ap" id="xr_xr" style="width: 1060px; height: 1971px; left:50%; margin-left: -530px; text-align: left; top:0px;">
                <![endif]-->
                <script>var xr_xr=document.getElementById("xr_xr");xr_rxc();</script>

                <div class="xr_td" id="xr_td">
                    <div class="xr_mvp_11 xr_bgn_10_0_0" id="xr_mvp_11" style="position:absolute; width:1060px; height:1805px;">
                        <div class="xr_ap xr_xri_" style="width: 1060px; height: 1805px;">
                            <div class="xr_trigo_xr_ce9" style="position:absolute;left:1010px;top:1016px;width:105px;height:789px;z-index:-1;"></div>
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/10123.png')}}" style="left:17px;top:-8px;width:1026px;height:1575px;" title="" />
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/8341.jpg')}}" style="left:50px;top:25px;width:960px;height:151px;" title="" />
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/9646.png')}}" style="left:50px;top:25px;width:960px;height:151px;" title="" />
                            <img alt="" class="xr_ap" id="success" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland.jpg')}}" style="left:50px;top:548px;width:960px;height:22px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | GROUTING | CAULKING | REPAIR" /> <!--[if lt IE 9]>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10758.png')}}" alt="" title="" style="left:72px;top:597px;width:927px;height:911px;"/>
                        <![endif]-->
                            <div class="xr_noreset " id="slide1" style="position: absolute; left:50px;top:200px;width:961px;height:349px;">
                                <div id="wowslider-container1">
                                    <div class="ws_images">
                                        <ul>
                                            <li><img alt="slide1" id="wows1_0" src="{{asset('storage/data1/images/slide1.jpg')}}" title="slide1" /></li>
                                            <li><img alt="slide2" id="wows1_1" src="{{asset('storage/data1/images/slide2.jpg')}}" title="slide2" /></li>
                                            <li><img alt="slide3" id="wows1_2" src="{{asset('storage/data1/images/slide3.jpg')}}" title="slide3" /></li>
                                            <li><img alt="slide4" id="wows1_3" src="{{asset('storage/data1/images/slide4.jpg')}}" title="slide4" /></li>
                                            <li><img alt="slide5" id="wows1_4" src="{{asset('storage/data1/images/slide5.jpg')}}" title="slide5" /></li>
                                        </ul>
                                    </div>

                                    <div class="ws_bullets">
                                        <div><a href="#" title="slide1"><span>1</span></a>
                                            <a href="#" title="slide2"><span>2</span></a>
                                            <a href="#" title="slide3"><span>3</span></a>
                                            <a href="#" title="slide4"><span>4</span></a>
                                            <a href="#" title="slide5"><span>5</span></a>
                                        </div>
                                    </div>

                                    <div class="ws_shadow"></div>
                                </div>
                                <script type="text/javascript" src="{{asset('storage/engine1/wowslider.js')}}"></script>
                                <script type="text/javascript" src="{{asset('storage/engine1/script.js')}}"></script></div>
                        <!--[if lt IE 9]>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10579.png')}}" alt="" title="" style="left:752px;top:616px;width:231px;height:764px;"/>
                        <![endif]-->

                            <div class="xr_txt Normal_text xr_s1" style="position: absolute; left:341px; top:1518px; width:379px; height:10px;"><span class="xr_tl Normal_text xr_s1" style="top: -11.77px;">Copyright &copy; 2024 Hampton&rsquo;s Tile and Grout - All Rights Reserved</span></div>
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/tile_installation_portland.png')}}" style="left:145px;top:651px;width:538px;height:3px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | PORTLAND OR | VANCOUVER WA" />
                            <div class="xr_txt Normal_text xr_s2" style="position: absolute; left:863px; top:653px; width:120px; height:10px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING AND MUCH MORE"><span class="xr_tc Normal_text xr_s2" style="left: -67.17px; top: -21.94px; width: 134px;">SERVICES</span></div>
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/8813.png')}}" style="left:145px;top:1418px;width:777px;height:2px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | GROUTING | CAULKING | REPAIR" /> <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland.jpg')}}" style="left:50px;top:177px;width:960px;height:22px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | GROUTING | CAULKING | REPAIR" /> <a href="javascript:xr_top();" onclick="return(xr_nn());"> <img alt="" class="xr_ap" onmousemove="xr_mo(this,95,event)" src="{{asset('storage/index_htm_files/10128.png')}}" style="left:503px;top:1477px;width:54px;height:6px;" title="" /> </a> <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/8713.png')}}" style="left:45px;top:569px;width:970px;height:31px;" title="" />
                            <div class="xr_txt Normal_text xr_s0" style="position: absolute; left:351px; top:638px; width:123px; height:10px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | PORTLAND OR | VANCOUVER WA"><span class="xr_tl Normal_text xr_s0" style="top: -16.86px;">Message Sent</span></div>

                            <div class="xr_txt xr_s1" style="position: absolute; left:389px; top:1443px; width:279px; height:10px;"><span class="xr_tl xr_s1" style="top: -11.77px;">
                                <a href="{{route('index')}}" onclick="return(xr_nn());" onmousemove="xr_mo(this,95)">HOME </a> | <a href="{{route('before_after')}}" onclick="return(xr_nn());" onmousemove="xr_mo(this,95)">BEFORE &amp; AFTER</a> | <a href="{{route('testimonials')}}" onclick="return(xr_nn());" onmousemove="xr_mo(this,95)">TESTIMONIALS</a></span>
                            </div>
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/10766.jpg')}}" style="left:157px;top:860px;width:525px;height:385px;" title="" />
                            <div class="xr_txt Normal_text xr_s12" style="position: absolute; left:96px; top:687px; width:636px; height:10px;"><span class="xr_tc Normal_text xr_s20" style="left: 123.14px; top: -16.29px; width: 390px;">Your message has been successfully sent to</span> <span class="xr_tc Normal_text xr_s22" style="left: 94.45px; top: 3.81px; width: 447px;">Hampton&rsquo;s Tile &amp; Grout Restoration</span> <span class="xr_tc Normal_text xr_s20" style="left: 193.77px; top: 30.63px; width: 249px;">Thank you for contacting us.</span> <span class="xr_tc Normal_text xr_s20" style="left: 6.49px; top: 50.73px; width: 623px;">We will be in touch with you as soon as possible regarding your inquiry.</span></div>
                            <a href="{{route('index')}}" onclick="return(xr_nn());"> <img alt="" class="xr_ap" onmousemove="xr_mo(this,95,event)" src="{{asset('storage/index_htm_files/8714.png')}}" style="left:73px;top:578px;width:50px;height:14px;" title="" />
                                <img alt="" class="xr_ap xr_ro xr_ro0 xr_tt2" onmousemove="xr_mo(this,95)" src="{{asset('storage/index_htm_files/8724.png')}}" style="left:73px;top:578px;width:50px;height:14px;" title="" />
                            </a>
                            <a href="{{route('testimonials')}}" onclick="return(xr_nn());"> <img alt="" class="xr_ap" onmousemove="xr_mo(this,95,event)" src="{{asset('storage/index_htm_files/8715.png')}}" style="left:330px;top:578px;width:126px;height:14px;" title="" />
                                <img alt="" class="xr_ap xr_ro xr_ro0 xr_tt2" onmousemove="xr_mo(this,95)" src="{{asset('storage/index_htm_files/8726.png')}}" style="left:330px;top:578px;width:126px;height:14px;" title="" />
                            </a>
                            <a href="{{route('before_after')}}" onclick="return(xr_nn());">
                                <img alt="" class="xr_ap" onmousemove="xr_mo(this,95,event)" src="{{asset('storage/index_htm_files/8716.png')}}" style="left:152px;top:578px;width:149px;height:14px;" title="" />
                                <img alt="" class="xr_ap xr_ro xr_ro0 xr_tt2" onmousemove="xr_mo(this,95)" src="{{asset('storage/index_htm_files/8725.png')}}" style="left:152px;top:578px;width:149px;height:14px;" title="" />
                            </a>
                            <a href="{{route('contact')}}" onclick="return(xr_nn());"> <img alt="" class="xr_ap" onmousemove="xr_mo(this,95,event)" src="{{asset('storage/index_htm_files/8717.png')}}" style="left:489px;top:578px;width:82px;height:14px;" title="" />
                                <img alt="" class="xr_ap xr_ro xr_ro0 xr_tt2" onmousemove="xr_mo(this,95)" src="{{asset('storage/index_htm_files/8727.png')}}" style="left:489px;top:578px;width:82px;height:14px;" title="" />
                            </a>
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/8709.png')}}" style="left:819px;top:55px;width:147px;height:18px;" title="CALL NOW" />
                            <a href="https://www.facebook.com/hamptonstileandgrout" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());">
                                <img class="xr_ap xr_1as3 xr_1a7" id="facebook2" src="{{asset('storage/index_htm_files/8710.png')}}" alt="" title="&quot;LIKE&quot; US ON FACEBOOK" onmousemove="xr_mo(this,47,event)" style="left:903px;top:141px;width:29px;height:28px;"/>
                            </a>
                            <a href="https://www.instagram.com/hamptonstileandgrout/" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());">
                                <img class="xr_ap xr_1as3 xr_1a7" id="instagram2" src="{{asset('storage/index_htm_files/insta.png')}}" alt="" title="&quot;LIKE&quot; US ON INSTAGRAM" onmousemove="xr_mo(this,47,event)" style="left:936px;top:141px;width:29px;height:28px;"/>
                            </a>
                            <a href="https://www.google.com/search?sxsrf=ALeKk01hDcqrDIBGCnve859LOJSoamlFww%3A1598482093149&source=hp&ei=reZGX4HJBrS90PEPweWxmAo&iflsig=AINFCbYAAAAAX0b0vRaqjDMTxWsAA0pe91MqGPpeVPIg&q=hampton+tile+and+grout&gs_ssp=eJzj4tVP1zc0TC42Tjc2Ms8xYLRSNagwNbE0NTcxSkqyTE01MEsztzKoSDU0MExOTDQ0NUwyTTI3svQSy0jMLSjJz1MoycxJVUjMS1FIL8ovLQEAStkXJg&oq=hampton&gs_lcp=CgZwc3ktYWIQARgAMg0ILhDHARCvARAnEJMCMgQIABBDMgoILhDHARCvARBDMgQIABBDMgQIABBDMgQILhBDMgQIABBDMgoILhDHARCvARBDMgQIABBDMgoILhDHARCvARBDOgcIIxDqAhAnOgcILhDqAhAnOgcILhAnEJMCOgQILhAnOgQIIxAnOgUIABCRAjoNCC4QsQMQxwEQowIQQzoLCC4QsQMQxwEQowI6AggAOggIABCxAxCDAToICC4QxwEQowI6CgguEMcBEK8BECc6CwguEMcBEK8BEJECUJNFWLhOYO9caAFwAHgAgAF7iAG1BZIBAzMuNJgBAKABAaoBB2d3cy13aXqwAQo&sclient=psy-ab#lrd=0x5495742bb9ee06f7:0xe101caa151b5b729,1,,," target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());">
                                <img class="xr_ap xr_1as3 xr_1a7" src="{{asset('storage/index_htm_files/10593.png')}}" alt="" title="VISIT OUR GOOGLE BUSINESS PAGE & LEAVE A REVIEW" onmousemove="xr_mo(this,47,event)" style="left:969px;top:140px;width:34px;height:33px;"/>
                            </a>
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland.png')}}" style="left:820px;top:79px;width:146px;height:14px;" title="CALL NOW FOR A FREE ESTIMATE" />
                            <div class="xr_txt Normal_text xr_s6" style="position: absolute; left:820px; top:105px; width:145px; height:10px;"><span class="xr_tl Normal_text xr_s6" style="top: -9.79px;">Licensed Bonded Insured</span></div>

                            <div class="xr_txt Normal_text xr_s6" style="position: absolute; left:893px; top:118px; width:67px; height:10px;"><span class="xr_tc Normal_text xr_s6" style="left: -37.36px; top: -9.79px; width: 75px;">CCB# 224967</span></div>
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/8721.png')}}" style="left:868px;top:99px;width:4px;height:4px;" title="" /> <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/8722.png')}}" style="left:922px;top:99px;width:4px;height:4px;" title="" /> <!--[if lt IE 9]>
                    <img class="xr_ap" src="{{asset('storage/index_htm_files/10580.png')}}" alt="" title="" style="left:763px;top:669px;width:211px;height:704px;"/>
                    <![endif]-->
                            <div class="xr_txt Normal_text xr_s3" style="position: absolute; left:765px; top:775px; width:173px; height:10px;"><span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: -16.86px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: -16.86px;">Bathrooms</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 3.95px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 3.95px;">Kitchens</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 24.75px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 24.75px;">Showers</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 45.56px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 45.56px;">Floors</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 66.36px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 66.36px;">Walls</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 87.17px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 87.17px;">Back Splashes</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 107.97px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 107.97px;">Tub Surrounds</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 128.78px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 128.78px;">Counters</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 149.58px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 149.58px;">Fireplaces</span></div>

                            <div class="xr_txt Normal_text xr_s0" style="position: absolute; left:777px; top:977px; width:56px; height:10px;"><span class="xr_tl Normal_text xr_s0" style="top: -16.86px;">ALSO:</span></div>

                            <div class="xr_txt Normal_text xr_s0" style="position: absolute; left:777px; top:702px; width:143px; height:10px;"><span class="xr_tl Normal_text xr_s0" style="top: -16.86px;">INSTALLATION, </span> <span class="xr_tl Normal_text xr_s0" style="top: 3.95px;">CLEANING &amp;</span> <span class="xr_tl Normal_text xr_s0" style="top: 24.75px;">RESTORING:</span></div>
                            <a href="{{route('index')}}" onclick="return(xr_nn());"> <img alt="TILE &amp; GROUT INSTALLATION LLC" class="xr_ap" onmousemove="xr_mo(this,95,event)" src="{{asset('storage/index_htm_files/10666.png')}}" style="left:83px;top:36px;width:446px;height:123px;" title="TILE &amp; GROUT CLEANING &amp; RESTORATION | PORTLAND | VANCOUVER" /> </a> <img alt="&amp; RESTORATION" class="xr_ap" id="LOGO:323" src="{{asset('storage/index_htm_files/10667.png')}}" style="left:264px;top:145px;width:168px;height:19px;" title="" />
                            <div class="xr_txt Normal_text xr_s3" style="position: absolute; left:765px; top:1008px; width:182px; height:10px;"><span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: -16.86px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: -16.86px;">Installation</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 3.95px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 3.95px;">Grouting</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 24.75px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 24.75px;">Caulking</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 45.56px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 45.56px;">Grout Sealing</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 66.36px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 66.36px;">Marble</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 87.17px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 87.17px;">Granite</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 107.97px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 107.97px;">Travertine</span> <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 128.78px;"><span class="Normal_text xr_s4" style="">&bull;</span></span> <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 128.78px;">Steam-Cleaning</span></div>
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/tile_and_grout_cleaning_portland_oregon.png')}}" style="left:791px;top:1169px;width:116px;height:192px;" title="TILE INSTALLATION AND MAINTENANCE - GROUT CLEANING &amp; RESTORATION | MAKE YOUR TILE LOOK AS GOOD AS NEW" />
                            <div class="xr_ap" id="xr_xo95" style="left:0; top:0; width:1060px; height:100px; visibility:hidden; z-index:3;"><a href="" onclick="return(false);" onmousedown="xr_ppir(this);"> </a></div>

                            <div class="xr_noreset " style="position: absolute; left:501px;top:1729px;width:63px;height:15px;"><script type="text/javascript">
                                    var sc_project=11114851;
                                    var sc_invisible=1;
                                    var sc_security="059122be";
                                    var scJsHost = (("https:" == document.location.protocol) ?
                                        "https://secure." : "http://www.");
                                    document.write("<sc"+"ript type='text/javascript' src='" +
                                        scJsHost+
                                        "statcounter.com/counter/counter.js'></"+"script>");
                                </script><noscript><div class="statcounter"><a title="site stats"
                                                                               href="http://statcounter.com/" target="_blank"><img
                                                class="statcounter"
                                                src="//c.statcounter.com/11114851/0/059122be/0/" alt="site
stats"></a></div></noscript></div>

                            <div class="xr_txt Normal_text xr_s7" style="position: absolute; left:861px; top:652px; width:120px; height:10px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING AND MUCH MORE"><span class="xr_tc Normal_text xr_s7" style="left: -67.17px; top: -21.94px; width: 134px;">SERVICES</span></div>
                            <img alt="" class="xr_ap" id="overlay2" src="{{asset('storage/index_htm_files/tile_and_grout_cleaning_portland_oregon-1.png')}}" style="left:823px;top:459px;width:242px;height:223px;" title="100% SATISFACTION GUARANTEED" />
                            <div id="xr_xd95"></div>
                        </div>
                    </div>

                    <div class="xr_mvp_12 xr_bgn_11_0_0 xr_mvpo" id="xr_mvp_12" style="position:absolute; width:520px; height:802px;">
                        <div class="xr_ap xr_xri_" style="width: 520px; height: 802px;"><img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/10133.png')}}" style="left:9px;top:14px;width:502px;height:564px;" title="" /> <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/8383.jpg')}}" style="left:20px;top:25px;width:480px;height:151px;" title="" /> <!--[if lt IE 9]>
                    <img class="xr_ap" src="{{asset('storage/index_htm_files/10134.png')}}" alt="" title="" style="left:31px;top:196px;width:464px;height:352px;"/>
                    <![endif]-->
                            <div class="xr_txt Normal_text xr_s0" style="position: absolute; left:260px; top:236px; width:123px; height:10px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | PORTLAND OR | VANCOUVER WA"><span class="xr_tc Normal_text xr_s0" style="left: -68.31px; top: -16.86px; width: 137px;">Message Sent</span></div>
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/8740.png')}}" style="left:115px;top:250px;width:290px;height:3px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | PORTLAND OR | VANCOUVER WA" />
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/8394.jpg')}}" style="left:20px;top:177px;width:480px;height:22px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | GROUTING | CAULKING | REPAIR" />
                            <a href="https://www.facebook.com/hamptonstileandgrout" onclick="return(xr_nn());" rel="noopener noreferrer" target="_blank">
                                <img alt="" class="xr_ap xr_1as3 xr_1a7" id="Xxr_v12_facebook2" onmousemove="xr_mo(this,103,event)" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland-5.png')}}" style="left:34px;top:144px;width:28px;height:29px;" title="VISIT OUR FACEBOOK PAGE" />
                            </a>
                            <a href="https://www.instagram.com/hamptonstileandgrout/" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());">
                                <img class="xr_ap xr_1as3 xr_1a7" id="Xxr_v8_instagram2" src="{{asset('storage/index_htm_files/insta.png')}}" alt="" title="VISIT OUR INSTAGRAM PAGE" onmousemove="xr_mo(this,71,event)" style="left:68px;top:144px;width:28px;height:29px;"/>
                            </a>
                            <a href="https://www.google.com/search?sxsrf=ALeKk01hDcqrDIBGCnve859LOJSoamlFww%3A1598482093149&amp;source=hp&amp;ei=reZGX4HJBrS90PEPweWxmAo&amp;iflsig=AINFCbYAAAAAX0b0vRaqjDMTxWsAA0pe91MqGPpeVPIg&amp;q=hampton+tile+and+grout&amp;gs_ssp=eJzj4tVP1zc0TC42Tjc2Ms8xYLRSNagwNbE0NTcxSkqyTE01MEsztzKoSDU0MExOTDQ0NUwyTTI3svQSy0jMLSjJz1MoycxJVUjMS1FIL8ovLQEAStkXJg&amp;oq=hampton&amp;gs_lcp=CgZwc3ktYWIQARgAMg0ILhDHARCvARAnEJMCMgQIABBDMgoILhDHARCvARBDMgQIABBDMgQIABBDMgQILhBDMgQIABBDMgoILhDHARCvARBDMgQIABBDMgoILhDHARCvARBDOgcIIxDqAhAnOgcILhDqAhAnOgcILhAnEJMCOgQILhAnOgQIIxAnOgUIABCRAjoNCC4QsQMQxwEQowIQQzoLCC4QsQMQxwEQowI6AggAOggIABCxAxCDAToICC4QxwEQowI6CgguEMcBEK8BECc6CwguEMcBEK8BEJECUJNFWLhOYO9caAFwAHgAgAF7iAG1BZIBAzMuNJgBAKABAaoBB2d3cy13aXqwAQo&amp;sclient=psy-ab#lrd=0x5495742bb9ee06f7:0xe101caa151b5b729,1,,," onclick="return(xr_nn());" rel="noopener noreferrer" target="_blank"> <img alt="" class="xr_ap xr_1as3 xr_1a7" onmousemove="xr_mo(this,103,event)" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland-6.png')}}" style="left:456px;top:143px;width:33px;height:33px;" title="VISIT OUR GOOGLE BUSINESS PAGE &amp; LEAVE A REVIEW" /> </a><a href="http://www.aartvarkgraphics.com" onclick="return(xr_nn());" rel="noopener noreferrer" target="_blank">&nbsp;</a>

                            <div class="xr_txt Normal_text xr_s1" style="position: absolute; left:61px; top:556px; width:379px; height:10px;"><span class="xr_tl Normal_text xr_s1" style="top: -11.77px;">Copyright &copy; 2024 Hampton&rsquo;s Tile and Grout - All Rights Reserved</span></div>
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/9490.png')}}" style="left:115px;top:470px;width:293px;height:3px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | GROUTING | CAULKING | REPAIR" /> <a href="javascript:xr_top();" onclick="return(xr_nn());"> <img alt="" class="xr_ap" onmousemove="xr_mo(this,103,event)" src="{{asset('storage/index_htm_files/10137.png')}}" style="left:233px;top:523px;width:54px;height:6px;" title="" /> </a>

                            <div class="xr_txt Normal_text xr_s12" style="position: absolute; left:34px; top:288px; width:451px; height:10px;"><span class="xr_tc Normal_text xr_s20" style="left: 30.61px; top: -16.29px; width: 390px;">Your message has been successfully sent to</span> <span class="xr_tc Normal_text xr_s22" style="left: 1.92px; top: 3.81px; width: 447px;">Hampton&rsquo;s Tile &amp; Grout Restoration</span> <span class="xr_tc Normal_text xr_s20" style="left: 101.24px; top: 30.63px; width: 249px;">Thank you for contacting us.</span> <span class="xr_tc Normal_text xr_s20" style="left: 14.23px; top: 50.73px; width: 428px;">We will be in touch with you as soon as possible </span> <span class="xr_tc Normal_text xr_s20" style="left: 127.84px; top: 70.84px; width: 196px;">regarding your inquiry.</span></div>
                            <a href="{{route('index')}}" onclick="return(xr_nn());"> <img alt="" class="xr_ap" onmousemove="xr_mo(this,103,event)" src="{{asset('storage/index_htm_files/10434.png')}}" style="left:218px;top:393px;width:94px;height:47px;" title="" /> </a>

                            <div class="xr_noreset " style="position: absolute; left:231px;top:751px;width:63px;height:15px;"><script type="text/javascript">
                                    var sc_project=11114851;
                                    var sc_invisible=1;
                                    var sc_security="059122be";
                                    var scJsHost = (("https:" == document.location.protocol) ?
                                        "https://secure." : "http://www.");
                                    document.write("<sc"+"ript type='text/javascript' src='" +
                                        scJsHost+
                                        "statcounter.com/counter/counter.js'></"+"script>");
                                </script><noscript><div class="statcounter"><a title="site stats"
                                                                               href="http://statcounter.com/" target="_blank"><img
                                                class="statcounter"
                                                src="//c.statcounter.com/11114851/0/059122be/0/" alt="site
stats"></a></div></noscript></div>
                            <a href="%22tel:9712042770%22" onclick="return(xr_nn());"> </a>

                            <div class="xr_group">
                                <div class="xr_noreset " style="position: absolute; left:158px;top:139px;width:224px;height:21px;"><a href="tel:9712042770"><b><font size="6">971-204-2770</font></b></a></div>
                            </div>

                            <div class="xr_txt Normal_text xr_s8" style="position: absolute; left:438px; top:126px; width:16px; height:10px;"><span class="xr_tl Normal_text xr_s8" style="top: -8.38px;"><a href="{{route('index')}}" onclick="return(xr_nn());" onmousemove="xr_mo(this,103)"><span class="Normal_text xr_s8" style="">LLC</span></a></span></div>

                            <div class="xr_txt Normal_text xr_s6" style="position: absolute; left:187px; top:194px; width:145px; height:10px;"><span class="xr_tl Normal_text xr_s6" style="top: -9.79px;">Licensed Bonded Insured</span></div>

                            <div class="xr_txt Normal_text xr_s6" style="position: absolute; left:452px; top:194px; width:67px; height:10px;"><span class="xr_tc Normal_text xr_s6" style="left: -37.36px; top: -9.79px; width: 75px;">CCB# 224967</span></div>
                            <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/8759.png')}}" style="left:235px;top:188px;width:4px;height:4px;" title="" /> <img alt="" class="xr_ap" src="{{asset('storage/index_htm_files/8760.png')}}" style="left:288px;top:188px;width:4px;height:4px;" title="" /> <a href="{{route('index')}}" onclick="return(xr_nn());"> <img alt="TILE &amp; GROUT INSTALLATION &amp; RESTORATION" class="xr_ap" onmousemove="xr_mo(this,103,event)" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland-8.png')}}" style="left:62px;top:24px;width:381px;height:124px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | PORTLAND OR | VANCOUVER WA" /> </a>

                            <div class="xr_ap" id="xr_xo103" style="left:0; top:0; width:520px; height:100px; visibility:hidden; z-index:3;"><a href="" onclick="return(false);" onmousedown="xr_ppir(this);"> </a></div>

                            <div id="xr_xd103"></div>
                        </div>
                    </div>
                </div>

            </div>



    @endsection


    @section('xrap-mvp')
        <div class="xr_ap  xr_mvp_11 " style="top:0px; left:0px; width:0px; height:0px; text-align:left;">
            <div class="xr_ap xr_ac xr_stickie" id="xr_xpxr_75" style="position:fixed;right:0px;top:295px;width:36px;height:75px; visibility: hidden; display: none;"><a href="javascript:xr_top();" onclick="return(xr_nn());"><img alt="" class="xr_ap" onmousemove="xr_mo(this,103,event)" src="{{asset('storage/index_htm_files/10234.png')}}" style="left:0px;top:0px;width:36px;height:75px;" title="" /> </a></div>
        </div>
    @endsection


    @section('scripts')
            <script>var xr_xr=document.getElementById("xr_xr");xr_rxc();</script>
        <!--[if lt IE 7]><script src="{{asset('storage/index_htm_files/png.js')}}"></script><![endif]--><!--[if IE]><script>xr_aeh()</script><![endif]--><!--[if !IE]>--><script>xr_htm();repMobFonts();window.addEventListener('load', xr_aeh, false);</script><!--<![endif]-->
            <script type='application/ld+json'>
            {
              "@context": "http://www.schema.org",
              "@type": "LocalBusiness",
              "name": "Hampton's Tile & Grout",
              "openingHours": "Mo, Tu, We, Th, Fr 09:00-17:00",
              "priceRange": "$",
               "telephone": "(971) 204-2770",
              "url": "http://www.hamptonstileandgrout.com",
              "logo": "http://www.hamptonstileandgrout.com/logo_3.jpg",
              "description": "Our goal is to restore existing tile installations through renovation and help maintain newer tile installations in pristine condition for a significantly longer life. We are a locally owned and operated licensed contractor servicing homeowners, hotels, restaurants, apartments and commercial properties throughout Oregon and Washington.",
              "address": {
                "@type": "PostalAddress",
                "addressLocality": "Gladstone",
                "addressRegion": "OR",
                "addressCountry": "United States"
              },
                "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5",
                "reviewCount": "1"
              },
                "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+1-971-204-2770",
                "email": "hamptonrestoration@gmail.com",
                "contactType": "customer service"
              }]

            }
             </script>
    @endsection



</x-home-master>
