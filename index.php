<?php
require('controller/registerAuth.php');
require('controller/locale.php');
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
    img {
        display: block;
        max-width: 100%;
    }

    .preview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border: 1px solid red;
    }
    </style>
</head>

<body class="bg-gray-300" style="font-family:Roboto">
    <?php
    //include "sidebar.php";
    ?>

    <!-- Modal -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="uploadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                        <?php echo $langArray['crop_img']  ?></h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img src="" id="sample_image" />
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="button"
                        class="px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" id="crop"
                        class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="font-sans antialiased bg-grey-lightest">
        <!-- Top Nav -->

        <!-- Content -->
        <div class="w-full bg-grey-lightest">

            <div class="container mx-auto py-8">

                <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
                    <div class="py-4 px-8 text-black text-xl border-b border-grey-lighter">
                        <?php echo $langArray['welcome_index']  ?>
                    </div>
                    <!--Upload Image-->
                    <div class="flex flex-col justify-center items-center pt-4">
                        <div class="relative w-20 h-20 overflow-hidden bg-gray-600 rounded-full self-center">
                            <!--<svg class="absolute w-22 h-22 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" id="sample_image">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>-->
                            <div class="image_area">
                                <form method="post">
                                    <label for="upload_image">
                                        <img src="assets/sample-user.png" alt="" id="uploaded_image">
                                        <input type="file" name="image" class="image" id="upload_image"
                                            style="display:none">
                                    </label>
                                </form>

                            </div>

                        </div>
                        <div><?php echo $langArray['upload_image']  ?></div>

                    </div>

                    <div class="pb-4 px-8">
                        <form method="post" action="controller/registerController.php">
                            <div class="mb-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2"
                                    for="email"><?php echo $langArray['email']  ?></label>
                                <input name="email"
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email"
                                    type="email" placeholder="Your email address" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2"
                                    for="password"><?php echo $langArray['password']  ?></label>
                                <input name="password"
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                    id="password" type="password" placeholder="Your secure password" minlength="6">
                                <p class="text-grey text-xs mt-1"><?php echo $langArray['min_char']  ?></p>
                            </div>
                            <div class="mb-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2"
                                    for="password"><?php echo $langArray['confirm_password']  ?></label>
                                <input name="confirm_password"
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                    id="confirm_password" type="password" placeholder="Your secure password"
                                    onkeyup="check()">
                                <p class="text-grey text-xs mt-1" id="message"></p>
                            </div>
                            <div class="flex mb-4">
                                <div class="w-full mr-1">
                                    <label class="block text-grey-darker text-sm font-bold mb-2"
                                        for="subdomain"><?php echo $langArray['subdomain']  ?></label>
                                    <div class="flex flex-row gap-2">
                                        <div class="w-1/2"><input name="username" autocomplete="off"
                                                class="appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                                id="subdomain" type="text" placeholder="Subdomain"
                                                onkeydown="return /[a-zA-Z0-9]/.test(event.key)" maxlength="20">
                                            <p class="text-grey text-xs mt-1"><?php echo $langArray['max_char20']  ?>
                                            </p>
                                        </div>

                                        <div class="w-1/2">
                                            <input
                                                class="appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                                id="domain_name" type="text" value="<?php echo $hostdomain; ?>"
                                                readonly>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-8">
                                <input name="submit"
                                    class="bg-blue-600 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded-full"
                                    type="submit" value="<?php echo $langArray['sign_up']  ?>" />
                            </div>
                        </form>
                    </div>
                </div>
                <!--Choose Language-->
                <div class="rounded-md text-gray-700 mt-8 mx-4 justify-center">
                    <div class="flex justify-center">
                        <div class="pt-4"><span class="text-base font-bold">Choose Language</span></div>
                    </div>
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full">
                            <ul class="my-4 gap-4 text-center">

                                <li class="inline-flex self-center pb-2">
                                    <a href="?locale=id"><img src="assets/id.png" class="w-10 h-10 mx-4" alt=""></a>
                                </li>
                                <li class="inline-flex justify-center pb-2">

                                    <a href="?locale=en"><img src="assets/uk.png" class="w-10 h-10 mx-4" alt=""></a>
                                </li>
                                <li class="inline-flex self-center pb-2">
                                    <a href="?locale=es"><img src="assets/spain.png" class="w-10 h-10 mx-4" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="w-full bg-grey-lighter py-8">
            <div class="container mx-auto text-center px-8">
                <p class="text-grey-dark mb-2 text-sm">This is a product of <span class="font-bold">Your Company</span>
                </p>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript">
    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not matching';
        }
    }


    var $modal = $('#uploadModal');
    var image = document.getElementById('sample_image');
    var cropper;
    //modal.modal('show');

    $('#upload_image').change(function(event) {
        var files = event.target.files;
        var done = function(url) {
            image.src = url;
            $modal.modal('show');
        };
        //var reader;
        //var file;
        //var url;

        if (files && files.length > 0) {
            /*file = files[0];
      		if(URL)
      		{
        		done(URL.createObjectURL(file));
      		}
      		else if(FileReader)
      		{*/
            reader = new FileReader();
            reader.onload = function(event) {
                done(reader.result);
            };
            reader.readAsDataURL(files[0]);
            //}
        }
    });

    $modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });
    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 400,
            height: 400,
        });

        canvas.toBlob(function(blob) {
            //url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;

                $.ajax({
                    url: "controller/upload.php",
                    method: "POST",
                    data: {
                        image: base64data
                    },
                    success: function(data) {
                        console.log(data);
                        $modal.modal('hide');
                        $('#uploaded_image').attr('src', 'controller/' + data);
                        //alert("success upload image");
                    }
                });
            }
        });
    });
    </script>
</body>

</html>