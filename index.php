<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>php-todo-list</title>
    
</head>
<body>
<div id="app">
    <h1 class="text-center text-white py-4" >To Do List</h1>
    <div class="container d-flex justify-content-center align-items-center">
        <div>
        <ul class="list-group" >
            <li v-for="todo in todoList" class="list-group-item d-flex justify-content-between" :class="{'text-decoration-line-through' : todo.done}" @click="markTask()" >{{todo}}  <i class="fa-solid fa-trash" style="color: #e02410;"></i></li>
        </ul>

        

        <input v-model="todoItem" type="text" class="p-1 mt-2 rounded">
        <button class="btn btn-secondary mx-2" @click="addTodo" >Aggiungi</button>

        </div>
        

    </div>

</div>
    


<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="main.js"></script>
</body>
</html>