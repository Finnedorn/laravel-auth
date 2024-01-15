import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);


const previewImage = document.getElementById("preview");
previewImage.addEventListener("change", (event)=>{

    var Reader = new FileReader();

    Reader.readAsDataURL(previewImage.files[0]);
    // una volta che hai letto il file
    Reader.onload = function(ReadEvent) {

        document.getElementById("uploaded").src= ReadEvent.target.result;
    };
});
