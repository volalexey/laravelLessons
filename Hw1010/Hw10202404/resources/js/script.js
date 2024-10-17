document.addEventListener('DOMContentLoaded', () => {
    // Загрузка списка постов при загрузке страницы
    loadPosts();

});
// Загрузка списка постов
function createPost() {
    // URL API, до якого ви плануєте звертатися
    const apiUrl = 'http://localhost:8000/api/posts';

    const title = document.getElementById('titleId').value;
    const content = document.getElementById('contentId').value;

// Дані post у форматі URLSearchParams
    const productData = new URLSearchParams();
    productData.append('title', title);
    productData.append('content', content);

// Опції для POST-запиту
    const requestOptions = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: productData
    };

// Відправка POST-запиту
    fetch(apiUrl, requestOptions)
        .then(response => {
            if (response.ok) {
                console.log('Post успішно додано!');
            } else {
                console.error('Помилка під час додавання post. Статус код:', response.status);
            }
        })
        .catch(error => {
            console.error('Виникла помилка:', error);
        });
}

// Загрузка списка постов
function loadPosts() {
    const apiUrl = 'http://localhost:8000/api/posts';
    let xhr = new XMLHttpRequest();
    xhr.open('GET', apiUrl, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                let data = JSON.parse(xhr.responseText);
                let postList = document.getElementById('post-list');
                postList.innerHTML = '';

                data.forEach(function (post) {
                    let row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${post.id}</td>
                        <td>${post.title}</td>
                        <td>${post.content}</td>
                        <td>
                            <button class="btn btn-info" onclick="editPost(${post.id})">Редактировать</button>
                            <button class="btn btn-danger" onclick="deletePost(${post.id})">Удалить</button>
                        </td>
                    `;
                    postList.appendChild(row);
                });
            } else {
                console.log('Ошибка: ' + xhr.status);
            }
        }
    };

    xhr.send();
}

// Удаление поста
function deletePost(id) {
    let xhr = new XMLHttpRequest();
    xhr.open('DELETE', '/api/posts/' + id, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                loadPosts();
            } else {
                console.log('Ошибка: ' + xhr.status);
            }
        }
    };

    xhr.send();
}

// Редактирование поста
function editPost(id) {
    // Реализуйте логику редактирования поста здесь
}
