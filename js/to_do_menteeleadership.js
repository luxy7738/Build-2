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
        <li>1. Self-introduction</li>
        <li>1. Career goals and expectations</li>
        <li>2. One relevant online course</li>
        <li>2. Report course progress</li>
        <li>2. Seek mentor's guidance</li>
        <li>3. Project contribution</li>
        <li>3. Team Collaboration</li>
        <li>3. Weekly update meetings</li>
        <li>4. Two leadership seminars</li>
        <li>4. Three leaders network</li>
        <li>4. Key insights from leadership meetings</li>
        <li>5. Shadow two other departments</li>
        <li>5. Cross-functional projects</li>
        <li>5. Presentation</li>
        <li>6. Reflection</li>
        <li>6. Career Plan discussion</li>
        <li>6. Celebration</li>
        `;
        updateProgressBar(); // Call this function to update the progress bar
        saveData();
    }
}

showTask(); // Call showTask to load saved data and initialize the progress bar