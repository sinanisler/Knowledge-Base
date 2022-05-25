



// user device dark mod check
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    console.log('dark-mod-on');
}


// get the user search input
let search_input = 'test'

// put the input and request search
fetch(bloginfo_url + '/wp-json/wp/v2/search?search=' + search_input)
.then(response => response.json())
.then(data => console.log(data));







/*



fetch(bloginfo_url + '/wp-json/wp/v2/search?search=' + search_input)
      .then(res => res.json())
      .then(
        (result) => {
          this.setState({
            isLoaded: true,
            items: result.items
          });
        },
        (error) => {
          this.setState({
            isLoaded: true,
            error
          });
    }
)


render() {
    const { error, isLoaded, items } = this.state;
    if (error) {
      return <div>Error: {error.message}</div>;
    } else if (!isLoaded) {
      return <div>Loading...</div>;
    } else {
      return (
        <ul>
          {items.map(item => (
            <li key={item.id}>
              {item.name} {item.price}
            </li>
          ))}
        </ul>
      );


*/


