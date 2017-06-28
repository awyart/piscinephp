var ft_list;

$(document).ready(function()
{
    ft_list = $('#ft_list');
    $('#new').click(newTodo);
    if ((document.cookie))
    {
        var keyValuePairs = document.cookie.split(';');
        for(var i = 0; i < keyValuePairs.length; i++)
        {
            var value = keyValuePairs[i].substring(keyValuePairs[i].indexOf('=')+1);
            addTodo(value);
        }
    }
});

function setCookie(cname, cvalue, exdays)
{
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

$(window).unload(function(){
    var todo = ft_list.children();
    var i = 0;
    alert("salutatuons");
    while (i < todo.length)
    {
        setCookie("Task", todo[i], 1);
        i++;
    }
})

function newTodo()
{
    var todo = prompt("Tu as la merveilleuse possibilite de realiser tes reves, mais quel est ton prochain reve ?", '');
    if (todo !== '' && todo)
    {
        addTodo(todo);
    }
}

function addTodo(todo)
{
    ft_list.prepend($('<div>' + todo + '</div>').click(deleteTodo));
}

function deleteTodo()
{
    if (confirm("c fni ?"))
    {
        this.parentElement.removeChild(this);
    }
}