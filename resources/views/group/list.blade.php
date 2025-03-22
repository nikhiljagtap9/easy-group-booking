@extends('layouts.main')

@section('content')
<style>
   .active_grp{
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
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users-group"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" /><path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M17 10h2a2 2 0 0 1 2 2v1" /><path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M3 13v-1a2 2 0 0 1 2 -2h2" /></svg>
                  View Group
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
                                    <h5 class="card-title mb-0 vi_lft">View Group</h5>
                                    <a class="ad_tntn"  href="{{route('group.add')}}" >
                                       <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users-group"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" /><path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M17 10h2a2 2 0 0 1 2 2v1" /><path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M3 13v-1a2 2 0 0 1 2 -2h2" /></svg>
                                       <span>Add New Group</span> 
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
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($groups as $group)
                                    <tr class="odd">
                                       <td>{{$group->group_name}}</td>
                                       <td>
                                          <form action="{{ route('group.delete', $group->id) }}" method="POST" style="display:inline;">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" onclick="return confirm('Delete this Group?')" class="delete_grp">Delete</button>
                                          </form>
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
@endsection



