<?php
$title='Dashboard';
include_once 'backend/nav.php';
?>
<div class="md:ml-72 px-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 xl:grid-cols-5 gap-6 lg:px-5 py-5">
    <div class="order-2 sm:order-0 md:order-3 lg:order-4 sm:col-span-1 md:col-span-2 lg:col-span-1 xl:col-span-3">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-1 xl:grid-cols-3 gap-3">
            <div class="py-4 bg-blue-700 shadow-lg rounded-lg text-white px-4 divide-y">
                <div class="text-xs py-2">Total Number of eligible voters</div>
                <div class="text-5xl py-3">230</div>
            </div>
            <div class="py-4 bg-yellow-300 shadow-lg rounded-lg text-white px-4 divide-y">
                <div class="text-xs py-2">Total Number of Vote</div>
                <div class="text-5xl py-3">130</div>
            </div>
            <div class="py-4 bg-green-400 shadow-lg rounded-lg text-white px-4 divide-y">
                <div class="text-xs py-2">Total Number of Pending vote</div>
                <div class="text-5xl py-3">20</div>
            </div>
        </div>
    </div>
    <div class="sm:col-span-1 sm:order-2 md:col-span-2 md:order-0 lg:order-4 lg:col-span-1 xl:col-span-2">
         <div class="pb-8">
            <div class="bg-blue-100 py-12  px-8 rounded-lg shadow-lg">
                <div class="">
                    <div class="">Voting time left</div>
                    <div class="text-4xl">00:00:00<span class="bg-red-400 relative bottom-1 text-white py-1 px-2 rounded-full text-xs">ended</span></div>
                </div>
                <div class="capitalize text-gray-500">voting eligibility</div>
                <div class="flex">
                    <div class="flex-grow text-red-400">not eligible</div>
                    <div class="">
                        <a href="" class="bg-blue-700 text-gray-100 px-3 py-2 rounded-lg">
                            vote now
                        </a>
                    </div>
                </div>
            </div>
         </div>
         <div class="">
            <div class="text-xl font-bold">Top Performers</div>
            <div class="">
                <?php
                    $a = 0 ;
                    while ($a <= 4) {
                        echo '
                            <div class="flex py-2 gap-2 items-center">
                                <img src="../assets/images/avatars/3.jpeg" class="w-10 h-10 shadow-lg rounded-full" srcset="">
                                <div class="capitalize flex-grow">firstname lastname</div>
                                <div class="flex gap-2 ">
                                    <div class="pr-6">position</div>
                                    <div class="">69%</div>
                                </div>
                            </div>
                        ';
                        $a++;
                    }
                ?>
            </div>
            <a href="results.php" class="pt-2 font-thin">view more ></a>
         </div>
    </div>
    <div class="xl:col-span-5 md:col-span-2 order-2 sm:order-0 sm:col-span-2 md:order-3 lg:order-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
            <div class="">
                <div class="mt-4">
                    <div class="">Current Executives</div>
                    <div class="">
                        <div class="bg-white py-2 px-1 shadow-lg rounded-lg divide-x flex">
                            <div class="px-2">SN</div>
                            <div class="px-2 flex-grow">Fullname</div>
                            <div class="px-8">Position</div>
                        </div>
                        <?php
                            $a = 0 ;
                            while ($a <= 5) {
                                echo '
                                    <div class="bg-white py-2 px-1 shadow-lg rounded-lg divide-x flex items-center my-1">
                                        <div class="px-2">SN</div>
                                        <div class="px-2 flex-grow flex items-center gap-2">
                                            <img src="../assets/images/avatars/3.jpeg" class="w-10 h-10 shadow-lg rounded-full" srcset="">
                                            <div class="capitalize flex-grow">firstname lastname</div>
                                        </div>
                                        <div class="px-8">Position</div>
                                    </div>
                                ';
                                $a++;
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="mt-5 grid grid-cols-1 lg:grid-cols-2 gap-3">
                    <?php
                        $a =0;
                        while ($a <= 5) {
                            ?>
                                <div class="bg-white rounded-lg shadow-lg py-3 px-2">
                                    <div class="flex gap-2 items-center">
                                        <img src="../assets/images/avatars/3.jpeg" class="w-16 h-16 shadow-lg rounded-full" srcset="">
                                        <div class="capitalize">firstname lastname</div>
                                    </div>
                                    <div class="capitalize pl-3 pt-3">
                                        head of department (HOD)
                                    </div>
                                </div>
                            <?php
                            $a++;
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>