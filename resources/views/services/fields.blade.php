<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Your Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Your_address', 'Your Address:') !!}
    {!! Form::text('Your_address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>