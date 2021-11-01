var save = false;
function editProfile() {
  if (save == false) {
    var editable_elements = document.querySelectorAll(
      "[contenteditable=false]"
    );

    for (var i = 0; i < editable_elements.length; i++)
      editable_elements[i].setAttribute("contenteditable", true);
    save = true;
    var x = document.getElementById("imgs");
    x.style.display = "block";
    return;
  } else {
    var editable_elements = document.querySelectorAll("[contenteditable=true]");
    for (var i = 0; i < editable_elements.length; i++)
      editable_elements[i].setAttribute("contenteditable", false);
    save = false;
    var x = document.getElementById("imgs");
    x.style.display = "none";
    return;
  }
}

function changeImage(img) {}
