

<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'en:') !!}
    {!! Form::text('value', null, ['class' => 'form-control']) !!}
</div>
 

<div class="form-group col-sm-6">
    {!! Form::label('value', 'ar:') !!}
	
		 	  <input type="text" name="value_ar" class="form-control" value="<?php if (isset($siteStings_ar )){     ?>  {{$siteStings_ar->value}} <?php } ?> ">

 </div>
 

 
 

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('siteStings.index') !!}" class="btn btn-default">Cancel</a>
</div>
