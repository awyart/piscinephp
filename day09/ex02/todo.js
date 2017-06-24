var ft_list;

window.onload = function()
{
    document.querySelector("#new").addEventListener("click", newTodo);
    ft_list = document.querySelector("#ft_list");
    if ((document.cookie))
    {
        var keyValuePairs = document.cookie.split(';');
        for(var i = 0; i < keyValuePairs.length; i++)
        {
            var value = keyValuePairs[i].substring(keyValuePairs[i].indexOf('=')+1);
            addTodo(value);
        }
    }
};

function setCookie(cname, cvalue, exdays)
{
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

window.onunload = function()
{
    var todo = ft_list.children();
    var i = 0;
    alert("salutatuons");
    while (i < todo.length)
    {
        setCookie("Task", todo[i], 1);
        alert(todo[i]);
        i++;
    }
};

function newTodo()
{
    var todo = prompt("TU as la merveilleuse possibilite de realiser tes reves, mais quel est ton prochain reve ?", '');
    if (todo !== '')
    {
        addTodo(todo);
    }
}

function addTodo(todo)
{
    var div = document.createElement("div");
    div.innerHTML = todo;
    div.addEventListener("click", deleteTodo);
    ft_list.insertBefore(div, ft_list.firstChild);
}

function deleteTodo()
{
    if (confirm("c fni ?"))
    {
        this.parentElement.removeChild(this);
    }
}