@extends('components.app')

@section('content')
<div class="jumbotron text-center">
    <table class="table-nilai">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th>Taruna A</th>
                <th>90</th>
            </tr>
            <tr>
                <th scope="row">2</th>
                <th>Taruna B</th>
                <th>86</th>
            </tr>
        </tbody>
    </table>
</div>
@endsection