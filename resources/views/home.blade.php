@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading information" >Information</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table table-bordered">
                        <thead class="thead_background">
                            <tr class="tr_color">
                              <th scope="col">Photo</th>
                              <th scope="col">Name</th>
                              <th scope="col">Personal Id</th>
                              <th scope="col">E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <tr>
                                    <td><img class="profile" src="{{ asset('img/userimg/' . $result->photo) }}"></td>
                                    <td>{{ $result->name }}</td>
                                    <td>{{ $result->personal_id }}</td>
                                    <td>{{ $result->email }}</td>
                                </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
