@extends('layouts.main')

@section('content')
<style>
   .active_user {
    background: linear-gradient(270deg, #2e25a0 0%, #12a89d 100%) !important;
   color: #fff !important;
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
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-ticket"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 5l0 2" /><path d="M15 11l0 2" /><path d="M15 17l0 2" /><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" /></svg>
                  View Event
               </h6>
               @if(session('success'))
                  <div class="alert alert-success">
                     {{ session('success') }}
                  </div>
               @endif
               <div class="clear"></div>
               <div class="content-wrapper">
                  <!-- Content -->
                  <div class="a">
                     <div class="card" bis_skin_checked="1">
                        <div class="card-datatable table-responsive pt-0" bis_skin_checked="1">
                           <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer" bis_skin_checked="1">
                              <div class="card-header flex-column flex-md-row" bis_skin_checked="1">
                                 <div class="head-label text-center" bis_skin_checked="1">
                                    <h5 class="card-title mb-0 vi_lft">View Event</h5>
                                    <a class="ad_tntn" href="{{route('event.add')}}" >
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-ticket"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 5l0 2" /><path d="M15 11l0 2" /><path d="M15 17l0 2" /><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" /></svg>
                                       <span>Add New Event</span> 
                                    </a>
                                 
                                    <div class="clear"></div>
                                 </div>
                              </div>
                              <hr class="my-0">
                              <table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1274px;">
                                 <thead>
                                    <tr>
                                       <th class="sorting"  rowspan="1" colspan="1" >Event Name</th>
                                       <th class="sorting"  rowspan="1" colspan="1" >Event Date</th>
                                       <th class="sorting"  rowspan="1" colspan="1" ></th>
                                       <th class="sorting"  rowspan="1" colspan="1" >Hotel</th>
                                       <th class="sorting"  rowspan="1" colspan="1" >Dates</th>
                                       <th class="sorting"  rowspan="1" colspan="1" >Room Rate</th>
                                       <th class="sorting"  rowspan="1" colspan="1" >Extra Guest Rate</th>
                                       <th class="sorting"  rowspan="1" colspan="1" ></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($events as $event)
                                    <tr class="odd">
                                       <td>{{$event->event_name}}</td>
                                       <td>{{ $event->formatDate($event->start_date) }}</td>
                                       <td>{{$event->hotel->hotel_name ?? '-'}}</td> 
                                       <td>{{ $event->formatDate($event->check_in_date,'d-M') }} TO {{ $event->formatDate($event->check_out_date) }}</td>
                                       <td>{{ $event->room_rate ? $event->room_rate . ' AED' : '-' }}</td>
                                       <td>{{$event->extra_guest_rate ? $event->extra_guest_rate . ' AED' : '-'}} </td>
                                       <td>
                                          <div class="d-inline-block" bis_skin_checked="1">
                                             <a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></a>
                                             <ul class="dropdown-menu dropdown-menu-end m-0">
                                                <li><a href="{{ route('event.edit', $event->id) }}" class="dropdown-item">View</a></li>
                                                <div class="dropdown-divider" bis_skin_checked="1"></div>
                                                <li><a href="javascript:;" class="dropdown-item">Copy Invitation Link</a></li>
                                                <div class="dropdown-divider" bis_skin_checked="1"></div>
                                                <li>
                                                   <form action="{{ route('event.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button type="submit" class="dropdown-item text-danger">Delete</button>
                                                   </form>
                                                </li>
                                             </ul>
                                          </div>
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



