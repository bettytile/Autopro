<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AutoPro</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script>
        var cont = 0;

        function loopSlider() {
            var xx = setInterval(function() {
                switch (cont) {
                    case 0:
                        {
                            $("#slider-1").fadeOut(400);
                            $("#slider-2").delay(100).fadeIn(400);
                            $("#sButton1").removeClass("bg-red-800");
                            $("#sButton2").addClass("bg-red-800");
                            cont = 1;

                            break;
                        }
                    case 1:
                        {

                            $("#slider-2").fadeOut(400);
                            $("#slider-1").delay(400).fadeIn(400);
                            $("#sButton2").removeClass("bg-red-800");
                            $("#sButton1").addClass("bg-red-800");

                            cont = 0;

                            break;
                        }


                }
            }, 8000);

        }

        function reinitLoop(time) {
            clearInterval(xx);
            setTimeout(loopSlider(), time);
        }



        function sliderButton1() {

            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-red-800");
            $("#sButton1").addClass("bg-red-800");
            reinitLoop(4000);
            cont = 0

        }

        function sliderButton2() {
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-red-800");
            $("#sButton2").addClass("bg-red-800");
            reinitLoop(4000);
            cont = 1

        }

        $(window).ready(function() {
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-red-800");


            loopSlider();






        });
    </script>
</head>

<body>
    <div class="container">

        <nav class="flex items-center justify-between flex-wrap  w-full bg-black bg-opacity-100 p-6">


            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <!-- <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg> -->
                <span class="font-bold text-xl tracking-tight">
                  <img src="images/logos.png">
              </span>
            </div>
            <div id="hamburgerbtn" class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-red-700 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
              </button>
            </div>
            <div id="mobileMenu" class="w-full block hidden md:flex md:flex-row flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-md lg:flex-grow">
                    <a href="index.html" class="block mt-4 lg:inline-block text-2xl lg:mt-0 text-yellow-500 hover:text-red-500 mr-4">
                  Home
                </a>
                    <a href="services.html" class="block mt-4 lg:inline-block text-2xl lg:mt-0 text-yellow-500 hover:text-red-500 mr-4">
                  Services
                </a>
                    <a href="products.html" class="block mt-4 lg:inline-block text-2xl lg:mt-0 text-yellow-500 hover:text-red-500 mr-4">
                    Products
                  </a>
                    <!-- <a href="#responsive-header" class="block mt-4 lg:inline-block font-bold lg:mt-0 text-red-700 hover:text-yellow-500 mr-4">
                  About Us
                </a> -->
                    <a href="contact.html" class="block mt-4 lg:inline-block text-2xl lg:mt-0 text-yellow-500 hover:text-red-500 mr-4">
                    Contact Us
                  </a>
                    <!-- <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-red-700 hover:text-white">
                  About Us
                </a> -->

                </div>
                <div>
                    <a href="book.html" class="inline-block text-sm px-4 py-2 leading-none border bg-yellow-500 rounded text-red border-red-400 hover:border-transparent hover:text-yellow-500 hover:bg-white mt-4 lg:mt-0">Book Now</a>
                </div>
            </div>
        </nav>

        <div class="flex flex-wrap pb-20 pt-20 gap-4">
            <!-- component -->
            <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3 text-yellow-500 text-center">
                <h1 style="font-size: 40px; text-align: center; padding-top: 80px; font-weight: 900; ">Tell Us About Your Car</h1>
            </div>
            <form class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3 h-72 " action="mailto:betelhemtilahun@gmail.com" method="post" enctype="text/plain">
                <div class="flex flex-wrap -mx-3 ">
                    <div class="w-full px-3 ">
                        <label class="block uppercase tracking-wide text-yellow-500 text-2xl mb-2 " for="grid-password ">
  Full Name
