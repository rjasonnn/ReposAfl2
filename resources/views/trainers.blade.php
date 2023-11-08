@extends('layouts.template')

@section('content')

<style>

.divgambar{
    min-width: 100px;
}

.divgambar img {
    object-fit: cover
}
</style>
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
                        <td>
                            <div class="divgambar">
                                <a href="trainerdetail/{{ $trainer->id }}">
                                    <img src="{{ $trainer->profile_picture }}" alt="Background Image" width="120" height="120">
                                </a></td>
                            </div>
                           
                        <td>{{ $trainer->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
