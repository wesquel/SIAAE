let input_element = document.getElementsByClassName("input-new");
    input_element.addEventListener("keyup", () => {
    alert(5 + 6);
    input_element.setAttribute("value", input_element.value);
})
