const asia = "./data/asia.json";
const india = "./data/india.json";
const conti = "./data/continets.json";

fetch(asia).then(response => {
    if (!response.ok) {
        throw new Error("HTTP error " + response.status);
    }
    
    return response.json();
}).then(data => {
    console.log(data);
}).catch(error => {
    console.error("Could not fetch JSON:", error);
});
