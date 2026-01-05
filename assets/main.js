const asia = "./data/asia.json";

async function loadAsia() {
    try {
        const response = await fetch(asia);

        if (!response.ok) {
            throw new Error(`HTTP Error: ${response.status}`);
        }

        const data = await response.json();

        const list = document.getElementById("list");
        list.textContent = JSON.stringify(data, null, 2);

        console.log(data);
    } catch (error) {
        console.error("Could not fetch JSON:", error);
    }
}

loadAsia();