

// get the user search input show result from global var

const search_input = document.querySelector('.search_input');
search_input.addEventListener('keydown', logKey);
function logKey(e) {
  console.log(e.code)
}



input_text.addEventListener("keydown", function(event) {
    
    // search on wp rest
    fetch(bloginfo_url + '/wp-json/wp/v2/search?search=' + search_input)
    .then(response => response.json())
    .then(
        data => {
                data.forEach( (item) => {
                    console.log(item.title)
                    // we will render html 
                    // the title and slug url  ul > li under search input


                }
            )
        }
    );

}, true);








// user device dark mod check
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    // console.log('dark-mod-on');
}











  







