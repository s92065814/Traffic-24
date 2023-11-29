<!DOCTYPE html>
<html lang="en">
<head>
    <title>Road Traffic Management system</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="full-page">
        <div  class="navbar">
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>                    
                    <li><a href="Map.php">Live Map</a></li>
                </ul>
            </nav>
        </div>
        <hr>
<br>
<br>

        <h3>My Planes are here</h3>
<div class="container">
    <div class="addTask">
        <input type="text" placeholder="Add a Task">
        <button>Add</button>
    </div>
    <ol class="notCompleted">
        <h3>Not Completed</h3>
       
    </ol>
    <ol class="Completed">
        <h3>Completed</h3>
        
    </ol>

</div>
<script>
    const input = document.querySelector('input');
    const btn = document.querySelector('.addTask > button');

    btn.addEventListener('click', addList);
    input.addEventListener('keyup',(e)=>{
        (e.keyCode === 13 ? addList(e) : null);
    })

    function addList(e){
        const notCompleted = document.querySelector('.notCompleted');
        const Completed = document.querySelector('.Completed');

        const newLi = document.createElement('li');
        const checkBtn = document.createElement('button');
        const delBtn = document.createElement('button');

        checkBtn.innerHTML = '<i class="bi bi-check-square"></i>';
        delBtn.innerHTML = '<i class="bi bi-trash"></i>';

        if(input.value !== ''){
            newLi.textContent = input.value;
            input.value = '';
            notCompleted.appendChild(newLi);
            newLi.appendChild(checkBtn);
            newLi.appendChild(delBtn);
        }

        checkBtn.addEventListener('click', function(){
            const parent = this.parentNode; 
            parent.remove();
            Completed.appendChild(parent);
            checkBtn.style.display = 'none';
        });

        delBtn.addEventListener('click', function(){
            const parent = this.parentNode; 
            parent.remove();
        });
    }
</script>

</body>
</html>