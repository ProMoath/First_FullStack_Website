window.onscroll = function(){
    const navbar = document.getElementsByTagName("nav")[0];
    const links = navbar.getElementsByTagName("a");
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
        navbar.style.backgroundColor = "var(--textcolor)";
        for(let link of links)
            link.style.color = " var(--bagcolor)";
        navbar.className = "animate-top";
    }
    else{
        navbar.style.backgroundColor = " var(--secbgcolor)";
        for(let link of links)
            link.style.color = "var(--textcolor)";
        navbar.className = "";
    }
}

function maxImage(obj){
    const max_image = document.getElementById("max-image");
    const image = max_image.getElementsByTagName("img")[0];

    max_image.style.display = "block";
    image.src = obj.src;
    image.alt = obj.alt;
    image.className = "animate-image";
    max_image.getElementsByTagName("p")[0].innerHTML = obj.alt;
}
function showsidebar() {
    const sidebar = document.querySelector(".sidebar");
    sidebar.style.display = "flex";
}
function hidesidebar() {
    const sidebar = document.querySelector(".sidebar");
    sidebar.style.display = "none";
}

function closeImage(){
    document.getElementById("max-image").style.display = "none";
    document.querySelectorAll("#max-image img")[0].className = "";
}