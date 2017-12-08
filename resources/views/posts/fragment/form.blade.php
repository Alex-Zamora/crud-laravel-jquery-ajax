<div class="form-group">
	{!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Enter the name' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('description', 'Description:') !!}
	{!! Form::textarea('description', null, ['id' => 'description', 'class' => 'form-control', 'placeholder' => 'Enter the category' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('category', 'Category:') !!}
	{!! Form::text('category', null, ['id' => 'category', 'class' => 'form-control', 'placeholder' => 'Enter the category' ]) !!}
</div>

