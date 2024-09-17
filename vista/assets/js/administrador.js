
document.addEventListener('DOMContentLoaded', function() {
    const viewUsersBtn = document.getElementById('viewUsers');
    const userList = document.getElementById('userList');

    viewUsersBtn.addEventListener('click', function(event) {
        event.preventDefault();
        userList.classList.toggle('hidden');
    });
});
