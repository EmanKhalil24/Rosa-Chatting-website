const form = document.querySelector(".box-log form"),
continueBtn = document.querySelector(".button"),
errorText = document.querySelector(".log-req");

form.onsubmit = (e)=>{
    e.preventDefault();
}
continueBtn.onclick = ()=> {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/project_web/php/login.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "success"){
                    location.href = "/project_web/html/list.php";
                }else{
                    errorText.style.display = "block";
                errorText.textContent = data;
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
};
