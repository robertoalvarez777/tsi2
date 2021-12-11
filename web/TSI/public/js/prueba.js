document.querySelector("#crear-view").addEventListener("click", async() => {
    var obj = {};                                   
    db.insert({views: obj})
});

