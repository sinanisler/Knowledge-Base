
// user device dark mod check
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    // console.log('dark-mod-on');
}



// get the user search input
let search_input = 'test'

window.addEventListener("keydown", function(event) {
    console.log('stepkey')

  }, true);






// user input and request search on wp rest
fetch(bloginfo_url + '/wp-json/wp/v2/search?search=' + search_input)
.then(response => response.json())
.then(
    data => {
            data.forEach( (item) => {
                console.log(item.title)
            }
        )
    }
);


