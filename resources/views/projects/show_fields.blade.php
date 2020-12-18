<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $projects->name }}</p>
</div>

<!-- Date Receipt Field -->
<div class="form-group">
    {!! Form::label('date_receipt', 'Date Receipt:') !!}
    <p>{{ $projects->date_receipt }}</p>
</div>

<!-- Predication Number Field -->
<div class="form-group">
    {!! Form::label('predication_number', 'Predication Number:') !!}
    <p>{{ $projects->predication_number }}</p>
</div>

<!-- Predication Date Field -->
<div class="form-group">
    {!! Form::label('predication_date', 'Predication Date:') !!}
    <p>{{ $projects->predication_date }}</p>
</div>

<!-- Approximate Value Field -->
<div class="form-group">
    {!! Form::label('approximate_value', 'Approximate Value:') !!}
    <p>{{ $projects->approximate_value }}</p>
</div>

<!-- Finish Date Field -->
<div class="form-group">
    {!! Form::label('finish_date', 'Finish Date:') !!}
    <p>{{ $projects->finish_date }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $projects->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $projects->updated_at }}</p>
</div>

