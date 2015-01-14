
<table class="table table-hover table-bordered">
    <tr>
        <td colspan="5"> List of available users <a href="{{url('users/create')}}"> Create new user</a> </td>
    </tr>
    <tr>
        <td>Fistname</td>
        <td>Lastname</td>
        <td>Phone</td>
        <td>Profile</td>
        <td>Activities</td>
    </tr>
        @foreach($users as $u)

           <tr>
               <td>{{$u->firstname}}</td>
               <td>{{$u->Lastname}}</td>
               <td>{{$u->phone}}</td>
               <td></td>
               <td>

               </td>
           </tr>
        @endforeach


</table>

