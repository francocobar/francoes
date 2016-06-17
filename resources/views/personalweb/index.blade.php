<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Franco Escobar - Web Developer</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="format-detection" content="telephone=no"/>

        @include('personalweb.jscss')

    </head>
    <body class="bg_303500 color_53b7f9 color_yellow light_skin">
        <div class="row-wrap wrapper light_skin">
            <div class="row-space">

                <header id="header" class="row noprint">
                    <h1 class="head-name">Franco Escobar</h1>
                    <div class="head-social">
                        <ul>
                            <li class="tw"><a href="https://twitter.com/francocobar" target="_blank">Twitter</a></li>
                            <li class="fb"><a href="https://www.facebook.com/francocobar" target="_blank">Facebook</a></li>
                            <li class="lnkd"><a href="https://id.linkedin.com/in/franco-escobar-63622194" target="_blank">Linkedin</a></li>
                            <li class="inst"><a href="https://www.instagram.com/francocobar/" target="_blank">Instagram</a></li>
                        </ul>
                    </div>
                </header>

                <section id="profile" class="item noprint">
                    <h2 class="item-title"><span class="title">my Profile</span> <span class="icon-user"></span></h2>

                    <div class="item-cont clearfix">
                        <div class="hidden">
                            <div class="col500 clearfix fl-left">
                                <div class="profile-img"><img src="images/user_images/profile-img.jpg" alt="" /></div>
                                <div class="profile-info">
                                    <h3>Web Developer</h3>
                                    <p>Iam Web Deloveper based in Jakarta, Indonesia.</p>
                                    <p>I can serve you to build your website using ASP.NET C#, PHP Laravel or WordPress CMS.</p>
                                    <p>Need a personal website, company profile, online shop or another web apps? 
                                        <a href="#contact" style="font-weigh: bold;" id="aContact">Contact me! :)</a></p>
                                </div>
                            </div>

                            <div class="col260 fl-right">
                                <ul class="profile-data">
                                    <li><h4>name</h4> <div>Franco Escobar</div></li>
                                    <li><h4>Age</h4> <div>21</div></li>
                                    <li><h4>Location</h4> <div>Jakarta, Indonesia</div></li>
                                    <li><h4>E-mail</h4> <div>escobar@franco.web.id</div></li>
                                    <li><h4>phone</h4> <div>+62 877 818589 46</div></li>
                                    <li><h4>freelance</h4> <div>Available</div></li>
                                </ul>
                            </div>
                        </div>
                        <a class="blog-link" href="blog.html">
                            <span class="icon"></span>
                            <span class="label">MY BLOG</span>
                        </a>
                    </div>
                    <div id="profile-brd" class="item-border"><span><span></span></span></div>
                </section><!-- /#profile -->              

                @include('personalweb/section-contactinfo')

                <a id="up">
                    <span>TOP</span>
                </a>
            </div>
        </div>

    </body>
</html>