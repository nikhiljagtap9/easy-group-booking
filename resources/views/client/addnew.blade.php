@extends('layouts.main')

@section('title', 'EasyGroup | Add Client')

@section('content')
<style>
   .active_land{
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
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-hexagon">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                     <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z"></path>
                     <path d="M6.201 18.744a4 4 0 0 1 3.799 -2.744h4a4 4 0 0 1 3.798 2.741"></path>
                     <path d="M19.875 6.27c.7 .398 1.13 1.143 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z"></path>
                  </svg>
                  Add Client
               </h6>

               <form action="{{ route('client.store') }}" method="POST">
               @csrf
                  <div class="accordion" id="collapsibleSection">
                     <div class="card accordion-item active">
                        <h2 class="accordion-header" id="headingDeliveryAddress">
                           <button type="button" class="accordion-button"> Add Client </button>
                        </h2>
                        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                           
                              <div class="accordion-body">
                                 <div class="row g-6">
                                    <div class="col-md-2">
                                       <label class="form-label" for="collapsible-state">Title</label>
                                       <select id="collapsible-state" class="select2 form-select" name="title" data-allow-clear="true"> 
                                          <option value="Mr">Mr</option>
                                          <option value="Mrs">Mrs</option>
                                       </select>
                                       <x-custom-input-error field="title"/>
                                    </div>
                                    <div class="col-md-3">
                                    <label class="form-label" for="collapsible-pincode">Name</label>
                                    <x-form-input 
                                       name="name" 
                                       placeholder="Enter name" 
                                       value="{{ old('name') }}" 
                                    />
                                    </div>
                                    <div class="col-md-3">
                                       <label class="form-label" for="collapsible-pincode">Surname </label>
                                       <x-form-input type="text" name="surname"  id="collapsible-pincode" class="form-control" placeholder="Enter Surname" />
                                    </div>
                                    <div class="col-md-3">
                                       <label class="form-label" for="collapsible-pincode">Whatsapp Number </label>
                                       <x-form-input type="text" name="whatsapp_no" id="collapsible-pincode" class="form-control" placeholder="Enter Whatsapp Number" />
                                    </div>
                                    <div class="clear"></div>
                                    <div class="col-md-3">
                                       <label class="form-label" for="collapsible-pincode">Phone Number  </label>
                                       <input type="text" name="phone" id="collapsible-pincode" class="form-control" placeholder="Enter Phone Number" />
                                    </div>
                                    
                                    <div class="col-md-3">
                                       <label class="form-label" for="collapsible-pincode">Email ID</label>
                                       <x-form-input type="text" name="email" id="collapsible-pincode" class="form-control" placeholder="Enter Email ID" />
                                    </div>
                                    <div class="col-md-3">
                                       <label class="form-label" for="collapsible-pincode">Password</label>
                                       <x-form-input type="text" name="password" id="collapsible-pincode" class="form-control" placeholder="Enter Password" />
                                    </div>
                                    <div class="col-md-3">
                                       <label class="form-label" for="collapsible-state">User Type</label>
                                    <!-- <select id="collapsible-state" name="usertype" class="select2 form-select" data-allow-clear="true">
                                          <option value="">Select</option>
                                          <option value="admin">Admin</option>
                                          <option value="client">Standard</option>
                                     </select>     -->
</select>
                                       <x-form-input name="usertype" class="select2 form-select" type="select" :options="['admin' => 'Admin', 'client' => 'Standard']" />
                                    </div>     
                                 </div>
                              </div>                          
                           <div class="clear"></div>
                           <div class="mt-1 submt_cacnl">
                              <button type="submit" class="btn btn-primary me-4 ak_btn">
                                 Add Client
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
@endsection
