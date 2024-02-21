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
                    height: 235%;
                }
            </style>
    @endsection

    @section('xrap')
        <div class="xr_ap" id="xr_bph" style="width: 100%; height: 100%; left: 0px; top: 0px; overflow: hidden; position: fixed;">
            <div class="xr_ar xr_mvp_4 xr_mvpo " style="width: 100%; height: 100%;">
                <div class="xr_pbd">
                </div>
            </div>
        </div>
    @endsection


    @section('content')

        <!--[if gte IE 9]><!-->
        <div id="xr_xr" class="xr_noc" style="position:relative; text-align:left; margin:0 auto;" onmousedown="xr_mm(event);">
            <!--<![endif]-->
            <!--[if lt IE 9]>
            <div class="xr_ap" id="xr_xr" style="width: 1060px; height: 5360px; left:50%; margin-left: -530px; text-align: left; top:0px;">
            <![endif]-->
            <script>var xr_xr=document.getElementById("xr_xr");xr_rxc();</script>
            <div id="xr_td" class="xr_td">
                <div id="xr_mvp_3" class="xr_mvp_3 xr_bgn_2_0_0" style="position:absolute; width:1060px; height:5360px;">
                    <div class="xr_ap xr_xri_" style="width: 1060px; height: 5360px;">
                        <div class="xr_trigo_xr_ce2" style="position:absolute;left:1010px;top:1016px;width:105px;height:4344px;z-index:-1;"></div>
                        <span class="xr_ar" id="top_trigger" style="left:1010px;top:1016px;width:105px;height:4344px; background-color: #FFFFFF;-moz-opacity: 0.01;-khtml-opacity: 0.01;opacity: 0.01;filter:progid:DXImageTransform.Microsoft.Alpha(opacity=1);"></span>

                        <img class="xr_ap" src="{{asset('storage/index_htm_files/9577.png')}}" alt="" title="" style="left:17px;top:-8px;width:1026px;height:5143px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8341.jpg')}}" alt="" title="" style="left:50px;top:25px;width:960px;height:151px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/9646.png')}}" alt="" title="" style="left:50px;top:25px;width:960px;height:151px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland.jpg')}}" alt="" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | GROUTING | CAULKING | REPAIR" style="left:50px;top:548px;width:960px;height:22px;"/>
                        <!--[if lt IE 9]>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10653.png')}}}" alt="" title="" style="left:71px;top:597px;width:930px;height:4483px;"/>
                        <![endif]-->
                        <span class="xr_ar" style="left:75px;top:600px;width:912px;height:4465px; box-shadow: 5px 6px 7px rgba(0,0,0,0.25); background-color: #FFFFFF;"></span>
                        <div class="xr_noreset " id="slide1" style="position: absolute; left:50px;top:200px;width:961px;height:349px;">
                            <div id="wowslider-container1">
                                <div class="ws_images"><ul>
                                        <li><img src="{{asset('storage/data1/images/slide1.jpg')}}" alt="slide1" title="slide1" id="wows1_0"/></li>
                                        <li><img src="{{asset('storage/data1/images/slide2.jpg')}}" alt="slide2" title="slide2" id="wows1_1"/></li>
                                        <li><img src="{{asset('storage/data1/images/slide3.jpg')}}" alt="slide3" title="slide3" id="wows1_2"/></li>
                                        <li><img src="{{asset('storage/data1/images/slide4.jpg')}}" alt="slide4" title="slide4" id="wows1_3"/></li>
                                        <li><img src="{{asset('storage/data1/images/slide5.jpg')}}" alt="slide5" title="slide5" id="wows1_4"/></li>
                                    </ul></div>
                                <div class="ws_bullets"><div>
                                        <a href="#" title="slide1"><span>1</span></a>
                                        <a href="#" title="slide2"><span>2</span></a>
                                        <a href="#" title="slide3"><span>3</span></a>
                                        <a href="#" title="slide4"><span>4</span></a>
                                        <a href="#" title="slide5"><span>5</span></a>
                                    </div></div>
                                <div class="ws_shadow"></div>
                            </div>
                            <script type="text/javascript" src="{{asset('storage/engine1/wowslider.js')}}"></script>
                            <script type="text/javascript" src="{{asset('storage/engine1/script.js')}}"></script>
                        </div>
                        <!--[if lt IE 9]>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10579.png')}}" alt="" title="" style="left:752px;top:616px;width:231px;height:764px;"/>
                        <![endif]-->
                        <span class="xr_ar" style="left:755px;top:618px;width:216px;height:749px; box-shadow: 5px 5px 6px rgba(0,0,0,0.25); background-color: #C2976A;"></span>
                        <div class="xr_txt Normal_text xr_s1" style="position: absolute; left:341px; top:5089px; width:379px; height:10px;">
                            <span class="xr_tl Normal_text xr_s1" style="top: -11.77px;">Copyright © 2023  Hampton’s Tile and Grout - All Rights Reserved</span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/tile_installation_portland.png')}}" alt="" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | PORTLAND OR | VANCOUVER WA" style="left:145px;top:651px;width:538px;height:3px;"/>
                        <div class="xr_txt Normal_text xr_s2" style="position: absolute; left:863px; top:653px; width:120px; height:10px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING AND MUCH MORE">
                            <span class="xr_tc Normal_text xr_s2" style="left: -67.17px; top: -21.94px; width: 134px;">SERVICES</span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/9338.png')}}" alt="" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:4988px;width:777px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland.jpg')}}" alt="" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | GROUTING | CAULKING | REPAIR" style="left:50px;top:177px;width:960px;height:22px;"/>
                        <span class="xr_ar" style="left:50px;top:176px;width:960px;height:11px; background:url('{{asset('storage/index_htm_files/8705.png')}}') 0px -1px no-repeat;"></span>
                        <span class="xr_ar" style="left:50px;top:600px;width:960px;height:8px; background:url('{{asset('storage/index_htm_files/8706.png')}}') 0px -1px no-repeat;"></span>
                        <span class="xr_ar" style="left:50px;top:548px;width:960px;height:11px; background:url('{{asset('storage/index_htm_files/8707.png')}}') 0px 0px no-repeat;"></span>
                        <a href="javascript:xr_top();" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/9581.png')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:503px;top:5047px;width:54px;height:7px;"/>
                        </a>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8713.png')}}" alt="" title="" style="left:45px;top:569px;width:970px;height:31px;"/>
                        <div class="xr_txt Normal_text xr_s0" style="position: absolute; left:351px; top:638px; width:124px; height:10px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | PORTLAND OR | VANCOUVER WA">
                            <span class="xr_tl Normal_text xr_s0" style="top: -16.86px;">Before &amp; After</span>
                        </div>
                        <div class="xr_txt xr_s1" style="position: absolute; left:389px; top:5013px; width:279px; height:10px;">
                            <span class="xr_tl xr_s1" style="top: -11.77px;"><a href="{{route('index')}}" onclick="return(xr_nn());" onmousemove="xr_mo(this,20)" >HOME </a> | <a href="{{route('before_after')}}" onclick="return(xr_nn());" onmousemove="xr_mo(this,20)" >BEFORE &amp; AFTER</a> | <a href="{{route('testimonials')}}" onclick="return(xr_nn());" onmousemove="xr_mo(this,20)" >TESTIMONIALS</a></span>
                        </div>
                        <a href="{{asset('index_htm_files/10671.jpg')}}" class="highslide" onmouseover="hs.headingText=''" onclick="return hs.expand(this, { headingText: '', slideshowGroup: 2 } )">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/10657.jpg')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:132px;top:680px;width:568px;height:378px;"/>
                        </a>
                        <a href="{{asset('storage/index_htm_files/10672.jpg')}}" class="highslide" onmouseover="hs.headingText=''" onclick="return hs.expand(this, { headingText: '', slideshowGroup: 2 } )">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/10658.jpg')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:132px;top:1065px;width:568px;height:378px;"/>
                        </a>
                        <a href="{{asset('storage/index_htm_files/10673.jpg')}}" class="highslide" onmouseover="hs.headingText=''" onclick="return hs.expand(this, { headingText: '', slideshowGroup: 2 } )">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/10659.jpg')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:132px;top:1827px;width:568px;height:379px;"/>
                        </a>
                        <a href="{{asset('storage/index_htm_files/10674.jpg')}}" class="highslide" onmouseover="hs.headingText=''" onclick="return hs.expand(this, { headingText: '', slideshowGroup: 2 } )">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/10660.jpg')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:132px;top:2206px;width:568px;height:378px;"/>
                        </a>
                        <a href="{{asset('storage/index_htm_files/10675.jpg')}}" class="highslide" onmouseover="hs.headingText=''" onclick="return hs.expand(this, { headingText: '', slideshowGroup: 2 } )">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/10661.jpg')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:132px;top:2585px;width:568px;height:378px;"/>
                        </a>
                        <a href="{{asset('storage/index_htm_files/10676.jpg')}}" class="highslide" onmouseover="hs.headingText=''" onclick="return hs.expand(this, { headingText: '', slideshowGroup: 2 } )">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/10662.jpg')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:132px;top:2964px;width:568px;height:378px;"/>
                        </a>
                        <a href="{{asset('storage/index_htm_files/10677.jpg')}}" class="highslide" onmouseover="hs.headingText=''" onclick="return hs.expand(this, { headingText: '', slideshowGroup: 2 } )">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/10663.jpg')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:132px;top:3342px;width:568px;height:379px;"/>
                        </a>
                        <a href="{{asset('storage/index_htm_files/10678.jpg')}}" class="highslide" onmouseover="hs.headingText=''" onclick="return hs.expand(this, { headingText: '', slideshowGroup: 2 } )">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/10664.jpg')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:132px;top:3719px;width:568px;height:378px;"/>
                        </a>
                        <a href="{{route('index')}}" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/8714.png')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:73px;top:578px;width:50px;height:14px;"/>
                            <img class="xr_ap xr_ro xr_ro0 xr_tt2" src="{{asset('storage/index_htm_files/8724.png')}}" alt="" title="" onmousemove="xr_mo(this,20)" style="left:73px;top:578px;width:50px;height:14px;"/>
                        </a>
                        <a href="{{route('testimonials')}}" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/8715.png')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:330px;top:578px;width:126px;height:14px;"/>
                            <img class="xr_ap xr_ro xr_ro0 xr_tt2" src="{{asset('storage/index_htm_files/8726.png')}}" alt="" title="" onmousemove="xr_mo(this,20)" style="left:330px;top:578px;width:126px;height:14px;"/>
                        </a>
                        <a href="{{route('before_after')}}">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/8725.png')}}" alt="" title="" style="left:152px;top:578px;width:149px;height:14px;"/>
                        </a>
                        <a href="{{route('contact')}}" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/8717.png')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:489px;top:578px;width:82px;height:14px;"/>
                            <img class="xr_ap xr_ro xr_ro0 xr_tt2" src="{{asset('storage/index_htm_files/8727.png')}}" alt="" title="" onmousemove="xr_mo(this,20)" style="left:489px;top:578px;width:82px;height:14px;"/>
                        </a>
                        <a href="{{asset('storage/index_htm_files/10679.jpg')}}" class="highslide" onmouseover="hs.headingText=''" onclick="return hs.expand(this, { headingText: '', slideshowGroup: 2 } )">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/10665.jpg')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:132px;top:1448px;width:568px;height:378px;"/>
                        </a>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8709.png')}}" alt="" title="CALL NOW" style="left:819px;top:55px;width:147px;height:18px;"/>
                        <a href="https://www.facebook.com/hamptonstileandgrout" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());">
                            <img class="xr_ap xr_1as3 xr_1a7" id="facebook2" src="{{asset('storage/index_htm_files/8710.png')}}" alt="" title="&quot;LIKE&quot; US ON FACEBOOK" onmousemove="xr_mo(this,47,event)" style="left:903px;top:141px;width:29px;height:28px;"/>
                        </a>
                        <a href="https://www.instagram.com/hamptonstileandgrout/" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());">
                            <img class="xr_ap xr_1as3 xr_1a7" id="instagram2" src="{{asset('storage/index_htm_files/insta.png')}}" alt="" title="&quot;LIKE&quot; US ON INSTAGRAM" onmousemove="xr_mo(this,47,event)" style="left:936px;top:141px;width:29px;height:28px;"/>
                        </a>
                        <a href="https://www.google.com/search?sxsrf=ALeKk01hDcqrDIBGCnve859LOJSoamlFww%3A1598482093149&source=hp&ei=reZGX4HJBrS90PEPweWxmAo&iflsig=AINFCbYAAAAAX0b0vRaqjDMTxWsAA0pe91MqGPpeVPIg&q=hampton+tile+and+grout&gs_ssp=eJzj4tVP1zc0TC42Tjc2Ms8xYLRSNagwNbE0NTcxSkqyTE01MEsztzKoSDU0MExOTDQ0NUwyTTI3svQSy0jMLSjJz1MoycxJVUjMS1FIL8ovLQEAStkXJg&oq=hampton&gs_lcp=CgZwc3ktYWIQARgAMg0ILhDHARCvARAnEJMCMgQIABBDMgoILhDHARCvARBDMgQIABBDMgQIABBDMgQILhBDMgQIABBDMgoILhDHARCvARBDMgQIABBDMgoILhDHARCvARBDOgcIIxDqAhAnOgcILhDqAhAnOgcILhAnEJMCOgQILhAnOgQIIxAnOgUIABCRAjoNCC4QsQMQxwEQowIQQzoLCC4QsQMQxwEQowI6AggAOggIABCxAxCDAToICC4QxwEQowI6CgguEMcBEK8BECc6CwguEMcBEK8BEJECUJNFWLhOYO9caAFwAHgAgAF7iAG1BZIBAzMuNJgBAKABAaoBB2d3cy13aXqwAQo&sclient=psy-ab#lrd=0x5495742bb9ee06f7:0xe101caa151b5b729,1,,," target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());">
                            <img class="xr_ap xr_1as3 xr_1a7" src="{{asset('storage/index_htm_files/10593.png')}}" alt="" title="VISIT OUR GOOGLE BUSINESS PAGE & LEAVE A REVIEW" onmousemove="xr_mo(this,47,event)" style="left:969px;top:140px;width:34px;height:33px;"/>
                        </a>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland.png')}}" alt="" title="CALL NOW FOR A FREE ESTIMATE" style="left:820px;top:79px;width:146px;height:14px;"/>
                        <div class="xr_txt Normal_text xr_s6" style="position: absolute; left:820px; top:105px; width:145px; height:10px;">
                            <span class="xr_tl Normal_text xr_s6" style="top: -9.79px;">Licensed     Bonded     Insured</span>
                        </div>
                        <div class="xr_txt Normal_text xr_s6" style="position: absolute; left:893px; top:118px; width:67px; height:10px;">
                            <span class="xr_tc Normal_text xr_s6" style="left: -37.36px; top: -9.79px; width: 75px;">CCB# 224967</span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8721.png')}}" alt="" title="" style="left:868px;top:99px;width:4px;height:4px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8722.png')}}" alt="" title="" style="left:922px;top:99px;width:4px;height:4px;"/>
                        <!--[if lt IE 9]>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10580.png')}}" alt="" title="" style="left:763px;top:669px;width:211px;height:704px;"/>
                        <![endif]-->
                        <span class="xr_ar" style="left:765px;top:669px;width:196px;height:687px; box-shadow: 6px 9px 6px rgba(0,0,0,0.25); background-color: #FFFFFF;"></span>
                        <div class="xr_txt Normal_text xr_s3" style="position: absolute; left:765px; top:775px; width:173px; height:10px;">
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: -16.86px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: -16.86px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: -16.86px;">Bathrooms</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 3.95px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 3.95px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 3.95px;">Kitchens</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 24.75px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 24.75px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 24.75px;">Showers</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 45.56px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 45.56px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 45.56px;">Floors</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 66.36px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 66.36px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 66.36px;">Walls</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 87.17px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 87.17px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 87.17px;">Back Splashes</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 107.97px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 107.97px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 107.97px;">Tub Surrounds</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 128.78px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 128.78px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 128.78px;">Counters</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 149.58px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 149.58px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 149.58px;">Fireplaces</span>
                        </div>
                        <div class="xr_txt Normal_text xr_s0" style="position: absolute; left:777px; top:977px; width:56px; height:10px;">
                            <span class="xr_tl Normal_text xr_s0" style="top: -16.86px;">ALSO:</span>
                        </div>
                        <div class="xr_txt Normal_text xr_s0" style="position: absolute; left:777px; top:702px; width:143px; height:10px;">
                            <span class="xr_tl Normal_text xr_s0" style="top: -16.86px;">INSTALLATION, </span>
                            <span class="xr_tl Normal_text xr_s0" style="top: 3.95px;">CLEANING &amp;</span>
                            <span class="xr_tl Normal_text xr_s0" style="top: 24.75px;">RESTORING:</span>
                        </div>
                        <a href="{{route('index')}}" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/10666.png')}}" alt="TILE &amp; GROUT INSTALLATION LLC" title="TILE &amp; GROUT CLEANING &amp; RESTORATION | PORTLAND | VANCOUVER" onmousemove="xr_mo(this,20,event)" style="left:83px;top:36px;width:446px;height:123px;"/>
                        </a>
                        <img class="xr_ap" id="LOGO:323" src="{{asset('storage/index_htm_files/10667.png')}}" alt="&amp; RESTORATION" title="" style="left:264px;top:145px;width:168px;height:19px;"/>
                        <div class="xr_txt Normal_text xr_s3" style="position: absolute; left:765px; top:1008px; width:182px; height:10px;">
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: -16.86px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: -16.86px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: -16.86px;">Installation</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 3.95px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 3.95px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 3.95px;">Grouting</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 24.75px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 24.75px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 24.75px;">Caulking</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 45.56px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 45.56px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 45.56px;">Grout Sealing</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 66.36px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 66.36px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 66.36px;">Marble</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 87.17px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 87.17px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 87.17px;">Granite</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 107.97px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 107.97px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 107.97px;">Travertine</span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 14.17px; top: 128.78px;"><span class="Normal_text xr_s4" style="">•</span></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 27.41px; top: 128.78px;"></span>
                            <span class="xr_tl Normal_text xr_s0" style="left: 37.79px; top: 128.78px;">Steam-Cleaning</span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/tile_and_grout_cleaning_portland_oregon.png')}}" alt="" title="TILE INSTALLATION AND MAINTENANCE - GROUT CLEANING &amp; RESTORATION | MAKE YOUR TILE LOOK AS GOOD AS NEW" style="left:791px;top:1169px;width:116px;height:192px;"/>
                        <a href="{{asset('storage/index_htm_files/10680.jpg')}}" class="highslide" onmouseover="hs.headingText=''" onclick="return hs.expand(this, { headingText: '', slideshowGroup: 2 } )">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/10668.jpg')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:132px;top:4098px;width:568px;height:378px;"/>
                        </a>
                        <a href="{{asset('storage/index_htm_files/10681.jpg')}}" class="highslide" onmouseover="hs.headingText=''" onclick="return hs.expand(this, { headingText: '', slideshowGroup: 2 } )">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/10669.jpg')}}" alt="" title="" onmousemove="xr_mo(this,20,event)" style="left:132px;top:4476px;width:568px;height:378px;"/>
                        </a>
                        <div id="xr_xo20" class="xr_ap" style="left:0; top:0; width:1060px; height:100px; visibility:hidden; z-index:3;">
                            <a href="" onclick="return(false);" onmousedown="xr_ppir(this);">
                            </a>
                        </div>
                        <span class="xr_ar" id="overlay" style="left:50px;top:199px;width:960px;height:11px; background:url('{{asset('storage/index_htm_files/8728.png')}}') 0px 0px no-repeat;"></span>
                        <div class="xr_noreset " style="position: absolute; left:501px;top:5299px;width:63px;height:15px;">
                            <script type="text/javascript">
                                var sc_project=11114851;
                                var sc_invisible=1;
                                var sc_security="059122be";
                                var scJsHost = (("https:" == document.location.protocol) ?
                                    "https://secure." : "http://www.");
                                document.write("<sc"+"ript type='text/javascript' src='" +
                                    scJsHost+
                                    "statcounter.com/counter/counter.js'></"+"script>");
                            </script>
                            <noscript><div class="statcounter"><a title="site stats"
                                                                  href="http://statcounter.com/" target="_blank"><img
                                            class="statcounter"
                                            src="//c.statcounter.com/11114851/0/059122be/0/" alt="site
