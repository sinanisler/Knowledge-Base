


// get the search input
let search_input = 'test'

// put the input and request search
fetch(bloginfo_url + '/wp-json/wp/v2/search?search=' + search_input)
.then(response => response.json())
.then(data => console.log(data));

// do something with returned data



// user device dark mod check
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    console.log('dark-mod-on');
}




