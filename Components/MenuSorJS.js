fetch('/Components/MenuSor.html')
    .then(function(res){return res.text();})
    .then((menu)=>{
        console.log(menu);
    document.getElementById('Navigation').innerHTML = menu;
})