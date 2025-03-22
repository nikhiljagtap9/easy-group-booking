@extends('layouts.main')

@section('content')
<style>
   .active_hotel{
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
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-skyscraper"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M5 21v-14l8 -4v18" /><path d="M19 21v-10l-6 -4" /><path d="M9 9l0 .01" /><path d="M9 12l0 .01" /><path d="M9 15l0 .01" /><path d="M9 18l0 .01" /></svg>
                  View Hotel
               </h6>
               @if(session('success'))
                  <div class="alert alert-success">
                     {{ session('success') }}
                  </div>
               @endif
               <div class="content-wrapper">
                  <!-- Content -->
                  <div class="a">
                     <div class="card" bis_skin_checked="1">
                        <div class="card-datatable table-responsive pt-0" bis_skin_checked="1">
                           <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer" bis_skin_checked="1">
                              <div class="card-header flex-column flex-md-row" bis_skin_checked="1">
                                 <div class="head-label text-center" bis_skin_checked="1">
                                    <h5 class="card-title mb-0 vi_lft">View Hotel</h5>
                                    <a class="ad_tntn"  href="{{ route('hotel.add')}}" >
                                       <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-skyscraper"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M5 21v-14l8 -4v18" /><path d="M19 21v-10l-6 -4" /><path d="M9 9l0 .01" /><path d="M9 12l0 .01" /><path d="M9 15l0 .01" /><path d="M9 18l0 .01" /></svg>
                                       <span>Add New Hotel</span> 
                                    </a> 
                                    <div class="clear"></div>
                                 </div>
                              </div>
                              <hr class="my-0">
                              <table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1274px;">
                                 <thead>
                                    <tr>
                                       <th class="sorting"  rowspan="1" colspan="1" >Full Name</th> 
                                       <th class="sorting"  rowspan="1" colspan="1" >Delete</th>
                                       <th class="sorting"  rowspan="1" colspan="1" ></th>
                                        <th class="sorting"  rowspan="1" colspan="1" >Edit</th>  
                                    </tr>
                                 </thead>
                                 <tbody>
                                 @foreach($hotels as $hotel)
                                    <tr class="odd">
                                       <td>{{ $hotel->hotel_name }}</td>
                                       <td>
                                          <form action="{{ route('hotel.delete', $hotel->id) }}" method="POST" style="display:inline;">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" onclick="return confirm('Delete this hotel?')" class="delete_grp"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg></button>
                                          </form>
                                       </td>
                                       <td>
                                          <a href="{{route('hotel.edit',$hotel->id)}}" class="delete_grp delete_grp_2" >
                                             <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                          </a>
                                       </td> 
                                    </tr>
                                    @endforeach
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



