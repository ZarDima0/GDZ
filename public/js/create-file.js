let directionList;
let instityteList;
let articleList;

function checkSelectInstitute(directionList) {
    let instityteListDom = document.querySelector('.instityte-List');
    instityteListDom.addEventListener('change',(e) => {
        let idInstitute = e.target.value;
        let arrResult = [];
        let error = [];
        for (let index = 0; index < directionList.length; index++) {
            const element = directionList[index];
            if(element['institute_id'] == idInstitute) {
                arrResult.push(element);
            }
        }
        renderSelectDirection(arrResult);
    })
}
function checkSelectDirection(array) {
    let directionListDom = document.querySelector('.direction-List');
    directionListDom.addEventListener('change',(e) => {
        let idDirection = e.target.value;
        let arrResult = [];
        for (let index = 0; index < array.length; index++) {
            const element = array[index];
            if(element['direction_id'] == idDirection) {
                arrResult.push(element);
            }if (element['direction_id'] == 0) {
                console.log('создать новый предмет');
            }
        }
        renderSelectArticke(arrResult)
    })
} 
function renderSelectArticke (arr) {
    let selectDom = document.querySelector('.articke-List');
    selectDom.style.display = 'block'
    selectDom.innerHTML = '<option>Выбери</option><option value = "0">Добавить новый предмет</option>';
    for (let index = 0; index < arr.length; index++) {
        let element = arr[index]
        selectDom.innerHTML += `
            <option class = 'instityte-item' value = "${element['id']}" >${element['article_name']}</option>
        `
    } 
}

function checkSelectArticke (arr) {
    let selectDom = document.querySelector('.articke-List');
    let inputNewArticle = document.querySelector('.new-article');
    selectDom.addEventListener('change',(e) => {
        let idArticle = e.target.value;
        let arrResult = [];
        for (let index = 0; index < arr.length; index++) {
            const element = arr[index];
            if (idArticle == 0) {
                arrResult.push(['Добавить новый файл']);
                let inputNewArticle = document.querySelector('.new-article');
                inputNewArticle.style.display = 'block'
                break;
            }else {
                inputNewArticle.style.display = 'none'
            }
        }
        console.log(arrResult);
    })
}

function renderSelectDirection(arr) {
    let selectDom = document.querySelector('.direction-List');
    selectDom.style.display = 'block'
    selectDom.innerHTML = '<option >Выбери</option>'
    for (let index = 0; index < arr.length; index++) {
        let element = arr[index]
        selectDom.innerHTML += `
            <option class = 'instityte-item' value = "${element['id']}" >${element['nameDirection']}</option>
        `
    }
}

function renderForm(instityteList) {
    let selectDom = document.querySelector('.instityte-List');
    selectDom.innerHTML = '<option >Выбери</option>'
    for (let index = 0; index < instityteList.length; index++) {
        let element = instityteList[index]
        selectDom.innerHTML += `
            <option class = 'instityte-item' value = "${element['id']}" >${element['nameInstitute']}</option>
        `
    }
}

async function fetchData() {
    let response = await fetch("upload-file/index");
    if (response.ok) {
        let json = await response.json();
        let directionList = json.directionList;
        let instityteList = json.instityteList;
        let articleList = json.Article;
        renderForm(instityteList);
        checkSelectInstitute(directionList)
        checkSelectDirection(articleList)
        checkSelectArticke(articleList);
    } else {
        alert("Ошибка HTTP: " + response.status);
    }
}
addEventListener("DOMContentLoaded", fetchData());
