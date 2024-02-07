fetch('/Components/MenuSor.html')
    .then(function(response) {
        // Set the Content-Type header to text/javascript
        response.headers.set('Content-Type', 'text/javascript');

        // Convert the response to text
        return response.text();
    })
    .then(function(menu) {
        console.log(menu);
        document.getElementById('Navigation').innerHTML = menu;
    });
fetch('/Components/MenuSor.html')
    .then(function(res){return res.text();})
    .then((menu)=>{
        console.log(menu);
    document.getElementById('Navigation').innerHTML = menu;
})