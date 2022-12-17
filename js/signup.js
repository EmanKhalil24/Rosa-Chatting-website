const form = document.querySelector(".box-regi form"),
continueBtn = document.querySelector(".button"),
errorText = document.querySelector(".regi-req");

form.onsubmit = (e)=>{
    e.preventDefault();
}
continueBtn.onclick = ()=> {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/project_web/php/signup.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "success"){
                    location.href = "/project_web/html/list.php";
                }else{
                    errorText.textContent = data;
                    errorText.style = "display: block";
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
};
