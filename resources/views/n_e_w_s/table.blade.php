<table class="table table-responsive" id="nEWS-table">
    <thead>
        <tr>
         <th>  Photo</th>
             <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($nEWS as $nEWS)
        <tr>
  			              <td>     <img src="{{ URL::to('/').'/images/'.$nEWS->single_photo}}"  width="50" height="50">  </td>

             <td>
                {!! Form::open(['route' => ['nEWS.destroy', $nEWS->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('nEWS.show', [$nEWS->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('nEWS.edit', [$nEWS->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>