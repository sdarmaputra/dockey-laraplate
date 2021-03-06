@include('layouts.utils.errorMessages')

<div class="form-group row">
    {{ Form::label('name', 'Permission Name', ['class' => 'col-sm-4 col-form-label form-label--required']) }}
    <div class="col-sm-8">
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group row">
    {{ Form::label('display_name', 'Display Name', ['class' => 'col-sm-4 col-form-label']) }}
    <div class="col-sm-8">
        {{ Form::text('display_name', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group row">
    {{ Form::label('description', 'Description', ['class' => 'col-sm-4 col-form-label']) }}
    <div class="col-sm-8">
        {{ Form::text('description', null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="form-group row">
    @if(!$roles->isEmpty())
        <div class="col-sm-4">
            Available Role(s)
            <small class="form-text text-muted">Check role(s) that will be assigned permission.</small>
        </div>
        <div class="col-sm-8">
            @foreach ($roles as $role)
                <div class="form-check">
                    <label for="{{ $role->name }}" class="form-check-label">
                        {{ Form::checkbox('roles[]', $role->id, null, ['class' => 'form-check-input']) }}
                        {{ ucfirst($role->name) }}
                    </label>
                </div>
            @endforeach
        </div>
    @endif
</div>