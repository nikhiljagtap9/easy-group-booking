<form id="step2-form" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="hidden" name="current_step" id="current_step" value="3">
   <div class="form-group">
      <div>
         <label for="room_type">Select Room Type</label>

         <select id="room_type" name="room_type">
            <option value="a">Room Type A</option>
            <option value="b">Room Type B</option>
         </select>
      </div>
   </div>

   <div class="clear"></div>
   <div class="form-group ">
      <div>
         <label for="check_in_date">check in date </label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">Select Check In date</span>
         </div>
         <input type="date" name="check_in_date" id="check_in_date" value="{{ old('check_in_date', $hotelDetail->check_in_date ?? '' )}}" >
      </div>
   </div>
   <div class="form-group right_fld">
      <div>
         <label for="check_out_date">check Out date </label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">Select Check Out date</span>
         </div>
         <input type="date" name="check_out_date" id="check_out_date" value="{{ old('check_out_date', $hotelDetail->check_out_date ?? '' )}}" >
      </div>
   </div>
   <div class="clear"></div>

   <div class="clear"></div>

   <div class="form-group right_fld textarea_new">
      <div>
         <label for="request_hotel">Request for Hotel</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">Request for Hotel</span>
         </div>
         <textarea rows="4" name="request_hotel" id="request_hotel" ></textarea>
      </div>
   </div>
   <div class="clear"></div> <br><br>
   <button type="button" class="prev_btn comn_btn" onclick="prevStep(1)"><i class="fa fa-caret-left" aria-hidden="true"></i>
      Previous</button>
   <button type="button" class="next_btn comn_btn" onclick="nextStep(3)">Next <i class="fa fa-caret-right" aria-hidden="true"></i>
   </button>
   <a href="#" class="sav_cont comn_btn">
      SAVE AND CONTINUE LATER <i class="fa fa-bookmark" aria-hidden="true"></i>
   </a>
</form>