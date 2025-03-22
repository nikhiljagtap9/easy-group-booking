@extends('layouts.main')

@section('title', 'EasyGroup | ' . (isset($event) ? 'Update Event' : 'Add Event'))


@section('content')
<style>
   .active_user{

   background: linear-gradient(270deg, #2e25a0 0%, #12a89d 100%) !important;
   color:#fff !important;
   }
</style>
<!-- / Navbar -->
<!-- Content wrapper -->
<div class="content-wrapper">
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
   <div class="row g-6">
      <!-- View sales -->
      <div class="col-xl-12">
         <!-- Collapsible Section -->
         <div class="row my-6">
            <div class="col">
               <h6 class="ad_land" >
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-ticket"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 5l0 2" /><path d="M15 11l0 2" /><path d="M15 17l0 2" /><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" /></svg>
                  {{ isset($event) ? 'Update Event' : 'Add Event' }}
               </h6>
               @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
               @endif
               <form method="POST" action="{{ isset($event) ? route('event.update', $event->id) : route('event.store') }}" id="eventForm">
               @csrf
                  {{-- Add hidden method if updating --}}
                  @if(isset($event))
                     @method('POST') {{-- We can use POST here for update --}}
                  @endif
                  <div class="accordion" id="collapsibleSection">
                     <div class="card accordion-item active">
                        <h2 class="accordion-header" id="headingDeliveryAddress">
                           <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseDeliveryAddress" aria-expanded="true" aria-controls="collapseDeliveryAddress"> {{ isset($event) ? 'Update Event' : 'Add Event' }}</button>
                        </h2>
                        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                           <div class="accordion-body">
                              <div class="row g-6">
                                 <div class="col-md-4">
                                    <label class="form-label" for="collapsible-phone">Event Name</label>
                                    <input type="text" name="event_name" value="{{ old('event_name', $event->event_name ?? '') }}" class="form-control" placeholder="Enter Event Name" />
                                 </div>

                                 <div class="col-md-4">
                                    <label class="form-label" for="collapsible-phone">Event Start Date</label>
                                    <input type="date" name="start_date" value="{{ old('start_date', $event->start_date ?? '') }}" class="form-control" placeholder="Enter Event Start Date" />
                                 </div>
                                 <div class="col-md-4">
                                    <label class="form-label" for="collapsible-phone">Event End Date</label>
                                    <input type="date" name="end_date" value="{{ old('end_date', $event->end_date ?? '') }}" class="form-control" placeholder="Enter Event End Date" />
                                 </div>

                                 <div class="col-md-4">
                                    <label class="form-label" for="hotelDropdown">Select Hotel</label>
                                    <a data-bs-toggle="modal" data-bs-target="#addNewHotelModal" class="crt_hotl_btn" >Create a Hotel</a>
                                    <div class="clear"></div>
                                 
                                    <select id="hotelDropdown" name="hotel_name" class="select2 form-select" data-allow-clear="true">
                                       <option value="">Select</option>
                                      
                                       @foreach($hotels as $hotel)
                                       <option value="{{ $hotel->id }}" 
                                             {{ old('hotel_name', $event->hotel_name ?? '') == $hotel->id ? 'selected' : '' }}>
                                             {{ $hotel->hotel_name }}
                                          </option>
                                       @endforeach
                                    </select>
                                     <!-- Message span -->
                                 <span id="hotelFormMessage"></span>
                                 </div>
                                

                                 <div class="col-md-4">
                                    <label class="form-label" for="collapsible-state">Date from when to when Client will Pay </label>
                                    <div class="clear"></div>
                                    <input type="date" name="client_pay_form" value="{{ old('client_pay_form', $event->client_pay_form ?? '') }}" class="form-select" style="float: left; width: 48%;" >
                                    <input type="date" name="client_pay_to" value="{{ old('client_pay_form', $event->client_pay_form ?? '') }}" class="form-select" style="float: right; width: 48%;" >
                                 </div>

                                 <div class="col-md-4">
                                    <label class="form-label" for="collapsible-phone">Room Rate</label>
                                    <input type="text" name="room_rate" value="{{ old('room_rate', $event->room_rate ?? '') }}" class="form-control" placeholder="Enter Room Rate" />
                                 </div>

                                 <div class="col-md-4">
                                    <label class="form-label" for="collapsible-phone">Extra Guest Rate</label>
                                    <input type="text" name="extra_guest_rate" value="{{ old('extra_guest_rate', $event->extra_guest_rate ?? '') }}" class="form-control" placeholder="Enter Extra Guest Rate" />
                                 </div>

                                 <div class="col-md-4">
                                    <label class="form-label" for="collapsible-phone">Early Check-In Fee</label>
                                    <input type="text" name="early_check_in_fee" value="{{ old('early_check_in_fee', $event->early_check_in_fee ?? '') }}" class="form-control" placeholder="Enter Early Check-In Fee" />
                                 </div>

                                 <div class="col-md-4">
                                    <label class="form-label" for="collapsible-phone">Late checkout fee</label>
                                    <input type="text" name="late_check_out_fee" value="{{ old('late_check_out_fee', $event->late_check_out_fee ?? '') }}" class="form-control" placeholder="Enter Late checkout fee" />
                                 </div>

                                 <div class="clear"></div>

                                 <div class="col-md-3">
                                    <label class="form-label" for="collapsible-phone">Check In Date</label>
                                    <input type="date" name="check_in_date" value="{{ old('check_in_date', $event->check_in_date ?? '') }}" class="form-control" placeholder="" />
                                 </div>

                                 <div class="col-md-3">
                                    <label class="form-label" for="collapsible-phone">Check Out Date</label>
                                    <input type="date" name="check_out_date" value="{{ old('check_out_date', $event->check_out_date ?? '') }}" class="form-control" placeholder="" />
                                 </div>

                                 <div class="col-md-3">
                                    <label class="form-label" for="collapsible-phone">Check In Time</label>
                                    <input type="time" name="check_in_time" value="{{ old('check_in_time', $event->check_in_time ?? '') }}" class="form-control" placeholder="" />
                                 </div>

                                 <div class="col-md-3">
                                    <label class="form-label" for="collapsible-phone">Check Out Time</label>
                                    <input type="time" name="check_out_time" value="{{ old('check_out_time', $event->check_out_time ?? '') }}" class="form-control" placeholder="" />
                                 </div>

                                 <div class="col-md-3">
                                    <label class="form-label" for="collapsible-phone">Cut Off Date</label>
                                    <input type="date" name="cut_off_date" value="{{ old('cut_off_date', $event->cut_off_date ?? '') }}" class="form-control" placeholder="" />
                                 </div>

                                 <div class="col-md-3">
                                    <label class="form-label" for="collapsible-phone">Cut Off Cost</label>
                                    <input type="text" name="cut_off_cost" value="{{ old('cut_off_cost', $event->cut_off_cost ?? '') }}" class="form-control" placeholder="" />
                                 </div>

                                 <div class="col-md-3">
                                    <label class="form-label" for="collapsible-phone">Early Departure Cost</label>
                                    <input type="text" name="early_departure_cost" value="{{ old('early_departure_cost', $event->early_departure_cost ?? '') }}" class="form-control" placeholder="" />
                                 </div>

                                 <div class="col-md-3">
                                    <label class="form-label" for="collapsible-phone">Enter Deadline 1st for Submission</label>
                                    <input type="date" name="deadline_first" value="{{ old('deadline_first', $event->deadline_first ?? '') }}" class="form-control" placeholder="" />
                                 </div>

                                 <div class="col-md-3">
                                    <label class="form-label" for="collapsible-phone">Enter Deadline 2nd for Submission</label>
                                    <input type="date" name="deadline_second" value="{{ old('deadline_second', $event->deadline_second ?? '') }}" class="form-control" placeholder="" />
                                 </div>

                                 <div class="col-md-3">
                                    <label class="form-label" for="groupDropdown">Select Group</label>
                                    <a data-bs-toggle="modal" data-bs-target="#addNewgroup" class="crt_hotl_btn" >Create a Group</a>
                                    <div class="clear"></div>
                                    <select id="groupDropdown" name="group" class="select2 form-select" data-allow-clear="true">
                                       <option value="">Select</option>
                                       @foreach($groups as $group)
                                          <option value="{{ $group->id }}" 
                                          {{ old('group', $event->group ?? '') == $group->id ? 'selected' : '' }}>
                                       <!--   {{ old('group_name') == $group->id ? 'selected' : '' }}> -->
                                             {{ $group->group_name }}
                                          </option>
                                       @endforeach
                                    </select>
                                    <!-- Message span -->
                                    <span id="groupFormMessage"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="clear"></div>
                           <div class="mt-1 submt_cacnl">
                              <button type="submit" class="btn btn-primary me-4 ak_btn">
                                 {{ isset($event) ? 'Update Event' : 'Add Event' }}
                                 <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-right">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M7 7l5 5l-5 5" />
                                    <path d="M13 7l5 5l-5 5" />
                                 </svg>
                              </button>
                              
                           </div>
                           <div class="clear"></div>
                        </div>
                     </div>
                  </div>
               </form>   
            </div>
         </div>
      </div>
   </div>
</div>
<!-- / Content -->


<div id="popup" class="popup">
        <div class="evng_gnrt">
            
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" /></svg>
            <div class="cong_msg">Congratulations</div>
            <div class="cong_msg_1">Event has been successfully added.</div>

            <div class="cong_msg_2">Copy This Link & Share for Invitation</div>
            <div class="cong_msg_3">
               <span class="cong_msg_3_link" >https://www.google.com/</span>
               <a>
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-share"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M8.7 10.7l6.6 -3.4" /><path d="M8.7 13.3l6.6 3.4" /></svg>
               </a>
            </div>
            <div class="clear"></div>
            <div href="" class="submit_btn" >
               <a href="{{route('event.list')}}">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
               </a>
            </div>
            
        </div>
</div>



<div class="modal fade" id="addNewgroup" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Create New Group</h4> 
        </div>
        <form id="addGroupForm" class="row g-6">
         @csrf
         <div class="col-12 form-control-validation">
               <label class="form-label w-100" for="group_name">Group Name</label>
               <div class="input-group input-group-merge">
                  <input id="group_name" name="group_name" class="form-control" type="text" placeholder="Enter Group Name" required />
               </div>
            </div>

            <div class="col-12 text-center mt-3">
               <button type="submit" class="btn btn-primary me-3">Create</button>
               <button type="button" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal">Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addNewHotelModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Create New Hotel</h4> 
        </div>
        <form id="addHotelForm" class="row g-6">
            @csrf
            <div class="col-12 form-control-validation">
               <label class="form-label w-100" for="hotel_name">Hotel Name</label>
               <div class="input-group input-group-merge">
                  <input id="hotel_name" name="hotel_name" class="form-control" type="text" placeholder="Enter Hotel Name" required />
               </div>
            </div>

            <div class="col-12 text-center mt-3">
               <button type="submit" class="btn btn-primary me-3">Create</button>
               <button type="button" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal">Cancel</button>
            </div>
         </form>
      </div>
    </div>
  </div>
</div>


   @if (session('event_added'))
   <script>
      function showPopup() {
         document.getElementById("popup").classList.add("show");
         document.body.classList.add("popup_active_body"); 
      }

      function hidePopup() {
         document.getElementById("popup").classList.remove("show");
         document.body.classList.remove("popup_active_body");
      }

      // Call the function to show popup
      window.onload = function() {
         showPopup();
      }
   </script>
   @endif

   <script>
      // add hotel
      $('#addHotelForm').submit(function(e) {   
         e.preventDefault();
         var hotelName = $('#hotel_name').val();
         var token = '{{ csrf_token() }}';

         // Clear any old messages
         $('#hotelFormMessage').html('');

         $.ajax({
            url: '{{ route("hotel.store.ajax") }}', // Ensure this route exists
            method: 'POST',
            data: { hotel_name: hotelName, _token: token },
            success: function(response) {
                  if (response.status === 'success') {
                     // Close Modal
                     $('#addNewHotelModal').modal('hide');

                     // Clear Input
                     $('#hotel_name').val('');

                     // Append new hotel to dropdown
                     $('#hotelDropdown').append(
                        `<option value="${response.hotel.id}" selected>${response.hotel.hotel_name}</option>`
                     );

                     // Refresh Select2
                     $('#hotelDropdown').trigger('change');

                     // Show success message
                     $('#hotelFormMessage').html(
                        `<div class="text-success mt-2">Hotel added successfully!</div>`
                     ).fadeIn().delay(5000).fadeOut();
                  } else {
                     $('#hotelFormMessage').html(
                        `<div class="text-danger mt-2">Error adding hotel.</div>`
                     ).fadeIn().delay(5000).fadeOut();
                  }
            },
            error: function() {
                  $('#hotelFormMessage').html(
                     `<div class="text-danger mt-2">Something went wrong!</div>`
                  ).fadeIn().delay(5000).fadeOut();
            }
         });
      });

      // add group
      $('#addGroupForm').submit(function(e) {   
         e.preventDefault();
         var group_name = $('#group_name').val();
         var token = '{{ csrf_token() }}';

         // Clear any old messages
         $('#groupFormMessage').html('');

         $.ajax({
            url: '{{ route("group.store.ajax") }}', // Ensure this route exists
            method: 'POST',
            data: { group_name: group_name, _token: token },
            success: function(response) {
                  if (response.status === 'success') {
                     // Close Modal
                     $('#addNewgroup').modal('hide');

                     // Clear Input
                     $('#group_name').val('');

                     // Append new group to dropdown
                     $('#groupDropdown').append(
                        `<option value="${response.group.id}" selected>${response.group.group_name}</option>`
                     );

                     // Refresh Select2
                     $('#groupDropdown').trigger('change');

                     // Show success message
                     $('#groupFormMessage').html(
                        `<div class="text-success mt-2">Group added successfully!</div>`
                     ).fadeIn().delay(5000).fadeOut();
                  } else {
                     $('#groupFormMessage').html(
                        `<div class="text-danger mt-2">Error adding group.</div>`
                     ).fadeIn().delay(5000).fadeOut();
                  }
            },
            error: function() {
                  $('#groupFormMessage').html(
                     `<div class="text-danger mt-2">Something went wrong!</div>`
                  ).fadeIn().delay(5000).fadeOut();
            }
         });
      });
   </script>


@endsection
