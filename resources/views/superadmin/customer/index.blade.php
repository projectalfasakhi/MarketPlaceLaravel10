@extends('superadmin.layout.master')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Data Customer</h4>
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        {{-- <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            
                <table class="table table-bordered data-table">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th width="80px">Action</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->type }}</td>
                        <td>
                            <form action="{{ route('customers.destroy',$user->id) }}" method="POST">
                                {{-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a> --}}
                                {{-- <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a> --}}
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>                            
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                </div>
                {{-- {!! $users->links() !!} --}}
            </div>
        </div>
        <!--end card-->
    </div>
</div>
@endsection