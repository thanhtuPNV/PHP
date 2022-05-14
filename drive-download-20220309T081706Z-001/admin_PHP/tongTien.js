function updateTotal(id){
    var ele = document.getElementById(`quantity-${id}`)
    var newVal = ele.value
    var childArr= ele.parentNode.parentNode.childNodes
    childArr[13].innerHTML = newVal* parseInt(childArr[9].innerText) - parseInt(childArr[11].innerText);
    $.ajax({
        type: "post",
        url: "editQuantity.php",
        data: {index: id-1, quantity: newVal},
        success: (data) => {
            console.log(data)
        }
    })
}