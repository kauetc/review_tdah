@foreach($columnNames as $key => $columnName)
    <label id="label_{{$columnName}}" for="{{$columnName}}">{{ucwords(str_replace('_', ' ', $columnName))}}</label>
    <input type="text" name="{{$columnName}}" id="{{$columnName}}" placeholder="{{$columnName}}">
@endforeach