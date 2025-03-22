@extends('layouts.main')

@section('title', 'EasyGroup | Add Group')

@section('content')
<style>
   .active_grp{
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
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users-group"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" /><path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M17 10h2a2 2 0 0 1 2 2v1" /><path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M3 13v-1a2 2 0 0 1 2 -2h2" /></svg>
                  Add Group
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
               <form action="{{ route('group.store') }}" method="POST">
                  @csrf
                  <div class="accordion" id="collapsibleSection">
                     <div class="card accordion-item active">
                        <h2 class="accordion-header" id="headingDeliveryAddress">
                           <button type="button" class="accordion-button"> Add Group </button>
                        </h2>
                        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                           <div class="accordion-body">
                              <div class="row g-6">
                                 <div class="col-md-3">
                                    <label class="form-label" for="collapsible-pincode">Group Name </label>
                                    <input type="text" name="group_name" id="collapsible-pincode" class="form-control" placeholder="Enter Name" />
                                 </div>   
                              </div>
                           </div>
                           <div class="clear"></div>
                           <div class="mt-1 submt_cacnl">
                              <button type="submit" class="btn btn-primary me-4 ak_btn">
                                 Add Group
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