</label>
                        <input class="block w-full bg-gray-200 text-yellow-500 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 " id="nick " type="text ">

                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 ">
                    <div class="w-full px-3 ">
                        <label class="block uppercase tracking-wide text-yellow-500 text-2xl mb-2 " for="grid-password ">
  E-mail
</label>
                        <input class="block w-full bg-gray-200 text-yellow-500 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 " id="email " type="email ">
                    </div>
                </div>
                <!-- component -->
                <div class="flex ">


                    <style>
                        [x-cloak] {
                            display: none;
                        }
                    </style>

                    <div class="antialiased sans-serif">
                        <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                            <div class="container mx-auto px-4 py-2 md:py-10">
                                <div class="mb-5 w-64">

                                    <label for="datepicker" class="font-bold mb-1 text-gray-700 block">Select Date</label>
                                    <div class="relative">
                                        <input type="hidden" name="date" x-ref="date">
                                        <input type="text" readonly x-model="datepickerValue" @click="showDatepicker = !showDatepicker" @keydown.escape="showDatepicker = false" class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                            placeholder="Select date">

                                        <div class="absolute top-0 right-0 px-3 py-2">
                                            <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                        </div>


                                        <!-- <div x-text="no_of_days.length"></div>
                            <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                            <div x-text="new Date(year, month).getDay()"></div> -->

                                        <div class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0" style="width: 17rem" x-show.transition="showDatepicker" @click.away="showDatepicker = false">

                                            <div class="flex justify-between items-center mb-2">
                                                <div>
                                                    <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                                    <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                                </div>
                                                <div>
                                                    <button type="button" class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" :class="{'cursor-not-allowed opacity-25': month == 0 }" :disabled="month == 0 ? true : false" @click="month--; getNoOfDays()">
                                            <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                            </svg>  
                                        </button>
                                                    <button type="button" class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" :class="{'cursor-not-allowed opacity-25': month == 11 }" :disabled="month == 11 ? true : false" @click="month++; getNoOfDays()">
                                            <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>									  
                                        </button>
                                                </div>
                                            </div>

                                            <div class="flex flex-wrap mb-3 -mx-1">
                                                <template x-for="(day, index) in DAYS" :key="index">	
                                        <div style="width: 14.26%" class="px-1">
                                            <div
                                                x-text="day" 
                                                class="text-gray-800 font-medium text-center text-xs"></div>
                                        </div>
                                    </template>
                                            </div>

                                            <div class="flex flex-wrap -mx-1">
                                                <template x-for="blankday in blankdays">
                                        <div 
                                            style="width: 14.28%"
                                            class="text-center border p-1 border-transparent text-sm"	
                                        ></div>
                                    </template>
                                                <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">	
                                        <div style="width: 14.28%" class="px-1 mb-1">
                                            <div
                                                @click="getDateValue(date)"
                                                x-text="date"
                                                class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"	
                                            ></div>
                                        </div>
                                    </template>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <script>
                            const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                            const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

                            function app() {
                                return {
                                    showDatepicker: false,
                                    datepickerValue: '',

                                    month: '',
                                    year: '',
                                    no_of_days: [],
                                    blankdays: [],
                                    days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

                                    initDate() {
                                        let today = new Date();
                                        this.month = today.getMonth();
                                        this.year = today.getFullYear();
                                        this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                                    },

                                    isToday(date) {
                                        const today = new Date();
                                        const d = new Date(this.year, this.month, date);

                                        return today.toDateString() === d.toDateString() ? true : false;
                                    },

                                    getDateValue(date) {
                                        let selectedDate = new Date(this.year, this.month, date);
                                        this.datepickerValue = selectedDate.toDateString();

                                        this.$refs.date.value = selectedDate.getFullYear() + "-" + ('0' + selectedDate.getMonth()).slice(-2) + "-" + ('0' + selectedDate.getDate()).slice(-2);

                                        console.log(this.$refs.date.value);

                                        this.showDatepicker = false;
                                    },

                                    getNoOfDays() {
                                        let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                                        // find where to start calendar day of week
                                        let dayOfWeek = new Date(this.year, this.month).getDay();
                                        let blankdaysArray = [];
                                        for (var i = 1; i <= dayOfWeek; i++) {
                                            blankdaysArray.push(i);
                                        }

                                        let daysArray = [];
                                        for (var i = 1; i <= daysInMonth; i++) {
                                            daysArray.push(i);
                                        }

                                        this.blankdays = blankdaysArray;
                                        this.no_of_days = daysArray;
                                    }
                                }
                            }
                        </script>
                    </div>
                </div>
                <div class="inline-block w-full relative w-64 ">
                    <label class="block uppercase tracking-wide text-yellow-500 text-2xl mb-2 " for="grid-password ">
    Choose Your Car Type
  </label>
                    <select class="block w-full bg-gray-200 text-yellow-500 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 leading-tight focus:outline-none focus:shadow-outline ">
  <option>Volkswagen</option>
  <option>Toyota</option>
  <option>Ford Motor</option>
  <option>Nissan</option>
  <option>Hyundai</option>
  <option>Ford Motor</option>
  <option>Chevrolet</option>
  <option>Fiat</option>
  <option>Volvo</option>
  <option>Land Rover</option>
  <option>BMW</option>
  <option>Mercedes-Benz</option>
