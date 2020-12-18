<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Receipt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_receipt', 'Date Receipt:') !!}
    {!! Form::date('date_receipt', null, ['class' => 'form-control','id'=>'date_receipt']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        // $('#date_receipt').datetimepicker({
        //     format: 'YYYY-MM-DD HH:mm:ss',
        //     useCurrent: false
        // })
        $('#date_receipt').datepicker();
    </script>
@endpush

<!-- Predication Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('predication_number', 'Predication Number:') !!}
    {!! Form::text('predication_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Predication Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('predication_date', 'Predication Date:') !!}
    {!! Form::date('predication_date', null, ['class' => 'form-control','id'=>'predication_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        // $('#predication_date').datetimepicker({
        //     format: 'YYYY-MM-DD HH:mm:ss',
        //     useCurrent: false
        // })
        $('#predication_date').datepicker();
    </script>
@endpush

<!-- Approximate Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('approximate_value', 'Approximate Value:') !!}
    {!! Form::text('approximate_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Finish Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('finish_date', 'Finish Date:') !!}
    {!! Form::date('finish_date', null, ['class' => 'form-control','id'=>'finish_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        // $('#finish_date').datetimepicker({
        //     format: 'YYYY-MM-DD HH:mm:ss',
        //     useCurrent: false
        // })
        $('#finish_date').datepicker();
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('projects.index') }}" class="btn btn-default">Cancel</a>
</div>
