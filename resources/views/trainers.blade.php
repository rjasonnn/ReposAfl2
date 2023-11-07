@extends('layouts.template')

@section('content')
    <div class="mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Profile Picture</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainers as $key => $trainer)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td><a href="trainerdetail/{{ $trainer->id }}">
                                <img src="{{ $trainer->profile_picture }}" alt="Background Image" width="100" height="100">
                            </a></td>
                        <td>{{ $trainer->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
