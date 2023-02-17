<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navigation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
    <style rel="stylesheet">
        body {
            font-family: 'Work Sans';
        }

        .backdrop {
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body class="bg-gray-200">
    <!-- Navbar goes here -->
    <?php include("navbar.php"); ?>

    <div class="flex">
        <!--sidebar-->
        <?php include("sidebar.php"); ?>

        <!-- END of sidebar -->
        <main class="flex-1 ml-0 lg:ml-[15.6rem] relative mt-16">
            <div class="flex flex-col md:flex-col lg:flex-row">
                <div class="basis-1/1 p-8">
                    <div class="w-full rounded-md overflow-hidden shadow-lg bg-gray-50">
                        <div class="flex">
                            <div class="w-1/3 px-4 py-4"><span class="text-base font-bold">Cash Flow</span></div>
                            <div class="w-2/3 px-6 py-4">
                                <div class="float-right">
                                    <a href="#" class="">
                                        <span class="bg-gray-50 border-2 border-gray-300 rounded-md px-3 py-1 text-sm font-semibold text-gray-400 mb-2 hover:bg-sky-600 hover:text-white">Daily</span>
                                    </a>
                                    <a href="#" class="">
                                        <span class="bg-gray-50 border-2 border-gray-300 rounded-md px-3 py-1 text-sm
                                    font-semibold text-gray-400 mb-2 hover:bg-sky-600
                                    hover:text-white">Weekly</span>
                                    </a>
                                    <a href="#" class="">
                                        <span class="bg-gray-50 border-2 border-gray-300 rounded-md px-3 py-1 text-sm font-semibold text-gray-400 mb-2 hover:bg-sky-600 hover:text-white">Monthly</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row mr-8 md:mr-4 mt-[-8px]">
                            <div class="w-1/1 md:w-1/3 px-3 py-4 w-full my-4 ml-4 rounded-md overflow-hidden shadow-lg bg-sky-700 text-gray-50">
                                <div class="flex flex-col">
                                    <span class="text-base mb-4">
                                        Total Income
                                    </span>
                                    <span class="text-lg break-words font-bold">
                                        Rp.1.782.421.00
                                    </span>
                                    <span class="text-sm">
                                        20%<i class="ml-2 bi bi-arrow-up-circle-fill"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="w-1/1 md:w-1/3 px-3 py-4 w-full my-4 ml-4 rounded-md overflow-hidden shadow-lg bg-red-500 text-gray-50">
                                <div class="flex flex-col">
                                    <span class="text-base mb-4">
                                        Total Income
                                    </span>
                                    <span class="text-lg break-words font-bold">
                                        Rp.1.782.421.00
                                    </span>
                                    <span class="text-sm">
                                        20%<i class="ml-2 bi bi-arrow-down-circle-fill"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="w-1/1 md:w-1/3 px-3 py-4 w-full my-4 ml-4 rounded-md overflow-hidden shadow-lg bg-sky-50">
                                <div class="flex flex-col">
                                    <span class="text-base mb-4">
                                        Total Income
                                    </span>
                                    <span class="text-lg break-words font-bold">
                                        Rp.1.782.421.00
                                    </span>
                                    <span class="text-sm text-green-600">
                                        50%<i class="ml-2 bi bi-arrow-up-circle-fill"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row mt-6 gap-[20px]">
                        <div class="w-full rounded-md shadow-lg bg-gray-50 text-gray-800">

                            <div class="w-auto px-4 pt-4">
                                <span class="text-base font-bold">My Goals</span>
                            </div>
                            <div class="pt-4 w-auto my-2 mx-4 rounded-md text-gray-900">
                                <div class="flex flex-col">
                                    <div class="flex flex-row break-all">
                                        <div>
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="50" height="50" rx="25" fill="#0088D5" />
                                                <path d="M17.5 16.6667C16.5792 16.6667 15.8333 17.4125 15.8333 18.3333V28.3333C15.8333 29.2542 16.5792 30 17.5 30H23.3333V31.6667H22.5C22.04 31.6667 21.6667 32.04 21.6667 32.5C21.6667 32.96 22.04 33.3333 22.5 33.3333H27.5C27.96 33.3333 28.3333 32.96 28.3333 32.5C28.3333 32.04 27.96 31.6667 27.5 31.6667H26.6667V30H32.5C33.4208 30 34.1667 29.2542 34.1667 28.3333V18.3333C34.1667 17.4125 33.4208 16.6667 32.5 16.6667H17.5ZM17.5 18.3333H32.5V28.3333H17.5V18.3333Z" fill="#F9FAFB" />
                                            </svg>
                                        </div>
                                        <ul class="self-center ml-3 w-full">
                                            <li>
                                                <span class="text-sm font-medium">
                                                    Buy Macbook Pro M2
                                                </span>
                                            </li>
                                            <li>
                                                <span class="text-sm font-bold">
                                                    Rp10.231.002,00/Rp20.872.000,00
                                                </span>
                                            </li>
                                            <li>
                                                <div class="w-full bg-gray-300 rounded-full h-1">
                                                    <div class="bg-gray-800 h-1 rounded-full" style="width: 75%">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>

                                </div>

                                <div class="flex flex-col pt-4 w-full">
                                    <div class="flex flex-row break-all">
                                        <div>
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="50" height="50" rx="25" fill="#0088D5" />
                                                <path d="M20 16L15 23H16V34H34V23H35L30 16H20ZM23.8867 18H28.9707L31.1133 21H26.0293L23.8867 18ZM21.5 18.0996L25 23H32V32H24V26H20V32H18V23L21.5 18.0996ZM26 26V30H30V26H26Z" fill="#F9FAFB" />
                                            </svg>

                                        </div>
                                        <ul class="self-center ml-3 w-full">
                                            <li>
                                                <span class="text-sm font-medium">
                                                    House Down Payment
                                                </span>
                                            </li>
                                            <li>
                                                <span class="text-sm font-bold">
                                                    Rp5.231.002,00/Rp20.872.000,00
                                                </span>
                                            </li>
                                            <li>
                                                <div class="w-full bg-gray-300 rounded-full h-1">
                                                    <div class="bg-gray-800 h-1 rounded-full" style="width: 20%">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="flex flex-row pt-6">
                                    <span class="text-sm w-full">
                                        See More
                                    </span>
                                    <a href="#">
                                        <span><i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!--MY BUDGETS-->
                        <div class="w-full rounded-md shadow-lg bg-gray-50 text-gray-800">

                            <div class="w-auto px-4 pt-4">
                                <span class="text-base font-bold">My Budgets</span>
                            </div>
                            <div class="w-auto pt-4 my-2 mx-4 rounded-md text-gray-900">
                                <div class="flex flex-col">
                                    <div class="flex flex-row break-all">
                                        <div>
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" width="50" height="50" rx="25" fill="#0088D5" />
                                                <path d="M27.6763 16.66C27.6407 16.6613 27.6052 16.6647 27.57 16.6703H26.8161C26.6306 16.6679 26.4492 16.7244 26.2978 16.8315C26.1464 16.9387 26.0329 17.091 25.9735 17.2667C25.9141 17.4424 25.9119 17.6324 25.9673 17.8094C26.0226 17.9864 26.1326 18.1414 26.2814 18.252C25.7355 19.3292 25.0613 21.011 25.0613 22.8119V22.9884C24.4785 22.8543 23.8622 22.8426 23.2449 22.9558C22.9129 20.771 21.2108 19.4858 21.2108 19.4858L20.1381 20.8738C20.1381 20.8738 21.0738 21.6423 21.4182 22.8376C21.2565 22.8434 21.0964 22.8602 20.9384 22.889C20.2259 23.019 19.5559 23.3267 18.9917 23.7904C17.8634 24.7178 17.165 26.2385 17.165 28.071C17.165 31.0177 19.7712 33.3403 22.8679 33.3403C23.8138 33.3403 24.7128 33.1204 25.5069 32.7354C25.83 33.102 26.2964 33.3403 26.8161 33.3403H32.0803C33.0393 33.3403 33.835 32.5446 33.835 31.5856V22.8119C33.835 21.0103 33.1609 19.3274 32.6149 18.2503C32.763 18.1394 32.8723 17.9846 32.9272 17.8079C32.9821 17.6312 32.9797 17.4417 32.9204 17.2665C32.8611 17.0912 32.7479 16.9392 32.597 16.8321C32.4461 16.7251 32.2653 16.6684 32.0803 16.6703H31.3228C31.2798 16.6637 31.2362 16.6602 31.1926 16.66C31.1524 16.6607 31.1124 16.6641 31.0727 16.6703H27.8374C27.7841 16.6619 27.7302 16.6585 27.6763 16.66ZM28.1955 18.4251H30.7008C31.1362 19.2006 32.0803 21.0769 32.0803 22.8119V31.5856H27.1039C28.009 30.6579 28.5708 29.4333 28.5708 28.071C28.5708 26.2955 27.8901 24.8031 26.8006 23.8641C26.8116 23.8065 26.8168 23.7479 26.8161 23.6893V22.8119C26.8161 21.0769 27.7601 19.2006 28.1955 18.4251ZM23.8292 24.5683C24.0502 24.5507 24.2656 24.5631 24.4735 24.6026C24.8895 24.6816 25.2764 24.8725 25.62 25.1578C26.307 25.7284 26.8161 26.7094 26.8161 28.071C26.8161 29.9761 25.1021 31.5856 22.8679 31.5856C20.6337 31.5856 18.9197 29.9761 18.9197 28.071C18.9197 26.6748 19.4254 25.7049 20.1056 25.1458C20.7857 24.5868 21.6495 24.4049 22.5937 24.7157L22.873 24.8083L23.1506 24.7123C23.3817 24.6338 23.6083 24.586 23.8292 24.5683Z" fill="#F9FAFB" />
                                            </svg>

                                        </div>
                                        <ul class="self-center ml-3 w-full">
                                            <li>
                                                <span class="text-sm font-medium">
                                                    Food and Drinks
                                                </span>
                                            </li>
                                            <li>
                                                <span class="text-sm font-bold">
                                                    Rp3.231.002,00/Rp3.500.000,00
                                                </span>
                                            </li>
                                            <li>
                                                <div class="w-full bg-gray-300 rounded-full h-1">
                                                    <div class="bg-gray-800 h-1 rounded-full" style="width: 45%">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>

                                </div>

                                <div class="flex flex-col pt-4">
                                    <div class="flex flex-row break-all w-full">
                                        <div>
                                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" width="50" height="50" rx="25" fill="#0088D5" />
                                                <path d="M26.3333 16.6667L27.8275 18.1608L26.3333 19.6549L23.8333 17.1549L20.5407 20.4476L21.7191 21.626L23.8333 19.5117L26.3333 22.0117L29.0059 19.3392L30.5 20.8333V16.6667H26.3333ZM18 23.3333C17.54 23.3333 17.1667 23.7067 17.1667 24.1667V32.5C17.1667 32.96 17.54 33.3333 18 33.3333H33C33.46 33.3333 33.8333 32.96 33.8333 32.5V24.1667C33.8333 23.7067 33.46 23.3333 33 23.3333H18ZM19.5934 25H31.4066C31.4688 25.1753 31.5693 25.3344 31.7007 25.4659C31.8322 25.5974 31.9914 25.6979 32.1667 25.7601V30.9066C31.9914 30.9688 31.8322 31.0693 31.7007 31.2007C31.5693 31.3322 31.4688 31.4914 31.4066 31.6667H19.5934C19.5312 31.4914 19.4307 31.3322 19.2993 31.2007C19.1678 31.0693 19.0086 30.9688 18.8333 30.9066V25.7601C19.0086 25.6979 19.1678 25.5974 19.2993 25.4659C19.4307 25.3344 19.5312 25.1753 19.5934 25V25ZM25.5 25.8333C24.837 25.8333 24.2011 26.0967 23.7322 26.5656C23.2634 27.0344 23 27.6703 23 28.3333C23 28.9964 23.2634 29.6323 23.7322 30.1011C24.2011 30.5699 24.837 30.8333 25.5 30.8333C26.163 30.8333 26.7989 30.5699 27.2678 30.1011C27.7366 29.6323 28 28.9964 28 28.3333C28 27.6703 27.7366 27.0344 27.2678 26.5656C26.7989 26.0967 26.163 25.8333 25.5 25.8333ZM21.3333 27.5C20.8733 27.5 20.5 27.8725 20.5 28.3333C20.5 28.7942 20.8733 29.1667 21.3333 29.1667C21.7933 29.1667 22.1667 28.7942 22.1667 28.3333C22.1667 27.8725 21.7933 27.5 21.3333 27.5ZM29.6667 27.5C29.2067 27.5 28.8333 27.8725 28.8333 28.3333C28.8333 28.7942 29.2067 29.1667 29.6667 29.1667C30.1267 29.1667 30.5 28.7942 30.5 28.3333C30.5 27.8725 30.1267 27.5 29.6667 27.5Z" fill="#F9FAFB" />
                                            </svg>
                                        </div>
                                        <ul class="self-center ml-3 w-full">
                                            <li>
                                                <span class="text-sm font-medium">
                                                    Investment
                                                </span>
                                            </li>
                                            <li>
                                                <span class="text-sm font-bold">
                                                    Rp10.231.002,00/Rp20.872.000,00
                                                </span>
                                            </li>
                                            <li>
                                                <div class="w-full bg-gray-300 rounded-full h-1">
                                                    <div class="bg-gray-800 h-1 rounded-full" style="width: 45%">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="flex flex-row pt-6">
                                    <span class="text-sm w-full">
                                        See More
                                    </span>
                                    <a href="#">
                                        <span><i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row mt-6 gap-[20px]">
                        <!--Recent Transactions-->
                        <div class="w-full rounded-md shadow-lg bg-gray-50 text-gray-800">
                            <div class="w-auto px-4 pt-4">
                                <span class="text-base font-bold">Recent Transactions</span>
                            </div>
                            <div class="w-auto pt-4 my-2 mx-4 rounded-md text-gray-900">
                                <span class="text-sm font-bold">June 5</span>
                                <div class="flex flex-row break-all w-full">
                                    <table class="table-auto w-full mb-4">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="bi bi-plus-circle-fill text-blue-600 text-[30px]"></i>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <span class="text-sm font-bold">
                                                                Sent to VAA
                                                            </span>
                                                        </li>
                                                        <li class="mt-[-6px]">
                                                            <span class="text-xs">
                                                                E-Money Top Up
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-right"><span class="text-lg font-bold">Rp1.000.000.00</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="bi bi-dash-circle-fill text-red-600 text-[30px]"></i>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <span class="text-sm font-bold">
                                                                Sent to VAA
                                                            </span>
                                                        </li>
                                                        <li class="mt-[-6px]">
                                                            <span class="text-xs">
                                                                E-Money Top Up
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-right"><span class="text-lg font-bold">Rp1.000.000.00</span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <span class="text-sm font-bold">June 15</span>
                                <div class="flex flex-row break-all w-full">
                                    <table class="table-auto w-full">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="bi bi-plus-circle-fill text-blue-600 text-[30px]"></i>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <span class="text-sm font-bold">
                                                                Sent to VAA
                                                            </span>
                                                        </li>
                                                        <li class="mt-[-6px]">
                                                            <span class="text-xs">
                                                                E-Money Top Up
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-right"><span class="text-lg font-bold">Rp1.000.000.00</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="bi bi-dash-circle-fill text-red-600 text-[30px]"></i>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <span class="text-sm font-bold">
                                                                Sent to VAA
                                                            </span>
                                                        </li>
                                                        <li class="mt-[-6px]">
                                                            <span class="text-xs">
                                                                E-Money Top Up
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-right"><span class="text-lg font-bold">Rp1.000.000.00</span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="flex flex-row pt-6">
                                    <span class="text-sm w-full">
                                        See More
                                    </span>
                                    <a href="#">
                                        <span><i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!--Upcoming Transfer-->
                        <div class="w-full rounded-md shadow-lg bg-gray-50 text-gray-800">

                            <div class="w-auto px-4 pt-4">
                                <span class="text-base font-bold">Upcoming Transactions</span>
                            </div>
                            <div class="w-auto pt-4 my-2 mx-4 rounded-md text-gray-900">
                                <span class="text-sm font-bold">June 5</span>
                                <div class="flex flex-row break-all w-full">
                                    <table class="table-auto w-full mb-4">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="bi bi-dash-circle-fill text-red-600 text-[30px]"></i>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <span class="text-sm font-bold">
                                                                Sent to VAA
                                                            </span>
                                                        </li>
                                                        <li class="mt-[-6px]">
                                                            <span class="text-xs">
                                                                E-Money Top Up
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-right"><span class="text-lg font-bold">Rp1.000.000.00</span></td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>

                                <span class="text-sm font-bold">June 10</span>
                                <div class="flex flex-row break-all w-full">
                                    <table class="table-auto w-full mb-4">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="bi bi-plus-circle-fill text-blue-600 text-[30px]"></i>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <span class="text-sm font-bold">
                                                                Sent to VAA
                                                            </span>
                                                        </li>
                                                        <li class="mt-[-6px]">
                                                            <span class="text-xs">
                                                                E-Money Top Up
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-right"><span class="text-lg font-bold">Rp1.000.000.00</span></td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>

                                <span class="text-sm font-bold">June 15</span>
                                <div class="flex flex-row break-all w-full">
                                    <table class="table-auto w-full">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="bi bi-dash-circle-fill text-red-600 text-[30px]"></i>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <span class="text-sm font-bold">
                                                                Sent to VAA
                                                            </span>
                                                        </li>
                                                        <li class="mt-[-6px]">
                                                            <span class="text-xs">
                                                                E-Money Top Up
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="text-right"><span class="text-lg font-bold">Rp1.000.000.00</span></td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>

                                <div class="flex flex-row pt-6">
                                    <span class="text-sm w-full">
                                        See More
                                    </span>
                                    <a href="#">
                                        <span><i class="bi bi-chevron-compact-down"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="basis-1 lg:basis-1/3 mx-8 lg:mr-4 lg:mx-0 lg:py-8 lg:ml-[-5px]">
                    <div class="w-full rounded-md overflow-hidden shadow-lg bg-gray-50">
                        <div class="flex mb-8">
                            <div class="w-1/2 px-4 py-4 self-center"><span class="text-base font-bold">Main
                                    Account</span>
                            </div>
                            <div class="w-1/2 px-6 py-4">
                                <div class="float-right">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold rounded-xl py-2 px-2">
                                        <i class="bi bi-plus-circle-fill"></i> Add Account
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--CREDIT CARDS-->
                        <div class="flex flex-col mr-8 mt-[-8px]">
                            <div class="mx-4">
                                <div class="cc w-1/1 w-full ml-4 rounded-t-md overflow-hidden shadow-lg text-gray-50 bg-[url('../assets/scenery_cc.jpg')]">
                                    <div class="flex flex-col z-10 px-4 bg-indigo-800 bg-opacity-75 py-3">
                                    </div>
                                </div>
                            </div>

                            <div class="cc w-1/1 w-full mb-4 ml-4 rounded-md overflow-hidden shadow-lg text-gray-50">
                                <div class="flex flex-col bg-[url('../assets/scenery_cc.jpg')]">
                                    <div class="z-10 px-4 bg-indigo-500 bg-opacity-75 pt-4 pb-14">
                                        <span class="text-md">
                                            <i class="bi bi-link"></i> National Bank
                                        </span>
                                    </div>

                                </div>
                                <div class="z-10 px-4 py-6 bg-gray-50 bg-opacity-75 w-full">
                                    <div class="flex">
                                        <div class="w-1/3 self-center">
                                            <span class="text-md text-gray-700 font-bold">
                                                Tri Hariadi
                                            </span>
                                        </div>
                                        <div class="w-2/3">
                                            <div class="flex float-right">
                                                <p class="text-md text-gray-700 font-bold">
                                                    4359 7202 0099 4433
                                                    <svg width="18" height="18" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.77986 0.937502L3.78125 0.9375H10.1094L10.1107 0.937502C10.6693 0.939091 11.2046 1.1617 11.5996 1.55669C11.9946 1.95168 12.2172 2.48694 12.2187 3.04554C12.2188 3.04924 12.2187 3.05294 12.2186 3.05664L12.214 3.28125H12.4238C13.605 3.28125 14.5625 4.23877 14.5625 5.41992V11.9238C14.5625 13.105 13.605 14.0625 12.4238 14.0625H5.91992C4.73877 14.0625 3.78125 13.105 3.78125 11.9238V11.7188H3.54688L3.54554 11.7187C2.98694 11.7172 2.45168 11.4946 2.05669 11.0996C1.6617 10.7046 1.43909 10.1693 1.4375 9.61071L1.4375 9.60938V3.28125L1.4375 3.27986C1.43934 2.6592 1.68671 2.06447 2.12559 1.62559C2.56447 1.18671 3.1592 0.939337 3.77986 0.937502ZM4.71875 11.9238C4.71875 12.5872 5.25653 13.125 5.91992 13.125H12.4238C13.0872 13.125 13.625 12.5872 13.625 11.9238V5.41992C13.625 4.75653 13.0872 4.21875 12.4238 4.21875H11.7369C11.736 4.21875 11.7351 4.21875 11.7341 4.21875H5.91992C5.25653 4.21875 4.71875 4.75653 4.71875 5.41992V11.9238ZM11.2763 3.28125H5.91992C4.73877 3.28125 3.78125 4.23877 3.78125 5.41992V10.7812H3.54763C3.23696 10.7802 2.93929 10.6563 2.7196 10.4366C2.49992 10.217 2.37605 9.91931 2.375 9.60865V3.28199C2.37627 2.90924 2.52491 2.5521 2.7885 2.2885C3.0521 2.02491 3.40924 1.87627 3.78199 1.875H10.1087C10.4193 1.87605 10.717 1.99992 10.9366 2.2196C11.1553 2.43823 11.279 2.73409 11.2812 3.04314L11.2763 3.28125Z" fill="#373737" />
                                                    </svg>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="w-auto px-4 pt-4">
                            <span class="text-base font-bold">My Goals</span>
                        </div>
                        <ul class="text-sm font-medium border border-1 divide-x text-center text-gray-500 sm:flex mx-4 mb-4">
                            <li class="w-full">
                                <a href="#" class="inline-block w-full p-3 text-gray-900 bg-gray-100" aria-current="page">Income</a>
                            </li>

                            <li class="w-full">
                                <a href="#" class="inline-block w-full p-3 bg-white">Expense</a>
                            </li>
                            <li class="w-full">
                                <a href="#" class="inline-block w-full p-3 bg-white">Transfer</a>
                            </li>
                        </ul>
                        <form class="w-full max-w-lg mx-4">
                            <div class="flex flex-row mb-4 gap-2">
                                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="category-dropdown">
                                        Category
                                    </label>
                                    <button id="category-dropdown" data-dropdown-toggle="dropdownBottom" data-dropdown-placement="bottom" class="flex flex-row w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-left font-bold" type="button"><span class="inline-flex ml-3">
                                            <svg width="20" height="20" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-1">
                                                <rect width="15" height="15" rx="7.5" fill="#0088D4" />
                                                <path d="M8.15276 4.99851C8.14208 4.99889 8.13144 4.99992 8.12089 5.0016H7.89474C7.83912 5.00088 7.7847 5.01781 7.7393 5.04995C7.6939 5.08208 7.65984 5.12778 7.64203 5.18048C7.62422 5.23318 7.62356 5.29016 7.64015 5.34325C7.65674 5.39635 7.68973 5.44282 7.73438 5.476C7.57064 5.7991 7.36842 6.30355 7.36842 6.8437V6.89664C7.19362 6.85642 7.00877 6.85292 6.8236 6.88687C6.72402 6.23155 6.21351 5.84606 6.21351 5.84606L5.89176 6.26239C5.89176 6.26239 6.17242 6.4929 6.2757 6.85141C6.22721 6.85315 6.17919 6.85818 6.13178 6.86683C5.91807 6.90581 5.71712 6.9981 5.5479 7.13718C5.20947 7.41536 5 7.87146 5 8.42111C5 9.30495 5.7817 10.0016 6.71053 10.0016C6.99424 10.0016 7.26388 9.93564 7.50206 9.82016C7.59898 9.93012 7.73888 10.0016 7.89474 10.0016H9.47368C9.76133 10.0016 10 9.76293 10 9.47528V6.8437C10 6.30334 9.79781 5.79857 9.63405 5.47548C9.67848 5.44224 9.71126 5.3958 9.72771 5.3428C9.74417 5.28981 9.74345 5.23297 9.72566 5.1804C9.70788 5.12784 9.67393 5.08225 9.62867 5.05013C9.58342 5.01802 9.52917 5.00103 9.47368 5.0016H9.24651C9.23358 4.9996 9.22052 4.99857 9.20744 4.99851C9.19539 4.99871 9.18337 4.99974 9.17146 5.0016H8.20107C8.18509 4.99909 8.16892 4.99805 8.15276 4.99851ZM8.30849 5.52791H9.05993C9.19052 5.76053 9.47368 6.3233 9.47368 6.8437V9.47528H7.98109C8.25255 9.19702 8.42105 8.82973 8.42105 8.42111C8.42105 7.88858 8.21688 7.44094 7.89011 7.15928C7.8934 7.14201 7.89495 7.12444 7.89474 7.10686V6.8437C7.89474 6.3233 8.1779 5.76053 8.30849 5.52791ZM6.99887 7.37053C7.06515 7.36523 7.12975 7.36896 7.19213 7.38081C7.31689 7.4045 7.43294 7.46177 7.53598 7.54734C7.74205 7.71848 7.89474 8.01272 7.89474 8.42111C7.89474 8.99252 7.38064 9.47528 6.71053 9.47528C6.04041 9.47528 5.52632 8.99252 5.52632 8.42111C5.52632 8.00233 5.67799 7.71142 5.88199 7.54374C6.08599 7.37606 6.34507 7.32149 6.62829 7.41473L6.71207 7.44249L6.79533 7.4137C6.86464 7.39016 6.93259 7.37583 6.99887 7.37053Z" fill="#F9FAFB" />
                                            </svg>
                                            Food & Drinks
                                        </span>
                                    </button>

                                </div>
                                <div class="w-full md:w-1/2 mr-8">
                                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-last-name">
                                        Account
                                    </label>
                                    <button id="dropdownBottomButton" data-dropdown-toggle="dropdownBottom" data-dropdown-placement="bottom" class="flex flex-row w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-left font-bold" type="button"><span class="inline-flex ml-3 w-2/3">
                                            <svg width="20" height="20" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-1">
                                                <rect width="15" height="15" rx="7.5" fill="#4B5563" />
                                                <path d="M8.15276 4.99851C8.14208 4.99889 8.13144 4.99992 8.12089 5.0016H7.89474C7.83912 5.00088 7.7847 5.01781 7.7393 5.04995C7.6939 5.08208 7.65984 5.12778 7.64203 5.18048C7.62422 5.23318 7.62356 5.29016 7.64015 5.34325C7.65674 5.39635 7.68973 5.44282 7.73438 5.476C7.57064 5.7991 7.36842 6.30355 7.36842 6.8437V6.89664C7.19362 6.85642 7.00877 6.85292 6.8236 6.88687C6.72402 6.23155 6.21351 5.84606 6.21351 5.84606L5.89176 6.26239C5.89176 6.26239 6.17242 6.4929 6.2757 6.85141C6.22721 6.85315 6.17919 6.85818 6.13178 6.86683C5.91807 6.90581 5.71712 6.9981 5.5479 7.13718C5.20947 7.41536 5 7.87146 5 8.42111C5 9.30495 5.7817 10.0016 6.71053 10.0016C6.99424 10.0016 7.26388 9.93564 7.50206 9.82016C7.59898 9.93012 7.73888 10.0016 7.89474 10.0016H9.47368C9.76133 10.0016 10 9.76293 10 9.47528V6.8437C10 6.30334 9.79781 5.79857 9.63405 5.47548C9.67848 5.44224 9.71126 5.3958 9.72771 5.3428C9.74417 5.28981 9.74345 5.23297 9.72566 5.1804C9.70788 5.12784 9.67393 5.08225 9.62867 5.05013C9.58342 5.01802 9.52917 5.00103 9.47368 5.0016H9.24651C9.23358 4.9996 9.22052 4.99857 9.20744 4.99851C9.19539 4.99871 9.18337 4.99974 9.17146 5.0016H8.20107C8.18509 4.99909 8.16892 4.99805 8.15276 4.99851ZM8.30849 5.52791H9.05993C9.19052 5.76053 9.47368 6.3233 9.47368 6.8437V9.47528H7.98109C8.25255 9.19702 8.42105 8.82973 8.42105 8.42111C8.42105 7.88858 8.21688 7.44094 7.89011 7.15928C7.8934 7.14201 7.89495 7.12444 7.89474 7.10686V6.8437C7.89474 6.3233 8.1779 5.76053 8.30849 5.52791ZM6.99887 7.37053C7.06515 7.36523 7.12975 7.36896 7.19213 7.38081C7.31689 7.4045 7.43294 7.46177 7.53598 7.54734C7.74205 7.71848 7.89474 8.01272 7.89474 8.42111C7.89474 8.99252 7.38064 9.47528 6.71053 9.47528C6.04041 9.47528 5.52632 8.99252 5.52632 8.42111C5.52632 8.00233 5.67799 7.71142 5.88199 7.54374C6.08599 7.37606 6.34507 7.32149 6.62829 7.41473L6.71207 7.44249L6.79533 7.4137C6.86464 7.39016 6.93259 7.37583 6.99887 7.37053Z" fill="#F9FAFB" />
                                            </svg>
                                            Cash</span> <svg class="w-6 h-6 mt-[-3px] w-1/3 float-right" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div id="dropdownBottom" class="z-10 hidden bg-white divide-y rounded-lg shadow w-44">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownBottomButton">
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Debit
                                                    Card</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Credit
                                                    Card</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cash</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>


                            <div class="flex flex-row mb-4 gap-2">
                                <div class="w-full md:w-2/3 mb-6 md:mb-0">
                                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="category-dropdown">
                                        Total Amount
                                    </label>
                                    <input type="text" class="w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-left font-bold" value="Rp. 1.000.000">


                                </div>
                                <div class="w-full md:w-1/3 mr-8">
                                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-last-name">
                                        Account
                                    </label>
                                    <button id="dropdownBtnCurrency" data-dropdown-toggle="dropdownCurrency" data-dropdown-placement="bottom" class="flex flex-row w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-left font-bold" type="button">
                                        <span class="inline-flex ml-3 w-2/3">
                                            IDR
                                        </span> <svg class="w-6 h-6 mt-[-3px] w-1/3 float-right" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>

                                    <!-- Dropdown currency -->
                                    <div id="dropdownCurrency" class="z-10 hidden bg-white divide-y rounded-lg shadow w-44">
                                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownBottomButton">
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">USD</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">EUR</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">IDR</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-row mb-4 gap-2">
                                <div class="datepicker relative form-floating mb-3 w-1/2" data-mdb-toggle-button="false">
                                    <div>
                                        <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="datepicker">
                                            Date
                                        </label>
                                    </div>
                                    <input type="text" id="datepicker" class="flex flex-row w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-left font-bold" placeholder="Select a date" data-mdb-toggle="datepicker" />
                                </div>

                                <div class="timepicker relative form-floating mb-3 w-1/2 mr-8" data-mdb-with-icon="false" id="input-toggle-timepicker">
                                    <div>
                                        <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="timepicker">
                                            Time
                                        </label>
                                    </div>

                                    <input type="text" id="timepicker" class="w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 text-left font-bold" placeholder="Select a time" data-mdb-toggle="input-toggle-timepicker" />
                                </div>
                            </div>
                            <div class="mr-8">
                                <button class="w-full bg-blue-800 hover:bg-blue-900 text-gray-50 font-bold py-2 rounded-lg mb-8">
                                    Add Record
                                </button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>



        </main>
    </div>
    <script type="text/javascript">
        function dropdown() {
            document.querySelector("#submenu").classList.toggle("hidden");
            document.querySelector("#arrow").classList.toggle("rotate-0");
        }
        dropdown();

        function openSidebar(e) {
            document.querySelector(".sidebar").classList.toggle("hidden");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>