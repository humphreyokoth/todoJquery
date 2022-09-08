<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <form action="index.php"   method="post" class="addTask"  id="addForm" name="todoList" >
            <div class="row">
                <div class="col-1">
                    <input type="checkbox" name="checkbox" id="todo-checkbox" checked /><label class="label-1">
                        <h1>My Todo-s</h1>
                    </label>
                </div>

                <div class="custom-add">
                    <input type="text" class="custom-add-input" id="input-add" name ="item" placeholder="Add new.." />
                    <i class="fas fa-calendar-alt"></i>
                    <button type="submit" class="submit" id="submit" value="submit">Add</button>
                </div>
            </div>
        </form>
            <hr />

            <div class="counter">
                Filter
                <input type="number" name="filter" id="filter" placeholder="All" />
                Sort
                <input type="number" name="sort" id="sort" placeholder="Added date" /><i
                    class="fas fa-sort-amount-down-alt sort-icon" id="sort-icon"></i>
            </div>
           
            <div class="container-list">
                <div class="list" id="list">
                    <ul class="list-li" id="task">
                        <li>
                            <input type="checkbox" name="checkbox" id="list-1"  />
                            <label class="label-2"> Buy groceries for next week</label>
                            <i class="fa-solid fa-trash-can deleteIcon"></i>

                            <i class="fa-solid fa-pencil editIcon "></i>
                           
                        </li>
                        <li>
                            <input type="checkbox" name="checkbox" id="insurance-list" />
                            <label class="label-3">Renew car insurance</label>
                             <!-- <i class="fa-regular fa-hourglass-half icon">
                            </i><input class="date input-icons" type="date" name="date" /> -->
                            <label class="label-date"></label><i class="fa-solid fa-trash-can deleteIcon"></i>
                             <i class="fa-solid fa-pencil editIcon"></i>
                          
                        </li>
                       
                        <li>
                            <input type="checkbox" name="checkbox" id="input-checkbox" /><label class="label-4">Sign up
                                for online course</label>  <i class="fa-solid fa-trash-can deleteIcon"></i> 
                                <i class="fa-solid fa-pencil editIcon"></i>
                        </li>
                    </ul>
                </div>
                
             
            </div>
       
    </div>
    
</body>
</body>
</html>