<form id="step2-form" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="hidden" name="current_step" id="current_step" value="2">
   <div class="form-group right_fld">
      <div>
         <label for="flight_ticket">Upload Your Flight Ticket Here</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">We need this to double-check your travel details.</span>
         </div>
         <input type="file" id="flight_ticket" name="flight_ticket">
         <!--If you also want to retain the old file if no new file is selected --> 
         <input type="hidden" name="existing_flight_ticket" value="{{ $flightDetail->flight_ticket }}">
         <!-- Display existing file name or link if exists -->
         @if (!empty($flightDetail->flight_ticket))
            <div style="margin-top: 5px;">
            <strong>Current File:</strong> 
            {{ $flightDetail->flight_ticket }}
            </div>
         @endif
      </div>
      <span class="text-danger error-message" id="flight_ticket-error"></span>
   </div>
   <div class="form-group right_fld">
      <div>
         <label>Do you need a Visa </label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">Would you need a Visa to enter the country</span>
         </div>
         <div class="radio-group">
            <label class="yes_req">
               <input type="radio" class="visa_ch_yes" name="visa_required" value="1"
               {{ isset($flightDetail) && $flightDetail->visa_required == 1 ? 'checked' : '' }}>
               <span for="early_checkin_yes">Yes</span>
            </label>
            <label class="yes_req">
               <input type="radio" class="visa_ch_no" name="visa_required" value="0"
               {{ isset($flightDetail) && $flightDetail->visa_required == 0 ? 'checked' : '' }}>
               <span for="early_checkin_no">No</span>
            </label>
         </div>
      </div>
      <span class="text-danger error-message" id="visa_required-error"></span>
   </div>
   <div class="form-group extra_visa_chk">
      <div>
         <label for="visa_status">Visa Status</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">Select Visa Status</span>
         </div>
         <select id="visa_status" name="visa_status">
            <option value="pending" {{ isset($flightDetail) && $flightDetail->visa_status == "pending" ? "selected" : ""}}>Pending</option>
            <option value="received" {{ isset($flightDetail) && $flightDetail->visa_status == "received" ? "selected" : ""}}>Received</option>
            <option value="inprocess" {{ isset($flightDetail) && $flightDetail->visa_status == "inprocess" ? "selected" : ""}}>Inprocess</option>
         </select>
      </div>
      <span class="text-danger error-message" id="visa_status-error"></span>
   </div>
   <div class="clear"></div>
   <div class="form-group ">
      <div>
         <label for="whatsapp">arrival flight number</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">arrival flight number</span>
         </div>
         <input type="text" name="arrival_flight_number" id="arrival_flight_number" value="{{ old('arrival_flight_number', $flightDetail->arrival_flight_number ?? '' )}}" >      
      </div>
      <span class="text-danger error-message" id="arrival_flight_number-error"></span>
   </div>
   <div class="form-group ">
      <div>
         <label for="whatsapp">arrival flight Date</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">arrival flight Date</span>
         </div>
         <input type="date" name="arrival_flight_date" id="arrival_flight_date" value="{{ old('arrival_flight_date', $flightDetail->arrival_flight_date ?? '' )}}" >
      </div>
      <span class="text-danger error-message" id="arrival_flight_date-error"></span>
   </div>
   <div class="form-group right_fld">
      <div>
         <label for="whatsapp">arrival flight Time</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">arrival flight Time</span>
         </div>
         <input type="time" name="arrival_flight_time" id="arrival_flight_time" value="{{ old('arrival_flight_time', $flightDetail->arrival_flight_time ?? '' )}}" >
      </div>   
      <span class="text-danger error-message" id="arrival_flight_time-error"></span>
   </div>
   <div class="clear"></div>
   <div class="form-group ">
      <div>
         <label for="whatsapp">departure flight number</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">departure flight number</span>
         </div>
         <input type="text" name="departure_flight_number" id="departure_flight_number" value="{{ old('departure_flight_number', $flightDetail->departure_flight_number ?? '' )}}" >
      </div>
      <span class="text-danger error-message" id="departure_flight_number-error"></span>
   </div>
   <div class="form-group ">
      <div>
         <label for="whatsapp">departure flight date</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">departure flight date</span>
         </div>
         <input type="date" name="departure_flight_date" id="departure_flight_date" value="{{ old('departure_flight_date', $flightDetail->departure_flight_date ?? '' )}}" >
      </div>
      <span class="text-danger error-message" id="departure_flight_date-error"></span>
   </div>
   <div class="form-group right_fld">
      <div>
         <label for="whatsapp">departure flight time</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">departure flight time</span>
         </div>
         <input type="time" name="departure_flight_time" id="departure_flight_time" value="{{ old('departure_flight_time', $flightDetail->departure_flight_time ?? '' )}}" >
      </div>
      <span class="text-danger error-message" id="departure_flight_time-error"></span> 
   </div>
   <div class="clear"></div>
   <div class="">

   </div>
   <div class="clear"></div>
   <div class="clear"></div>
   <button type="button" class="prev_btn comn_btn" onclick="prevStep(0)"><i class="fa fa-caret-left" aria-hidden="true"></i>
      Previous</button>
   <button type="button" class="next_btn comn_btn" onclick="saveStep2()">Next <i class="fa fa-caret-right" aria-hidden="true"></i>
   </button>
   <a href="#" class="sav_cont comn_btn">
      SAVE AND CONTINUE LATER <i class="fa fa-bookmark" aria-hidden="true"></i>
   </a>
</form>