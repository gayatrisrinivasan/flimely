var gobtn = document.querySelector(".goButton");
var skipbtn = document.querySelector(".skipButton");
var content = document.getElementById("namespace");
gobtn.onclick =()=>{
    if(content.value == "")
    {
        
    }
    else{
        localStorage.setItem("username", content.value);
        window.location.href = "home.html";
        }
    }
    
skipbtn.onclick =()=>{
        
    localStorage.setItem("username", "Guest");
    window.location.href = "home.html";
}
 
