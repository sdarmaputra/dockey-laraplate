@extends('layouts.dashboard')

@section('title', '| Edit Permission')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <h4 class="c-grey-700 mT-10 mB-30">
                    <i class="fa fa-pencil-square-o icon-left"></i>Edit Permission
                    <div class="pull-right peers gap-10">
                        <div class="peer">
                            <a href="{{ route('permissions.create') }}" class="btn btn-outline-primary">
                                <i class="fa fa-plus icon-left"></i>New Permission
                            </a>
                        </div>
                        <div class="peer">
                            <a href="{{ route('permissions.index') }}" class="btn btn-outline-primary peer">
                                <i class="fa fa-list icon-left"></i>List of Permissions
                            </a>
                        </div>
                    </div>
                </h4>
                <div class="bgc-white p-20 bd">
                    <div class="mT-30">
                        {{ Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method' => 'PUT']) }}
                            @include('dashboard.permissions.form')
                            <div class="row gap-50">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-check icon-left"></i>
                                        Save Changes
                                    </button>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection