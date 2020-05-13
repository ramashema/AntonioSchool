@extends('layout.base')

@section('title')
    List of Guardians/Parents
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
                @if(count($guardians)> 0)
                    <tr>
                        <th>Full Name</th>
                        <th>Students</th>
                        <th>Address</th>
                    </tr>
                @endif

                @forelse ($guardians as $guardian)
                    <tr>
                        <td>{{ $guardian->first_name }}</td>
                        <td>
                            <ul>
                                @foreach ($guardian->students as $student)
                                    <li>{{ $student->first_name }} {{ $student->last_name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ $guardian->address }}</td>
                    </tr>
                @empty
                    <p class="text-muted text-center"> -- no parent available -- </p>
                @endforelse
            </table>
        </div>
    </div>
@endsection
