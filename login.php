<?php
require_once("controller/loginAuth.php");
require_once("language/en.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Name</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />
    <script src="https://unpkg.com/dropzone"></script>
    <script src="https://unpkg.com/cropperjs"></script>
    <style>

    </style>
</head>

<body class="bg-gray-300" style="font-family:Roboto">
    <div class="font-sans antialiased bg-grey-lightest">
        <!-- Top Nav -->

        <!-- Content -->
        <div class="w-full bg-grey-lightest">

            <div class="container mx-auto py-8">

                <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
                    <div class="py-4 px-8 text-black text-xl border-b border-grey-lighter">
                        <?php echo $langArray['welcome_login'] ?>
                    </div>

                    <!--Upload Image-->
                    <div class="pb-4 px-8">
                        <form method="post" action="controller/loginController.php">
                            <div class="mb-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2"
                                    for="email"><?php echo $langArray['email'] ?></label>
                                <input name="email"
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email"
                                    type="email" placeholder="Your email address" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2"
                                    for="password"><?php echo $langArray['password'] ?></label>
                                <input name="password"
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                    id="password" type="password" placeholder="Your secure password">
                                <p class="text-grey text-xs mt-1"><?php echo $langArray['min_char'] ?></p>
                            </div>


                            <div class="flex items-center justify-between mt-8">
                                <input name="submit"
                                    class="bg-blue-600 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded-full"
                                    type="submit" value="<?php echo $langArray['login'] ?>" />
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- Footer -->

    </div>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</body>

</html>