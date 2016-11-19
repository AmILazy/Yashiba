<!-- Company Name -->
<div class="form-group">
    {!! Form::label('company_label','Company Name',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('company',null,['class'=>'form-control','id'=>'company'])  !!}
    </div>
</div>

<div class="hr-line-dashed"></div>

<!-- First Name -->
<div class="form-group">
    {!! Form::label('fname_label','First Name',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('fname',null,['class'=>'form-control','id'=>'fname'])  !!}
    </div>
</div>

<div class="hr-line-dashed"></div>

<!-- Second Name -->
<div class="form-group">
    {!! Form::label('lname_label','Last Name',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('lname',null,['class'=>'form-control','id'=>'lname'])  !!}
    </div>
</div>

<div class="hr-line-dashed"></div>

<!-- Registered Number -->
<div class="form-group">
    {!! Form::label('reg_no_label','Registered Number',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('reg_no',null,['class'=>'form-control','id'=>'reg_no'])  !!}
    </div>
</div>

<div class="hr-line-dashed"></div>

<div class="form-group">
    {!! Form::label('reg_no_label','Registered Date',['class'=>'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('reg_no',null,['class'=>'form-control','id'=>'reg_no'])  !!}
    </div>
</div>


<div class="hr-line-dashed"></div>

<div class="form-group">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-white" type="reset">Cancel</button>
        <button class="btn btn-primary" type="submit">Save changes</button>
    </div>
</div>