$(document).ready(function() {
    //-- Step cursor
    let step = 0;
    
    //-- Main job registration section
    $('div#job-deadline').hide();
    $('div#job-location').hide();
    $('div#job-payment').hide();
    $('div#job-type').hide();

    //-- Preview card section about registered job
    $('div#job-preview-card-title').hide();
    $('div#job-preview-card-body').hide();
    $('div#job-post-action').hide();

    //-- Deal with showing up step by step based on the "step" vaiable.
    $('a#next-step').click(function() {
        if(step == 0) {
            let isValid = true;
            if($("input[name='job-title']").val() == '') {
                $("input[name='job-title']").addClass('is-invalid');
                isValid = false;
            } else {
                $("input[name='job-title']").removeClass('is-invalid');
            };
            if($("textarea[name='descripiton']").val() == '') {
                $("textarea[name='descripiton']").addClass('is-invalid');
                isValid = false;
            } else {
                $("textarea[name='descripiton']").removeClass('is-invalid');
            }
            
            if(isValid == true) {
                // Showing next step
                $('div#job-deadline').slideDown('slow');
                $('html, body').animate({
                    scrollTop: $("div#job-deadline").offset().top
                }, 1000);
                step = 1;
                return;
            }
        } else if(step == 1) {
            let isValid = true;

            if($("input[name='date']").val() == '') {
                $("input[name='date']").addClass('is-invalid');
                isValid = false;
            } else {
                $("input[name='date']").removeClass('is-invalid');
            }

            if(isValid == true) {
                $('div#job-location').slideDown('slow');
                $('html, body').animate({
                    scrollTop: $("div#job-location").offset().top
                }, 1000);
                step = 2;
                return;
            }
            // $('html, body').scrollTop( $("div#job-deadline").offset().top );
        } else if(step == 2) {
            let isValid = true;
            let isTransportTypeChecked = 0;
            let isDeliverTypeChecked = 0;
            
            // Checking whether user checked a transportation type
            $("div#transport-type").find("input[type=radio]:checked").map(function() {
                isTransportTypeChecked++;
            });
            if(isTransportTypeChecked == 0) {
                $('small#transtypefeedback').show();
                isValid = false;
            } else {
                $('small#transtypefeedback').hide();
            }
            
            // Checking whether user checked a deliver type
            $("div#deliver-type").find("input[type=radio]:checked").map(function() {
                isDeliverTypeChecked++;
            });
            if(isDeliverTypeChecked == 0) {
                $('small#deliverfeedback').show();
                isValid = false;
            } else {
                $('small#deliverfeedback').hide();
            }

            // Checking whether user registered start address
            if($("input[name='address-start']").val() == '') {
                $("input[name='address-start']").addClass('is-invalid');
                isValid = false;
            } else {
                $("input[name='address-start']").removeClass('is-invalid');
            }
            // Checking whether user registered end address
            if($("input[name='address-end']").val() == '') {
                $("input[name='address-end']").addClass('is-invalid');
                isValid = false;
            } else {
                $("input[name='address-end']").removeClass('is-invalid');
            }

            if(isValid == true) {
                $('div#job-payment').slideDown('slow');
                $('html, body').animate({
                    scrollTop: $("div#job-payment").offset().top
                }, 1000);
                step = 3;
                return;
            }
        } else if(step == 3) {
            let isValid = true;

            let value = $("input[name='totalcost']").val();
    
            if($("input[name='totalcost']").val() == '') {
                $("input[name='totalcost']").addClass('is-invalid');
                isValid = false;
            } else {
                if($.isNumeric(value)) {
                    $("input[name='totalcost']").removeClass('is-invalid');
                } else {
                    $("input[name='totalcost']").addClass('is-invalid');
                    isValid = false;
                };
            }
            
            if(isValid == true) {
                $('div#job-type').slideDown('slow');
                $('html, body').animate({
                    scrollTop: $("div#job-type").offset().top
                }, 1000);
                step = 4;
                return;
            }
        } else if(step == 4) {
            let isValid = true;
            let isJobTypeChecked = 0;

            // Checking whether user checked a job type
            $("div#job-varients").find("input[type=radio]:checked").map(function() {
                isJobTypeChecked++;
            });
            if(isJobTypeChecked == 0) {
                $('small#jobtypefeedback').show();
                isValid = false;
            } else {
                $('small#jobtypefeedback').hide();
            }

            if(isValid == true) {
                $('div#job-preview-card-title').show();
                $('div#job-preview-card-body').show();
                $('div#job-post-action').show();
                $('html, body').animate({
                    scrollTop: $("div#job-preview-card-title").offset().top
                }, 1000);
                return;
            }
        }
    });
});