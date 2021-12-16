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
                       <table class="table table-bordered" dir="rtl" style="font-size: 18px; padding: 2px;">
                           <tr>
                               <th></th>
                               <th>الاسم</th>
                               <th>العنوان</th>
                               <th>الايميل</th>
                               <th>الهاتف</th>
                           </tr>
                           @php($i = 1)
                           @foreach($users as $user)
                               <tr>
                                   <td>{{$i++}}</td>
                                   <td>{{$user["name"]}}</td>
                                   <td>{{$user["email"]}}</td>
                                   <td>{{$user["address"]}}</td>
                                   <td>{{$user["phone"]}}</td>
                               </tr>
                           @endforeach
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
