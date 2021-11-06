<?php
$title='Results';
include_once 'backend/nav.php';
?>
<div class="md:ml-72 py-5 pb-8 px-2 lg:px-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-x-3 gap-y-8">
    <?php
        $b=0;
        while ($b <= 10) {
            ?>
                <div class="py-5 px-2 bg-white rounded-lg shadow-lg">
                    <div class="text-xl">Departmental President</div>
                    <div class="">
                        <?php
                            $a=0;
                            while ($a <= 4) {
                                ?>
                                    <div class="flex py-2 gap-2 items-center">
                                        <img src="../assets/images/avatars/3.jpeg" class="w-10 h-10 shadow-lg rounded-full" srcset="">
                                        <div class="capitalize flex-grow">firstname lastname</div>
                                        <div class="flex gap-2 ">
                                            <div class="">69%</div>
                                        </div>
                                    </div>
                                <?php
                                $a++;
                            }
                        ?>
                    </div>
                    <div class="mt-3">
                        <a href="" class="">
                            <div class="bg-green-400 py-2 w-full text-center text-white uppercase text-lg rounded-lg shadow-lg">
                                vote a candidate
                            </div>
                        </a>
                    </div>
                </div>
            <?php
            $b++;
        }
    ?>
</div>