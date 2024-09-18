console.log("hey")

let getUSerDataByUserName = () => {

    let recordNo = $("#record_no").val()



    console.log(recordNo)



    data = {
        recordNo: recordNo
        , getUSerDataByUserName: "getUSerDataByUserName"
    }


    console.log(data)


    $.get("./phpAJax/leadSearchAjax.php", data, function (data) {
        console.log(data)


        if (data.success) {

            let userdata = data.data[0]


            $("#created_by").val(userdata.created_by)
            $("#created_date").val(userdata.created_date)
            $("#form_status").val(userdata.form_status)
            $("#lead_source").val(userdata.lead_source)
            $("#ref_By").val(userdata.ref_By)
            $("#ref_phone_no").val(userdata.ref_phone_no)
            $("#lead_type").val(userdata.lead_type)
            $("#contact_person_name").val(userdata.contact_person_name)
            $("#contact_person_phone_no").val(userdata.contact_person_phone_no)
            $("#contact_person_email").val(userdata.contact_person_email)
            $("#contact_person_address").val(userdata.contact_person_address)
            $("#lead_received_date").val(userdata.lead_received_date)
            $("#assigned_to").val(userdata.assigned_to)
            $("#query_start_date").val(userdata.query_start_date)
            $("#follow_up").val(userdata.follow_up)
            $("#followup_reminder_frequency").val(userdata.followup_reminder_frequency)
            $("#no_of_times").val(userdata.no_of_times)
            $("#query_end_date").val(userdata.query_end_date)
            $("#installation_required").val(userdata.installation_required)
            $("#tentative_installation").val(userdata.tentative_installation)
            $("#tentative_delivery_date").val(userdata.tentative_delivery_date)








            console.log(userdata.tentative_installation)




            console.log(userdata)


        }









    }, "JSON").fail(error => {
        console.log(error)
    })


}