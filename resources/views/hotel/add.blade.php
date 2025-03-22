@extends('layouts.main')

@section('title', 'EasyGroup | Add Hotel')

@section('content')
<style>
   .active_hotel{
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
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-skyscraper"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M5 21v-14l8 -4v18" /><path d="M19 21v-10l-6 -4" /><path d="M9 9l0 .01" /><path d="M9 12l0 .01" /><path d="M9 15l0 .01" /><path d="M9 18l0 .01" /></svg>
                  Add Hotel
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

               <form action="{{ route('hotel.store') }}" method="POST">
                  @csrf
                  <div class="accordion" id="collapsibleSection">
                     <div class="card accordion-item active">
                        <h2 class="accordion-header" id="headingDeliveryAddress">
                           <button type="button" class="accordion-button"> Add Hotel </button>
                        </h2>
                        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                           <div class="accordion-body">
                              <div class="row g-6">
                                 <div class="col-md-3">
                                    <label class="form-label" for="collapsible-pincode">Hotel Name </label>
                                    <input type="text" name="hotel_name" id="collapsible-pincode" class="form-control" placeholder="Enter Name" />
                                 </div> 
                              </div>
                           </div>
                           <div class="clear"></div>
                           <div class="mt-1 submt_cacnl">
                              <button type="submit" class="btn btn-primary me-4 ak_btn">
                                 Add Hotel
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
