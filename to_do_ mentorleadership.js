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
        <li>1. Introductory meeting</li>
        <li>1. Company overview</li>
        <li>1. Career path insights </li>
        <li>2. Assess mentees' skills</li>
        <li>2. Online Resources</li>
        <li>2. Review</li>
        <li>3. Assign mentee to a team</li>
        <li>3. Weekly update meetings</li>
        <li>3. Provide guidance</li>
        <li>4. Company leaders introduction</li>
        <li>4. Leadership seminars introduction</li>
        <li>4. Leadership meeting</li>
        <li>5. Shadowing cross-department opportunities</li>
        <li>5. Discuss cross-functional projects</li>
        <li>6. Support</li>
        <li>6. Feedback and resources</li>
        <li>6. New areas of interest introduction</li>
        `;
        updateProgressBar(); // Call this function to update the progress bar
        saveData();
    }
}

showTask(); // Call showTask to load saved data and initialize the progress bar