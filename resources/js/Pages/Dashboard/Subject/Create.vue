<template>
    <Layout>
        <div>
            <h6 class="text-md">กรอกเอกสารประกอบการสอน</h6>
        </div>



      
        <div class="border-b border-gray-900/10 pb-12">          
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">           

                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium leading-6 text-gray-900"
                           for="prefix">คำนำหน้าชื่อ</label>
                    <div class="mt-2">
                        <input id="prefix" 
                               autocomplete="given-name"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4"
                               name="prefix"
                               type="text"/>
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium leading-6 text-gray-900"
                           for="first-name">ชื่อ</label>
                    <div class="mt-2">
                        <input id="first-name" 
                               autocomplete="given-name"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4"
                               name="first-name"
                               type="text"/>
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium leading-6 text-gray-900"
                           for="last-name">นามสกุล</label>
                    <div class="mt-2">
                        <input id="last-name"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4"
                               name="last-name"
                               type="text"/>
                    </div>
                </div>
            </div>

            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <div class="flex-1 min-w-0">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">คณะ</span> <!-- "Faculty" in Thai -->
                        </div>
                        <select class="select select-bordered" aria-label="Choose Faculty">
                            <option disabled selected>Pick one</option>
                            <option>Star Wars</option>
                            <option>Harry Potter</option>
                            <option>Lord of the Rings</option>
                            <option>Planet of the Apes</option>
                            <option>Star Trek</option>
                        </select>
                    </label>
                    </div>
                </div>
             
                <div class="sm:col-span-3">
                    <div class="flex-1 min-w-0">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">รูปภาพอาจารย์ผู้สอน</span>
                        </div>
                        <input type="file" class="input input-bordered" accept="image/*">
                    </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label class="block text-sm font-medium leading-6 text-gray-900"
                           for="prefix">รายวิชา </label>
                    <div class="mt-2">
                        <input id="prefix" 
                               autocomplete="given-name"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4"
                               name="prefix"
                               type="text"/>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label class="block text-sm font-medium leading-6 text-gray-900"
                           for="first-name">ชื่อวิชา</label>
                    <div class="mt-2">
                        <input id="first-name" 
                               autocomplete="given-name"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4"
                               name="first-name"
                               type="text"/>
                    </div>
                </div>

            </div>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                
                <div class="sm:col-span-3">
                    <label class="block text-sm font-medium leading-6 text-gray-900"
                           for="last-name">อาจารย์ผู้สอน: </label>
                    <div>
                        <input id="last-name"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4"
                               name="last-name"
                               type="text"/>
                    </div>
                </div>

                <div class="sm:col-span-3">                  
                    <div>
                        <label for="datePicker" class="block text-sm font-medium text-gray-700">วันที่เผยแพร่</label>
                        <input type="date" id="datePicker" name="datePicker" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>             
            </div>
            <div class="col-span-full mt-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900"
                           for="about">คำอธิบายรายวิชา</label>
                    <div class="mt-2">
                        <textarea id="about"
                                  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 ps-4"
                                  name="about"
                                  rows="3"/>
                    </div>
                </div>

                <div class="sm:col-span-3 mt-4">
                    <div class="flex-1 min-w-0">
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">ไฟล์เอกสาร</span>
                        </div>
                        <input type="file" class="input input-bordered" accept="image/*">
                    </label>
                    </div>
                </div>

                
         
       
            
        
          

        </div>


     
     

       
    </Layout>
</template>

<script>
import Layout from "@/Pages/Dashboard/Layout/Layout.vue";

export default {
    name: "SubjectCreate",
    components: {
        Layout
    }
}
</script>

<style scoped>

</style>
