@extends('layout.base')

@section('title')
    Home
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-2">

            {{-- This part will be replace by include statement --}}
            @include('layout.side_menu')
        </div>

        <div class="col-10">

            @include('layout.messages')

            <h2 class="text-muted">List of Students</h2>
            <table class="table table-bordered">
                @if(count($students)> 0)
                    <tr>
                        <th>Full Name</th>
                        <th>Class</th>
                        <th>Age</th>
                    </tr>
                @endif
                @forelse ($students as $student)
                    <tr>
                        <td>{{ $student->last_name }} {{ $student->first_name }} </td>
                        <td>{{ $student->darasa->name }}</td>
                        <td>{{ \Illuminate\Support\Carbon::parse($student->date_of_birth)->age }}</td>
                    </tr>
                @empty
                    -- no student registered--
                @endforelse
            </table>
        </div>
    </div>
@endsection
