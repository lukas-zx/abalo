export function displayArticlesAsTableRows(searchvalue = "", limit = 0) {
    let xhr = new XMLHttpRequest();
    let url = '/api/article/?search=' + searchvalue + '&limit=' + limit;
    xhr.open('GET', url);
    xhr.setRequestHeader('Accept', 'application/json');
    xhr.send();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            //xhr.response.forEach(function(item))
            for (const item of xhr.response) {
                console.log(item);
            }
        }
    }
}
