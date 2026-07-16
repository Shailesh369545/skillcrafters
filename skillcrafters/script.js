document.getElementById("upload").addEventListener("change", function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById("profile-pic").src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

function editProfile() {
    let newName = prompt("Enter your name:", document.getElementById("name").textContent);
    let newBio = prompt("Enter your bio:", document.getElementById("bio").textContent);
    let newEmail = prompt("Enter your email:", document.getElementById("email").textContent);
    
    if (newName) document.getElementById("name").textContent = newName;
    if (newBio) document.getElementById("bio").textContent = newBio;
    if (newEmail) document.getElementById("email").textContent = newEmail;
}
