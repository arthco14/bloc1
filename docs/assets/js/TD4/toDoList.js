document.addEventListener('DOMContentLoaded', () => {
    const taskInput = document.getElementById('task-input');
    const taskList = document.getElementById('task-list');
    const addTaskButton = document.getElementById('add-task');
    const deleteCompletedButton = document.getElementById('delete-completed');
    const saveTasksButton = document.getElementById('save-tasks');
    const loadTasksButton = document.getElementById('load-tasks');
    const saveNameInput = document.getElementById('save-name');

    // Ajouter une nouvelle tâche
    addTaskButton.addEventListener('click', () => {
        const taskText = taskInput.value.trim();
        if (taskText !== "") {
            createTaskElement(taskText);
            taskInput.value = "";
        }
    });

    // Créer un élément de tâche
    function createTaskElement(taskText, completed = false) {
        const li = document.createElement('li');
        const taskLabel = document.createElement('span');
        taskLabel.textContent = taskText;
        taskLabel.contentEditable = true;
        if (completed) {
            li.classList.add('completed');
        }

        // Créer une case à cocher
        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.checked = completed;
        checkbox.addEventListener('change', () => {
            li.classList.toggle('completed');
        });

        // Ajouter un bouton de suppression
        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Supprimer';
        deleteButton.addEventListener('click', () => {
            taskList.removeChild(li);
        });

        li.appendChild(checkbox);
        li.appendChild(taskLabel);
        li.appendChild(deleteButton);
        taskList.appendChild(li);
    }

    // Supprimer les tâches terminées
    deleteCompletedButton.addEventListener('click', () => {
        const tasks = taskList.querySelectorAll('li.completed');
        tasks.forEach(task => {
            taskList.removeChild(task);
        });
    });

    // Sauvegarder les tâches
    saveTasksButton.addEventListener('click', () => {
        const tasks = [];
        taskList.querySelectorAll('li').forEach(li => {
            const task = {
                text: li.querySelector('span').textContent,
                completed: li.classList.contains('completed')
            };
            tasks.push(task);
        });
        const saveName = saveNameInput.value.trim();
        if (saveName) {
            localStorage.setItem(saveName, JSON.stringify(tasks));
            alert('Tâches sauvegardées sous "' + saveName + '"');
        }
    });

    // Recharger les tâches sauvegardées
    loadTasksButton.addEventListener('click', () => {
        const saveName = saveNameInput.value.trim();
        if (saveName) {
            const savedTasks = localStorage.getItem(saveName);
            if (savedTasks) {
                taskList.innerHTML = ''; // Effacer la liste actuelle
                const tasks = JSON.parse(savedTasks);
                tasks.forEach(task => createTaskElement(task.text, task.completed));
            } else {
                alert('Aucune liste de tâches trouvée sous ce nom.');
            }
        }
    });
});
