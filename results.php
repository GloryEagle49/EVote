<?php
$title='Results';
include_once 'backend/nav.php';
?>
<div class="md:ml-72 py-5 pb-8 px-2 lg:px-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-x-3 gap-y-8">
    <?php
        $positions = $conn->query("SELECT * FROM posirtion");
        while ($position = $positions->fetch_array()) {
            ?>
                <div class="py-5 flex flex-col px-2 bg-white rounded-lg shadow-lg">
                    <div class="text-xl"><?php echo $position['spotname'] ?></div>
                    <div class="flex-grow">
                        <?php
                            $position_id= $position['sn'];
                            $yrN=date('Y');
                            $contestants = $conn->query("SELECT * FROM contestants WHERE position ='$position_id' AND yr='$yrN' LIMIT 3");
                            while ($contestant = $contestants->fetch_array()) {
                                ?>
                                    <div class="flex py-2 gap-2 items-center">
                                        <img src="../assets/images/avatars/3.jpeg" class="w-10 h-10 shadow-lg rounded-full" srcset="">
                                        <div class="capitalize flex-grow">firstname lastname</div>
                                        <div class="flex gap-2 ">
                                            <div class="">69%</div>
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="mt-3">
                        <div class="hidden">
                            <?php
                            include_once 'electionprogress.php';
                            ?>
                        </div>
                        <?php
                            if($voteNowrr == 4){
                                ?>
                                    <a href="voteNow.php?position=<?php echo $position['sn'] ?>" class="">
                                        <div class="bg-green-400 py-2 w-full text-center text-white uppercase text-lg rounded-lg shadow-lg">
                                            vote a candidate
                                        </div>
                                    </a>
                                <?php
                            }else{
                                ?>
                                    <a href="" class="">
                                        <div class="bg-gray-400 cursor-not-allowed py-2 w-full text-center text-white uppercase text-lg rounded-lg shadow-lg">
                                            vote a candidate
                                        </div>
                                    </a>
                                <?php   
                            }
                        ?>
                    </div>
                </div>
            <?php
        }
    ?>
</div>