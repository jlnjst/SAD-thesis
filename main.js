document.addEventListener("DOMContentLoaded", () => {
    const inquirerForm = document.querySelector("#inquirer");
    const studentForm = document.querySelector("#student");

    document.querySelector("#linkStudent").addEventListener("click", e => {
        e.preventDefault();
        inquirerForm.classList.add("form__hidden");
        studentForm.classList.remove("form__hidden");
    });

    document.querySelector("#linkInquirer").addEventListener("click", e => {
        e.preventDefault();
        inquirerForm.classList.remove("form__hidden");
        studentForm.classList.add("form__hidden");
    });
});