@extends("layouts.app")

@section("contents")
   <div class="container mt-5 mb-5" dir="rtl">
       <div class="row">
           <div class="col-12">
               <div class="card">
                   <div class="card-header">
                       <div class="d-flex justify-content-between">
                           <div>
                               <h4>المستخدمين</h4>
                           </div>
                           <div>
                               <a href="{{route("users.export")}}" class="btn btn-success btn-sm">
                                   export PDF
                               </a>
                           </div>
                       </div>
                   </div>
                   <div class="card-body">
                       @include("list")
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
