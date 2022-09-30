const profile = document.getElementById("profile");
const dropDownProfile = document.getElementById('dropdownProfile');

if(profile) {
    profile.addEventListener('click', function() {
        if(dropDownProfile.classList.contains('hiden-animation')) {
            dropDownProfile.classList.remove('hiden-animation');
            dropDownProfile.classList.add('show-animation');
        } else {
            dropDownProfile.classList.remove('show-animation');
            dropDownProfile.classList.add('hiden-animation');
        }
    })
}