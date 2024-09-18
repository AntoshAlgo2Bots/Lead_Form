<?php include('./navbar.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    </script>
    <title>Query Information</title>
</head>

<body>

    <div class="mx-10" style="margin-top: 5rem">
        <h1 class="text-3xl font-bold  underline text-center">Create Lead Details Form</h1>
        <form action="" method="post" id="myForm">
            <h1 id="statusBar"></h1>
            <fieldset class="flex gap-x-10 border-2 border-gray-300 px-5 rounded-lg">
                <legend class="font-bold">Person Information</legend>
                <fieldset class="md:w-3/6 border-2 border-gray-300 p-5 rounded-lg mb-5">
                    <legend class="font-bold"> Information</legend>
                    <div class="flex flex-wrap gap-x-10 justify-center">

                        <div class="flex items-center">
                            <div>

                                <label for="record_no" class="block mb-2 text-sm font-bold text-gray-900">Record Number
                                    :
                                </label>
                                <input type="text" id="record_no" name="record_no"
                                    class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                    placeholder="Auto Generated" disabled />
                            </div>
                            <!-- <div>

                                <button type="submit"
                                    class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div> -->
                        </div>
                        <div>
                            <label for="created_by" class="block mb-2 text-sm font-bold text-gray-900">Created By
                                :
                            </label>
                            <input type="text" id="created_by" name="created_by"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="Get Data" disabled />
                        </div>
                        <div>
                            <label for="created_date" class="block mb-2 text-sm font-bold text-gray-900">Created
                                Date :
                            </label>
                            <input type="datetime" id="created_date" name="created_date"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="" disabled />
                        </div>
                        <div>
                            <label for="status" class="block mb-2 text-sm font-bold text-gray-900">Status :
                            </label>
                            <input type="text" id="form_status" name="form_status"
                                class="border mb-4 border-gray-900 text-gray-900 mb-5 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="" disabled />
                        </div>
                        <div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Disqualified</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="md:w-5/6 border-2 border-gray-300 p-4 rounded-lg mb-5">
                    <legend class="font-bold">Lead Information</legend>
                    <div class="flex flex-wrap gap-x-10 justify-center">
                        <div>
                            <label for="lead_source" class="block mb-2 text-sm font-bold text-gray-900">Lead Source :
                            </label>
                            <select id="lead_source" name="lead_source" onchange="verifyAnswer()"
                                class=" border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5">
                                <option selected disabled hidden>Choose Lead</option>
                                <option value="Email">Email</option>
                                <option value="Direct_other">Direct-other</option>
                                <option value="References">References</option>
                            </select>
                        </div>
                        <div>
                            <label for="contact_person_details" class="block mb-2 text-sm font-bold text-gray-900">Ref
                                By : </label>
                            <input type="text" id="ref_By" name="ref_By"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="" />
                        </div>
                        <div>
                            <label for="contact_person_details" class="block mb-2 text-sm font-bold text-gray-900">Ref
                                Phone No : </label>
                            <input type="text" id="ref_phone_no" name="ref_phone_no"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="" />
                        </div>
                        <div>
                            <label for="lead_type" class="block mb-2 text-sm font-bold text-gray-900">Lead Type :
                            </label>
                            <select id="lead_type" name="lead_type"
                                class=" border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5">
                                <option selected>Choose Lead Type</option>
                                <option value="Dealer">Dealer</option>
                                <option value="Distributor">Distributor</option>
                                <option value="Retailer">Retailer</option>
                                <option value="Individual">Individual</option>
                            </select>
                        </div>
                        <div>
                            <label for="contact_person_details"
                                class="block mb-2 text-sm font-bold text-gray-900">Contact
                                Person Name : </label>
                            <input type="text" id="contact_person_name" name="contact_person_name"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="Person name" />
                        </div>
                        <div>
                            <label for="contact_person_details"
                                class="block mb-2 text-sm font-bold text-gray-900">Contact
                                Person Phone No : </label>
                            <input type="text" id="contact_person_phone_no" name="contact_person_phone_no"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="Person Phone no" />
                        </div>
                        <div>
                            <label for="contact_person_details"
                                class="block mb-2 text-sm font-bold text-gray-900">Contact
                                Person Email : </label>
                            <input type="text" id="contact_person_email" name="contact_person_email"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="Person Email" />
                        </div>
                        <div>
                            <label for="contact_person_details"
                                class="block mb-2 text-sm font-bold text-gray-900">Contact
                                Person Address : </label>
                            <input type="text" id="contact_person_address" name="contact_person_address"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="Person Address" />
                        </div>
                        <div>
                            <label for="query_received_date" class="block mb-2 text-sm font-bold text-gray-900">Lead
                                Receiving Date : </label>
                            <input type="date" id="lead_received_date" name="lead_received_date"
                                class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                                placeholder="" />
                        </div>

                    </div>
                </fieldset>

            </fieldset>
            <div class="flex justify-center mt-4">
                <button type="submit" id="getData"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save
                    Now</button>
            </div>
        </form>


    </div>


    <div class="mx-10 mt-4">
        <form action="./phpAjax/leadHeaderAjax.php" method="post" id="query_info_form">
            <fieldset class="border-2 border-gray-300 p-5 rounded-lg ">
                <legend class="font-bold">Query Information</legend>
                <div class="flex flex-wrap gap-x-16 md:mx-8">
                    <div>
                        <label for="assigned_to" class="block mb-2 text-sm font-bold text-gray-900">Assigned To :
                        </label>
                        <input type="text" id="assigned_to" name="assigned_to"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" />
                    </div>

                    <div>
                        <label for="query_start_date" class="block mb-2 text-sm font-bold text-gray-900">Query Start
                            Date : </label>
                        <input type="date" id="query_start_date" name="query_start_date"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>

                    <!-- 
                    <div>
                        <label for="re_query" class="block mb-2 text-sm font-bold text-gray-900">Re-query : </label>
                        <select id="countries" name="re_query"
                            class=" border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5">
                            <option selected>Choose one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div> -->

                    <div>
                        <label for="follow_up" class="block mb-2 text-sm font-bold text-gray-900">Follow Up :
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 ml-3 py-0.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Add Deatils
                            </button>

                        </label>
                        <input type="text" id="follow_up" name="follow_up"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>
                    <div>
                        <label for="followup_reminder_frequency" name="followup_reminder_frequency"
                            class="block mb-2 text-sm font-bold text-gray-900">Follow Up Reminder (In days) : </label>
                        <input type="date" id="followup_reminder_frequency" name="followup_reminder_frequency"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>
                    <div>
                        <label for="no_of_times" class="block mb-2 text-sm font-bold text-gray-900">No of times :
                        </label>
                        <input type="number" name="no_of_times" id="no_of_times"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>
                    <!-- <div>
                        <label for="re_query_closure_date" class="block mb-2 text-sm font-bold text-gray-900">Re-query
                            closure Date : </label>
                        <input type="date" name="re_query_closure_date"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div> -->
                    <!-- <div>
                        <label for="re_query_end_date" class="block mb-2 text-sm font-bold text-gray-900">Re-query End
                            Date : </label>
                        <input type="date" name="re_query_end_date"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>   -->
                    <div>
                        <label for="query_end_date" class="block mb-2 text-sm font-bold text-gray-900">Query End Date :
                        </label>
                        <input type="date" id="query_end_date" name="query_end_date"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>
                    <div>
                        <label for="installation_required"
                            class="block mb-2 text-sm font-bold text-gray-900">Installation
                            required :
                        </label>
                        <select id="installation_required" name="installation_required"
                            onchange="installationRequired()"
                            class=" border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5">
                            <option selected disabled hidden>Choose one</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div>
                        <label for="tentative_installation" class="block mb-2 text-sm font-bold text-gray-900">Tentative
                            Installation Date :
                        </label>
                        <input type="date" name="tentative_installation" id="tentative_installation"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required disabled />
                    </div>
                    <div>
                        <label for="tentative_delivery_date"
                            class="block mb-2 text-sm font-bold text-gray-900">Tentative
                            Install. Delivery Date:
                        </label>
                        <input type="date" name="tentative_delivery_date" id="tentative_delivery_date"
                            class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-52 p-1.5"
                            placeholder="" required />
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Disqualified</button>
                </div>
                <div>



                    <div class="relative overflow-x-auto md:mx-8 mt-4">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Serial No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Follow up Start Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Follow up End Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Remarks
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Remind Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        1
                                    </th>
                                    <td class="px-6 py-4">
                                        22/02/2025
                                    </td>
                                    <td class="px-6 py-4">
                                        31/01/2045
                                    </td>
                                    <td class="px-6 py-4">
                                        abc
                                    </td>
                                    <td class="px-6 py-4">
                                        31/01/2045
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        2
                                    </th>
                                    <td class="px-6 py-4">
                                        22/02/2025
                                    </td>
                                    <td class="px-6 py-4">
                                        31/01/2045
                                    </td>
                                    <td class="px-6 py-4">
                                        abc
                                    </td>
                                    <td class="px-6 py-4">
                                        31/01/2045
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        3
                                    </th>
                                    <td class="px-6 py-4">
                                        22/02/2025
                                    </td>
                                    <td class="px-6 py-4">
                                        31/01/2045
                                    </td>
                                    <td class="px-6 py-4">
                                        jkl
                                    </td>
                                    <td class="px-6 py-4">
                                        31/01/2045
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="flex justify-center mt-4">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update
                        Details</button>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save
                        Now</button>
                </div>
            </fieldset>

            <!-- Main modal -->
            <div id="default-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Follow Up Details
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 w-full m-auto border border-gray-700">
                            <div class="sm:ml-10 ">
                                <div>

                                    <label for="serial_no" class="block mb-2 text-sm font-bold text-gray-900">Serial No
                                        :
                                    </label>
                                    <input type="text" id="serial_no" name="serial_no"
                                        class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-1.5"
                                        placeholder="Auto Generated" disabled />
                                </div>
                            </div>
                            <hr class="border-b border-gray-400">
                            <div class="flex flex-wrap gap-x-10 justify-center mt-4">
                                <div>
                                    <label for="follow_up_start_date"
                                        class="block mb-2 text-sm font-bold text-gray-900"> Follow up Start Date
                                        :
                                    </label>
                                    <input type="date" id="follow_up_start_date" name="follow_up_start_date"
                                        class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-1.5"
                                        placeholder="" />
                                </div>
                                <div>
                                    <label for="follow_up_end_date"
                                        class="block mb-2 text-sm font-bold text-gray-900">Follow up End Date :
                                    </label>
                                    <input type="date" id="follow_up_end_date" name="follow_up_end_date"
                                        class="border mb-4 border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-1.5"
                                        placeholder="" />
                                </div>
                                <div>
                                    <label for="remarks" class="block mb-2 text-sm font-bold text-gray-900">Remarks :
                                    </label>
                                    <input type="text" id="remarks" name="remarks"
                                        class="border mb-4 border-gray-900 text-gray-900 mb-5 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-1.5"
                                        placeholder="" />
                                </div>
                                <div>
                                    <label for="remind_date" class="block mb-2 text-sm font-bold text-gray-900">Remind
                                        Date :
                                    </label>
                                    <input type="date" id="remind_date" name="remind_date"
                                        class="border mb-4 border-gray-900 text-gray-900 mb-5 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-1.5"
                                        placeholder="" />
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="default-modal" type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-1 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                            <button data-modal-hide="default-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-1 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        <fieldset class="p-5 border-2 rounded-md border-gray-300 mt-5">
            <legend class="font-bold">Item Information</legend>
            <div class="flex justify-between flex-wrap">
                <div class="w-full">
                    <div>
                        <input type="radio" name="goods" checked id="">
                        <span class="text-xs font-bold">Finish Goods</span>
                    </div>

                    <div class="flex flex-wrap items-center border gap-x-5 border-gray-900 w-full p-2 rounded-lg mt-2">
                        <div>
                            <input id="default-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:border-gray-600">
                        </div>
                        <div>
                            <label class="block text-sm">S. No : </label>
                            <input type="text" name="item_serial_no"
                                class="w-12 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Item Name : </label>
                            <input type="text" name="item_name"
                                class="md:w-32 w-40 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Item Qty : </label>
                            <input type="number" name="item_qty"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Rate : </label>
                            <input type="number" name="item_rate"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Total : </label>
                            <input type="number" name="item_total"
                                class="w-28 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>

                        <div>

                            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                class="text-gray-900 mt-5  focus:outline-none border border-gray-900 px-1  font-medium rounded-lg text-xs py-1 text-center"
                                type="button">if Ship another address </button>
                        </div>
                        <div class="w-28 h-24 border border-gray-900 rounded-md">
                            <img class="w-28 h-24 rounded-md" src="./images.png" alt="image preview">
                        </div>

                        <div>
                            <label class="block text-sm">SO Number : </label>
                            <input type="number" name="item_so_number"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Created By : </label>
                            <input type="text" name="item_so_number"
                                class="w-28 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <label class="block text-sm">Status : </label>
                            <input type="text" name="item_so_number"
                                class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                style="border-color: #C8A1E0;" /><br>
                        </div>
                        <div>
                            <!-- <button
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Create SO
                            </button> -->

                            <button data-modal-target="extralarge-modal9" data-modal-toggle="extralarge-modal9"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Create SO
                            </button>
                        </div>
                    </div>
                    <div class="block">
                        <div id="finish_field"></div>
                    </div>
                    <div class="mt-2"><button onclick="finish_field()"
                            class="text-gray-900  focus:outline-none border border-gray-900 px-2  font-medium rounded-lg text-xs py-1 text-center"
                            type="button">Add Items</button>
                        <button onclick="remove_finish_field()" id="remove_btn"
                            class="text-gray-900  focus:outline-none border border-gray-900 px-2  font-medium rounded-lg text-xs py-1 text-center"
                            type="button">Remove Items</button>

                    </div>

                    <div class=" border-t border-gray-900 mt-4 pt-2">
                        <div>
                            <input type="radio" name="goods" onclick="radio_btn()">
                            <span class="text-xs font-bold">Raw Material</span>
                        </div>

                        <div class="border border-gray-900 w-full p-2 rounded-lg mt-2" id="raw_section"
                            style="display: none;">
                            <div class="flex flex-wrap items-center gap-x-5 ">
                                <div>
                                    <input id="default-checkbox" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:border-gray-600">
                                </div>
                                <div>
                                    <label class="block text-sm">S. No : </label>
                                    <input type="text" name="item_serial_no"
                                        class="w-12 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <label class="block text-sm">Item Name : </label>
                                    <input type="text" name="item_name"
                                        class="md:w-32 w-40 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <label class="block text-sm">Item Qty : </label>
                                    <input type="number" name="item_qty"
                                        class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <label class="block text-sm">Rate : </label>
                                    <input type="number" name="item_rate"
                                        class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <label class="block text-sm">Total : </label>
                                    <input type="number" name="item_total"
                                        class="w-28 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>

                                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                        class="text-gray-900 mt-5  focus:outline-none border border-gray-900 px-1  font-medium rounded-lg text-xs py-1 text-center"
                                        type="button">if Ship another address </button>
                                </div>
                                <div class="w-28 h-24 border border-gray-900 rounded-md">
                                    <img class="w-28 h-24 rounded-md" src="./images.png" alt="image preview">
                                </div>

                                <div>
                                    <label class="block text-sm">SO Number : </label>
                                    <input type="number" name="item_so_number"
                                        class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <label class="block text-sm">Created By : </label>
                                    <input type="text" name="item_so_number"
                                        class="w-28 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <label class="block text-sm">Status : </label>
                                    <input type="text" name="item_so_number"
                                        class="w-24 rounded-md border text-xs border-gray-500 bg-white text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" /><br>
                                </div>
                                <div>
                                    <button
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Create SO
                                    </button>
                                </div>
                            </div><br>
                        </div>


                        <!-- Main modal -->
                        <div id="crud-modal" tabindex="-1" aria-hidden="true"
                            class="overflow-y-auto overflow-x-hidden hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white  rounded-lg shadow">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 ">
                                            Add Shipping Address
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="crud-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-4 md:p-5">
                                        <div class="grid gap-4 mb-4 grid-cols-2 pb-5">
                                            <div class="col-span-2 w-3/4 m-auto mt-3">
                                                <label for="" class="block mb-2 text-sm font-medium text-gray-900">User
                                                    Name : </label>
                                                <input type="text" name="user_name" id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    required="">
                                            </div>
                                            <div class="col-span-2 w-3/4 m-auto">
                                                <label for="" class="block mb-2 text-sm font-medium text-gray-900">User
                                                    Address : </label>
                                                <input type="text" name="user_address" id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    required="">
                                            </div>
                                            <div class="col-span-2 w-3/4 m-auto">
                                                <label for="" class="block mb-2 text-sm font-medium text-gray-900">User
                                                    Email : </label>
                                                <input type="text" name="user_email" id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    required="">
                                            </div>
                                            <div class="col-span-2 w-3/4 m-auto">
                                                <label for="name"
                                                    class="block mb-2 text-sm font-medium text-gray-900">User
                                                    Phone Number : </label>
                                                <input type="text" name="user_phone_no" id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400 darkdark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    required="">
                                            </div>
                                            <div class="col-span-2 w-3/4 m-auto flex justify-center mt-3">
                                                <button
                                                    class="focus:outline-none font-medium border border-gray-900 px-5 py-3  font-medium rounded-lg text-xs py-1 text-center"
                                                    type="button">Add Address</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div id="add_btn" style="display: none;">
                            <div>
                                <div id="raw_field"></div>
                            </div>
                            <div class="mt-2">
                                <button onclick="raw_field()"
                                    class="focus:outline-none font-medium border border-gray-900 px-2  font-medium rounded-lg text-xs py-1 text-center"
                                    type="button">Add Items</button>
                                <button id="raw_remove"
                                    class=" focus:outline-none font-medium border border-gray-900 px-2  font-medium rounded-lg text-xs py-1 text-center"
                                    type="button">Remove Items</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="w-40 h-40 mt-5 border border-gray-900 rounded-md">
                    <img src="" alt="item preview">
                </div> -->
            </div>
        </fieldset>

        <div id="extralarge-modal9" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-7xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow underline dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">
                            Sales Order creation
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="extralarge-modal9">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="">
                        <form action="#">
                            <div class="max-w-7xl m-auto flex px-10 gap-x-7 mt-5">
                                <fieldset class="w-1/6 p-5 border-2 rounded-md border-gray-900"
                                    style="border-color: #674188;">
                                    <legend class="font-bold">Header Information</legend>
                                    <div class="">
                                        <div>
                                            <label for=""
                                                class=" w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Sales
                                                Order Number
                                                :
                                            </label>
                                            <input type="text" name="sales_order_number"
                                                class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>




                                        <div class="">
                                            <label
                                                class="w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">User
                                                Name: </label>
                                            <input type="text" name="username"
                                                class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="">
                                            <label
                                                class="w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">User
                                                Address: </label>
                                            <input type="text" name="user_address"
                                                class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="">
                                            <label
                                                class="w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">User
                                                Phone Number:
                                            </label>
                                            <input type="text" name="user_phone_number"
                                                class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="">
                                            <label
                                                class="w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">User
                                                Email :
                                            </label>
                                            <input type="text" name="user_email"
                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="w-5/6 p-5 border-2 rounded-md border-gray-900"
                                    style="border-color: #674188;">
                                    <legend class="font-bold">Item Information</legend>
                                    <div class=" justify-between column">
                                        <div class="">
                                            <div>
                                                <!-- finish items data -->
                                                <input type="radio" name="goods" checked id="">
                                                <span class="text-xs font-bold">Finish Goods</span>
                                            </div>



                                            <div class="max-w-[920px] mx-auto my-3">
                                                <div
                                                    class="relative flex flex-col w-full h-full  text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
                                                    <table class="w-full text-left table-auto min-w-max">
                                                        <thead>
                                                            <tr class="border-b border-slate-300 bg-slate-50">
                                                                <th
                                                                    class="p-4 text-sm font-normal leading-none text-slate-500">
                                                                    S.no</th>
                                                                <th
                                                                    class="p-4 text-sm font-normal leading-none text-slate-500">
                                                                    item name</th>
                                                                <th
                                                                    class="p-4 text-sm font-normal leading-none text-slate-500">
                                                                    item code</th>
                                                                <th
                                                                    class="p-4 text-sm font-normal leading-none text-slate-500">
                                                                    Rate</th>
                                                                <th
                                                                    class="p-4 text-sm font-normal leading-none text-slate-500">
                                                                    item Qty</th>
                                                                <th
                                                                    class="p-4 text-sm font-normal leading-none text-slate-500">
                                                                    Total price</th>
                                                                <th
                                                                    class="p-4 text-sm font-normal leading-none text-slate-500">
                                                                    Product</th>
                                                                <th
                                                                    class="p-4 text-sm font-normal leading-none text-slate-500">
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="finish_good_items_body">
                                                            <!-- <tr class="hover:bg-slate-50">
                
                                                            <td class="p-4 border-b border-slate-200 py-5">
                                                                <p class="block font-semibold text-sm text-slate-800">1</p>
                                                            </td>
                
                                                            <td class="p-4 border-b border-slate-200 py-5">
                                                                <p class="text-sm text-slate-500">chandler</p>
                                                            </td>
                                                            <td class="p-4 border-b border-slate-200 py-5">
                                                                <p class="text-sm text-slate-500">item <code></code></p>
                                                            </td>
                                                            <td class="p-4 border-b border-slate-200 py-5">
                
                                                                <p class="text-sm text-slate-500">1000₹</p>
                                                            </td>
                                                            <td class="p-4 border-b border-slate-200 py-5">
                                                                <input type="number" name="item_total"
                                                                    class="w-28 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                    style="border-color: #C8A1E0;" />
                                                            </td>
                                                            <td class="p-4 border-b border-slate-200 py-5">
                
                                                                <p class="text-sm text-slate-500">200</p>
                                                            </td>
                                                            <td class="p-4 border-b border-slate-200 py-5">
                                                                <img src="https://demos.creative-tim.com/corporate-ui-dashboard-pro/assets/img/kam-idris-_HqHX3LBN18-unsplash.jpg" alt="Product 1" class="w-16 h-16 object-cover rounded" />
                                                            </td>
                
                
                
                                                            <td class="p-4 border-b border-slate-200 py-5">
                                                                <button type="button" class="text-slate-500 hover:text-slate-700">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                                    </svg>
                                                                </button>
                                                            </td>
                
                                                            <td class="p-4 border-b border-slate-200 py-5">
                                                                <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                                    type="button">
                                                                    Bom
                                                                </button>
                                                            </td>
                                                        </tr> -->



                                                        </tbody>
                                                    </table>
                                                </div>



                                            </div>





                                            <div
                                                class="flex flex-wrap items-center  gap-x-5 border-gray-900 w-full p-2 rounded-lg mt-2">












                                                <!-- component -->













                                                <div class="mt-1">
                                                    <button onclick="setItemsForAddInItems('__')"
                                                        data-dialog-target="dialog-lg"
                                                        class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-black transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                                        type="button">
                                                        Add item
                                                    </button>


                                                </div>
                                            </div>
                                        </div>

                                        <div class=" border-t border-gray-900 mt-4 pt-2">
                                            <div>
                                                <input type="radio" name="goods" onclick="radio_btn1()">
                                                <span class="text-xs font-bold">Raw Material</span>
                                            </div>

                                            <div class="border border-gray-900 w-full p-2 rounded-lg mt-2"
                                                id="raw_section1" style="display: none;">
                                                <div class="flex flex-wrap items-center gap-x-5 ">
                                                    <div>
                                                        <label class="block text-sm">S. No : </label>
                                                        <input type="text" name="serial_no"
                                                            class="w-10 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                            style="border-color: #C8A1E0;" /><br>
                                                    </div>
                                                    <div>
                                                        <label class="block text-sm">Item Name : </label>
                                                        <input type="text" name="item_name"
                                                            class="w-36 rounded-md border text-xs border-gray-500 bg-white py-2 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                            style="border-color: #C8A1E0;" /><br>
                                                    </div>
                                                    <div>
                                                        <label class="block text-sm">Item Qty : </label>
                                                        <input type="number" name="item_qty"
                                                            class="w-20 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                            style="border-color: #C8A1E0;" /><br>
                                                    </div>
                                                    <div>
                                                        <label class="block text-sm">Rate : </label>
                                                        <input type="number" name="rate"
                                                            class="w-24 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                            style="border-color: #C8A1E0;" /><br>
                                                    </div>
                                                    <div>
                                                        <label class="block text-sm">Total : </label>
                                                        <input type="number" name="total"
                                                            class="w-28 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                            style="border-color: #C8A1E0;" /><br>
                                                    </div>
                                                    <div>

                                                        <button data-modal-target="crud-modal"
                                                            data-modal-toggle="crud-modal"
                                                            class="text-gray-900 mt-5  focus:outline-none border border-gray-900 px-1  font-medium rounded-lg text-xs py-1 text-center"
                                                            type="button">if Ship another address </button>
                                                    </div>
                                                    <div class="w-28 h-24 border border-gray-900 rounded-md">
                                                        <img class="w-28 h-24 rounded-md" src="./images.png"
                                                            alt="image preview">
                                                    </div>
                                                </div><br>
                                            </div>


                                            <!-- Main modal -->
                                            <div id="crud-modal" tabindex="-1" aria-hidden="true"
                                                class="overflow-y-auto overflow-x-hidden hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative p-4 w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <!-- Modal header -->
                                                        <div
                                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                            <h3
                                                                class="text-lg font-semibold text-gray-900 dark:text-white">
                                                                Add Shipping Address
                                                            </h3>
                                                            <button type="button"
                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                data-modal-toggle="crud-modal">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <form class="p-4 md:p-5">
                                                            <div class="grid gap-4 mb-4 grid-cols-2 pb-5">
                                                                <div class="col-span-2 w-3/4 m-auto mt-3">
                                                                    <label for=""
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                                                                        Name : </label>
                                                                    <input type="text" name="user_name" id=""
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                        required="">
                                                                </div>
                                                                <div class="col-span-2 w-3/4 m-auto">
                                                                    <label for=""
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                                                                        Address : </label>
                                                                    <input type="text" name="user_address" id=""
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                        required="">
                                                                </div>
                                                                <div class="col-span-2 w-3/4 m-auto">
                                                                    <label for=""
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                                                                        Email : </label>
                                                                    <input type="text" name="user_email" id=""
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                        required="">
                                                                </div>
                                                                <div class="col-span-2 w-3/4 m-auto">
                                                                    <label for="name"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User
                                                                        Phone Number : </label>
                                                                    <input type="number" name="user_phone_no" id=""
                                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                        required="">
                                                                </div>
                                                                <div
                                                                    class="col-span-2 w-3/4 m-auto flex justify-center mt-3">
                                                                    <button
                                                                        class="focus:outline-none font-medium border border-gray-900 px-5 py-3  font-medium rounded-lg text-xs py-1 text-center"
                                                                        type="button">Add Address</button>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="add_btn1" style="display: none;">
                                                <div>
                                                    <div id="raw_field"></div>
                                                </div>
                                                <div class="mt-2">
                                                    <button onclick="raw_field()"
                                                        class="focus:outline-none font-medium border border-gray-900 px-2  font-medium rounded-lg text-xs py-1 text-center"
                                                        type="button">Add Items</button>
                                                    <button id="raw_remove"
                                                        class=" focus:outline-none font-medium border border-gray-900 px-2  font-medium rounded-lg text-xs py-1 text-center"
                                                        type="button">Remove Items</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="w-40 h-40 mt-5 border border-gray-900 rounded-md">
                                        <img src="" alt="item preview">
                                    </div> -->
                            </div>
                            </fieldset>


                            <!----------Bom Form------------->
                            <div id="extralarge-modal" tabindex="-1"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-7xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                                BOM Form
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="extralarge-modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            <div class="flex gap-x-4">
                                                <form class="w-full p-3">
                                                    <div class="border border-gray-500 p-3 rounded-md">
                                                        <div class="flex gap-x-9 flex-wrap">

                                                            <div>
                                                                <label for=""
                                                                    class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">New
                                                                    BOM
                                                                    :
                                                                </label>
                                                                <input type="text" name="new_bom"
                                                                    class="w-40 rounded-md mb-3 border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                    style="border-color: #C8A1E0;" />
                                                            </div>
                                                            <div class="">
                                                                <label
                                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                                                    Name : </label>
                                                                <input type="text" name="bom_item_name"
                                                                    class="w-40 rounded-md mb-3  border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                    style="border-color: #C8A1E0;" />
                                                            </div>
                                                            <div class="">
                                                                <label
                                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Revison
                                                                    : </label>
                                                                <input type="text" name="bom_revision"
                                                                    class="w-40 rounded-md mb-3  border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                    style="border-color: #C8A1E0;" />
                                                            </div>
                                                            <div class="">
                                                                <label
                                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Percentage:
                                                                </label>
                                                                <input type="text" name="bom_percentage"
                                                                    class="w-40 rounded-md mb-3  border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                    style="border-color: #C8A1E0;" />
                                                            </div>
                                                            <div class="">
                                                                <label
                                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Products
                                                                    :
                                                                </label>
                                                                <input type="text" name="bom_products"
                                                                    class="w-40 rounded-md mb-3  border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                    style="border-color: #C8A1E0;" />
                                                            </div>
                                                            <div class="">
                                                                <label
                                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Created
                                                                    Date : </label>
                                                                <input type="date" name="bom_created_date"
                                                                    class="w-40 rounded-md mb-3  border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                    style="border-color: #C8A1E0;" />
                                                            </div>
                                                            <div class="">
                                                                <label
                                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Created
                                                                    By :
                                                                </label>
                                                                <input type="text" name="bom_created_by"
                                                                    class="w-40 rounded-md mb-3  border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                    style="border-color: #C8A1E0;" />
                                                            </div>
                                                            <div class="">
                                                                <label
                                                                    class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Organization
                                                                    Mapping : </label>
                                                                <input type="text" name="bom_organization_mapping"
                                                                    class="w-40 rounded-md mb-3 border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                    style="border-color: #C8A1E0;" />
                                                            </div>
                                                            <div class="">
                                                                <label
                                                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Warehouse
                                                                    Location : </label>
                                                                <input type="text" name="bom_warehouse_location"
                                                                    class="w-40 rounded-md mb-3 border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                    style="border-color: #C8A1E0;" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="w-40 h-40 border border-gray-900 rounded-md ml-4">
                                                    <img class="w-40 h-40" id="preview" alt="Item image">
                                                </div>
                                            </div>

                                            <div class="mt-6">
                                                <form class="w-full border p-3 border-gray-500 rounded-md">
                                                    <div class="flex flex-wrap items-center justify-between">
                                                        <div class="ml-2">
                                                            <label
                                                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                                                Seq
                                                                :
                                                            </label>
                                                            <input type="text" name="bom_item_seq" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2">
                                                            <label
                                                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Process
                                                                Seq:
                                                            </label>
                                                            <input type="text" name="bom_proccess_seq" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2">
                                                            <label
                                                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                                                code :
                                                            </label>
                                                            <input type="text" name="bom_item_code" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2">
                                                            <label
                                                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                                                Item Name :
                                                            </label>
                                                            <input type="text" name="bom_item_name" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2">
                                                            <label
                                                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Qty
                                                                :
                                                            </label>
                                                            <input type="text" name="bom_qty" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2">
                                                            <label
                                                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Percentage
                                                                :
                                                            </label>
                                                            <input type="number" name="bom_item_percentage" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="number" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="number" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="text" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                        <div class="ml-2 mt-2">
                                                            <input type="number" name="" id=""
                                                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                                style="border-color: #C8A1E0;" />
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div
                                            class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button data-modal-hide="extralarge-modal" type="button"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                                                Changes</button>
                                            <button data-modal-hide="extralarge-modal" type="button"
                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="max-w-7xl m-auto flex px-10 gap-x-7 mt-5">
                        <fieldset class="w-1/6 p-5 border-2 rounded-md border-gray-900" style="border-color: #674188;">
                            <legend class="font-bold">Install Information</legend>
                            <div class="">
                                <div>
                                    <label for=""
                                        class=" w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Installation
                                        is required :
                                    </label>
                                    <input type="text" name="installation_is_required"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>
                                <div class="">
                                    <label
                                        class="w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Installation
                                        Need By date : </label>
                                    <input type="date" name="installation_need_by_date"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>
                                <div class="">
                                    <label
                                        class="w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Tentative
                                        Installation
                                        : </label>
                                    <input type="text" name="tntative_installation"
                                        class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>
                            </div>
                        </fieldset>
                        <div class="w-5/6">
                            <fieldset class="w-full p-5 border-2 rounded-md border-gray-900"
                                style="border-color: #674188;">
                                <legend class="font-bold">Followup Information</legend>
                                <div class="flex justify-between items-center flex-wrap">
                                    <div class="">
                                        <div class="flex gap-x-10 flex-wrap">
                                            <!-- <div>
                                                    <label for=""
                                                        class=" w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Followup
                                                        :
                                                    </label>
                                                    <input type="text" name="followup"
                                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                        style="border-color: #C8A1E0;" />
                                                </div> -->


                                            <div>
                                                <label for=""
                                                    class=" w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Perform
                                                    Invoice :
                                                </label>
                                                <input type="text" name="perform_invoice"
                                                    class="w-40 rounded-md border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>

                                            <div class="flex gap-x-10 flex-wrap">
                                                <div class="">
                                                    <label
                                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Quotation
                                                        shared date :
                                                    </label>
                                                    <input type="date" name="quotation_shared_date"
                                                        class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                        style="border-color: #C8A1E0;" />
                                                </div>
                                            </div>

                                            <div class="">
                                                <label
                                                    class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Remarks
                                                    :
                                                </label>
                                                <input type="text" name="remarks"
                                                    class="w-40 rounded-md border mb-5 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>
                                        </div>

                                        <div class="flex gap-x-10 flex-wrap">
                                            <!-- <div class="">
                                                    <label
                                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Sample
                                                        approval date :
                                                    </label>
                                                    <input type="date" name="sample_approval_date"
                                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                        style="border-color: #C8A1E0;" />
                                                </div> -->

                                        </div>

                                        <div>
                                            <input type="radio" name="name" id="" class=""><label
                                                class="pl-2 text-sm">Standard</label>
                                            <input type="radio" name="name" id="" class="ml-5 "><label
                                                class="pl-2 text-sm">Customize</label>
                                            <input type="radio" name="name" id="" class="ml-5 "><label
                                                class="pl-2 text-sm">Semi Customize</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- <fieldset class=" p-5 border-2 rounded-md border-gray-900" style="border-color: #674188;">
                                    <legend class="font-bold">Query Information</legend>
                                    <div class="flex justify-between items-center flex-wrap">
                                        <div class="">
                                            <div class="flex gap-x-10 flex-wrap">
                                                <div>
                                                    <label for=""
                                                        class=" w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Query
                                                        Received
                                                        :
                                                    </label>
                                                    <input type="text" name="query_received"
                                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                        style="border-color: #C8A1E0;" />
                                                </div>
                                                <div class="">
                                                    <label
                                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Query
                                                        Start date : </label>
                                                    <input type="date" name="query_start_date"
                                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                        style="border-color: #C8A1E0;" />
                                                </div>
                                            </div>
                                            <div class="flex gap-x-10 flex-wrap">
                
                                                <div class="">
                                                    <label
                                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Query
                                                        updated date : </label>
                                                    <input type="date" name="query_updated_date"
                                                        class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                        style="border-color: #C8A1E0;" />
                                                </div>
                                                <div class="">
                                                    <label
                                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Query
                                                        created by :
                                                    </label>
                                                    <input type="text" name="query_created_by"
                                                        class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                        style="border-color: #C8A1E0;" />
                                                </div>
                                            </div>
                
                                            <div class="flex gap-x-10 flex-wrap">
                
                                                <div class="">
                                                    <label
                                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Query
                                                        updated by :
                                                    </label>
                                                    <input type="text" name="query_updated_by"
                                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                        style="border-color: #C8A1E0;" />
                                                </div>
                                                <div class="">
                                                    <label
                                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Query
                                                        end date :
                                                    </label>
                                                    <input type="date" name="query_end_date"
                                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                        style="border-color: #C8A1E0;" />
                                                </div>
                                                <div class="">
                                                    <label
                                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                                        Re-query :
                                                    </label>
                                                    <input type="text" name="re_query"
                                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                        style="border-color: #C8A1E0;" />
                                                </div>
                                                <div class="">
                                                    <label
                                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Re-query
                                                        closure date :
                                                    </label>
                                                    <input type="date" name="re_query_closure_date"
                                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                        style="border-color: #C8A1E0;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset> -->
                        </div>
                    </div>
                    <div class="max-w-7xl m-auto flex px-10 gap-x-7 mt-5">
                        <fieldset class="w-1/6 p-5 border-2 rounded-md border-gray-900"
                            style="border-color: #674188; display: none">
                            <legend class="font-bold">Project Information</legend>
                            <div class="">
                                <div>
                                    <label for=""
                                        class=" w-40 block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Project
                                        status :
                                    </label>
                                    <input type="text" name="project_status"
                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        style="border-color: #C8A1E0;" />
                                </div>

                            </div>
                        </fieldset>
                        <div class="w-5/6">
                            <fieldset class=" p-5 border-2 rounded-md border-gray-900"
                                style="border-color: #674188; display: none;">
                                <legend class="font-bold">Project Status</legend>
                                <div class="flex justify-between items-center flex-wrap">
                                    <div class="">
                                        <div class="flex gap-x-10 flex-wrap">
                                            <div class="">
                                                <label
                                                    class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Drawing
                                                    approved date : </label>
                                                <input type="date" name="shop_drawing_approved"
                                                    class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>

                                            <div class="">
                                                <label
                                                    class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Sample
                                                    approved date :
                                                </label>
                                                <input type="date" name="sample_approval_start_date"
                                                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>

                                            <div class="">
                                                <label
                                                    class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                                    Assemble start date : </label>
                                                <input type="date" name="assemble_start_date"
                                                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>

                                            <div class="">
                                                <label
                                                    class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Assemble
                                                    completion date : </label>
                                                <input type="date" name="assemble_completion_date"
                                                    class="w-40 rounded-md border  mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>

                                            <div class="">
                                                <label
                                                    class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Dismantle
                                                    start date :
                                                </label>
                                                <input type="date" name="dismantle_start_date"
                                                    class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>

                                            <div class="">
                                                <label
                                                    class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Dismantle
                                                    completion date :
                                                </label>
                                                <input type="date" name="dismantle_completion_date"
                                                    class="w-40 rounded-md border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>

                                            <div class="">
                                                <label
                                                    class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                                    Packed start date :
                                                </label>
                                                <input type="date" name="pakced_start_date"
                                                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>

                                            <!-- <div class="">
                                                    <label
                                                        class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Re-query
                                                        completion date :
                                                    </label>
                                                    <input type="date" name="re_query_completion_date"
                                                        class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                        style="border-color: #C8A1E0;" />
                                                </div> -->


                                            <div class="">
                                                <label
                                                    class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Packed
                                                    completion date : </label>
                                                <input type="date" name="pakced_completion_date"
                                                    class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </div>
                                        </div>
                                        <div class="">
                                            <label
                                                class="w-40 inline-block mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Installation
                                                date :
                                            </label>
                                            <input type="date" name="installation_date"
                                                class="w-40 rounded-md border  mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                style="border-color: #C8A1E0;" />
                                        </div>
                                        <div class="">

                                            <button data-modal-target="extralarge-modal2"
                                                data-modal-toggle="extralarge-modal2"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detail
                                                Project
                                                Status</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div id="extralarge-modal2" tabindex="-1"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-7xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                        Detail Project Status
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="extralarge-modal2">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div id="create_section" class="p-5 rounded-lg mx-5">
                                    <h1 class="text-center underline text-3xl mb-3 font-bold">Create Assembling Line
                                        Tracking Form
                                    </h1>
                                    <form class=" border border-gray-500 p-5 rounded-md bg-gray-300">
                                        <div class="border-b border-gray-900 ">
                                            <label
                                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">SO
                                                Number
                                                :
                                            </label>
                                            <input type="text" name="so_no"
                                                class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </div>
                                        <div class="border-b border-gray-200 dark:border-gray-700 mt-4">
                                            <ul class="flex flex-wrap justify-between -mb-px text-sm font-medium text-center "
                                                id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content"
                                                data-tabs-active-classes="text-gray-600 text-gray-600 dark:text-gray-500 bg-gray-50 dark:text-gray-500 border-gray-600 dark:border-gray-500"
                                                data-tabs-inactive-classes="dark:border-transparent text-gray-500 text-gray-600 bg-gray-200 dark:text-gray-400 border-gray-100 border-gray-300 dark:border-gray-700 dark:text-gray-300"
                                                role="tablist">
                                                <li class="me-2" role="presentation">
                                                    <button
                                                        class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l dark:hover:bg-gray-50 border-gray-500 rounded-t-lg"
                                                        id="profile-styled-tab" data-tabs-target="#styled-profile"
                                                        type="button" role="tab" aria-controls="profile"
                                                        aria-selected="false">Drawing
                                                        Item</button>
                                                </li>
                                                <li class="me-2" role="presentation">
                                                    <button
                                                        class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                                        id="dashboard-styled-tab" data-tabs-target="#styled-sample"
                                                        type="button" role="tab" aria-controls="dashboard"
                                                        aria-selected="false">Sample
                                                        Item</button>
                                                </li>
                                                <li class="me-2" role="presentation">
                                                    <button
                                                        class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                                        id="dashboard-styled-tab" data-tabs-target="#styled-dashboard"
                                                        type="button" role="tab" aria-controls="dashboard"
                                                        aria-selected="false">Issue
                                                        Item</button>
                                                </li>
                                                <li class="me-2" role="presentation">
                                                    <button
                                                        class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                                        id="settings-styled-tab" data-tabs-target="#styled-settings"
                                                        type="button" role="tab" aria-controls="settings"
                                                        aria-selected="false">Assemble
                                                        Item</button>
                                                </li>
                                                <li class="me-2" role="presentation">
                                                    <button
                                                        class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                                        id="contacts-styled-tab" data-tabs-target="#styled-contacts"
                                                        type="button" role="tab" aria-controls="contacts"
                                                        aria-selected="false">Quality
                                                        Check</button>
                                                </li>
                                                <li class="me-2" role="presentation">
                                                    <button
                                                        class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                                        id="contacts-styled-tab" data-tabs-target="#styled-about"
                                                        type="button" role="tab" aria-controls="contacts"
                                                        aria-selected="false">Dismantle
                                                        Item</button>
                                                </li>
                                                <li class="me-2" role="presentation">
                                                    <button
                                                        class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                                        id="contacts-styled-tab" data-tabs-target="#styled-packaging"
                                                        type="button" role="tab" aria-controls="contacts"
                                                        aria-selected="false">Packaging</button>
                                                </li>
                                                <li class="me-2" role="presentation">
                                                    <button
                                                        class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                                        id="contacts-styled-tab" data-tabs-target="#styled-gate"
                                                        type="button" role="tab" aria-controls="contacts"
                                                        aria-selected="false">Gate Exit</button>
                                                </li>
                                                <li role="presentation">
                                                    <button
                                                        class="inline-block py-3 px-4 border-t border-r focus:outline-none border-l border-gray-500 rounded-t-lg"
                                                        id="contacts-styled-tab" data-tabs-target="#styled-installation"
                                                        type="button" role="tab" aria-controls="contacts"
                                                        aria-selected="false">Installation</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="default-styled-tab-content">
                                            <div class="hidden p-4 bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600 rounded-b-lg"
                                                id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">

                                                <div>
                                                    <table
                                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        <thead
                                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                            <tr>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Item Name
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Quantity
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Drawing Approval Date
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Remarks if any
                                                                </th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr
                                                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                                <th scope="row"
                                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </th>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="date" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>

                                                            </tr>
                                                            <tr
                                                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                                <th scope="row"
                                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </th>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="date" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>

                                                            </tr>
                                                            <tr
                                                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                                <th scope="row"
                                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </th>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="date" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>

                                                            </tr>
                                                            <tr
                                                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                                <th scope="row"
                                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </th>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="date" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="hidden p-4 rounded-x-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600 rounded-b-lg"
                                                id="styled-sample" role="tabpanel" aria-labelledby="dashboard-tab">
                                                <div>
                                                    <table
                                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        <thead
                                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                            <tr>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Item Name
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Quantity
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Sample Approval Date
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Remarks if any
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr
                                                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                                <th scope="row"
                                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </th>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="date" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                                <th scope="row"
                                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </th>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="date" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>

                                                            </tr>
                                                            <tr
                                                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                                <th scope="row"
                                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </th>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="date" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>

                                                            </tr>
                                                            <tr
                                                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                                <th scope="row"
                                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </th>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="date" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                                id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">

                                                <div>
                                                    <table
                                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        <thead
                                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                            <tr>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Item Name
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Quantity
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Issue Date
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Remarks if any
                                                                </th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr
                                                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                                <th scope="row"
                                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </th>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="date" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>

                                                            </tr>
                                                            <tr
                                                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                                <th scope="row"
                                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </th>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="date" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>

                                                            </tr>
                                                            <tr
                                                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                                <th scope="row"
                                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </th>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="date" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>

                                                            </tr>
                                                            <tr
                                                                class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                                <th scope="row"
                                                                    class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </th>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="date" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>
                                                                <td class="px-6 py-1">
                                                                    <input type="text" name=""
                                                                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                            id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
                                            <div>
                                                <table
                                                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <thead
                                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">
                                                                Item Name
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Quantity
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Item Assemble Date
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Remarks if any
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                            id="styled-contacts" role="tabpanel" aria-labelledby="contacts-tab">
                                            <!-- <div class="flex gap-x-10 overflow-x-auto py-3">
                                                    <div>
                                                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                                            Name :
                                                        </label>
                                                        <input type="text" name=""
                                                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                    </div>
                                                    <div>
                                                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quantity :
                                                        </label>
                                                        <input type="text" name=""
                                                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                    </div>
                                                    <div>
                                                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quality
                                                            Check :
                                                        </label>
                                                        <input type="text" name=""
                                                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                    </div>
                                                    <div>
                                                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Quality
                                                            Check Date :
                                                        </label>
                                                        <input type="date" name=""
                                                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                    </div>
                                                </div> -->

                                            <div>
                                                <table
                                                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <thead
                                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">
                                                                Item Name
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Quantity
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Quality Check Date
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Remarks if any
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                            id="styled-about" role="tabpanel" aria-labelledby="contacts-tab">
                                            <div>
                                                <table
                                                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <thead
                                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">
                                                                Item Name
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Quantity
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Item Dismantle Date
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Remarks if any
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                            id="styled-packaging" role="tabpanel" aria-labelledby="contacts-tab">
                                            <div>
                                                <table
                                                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <thead
                                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">
                                                                Item Name
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Quantity
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Packaging Date
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Remarks if any
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                            id="styled-gate" role="tabpanel" aria-labelledby="contacts-tab">
                                            <div>
                                                <table
                                                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <thead
                                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">
                                                                Item Name
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Quantity
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Gate Exit Date
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Remarks if any
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class="hidden p-4 rounded-b-lg bg-gray-50 dark:bg-gray-200 border-x border-b border-gray-600"
                                            id="styled-installation" role="tabpanel" aria-labelledby="contacts-tab">
                                            <div>
                                                <table
                                                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    <thead
                                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">
                                                                Item Name
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Quantity
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Installation Date
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Remarks if any
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                        <tr
                                                            class="bg-white border-b dark:bg-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-600">
                                                            <th scope="row"
                                                                class="px-6 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </th>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="date" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>
                                                            <td class="px-6 py-1">
                                                                <input type="text" name=""
                                                                    class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                </div>

                                <!-- Modal footer -->
                                <!-- <div class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="extralarge-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Changes</button>
                                        <button data-modal-hide="extralarge-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="extralarge-modal" id="saleOrderSavebtn" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Save</button>
                        <button data-modal-hide="extralarge-modal" type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
                            Now</button>
                    </div>
                    </form>

                    <!-- diolog box for item add  -->

                    <div data-dialog-backdrop="dialog-lg" data-dialog-backdrop-close="true"
                        class="pointer-events-none fixed inset-0 z-[999] grid  w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                        <div style="min-width:50% ;" data-dialog="dialog-lg"
                            class="relative m-4 p-4  min-w-[40%] max-w-[40%] rounded-lg bg-white shadow-sm">
                            <!-- component -->
                            <div class="w-full  mx-auto px-6">
                                <div class="flex  justify-center p-4 px-3 py-10">
                                    <div class="w-full ">
                                        <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-4">
                                            <div class="block text-gray-700 text-lg font-semibold py-2 px-2">
                                                Items list
                                            </div>
                                            <div class="flex items-center bg-gray-200 rounded-md">
                                                <div class="pl-2">
                                                    <svg class="fill-current text-gray-500 w-6 h-6"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                        <path class="heroicon-ui"
                                                            d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                                    </svg>
                                                </div>
                                                <input id="search_input_item" onchange=""
                                                    class="w-full rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none py-2 px-2"
                                                    id="search" type="text" placeholder="Search teams or members">
                                            </div>
                                            <div class="max-w-[720px] mx-auto">



                                                <div style="max-height: 400px;"
                                                    class="relative flex flex-col w-full  overflow-auto text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">

                                                    <table
                                                        class="w-full    text-left table-auto min-w-max text-slate-800">
                                                        <thead>
                                                            <tr
                                                                class="text-slate-500 border-b border-slate-300 bg-slate-50">
                                                                <th class="p-4">
                                                                    <p class="text-sm leading-none font-normal">
                                                                        S.NO
                                                                    </p>
                                                                </th>
                                                                <th class="p-4">
                                                                    <p class="text-sm leading-none font-normal">
                                                                        Item code
                                                                    </p>
                                                                </th>
                                                                <th class="p-4">
                                                                    <p class="text-sm leading-none font-normal">
                                                                        Item name
                                                                    </p>
                                                                </th>
                                                                <th class="p-4">
                                                                    <p class="text-sm leading-none font-normal">
                                                                        Price
                                                                    </p>
                                                                </th>


                                                                <th class="p-4">
                                                                    <p></p>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="serchItemBox">
                                                            <tr class="hover:bg-slate-50">
                                                                <td class="p-4">
                                                                    <p class="text-sm font-bold">
                                                                        1
                                                                    </p>
                                                                </td>
                                                                <td class="p-4">
                                                                    <p class="text-sm">
                                                                        Item code
                                                                    </p>
                                                                </td>
                                                                <td class="p-4">
                                                                    <p class="text-sm">
                                                                        Item name
                                                                    </p>
                                                                </td>
                                                                <td class="p-4">
                                                                    <p class="text-sm">
                                                                        Warehouse
                                                                    </p>
                                                                </td>
                                                                <td class="p-4">
                                                                    <p class="text-sm">
                                                                        Image
                                                                    </p>
                                                                </td>

                                                                <td class="p-4">
                                                                    <a href="#" class="text-sm font-semibold ">
                                                                        Edit
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                            <tr class="hover:bg-slate-50">
                                                                <td class="p-4">
                                                                    <p class="text-sm font-bold">
                                                                        1
                                                                    </p>
                                                                </td>
                                                                <td class="p-4">
                                                                    <p class="text-sm">
                                                                        Item name
                                                                    </p>
                                                                </td>
                                                                <td class="p-4">
                                                                    <p class="text-sm">
                                                                        price
                                                                    </p>
                                                                </td>
                                                                <td class="p-4">
                                                                    <p class="text-sm">
                                                                        item image
                                                                    </p>
                                                                </td>

                                                                <td class="p-4">
                                                                    <a href="#" class="text-sm font-semibold ">
                                                                        Add
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                            <tr class="hover:bg-slate-50">
                                                                <td class="p-4">
                                                                    <p class="text-sm font-bold">
                                                                        2
                                                                    </p>
                                                                </td>
                                                                <td class="p-4">
                                                                    <p class="text-sm">
                                                                        Item name
                                                                    </p>
                                                                </td>
                                                                <td class="p-4">
                                                                    <p class="text-sm">
                                                                        price
                                                                    </p>
                                                                </td>
                                                                <td class="p-4">
                                                                    <p class="text-sm">
                                                                        item image
                                                                    </p>
                                                                </td>

                                                                <td class="p-4">
                                                                    <a href="#" class="text-sm font-semibold ">
                                                                        Add
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>



                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex    shrink-0 flex-wrap items-center pt-4 justify-end">

                                <button data-dialog-close="true"
                                    class="rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                                    type="button">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="relative overflow-x-auto mt-4 mb-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 border border-gray-700 ">
            <thead class="text-xs text-gray-700 whitespace-nowrap uppercase bg-gray-50 border-b border-gray-900">
                <tr>

                    <th scope="col" class="px-6 py-3">
                        Created By
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created Lead
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Record Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Contact Person Deatils
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Lead Source
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Lead Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Assigned To
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Query Received Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Query Start Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Query End Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Follow Up
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Re-query
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Re-query closure Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Re-query End Date
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        admin
                    </th>
                    <td class="px-6 py-4">
                        user
                    </td>
                    <td class="px-6 py-4">
                        101
                    </td>
                    <td class="px-6 py-4">
                        92345654321
                    </td>
                    <td class="px-6 py-4">
                        xyz
                    </td>
                    <td class="px-6 py-4">
                        abc
                    </td>
                    <td class="px-6 py-4">
                        abh
                    </td>
                    <td class="px-6 py-4">
                        22/02/2021
                    </td>
                    <td class="px-6 py-4">
                        22/02/2022
                    </td>
                    <td class="px-6 py-4">
                        22/02/2023
                    </td>
                    <td class="px-6 py-4">
                        asdf
                    </td>
                    <td class="px-6 py-4">
                        Yes
                    </td>
                    <td class="px-6 py-4">
                        22/02/2025
                    </td>
                    <td class="px-6 py-4">
                        20/02/2025
                    </td>

                </tr>
            </tbody>
        </table>

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 border border-gray-700  my-5">
            <thead class="pt-5 border-b border-gray-900">
                <tr class="text-xs text-gray-700 whitespace-nowrap uppercase bg-gray-50 ">
                    <th scope="col" class="px-6 py-3"></th>

                    </th>
                    <th scope="col" class="px-6 py-3">
                        Serial No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Item Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Item Qty
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Rate
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image Preview
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SO Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Creadted By
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:border-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:border-gray-600">
                    </td>
                    <td scope="row" class="px-6 py-4 ">
                        101
                    </td>
                    <td class="px-6 py-4">
                        bulb
                    </td>
                    <td class="px-6 py-4">
                        40
                    </td>
                    <td class="px-6 py-4">
                        3000
                    </td>
                    <td class="px-6 py-4">
                        320000
                    </td>
                    <td class="px-6 py-4">
                        image
                    </td>
                    <td class="px-6 py-4">
                        132
                    </td>
                    <td class="px-6 py-4">
                        asdf
                    </td>
                </tr>
                <tr class="bg-white border-b dark:border-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:border-gray-600">
                    </td>
                    <td scope="row" class="px-6 py-4">
                        102
                    </td>
                    <td class="px-6 py-4">
                        wire
                    </td>
                    <td class="px-6 py-4">
                        30
                    </td>
                    <td class="px-6 py-4">
                        4000
                    </td>
                    <td class="px-6 py-4">
                        420000
                    </td>
                    <td class="px-6 py-4">
                        image
                    </td>
                    <td class="px-6 py-4">
                        170
                    </td>
                    <td class="px-6 py-4">
                        jkl
                    </td>
                </tr>
            </tbody>

        </table>
    </div>


    <center>
        <button type="button"
            class="text-white bg-blue-600 hover:bg-blue-700  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none ">Submit
            Now</button>
    </center>

    </div>



    <script>
        // $(document).ready(() => {
        //     $('#getData').on("click", function () {

        //         var lead_source = $("#lead_source").val();
        //         var ref_By = $("#ref_By").val();
        //         var ref_phone_no = $("#ref_phone_no").val();
        //         var lead_type = $("#lead_type").val();
        //         var contact_person_name = $("#contact_person_name").val();
        //         var contact_person_phone_no = $("#contact_person_phone_no").val();
        //         var contact_person_email = $("#contact_person_email").val();
        //         var contact_person_address = $("#contact_person_address").val();
        //         var lead_received_date = $("#lead_received_date").val();

        //         $.ajax({
        //             method: 'POST',
        //             url: './phpAjax/leadHeaderAjax.php',
        //             data: {
        //                 lead_source: lead_source,
        //                 ref_By: ref_By,
        //                 ref_phone_no: ref_phone_no,
        //                 lead_type: lead_type,
        //                 contact_person_name: contact_person_name,
        //                 contact_person_phone_no: contact_person_phone_no,
        //                 contact_person_email: contact_person_email,
        //                 contact_person_address: contact_person_address,
        //                 lead_received_date: lead_received_date
        //             },

        //             success: function (data) {
        //                 console.log(data);

        //                 let response = JSON.parse(data)

        //                 if (response.status == true) {
        //                     $("#statusBar").text("Data Inserted Sucessfully")
        //                 } else {
        //                     $("#statusBar").text("Data Not Inserted")

        //                 }
        //             },
        //         });
        //     });
        // });

        $(document).ready(function () {
            $('#myForm').submit(function (event) {
                event.preventDefault();
                var form = document.getElementById('myForm');
                // var formData = new FormData(form);

                var lead_source = $("#lead_source").val();
                var ref_By = $("#ref_By").val();
                var ref_phone_no = $("#ref_phone_no").val();
                var lead_type = $("#lead_type").val();
                var contact_person_name = $("#contact_person_name").val();
                var contact_person_phone_no = $("#contact_person_phone_no").val();
                var contact_person_email = $("#contact_person_email").val();
                var contact_person_address = $("#contact_person_address").val();
                var lead_received_date = $("#lead_received_date").val();

                $.ajax({
                    url: './phpAJax/leadHeaderAjax.php',
                    method: 'POST',
                    dataType: "JSON",
                    data: {
                        lead_source: lead_source,
                        ref_By: ref_By,
                        ref_phone_no: ref_phone_no,
                        lead_type: lead_type,
                        contact_person_name: contact_person_name,
                        contact_person_phone_no: contact_person_phone_no,
                        contact_person_email: contact_person_email,
                        contact_person_address: contact_person_address,
                        lead_received_date: lead_received_date,
                        leadGenReateToDbhHeader: "leadGenReateToDbhHeader"
                    },
                    success: function (response) {
                        let record_id = response.Record_Number

                        $("#record_no").val(record_id)

                        alert("Form Submited Sucessfully. Your Record Number is "+record_id)

                        console.log(response)
                    },
                    error: function (error) {
                        // alert('Your form was not sent successfully.');
                        console.log(error)
                    }
                });
                var form = document.getElementById('myForm').reset();
            });
        });


        $(document).ready(function () {
            $('#query_info_form').submit(function (event) {
                event.preventDefault();
                var form = document.getElementById('query_info_form');
                // var formData = new FormData(form);

                var assigned_to = $("#assigned_to").val();
                let record_no = $("#record_no").val();
                var query_start_date = $("#query_start_date").val();
                var follow_up = $("#follow_up").val();
                var followup_reminder_frequency = $("#followup_reminder_frequency").val();
                var no_of_times = $("#no_of_times").val();
                var query_end_date = $("#query_end_date").val();
                var installation_required = $("#installation_required").val();
                var tentative_installation = $("#tentative_installation").val();
                var tentative_delivery_date = $("#tentative_delivery_date").val();

                $.ajax({
                    url: './phpAJax/leadHeaderAjax.php',
                    method: 'POST',
                    dataType: "JSON",
                    data: {
                        assigned_to: assigned_to,
                        query_start_date: query_start_date,
                        record_no:record_no,
                        follow_up: follow_up,
                        followup_reminder_frequency: followup_reminder_frequency,
                        no_of_times: no_of_times,
                        query_end_date: query_end_date,
                        installation_required: installation_required,
                        tentative_installation: tentative_installation,
                        tentative_delivery_date: tentative_delivery_date,
                        leadGenReateToDbhMiddle: "leadGenReateToDbhMiddle"
                    },
                    success: function (response) {
                        alert(response.message);
                        console.log(response)
                    },
                    error: function (error) {
                        // alert('Your form was not sent successfully.');
                        console.log(error)
                    }
                });
                var form = document.getElementById('query_info_form').reset();
            });
        });


    </script>




    <script src="./jquery-3.7.1.min.js"></script>
    <script src="./sale_order.js"></script>
    <script src="node_modules/@material-tailwind/html@latest/scripts/dialog.js"></script>

    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
    <script src="./leadGnration.js"></script>
</body>

</html> 