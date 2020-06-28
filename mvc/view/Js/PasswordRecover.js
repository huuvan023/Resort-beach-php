const inputs = document.querySelectorAll(".input");
function addcl(){
    let parent = this.parentNode.parentNode;
    parent.classList.add("befocus");
}

function remcl(){
    let parent = this.parentNode.parentNode;
    if(this.value == ""){
        parent.classList.remove("befocus");
    }
}


inputs.forEach(input => {
    input.addEventListener("focus", addcl);
    input.addEventListener("blur", remcl);
});
var preloader = document.getElementById("loading");
function loadFunction(){
    preloader.style.display = 'none';
};