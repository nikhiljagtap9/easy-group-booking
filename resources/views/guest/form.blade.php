`<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Event Registration</title>
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{ asset('assets/guest_assets/style.css')}}">
      <link rel="icon" type="image/x-icon" href="{{ asset('assets/guest_assets/fev.png')}}" />
   </head>
   <body>
      <div class="event-info">
         <img src="{{ asset('assets/guest_assets/logo.png')}}" class="main_logo"  >
         <div class="clear"></div>
         <h2><i class="fas fa-calendar-alt"></i> Tech Innovation Conference 2025</h2>
         <p> <i class="fa fa-map-marker" aria-hidden="true"></i> <strong>Location:</strong> Grand Convention Center, New York</p>
         <div class="evnt_str_inf">
            <p><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <strong>Event Start Date:</strong> March 10, 2025</p>
            <p><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <strong>Event End Date:</strong> March 12, 2025</p>
         </div>
         <div class="evnt_str_inf">
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Check In Time:</strong> 11.30 </p>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Check Out Time:</strong> 17.30</p>
         </div>
      </div>
      <div class="form-container form_container_main">
         <div class="status_bar" >
            <span class="step active" onclick="nextStep(0)" >
               <span> Step 1 </span>
               <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                  <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                  <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
               </svg>
               <div>
                  guest information
               </div>
            </span>
            <span class="step" onclick="nextStep(1)" >
               <span> Step 2 </span>
               <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-plane-tilt">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M14.5 6.5l3 -2.9a2.05 2.05 0 0 1 2.9 2.9l-2.9 3l2.5 7.5l-2.5 2.55l-3.5 -6.55l-3 3v3l-2 2l-1.5 -4.5l-4.5 -1.5l2 -2h3l3 -3l-6.5 -3.5l2.5 -2.5l7.5 2.5z" />
               </svg>
               <div>
                  flight information
               </div>
            </span>
            <span class="step" onclick="nextStep(2)" >
               <span> Step 3 </span>
               <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-burj-al-arab">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M3 21h18" />
                  <path d="M7 21v-18" />
                  <path d="M7 4c5.675 .908 10 5.613 10 11.28a11 11 0 0 1 -1.605 5.72" />
                  <path d="M5 9h12" />
                  <path d="M7 13h4" />
                  <path d="M7 17h4" />
               </svg>
               <div>
                  Hotel information
               </div>
            </span>
            <span class="step" onclick="nextStep(3)" >
               <span> Step 4 </span>
               <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-plus">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                  <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                  <path d="M10 14h4" />
                  <path d="M12 12v4" />
               </svg>
               <div>
                  EXTRA'S
               </div>
            </span>
            <span class="step">
               <span> Step 5 </span>
               <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-checklist">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />
                  <path d="M14 19l2 2l4 -4" />
                  <path d="M9 8h4" />
                  <path d="M9 12h2" />
               </svg>
               <div>
                  summary
               </div>
            </span>
         </div>
         <div class="tab active" id="step1">
            @include('guest.steps.step1')
         </div>
         <div class="tab" id="step2">
            @include('guest.steps.step2')
         </div>
         <div class="tab" id="step3">
            @include('guest.steps.step3')
         </div>
         <!-- _______________EXTRA'S____ llllllllllllllllllllllll ___ --> 
         <div class="tab" id="step4">
            @include('guest.steps.step4')
         </div>
         <!--______________________________________________________VIEW_TAB_____________________--->
         <div class="tab" id="step5">
            @include('guest.steps.step5')
         </div>




         <div class="tab_showing" >

             <div class="sumr_sec_titl">flight information</div>


            <div class="form-group right_fld">
               <div>
                  <label for="whatsapp">Upload Your Flight Ticket Here</label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>
            <div class="form-group right_fld">
               <div>
                  <label>Do you need a Visa </label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>
            <div class="form-group extra_visa_chk show_visa">
               <div>
                  <label for="tshirt">Visa Status</label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>

           
            <div class="clear"></div>
            <div class="form-group ">
               <div>
                  <label for="whatsapp">arrival flight number</label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>
            <div class="form-group ">
               <div>
                  <label for="whatsapp">arrival flight Date</label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>
            <div class="form-group right_fld">
               <div>
                  <label for="whatsapp">arrival flight Time</label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>
            <div class="clear"></div>
            <div class="form-group ">
               <div>
                  <label for="whatsapp">departure flight number</label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>
            <div class="form-group ">
               <div>
                  <label for="whatsapp">departure flight date</label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>
            <div class="form-group right_fld">
               <div>
                  <label for="whatsapp">departure flight time</label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>
            <div class="clear"></div>
            <button type="button" class="next_btn comn_btn edit_btn" onclick="nextStep(1)">Edit <i class="fa fa-caret-right" aria-hidden="true"></i>
               </button>
             
         </div>
   
         <div class="tab_showing" >
            <div class="sumr_sec_titl">Hotel information</div>
            <div class="form-group ">
               <div>
                  <label for="whatsapp">check in date </label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>
            <div class="form-group right_fld">
               <div>
                  <label for="whatsapp">check Out date </label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>
            <div class="clear"></div>
            <div class="form-group ">
               <div>
                  <label for="whatsapp">check in Time </label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>
            <div class="form-group right_fld">
               <div>
                  <label for="whatsapp">check Out Time </label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>
            <div class="clear"></div>
               <button type="button" class="next_btn comn_btn edit_btn" onclick="nextStep(2)">Edit <i class="fa fa-caret-right" aria-hidden="true"></i>
               </button>
         </div>
         <div class="tab_showing" >
            <div class="sumr_sec_titl">EXTRA'S</div>
            <div class="clear"></div>
            <div class="form-group right_fld">
               <div>
                  <label>Dummy Booking</label>
                  <div class="show_data_sum">Data Here</div>
               </div>
            </div>
            <div class="form-group extra_gst_wrp show_al_fld">
               <div class="sml_gst_1">
                  <label>extra Guests?</label>
                  <div class="show_data_sum">Data Here</div>
               </div>
               <div class="sml_gst_1 sml_gst_1_hide">
                  <div class="show_gst_pricing">
                     <div class="">
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i> 25$ For Per Guest
                     </div>
                  </div>
               </div>
               <div class="sml_gst_1 sml_gst_1_hide">
                  <label>Enter Guest Number ?</label>
                  <div class="show_data_sum">Data Here</div>
               </div>
               <div class="sml_gst_1 sml_gst_1_hide">
                  <div class="show_gst_pricing">
                     <div class="">
                        Total : 125$ For 5 Guest
                     </div>
                  </div>
               </div>
            </div>
            <div class="clear"></div>
            <div class="form-group extra_erly_wrp show_al_fld">
               <div class="sml_gst_1">
                  <label>require early check in</label>
                   
                  <div class="show_data_sum">Data Here</div>
               </div>
               <div class="sml_gst_1 sml_gst_1_hide">
                  <div class="show_gst_pricing">
                     <div class="">
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i> 299$ For Early Check In
                     </div>
                  </div>
               </div>
               <div class="form-group sml_gst_1 sml_gst_1_hide">
                  <div>
                     <label>Who Will Pay</label>
                     <div class="show_data_sum">Data Here</div>
                  </div>
               </div>
            </div>
            <div class="form-group extra_night_wrp show_al_fld">
               <div class="sml_gst_1">
                  <label>extra Night?</label>
                  <div class="show_data_sum">Data Here</div>
               </div>
               <div class="sml_gst_1 sml_gst_1_hide">
                  <div class="show_gst_pricing">
                     <div class="">
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i> 25$ For Per Night
                     </div>
                  </div>
               </div>
               <div class="sml_gst_1 sml_gst_1_hide">
                  <label>Select Extra Night Date</label>
                   <div class="show_data_sum">Data Here</div>
               </div>
               <div class="sml_gst_1 sml_gst_1_hide">
                  <div class="show_gst_pricing">
                     <div class="">
                        Total : 125$ For 2 Night
                     </div>
                  </div>
               </div>
               <div class="form-group sml_gst_1 sml_gst_1_hide">
                  <div>
                     <label>Who Will Pay</label>
                     <div class="show_data_sum">Data Here</div>
                     
                      
                  </div>
               </div>
            </div>
            <div class="clear"></div>
            <div class="form-group erly_check_out_wrp show_al_fld">
               <div class="sml_gst_1">
                  <label>require Late Checkout</label>
                  <div class="show_data_sum">Data Here</div> 
                  
               </div>
               <div class="sml_gst_1 sml_gst_1_hide">
                  <div class="show_gst_pricing">
                     <div class="">
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i> 299$ For  CheckOut
                     </div>
                  </div>
               </div>
               <div class="form-group sml_gst_1 sml_gst_1_hide">
                  <div>
                     <label>Who Will Pay</label>
                     <div class="show_data_sum">Data Here</div>
                      
                     
                  </div>
               </div>
            </div>
            <div class="form-group extra_night_wrp_2 show_al_fld ">
               <div class="sml_gst_1">
                  <label>extra Night?</label>
                  <div class="show_data_sum">Data Here</div>
                   
               </div>
               <div class="sml_gst_1 sml_gst_1_hide" style="display: inline-block;" >
                  <div class="show_gst_pricing">
                     <div class="">
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i> 25$ For Per Night
                     </div>
                  </div>
               </div>
               <div class="sml_gst_1 sml_gst_1_hide">
                  <label>Select Extra Night Date</label>
                  <div class="show_data_sum">Data Here</div>
               </div>
               <div class="sml_gst_1 sml_gst_1_hide">
                  <div class="show_gst_pricing">
                     <div class="">
                        Total : 125$ For 2 Night
                     </div>
                  </div>
               </div>
               <div class="form-group sml_gst_1 sml_gst_1_hide">
                  <div>
                     <label>Who Will Pay</label>
                     <div class="show_data_sum">Data Here</div>
                  </div>
               </div>
            </div>
            <div class="clear"></div>
            <div class="form-group " id="targetDiv" style="display:none;">
               <div class="form-group " id="">
                  <div>
                     <label for="whatsapp">Extra Night Befor Event </label>
                     <div class="tol_icon_wrap">
                        <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
                        <span class="tooltip-text">Extra Night Befor Event</span>
                     </div>
                     <div class="radio-group">
                        <label class="yes_req">
                        <input type="radio" id="radio1" name="early_checkin" value="Yes">
                        <span for="early_checkin_yes">Yes</span>
                        </label>
                        <label class="yes_req">
                        <input type="radio" id="radio2" name="early_checkin" value="No">
                        <span for="early_checkin_no">No</span>
                        </label>
                     </div>
                  </div>
               </div>
               <div class="showing_night">
                  <div class="form-group ">
                     <div>
                        <label for="whatsapp">Select Date From </label>
                        <div class="tol_icon_wrap">
                           <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
                           <span class="tooltip-text">Select Date From</span>
                        </div>
                        <input type="date" placeholder="Enter Days">
                     </div>
                  </div>
                  <div class="form-group ">
                     <div>
                        <label for="whatsapp">Select Date To </label>
                        <div class="tol_icon_wrap">
                           <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
                           <span class="tooltip-text">Select Date To</span>
                        </div>
                        <input type="date" placeholder="Enter Days">
                     </div>
                  </div>
                  <div class="form-group ">
                     <div>
                        <label for="whatsapp">Price Per Night Is </label>
                        <div class="tol_icon_wrap">
                           <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
                           <span class="tooltip-text">Price Per Night Is</span>
                        </div>
                        <input type="text" value="$12.00" readonly="">
                     </div>
                  </div>
                  <div class="form-group ">
                     <div>
                        <label for="whatsapp">Who Will Pay </label>
                        <div class="tol_icon_wrap">
                           <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
                           <span class="tooltip-text">Who Will Pay</span>
                        </div>
                        <div class="radio-group">
                           <label class="yes_req">
                           <input type="radio" id="early_checkin_yes" name="early_checkin" value="Yes">
                           <span for="early_checkin_yes">Client</span>
                           </label>
                           <label class="yes_req">
                           <input type="radio" id="early_checkin_no" name="early_checkin" value="No">
                           <span for="early_checkin_no">Guest</span>
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clear"></div>
            <button type="button" class="next_btn comn_btn edit_btn" onclick="nextStep(3)">Edit <i class="fa fa-caret-right" aria-hidden="true"></i>
               </button>
         </div>
         <div class="clear"></div>
         <button type="button" class="prev_btn comn_btn "  onclick="prevStep(3)"><i class="fa fa-caret-left" aria-hidden="true"></i>
         Previous</button>
         <button type="submit" class="done_btn comn_btn"  >Submit <i class="fa fa-caret-right" aria-hidden="true"></i>
         </button>
      </div>
      <form action="#" method="POST" style="display:none;" >
         <div class="btn_all_wrp">
            <button class="submt_btn" type="submit">
               <span> submit </span>
               <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-send">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M10 14l11 -11" />
                  <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" />
               </svg>
            </button>
         </div>
      </form>
      </div>
      <div class="clear"></div>
      <div class="clear"></div>
      <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
      <script src="{{ asset('assets/guest_assets/script.js')}}"></script>
      <script>
       /* full javascript way   
         function saveStep1() {
            let dummyBookingRadios = document.getElementsByName('dummy_booking');
            let dummyBookingVal = '';

            for (let i = 0; i < dummyBookingRadios.length; i++) {
               if (dummyBookingRadios[i].checked) {
                     dummyBookingVal = dummyBookingRadios[i].value;
                     break;
               }
            }
            let dummyBooking = (dummyBookingVal === 'Yes') ? 1 : 0;
            let data = {
               title: document.getElementById('title').value,
               full_name: document.getElementById('full_name').value,
               nickname: document.getElementById('nickname').value,
               dummy_booking: dummyBooking,
               group: document.getElementById('group').value,
               employee_id: document.getElementById('employee_id').value,
               email: document.getElementById('email').value,
               whatsapp_number: document.getElementById('whatsapp_number').value,
               country_born: document.getElementById('country_born').value,
               country_based: document.getElementById('country_based').value,
               tshirt_size: document.getElementById('tshirt_size').value,
               passport_expiry: document.getElementById('passport_expiry').value,
               _token: '{{ csrf_token() }}'
            };

            fetch('{{ route("guest.storeStep1") }}', {
               method: 'POST',
               headers: {
                     'Content-Type': 'application/json',
               },
               body: JSON.stringify(data),
            })
            .then(response => response.json())
            .then(result => {
               if (result.status === 'success') {
                     document.querySelectorAll('.step').forEach(div => div.classList.add('hidden'));
                     document.getElementById('step2').classList.remove('hidden');
                     document.getElementById('guest_id').value = result.guest_id;
               } else {
                     document.getElementById('step1-errors').innerText = 'Validation failed.';
               }
            })
            .catch(error => {
               console.log(error);
               document.getElementById('step1-errors').innerText = 'Please check input fields.';
            });
         } */
         
         let current_step = "{{ $guestDetail->current_step ?? 0 }}"; // Set 0 if null
         console.log("current_step " + current_step);
         nextStep(current_step); 
      
         function saveStep1() {
            let dummyBookingVal = $('input[name="dummy_booking"]:checked').val();
            let dummyBooking = (dummyBookingVal === 'Yes') ? 1 : 0;

            // Clear previous errors and red borders
            $('.error-message').text('');
            $('input, select').removeClass('is-invalid');

            // let data = {
            //    guest_id: $('#guest_id').val(),
            //    title: $('#title').val(),
            //    full_name: $('#full_name').val(),
            //    nickname: $('#nickname').val(),
            //    dummy_booking: dummyBooking,
            //    group: $('#group').val(),
            //    employee_id: $('#employee_id').val(),
            //    email: $('#email').val(),
            //    whatsapp_number: $('#whatsapp_number').val(),
            //    country_born: $('#country_born').val(),
            //    country_based: $('#country_based').val(),
            //    tshirt_size: $('#tshirt_size').val(),
            //    passport_expiry: $('#passport_expiry').val(),
            //    _token: '{{ csrf_token() }}'
            // };

            let formData = new FormData($('#step1-form')[0]);
            formData.append('dummy_booking', dummyBooking); 
            formData.append('event_id', $('#event_id').val());

            $.ajax({
               url: '{{ route("guest.storeStep1") }}',
               method: 'POST',
               data: formData,
               processData: false,   //Important if we have used let formData =  new FormData() 
               contentType: false,   // Important if we have used let formData =  new FormData() 
               success: function(result) {
                     if (result.status === 'success') {
                        nextStep(1);
                        $('#guest_id').val(result.guest_id);
                     }
               },
               error: function(xhr) {
                     if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                           $('#' + key).addClass('is-invalid'); // Add red border
                           $('#' + key + '-error').text(value[0]); // Show error message
                        });
                     }
               }
            });
         }

         function saveStep2() {
            // Clear previous errors
            $('.error-message').text('');
            $('input, select').removeClass('is-invalid');

            let formData = new FormData($('#step2-form')[0]);
            formData.append('guest_detail_id', $('#guest_id').val()); // Append guest_id manually

            $.ajax({
               url: '{{ route("guest.storeStep2") }}',
               method: 'POST',
               data: formData,
               processData: false,
               contentType: false,
               success: function(result) {
                  if (result.status === 'success') {
                     nextStep(2);
                  }
               },
               error: function(xhr) {
                  if (xhr.status === 422) {
                     let errors = xhr.responseJSON.errors;
                     $.each(errors, function(key, value) {
                        $('#' + key).addClass('is-invalid');
                        $('#' + key + '-error').text(value[0]);
                     });
                  }
               }
            });
         }

         // for step2 flight details page
         document.addEventListener("DOMContentLoaded", function () {
            let visaStatusSection = document.querySelector(".extra_visa_chk");

            function toggleVisaStatus() {
               let visaRequired = document.querySelector("input[name='visa_required']:checked");
               if (visaRequired && visaRequired.value === "1") {
                  visaStatusSection.classList.add("show_visa");
               } else {
                  visaStatusSection.classList.remove("show_visa");
               }
            }

            // Check initial state on page load
            toggleVisaStatus();

            // Add event listeners for visa radio buttons
            document.querySelectorAll("input[name='visa_required']").forEach(radio => {
               radio.addEventListener("change", toggleVisaStatus);
            });
         });
      </script>
   </body>
</html>