window.onload = (event) => {
    console.log("page is fully loaded");
    var input_created_at = document.getElementById('created_at');
    input_created_at.disabled = true;
    input_created_at.style.display = 'none';
    
    var input_id = document.getElementById('id');
    input_id.disabled = true;
    input_id.style.display = 'none';

    var input_updated_at = document.getElementById('updated_at');
    input_updated_at.disabled = true;
    input_updated_at.style.display = 'none';
    
    var input_user_alt = document.getElementById('user_alt');
    input_user_alt.disabled = true;
    input_user_alt.style.display = 'none';

    var label_created_at = document.getElementById('label_created_at');
    label_created_at.disabled = true;
    label_created_at.style.display = 'none';

    var label_id = document.getElementById('label_id');
    label_id.disabled = true;
    label_id.style.display = 'none';

    var label_updated_at = document.getElementById('label_updated_at');
    label_updated_at.disabled = true;
    label_updated_at.style.display = 'none';

    var label_user_alt = document.getElementById('label_user_alt');
    label_user_alt.disabled = true;
    label_user_alt.style.display = 'none';
}

const button = document.querySelector('#button_confirm')
button.addEventListener('click', function(event){
    var formData = new FormData($('#name_categories'))    
    /*$.ajax({
        type: "POST",
        url: route,
        data: formData,
        dataType: "json",
        contentType: "application/json",
        cache: false
    }).done(function(response){
        console.log('ihuu')
    });*/
})
