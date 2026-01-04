fetch("./data/Asia_Countries_States.json").then(response => {
    if (!response.ok) {
        throw new Error("HTTP error " + response.status);
    }
    
    return response.json();
}).then(data => {
    console.log(data);
}).catch(error => {
    console.error("Could not fetch JSON:", error);
});