stats"></a></div></noscript>
                        </div>
                        <div class="xr_txt Normal_text xr_s7" style="position: absolute; left:861px; top:652px; width:120px; height:10px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING AND MUCH MORE">
                            <span class="xr_tc Normal_text xr_s7" style="left: -67.17px; top: -21.94px; width: 134px;">SERVICES</span>
                        </div>
                        <img class="xr_ap" id="overlay2" src="{{asset('storage/index_htm_files/tile_and_grout_cleaning_portland_oregon-1.png')}}" alt="" title="100% SATISFACTION GUARANTEED" style="left:823px;top:459px;width:242px;height:223px;"/>
                        <div id="xr_xd20"></div>
                    </div>
                </div>
                <div id="xr_mvp_4" class="xr_mvp_4 xr_bgn_3_0_0 xr_mvpo" style="position:absolute; width:520px; height:3342px;">
                    <div class="xr_ap xr_xri_" style="width: 520px; height: 3342px;">
                        <div class="xr_trigo_xr_ce3" style="position:absolute;left:490px;top:959px;width:59px;height:2383px;z-index:-1;"></div>
                        <span class="xr_ar" id="Xxr_v4_top_trigger" style="left:490px;top:959px;width:59px;height:2383px; background-color: #000000;-moz-opacity: 0.01;-khtml-opacity: 0.01;opacity: 0.01;filter:progid:DXImageTransform.Microsoft.Alpha(opacity=1);"></span>

                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10684.png')}}" alt="" title="" style="left:9px;top:14px;width:502px;height:3093px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8383.jpg')}}" alt="" title="" style="left:20px;top:25px;width:480px;height:151px;"/>
                        <span class="xr_ar" style="left:20px;top:25px;width:480px;height:151px; background-color: #000000;-moz-opacity: 0.71;-khtml-opacity: 0.71;opacity: 0.71;filter:progid:DXImageTransform.Microsoft.Alpha(opacity=71);"></span>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8384.jpg')}}" alt="" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | GROUTING | CAULKING | REPAIR" style="left:20px;top:372px;width:481px;height:22px;"/>
                        <!--[if lt IE 9]>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10352.png')}}" alt="" title="" style="left:28px;top:419px;width:470px;height:2660px;"/>
                        <![endif]-->
                        <span class="xr_ar" style="left:35px;top:424px;width:450px;height:2640px; box-shadow: 3px 4px 9px rgba(0,0,0,0.25); background-color: #FFFFFF;"></span>
                        <img class="xr_ap" id="Xxr_v4_slide1" src="{{asset('storage/index_htm_files/8386.jpg')}}" alt="" title="" style="left:20px;top:200px;width:480px;height:174px;"/>
                        <div class="xr_txt Normal_text xr_s0" style="position: absolute; left:260px; top:460px; width:124px; height:10px;" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | PORTLAND OR | VANCOUVER WA">
                            <span class="xr_tc Normal_text xr_s0" style="left: -69.06px; top: -16.86px; width: 138px;">Before &amp; After</span>
                        </div>
                        <div class="xr_txt Normal_text xr_s1" style="position: absolute; left:61px; top:3085px; width:379px; height:10px;">
                            <span class="xr_tl Normal_text xr_s1" style="top: -11.77px;">Copyright © 2024  Hampton’s Tile and Grout - All Rights Reserved</span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8740.png')}}" alt="" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | PORTLAND OR | VANCOUVER WA" style="left:115px;top:474px;width:290px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/9490.png')}}" alt="" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | GROUTING | CAULKING | REPAIR" style="left:115px;top:3019px;width:293px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8394.jpg')}}" alt="" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | GROUTING | CAULKING | REPAIR" style="left:20px;top:177px;width:480px;height:22px;"/>
                        <span class="xr_ar" style="left:20px;top:176px;width:480px;height:11px; background:url('{{asset('storage/index_htm_files/8746.png')}}') 0px -1px no-repeat;"></span>
                        <span class="xr_ar" style="left:20px;top:424px;width:480px;height:8px; background:url('{{asset('storage/index_htm_files/8747.png')}}') 0px 0px no-repeat;"></span>
                        <span class="xr_ar" style="left:20px;top:373px;width:480px;height:11px; background:url('{{asset('storage/index_htm_files/8748.png')}}') 0px -1px no-repeat;"></span>
                        <a href="javascript:xr_top();" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/9611.png')}}" alt="" title="" onmousemove="xr_mo(this,39,event)" style="left:233px;top:3052px;width:54px;height:6px;"/>
                        </a>
                        <a href="https://www.facebook.com/hamptonstileandgrout" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());">
                            <img class="xr_ap xr_1as3 xr_1a7" id="Xxr_v4_facebook2" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland-5.png')}}" alt="" title="VISIT OUR FACEBOOK PAGE" onmousemove="xr_mo(this,39,event)" style="left:34px;top:144px;width:28px;height:29px;"/>
                        </a>
                        <a href="https://www.instagram.com/hamptonstileandgrout/" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());">
                            <img class="xr_ap xr_1as3 xr_1a7" id="Xxr_v8_instagram2" src="{{asset('storage/index_htm_files/insta.png')}}" alt="" title="VISIT OUR INSTAGRAM PAGE" onmousemove="xr_mo(this,71,event)" style="left:68px;top:144px;width:28px;height:29px;"/>
                        </a>
                        <a href="https://www.google.com/search?sxsrf=ALeKk01hDcqrDIBGCnve859LOJSoamlFww%3A1598482093149&source=hp&ei=reZGX4HJBrS90PEPweWxmAo&iflsig=AINFCbYAAAAAX0b0vRaqjDMTxWsAA0pe91MqGPpeVPIg&q=hampton+tile+and+grout&gs_ssp=eJzj4tVP1zc0TC42Tjc2Ms8xYLRSNagwNbE0NTcxSkqyTE01MEsztzKoSDU0MExOTDQ0NUwyTTI3svQSy0jMLSjJz1MoycxJVUjMS1FIL8ovLQEAStkXJg&oq=hampton&gs_lcp=CgZwc3ktYWIQARgAMg0ILhDHARCvARAnEJMCMgQIABBDMgoILhDHARCvARBDMgQIABBDMgQIABBDMgQILhBDMgQIABBDMgoILhDHARCvARBDMgQIABBDMgoILhDHARCvARBDOgcIIxDqAhAnOgcILhDqAhAnOgcILhAnEJMCOgQILhAnOgQIIxAnOgUIABCRAjoNCC4QsQMQxwEQowIQQzoLCC4QsQMQxwEQowI6AggAOggIABCxAxCDAToICC4QxwEQowI6CgguEMcBEK8BECc6CwguEMcBEK8BEJECUJNFWLhOYO9caAFwAHgAgAF7iAG1BZIBAzMuNJgBAKABAaoBB2d3cy13aXqwAQo&sclient=psy-ab#lrd=0x5495742bb9ee06f7:0xe101caa151b5b729,1,,," target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());">
                            <img class="xr_ap xr_1as3 xr_1a7" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland-6.png')}}" alt="" title="VISIT OUR GOOGLE BUSINESS PAGE &amp; LEAVE A REVIEW" onmousemove="xr_mo(this,39,event)" style="left:456px;top:143px;width:33px;height:33px;"/>
                        </a>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8752.png')}}" alt="" title="" style="left:20px;top:394px;width:480px;height:31px;"/>
                        <span class="xr_ar" id="Xxr_v4_overlay" style="left:20px;top:199px;width:480px;height:8px; background:url('index_htm_files/8753.png') 0px 0px no-repeat;"></span>
                        <img class="xr_ap" id="Xxr_v4_overlay2" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland-7.png')}}" alt="" title="100% SATISFACTION GUARANTEED" style="left:336px;top:276px;width:174px;height:164px;"/>
                        <a href="{{route('contact')}}" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/8755.png')}}" alt="" title="CALL NOW FOR A FREE ESTIMATE" onmousemove="xr_mo(this,39,event)" style="left:52px;top:401px;width:146px;height:14px;"/>
                        </a>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10688.jpg')}}" alt="" title="" style="left:58px;top:493px;width:411px;height:274px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10689.jpg')}}" alt="" title="" style="left:58px;top:770px;width:411px;height:275px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10690.jpg')}}" alt="" title="" style="left:58px;top:1327px;width:411px;height:274px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10691.jpg')}}" alt="" title="" style="left:58px;top:1604px;width:411px;height:275px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10692.jpg')}}" alt="" title="" style="left:58px;top:1882px;width:411px;height:275px;"/>
                        <div class="xr_noreset " style="position: absolute; left:357px;top:3180px;width:63px;height:15px;">
                            <script type="text/javascript">
                                var sc_project=11114851;
                                var sc_invisible=1;
                                var sc_security="059122be";
                                var scJsHost = (("https:" == document.location.protocol) ?
                                    "https://secure." : "http://www.");
                                document.write("<sc"+"ript type='text/javascript' src='" +
                                    scJsHost+
                                    "statcounter.com/counter/counter.js'></"+"script>");
                            </script>
                            <noscript><div class="statcounter"><a title="site stats"
                                                                  href="http://statcounter.com/" target="_blank"><img
                                            class="statcounter"
                                            src="//c.statcounter.com/11114851/0/059122be/0/" alt="site
