<div class="form-group">
    {!! Form::label('code_label','Code',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
    {!! Form::text('code',null,['class'=>'form-control'])  !!}
    </div>
</div>

<div class="hr-line-dashed"></div>

<div class="form-group">
    {!! Form::label('name_label','Name',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name',null,['class'=>'form-control'])  !!}
    </div>
</div>

<div class="hr-line-dashed"></div>

<div class="form-group">
    {!! Form::label('cost_label','Price',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::number('price',null,['class'=>'form-control'])  !!}
    </div>
</div>

<div class="hr-line-dashed"></div>

<div class="form-group">
    {!! Form::label('date_label','Date',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::date('date',\Carbon\Carbon::now())  !!}
    </div>
</div>

<div class="hr-line-dashed"></div>

<div class="form-group">
    {!! Form::label('description_label','Description',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description',null,['class'=>'form-control'])  !!}
    </div>
</div>

<div class="hr-line-dashed"></div>

<div class="form-group">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-white" type="reset">Cancel</button>
        <button class="btn btn-primary" type="submit">Save changes</button>
    </div>
</div>