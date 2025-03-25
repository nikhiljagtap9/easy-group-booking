<form id="step1-form" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <!-- Hidden guest_id field -->
   <input type="hidden" id="guest_id" name="guest_id" value="{{old('id',$guestDetail->id ?? '')}}">
   <input type="hidden" name="event_id" id="event_id" value="{{ request()->get('event_id') }}">
   <input type="hidden" name="current_step" id="current_step" value="1">
   
   <div class="form-group">

      <div class="name_iner_1">
         <label for="fullname">Title</label>

         <select id="title" name="title">
            <option>Mr</option>
            <option>Mrs</option>
         </select>
         <span class="text-danger error-message" id="title-error"></span>
      </div>

      <div class="name_iner">
         <label for="full_name">Your Full Name</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">Your full name as per your passport.</span>
         </div>
         <input type="text" id="full_name" name="full_name"  value="{{ old('full_name', $guestDetail->full_name ?? '') }}"  placeholder="Enter Full Name" required>
         <!-- Error Message -->
         <span class="text-danger error-message" id="full_name-error"></span>
      </div>

   </div>

   <div class="form-group right_fld">
      <div>
         <label for="nickname">Your Nickname</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">The name people use to call you.</span>
         </div>
         <input type="text" id="nickname" name="nickname" value="{{ old('nickname', $guestDetail->nickname ?? '') }}" placeholder="Enter Nick Name">
      </div>
      <!-- Error Message -->
      <span class="text-danger error-message" id="nickname-error"></span>
   </div>

   <div class="form-group right_fld">
      <div>
         <label>Dummy Booking</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">Do you require a dummy booking for visa purposes?</span>
         </div>
         <div class="radio-group">
            <label class="yes_req">
               <input type="radio" name="dummy_booking" value="Yes">
               <span>Yes</span>
            </label>
            <label class="yes_req">
               <input type="radio" name="dummy_booking" value="No">
               <span>No</span>
            </label>
         </div>
      </div>
   </div>

   <div class="form-group right_fld">
      <div>
         <label for="group">Select group</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">Select group</span>
         </div>
         <select id="group" name="group" required>
            <option value="">-- Select --</option>
               @foreach($groups as $group)
               <option value="{{ $group->id }}"
                  {{ old('group_name', $guestDetail->group ?? '') == $group->id ? 'selected' : '' }}>
                  {{ $group->group_name }}
               </option>
               @endforeach
         </select>
      </div>
      <!-- Error Message -->
      <span class="text-danger error-message" id="group-error"></span>
   </div>

   <div class="form-group">
      <div>
         <label for="employee_id">Employee ID Number</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">Employee ID Number</span>
         </div>
         <input type="text" id="employee_id" name="employee_id" value="{{ old('employee_id', $guestDetail->employee_id ?? '') }}" placeholder="Enter Employee ID Number" required>
      </div>
      <!-- Error Message -->
      <span class="text-danger error-message" id="employee_id-error"></span>
   </div>

   <div class="form-group">
      <div>
         <label for="email">Enter Your Email ID</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">We need this to send you your hotel booking details.</span>
         </div>
         <input type="email" id="email" name="email"  value="{{ old('email', $guestDetail->email ?? '') }}" placeholder="Enter Email ID" required>
      </div>
      <!-- Error Message -->
      <span class="text-danger error-message" id="email-error"></span>
   </div>

   <div class="form-group right_fld">
      <div>
         <label for="whatsapp">Your WhatsApp Number</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">We need your number to add you to the event group later.</span>
         </div>
         <input type="tel" id="whatsapp_number" name="whatsapp_number" value="{{ old('whatsapp_number', $guestDetail->whatsapp_number ?? '') }}" placeholder="Enter Whatsapp Number">
      </div>
      <!-- Error Message -->
      <span class="text-danger error-message" id="whatsapp_number-error"></span>
   </div>

   <div class="form-group">
      <div>
         <label for="country_born">Country You Were Born In</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">The country listed as your birthplace on official documents.</span>
         </div>
         <select id="country_born" name="country_born" required>
            <option value="">-- Select --</option>
            @foreach($countries as $country)
               <option value="{{ $country->name }}"
               {{old('name', $guestDetail->country_born ?? '') == $country->name ? 'selected' : '' }}>
                  {{ $country->name }}
               </option>
            @endforeach
         </select>
      </div>
      <!-- Error Message -->
      <span class="text-danger error-message" id="country_born-error"></span>
   </div>
   <div class="form-group right_fld">
      <div>
         <label for="country_based">Country Where You Are Based</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">The country where you currently live and work.</span>
         </div>
         <select id="country_based" name="country_based" required>
            <option value="">-- Select --</option>
            @foreach($countries as $country)
               <option value="{{ $country->name }}"
               {{old('name', $guestDetail->country_based ?? '') == $country->name ? 'selected' : '' }}>
                  {{ $country->name }}
               </option>
            @endforeach
         </select>
      </div>
      <!-- Error Message -->
      <span class="text-danger error-message" id="country_based-error"></span>
   </div>

   <div class="form-group">
      <div>
         <label for="tshirt_size">Your T-Shirt Size</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">Select your T-shirt size so we can provide the right fit for event merchandise.</span>
         </div>
         <select id="tshirt_size" name="tshirt_size">
            <option value="S" {{ isset($guestDetail) && $guestDetail->tshirt_size == "S" ? "selected" : ""}}>Small</option>
            <option value="M" {{ isset($guestDetail) && $guestDetail->tshirt_size == "M" ? "selected" : ""}}>Medium</option>
         </select>
      </div>
      <!-- Error Message -->
      <span class="text-danger error-message" id="tshirt_size-error"></span>
   </div>

   <div class="form-group right_fld">
      <div>
         <label for="profile_picture">Upload Your Profile Picture</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">This can be any picture of you that we may use for event promotional material or to help our team recognize you.</span>
         </div>
         <input type="file" id="profile_picture" name="profile_picture">

         <!--If you also want to retain the old file if no new file is selected --> 
         <input type="hidden" name="existing_profile_picture" value="{{ $guestDetail->profile_picture }}">
         <!-- Display existing file name or link if exists -->
         @if (!empty($guestDetail->profile_picture))
            <div style="margin-top: 5px;">
            <strong>Current File:</strong> 
            {{ $guestDetail->profile_picture }}
           <!-- <a href="{{ asset('uploads/profile_pictures/' . $guestDetail->profile_picture) }}" target="_blank">
               {{ $guestDetail->profile_picture }}
            </a> -->
            </div>
         @endif
      </div>
      <!-- Error Message -->
      <span class="text-danger error-message" id="profile_picture-error"></span>
   </div>

   <div class="form-group right_fld">
      <div>
         <label for="whatsapp">Passport expiry date</label>
         <div class="tol_icon_wrap">
            <div class="tol_icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
            <span class="tooltip-text">The date your passport is set to expire. Ensure it’s valid for travel.</span>
         </div>
         <input type="date" id="passport_expiry" value="{{ old('passport_expiry', $guestDetail->passport_expiry ?? '') }}" name="passport_expiry" placeholder="Enter Passport Expiry Date">
      </div>
      <!-- Error Message -->
      <span class="text-danger error-message" id="passport_expiry-error"></span>
   </div>
   <div class="clear"></div>
   <button type="button" class="next_btn comn_btn" onclick="saveStep1()">
      Next <i class="fa fa-caret-right" aria-hidden="true"></i>
   </button>
   <a href="#" class="sav_cont comn_btn">
      SAVE AND CONTINUE LATER <i class="fa fa-bookmark" aria-hidden="true"></i>
   </a>
</form>