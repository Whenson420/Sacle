<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Sacle - Kezdőlap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link rel="stylesheet" href="../Components/settings.css">
    <style>
        .custom-background {
            position: relative;
        }
        .custom-background::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("Pictures/library-of-alexandria-cover.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            filter: blur(4px) grayscale(100%);
            z-index: -1;
        }
    </style>
</head>
<body class="flex">
<div class="flex flex-col items-center w-56 min-h-screen overflow-hidden text-gray-400 bg-gray-900 rounded">
    <a class="flex items-center justify-center w-full px-3 mt-3">
        <svg class="h-8 w-8 text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z"/>
            <path d="M18 15a6 6 0 1 1 -10.853 -3.529c1.926-2.338 4.763-3.327 3.848-8.47 2.355 1.761 5.84 5.38 2.022 9.406-1.136 1.091-.244 2.767 1.221 2.593.882-.105 2.023-.966 3.23-2.3.532.68.532 1.717.532 2.3z" />
        </svg>
        <span class="ml-2 text-sm font-bold">Sacle</span>
    </a>
    <div class="w-full px-2">
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                <input type="text" id="search" style="color: white;" class="appearance-none bg-transparent border-none w-full mr-3 py-1 px-2 leading-tight focus:outline-none">
                <button type="button" class="flex-shrink-0 bg-blue-500 text-white text-sm py-1 px-2 rounded focus:outline-none hover:bg-blue-700">Keresés</button>
            </a>
        </div>
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300 rounded" href="Tantárgyak/tantargy.html">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="ml-2 text-sm font-medium">Tantárgyak</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300 rounded" href="Beszelgetesek/index.html">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                </svg>
                <span class="ml-2 text-sm font-medium">Beszélgetések</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="Fileok/index.html">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                </svg>
                <span class="ml-2 text-sm font-medium">Fileok</span>
            </a>
        </div>
        <div id="SettingButton" onclick="openSettings()" class="flex flex-col items-center w-full mt-2 border-t border-gray-700">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">
                <svg class="w-6 h-6 stroke-current"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
                <span class="ml-2 text-sm font-medium">Beállitások</span>
            </a>
        </div>
    </div>
    <a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="../ProfilKezelo/profilk.html">
        <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="ml-2 text-sm font-medium">Profil</span>
    </a>
