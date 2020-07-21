@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <br>

                    @can('edit articles')
                        can edit arts <br>
                    @endcan

                    @hasanyrole('writer|admin')
                        I am either a writer or an admin or both! <br>
                    @else
                        I am not writer or admin <br>
                    @endhasanyrole

                    @role(('super-admin'))
                        I am super-admin! <br>
                    @else
                        I am not super-admin <br>
                    @endrole
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
