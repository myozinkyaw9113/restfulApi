@extends('layouts.post')

@section('title')
    Simple Datatables
@endsection

@section('content')

    <div class="row">

        <div class="card">

            <div class="card-header d-flex justify-content-between">
            
                <h3>Simple DataTable</h3>

                <div>
                    <a href="{{ url('simpleDatatable') }}" class="">Simple DataTable</a>
                    <a href="{{ url('laravelDatatable') }}" class="me-3 ms-3">Laravel DataTable</a>
                    <a href="{{ url('yajraAjaxDatatable') }}">Yajra AjaxDatatable</a>
                </div>

            </div>

            <div class="card-body">
            
                <table class="table">

                    <thead>

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Addrss</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach($students as $s)

                            <tr>
                                <th scope="row">{{ $s->id }}</th>
                                <td>{{ $s->name }}</td>
                                <td>{{ $s->age }}</td>
                                <td>{{ $s->email }}</td>
                                <td>{{ $s->phone }}</td>
                                <td>{{ $s->email }}</td>
                            </tr>

                        @endforeach

                    </tbody>
                    
                </table>

            </div>

        </div>

    </div>

@endsection