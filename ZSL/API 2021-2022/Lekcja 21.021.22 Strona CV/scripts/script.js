var response = document.getElementById('response');
var grade = document.getElementById('grade');

function react() {
    let text = 'Otrzymałem ocenę: <span style="';
    if (grade.value > 4) {
            text += 'color: green; font-weight: bold">'+grade.value+'</span>';
    } else if (grade.value > 2) {
            text += 'color: blue">'+grade.value+'</span>';
    } else {
            text +='color: red">'+grade.value+'</span>';
    }
    response.innerHTML = text;
}
grade.addEventListener('change', react);