</div>
<div class="flex-1 custom-background text-white p-4">
    <div class="flex items-center justify-center">
        <div class="text-center">
            <div class="text-center inline-block border border-gray-200 p-4 rounded-md bg-gray-700">
                <h1 class="text-2xl font-bold mb-4">Üdvözöllek <?php
                if(isset($_COOKIE["userdata"])) {
                    // Retrieve the JSON string from the cookie
                    $userDataJSON = $_COOKIE["userdata"];

                    // Decode the JSON string to an associative array
                    $userData = json_decode($userDataJSON, true);

                    // Access the username from the array
                    $username = $userData['username'];

                    // Output the username
                    echo $username;
                } else {
                    echo "Felhasználó"; // Default text if cookie is not set
                }
            ?></h1>
            </div>
            <div class="max-w-screen-xl mx-auto p-4">
                <div class="flex flex-col md:flex-row -mx-1.5 p-4">
                    <a href="#" class="h-72 md:h-auto w-full md:w-7/12 mx-1.5 mb-6 md:mb-0 group">
                        <div class="h-72 md:h-full relative">
                            <img src="https://images.unsplash.com/photo-1624397640148-949b1732bb0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=564&q=80" class="absolute z-0 object-cover w-full h-72 md:h-full rounded-md">
                            <div class="absolute gradient w-full h-72 md:h-full rounded-md z-10"></div>
                            <div class="absolute left-0 right-0 bottom-0 p-4 z-30">
                                <div class="text-xs text-white hidden sm:block">
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="w-full md:w-5/12 mx-1.5">
                        <a href="#" class="flex items-center group mb-3 pb-3 border-b">
                            <img src="https://images.unsplash.com/photo-1633265486064-086b219458ec?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=96&amp;q=80" class="rounded-md object-cover mr-3 h-24 w-24">
                            <div class="flex-1">
                                <h2 class="font-bold text-lg leading-tight group-hover:underline mb-2">Facebook and Instagram encryption plans delayed by Meta until 2023</h2>
                                <div class="flex items-center">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="clock" class="h-3 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
                                    </svg>
                                    <span class="text-xs">1h | Stephen Ainsworth</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="flex items-center group mb-3 pb-3 border-b">
                            <img src="https://images.unsplash.com/photo-1516245834210-c4c142787335?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=96&q=80" class="rounded-md object-cover mr-3 h-24 w-24">
                            <div class="flex-1">
                                <h2 class="font-bold text-lg leading-tight group-hover:underline mb-2">El Salvador Bitcoin city planned at base of Conchagua volcano</h2>
                                <div class="flex items-center">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="clock" class="h-3 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
                                    </svg>
                                    <span class="text-xs">18h | Stephen Ainsworth</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="flex items-center group mb-3 pb-3 border-b">
                            <img src="https://images.unsplash.com/photo-1593941707882-a5bba14938c7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=96&q=80" class="rounded-md object-cover mr-3 h-24 w-24">
                            <div class="flex-1">
                                <h2 class="font-bold text-lg leading-tight group-hover:underline mb-2">New homes in England to have electric car chargers by law</h2>
                                <div class="flex items-center">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="clock" class="h-3 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
                                    </svg>
                                    <span class="text-xs">1d | Stephen Ainsworth</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="flex items-center group">
                            <img src="https://images.unsplash.com/photo-1521542464131-cb30f7398bc6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=96&q=80" class="rounded-md object-cover mr-3 h-24 w-24">
                            <div class="flex-1">
                                <h2 class="font-bold text-lg leading-tight group-hover:underline mb-2">Six million routers had serious security flaw</h2>
                                <div class="flex items-center">
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="clock" class="h-3 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
                                    </svg>
                                    <span class="text-xs">12d | Stephen Ainsworth</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="settings_bg">
    <div id="settings" class="flex">
        <div class="flex flex-col items-center w-56 overflow-hidden text-gray-400 bg-gray-900 rounded" style="height: 100%">
            <a class="flex items-center justify-center w-full px-3 mt-3">
                <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.75 4H19M7.75 4a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 4h2.25m13.5 6H19m-2.25 0a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 10h11.25m-4.5 6H19M7.75 16a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 16h2.25"/>
                </svg>
                <span class="ml-2 text-sm font-bold">Beállítások</span>
            </a>
            <div class="w-full px-2">
                <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700 hover:bg-gray-700">
                    <span onclick="general()" class="ml-2 text-sm font-medium">Általános</span>
                </div>
                <div class="flex flex-col items-center w-full mt-3 hover:bg-gray-700">
                    <span class="ml-2 text-sm font-medium">Kinézet</span>
                </div>
                <div class="flex flex-col items-center w-full mt-3 hover:bg-gray-700">
                    <span class="ml-2 text-sm font-medium">Értesítések</span>
                </div>
            </div>
            <div class="w-full px-2">
                <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700 hover:bg-gray-700">
                    <span class="ml-2 text-sm font-medium">Eszközök</span>
                </div>
            </div>
        </div>
        <div id="close_settings_div" onclick="closeSettings()">
            <p>
                X
            </p>
        </div>
        <div class="flex flex-col items-center w-3/4">
            <div id="titleGeneral" style="display: none">
                Általános
            </div>
            <div id="descriptionGeneral" style="display: none">
                <!--https://webdesign.tutsplus.com/color-schemes-with-css-variables-and-javascript--cms-36989t-->
                Szín összeállítás:
                <select name="theme-select" id="theme-select">
                <option value="light">Light</option>
                <option value="dark">Dark</option>
                </select>
            </div>
        </div>

    </div>
</div>
<script src="../Components/settings.js"></script>
</body>
</html>
