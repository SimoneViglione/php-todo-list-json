<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

    <link href="style.css" rel="stylesheet">
</head>
<body>
    <main>
        <div id="app">
            <div class="container">
                
                    <h1> Todo List </h1>

                    <ul class="todolist"> 
                        <li v-for="todo in toDoList"> {{ todo }} </li>
                    </ul>

                    <input type="text" v-model="task" placeholder="aggiungi Task">
                    <button type="submit" @click="addTask" > Aggiungi </button>
                    </input>
                
            </div>
        </div>
    </main>


    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="main.js"></script> 
</body>
</html>