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
        <li>1. Excel's interface</li>
        <li>1. Identify areas</li>
        <li>1. Set learning objectives </li>
        <li>2. Practice basic functions</li>
        <li>2. Apply formatting</li>
        <li>2. Feedbacks</li>
        <li>3. Share reports and insights</li>
        <li>3. VLOOKUP, HLOOKUP, and IF statements practice</li>
        <li>3. Discuss the analysis</li>
        <li>4. Practice advanced functions</li>
        <li>4. Create PivotTables and apply data validation</li>
        <li>4. Share reports and insights </li>
        <li>5. Excel Macros to automate tasks</li>
        <li>5. Develop templates</li>
        <li>5. Implement keyboard shortcuts</li>
        <li>6. Tackle challenging Excel projects</li>
        <li>6. Share knowledge</li>
        <li>6. Final assessment</li>
        `;
        updateProgressBar(); // Call this function to update the progress bar
        saveData();
    }
}

showTask(); // Call showTask to load saved data and initialize the progress bar