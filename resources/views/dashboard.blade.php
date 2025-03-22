@extends('layouts.main')

@section('title', 'EasyGroup | Dashboard')

@section('content')
<style>
   .active_home a{
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
      <div class="col-xl-4">
         <div class="card">
            <div class="d-flex align-items-end row">
               <div class="col-7">
                  <div class="card-body text-nowrap">
                     <h5 class="card-title mb-0">Welcome John! 🎉</h5>
                     <p class="mb-2">to Easy Group</p>
                     <h4 class="text-primary mb-1">12 Scheduled Event</h4>
                     <a href="javascript:;" class="btn btn-primary">View All Scheduled Event  </a>
                  </div>
               </div>
               <div class="col-5 text-center text-sm-left">
                  <div class="card-body pb-0 px-0 px-md-4">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- View sales -->
      <!-- Statistics -->
      <div class="col-xl-8 col-md-12">
         <div class="card h-100">
            <div class="card-header d-flex justify-content-between">
               <h5 class="card-title mb-0">Event Statistics</h5>
               <small class="text-muted">Updated 1 Day ago</small>
            </div>
            <div class="card-body d-flex align-items-end">
               <div class="w-100">
                  <div class="row gy-3">
                      
                     <div class="col-md-4 col-6">
                        <div class="d-flex align-items-center">
                           <div class="badge rounded bg-label-info me-4 p-2">
                              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-ticket"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 5l0 2" /><path d="M15 11l0 2" /><path d="M15 17l0 2" /><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" /></svg>
                           </div>
                           <div class="card-info">
                              <small class="totl_pro" >Scheduled Event</small>
                              <h5 class="mb-0">12</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-6">
                        <div class="d-flex align-items-center">
                           <div class="badge rounded bg-label-success me-4 p-2">
                              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-calendar-event"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 2a1 1 0 0 1 .993 .883l.007 .117v1h1a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-12a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h1v-1a1 1 0 0 1 1.993 -.117l.007 .117v1h6v-1a1 1 0 0 1 1 -1m3 7h-14v9.625c0 .705 .386 1.286 .883 1.366l.117 .009h12c.513 0 .936 -.53 .993 -1.215l.007 -.16z" /><path d="M8 14h2v2h-2z" /></svg>
                           </div>
                           <div class="card-info">
                              <small class="totl_pro" >Total Booking</small>
                              <h5 class="mb-0">90</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-6">
                        <div class="d-flex align-items-center">
                           <div class="badge rounded bg-label-danger me-4 p-2">
                              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                           </div>
                           <div class="card-info">
                              <small class="totl_pro" >Total  Users</small>
                              <h5 class="mb-0">60</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Earning Reports -->
      <div class="col-xxl-4 col-md-6">
         <div class="card h-100">
            <div class="card-header d-flex justify-content-between">
               <div class="card-title mb-0">
                  <h5 class="mb-1">Turnover  Reports</h5>
                  <p class="card-subtitle">Monthly Turnover Overview</p>
               </div>
               <div class="dropdown">
                  <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="earningReports" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ti ti-dots-vertical ti-md text-muted"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReports">
                     <a class="dropdown-item" href="javascript:void(0);">Download</a>
                     <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                     <a class="dropdown-item" href="javascript:void(0);">Share</a>
                  </div>
               </div>
            </div>
            <div class="card-body pb-0">
            
               <div id="reportBarChart"></div>
            </div>
         </div>
      </div>
      <!--/ Earning Reports -->
      <!-- Transactions -->
      <div class="col-xxl-8 col-md-6">
         <div class="card" bis_skin_checked="1">
            <h5 class="card-header">View User
               <a href="" class="btn btn-primary waves-effect waves-light view_al_cl" >View All</a>
            </h5>
            <div class="clear"></div>
            <div class="card-datatable text-nowrap" bis_skin_checked="1">
               <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer" bis_skin_checked="1">
                  <div class="table-responsive" bis_skin_checked="1">
                     <table class="datatables-ajax table dataTable no-footer" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" >
                        <thead>
                           <tr>
                              <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Full name: activate to sort column descending" aria-sort="ascending" >
                                 Full Name
                              </th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" >Email ID</th>
                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" >User Type</th>
                              
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="odd">
                              <td class="sorting_1">Lorem Name </td>
                              <td>lorememail@info.com</td>
                              <td>Lorem</td>
                              
                           </tr>
                           <tr class="odd">
                              <td class="sorting_1">Lorem Name </td>
                              <td>lorememail@info.com</td>
                              <td>Lorem</td>
                              
                           </tr>
                          
                           <tr class="odd">
                              <td class="sorting_1">Lorem Name </td>
                              <td>lorememail@info.com</td>
                              <td>Lorem</td>
                              
                           </tr>
                           <tr class="odd">
                              <td class="sorting_1">Lorem Name </td>
                              <td>lorememail@info.com</td>
                              <td>Lorem</td>
                              
                           </tr>
                           <tr class="odd">
                              <td class="sorting_1">Lorem Name </td>
                              <td>lorememail@info.com</td>
                              <td>Lorem</td>
                              
                           </tr>
                            
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xxl-12">
         <div class="">
            <div class="card" bis_skin_checked="1">
               <h5 class="card-header">
                  View Event
                  <a href="" class="btn btn-primary waves-effect waves-light view_al_cl" >View All</a>
               </h5>
               <div class="clear"></div>
               <div class="card-datatable text-nowrap" bis_skin_checked="1">
                  <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer" bis_skin_checked="1">
                     <div class="table-responsive" bis_skin_checked="1">
                        <table class="datatables-ajax table dataTable no-footer" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" >
                           <thead>
                              <tr>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" >Event Name</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" >Event Date</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" >Hotel</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" >Dates </th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" >Room rate</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" >Extra Guest Rate</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr class="odd">
                                 <td class="sorting_1">Lorem Event</td>
                                 <td>23-Feb-2024</td>
                                 <td>Lorem Hotel</td>
                                 <td>26-Feb TO 28-Feb</td>
                                 <td>120 AED</td>
                                 <td>160 AED</td>
                              </tr>
                              <tr class="odd">
                                 <td class="sorting_1">Lorem Event</td>
                                 <td>23-Feb-2024</td>
                                 <td>Lorem Hotel</td>
                                 <td>26-Feb TO 28-Feb</td>
                                 <td>120 AED</td>
                                 <td>160 AED</td>
                              </tr>
                              <tr class="odd">
                                 <td class="sorting_1">Lorem Event</td>
                                 <td>23-Feb-2024</td>
                                 <td>Lorem Hotel</td>
                                 <td>26-Feb TO 28-Feb</td>
                                 <td>120 AED</td>
                                 <td>160 AED</td>
                              </tr>
                              <tr class="odd">
                                 <td class="sorting_1">Lorem Event</td>
                                 <td>23-Feb-2024</td>
                                 <td>Lorem Hotel</td>
                                 <td>26-Feb TO 28-Feb</td>
                                 <td>120 AED</td>
                                 <td>160 AED</td>
                              </tr>
                              <tr class="odd">
                                 <td class="sorting_1">Lorem Event</td>
                                 <td>23-Feb-2024</td>
                                 <td>Lorem Hotel</td>
                                 <td>26-Feb TO 28-Feb</td>
                                 <td>120 AED</td>
                                 <td>160 AED</td>
                              </tr>
                             
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/ Revenue Report -->
      <!--/ Transactions -->
   </div>
</div>
<!-- / Content -->
@endsection
