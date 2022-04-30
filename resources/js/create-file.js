let directionList;
let instityteList;
function renderForm(instityteList) {
    let form = document.querySelector(".file-create");
    for (let index = 0; index < instityteList.length; index++) {
        form.innerHTML += `
        <select name="instityte" id="">
        <option value="{{$instityte->nameInstitute}}">${instityteList["nameInstitute"]}</option>
        </select>
        `;
    }
}

async function fetchData() {
    let response = await fetch("upload-file/index");
    if (response.ok) {
        let json = await response.json();
        console.log(json);
        let directionList = json.directionList;
        let instityteList = json.instityteList;
        renderForm(instityteList);
    } else {
        alert("Ошибка HTTP: " + response.status);
    }
}
addEventListener("DOMContentLoaded", fetchData());
