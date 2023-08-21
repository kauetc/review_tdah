window.onload = (event) => {
    // Step 1: Get a reference to the form element
    var form = document.getElementById('form_categories');

    // Step 2: Select all the <div> elements within the form
    var divElements = form.querySelectorAll('div');
    // Step 3: Iterate through the selected elements
    for (var i = 0; i < divElements.length; i++) {
        var div = divElements[i];
        // Perform actions on each <div> element
        console.log(div.id);
        if(div.id !== 'div_nome_categoria'){
            div.disabled = true;
            div.style.display = 'none';
        }
    }
    // var input_created_at = document.getElementById('created_at');
    // input_created_at.disabled = true;
    // input_created_at.style.display = 'none';
    
    // var input_id = document.getElementById('id');
    // input_id.disabled = true;
    // input_id.style.display = 'none';

    // var input_updated_at = document.getElementById('updated_at');
    // input_updated_at.disabled = true;
    // input_updated_at.style.display = 'none';
    
    // var input_user_alt = document.getElementById('user_alt');
    // input_user_alt.disabled = true;
    // input_user_alt.style.display = 'none';

    // var label_created_at = document.getElementById('label_created_at');
    // label_created_at.disabled = true;
    // label_created_at.style.display = 'none';

    // var label_id = document.getElementById('label_id');
    // label_id.disabled = true;
    // label_id.style.display = 'none';

    // var label_updated_at = document.getElementById('label_updated_at');
    // label_updated_at.disabled = true;
    // label_updated_at.style.display = 'none';

    // var label_user_alt = document.getElementById('label_user_alt');
    // label_user_alt.disabled = true;
    // label_user_alt.style.display = 'none';
}

const button = document.querySelector('#button_confirm')
button.addEventListener('click', function(event){
    var formData = new FormData($('#form_categories')[0]);
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
        if(data.error === undefined){
            alert(data.success);
            window.location.replace(data.redirect);
        } else {
            alert(data.error);
        }
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.log('Error:', errorThrown);
    });
})
