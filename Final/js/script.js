// XML HTTP Request
var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() { 
    if ( xhr.readyState === 4 && xhr.status === 200 ) {  
        callback();  
   } 
};  

var websitenameField = document.querySelector('#website');
var websitenameInfo = document.querySelector('.websitenametaken');

websitenameField.addEventListener('blur',makeAJAXCall);


function makeAJAXCall(){
       
    xhr.open('POST', 'websitenametaken.php', true);
    xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhr.send('websitename='+websitenameField.value);

}


function callback() {
        var response = JSON.parse(xhr.responseText);  

        websitenameInfo.innerHTML = response.taken;
       
}
