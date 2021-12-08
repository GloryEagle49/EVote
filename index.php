<?php
$title='Dashboard';
include_once 'backend/nav.php';
?>
<div class="md:ml-72 px-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 xl:grid-cols-5 gap-6 lg:px-5 py-5">
    <div class="order-2 sm:order-0 md:order-3 lg:order-4 sm:col-span-1 md:col-span-2 lg:col-span-1 xl:col-span-3">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-1 xl:grid-cols-3 gap-3">
            <div class="py-4 bg-blue-700 shadow-lg rounded-lg text-white px-4 divide-y">
                <div class="text-xs py-2">Total Number of eligible voters</div>
                <div class="text-5xl py-3">2300</div>
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
        <marquee behavior="" direction="" style="padding:10px;margin-top:20px" class="">
            <div class="p-3 inline-block m-3 rounded-lg h-96 shadow-lg w-64 bg-green-200"></div>
            <div class="p-3 inline-block m-3 rounded-lg h-96 shadow-lg w-64 bg-green-200"></div>
            <div class="p-3 inline-block m-3 rounded-lg h-96 shadow-lg w-64 bg-green-200"></div>
            <div class="p-3 inline-block m-3 rounded-lg h-96 shadow-lg w-64 bg-green-200"></div>
            <div class="p-3 inline-block m-3 rounded-lg h-96 shadow-lg w-64 bg-green-200"></div>
        </marquee>
    </div>
    <div class="sm:col-span-1 sm:order-2 md:col-span-2 md:order-0 lg:order-4 lg:col-span-1 xl:col-span-2">
         <div class="pb-8">
            <div class="bg-blue-100 py-12  px-8 rounded-lg shadow-lg">
                <div class="">
                    <div class="">Voting time left</div>
                    <div class="text-4xl">
                        <span>00:00:00</span>
                        <span id="progressStatus"></span>
                    </div>
                </div>
                <div class="capitalize text-gray-500">voting eligibility</div>
                <div class="flex relative">
                    <?php
                        $eligible = $conn->query("SELECT * FROM receiptlog2 WHERE userid='$user_id' AND yr='$yr'");
                        if($eligible->num_rows > 0){
                            ?>
                                <div class="flex-grow text-green-400">eligible</div>
                            <?php
                        }else{
                            ?>
                                <div class="flex-grow text-red-400">not eligible</div>
                            <?php
                        }
                    ?>
                    <div id="voteBtn"></div>
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

<div class="modal hidden flex fixed w-screen h-screen z-50 bg-black bg-opacity-75 top-0 right-0 justify-center items-center">
    <div class="py-3 px-2 bg-whitwe border mx-3 bg-white bg-opacity-25 rounded-lg shadow-lg w-96">
        <form name="addform">
            <input type="hidden" name="action" value="startElection">
            <div class="relative">
                <div class="relative sm:top bg-gray-100 cursor-pointer my-3 w-full flex flex-row  py-0 rounded-lg grid">
                    <i class="mt-3 ml-3 fa-1x fa fa-spinner fa-pulse absolute text-gray-500"></i>
                    <i class="right-3 px-2 rotate-45 fa-3x fa cursor-pointer h-full fa-angle-down selector absolute text-gray-500"></i>
                    <div class="flex-grow pl-8 py-2 text-gray-500 selector">Select Election Duration</div>
                </div>
                <div class="relative -top-3 hidden">
                    <div class="option-container w-full absolute border bg-white cursor-pointer text-gray-800 z-20">
                        <div class="option hover:bg-blue-400 cursor-pointer hover:text-white">
                            <input value="60" type="radio" class="radio appearance-none hidden" required id="2" name="duration">
                            <label for="2" class="block px-4 cursor-pointer py-1 selector-list">1 Hour</label>
                        </div>
                        <div class="option hover:bg-blue-400 cursor-pointer hover:text-white">
                            <input value="90" type="radio" class="radio appearance-none hidden" required id="3" name="duration">
                            <label for="3" class="block px-4 cursor-pointer py-1 selector-list">1 Hour 30 minutes</label>
                        </div>
                        <div class="option hover:bg-blue-400 cursor-pointer hover:text-white">
                            <input value="120" type="radio" class="radio appearance-none hidden" required id="me" name="duration">
                            <label for="me" class="block px-4 cursor-pointer py-1 selector-list">2 Hours</label>
                        </div>
                        <div class="option hover:bg-blue-400 cursor-pointer hover:text-white">
                            <input value="150" type="radio" class="radio appearance-none hidden" required id="2" name="duration">
                            <label for="2" class="block px-4 cursor-pointer py-1 selector-list">2 Hours 30 minutes</label>
                        </div>
                        <div class="option hover:bg-blue-400 cursor-pointer hover:text-white">
                            <input value="180" type="radio" class="radio appearance-none hidden" required id="3" name="duration">
                            <label for="3" class="block px-4 cursor-pointer py-1 selector-list">3 Hours</label>
                        </div>
                        <div class="option hover:bg-blue-400 cursor-pointer hover:text-white">
                            <input value="210" type="radio" class="radio appearance-none hidden" required id="me" name="duration">
                            <label for="me" class="block px-4 cursor-pointer py-1 selector-list">3 hours 30 minutes</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-2">
                <button class="relative sm:top bg-green-400 text-white my-3 w-full flex flex-row  py-3 rounded-lg grid uppercase">
                    Set time
                </button>
                <span class="relative cursor-pointer cancel sm:top bg-red-400 text-center text-white my-3 w-full flex flex-row  py-3 rounded-lg grid uppercase">
                    cancel
                </span>
            </div>
        </form>
    </div>
</div>

<script>
    $('.cancel').click(()=>{
        $('.modal').addClass('hidden');
    })
    $('#voteBtn').on('click','.ste',()=>{
        $data = {'action':'checkelectime'}
        $.ajax({
            type: 'post',
            url:'backend/qureies.php',
            data: $data,
            dataType:'json',
            success: function(res){
                if(res.msg == "setime"){
                    $('.modal').removeClass('hidden');
                }else{
                    $data = {'action':'startN', 'perform':'1'}
                    $.ajax({
                        type: 'post',
                        url:'backend/qureies.php',
                        data: $data,
                        dataType:'json',
                        success: function(res2){
                            
                        }
                    })
                }
            }
        })
    })
    $('#voteBtn').on('click','.pau',()=>{
        $data = {'action':'startN', 'perform':'2'}
        $.ajax({
            type: 'post',
            url:'backend/qureies.php',
            data: $data,
            dataType:'json',
            success: function(res2){
                
            }
        })
    })
    $('#voteBtn').on('click','.stp',()=>{
        $data = {'action':'startN', 'perform':'3'}
        $.ajax({
            type: 'post',
            url:'backend/qureies.php',
            data: $data,
            dataType:'json',
            success: function(res2){
                
            }
        })
    })
</script>