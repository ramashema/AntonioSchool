@extends('layout.base')

@section('title')
    Add student
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-2">
            @include('layout.side_menu')
        </div>

        <div class="col-8">
            <h1>Add student</h1>

            @if($errors->any)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        <p>{{ $error }}</p>
                    </div>
                @endforeach
            @endif

            <form action="{{ route('students.store')  }}" method="POST">
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
                    <label for="date_of_birth">Date of Birth</label>
                    <input class="form-control" type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                </div>

                <div class="form-group">
                    <label for="guardian">Guardian/Parent</label>
                    <select class="form-control" name="guardian" id="guardian">
                        <option disabled selected>--choose parent/guardian name--</option>
                        @forelse($guardians as $guardian)
                            <option value="{{ $guardian->id }}">{{ $guardian->first_name }} {{ $guardian->last_name }}</option>
                        @empty
                            <option value="" disabled>--no parent, add parent first --</option>
                        @endforelse
                    </select>
                </div>

                <div class="form-group">
                    <label for="darasa">Class</label>
                    <select class="form-control" name="darasa" id="darasa">
                        <option disabled selected>--choose class name--</option>
                        @forelse($madarasa as $darasa)
                            <option value="{{ $darasa->id }}">{{ $darasa->name }}</option>
                        @empty
                            <option value="" disabled>--no class added, add class first --</option>
                        @endforelse
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    </div>
@endsection
