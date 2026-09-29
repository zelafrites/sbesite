document.getElementById("nameOutput").textContent = localStorage.getItem("name") + ".";

function inform(){
    let name = document.getElementById("nameInput").value;
    localStorage.setItem("name", name);

    document.getElementById("nameOutput").textContent = name + ".";
    document.getElementById("nameOutput").style.fontSize = "20px";
}

function destroy(){
    localStorage.clear();
    document.getElementById("nameOutput").textContent = "NO!!!! YOU DESTROYED THE COOKIE, YOU EVIL!!!";
    document.getElementById("nameOutput").style.fontSize = "100px";

}