stats"></a></div></noscript>
                        </div>
                        <a href="%22tel:1-408-555-5555%22" onclick="return(xr_nn());">
                            <span class="xr_ar" onmousemove="xr_mo(this,39,event)" style="left:150px;top:141px;width:220px;height:32px; background-color: #C2976A; border-radius: 4px;"></span>
                        </a>
                        <div class="xr_group">
                            <div class="xr_noreset " style="position: absolute; left:158px;top:139px;width:224px;height:21px;">
                                <a href="tel:9712042770"><b><font size="6">971-204-2770</font></b></a>
                            </div>
                        </div>
                        <div class="xr_txt Normal_text xr_s8" style="position: absolute; left:438px; top:126px; width:16px; height:10px;">
                            <span class="xr_tl Normal_text xr_s8" style="top: -8.38px;"><a href="{{route('index')}}" onclick="return(xr_nn());" onmousemove="xr_mo(this,39)" ><span class="Normal_text xr_s8" style="">LLC</span></a></span>
                        </div>
                        <div class="xr_txt Normal_text xr_s6" style="position: absolute; left:187px; top:194px; width:145px; height:10px;">
                            <span class="xr_tl Normal_text xr_s6" style="top: -9.79px;">Licensed     Bonded     Insured</span>
                        </div>
                        <div class="xr_txt Normal_text xr_s6" style="position: absolute; left:452px; top:194px; width:67px; height:10px;">
                            <span class="xr_tc Normal_text xr_s6" style="left: -37.36px; top: -9.79px; width: 75px;">CCB# 224967</span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8759.png')}}" alt="" title="" style="left:235px;top:188px;width:4px;height:4px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8760.png')}}" alt="" title="" style="left:288px;top:188px;width:4px;height:4px;"/>
                        <a href="{{route('index')}}" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland-8.png')}}" alt="TILE &amp; GROUT INSTALLATION &amp; RESTORATION" title="TILE &amp; GROUT RESTORATION &amp; CLEANING | PORTLAND OR | VANCOUVER WA" onmousemove="xr_mo(this,39,event)" style="left:62px;top:24px;width:381px;height:124px;"/>
                        </a>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10693.jpg')}}" alt="" title="" style="left:58px;top:2159px;width:411px;height:275px;"/>
                        <div class="xr_xpos" style="position:absolute; left: 34px; top: 221px; width:82px; height:44px;">
                            <div id="xr_nb5" class="xr_ar">
                                <div class="xr_ar xr_nb0">
                                    <a href="javascript:;" aria-haspopup="true" onclick="return(xr_nn());">
                                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8756.png')}}" alt="MENU" title="" style="left:0px;top:0px;width:82px;height:44px;"/>
                                        <img class="xr_ap xr_ro xr_ro0 xr_tt2" src="{{asset('storage/index_htm_files/8761.png')}}" alt="MENU" title="" onmousemove="xr_mo(this,39)" style="left:0px;top:0px;width:82px;height:44px;"/>
                                    </a>
                                    <div class="xr_nb2 xr_nb5 xr_smp0_-82" style="left:0px; top:44px; min-width:82px;">
                                        <ul class="xr_nb4">
                                            <li><a href="{{route('index')}}">HOME</a>
                                            </li>
                                            <li><div><div class="xr_nb6"></div></div>
                                            </li>
                                            <li><a href="{{route('before_after')}}">BEFORE &amp; AFTER</a>
                                            </li>
                                            <li><div><div class="xr_nb6"></div></div>
                                            </li>
                                            <li><a href="{{route('testimonials')}}">TESTIMONIALS</a>
                                            </li>
                                            <li><div><div class="xr_nb6"></div></div>
                                            </li>
                                            <li><a href="{{route('contact')}}">CONTACT US</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10694.jpg')}}" alt="" title="" style="left:58px;top:2439px;width:411px;height:274px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10695.jpg')}}" alt="" title="" style="left:58px;top:1049px;width:411px;height:274px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10696.jpg')}}" alt="" title="" style="left:58px;top:2714px;width:411px;height:275px;"/>
                        <div id="xr_xo39" class="xr_ap" style="left:0; top:0; width:520px; height:100px; visibility:hidden; z-index:3;">
                            <a href="" onclick="return(false);" onmousedown="xr_ppir(this);">
                            </a>
                        </div>
                        <div id="xr_xd39"></div>
                    </div>
                </div>
            </div>
        </div>

    @endsection


    @section('xrap-mvp')
        <div class="xr_ap  xr_mvp_3 " style="top:0px; left:0px; width:0px; height:0px; text-align:left;">
            <div class="xr_ap xr_ac xr_stickie" id="xr_xpxr_18" style="position:fixed;right:0px;top:295px;width:36px;height:75px; visibility: hidden; display: none;">
                <a href="javascript:xr_top();" onclick="return(xr_nn());">
                    <img class="xr_ap" src="{{asset('storage/index_htm_files/10173.png')}}" alt="" title="" onmousemove="xr_mo(this,39,event)" style="left:0px;top:0px;width:36px;height:75px;"/>
                </a>
            </div>
        </div>
        <div class="xr_ap  xr_mvp_4  xr_mvpo " style="top:0px; left:0px; width:0px; height:0px; text-align:left;">
            <div class="xr_ap xr_ac xr_stickie" id="xr_xpxr_27" style="position:fixed;right:0px;top:401px;width:51px;height:52px; visibility: hidden; display: none;">
                <a href="javascript:xr_top();" onclick="return(xr_nn());">
                    <img class="xr_ap" src="{{asset('storage/index_htm_files/10169.png')}}" alt="" title="" onmousemove="xr_mo(this,39,event)" style="left:0px;top:0px;width:51px;height:52px;"/>
                </a>
            </div>
        </div>
    @endsection


    @section('scripts')

        <!--[if lt IE 7]><script src="{{asset('storage/index_htm_files/png.js')}}"></script><![endif]-->
            <!--[if IE]><script>xr_aeh()</script><![endif]--><!--[if !IE]>--><script>xr_htm();repMobFonts();window.addEventListener('load', xr_aeh, false);</script><!--<![endif]-->
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
