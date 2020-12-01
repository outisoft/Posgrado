@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <main class="py-4">
      <div class="container-fluid">
        <div class="card shadow mb-4">
          <div class="card-header py-3"><h2>List of Users</h2></div>
            <div class="card-body">  <br><br>
              @include('custom.message')
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role(s)</th>
                            <th colspan="3"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)

                            <tr>
                                <th scope="row">{{ $user->id}}</th>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email}}</td>
                                <td>
                                @isset( $user->roles[0]->name )
                                  {{ $user->roles[0]->name}}
                                @endisset

                                </td>
                                <td>
                                @can('view',[$user, ['user.show','userown.show'] ])
                                  <a class="btn btn-info" href="{{ route('user.show',$user->id)}}">Show</a>
                                @endcan
                                </td>
                                <td>
                                @can('view', [$user, ['user.edit','userown.edit'] ])
                                  <a class="btn btn-success" href="{{ route('user.edit',$user->id)}}">Edit</a>
                                @endcan
                                </td>
                                <td>
                                @can('haveaccess','user.destroy')
                                  <form action="{{ route('user.destroy',$user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                  </form>
                                @endcan
                                </td>
                              </tr>
                      @endforeach
                    </tbody>
                  </table>
                {{ $users->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
@endsection
