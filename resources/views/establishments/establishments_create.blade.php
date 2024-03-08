@extends('layouts.master')
@section('content')
        <h1>Estabelecimentos</h1>
        
        <div id="content">            
            <form method="POST" action="{{route('establishment_new')}}" enctype="multipart/formdata" id='form_establishments'>
                {{ csrf_field()}}
                @include('custom.fields_by_columns')
                <input type="button" id="button_confirm" class="button" value="Salvar">
            </form>
        </div>
@endsection
@section('javascript')
        <script>
            const button = document.querySelector('#button_confirm')
            button.addEventListener('click', function(event){
                var formData = new FormData($('#form_establishments')[0]); 
                var route = "{{route('establishment_new')}}";
                // Swal.fire(
                //     'Good job!',
                //     'You clicked the button!',
                //     'success'
                // )
                $.ajax({
                    type: "POST",
                    url: route,
                    data: formData,
                    dataType: "json",
                    processData: false, // Prevent jQuery from processing the data
                    contentType: false, // Let the browser set the proper content type
                    cache: false,
                }).done(function(data){
                    console.log(data);
                    if(data.success){
                        Swal.fire(
                            'Good job!',
                            'You clicked the button!',
                            'success'
                        )
                        window.location.replace(data.redirect);
                    } else {
                        alert(data.error);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    console.log('Error:', errorThrown);
                });
            });
        </script>
@endsection