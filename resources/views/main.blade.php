<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <style>
        .suntory-alo-phone{background-color:transparent;cursor:pointer;height:95px;top:initial!important;position:fixed;transition:visibility .5s ease 0s;width:80px;z-index:20!important}.suntory-alo-phone .label{font-size:10px;font-weight:700;color:#fff;text-align:center;position:absolute;bottom:-13px;left:calc(50% - 20px);width:40px;border-radius:5px;background:#00aff2}.suntory-alo-ph-circle{animation:1.2s ease-in-out 0s normal none infinite running suntory-alo-circle-anim;background-color:transparent;border:2px solid rgba(30,30,30,.4);border-radius:100%;height:80px;left:0;opacity:.1;position:absolute;top:0;transform-origin:50% 50% 0;transition:all .5s ease 0s;width:80px}.suntory-alo-ph-circle-fill{animation:2.3s ease-in-out 0s normal none infinite running suntory-alo-circle-fill-anim;border:2px solid transparent;border-radius:100%;height:70px;left:15px;position:absolute;top:15px;transform-origin:50% 50% 0;transition:all .5s ease 0s;width:70px}.suntory-alo-ph-img-circle{border:2px solid transparent;border-radius:100%;height:50px;left:15px;opacity:1;position:absolute;top:15px;transform-origin:50% 50% 0;width:50px}.suntory-alo-phone.suntory-alo-hover,.suntory-alo-phone:hover{opacity:1}.suntory-alo-phone.suntory-alo-active .suntory-alo-ph-circle{animation:1.1s ease-in-out 0s normal none infinite running suntory-alo-circle-anim!important}.suntory-alo-phone.suntory-alo-static .suntory-alo-ph-circle{animation:2.2s ease-in-out 0s normal none infinite running suntory-alo-circle-anim!important}.suntory-alo-phone.suntory-alo-hover .suntory-alo-ph-circle,.suntory-alo-phone:hover .suntory-alo-ph-circle{border-color:#00aff2;opacity:.5}.suntory-alo-phone.suntory-alo-green.suntory-alo-hover .suntory-alo-ph-circle,.suntory-alo-phone.suntory-alo-green:hover .suntory-alo-ph-circle{border-color:#eb278d;opacity:1}.suntory-alo-phone.suntory-alo-green .suntory-alo-ph-circle{border-color:#bfebfc;opacity:1}.suntory-alo-phone.suntory-alo-hover .suntory-alo-ph-circle-fill,.suntory-alo-phone:hover .suntory-alo-ph-circle-fill{background-color:rgba(0,175,242,.9)}.suntory-alo-phone.suntory-alo-green.suntory-alo-hover .suntory-alo-ph-circle-fill,.suntory-alo-phone.suntory-alo-green:hover .suntory-alo-ph-circle-fill{background-color:#eb278d}.suntory-alo-phone.suntory-alo-green .suntory-alo-ph-circle-fill{background-color:rgba(0,175,242,.9);top:5px;left:5px}.suntory-alo-phone.suntory-alo-hover .suntory-alo-ph-img-circle,.suntory-alo-phone:hover .suntory-alo-ph-img-circle{background-color:#00aff2}.suntory-alo-phone.suntory-alo-green.suntory-alo-hover .suntory-alo-ph-img-circle,.suntory-alo-phone.suntory-alo-green:hover .suntory-alo-ph-img-circle{background-color:#eb278d}.suntory-alo-phone.suntory-alo-green .suntory-alo-ph-img-circle{background-color:#00aff2}@keyframes suntory-alo-circle-anim{0%{opacity:.1;transform:rotate(0deg) scale(.5) skew(1deg)}30%{opacity:.5;transform:rotate(0deg) scale(.7) skew(1deg)}100%{opacity:.6;transform:rotate(0deg) scale(1) skew(1deg)}}@keyframes suntory-alo-circle-img-anim{0%{transform:rotate(0deg) scale(1) skew(1deg)}10%{transform:rotate(-25deg) scale(1) skew(1deg)}20%{transform:rotate(25deg) scale(1) skew(1deg)}30%{transform:rotate(-25deg) scale(1) skew(1deg)}40%{transform:rotate(25deg) scale(1) skew(1deg)}50%{transform:rotate(0deg) scale(1) skew(1deg)}100%{transform:rotate(0deg) scale(1) skew(1deg)}}@keyframes suntory-alo-circle-fill-anim{0%{opacity:.2;transform:rotate(0deg) scale(.7) skew(1deg)}50%{opacity:.2;transform:rotate(0deg) scale(1) skew(1deg)}100%{opacity:.2;transform:rotate(0deg) scale(.7) skew(1deg)}}.suntory-alo-ph-img-circle i{animation:1s ease-in-out 0s normal none infinite running suntory-alo-circle-img-anim;font-size:25px;line-height:48px;padding-left:12px;color:#fff}@keyframes suntory-alo-ring-ring{0%{transform:rotate(0deg) scale(1) skew(1deg)}10%{transform:rotate(-25deg) scale(1) skew(1deg)}20%{transform:rotate(25deg) scale(1) skew(1deg)}30%{transform:rotate(-25deg) scale(1) skew(1deg)}40%{transform:rotate(25deg) scale(1) skew(1deg)}50%{transform:rotate(0deg) scale(1) skew(1deg)}100%{transform:rotate(0deg) scale(1) skew(1deg)}}.bannercodinh{right:0;position:fixed;z-index:999;bottom:0;animation:blink 2.5s linear infinite alternate 2.5s}@keyframes blink{80%{opacity:1}90%{opacity:0}100%{opacity:1}}
    </style>
</head>

<body> <!--class="animsition" -->

<!-- Header -->
@include('header')

<!-- Cart -->
@include('cart')

@yield('content')

@include('footer')


<a href="https://zalo.me/0343051533" class="suntory-alo-phone suntory-alo-green" id="suntory-alo-phoneIcon" style="left: 0; bottom: 100px;">
    <div class="suntory-alo-ph-circle"></div>
    <div class="suntory-alo-ph-circle-fill"></div>
    <div class="suntory-alo-ph-img-circle">
        <div class="zalo" style=" background: white; position: absolute; width: 40px; height: 40px; border-radius: 100px; text-align: center; line-height: 40px; font-weight: bold; font-size: 15px; top: 3px; left: 3px;">Zalo</div>
        <div class="label">Can Tho</div>
    </div>
</a>

<a href="tel:0907466879" class="suntory-alo-phone suntory-alo-green" id="suntory-alo-phoneIcon" style="left: 0; bottom: 30px;">
    <div class="suntory-alo-ph-circle"></div>
    <div class="suntory-alo-ph-circle-fill"></div>
    <div class="suntory-alo-ph-img-circle"><i class="fa fa-phone" aria-hidden="true"></i><div class="label"></div></div>
</a>

</body>
</html>
