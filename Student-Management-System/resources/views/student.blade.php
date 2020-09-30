<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    @include('navbar')
    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row">
            <section class='col'>
                @include('studentslist')
            </section>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
            <section class='col'>
                @include('studentslist')
            </section>
            <section class='col'>
            <form action='{{url("/store")}}' method='post'>
            @csrf
                <div class="form-group">
                    <label>CNE</label>
                    <input type="text" class="form-control" name="cne" placeholder='Enter CNE'>
                </div>
                <div class="form-group row">
                    <div class="col">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="firstName" placeholder="Enter a first name">
                    </div>
                    <div class="col">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Enter a last name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                    <label>Age</label>
                    <input type="text" class="form-control" name="age" placeholder="Enter an age">
                    </div>
                    <div class="col">
                    <label>Speciality</label>
                    <input type="text" class="form-control" name="speciality" placeholder="Enter a speciality">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </section>
            </div>
        </div>
    @elseif($layout == 'show')
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
            <section class='col'>
                @include('studentslist')
            </section>
            <section class='col'>
            <form action='{{url("/update/".$student->id)}}' method='post'>
            @csrf
                <div class="form-group">
                    <label>CNE</label>
                    <input value='{{ $student->cne }}' type="text" class="form-control" name="cne" placeholder='Enter CNE'>
                </div>
                <div class="form-group row">
                    <div class="col">
                    <label>First Name</label>
                    <input value='{{ $student->firstName }}' type="text" class="form-control" name="firstName" placeholder="Enter a first name">
                    </div>
                    <div class="col">
                    <label>Last Name</label>
                    <input value='{{ $student->lastName }}' type="text" class="form-control" name="lastName" placeholder="Enter a last name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                    <label>Age</label>
                    <input value='{{ $student->age }}' type="text" class="form-control" name="age" placeholder="Enter an age">
                    </div>
                    <div class="col">
                    <label>Speciality</label>
                    <input value='{{ $student->speciality }}' type="text" class="form-control" name="speciality" placeholder="Enter a speciality">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </section>
            </div>
        </div>
    @endif
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>