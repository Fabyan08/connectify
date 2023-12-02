<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connectify</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Handlee&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


    <link rel="stylesheet" href="custom.css">
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
            background: none;
            display: none;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #83A2FF;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #83A2FF;
        }
    </style>
</head>

<body>
    <main class="font-raleway">
        <div class="bg-primary/40 absolute -top-[50px]  -right-[200px] w-[800px] h-[800px] rounded-full -z-20"></div>
        <section id="nav" class="pt-10 fixed z-40 mt-10 pb-10 justify-between items-center w-full  px-20 flex h-20">
            <div class="bg-primary -z-20 -top-[200px] -left-20  absolute w-80 h-80 rounded-full"></div>
            <a href="">
                <img src="assets/image/logo2.svg" class="w-16" alt="">
            </a>
            <div>
                <ul class="flex gap-5 bg-primary/40 backdrop-blur-md text-white text-xl rounded-full border-4 border-primary w-full py-5 px-10 font-semibold">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Tips & Blog</a></li>
                    <li><a href="">Mentor</a></li>
                </ul>
            </div>
            <div>
                <button>
                    <span><a href="">DAFTAR</a></span>
                </button>
            </div>
        </section>
        <section id="header">
            <span class="bg-blue-400/60 -left-24 top-60 -z-10 blur-[150px] w-96 h-96  rounded-full absolute"></span>
            <div class="md:flex relative z-10 pt-32 justify-between px-20 items-center">
                <div>
                    <h1 class="text-7xl text-grey font-bold">
                        <div class="flex items-center gap-2"> Masih Susah <div class="bg-primary w-20 h-2"></div>
                        </div>
                        <div class="text-[100px]"> Cari <span class="text-primary">Kerja?</span></div>
                    </h1>
                    <h1 class="text-gray-600 text-xl font-semibold pt-4">Dengan bantuan Connectify, kamu bakal dapetin pekerjaan impian kamu!</h1>
                    <div class="flex mt-6 flex-col gap-2">
                        <div class="bg-white/40 shadow-md backdrop-blur-lg rounded-xl p-4 w-96 h-20">
                            Lorem ipsum dolor sit.
                        </div>
                        <div class="bg-white/40 shadow-md backdrop-blur-lg rounded-xl p-4 w-96 h-20">
                            Lorem ipsum dolor sit.
                        </div>
                        <div class="bg-white/40 shadow-md backdrop-blur-lg rounded-xl p-4 w-96 h-20">
                            Lorem ipsum dolor sit.
                        </div>
                    </div>
                    <!-- <div class="flex justify-center">
                        <a href="" class="border-4 border-primary w-fit p-4">Know More </a>
                    </div> -->
                </div>
                <div class="bg-primary rounded-full w-10 h-10 animate-spin"></div>
                <span class="bg-blue-400/40 left-[800px]  -z-40 top-60 blur-3xl w-60 h-60  rounded-full absolute"></span>

                <div>
                    <dotlottie-player src="https://lottie.host/14b2e8f5-d912-4469-b8d3-68d3444d7eec/83cQotYGla.json" background="transparent" speed="1" style="width: 600px; height: 600px;" loop autoplay></dotlottie-player>
                </div>
            </div>
        </section>
        <section id="about" class=" px-20 font-semibold text-primary">
            <ul class="menu flex space-x-20 ">
                <div class="flex flex-col">
                    <div class="flex rounded-t-lg w-fit p-4 flex-row h-fit text-white space-x-20 bg-primary">
                        <li class="menu-item cursor-pointer" onclick="showSubmenu('about')">About </li>
                        <li class="menu-item cursor-pointer" onclick="showSubmenu('price')">Price </li>
                        <li class="menu-item cursor-pointer" onclick="showSubmenu('solution')">Solution </li>
                    </div>
                    <div>
                        <ul class="submenu text-white" id="about-submenu">
                            <h1 class="w-[600px] bg-primary/40 rounded-b-full p-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatibus.</h1>
                        </ul>

                        <ul class="submenu text-white" id="price-submenu">
                            <h1 class="w-[600px] bg-primary/40 rounded-b-full p-10">PRICE ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatibus.</h1>

                        </ul>

                        <ul class="submenu text-white" id="solution-submenu">
                            <h1 class="w-[600px] bg-primary/40 rounded-b-full p-10">SOLUTION ipsum dolor sit amet consectetur adipisicing elit. Sunt, voluptatibus.</h1>

                        </ul>
                    </div>
                </div>
            </ul>
            <!-- <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. In nihil nam deserunt quaerat! Porro itaque, sint eos sunt quaerat ipsa.</h1> -->
        </section>
        <section id="choose" class="mt-10 ">
            <h1 class=" text-center font-semibold text-lg  px-20 ">Kenapa Memilih Kami?</h1>
            <h1 class="text-center text-primary text-7xl font-bold  px-20 ">Yuk Kenalan, Connectify!</h1>

            <div class="bg-primary w-full h-20 py-20  px-20 gap-3 flex ">
                <div class="bg-white rounded-lg p-4 w-1/3 h-40">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, quaerat!</div>
                <div class="bg-white rounded-lg p-4 w-1/3 h-40">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, quaerat!</div>
                <div class="bg-white rounded-lg p-4 w-1/3 h-40">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, quaerat!</div>
            </div>

        </section>
        <section id="about2" class="mt-40  text-start font-semibold ">
            <h1 class="px-20 text-lg ">Tentang Kami</h1>
            <h1 class="px-20 text-primary text-7xl font-bold">Siapa Connectify?</h1>
            <div class="flex px-20 items-center justify-between">
                <img src="assets/image/about.svg" class="w-[680px]" alt="">
                <div class="w-1/2 text-start space-y-4">
                    <h1 class="text-5xl">Kami Adalah Teman Mentor Kamu!</h1>
                    <div class="space-y-4 bg-white/40 backdrop-blur-xl text-primary p-4 rounded-lg max-h-72  overflow-y-auto">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel officiis quibusdam eos, voluptas numquam dicta facere nostrum. Architecto eveniet ad numquam enim repudiandae consectetur, sit quae praesentium recusandae omnis voluptatem magni fugiat est. Quis, corporis libero maxime suscipit eum tempora.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat esse architecto a maxime porro iste sint, aliquid soluta amet iure error fuga accusantium dignissimos eaque, blanditiis laborum obcaecati quidem aut illum ipsa hic. Dicta magni magnam quia voluptatum quas aut?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat esse architecto a maxime porro iste sint, aliquid soluta amet iure error fuga accusantium dignissimos eaque, blanditiis laborum obcaecati quidem aut illum ipsa hic. Dicta magni magnam quia voluptatum quas aut?</p>
                    </div>
                </div>
            </div>
            <h1 class="px-20 text-lg text-end ">Perkenalkan</h1>

            <h1 class="px-20 text-primary text-7xl  text-end font-bold">Partner Kami</h1>
            <div class="mt-10 px-20 bg-white w-full h-fit py-10 flex gap-3 justify-between">

                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30">
                    <path fill="#1c1917" d="M 15.003906 3 C 8.3749062 3 3 8.373 3 15 C 3 21.627 8.3749062 27 15.003906 27 C 25.013906 27 27.269078 17.707 26.330078 13 L 25 13 L 22.732422 13 L 15 13 L 15 17 L 22.738281 17 C 21.848702 20.448251 18.725955 23 15 23 C 10.582 23 7 19.418 7 15 C 7 10.582 10.582 7 15 7 C 17.009 7 18.839141 7.74575 20.244141 8.96875 L 23.085938 6.1289062 C 20.951937 4.1849063 18.116906 3 15.003906 3 z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30">
                    <path fill="#1c1917" d="M 15.003906 3 C 8.3749062 3 3 8.373 3 15 C 3 21.627 8.3749062 27 15.003906 27 C 25.013906 27 27.269078 17.707 26.330078 13 L 25 13 L 22.732422 13 L 15 13 L 15 17 L 22.738281 17 C 21.848702 20.448251 18.725955 23 15 23 C 10.582 23 7 19.418 7 15 C 7 10.582 10.582 7 15 7 C 17.009 7 18.839141 7.74575 20.244141 8.96875 L 23.085938 6.1289062 C 20.951937 4.1849063 18.116906 3 15.003906 3 z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30">
                    <path fill="#1c1917" d="M 15.003906 3 C 8.3749062 3 3 8.373 3 15 C 3 21.627 8.3749062 27 15.003906 27 C 25.013906 27 27.269078 17.707 26.330078 13 L 25 13 L 22.732422 13 L 15 13 L 15 17 L 22.738281 17 C 21.848702 20.448251 18.725955 23 15 23 C 10.582 23 7 19.418 7 15 C 7 10.582 10.582 7 15 7 C 17.009 7 18.839141 7.74575 20.244141 8.96875 L 23.085938 6.1289062 C 20.951937 4.1849063 18.116906 3 15.003906 3 z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30">
                    <path fill="#1c1917" d="M 15.003906 3 C 8.3749062 3 3 8.373 3 15 C 3 21.627 8.3749062 27 15.003906 27 C 25.013906 27 27.269078 17.707 26.330078 13 L 25 13 L 22.732422 13 L 15 13 L 15 17 L 22.738281 17 C 21.848702 20.448251 18.725955 23 15 23 C 10.582 23 7 19.418 7 15 C 7 10.582 10.582 7 15 7 C 17.009 7 18.839141 7.74575 20.244141 8.96875 L 23.085938 6.1289062 C 20.951937 4.1849063 18.116906 3 15.003906 3 z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30">
                    <path fill="#1c1917" d="M 15.003906 3 C 8.3749062 3 3 8.373 3 15 C 3 21.627 8.3749062 27 15.003906 27 C 25.013906 27 27.269078 17.707 26.330078 13 L 25 13 L 22.732422 13 L 15 13 L 15 17 L 22.738281 17 C 21.848702 20.448251 18.725955 23 15 23 C 10.582 23 7 19.418 7 15 C 7 10.582 10.582 7 15 7 C 17.009 7 18.839141 7.74575 20.244141 8.96875 L 23.085938 6.1289062 C 20.951937 4.1849063 18.116906 3 15.003906 3 z"></path>
                </svg>
            </div>
        </section>
        <section id="review" class="px-20 mt-80  ">
            <div class="pl-96">
                <h1 class="text-6xl text-primary font-semibold">Review Of Connectify!</h1>
            </div>
            <div class="bg-primary border-4 w-full h-[400px] border-white rounded-xl">
                <div class="flex">
                    <img src="assets/image/review.svg" class="w-96 -mt-60" alt="">
                    <div class="p-10 text-white">
                        <h1 class=" font-semibold text-4xl ">Kenapa Kamu Harus Belajar di Sini?</h1>
                        <h1 class="text-lg">"Menurut aku belajar di sini tuh seru,,,.........." </h1>
                        <div class="flex mt-10 gap-3">
                            <div class="flex gap-3">
                                <div class="text-2xl">
                                    <i class="bi bi-alarm"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="text-3xl font-bold">Efisien</h1>
                                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, repellat!</h1>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="text-2xl">
                                    <i class="bi bi-alarm"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="text-3xl font-bold">Efisien</h1>
                                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, repellat!</h1>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="text-2xl">
                                    <i class="bi bi-alarm"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="text-3xl font-bold">Efisien</h1>
                                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, repellat!</h1>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
        <section id="mentor" class="mb-[700px] mt-10 px-20">
            <h1 class="text-primary text-center font-bold text-7xl">
                Mentor Keren Kami!
            </h1>

        </section>

        <section id="footer">

        </section>

    </main>
    <script>
        function showSubmenu(menuType) {
            // Sembunyikan semua submenu
            document.querySelectorAll('.submenu').forEach(function(submenu) {
                submenu.style.display = 'none';
            });

            // Tampilkan submenu yang sesuai dengan menu yang di klik
            var submenuId = menuType + '-submenu';
            var submenu = document.getElementById(submenuId);
            if (submenu) {
                submenu.style.display = 'block';
            }
        }
    </script>
</body>

</html>