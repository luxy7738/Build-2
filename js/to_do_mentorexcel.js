const inputBox = document.getElementById("input-box");
const listContainer = document.getElementById("list-container");
const progressBar = document.getElementById("progress-bar");

function addTask() {
    if (inputBox.value === "") {
        alert("You must write something!");
    } else {
        let li = document.createElement("li");
        li.innerHTML = inputBox.value;
        listContainer.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML = "\u00d7";
        li.appendChild(span);

        updateProgressBar(); // Call this function to update the progress bar
    }
    inputBox.value = "";
    saveData();
}

listContainer.addEventListener("click", function (e) {
    if (e.target.tagName === "LI") {
        e.target.classList.toggle("checked");
        updateProgressBar(); // Call this function to update the progress bar
        saveData();
    } else if (e.target.tagName === "SPAN") {
        e.target.parentElement.remove();
        updateProgressBar(); // Call this function to update the progress bar
        saveData();
    }
}, false);

// Update the progress bar and percentage text
function updateProgressBar() {
    const totalTasks = listContainer.querySelectorAll("li").length;
    const checkedTasks = listContainer.querySelectorAll("li.checked").length;

    const progress = (checkedTasks / totalTasks) * 100;
    progressBar.style.width = progress + "%";
    
    // Update the percentage text
    progressBar.innerHTML = progress.toFixed(0) + "%";
}


function saveData() {
    localStorage.setItem("data", listContainer.innerHTML);
}

function showTask() {
    const savedData = localStorage.getItem("data");

    if (savedData) {
        listContainer.innerHTML = savedData;
        updateProgressBar(); // Call this function to update the progress bar
    } else {
        listContainer.innerHTML = `
        <li>1. Excel orientation session</li>
        <li>1. An overview of Excel</li>
        <li>1. Excel learning goals </li>
        <li>2. Basic Excel functions SUM, AVERAGE, and COUNT</li>
        <li>2. Data entry and best practices</li>
        <li>2. Review</li>
        <li>3. Data analysis techniques</li>
        <li>3. VLOOKUP, HLOOKUP, and IF statements</li>
        <li>3. Case studies and practical examples</li>
        <li>4. INDEX, MATCH, and PivotTables</li>
        <li>4. Data validation and conditional formatting</li>
        <li>4. Real work scenarios</li>
        <li>5. Excel automation Macros and VBA</li>
        <li>5. Templates and automation</li>
        <li>5. Keyboard shortcuts</li>
        <li>6. Excel mastery through complex modeling</li>
        <li>6. Excel concepts mentorship</li>
        <li>6. Wrap-up</li>
        `;
        updateProgressBar(); // Call this function to update the progress bar
        saveData();
    }
}

showTask(); // Call showTask to load saved data and initialize the progress bar