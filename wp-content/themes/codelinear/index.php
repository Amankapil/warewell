<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Trade Jini</title>

    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/style.css" />

    <!-- <link rel="stylesheet" href="./Navbar.css"> -->

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.7/lottie.min.js"></script>

</head>

<body>
    <div class="bggg"></div>
    <section id="navbar"
        class="hero-content bgblack max[1440px]">
        <!-- <section class="nav_section fixed top-0"> -->

        <nav class="flex justify-between items-center mx-24 header fixed top-0 w-[88%] max-[769px]:mx-0">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Frame 1000001713.svg"
                    alt="">
            </div>

            <div class="items">
                <ul class="list flex mt-3">
                    <li class="item">
                        <a href="../aboutpage/about.html"> About </a>
                    </li>
                    <li class="item">Product</li>
                    <li class="item">Pricing</li>
                    <li class="item flex w-full dropw">
                        <a href="#">Media </a>
                        <img class="mx-2"
                            src="../7.Pricing main page/pricingsvg/Stroke-1.svg"
                            alt="" />
                        <div class="dropdown-content">
                            <div class="flex flex-col p-4">
                                <a href="#">Jiniversity</a>
                                <a href="#">Press coverage</a>
                                <a href="#">Events</a>
                            </div>
                        </div>
                    </li>

                    <li class="item">Support</li>
                </ul>
            </div>

            <center class="serchicon">
                <img class="-ml10 mt-3 serchicin"
                    src="<?php echo get_template_directory_uri(); ?>/./assets/search.svg"
                    alt="" />
            </center>
            <div class="serachs max-[1100px]:ml-0 mt-2">
                <div class="flex items-center justify-center">
                    <input type="text"
                        id="searchInput"
                        placeholder="Search..." />
                    <img class="-ml-10 mt-3"
                        src="<?php echo get_template_directory_uri(); ?>/./assets/search.svg"
                        alt="" />
                </div>

                <div class="bg-black"
                    id="searchResults"></div>
            </div>

            <div class="login_btn mt-5">
                <button class="loginn -ml36 max-[1100px]:ml-0">sign up</button>
            </div>

            <div class="hamburg mt-5"
                id="hamburg">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/hamburger.svg"
                    alt="">
            </div>
        </nav>

        <!-- </section> -->

        <section id="hero"
            class="hero">
            <div class="img_container w-full flex justify-center items-center">
                <h1 class="hero_title">Delighting Trading Community Through Unmatched </h1>
            </div>

            <div class="animation-container flex justify-center items- r">
                <div class="text-animation max-sm:-ml-52">
                    <p class="-word3 word">Performance</p>
                    <p class="-word3 word">Experince.</p>
                    <p class="-word3 word">Transpancy</p>
                </div>
            </div>

            <div class="button_signup">
                <button class="signup">
                    <span class="sig"> Sign up Now </span>
                </button>
            </div>

            <div class="bullet h-full">
                <div class="animate w-full h-full">
                    <ul class="flex h-full overflow-hidden some">
                        <li class="bulltes_point">Stocks</li>
                        <li class="bulltes_point">Mutual Funds</li>
                        <li class="bulltes_point">Equity</li>
                        <li class="bulltes_point">IPO Invensment</li>
                        <li class="bulltes_point">Commodity</li>
                        <li class="bulltes_point">Currency</li>
                        <li class="bulltes_point">Derivatives</li>
                    </ul>
                </div>
            </div>
        </section>
    </section>


    <section class="app h-full  bg-[#F8FBF8] mt-20 h-full">
        <div class="live_app flex justify-center items-center">
            <div class="left_img">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/iPhone 13 Pro.svg"
                    alt="" />
            </div>
            <div class="right_content h-full">
                <div class="h1">
                    <h1>
                        <span class="liveapp"> TRADEJINI app is live now ! </span>
                    </h1>
                </div>
                <div class="pera my-8">
                    <p>
                        Buy and sell securities, track their portfolio and access market
                        news and analysis from anywhere at any time
                    </p>
                </div>
                <div class="download_button mt-10">
                    <div class="w-full flex items-start justify-start">
                        <span class="now"> Download Now </span>
                    </div>

                    <div class="buttons mt-2 flex justify-start items-start">
                        <button class="mr-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/./assets/Frame 3.svg"
                                alt="z" />
                        </button>
                        <button>
                            <img src="<?php echo get_template_directory_uri(); ?>/./assets/Frame 2.svg"
                                alt="z" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="whyChoose max-sm:pt-20 h-full  bg-[#F8FBF8] relative">
        <div class="choose flex items-center justify-center">
            <div class="left_arrowd -mt40 -ml60">
                <span class="left_arrow">
                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Vector 184.svg"
                        alt="" />
                </span>
            </div>
            <div class="center mt-10">
                <h1 class="whychosse">Why to choose TradeJini</h1>
                <p class="crafted flex w-full items-center justify-center">
                    Crafted by Traders for Traders.
                </p>
            </div>
            <div class="right_arrowd">
                <span class="right_arrow">
                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Vector 185.svg"
                        alt="" />
                </span>
            </div>
        </div>

        <div class="all_cards mt-10 flex items-center justify-center">
            <div class="leftconent w-[550px] max-sm:w-full">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/0001 1.svg"
                    alt="" />
            </div>
            <div class="rightcards">
                <div class="referand">
                    <div class="one">
                        <div class="ek">1</div>
                        <div class="mt-4">
                            <div class="arn">Refer and earn</div>
                            <div class="arnpera mt-4">
                                We are committed to create tools and products that aid traders
                                to seamlessly navigate through their journey.
                            </div>
                        </div>
                    </div>
                    <div class="one my-8">
                        <div class="ek">2</div>
                        <div class="mt-4">
                            <div class="arn">All in one platform</div>
                            <div class="arnpera mt-4">
                                We are committed to create tools and products that aid traders
                                to seamlessly navigate through their journey.
                            </div>
                        </div>
                    </div>
                    <div class="one">
                        <div class="ek">3</div>
                        <div class="mt-4">
                            <div class="arn">
                                ZERO- Debts, Proprietary Trading, Defaults
                            </div>
                            <div class="arnpera mt-4">
                                We are committed to create tools and products that aid traders
                                to seamlessly navigate through their journey.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ecosystem h-full pt-20 max-sm:pt-96 bg-[#F8FBF8]">
        <div class="upprEco w-full  h-full">
            <div class="up flex items-center justify-center w-full flex-col">
                <h1 class="headerr  h-full flex items-center justify-center m5">
                    Tradejini ecosystem
                </h1>
                <div class="peraeco my-8">
                    <p>
                        We are committed to create tools and products that aid traders to
                        seamlessly navigate through their journey. Our Trader First
                        approach keeps us on the run to continuously innovate and cater to
                        the ever changing needs of traders.
                    </p>
                </div>
            </div>
        </div>

        <div class="viwe">
            <div class="button_signup my-16">
                <button class="signupsupprtt">view all</button>
            </div>
        </div>

        <div class="animtonimgs flex items-center justify-center ">
            <div class="relative">
                <div class="absolute lottie"
                    id="lottie-container"></div>

                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Frame 1000001955.png"
                    alt="" />
            </div>
            <div class="relative">
                <div class="absolute lottie2"
                    id="lottie-container2"></div>
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Frame 1000001956.png"
                    alt="" />
            </div>
        </div>
    </section>

    <section class="brokrage bg-[#F8FBF8] pt-20">
        <div class="center w-full flex justify-center -center">
            <div class="leftcard h-[500px] relative w-full flex justify-center items-center">
                <!-- <div class="ractangle"></div> -->
                <div class="fo">
                    <span class="ruppe"> ₹ </span>
                    <p class="flex justify-center items-center">20</p>
                    <h1 class="flex justify-center items-center">Intraday and F&O</h1>
                </div>
                <div class="ractanglee relative mx-10 mt-24">
                    <div class="zero absolute flex justify-center items-center flex-col ml-8 max-[769px]:ml20">
                        <div>
                            <span>0</span>
                            <span>%</span>
                        </div>
                        <p class="broksmall">Brokrage</p>
                    </div>
                </div>
            </div>
            <div class="rightbrockrage w-full flex justify-center items-center flex-col -ml-44 max-[769px]:ml-0">
                <div class="lowest -mt-28 -ml-48 max-[769px]:ml-0">Loweset Brockage</div>

                <div class="peracourage">
                    Tradejini have provided Lowest Brokerage with no hidden charges for
                    Derivatives. Everything you need, on a budget!
                </div>

                <div class="seebutton my-8 w-[74%] flex justify-start items-center">
                    <button class="seeall">See Pricing</button>
                </div>
            </div>
        </div>
    </section>
    <section class="mutual bg-[#F8FBF8] py-20">
        <div class="mutualmain flex justify-center -center max-[769px]:flex-col max-[769px]:p-8">
            <div class="rightmutual">
                <div class="mutualanimate">
                    <div class="hantai">
                        <h1 class="anime">Mutual Funds</h1>
                        <h1 class="anime">Equity</h1>
                    </div>
                </div>
                <h2>only a few clicks away.</h2>
                <p>
                    We are committed to create tools and products that aid traders to
                    seamlessly navigate through their journey.
                </p>
                <div class="buttonsection">
                    <button class="mutualbtn max-[769px]:my-4">Mutual funds</button>
                    <button class="mutualbtn mx-4 max-[769px]:mx-0 ">Equity</button>
                </div>
            </div>
            <div class="upmutual">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Frame 13.svg"
                    alt="" />
            </div>
        </div>
    </section>

    <section class="best_class bglack">
        <div class="headbest w-[60%] flex justify-center items-center pt-10">
            <h1>Best in class for many reasons</h1>
        </div>

        <div class="container">
            <div class="productcard1 flex justify-around items-center">
                <div class="leftprod">
                    <h1 class="therade">By the traders, for the traders</h1>

                    <button class="prodbtn my-8">
                        <span> Product </span>
                    </button>
                </div>
                <div class="rigtprod">
                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Component 85.svg"
                        alt="" />
                </div>
            </div>


            <div class="productcard2 flex justify-around items-center">
                <div class="leftprod">
                    <h1 class="therade">By the traders, for the traders</h1>

                    <button class="prodbtn my-8">
                        <span> Product </span>
                    </button>
                </div>
                <div class="rigtprod">
                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Component 85.svg"
                        alt="" />
                </div>
            </div>
        </div>
    </section>


    <section class="achivve mt-40">
        <div class="ment flex justify-between items-center">
            <h1>
                We have great
                <span class="mainachive"> achievement </span>
                to show.
            </h1>

            <p>
                We are committed to create tools and products that aid traders to
                seamlessly navigate through their journey.
            </p>
        </div>

        <div class="turnover flex justify-center items-center mt-20">
            <div class="turn">
                <p class="topv"></p>
                <span> 5000 CR </span>
                <p class="daily">Daily Turnover</p>
            </div>
            <div class="leftarr">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Vector 189.svg"
                    alt="" />
            </div>

            <div class="turn pl-10 pr-10">
                <p class="topv"></p>
                <span> 26000 + </span>
                <p class="daily">Clients</p>
            </div>
            <div class="leftarr">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Vector 190.svg"
                    alt="" />
            </div>

            <div class="turn pl-10">
                <p class="topv"></p>
                <span> 1000 + </span>
                <p class="daily">city Coverage</p>
            </div>
        </div>
    </section>

    <section class="testimonials mt-20 max[1300px]">
        <div class="test w-full flex justify-center items-center flex-col">
            <h1 class="teshead">User Testimonials</h1>
            <p class="testimonialpera">
                Tempus nam at iaculis elementum odio. Morbi morbi nisl dictum rutrum
                lobortis
            </p>
        </div>




        <!-- <div class="swiper py-20">
        
            <div class="swiper-wrapper ] flex items- justify-center">
                
                <div class="swiper-slide flex items-enter justify-center">
                    <div class="avito">
                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src=".<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>

                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="/svgs/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide flex items-enter justify-center">
                    <div class="dellclinet mx10">
                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="/svgs/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>

                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="/svgs/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide flex itemscenter justify-center">
                    <div class="avito">
                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="/svgs/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>

                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="/svgs/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide flex itemscenter justify-center">
                    <div class="dellclinet mx10">
                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="/svgs/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>

                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="/svgs/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide flex items-enter justify-center">
                    <div class="avito">
                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="/svgs/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>

                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="/svgs/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide flex itemscenter justify-center">
                    <div class="dellclinet -10">
                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="/svgs/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>

                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="/svgs/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide flex item-center justify-center">
                    <div class="avito">
                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="/svgs/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>

                        <div class="istak flex flex-col p6 justifr">
                            <div class="upimg flex justify-around items-center">
                                <div class="rahk flex justify-center items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/./assets/Ellipse 3.svg"
                                        alt="" />

                                    <div class="ceoname px-5 mt-4">
                                        Istiak Ahmed
                                        <br />
                                        <span> CEO, Avito </span>
                                    </div>
                                </div>

                                <div class="icontext">
                                    <img src="/svgs/location.svg"
                                        alt="" />
                                </div>
                            </div>

                            <div class="chirag flex px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Group 1000001210.svg"
                                    alt="" />
                            </div>
                            <div class="peratestimon p-3 my-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                                Exercitation veniam consequat sunt nostrud amet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="swiper-pagination"></div>


            <div class="swiper-scrollbar"></div>
        </div> -->


    </section>

    <section class="jiniversity relative mt-44">
        <div class="mainjini p-10 h-[600px]">
            <div class="img123 absolute">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Frame 1000000869.svg"
                    alt="" />
            </div>
            <div class="img11 absolute img22">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Frame 1000000869 (1).svg"
                    alt="" />
            </div>
            <div class="img111 absolute img33">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Frame 1000000866.svg"
                    alt="" />
            </div>
            <div class="img11 absolute img44">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Frame 1000000870.svg"
                    alt="" />
            </div>

            <div class="mainheadjini pt-40 flex justify-center items-center flex-col">
                <h1>Learn from Jiniversity</h1>

                <p>
                    Tempus nam at iaculis elementum odio. Morbi morbi nisl dictum rutrum
                    lobortis eu sapien. Nibh mattis vestibulum lectus leo turpis aliquam
                    netus
                </p>

                <div class="button_signup mt-28">
                    <button class="signupsupprt lack">Jiniversity</button>
                </div>
            </div>
        </div>
    </section>
    <section class="media pt-20 bg-[#F8FBF8] h-[500px]">
        <!-- <div class="mediatop"> -->
        <div class="mediatop w- flex justify-center items-center flex-col -m">
            <div class="lowest --48">In The Media</div>

            <div class="mediapera">
                <p>
                    We are committed to create tools and products that aid traders to
                    seamlessly navigate through their journey. Our Trader First approach
                    keeps us on the run to continuously innovate and cater to the ever
                    changing needs of traders.
                </p>
            </div>
        </div>

        <div class="mediaimgs flex justify-center items-center">
            <div class="img1">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/cnbc-ar21 1.svg"
                    alt="" />
            </div>
            <div class="img1">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/moneycontrol-logo-vector 1.svg"
                    alt="" />
            </div>

            <div class="img1">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/ettech-logo-edited 1.svg"
                    alt="" />
            </div>
            <div class="img1">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Daco_5881296 1.svg"
                    alt="" />
            </div>
        </div>
    </section>

    <section class="contact h-full">
        <div class="maincontanc bg-[#F8FBF8] flex justify-center -center pt-40 h-full">
            <div class="twohead h-full ml48 relative">
                <div class="headingfil">
                    <h1>Fill Out the details</h1>
                </div>

                <div class="imp">
                    <p class="my-3 mt-10">
                        Name:
                        <input title="b"
                            type="text" />
                    </p>
                    <p class="my-10 -ml-2">
                        phone :
                        <input title="b"
                            type="text" />
                    </p>
                    <p class="my-3">
                        Email :
                        <input title="b"
                            type="text" />
                    </p>

                    <div class="button_signup mt-16">
                        <button class="signupsupprt t-black">Submit</button>
                    </div>
                </div>
            </div>

            <div class="borf  mx-20"></div>

            <div class="reachout h-full relative">
                <h1>Reach out to us</h1>

                <p class="my-8">Call Us: 080-40204020</p>
                <p class="my-8">Call and Trade: 080-2608660</p>
                <p class="my-8">Mail Us: help@tradejini.com</p>

                <div class="button_signup mt-24">
                    <button class="signupsu">Support</button>
                </div>
            </div>
        </div>
    </section>

    <section class="invest bg-[#F8FBF8] pt-20">
        <div class="maininvest flex justify-between items-center">
            <div class="headinves p-28 flex max-sm:p-4 justify-around items-center flexol">
                <div class="flex justify-center items- flex-col">
                    <h1>Start investing now!</h1>
                    <p>
                        Online platform to invest in stocks, derivatives, mutual funds,
                        and more
                    </p>
                </div>

                <div class="button_signup mt20">
                    <button class="signupp text-black">
                        <span> Sign up </span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="downlinks">
        <div class="mainlinks flex items-center justify-around p-16">
            <div class="company">
                <h3 class="com">Companyr</h3>
                <ul class="fle pt-3">
                    <li class="fotterlink">About us</li>
                    <li class="fotterlink">Products</li>
                    <li class="fotterlink">Pricing</li>
                    <li class="fotterlink">Career</li>
                </ul>
            </div>
            <div class="company">
                <h3 class="com">Support</h3>
                <ul class="fle pt-3">
                    <li class="fotterlink">Support Portal</li>
                    <li class="fotterlink">Contact Us</li>
                    <li class="fotterlink">Investors Corner</li>
                    <li class="fotterlink">Partner</li>
                </ul>
            </div>
            <div class="company">
                <h3 class="com">Tools</h3>
                <ul class="fle pt-3">
                    <li class="fotterlink1">Brokerage Calculator</li>
                    <li class="fotterlink1">Margin Calculator</li>
                    <li class="fotterlink1">Referral Calculator</li>
                    <li class="fotterlink1"></li>
                    <!-- <li class="fotterlink">Career</li> -->
                </ul>
            </div>
            <div class="company">
                <h3 class="com">Downloads</h3>
                <ul class="fle pt-3">
                    <li class="fotterlink">Forms</li>
                    <li class="fotterlink">Software</li>
                    <li class="fotterlink">Charges</li>
                    <li class="fotterlink">Holidays</li>
                </ul>
            </div>
        </div>
    </section>

    <footer class="f2 relative">
        <div class="footer2 p-6">
            <div class="footerlog flex my-10">
                <img src="<?php echo get_template_directory_uri(); ?>/./assets/Frame 1000002038.svg"
                    alt="logo" />
                <!-- <h1 class="text1 mt-2">Trade <span class="footerlogo">Jini</span> </h1> -->
            </div>
            <div class="footerbottom">
                <div class="textfooter">
                    <h1 class="mb-6 max-md:mb-16">Tradejini Financial Services Pvt Ltd</h1>
                    <h1>Corporate Office</h1>
                    <div class="mb-6">
                        Vasavi Square, 2nd Floor, No.75/757, 10th Main Road, 4th Block,
                        Jayanagar, Bangalore – 560011.Contact No : +91-80-40204020 Email :
                        help@tradejini.com
                    </div>
                    <h1>Regd Office</h1>
                    <div class="mb-6">
                        Suvas,No 4, Shankarmutt Road, 3rd Cross, Shankarpuram, Bangalore –
                        560004.
                    </div>
                </div>
                <div class="textfooteraction">
                    <div class="mb-5">
                        SEBI REGISTRATION NO.: INZ000160938 (NSE: CM-FO-CD | BSE: CM-FO-CD
                        | MCX: FO | MSEI: CM-FO-CD) CDSL Depository Participant:
                        IN-DP-470-2020 Mutual Fund ARN : 87156
                    </div>
                    <div class="mb-5">
                        Please ensure you carefully read the Risk Disclosure Documents as
                        prescribed by SEBI. For any complaints email at complaints @
                        tradejini.com
                    </div>

                    <div class="tools mb-5 flex ml-">
                        <button class="fbtns">BSE</button>
                        <button class="fbtns">NSE</button>
                        <button class="fbtns">MSEI</button>
                        <button class="fbtns">MCX</button>
                        <button class="fbtns">CDSL</button>
                        <button class="fbtns">India INX</button>
                    </div>
                    <div class="socialmedia flex items-center -center">
                        <h1 class="mt2">Follow us</h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/./assets/tweet.svg"
                            alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/./assets/youtube.svg"
                            alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/./assets/fb.svg"
                            alt="" />
                        <img src="<?php echo get_template_directory_uri(); ?>/./assets/linked.svg"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="last">
                <p class="mb-4">
                    More: Policy and Procedures | PMLA | Data Classification and
                    protection | Sample Contract Note
                </p>
                <h1 class="mb-4">Attention Investors</h1>
                <p>
                    Prevent Unauthorized Transactions in your trading/demat account
                    Update your Mobile Number/Email IDs with your Stock
                    brokers/Depository Participant.Receive alerts/information of your
                    transactions on your Registered Mobile/Email for all debit and other
                    important transactions in your trading/demat account directly from
                    Exchange/CDSL on the same day”.
                </p>
                <p>
                    “KYC is one time exercise while dealing in securities markets – once
                    KYC is done through a SEBI registered intermediary (broker, DP,
                    Mutual Fund etc.),you need not undergo the same process again when
                    you approach another intermediary.”
                </p>
                <p>
                    No need to issue cheques by investors while subscribing to IPO.Just
                    write the bank account number and sign in the application form to
                    authorise your bank to make payment in case of allotment.No worry
                    for refund as the money remains in investor’s account.
                </p>
                <p>
                    This is to inform you as per Rules, Regulations and Bye-laws of
                    Multi Commodity Exchange of India Ltd (MCX),that we do clientbased
                    trading and proprietary trading.
                </p>
                <p>
                    Procedure to file a complaint on SCORES (Easy & quick). Register on
                    SCORES portal and have the mandatory details for filing complaints
                    on SCORES (Name, PAN, Address, Mobile Number and E-mail ID).
                    Benefits: Effective Communication and Speedy redressal of the
                    grievances.
                </p>
                <p>
                    Stock Brokers can accept securities as margin from clients only by
                    way of pledge in the depository system w.e.f. September 01, 2020
                    Update your email id and mobile number with your stock broker /
                    depository participant and receive OTP directly from depository on
                    your email id and/or mobile number to create pledgeCheck your
                    securities / MF / bonds in the consolidated account statement issued
                    by NSDL/CDSL every month.
                </p>
                <div class="last2 pr-16 pl-0 max-sm:pr-0">
                    <p>
                        Made with <span class="mx-2"
                            style="color: red">&#10084;</span> in
                        Bharath @2023 Tradejini | All Rights Reserved
                    </p>
                    <p>
                        Disclaimer | Copyright Policy | Fraud Prevention | Privacy Policy
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/home.js"></script>
</body> 

</html>