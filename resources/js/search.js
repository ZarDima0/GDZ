console.log(app);


function showList(search_text) {
    let list = document.querySelectorAll('.institute-block');
    list.forEach(element => {
        element.classList.toggle('hide');
    });
    app.filter((item) => {
        return (
            item.article_name.toLowerCase().includes(search_text)
        )
    }).forEach((e)=> {
        list = document.querySelector('section');
        list.innerHTML += `
        <div class= 'institute-block'>
            <div class= 'institute-block__title'>
                <img src="/img/needle.png" width= '25' height = '25' alt="">
                <a href="{{route('file.index',['instituteSlug' => $instituteSlug,'directionSlug'=> $directionSlug,'articleSlug' => $articleItem->slug])}}">${e.article_name}}</a>
            </div>
        </div>
        `
    })
}
let input = document.getElementById("searche-artice-input")


input.addEventListener('input',(event) => {
    let search_text = event.target.value.toLowerCase();
    showList(search_text)
})