</select>

                </div>
                <div class="flex flex-wrap -mx-3 ">
                    <div class="w-full px-3 ">
                        <label class="block uppercase tracking-wide text-yellow-500 text-2xl mb-2 " for="grid-password ">
  Message
</label>
                        <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-yellow-500 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-34 resize-none " id="message "></textarea>
                    </div>
                </div>
                <div class="md:flex md:items-center ">
                    <div class="md:w-1/3 ">
                        <button class="shadow bg-red-700 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded " type="button ">
  Send
</button>
                    </div>

                </div>
            </form>
        </div>
        <footer class="footer bg-gray-900 relative pt-10 border-b-2 border-blue-700 ">
            <div class="container mx-auto px-6 ">

                <div class="sm:flex sm:mt-8 ">
                    <div class="sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between ">
                        <div class="flex flex-col ">
                            <span class="font-bold text-yellow-500 uppercase mb-2 ">
                    <img src="images/logos.png" style="width: 300px; height: 154px;">
                    <div class=" flex ml-20 text-center">
                      <a href="#" class="fa fa-facebook px-4 text-white"></a>
                      <a href="# " class="fa fa-twitter px-4 text-white "></a>
                      <a href="# " class="fa fa-instagram px-4 text-white "></a>
                      <a href="# " class="fa fa-linkedin px-4 text-white "></a>

                  </div>
                </span>

                        </div>
                        <div class="flex flex-col ">
                            <span class="font-bold text-gray-200 uppercase mb-2 ">Information</span>
                            <span class="my-2 "><a href="contact.html" class="text-gray-200 text-md hover:text-blue-500 ">Contact Us</a></span>
                            <span class="my-2 "><a href="services.html" class="text-gray-200 text-md hover:text-blue-500 ">Services</a></span>
                            <span class="my-2 "><a href="products.html" class="text-gray-200 text-md hover:text-blue-500 ">Products</a></span>
                        </div>
                        <div class="flex flex-col ">
                            <span class="font-bold text-gray-200 uppercase mt-4 md:mt-0 mb-2 ">Contact Us</span>
                            <span class="my-2 flex text-gray-200 "><svg width="24 " height="24 " viewBox="0 0 24 24 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                    <path d="M17.6569 16.6569C16.7202 17.5935 14.7616 19.5521 13.4138 20.8999C12.6327 21.681 11.3677 21.6814 10.5866 20.9003C9.26234 19.576 7.34159 17.6553 6.34315 16.6569C3.21895 13.5327 3.21895 8.46734 6.34315 5.34315C9.46734
            2.21895 14.5327 2.21895 17.6569 5.34315C20.781 8.46734 20.781 13.5327 17.6569 16.6569Z " stroke="#8b8b8b " stroke-width="2 " stroke-linecap="round " stroke-linejoin="round "/>
                    <path d="M15 11C15 12.6569 13.6569 14 12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11Z " stroke="#8b8b8b " stroke-width="2 " stroke-linecap="round " stroke-linejoin="round "/>
                    </svg>Bole S/C Woreda 07H.No.New Jacross St<br> Area Across from SETS Building<br> Addis Ababa Ethiopia</span>
                            <span class="my-2 flex text-gray-200 "><svg width="24 " height="24 " viewBox="0 0 24 24 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                    <path d="M3 8L10.8906 13.2604C11.5624 13.7083 12.4376 13.7083 13.1094 13.2604L21 8M5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19Z " stroke="#8b8b8b
            " stroke-width="2 " stroke-linecap="round " stroke-linejoin="round "/>
                    </svg> info@autoproaddis.com</span>
                            <span class="my-2 flex text-gray-200 "><svg width="24 " height="24 " viewBox="0 0 24 24 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                    <path d="M3 5C3 3.89543 3.89543 3 5 3H8.27924C8.70967 3 9.09181 3.27543 9.22792 3.68377L10.7257 8.17721C10.8831 8.64932 10.6694 9.16531 10.2243 9.38787L7.96701 10.5165C9.06925 12.9612 11.0388 14.9308 13.4835 16.033L14.6121
            13.7757C14.8347 13.3306 15.3507 13.1169 15.8228 13.2743L20.3162 14.7721C20.7246 14.9082 21 15.2903 21 15.7208V19C21 20.1046 20.1046 21 19 21H18C9.71573 21 3 14.2843 3 6V5Z " stroke="#8b8b8b " stroke-width="2 " stroke-linecap="round
            " stroke-linejoin="round "/>
                    </svg> +251 90 954 5555</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto px-6 ">
                <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center ">
                    <div class="sm:w-2/3 text-center py-6 ">
                        <p class="text-sm text-yellow-500 font-bold mb-2 ">
                            © 2020 AUTOPRO
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <style>
        .active {
            display: block;
        }
        
        .come-in {
            transform: translateY(280px);
            animation: come-in 0.9s ease forwards;
        }
        
        .come-in:nth-child(odd) {
            animation-duration: 0.6s;
        }
        
        .already-visible {
            transform: translateY(0);
            animation: none;
        }
        
        @keyframes come-in {
            to {
                transform: translateY(0);
            }
        }
    </style>

    <script>
        let hamburger = document.getElementById('hamburgerbtn');

        let mobileMenu = document.getElementById('mobileMenu');

        hamburger.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
        });
        (function($) {

            /**
             * Copyright 2012, Digital Fusion
             * Licensed under the MIT license.
             * http://teamdf.com/jquery-plugins/license/
             *
             * @author Sam Sehnert
             * @desc A small plugin that checks whether elements are within
             *     the user visible viewport of a web browser.
             *     only accounts for vertical position, not horizontal.
             */

            $.fn.visible = function(partial) {

                var $t = $(this),
                    $w = $(window),
                    viewTop = $w.scrollTop(),
                    viewBottom = viewTop + $w.height(),
                    _top = $t.offset().top,
                    _bottom = _top + $t.height(),
                    compareTop = partial === true ? _bottom : _top,
                    compareBottom = partial === true ? _top : _bottom;

                return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

            };

        })(jQuery);

        var win = $(window);

        var allMods = $(".module ");

        allMods.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("already-visible ");
            }
        });

        win.scroll(function(event) {

            allMods.each(function(i, el) {
                var el = $(el);
                if (el.visible(true)) {
                    el.addClass("come-in ");
                }
            });

        });
    </script>
</body>

</html>