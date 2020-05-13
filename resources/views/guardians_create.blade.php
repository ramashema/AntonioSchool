@extends('layout.base')

@section('title')
    Add Guardian/Parent
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-2">
            @include('layout.side_menu')
        </div>

        <div class="col-8">
            <h1>Add Guardian/Parent</h1>

            @if($errors->any)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        <p>{{ $error }}</p>
                    </div>
                @endforeach
            @endif

            <form action="{{ route('guardians.store')  }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input class="form-control" type="text" id="first_name" name="first_name" placeholder="e.g. Ramadhani" value="{{ old('first_name') }}">
                </div>

                <div class="form-group">
                    <label for="middle_name">Middle Name</label>
                    <input class="form-control" type="text" id="middle_name" name="middle name" placeholder="e.g. Juma" value="{{ old('middle_name') }}">
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input class="form-control" type="text" id="last_name" name="last_name" placeholder="e.g. Shemahonge" value="{{ old('last_name') }}">
                </div>

                <div class="form-group">
                    <label for="profession">Profession</label>
                    <select class="form-control" name="profession" id="profession">
                        <option selected disabled>--Choose Parent/Guardian Profession--</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Farmer">Farmer</option>
                        <option value="Business">Business</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Nurse">Nurse</option>
                        <option value="Politician">Politician</option>
                        <option value="Computer Programmer">Computer Programmer</option>
                        <option value="Systems Analysts">Systems Analysts</option>
                        <option value="Driver">Driver</option>
                        <option value="Office Attendant">Office Attendant</option>
                        <option value="Actor">Actor</option>
                        <option value="Musician">Musician</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="address">Postal Address</label>
                    <input class="form-control" type="text" name="address" id="address" placeholder="e.g P.O Box 4 Mzumbe, Morogoro" value="{{ old('address') }}">
                </div>

                <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    </div>
@endsection
