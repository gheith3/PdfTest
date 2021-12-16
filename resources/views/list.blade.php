<table class="table table-bordered" dir="rtl">
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
