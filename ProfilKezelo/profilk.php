<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Sacle - profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link rel="stylesheet" href="/Components/settings.css">
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
            background-image: url("pictures/library-of-alexandria-cover.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            filter: blur(4px) grayscale(100%);
            z-index: -1;
        }
    </style>
</head>
</head>
<body class="flex">

<div class="flex flex-col items-center w-56 min-h-screen overflow-hidden text-gray-400 bg-gray-900 rounded">
    <a class="flex items-center justify-center w-full px-3 mt-3" href="../KezdoOldal/index.php">
        <svg class="h-8 w-8 text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z"/>
            <path d="M18 15a6 6 0 1 1 -10.853 -3.529c1.926-2.338 4.763-3.327 3.848-8.47 2.355 1.761 5.84 5.38 2.022 9.406-1.136 1.091-.244 2.767 1.221 2.593.882-.105 2.023-.966 3.23-2.3.532.68.532 1.717.532 2.3z" />
        </svg>
        <span class="ml-2 text-sm font-bold">Sacle</span>
    </a>
    <div class="w-full px-2">

        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300 rounded" href="profilk.html">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                </svg>

                <span class="ml-2 text-sm font-medium">Általános</span>
            </a>

            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300 rounded" href="profilpriv.html">
                <svg xmlns="http://www.w3.org/2000/svg" fill="lol" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                </svg>

                <span class="ml-2 text-sm font-medium">Privát</span>
            </a>
            <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300 rounded" href="rolunk.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="w-6 h-6 " stroke="currentColor"><g fill="none" fill-rule="evenodd">
                    <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M7.775 5.573c-.97.977-1.597 2.395-1.85 4.126a1 1 0 0 1-1.27.816c-.276-.08-.449.172-.536.406c-.113.304-.147.745-.016 1.235c.114.425.517 1.31 1.09 1.257a1 1 0 0 1 1.039.672C7.248 17.057 9.799 19 12 19c2.201 0 4.752-1.943 5.768-4.915a1 1 0 0 1 1.042-.673c.573.055.977-.831 1.091-1.256c.131-.49.097-.931-.016-1.235c-.088-.235-.261-.487-.538-.406a1 1 0 0 1-1.272-.815c-.253-1.731-.88-3.15-1.85-4.126C15.272 4.614 13.91 4 12 4c-1.909 0-3.272.615-4.225 1.573m-1.419-1.41C7.726 2.785 9.622 2 12 2c2.379 0 4.273.785 5.644 2.164c1.156 1.163 1.88 2.69 2.25 4.373c.055.01.11.023.164.038c.869.232 1.429.916 1.702 1.65c.273.736.299 1.605.073 2.449c-.317 1.183-1.165 2.35-2.402 2.665C18.079 18.59 15.086 21 12 21c-3.087 0-6.08-2.412-7.431-5.662c-1.235-.317-2.081-1.483-2.398-2.664c-.226-.844-.2-1.713.073-2.45c.273-.733.833-1.417 1.702-1.65c.053-.014.106-.026.16-.036c.37-1.684 1.094-3.21 2.25-4.374Z"/></g>
                </svg>

                <span class="ml-2 text-sm font-medium">Rólunk</span>
            </a>
                </div>
        </div>
    </div>
    <a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-800 hover:bg-red-700 hover:text-red-300" href="#">
        <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
        </svg>
        <span class="ml-2 text-sm font-medium">Profil törlése</span>
    </a>
</div>
<div class="flex-1 custom-background  text-white p-4" style="background-color: rgb(0,0,0,0.6);">
    <div class="flex items-center justify-center">
        <div class="container-xl px-6 mt-4">
        <?php
            if(isset($_COOKIE["userdata"])) {
    // Retrieve the JSON string from the cookie
    $userDataJSON = $_COOKIE["userdata"];

    // Decode the JSON string to an associative array
    $userData = json_decode($userDataJSON, true);

    // Access the email from the array
    $email = $userData['email'];

    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'sacle');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query to check if email exists
    $email_check_sql = "SELECT * FROM felhasznalo WHERE email = ?";
    $stmt_check = $conn->prepare($email_check_sql);
    $stmt_check->bind_param("s", $email); // Itt már a $username változót használjuk
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    // If email exists, fetch data
    if ($result->num_rows > 0) {
        // Fetch user data
        $user_data = $result->fetch_assoc();
        // You can access user data like $user_data['column_name']

        // Close prepared statement and database connection
        $stmt_check->close();
        $conn->close();
        $csvFilePath = 'data.csv';
        $data = array($user_data);
    } else {
        // If email doesn't exist, output a message
        echo "Az email cím nem található az adatbázisban.";
    }


            }
            ?>

            <div class="row">
                <div class="col-xl-4" style="text-align: center">
                    <div class="card mb-4 mb-xl-0 " >

                        <div class="card-body text-left" style="display: flex;align-items: center;justify-content: center ">
                            <img class="img-account-profile rounded-circle mb-4" src="pictures/profil.png" alt="" style="width: 25%; height: 25%;">
                            <div class="mb-3 " style="font-size: 20px;padding-left: 20px ; ">
                                <label class="small mb-1" for="inputUsername" style="">Felhasználónév:</label>
                                <input class="form-control text-black text-black border border-black " id="inputUsername" type="text" size="30" placeholder="Add meg a felhasználó neved" Value="<?php echo $user_data['username'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-0 mb-4">
                <div class="col-xl-8">
                    <div class="card mb-4">

                        <div class="card-body">
                            <form>
                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6 mb-3">
                                        <label class="small mb-1" for="inputBirthday">Születési dátum:</label>
                                        <input class="form-control text-black text-black border border-black" id="inputBirthday" type="text" name="birthday" placeholder="Add meg a születési dátumod" value="" >
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Email cím:</label>
                                        <input class="form-control text-black text-black border border-black " id="inputEmailAddress" type="email" size="30" placeholder="Add meg az Email címed" value="<?php echo $user_data['email'] ?>">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6 mb-3">
                                        <label class="small mb-1" for="inputpassword">Jelszó:</label>
                                        <input class="form-control text-black text-black border border-black " id="inputpassword" type="password" name="password" placeholder="add meg a jelszavad" value="<?php echo $user_data['password'] ?>">
                                        &nbsp&nbsp&nbsp
    <input type="checkbox" onclick="pwShown()"> Jelszó megjelenítése
</div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputnewpassword">Új jelszó:</label>
                                        <input class="form-control text-black text-black border border-black "  id="inputnewpassword" type="password" placeholder="add meg új jelszavad" value="">
                                        <input type="checkbox" onclick="pwShow()"> Jelszó megjelenítése
</div>
                                </div>



                                <a class=" items-center justify-center w-fixed h-16 mt-auto bg-gray-800 text-gray-400 hover:bg-green-700 hover:text-green-300" href="#" style="display: flex ;">
                                    <svg class="w-6 h-6 stroke-current"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  />
                                    </svg>
                                    <span class="ml-2 text-sm font-medium">Új jelszó megerősítése</span>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function pwShow() {
        var x = document.getElementById("inputnewpassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    function pwShown() {
        var x = document.getElementById("inputpassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</body>
</html>