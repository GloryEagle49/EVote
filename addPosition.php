<?php
    $title='Add Position';
    include_once 'backend/nav.php';
?>
<div class="md:ml-72 py-5 pb-8 px-2 lg:px-5">
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-x-8">
        <div class="lg:col-span-2 py-3 flex justify-center items-center" style="min-height:85vh">
            <div class="py-3 px-2 bg-whitwe border rounded-lg shadow-lg w-96 lg:w-1/2">
                <form name="addform">
                    <input type="hidden" name="action" value="addPosition">
                    <div class="relative sm:top bg-white my-3 w-full flex flex-row  py-0 rounded-lg grid">
                        <i class="mt-3 ml-3 fa-1x fa fa-asterisk absolute text-gray-500"></i>
                        <input name="spotName" type="text" class="focus:outline-none placeholder-gray-500 px-8 rounded-lg w-full bg-gray-50 py-2" placeholder="Position Name"> 
                    </div>
                    <button class="relative sm:top bg-green-400 text-white my-3 w-full flex flex-row  py-3 rounded-lg grid uppercase">
                        Add Position
                    </button>
                </form>
            </div>
        </div>
        <div class="bg--800">df</div>
    </div>
</div>