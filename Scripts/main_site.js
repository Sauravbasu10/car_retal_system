function verify_pin(element){
    let string_data = element.value;
    let s_length = string_data.length;
    
    if (s_length == 0 )
        element.value='';
    else {
        
            last_char = string_data[s_length-1];

        if (!((last_char >='0') && (last_char <='9'))|| (last_char.charCodeAt(0) == 8)){
            if (s_length == 1){
                element.value='';
            }
            else {
            element.value =  string_data.substring(0,s_length-1);
            }
            element.style.border = '2px solid red';
        }
        else {
            element.style.border= "2px solid black";

        }
    }
}

function match_password(elem_id,elem2,sb_id){
    elem1  =  document.getElementById(elem_id);
    s_btn =     document.getElementById(sb_id);
    pw_length = elem1.value.length;
    if (elem2.value.length == pw_length){
        if (((elem2.value).localeCompare(elem1.value)) != 0) {
            elem2.style.border = '2px solid red';
        }
        else {
            elem2.style.border = '2px solid black';
            console.log('match');
            s_btn.style.display='inline';
        }
    }
}