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
                    height: 200%;
                }
            </style>
    @endsection


    @section('xrap')
        <div class="xr_ap" id="xr_bph" style="width: 100%; height: 100%; left: 0px; top: 0px; overflow: hidden; position: fixed;">
            <div class="xr_ar xr_mvp_6 xr_mvpo " style="width: 100%; height: 100%;">
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
            <div class="xr_ap" id="xr_xr" style="width: 1060px; height: 3917px; left:50%; margin-left: -530px; text-align: left; top:0px;">
            <![endif]-->
            <script>var xr_xr=document.getElementById("xr_xr");xr_rxc();</script>
            <div id="xr_td" class="xr_td">
                <div id="xr_mvp_5" class="xr_mvp_5 xr_bgn_4_0_0" style="position:absolute; width:1060px; height:3917px;">
                    <div class="xr_ap xr_xri_" style="width: 1060px; height: 3917px;">
                        <div class="xr_trigo_xr_ce4" style="position:absolute;left:1010px;top:1016px;width:105px;height:2901px;z-index:-1;"></div>
                        <span class="xr_ar" id="top_trigger" style="left:1010px;top:1016px;width:105px;height:2901px; background-color: #FFFFFF;-moz-opacity: 0.01;-khtml-opacity: 0.01;opacity: 0.01;filter:progid:DXImageTransform.Microsoft.Alpha(opacity=1);"></span>

                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8797.png')}}" alt="" title="" style="left:17px;top:-8px;width:1026px;height:3701px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8341.jpg')}}" alt="" title="" style="left:50px;top:25px;width:960px;height:151px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/9646.png')}}" alt="" title="" style="left:50px;top:25px;width:960px;height:151px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland.jpg')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:50px;top:548px;width:960px;height:22px;"/>
                        <!--[if lt IE 9]>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10698.png')}}" alt="" title="" style="left:72px;top:597px;width:927px;height:3033px;"/>
                        <![endif]-->
                        <span class="xr_ar" style="left:75px;top:600px;width:912px;height:3017px; box-shadow: 5px 5px 6px rgba(0,0,0,0.25); background-color: #FFFFFF;"></span>
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
                        <div class="xr_txt Normal_text xr_s1" style="position: absolute; left:341px; top:3641px; width:379px; height:10px;">
                            <span class="xr_tl Normal_text xr_s1" style="top: -11.77px;">Copyright © 2023  Hampton’s Tile and Grout - All Rights Reserved</span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/tile_installation_portland.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | PORTLAND OR | VANCOUVER WA" style="left:145px;top:651px;width:538px;height:3px;"/>
                        <div class="xr_txt Normal_text xr_s2" style="position: absolute; left:863px; top:653px; width:120px; height:10px;" title="TILE & GROUT RESTORATION & CLEANING AND MUCH MORE">
                            <span class="xr_tc Normal_text xr_s2" style="left: -67.17px; top: -21.94px; width: 134px;">SERVICES</span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8799.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:897px;width:538px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/9374.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:3540px;width:777px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland.jpg')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:50px;top:177px;width:960px;height:22px;"/>
                        <span class="xr_ar" style="left:50px;top:176px;width:960px;height:11px; background:url('{{asset('storage/index_htm_files/8705.png')}}') 0px -1px no-repeat;"></span>
                        <span class="xr_ar" style="left:50px;top:600px;width:960px;height:8px; background:url('{{asset('storage/index_htm_files/8706.png')}}') 0px -1px no-repeat;"></span>
                        <span class="xr_ar" style="left:50px;top:548px;width:960px;height:11px; background:url('{{asset('storage/index_htm_files/8707.png')}}') 0px 0px no-repeat;"></span>
                        <a href="javascript:xr_top();" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/8708.png')}}" alt="" title="" onmousemove="xr_mo(this,47,event)" style="left:503px;top:3599px;width:54px;height:7px;"/>
                        </a>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8713.png')}}" alt="" title="" style="left:45px;top:569px;width:970px;height:31px;"/>
                        <div class="xr_txt Normal_text xr_s0" style="position: absolute; left:358px; top:638px; width:111px; height:10px;" title="TILE & GROUT RESTORATION & CLEANING | PORTLAND OR | VANCOUVER WA">
                            <span class="xr_tl Normal_text xr_s0" style="top: -16.86px;">Testimonials</span>
                        </div>
                        <div class="xr_txt xr_s9" style="position: absolute; left:99px; top:690px; width:637px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Morgan M </span><span class="xr_s11" style="">- Oct 04, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Portland, OR</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Matt transformed my small bathroom and added a ton of value to my home in the </span>
                            <span class="xr_tl xr_s11" style="top: 57.01px;">process. He was incredibly knowledgeable and professional at every step of the process. </span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">His attention to detail and commitment to quality was truly impressive. He offered me </span>
                            <span class="xr_tl xr_s11" style="top: 92.76px;">some great options and helped me decide on the best fit for my budget and personal </span>
                            <span class="xr_tl xr_s11" style="top: 110.63px;">tastes. I know that when I do any future projects, Matt will be the first one I call. I can't say </span>
                            <span class="xr_tl xr_s11" style="top: 128.5px;">enough about how smoothly it went.</span>
                            <span class="xr_tl xr_s11" style="top: 164.25px;">(from homeadvisor.com<a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8800.png')}}" alt="" title="" style="left:315px;top:672px;width:101px;height:20px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:99px; top:1385px; width:858px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Tom A </span><span class="xr_s11" style="">- Sep 14, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">West linn, OR</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Matt was on time, had very competitive prices to the others who bid the job, and did an excellent job! He and his crew </span>
                            <span class="xr_tl xr_s11" style="top: 57.01px;">were respectful of our home (shoes off, exacting clean up, permission to store items for next day) and Matt is a very </span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">knowledgeable industry professional. Best tile/shower glass repair and cleaning we have ever experienced, would </span>
                            <span class="xr_tl xr_s11" style="top: 92.76px;">recommend him for any job without hesitation</span>
                            <span class="xr_tl xr_s11" style="top: 128.5px;">(from homeadvisor.com<a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8801.png')}}" alt="" title="" style="left:315px;top:1367px;width:101px;height:20px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/tile_installation_portland.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:1125px;width:538px;height:3px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:99px; top:1162px; width:637px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Carmel R </span><span class="xr_s11" style="">- Sep 12, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Portland, OR</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">The work was completed in a timely fashion, always with a smile, and they turned up </span>
                            <span class="xr_tl xr_s11" style="top: 57.01px;">promptly every day. The end product made my bathroom look like new. They worked </span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">hard, were always pleasant, and kept me informed about what was being done. I would </span>
                            <span class="xr_tl xr_s11" style="top: 92.76px;">recommend them and plan to have them return to do some foyer work. A lovely job for </span>
                            <span class="xr_tl xr_s11" style="top: 110.63px;">sure.</span>
                            <span class="xr_tl xr_s11" style="top: 146.38px;">(from homeadvisor.com<a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8802.png')}}" alt="" title="" style="left:315px;top:1144px;width:101px;height:20px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/tile_installation_portland.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:1350px;width:538px;height:3px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:99px; top:939px; width:637px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Joe P </span><span class="xr_s11" style="">- Aug 19, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Vancouver, WA</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Hampton's Tile and Grout does outstanding work. I couldn't believe what a great job Matt </span>
                            <span class="xr_tl xr_s11" style="top: 57.01px;">did on my bathroom and kitchen. The tile and grout look brand new. He is prompt and </span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">reliable, and really made my tile look like it did when it was first installed. I'm very </span>
                            <span class="xr_tl xr_s11" style="top: 92.76px;">impressed, and would use him again. I wouldn't hesitate to highly recommend him to </span>
                            <span class="xr_tl xr_s11" style="top: 110.63px;">anyone who needed tile and grout restoration.</span>
                            <span class="xr_tl xr_s11" style="top: 146.38px;">(from <a href="https://www.google.com/#q=hamptons+tile+and+grout+gladstone+or&lrd=0x5495742bb9ee06f7:0xe101caa151b5b729,1,+Hamptonstileandgrout/about?gmbpt=true&hl=en" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >google.com</a><a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8803.png')}}" alt="" title="" style="left:315px;top:921px;width:101px;height:20px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10705.jpg')}}" alt="" title="" style="left:544px;top:2993px;width:384px;height:533px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8805.png')}}" alt="G o o g l e" title="" style="left:248px;top:1086px;width:55px;height:19px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8806.png')}}" alt="" title="" style="left:289px;top:1310px;width:115px;height:18px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8807.png')}}" alt="" title="" style="left:289px;top:1516px;width:115px;height:18px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10709.jpg')}}" alt="" title="" style="left:137px;top:2993px;width:384px;height:533px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:99px; top:1818px; width:858px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Lica C </span><span class="xr_s11" style="">- Oct 14, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">West linn, OR</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Professional and detail oriented. He cares about making sure it is done right.</span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">(from homeadvisor.com<a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8809.png')}}" alt="" title="" style="left:315px;top:1801px;width:101px;height:19px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8810.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:1780px;width:772px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8811.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:1936px;width:772px;height:3px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:99px; top:2179px; width:858px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Robin W </span><span class="xr_s11" style="">- Sep 8, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Lake Oswego, OR</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">On Time and on Budget - OUTSTANDING job cleaning and sealing our tile. THANKS!</span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">(from homeadvisor.com<a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8812.png')}}" alt="" title="" style="left:315px;top:2161px;width:101px;height:20px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8813.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:2141px;width:777px;height:2px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/9338.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:2973px;width:777px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8815.png')}}" alt="" title="" style="left:289px;top:1895px;width:115px;height:18px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8816.png')}}" alt="" title="" style="left:289px;top:2256px;width:115px;height:18px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8810.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:1557px;width:772px;height:3px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:99px; top:1595px; width:835px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Morgan M</span><span class="xr_s11" style="">- Oct 19, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Vancouver, WA</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Matt is a consummate professional. He gave me great advice, and made sure that I understood exactly what my </span>
                            <span class="xr_tl xr_s11" style="top: 57.01px;">options were. His estimates of cost and time frame were spot on, and when all was said and done, I gained significant </span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">value in my home as a result of the work he did. He is courteous, reliable, and honest. Everything that you need in a </span>
                            <span class="xr_tl xr_s11" style="top: 92.76px;">contractor. I brought him back a year later to help me reseal the floor, and scope out my next project. Truly a job well </span>
                            <span class="xr_tl xr_s11" style="top: 110.63px;">done.</span>
                            <span class="xr_tl xr_s11" style="top: 146.38px;">(from <a href="https://www.google.com/#q=hamptons+tile+and+grout+gladstone+or&lrd=0x5495742bb9ee06f7:0xe101caa151b5b729,1,+Hamptonstileandgrout/about?gmbpt=true&hl=en" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >google.com</a><a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8817.png')}}" alt="" title="" style="left:315px;top:1577px;width:101px;height:20px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8818.png')}}" alt="G o o g l e" title="" style="left:248px;top:1743px;width:55px;height:18px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8819.png')}}" alt="" title="" style="left:289px;top:857px;width:115px;height:18px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:99px; top:2333px; width:858px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Priscilla L </span><span class="xr_s11" style="">- Nov 8, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Portland, OR</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Matthew was easy to work with and very professional. He did a great job and the bathroom tile looks great.</span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">(from <a href="https://www.google.com/#q=hamptons+tile+and+grout+gladstone+or&lrd=0x5495742bb9ee06f7:0xe101caa151b5b729,1,+Hamptonstileandgrout/about?gmbpt=true&hl=en" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >google.com</a><a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8820.png')}}" alt="" title="" style="left:315px;top:2316px;width:101px;height:20px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/9374.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:2295px;width:777px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8821.png')}}" alt="G o o g l e" title="" style="left:248px;top:2409px;width:55px;height:19px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:99px; top:2489px; width:858px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Linda T </span><span class="xr_s11" style="">- Sep 28, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Portland, OR</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Excellent service on time easy to work with. Excellent job cleaning tile.</span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">(from homeadvisor.com<a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8822.png')}}" alt="" title="" style="left:315px;top:2471px;width:101px;height:20px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/9338.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:2451px;width:777px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8823.png')}}" alt="" title="" style="left:289px;top:2566px;width:115px;height:18px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:99px; top:2645px; width:858px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Art L </span><span class="xr_s11" style="">- Oct 5, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Gresham OR</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Very professional. Very competent and on time.</span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">(from homeadvisor.com<a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8824.png')}}" alt="" title="" style="left:315px;top:2628px;width:101px;height:20px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/9374.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:2607px;width:777px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8825.png')}}" alt="" title="" style="left:289px;top:2723px;width:115px;height:17px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:99px; top:1974px; width:858px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Shirley E </span><span class="xr_s11" style="">- Aug 8, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Vancouver, WA</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Hampton's Tile and Grout does beautiful work. Matt is reliable and prompt. He explains everything in detail so you </span>
                            <span class="xr_tl xr_s11" style="top: 57.01px;">understand the work to be done and the fee. And he really knows how to make tile and grout look brand new. I couldn't </span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">believe how gorgeous he mad my tile look. It looks like the day it was installed. I just couldn't recommend Hampton's Tile </span>
                            <span class="xr_tl xr_s11" style="top: 92.76px;">and Grout more. If you give them a call, you won't be sorry.</span>
                            <span class="xr_tl xr_s11" style="top: 128.5px;">(from <a href="https://www.google.com/#q=hamptons+tile+and+grout+gladstone+or&lrd=0x5495742bb9ee06f7:0xe101caa151b5b729,1,+Hamptonstileandgrout/about?gmbpt=true&hl=en" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >google.com</a><a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8826.png')}}" alt="" title="" style="left:315px;top:1956px;width:101px;height:20px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/9338.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:145px;top:2764px;width:777px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8827.png')}}" alt="G o o g l e" title="" style="left:248px;top:2103px;width:55px;height:19px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:99px; top:2804px; width:858px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">David N </span><span class="xr_s11" style="">- Dec 14, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Portland, OR</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Matt did a fantastic job on my granite counter tops and marble shower. He was able to get out all stains in a timely and </span>
                            <span class="xr_tl xr_s11" style="top: 57.01px;">professional manner. He worked with us to provide us not only the best service, but the correct type of service we </span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">needed! Will use again in a heartbeat and have told all my friends about him. You will not be disappointed.</span>
                            <span class="xr_tl xr_s11" style="top: 110.63px;">(from <a href="https://www.google.com/#q=hamptons+tile+and+grout+gladstone+or&lrd=0x5495742bb9ee06f7:0xe101caa151b5b729,1,+Hamptonstileandgrout/about?gmbpt=true&hl=en" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >google.com</a><a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8828.png')}}" alt="" title="" style="left:315px;top:2786px;width:101px;height:20px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8829.png')}}" alt="G o o g l e" title="" style="left:248px;top:2917px;width:55px;height:19px;"/>
                        <div class="xr_txt xr_s1" style="position: absolute; left:389px; top:3566px; width:279px; height:10px;">
                            <span class="xr_tl xr_s1" style="top: -11.77px;"><a href="{{route('index')}}" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >HOME </a> | <a href="{{route('before_after')}}" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >BEFORE & AFTER</a>  | <a href="{{route('testimonials')}}" onclick="return(xr_nn());" onmousemove="xr_mo(this,47)" >TESTIMONIALS</a></span>
                        </div>
                        <a href="{{route('index')}}" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/8714.png')}}" alt="" title="" onmousemove="xr_mo(this,47,event)" style="left:73px;top:578px;width:50px;height:14px;"/>
                            <img class="xr_ap xr_ro xr_ro0 xr_tt2" src="{{asset('storage/index_htm_files/8724.png')}}" alt="" title="" onmousemove="xr_mo(this,47)" style="left:73px;top:578px;width:50px;height:14px;"/>
                        </a>
                        <a href="{{route('testimonials')}}" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/8726.png')}}" alt="" title="" style="left:330px;top:578px;width:126px;height:14px;"/>
                        </a>
                        <a href="{{route('before_after')}}" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/8716.png')}}" alt="" title="" onmousemove="xr_mo(this,47,event)" style="left:152px;top:578px;width:149px;height:14px;"/>
                            <img class="xr_ap xr_ro xr_ro0 xr_tt2" src="{{asset('storage/index_htm_files/8725.png')}}" alt="" title="" onmousemove="xr_mo(this,47)" style="left:152px;top:578px;width:149px;height:14px;"/>
                        </a>
                        <a href="{{route('contact')}}" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/8717.png')}}" alt="" title="" onmousemove="xr_mo(this,47,event)" style="left:489px;top:578px;width:82px;height:14px;"/>
                            <img class="xr_ap xr_ro xr_ro0 xr_tt2" src="{{asset('storage/index_htm_files/8727.png')}}" alt="" title="" onmousemove="xr_mo(this,47)" style="left:489px;top:578px;width:82px;height:14px;"/>
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
                            <span class="xr_tl Normal_text xr_s0" style="top: 3.95px;">CLEANING &</span>
                            <span class="xr_tl Normal_text xr_s0" style="top: 24.75px;">RESTORING:</span>
                        </div>
                        <a href="{{route('index')}}" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/10666.png')}}" alt="TILE & GROUT INSTALLATION LLC" title="TILE & GROUT CLEANING & RESTORATION | PORTLAND | VANCOUVER" onmousemove="xr_mo(this,47,event)" style="left:83px;top:35px;width:446px;height:123px;"/>
                        </a>
                        <img class="xr_ap" id="LOGO:323" src="{{asset('storage/index_htm_files/10667.png')}}" alt="& RESTORATION" title="" style="left:264px;top:144px;width:168px;height:19px;"/>
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
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/tile_and_grout_cleaning_portland_oregon.png')}}" alt="" title="TILE INSTALLATION AND MAINTENANCE - GROUT CLEANING & RESTORATION | MAKE YOUR TILE LOOK AS GOOD AS NEW" style="left:791px;top:1169px;width:116px;height:192px;"/>
                        <div id="xr_xo47" class="xr_ap" style="left:0; top:0; width:1060px; height:100px; visibility:hidden; z-index:3;">
                            <a href="" onclick="return(false);" onmousedown="xr_ppir(this);">
                            </a>
                        </div>
                        <span class="xr_ar" id="overlay" style="left:50px;top:199px;width:960px;height:11px; background:url('{{asset('storage/index_htm_files/8728.png')}}') 0px 0px no-repeat;"></span>
                        <div class="xr_noreset " style="position: absolute; left:501px;top:3852px;width:63px;height:15px;">
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
                        <div class="xr_txt Normal_text xr_s7" style="position: absolute; left:861px; top:652px; width:120px; height:10px;" title="TILE & GROUT RESTORATION & CLEANING AND MUCH MORE">
                            <span class="xr_tc Normal_text xr_s7" style="left: -67.17px; top: -21.94px; width: 134px;">SERVICES</span>
                        </div>
                        <img class="xr_ap" id="overlay2" src="{{asset('storage/index_htm_files/tile_and_grout_cleaning_portland_oregon-1.png')}}" alt="" title="100% SATISFACTION GUARANTEED" style="left:823px;top:459px;width:242px;height:223px;"/>
                        <div id="xr_xd47"></div>
                    </div>
                </div>
                <div id="xr_mvp_6" class="xr_mvp_6 xr_bgn_5_0_0 xr_mvpo" style="position:absolute; width:520px; height:2338px;">
                    <div class="xr_ap xr_xri_" style="width: 520px; height: 2338px;">
                        <div class="xr_trigo_xr_ce5" style="position:absolute;left:490px;top:959px;width:59px;height:1379px;z-index:-1;"></div>
                        <span class="xr_ar" id="Xxr_v6_top_trigger" style="left:490px;top:959px;width:59px;height:1379px; background-color: #000000;-moz-opacity: 0.01;-khtml-opacity: 0.01;opacity: 0.01;filter:progid:DXImageTransform.Microsoft.Alpha(opacity=1);"></span>

                        <img class="xr_ap" src="{{asset('storage/index_htm_files/10398.png')}}" alt="" title="" style="left:9px;top:14px;width:502px;height:2117px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8383.jpg')}}" alt="" title="" style="left:20px;top:25px;width:480px;height:151px;"/>
                        <span class="xr_ar" style="left:20px;top:25px;width:480px;height:151px; background-color: #000000;-moz-opacity: 0.71;-khtml-opacity: 0.71;opacity: 0.71;filter:progid:DXImageTransform.Microsoft.Alpha(opacity=71);"></span>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8384.jpg')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:20px;top:372px;width:481px;height:22px;"/>
                        <!--[if lt IE 9]>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8831.png')}}" alt="" title="" style="left:31px;top:420px;width:464px;height:1678px;"/>
                        <![endif]-->
                        <span class="xr_ar" style="left:35px;top:424px;width:450px;height:1663px; box-shadow: 3px 3px 6px rgba(0,0,0,0.25); background-color: #FFFFFF;"></span>
                        <img class="xr_ap" id="Xxr_v6_slide1" src="{{asset('storage/index_htm_files/8386.jpg')}}" alt="" title="" style="left:20px;top:200px;width:480px;height:174px;"/>
                        <div class="xr_txt Normal_text xr_s0" style="position: absolute; left:260px; top:460px; width:111px; height:10px;" title="TILE & GROUT RESTORATION & CLEANING | PORTLAND OR | VANCOUVER WA">
                            <span class="xr_tc Normal_text xr_s0" style="left: -61.85px; top: -16.86px; width: 124px;">Testimonials</span>
                        </div>
                        <div class="xr_txt Normal_text xr_s1" style="position: absolute; left:61px; top:2108px; width:379px; height:10px;">
                            <span class="xr_tl Normal_text xr_s1" style="top: -11.77px;">Copyright © 2024  Hampton’s Tile and Grout - All Rights Reserved</span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8740.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | PORTLAND OR | VANCOUVER WA" style="left:115px;top:474px;width:290px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8743.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:115px;top:1990px;width:293px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8394.jpg')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | GROUTING | CAULKING | REPAIR" style="left:20px;top:177px;width:480px;height:22px;"/>
                        <span class="xr_ar" style="left:20px;top:176px;width:480px;height:11px; background:url('{{asset('storage/index_htm_files/8746.png')}}') 0px -1px no-repeat;"></span>
                        <span class="xr_ar" style="left:20px;top:424px;width:480px;height:8px; background:url('{{asset('storage/index_htm_files/8747.png')}}') 0px 0px no-repeat;"></span>
                        <span class="xr_ar" style="left:20px;top:373px;width:480px;height:11px; background:url('{{asset('storage/index_htm_files/8748.png')}}') 0px -1px no-repeat;"></span>
                        <a href="javascript:xr_top();" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/8749.png')}}" alt="" title="" onmousemove="xr_mo(this,55,event)" style="left:233px;top:2074px;width:54px;height:7px;"/>
                        </a>
                        <a href="https://www.facebook.com/hamptonstileandgrout" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());">
                            <img class="xr_ap xr_1as3 xr_1a7" id="Xxr_v6_facebook2" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland-5.png')}}" alt="" title="VISIT OUR FACEBOOK PAGE" onmousemove="xr_mo(this,55,event)" style="left:34px;top:144px;width:28px;height:29px;"/>
                        </a>
                        <a href="https://www.instagram.com/hamptonstileandgrout/" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());">
                            <img class="xr_ap xr_1as3 xr_1a7" id="Xxr_v8_instagram2" src="{{asset('storage/index_htm_files/insta.png')}}" alt="" title="VISIT OUR INSTAGRAM PAGE" onmousemove="xr_mo(this,71,event)" style="left:68px;top:144px;width:28px;height:29px;"/>
                        </a>
                        <a href="https://www.google.com/search?sxsrf=ALeKk01hDcqrDIBGCnve859LOJSoamlFww%3A1598482093149&source=hp&ei=reZGX4HJBrS90PEPweWxmAo&iflsig=AINFCbYAAAAAX0b0vRaqjDMTxWsAA0pe91MqGPpeVPIg&q=hampton+tile+and+grout&gs_ssp=eJzj4tVP1zc0TC42Tjc2Ms8xYLRSNagwNbE0NTcxSkqyTE01MEsztzKoSDU0MExOTDQ0NUwyTTI3svQSy0jMLSjJz1MoycxJVUjMS1FIL8ovLQEAStkXJg&oq=hampton&gs_lcp=CgZwc3ktYWIQARgAMg0ILhDHARCvARAnEJMCMgQIABBDMgoILhDHARCvARBDMgQIABBDMgQIABBDMgQILhBDMgQIABBDMgoILhDHARCvARBDMgQIABBDMgoILhDHARCvARBDOgcIIxDqAhAnOgcILhDqAhAnOgcILhAnEJMCOgQILhAnOgQIIxAnOgUIABCRAjoNCC4QsQMQxwEQowIQQzoLCC4QsQMQxwEQowI6AggAOggIABCxAxCDAToICC4QxwEQowI6CgguEMcBEK8BECc6CwguEMcBEK8BEJECUJNFWLhOYO9caAFwAHgAgAF7iAG1BZIBAzMuNJgBAKABAaoBB2d3cy13aXqwAQo&sclient=psy-ab#lrd=0x5495742bb9ee06f7:0xe101caa151b5b729,1,,," target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());">
                            <img class="xr_ap xr_1as3 xr_1a7" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland-6.png')}}" alt="" title="VISIT OUR GOOGLE BUSINESS PAGE & LEAVE A REVIEW" onmousemove="xr_mo(this,55,event)" style="left:456px;top:143px;width:33px;height:33px;"/>
                        </a>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8752.png')}}" alt="" title="" style="left:20px;top:394px;width:480px;height:31px;"/>
                        <span class="xr_ar" id="Xxr_v6_overlay" style="left:20px;top:199px;width:480px;height:8px; background:url('{{asset('storage/index_htm_files/8753.png')}}') 0px 0px no-repeat;"></span>
                        <img class="xr_ap" id="Xxr_v6_overlay2" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland-7.png')}}" alt="" title="100% SATISFACTION GUARANTEED" style="left:336px;top:276px;width:174px;height:164px;"/>
                        <a href="{{route('contact')}}" onclick="return(xr_nn());">
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/8755.png')}}" alt="" title="CALL NOW FOR A FREE ESTIMATE" onmousemove="xr_mo(this,55,event)" style="left:52px;top:401px;width:146px;height:14px;"/>
                        </a>
                        <div class="xr_txt xr_s9" style="position: absolute; left:49px; top:506px; width:419px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Homeowner </span><span class="xr_s11" style="">- Feb 22, 2024</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Lake Oswego, OR</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Matt is a professional. He has been in the tile business for </span>
                            <span class="xr_tl xr_s11" style="top: 57.01px;">many years, both installation and cleaning. He knows what </span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">he's doing and he is extremely thorough. He will not </span>
                            <span class="xr_tl xr_s11" style="top: 92.76px;">complete a job until it's done to perfection. Courteous, </span>
                            <span class="xr_tl xr_s11" style="top: 110.63px;">timely and very customer oriented. Highly recommend; will </span>
                            <span class="xr_tl xr_s11" style="top: 128.5px;">hire again as needed.</span>
                            <span class="xr_tl xr_s11" style="top: 164.25px;">(from <a href="http://www.homeadvisor.com/rated.HamptonsTileandGrout.56204149.html" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,55)" >homeadvisor.com</a><a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,55)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8832.png')}}" alt="" title="" style="left:265px;top:489px;width:101px;height:19px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:49px; top:1232px; width:411px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Tom A </span><span class="xr_s11" style="">- Sep 14, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">West linn, OR</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Matt was on time, had very competitive prices to the </span>
                            <span class="xr_tl xr_s11" style="top: 57.01px;">others who bid the job, and did an excellent job! He and </span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">his crew were respectful of our home (shoes off, exacting </span>
                            <span class="xr_tl xr_s11" style="top: 92.76px;">clean up, permission to store items for next day) and Matt </span>
                            <span class="xr_tl xr_s11" style="top: 110.63px;">is a very knowledgeable industry professional. Best </span>
                            <span class="xr_tl xr_s11" style="top: 128.5px;">tile/shower glass repair and cleaning we have ever </span>
                            <span class="xr_tl xr_s11" style="top: 146.38px;">experienced, would recommend him for any job without </span>
                            <span class="xr_tl xr_s11" style="top: 164.25px;">hesitation</span>
                            <span class="xr_tl xr_s11" style="top: 200px;">(from <a href="http://www.homeadvisor.com/rated.HamptonsTileandGrout.56204149.html" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,55)" >homeadvisor.com</a><a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,55)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8833.png')}}" alt="" title="" style="left:265px;top:1214px;width:101px;height:20px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:49px; top:983px; width:410px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Carmel R </span><span class="xr_s11" style="">- Sep 12, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Portland, OR</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">The work was completed in a timely fashion, always with </span>
                            <span class="xr_tl xr_s11" style="top: 57.01px;">a smile, and they turned up promptly every day. The end </span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">product made my bathroom look like new. They worked </span>
                            <span class="xr_tl xr_s11" style="top: 92.76px;">hard, were always pleasant, and kept me informed about </span>
                            <span class="xr_tl xr_s11" style="top: 110.63px;">what was being done. I would recommend them and plan </span>
                            <span class="xr_tl xr_s11" style="top: 128.5px;">to have them return to do some foyer work. A lovely job </span>
                            <span class="xr_tl xr_s11" style="top: 146.38px;">for sure.</span>
                            <span class="xr_tl xr_s11" style="top: 182.12px;">(from <a href="http://www.homeadvisor.com/rated.HamptonsTileandGrout.56204149.html" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,55)" >homeadvisor.com</a><a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,55)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8834.png')}}" alt="" title="" style="left:265px;top:965px;width:101px;height:20px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:49px; top:737px; width:415px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Joe P </span><span class="xr_s11" style="">- Aug 19, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Vancouver, WA</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Hampton's Tile and Grout does outstanding work. I </span>
                            <span class="xr_tl xr_s11" style="top: 57.01px;">couldn't believe what a great job Matt did on my bathroom </span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">and kitchen. The tile and grout look brand new. He is </span>
                            <span class="xr_tl xr_s11" style="top: 92.76px;">prompt and reliable, and really made my tile look like it did </span>
                            <span class="xr_tl xr_s11" style="top: 110.63px;">when it was first installed. I'm very impressed, and would </span>
                            <span class="xr_tl xr_s11" style="top: 128.5px;">use him again. I wouldn't hesitate to highly recommend </span>
                            <span class="xr_tl xr_s11" style="top: 146.38px;">him to anyone who needed tile and grout restoration.</span>
                            <span class="xr_tl xr_s11" style="top: 182.12px;">(from <a href="https://www.google.com/#q=hamptons+tile+and+grout+gladstone+or&lrd=0x5495742bb9ee06f7:0xe101caa151b5b729,1,+Hamptonstileandgrout/about?gmbpt=true&hl=en" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,55)" >google.com</a><a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,55)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8835.png')}}" alt="" title="" style="left:265px;top:719px;width:101px;height:20px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8836.png')}}" alt="G o o g l e" title="" style="left:197px;top:921px;width:56px;height:18px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8837.png')}}" alt="" title="" style="left:239px;top:1168px;width:115px;height:18px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8838.png')}}" alt="" title="" style="left:239px;top:1435px;width:115px;height:18px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:49px; top:1499px; width:411px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">Morgan M</span><span class="xr_s11" style="">- Oct 19, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Vancouver, WA</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Matt is a consummate professional. He gave me great </span>
                            <span class="xr_tl xr_s11" style="top: 57.01px;">advice, and made sure that I understood exactly what my </span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">options were. His estimates of cost and time frame were </span>
                            <span class="xr_tl xr_s11" style="top: 92.76px;">spot on, and when all was said and done, I gained </span>
                            <span class="xr_tl xr_s11" style="top: 110.63px;">significant value in my home as a result of the work he </span>
                            <span class="xr_tl xr_s11" style="top: 128.5px;">did. He is courteous, reliable, and honest. Everything that </span>
                            <span class="xr_tl xr_s11" style="top: 146.38px;">you need in a contractor. I brought him back a year later </span>
                            <span class="xr_tl xr_s11" style="top: 164.25px;">to help me reseal the floor, and scope out my next </span>
                            <span class="xr_tl xr_s11" style="top: 182.12px;">project. Truly a job well done.</span>
                            <span class="xr_tl xr_s11" style="top: 217.87px;">(from <a href="https://www.google.com/#q=hamptons+tile+and+grout+gladstone+or&lrd=0x5495742bb9ee06f7:0xe101caa151b5b729,1,+Hamptonstileandgrout/about?gmbpt=true&hl=en" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,55)" >google.com</a><a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,55)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8839.png')}}" alt="" title="" style="left:265px;top:1481px;width:101px;height:20px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8840.png')}}" alt="G o o g l e" title="" style="left:197px;top:1718px;width:56px;height:19px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8841.png')}}" alt="" title="" style="left:239px;top:673px;width:115px;height:18px;"/>
                        <div class="xr_txt xr_s9" style="position: absolute; left:49px; top:1788px; width:425px; height:10px;">
                            <span class="xr_tl xr_s9" style="top: -14.48px;"><span class="xr_s10" style="">David N </span><span class="xr_s11" style="">- Dec 14, 2016</span></span>
                            <span class="xr_tl xr_s11" style="top: 3.39px;">Portland, OR</span>
                            <span class="xr_tl xr_s11" style="top: 39.14px;">Matt did a fantastic job on my granite counter tops and </span>
                            <span class="xr_tl xr_s11" style="top: 57.01px;">marble shower. He was able to get out all stains in a timely </span>
                            <span class="xr_tl xr_s11" style="top: 74.88px;">and professional manner. He worked with us to provide us </span>
                            <span class="xr_tl xr_s11" style="top: 92.76px;">not only the best service, but the correct type of service we </span>
                            <span class="xr_tl xr_s11" style="top: 110.63px;">needed! Will use again in a heartbeat and have told all my </span>
                            <span class="xr_tl xr_s11" style="top: 128.5px;">friends about him. You will not be disappointed.</span>
                            <span class="xr_tl xr_s11" style="top: 164.25px;">(from <a href="https://www.google.com/#q=hamptons+tile+and+grout+gladstone+or&lrd=0x5495742bb9ee06f7:0xe101caa151b5b729,1,+Hamptonstileandgrout/about?gmbpt=true&hl=en" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,55)" >google.com</a><a href="http://maps.google.com/maps/place?hl=en&safe=strict&gs_upl=6880l11678l0l11757l30l16l0l0l0l0l1331l7905l6-1.6l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1458&bih=862&um=1&ie=UTF-8&q=cascade+park+auto+vancouver+wa&fb=1&gl=us&hq=cascade+park+auto&hnear=0x5495af63c" target="_blank" rel="noopener noreferrer" onclick="return(xr_nn());" onmousemove="xr_mo(this,55)" >)</a></span>
                        </div>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8842.png')}}" alt="" title="" style="left:265px;top:1770px;width:101px;height:20px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8843.png')}}" alt="G o o g l e" title="" style="left:197px;top:1953px;width:56px;height:19px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8740.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | PORTLAND OR | VANCOUVER WA" style="left:115px;top:706px;width:290px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8740.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | PORTLAND OR | VANCOUVER WA" style="left:115px;top:951px;width:290px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8844.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | PORTLAND OR | VANCOUVER WA" style="left:115px;top:1200px;width:290px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8740.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | PORTLAND OR | VANCOUVER WA" style="left:115px;top:1468px;width:290px;height:3px;"/>
                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8740.png')}}" alt="" title="TILE & GROUT RESTORATION & CLEANING | PORTLAND OR | VANCOUVER WA" style="left:115px;top:1753px;width:290px;height:3px;"/>
                        <div class="xr_noreset " style="position: absolute; left:231px;top:2303px;width:63px;height:15px;">
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
                            <span class="xr_ar" onmousemove="xr_mo(this,55,event)" style="left:150px;top:141px;width:220px;height:32px; background-color: #C2976A; border-radius: 4px;"></span>
                        </a>
                        <div class="xr_group">
                            <div class="xr_noreset " style="position: absolute; left:158px;top:139px;width:224px;height:21px;">
                                <a href="tel:9712042770"><b><font size="6">971-204-2770</font></b></a>
                            </div>
                        </div>
                        <div class="xr_txt Normal_text xr_s8" style="position: absolute; left:438px; top:126px; width:16px; height:10px;">
                            <span class="xr_tl Normal_text xr_s8" style="top: -8.38px;"><a href="{{route('index')}}" onclick="return(xr_nn());" onmousemove="xr_mo(this,55)" ><span class="Normal_text xr_s8" style="">LLC</span></a></span>
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
                            <img class="xr_ap" src="{{asset('storage/index_htm_files/tile_&_grout_cleaning_portland-8.png')}}" alt="TILE & GROUT INSTALLATION & RESTORATION" title="TILE & GROUT RESTORATION & CLEANING | PORTLAND OR | VANCOUVER WA" onmousemove="xr_mo(this,55,event)" style="left:62px;top:24px;width:381px;height:124px;"/>
                        </a>
                        <div class="xr_xpos" style="position:absolute; left: 34px; top: 221px; width:82px; height:44px;">
                            <div id="xr_nb9" class="xr_ar">
                                <div class="xr_ar xr_nb0">
                                    <a href="javascript:;" aria-haspopup="true" onclick="return(xr_nn());">
                                        <img class="xr_ap" src="{{asset('storage/index_htm_files/8756.png')}}" alt="MENU" title="" style="left:0px;top:0px;width:82px;height:44px;"/>
                                        <img class="xr_ap xr_ro xr_ro0 xr_tt2" src="{{asset('storage/index_htm_files/8761.png')}}" alt="MENU" title="" onmousemove="xr_mo(this,55)" style="left:0px;top:0px;width:82px;height:44px;"/>
                                    </a>
                                    <div class="xr_nb2 xr_nb5 xr_smp0_-82" style="left:0px; top:44px; min-width:82px;">
                                        <ul class="xr_nb4">
                                            <li><a href="{{route('index')}}">HOME</a>
                                            </li>
                                            <li><div><div class="xr_nb6"></div></div>
                                            </li>
                                            <li><a href="{{route('before_after')}}">BEFORE & AFTER</a>
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
                        <div id="xr_xo55" class="xr_ap" style="left:0; top:0; width:520px; height:100px; visibility:hidden; z-index:3;">
                            <a href="" onclick="return(false);" onmousedown="xr_ppir(this);">
                            </a>
                        </div>
                        <div id="xr_xd55"></div>
                    </div>
                </div>
            </div>
        </div>

    @endsection


    @section('xrap_mvp')
        <div class="xr_ap  xr_mvp_5 " style="top:0px; left:0px; width:0px; height:0px; text-align:left;">
            <div class="xr_ap xr_ac xr_stickie" id="xr_xpxr_34" style="position:fixed;right:0px;top:295px;width:36px;height:75px; visibility: hidden; display: none;">
                <a href="javascript:xr_top();" onclick="return(xr_nn());">
                    <img class="xr_ap" src="{{asset('storage/index_htm_files/10208.png')}}" alt="" title="" onmousemove="xr_mo(this,55,event)" style="left:0px;top:0px;width:36px;height:75px;"/>
                </a>
            </div>
        </div>
        <div class="xr_ap  xr_mvp_6  xr_mvpo " style="top:0px; left:0px; width:0px; height:0px; text-align:left;">
            <div class="xr_ap xr_ac xr_stickie" id="xr_xpxr_43" style="position:fixed;right:0px;top:401px;width:51px;height:52px; visibility: hidden; display: none;">
                <a href="javascript:xr_top();" onclick="return(xr_nn());">
                    <img class="xr_ap" src="{{asset('storage/index_htm_files/10169.png')}}" alt="" title="" onmousemove="xr_mo(this,55,event)" style="left:0px;top:0px;width:51px;height:52px;"/>
                </a>
            </div>
        </div>
    @endsection


    @section('scripts')

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
