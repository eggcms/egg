
@section('alert-row')
    <div class="alert alert-{{$aStatus}}">
        <strong>{{$aTopic}}</strong> {{$aDesc}}.
    </div>
@endsection
{{--
<div class="alert alert-success">
    <strong>{{$alert-topic}}</strong> Indicates a successful or positive action.
</div>
      
<div class="alert alert-info">
    <strong>Info!</strong> Indicates a neutral informative change or action.
</div>
       
<div class="alert alert-warning">
    <strong>Warning!</strong> Indicates a warning that might need attention.
</div>
      
<div class="alert alert-danger">
    <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div>
--}}