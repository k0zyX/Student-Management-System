<div class="col">
    <table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">CNE</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Age</th>
        <th scope="col">Speciality</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
        <td>{{$student->cne}}</td>
        <td>{{$student->firstName}}</td>
        <td>{{$student->lastName}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->speciality}}</td>
        <td>
            <a href="{{url('/edit/'.$student->id)}}" class='btn btn-sm btn-warning'>EDIT</a>
        </td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>