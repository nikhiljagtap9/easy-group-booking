@extends('layouts.main')

@section('content')
<style>
   .active_land{
   background: linear-gradient(270deg, #2e25a0 0%, #12a89d 100%) !important;
   color:#fff !important;
   }
</style>
<!-- / Navbar -->
<!-- Content wrapper -->
<div class="content-wrapper view_land">
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
                  View Client
               </h6>
               <div class="content-wrapper">
                  <!-- Content -->
                  <div class="a">
                     <div class="card" bis_skin_checked="1">
                        <div class="card-datatable table-responsive pt-0" bis_skin_checked="1">
                           <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer" bis_skin_checked="1">
                              <div class="card-header flex-column flex-md-row" bis_skin_checked="1">
                                 <div class="head-label text-center" bis_skin_checked="1">
                                    <h5 class="card-title mb-0 vi_lft">View Client</h5>
                                    <a class="ad_tntn"  href="{{ route('client.add') }}" >
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-hexagon">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z"></path>
                                          <path d="M6.201 18.744a4 4 0 0 1 3.799 -2.744h4a4 4 0 0 1 3.798 2.741"></path>
                                          <path d="M19.875 6.27c.7 .398 1.13 1.143 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z"></path>
                                       </svg>
                                       <span>Add New Client</span> 
                                    </a>
                                    <div class="clear"></div>
                                 </div>
                              </div>
                              <hr class="my-0">
                              <table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1274px;">
                                 <thead>
                                    <tr>
                                       <th class="sorting"  rowspan="1" colspan="1" >Full Name</th>
                                       <th class="sorting"  rowspan="1" colspan="1" >Email ID</th>
                                       <th class="sorting"  rowspan="1" colspan="1" ></th>
                                       <th class="sorting"  rowspan="1" colspan="1" >User Type</th>
                                       <th class="sorting"  rowspan="1" colspan="1" > </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr class="odd">
                                       <td>Thomas M. Rea</td>
                                       <td>thomas@info.com</td>
                                       <td>Standard</td>
                                       
                                       <td>
                                          <div class="d-inline-block" bis_skin_checked="1">
                                             <a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></a>
                                             <ul class="dropdown-menu dropdown-menu-end m-0">
                                                <li><a href="javascript:;" class="dropdown-item">View</a></li>
                                                <div class="dropdown-divider" bis_skin_checked="1"></div>
                                                <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></li>
                                             </ul>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="odd">
                                       <td>Thomas M. Rea</td>
                                       <td>thomas@info.com</td>
                                       <td>Standard</td>
                                       
                                       <td>
                                          <div class="d-inline-block" bis_skin_checked="1">
                                             <a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></a>
                                             <ul class="dropdown-menu dropdown-menu-end m-0">
                                                <li><a href="javascript:;" class="dropdown-item">View</a></li>
                                                <div class="dropdown-divider" bis_skin_checked="1"></div>
                                                <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></li>
                                             </ul>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="odd">
                                       <td>Thomas M. Rea</td>
                                       <td>thomas@info.com</td>
                                       <td>Standard</td>
                                       
                                       <td>
                                          <div class="d-inline-block" bis_skin_checked="1">
                                             <a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></a>
                                             <ul class="dropdown-menu dropdown-menu-end m-0">
                                                <li><a href="javascript:;" class="dropdown-item">View</a></li>
                                                <div class="dropdown-divider" bis_skin_checked="1"></div>
                                                <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></li>
                                             </ul>
                                          </div>
                                       </td>
                                    </tr>
                                    <!-- <span class="badge  bg-label-success">Professional</span> -->
                                 </tbody>
                              </table>
                              <div class="clear"> </div>
                              <br><br><br><br><br>
                              <div class="row" bis_skin_checked="1">
                                 <div class="col-sm-12 col-md-6" bis_skin_checked="1">
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite" bis_skin_checked="1">Showing 1 to 7 of 100 entries</div>
                                 </div>
                                 <div class="col-sm-12 col-md-6" bis_skin_checked="1">
                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate" bis_skin_checked="1">
                                       <ul class="pagination">
                                          <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link"><i class="ti ti-chevron-left ti-sm"></i></a></li>
                                          <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                                          <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li>
                                          <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="2" tabindex="0" class="page-link">3</a></li>
                                          <li class="paginate_button page-item disabled" id="DataTables_Table_0_ellipsis"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="ellipsis" tabindex="-1" class="page-link">…</a></li>
                                          <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="14" tabindex="0" class="page-link">8</a></li>
                                          <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0" class="page-link"><i class="ti ti-chevron-right ti-sm"></i></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div bis_skin_checked="1" style="width: 1%;"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- / Content --> 
@endsection



