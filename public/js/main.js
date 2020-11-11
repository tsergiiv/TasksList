const tasks = document.getElementById('tasks');

if (tasks) {
    tasks.addEventListener('click', (e) => {
        if (e.target.classList.contains('close-task')) {
            const id = e.target.getAttribute('data-id');

            fetch(`/task/close/${id}`).then(res => window.location.reload());
        }
    });
}
