function admit() {
    const name_input = document.getElementById("name");
    const phone_number_input = document.getElementById("phone_number")
    const age_input = document.getElementById("age_input")
    const marks_input = document.getElementById("marks_input")
    const address_input = document.getElementById("address_input")
    const email_input = document.getElementById("email_input")
    if (!name_input.value.match(/^[a-zA-Z0-9]+$/)) {
        alert("User name is invalid")
        return name_input.focus();
    }

    if (!phone_number_input.value.match(/^[0-9]{10}$/)) {
        alert("Phone number is invalid")
        return phone_number_input.focus();
    }

    if (age_input.value < 18 || age_input.value > 60) {
        alert("Age is not within 18-60")
        return age_input.focus();
    }


    if (!marks_input.value.match(/^([5-9]\.[0-9])|(10)$/)) {
        alert("Marks are invalid")
        return marks_input.focus();
    }
    if (address_input.value.length<10) {
        alert("Address is too short")
        return address_input.focus();
    }
    if (!email_input.value.match(/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/)) {
        alert("Email is invalid")
        return email_input.focus();
    }
    
    alert("You are admitted")
}

const onDateChange = ()=>{
    const birthdate_input = document.getElementById("birthdate_input")
    const current_date=new Date()
    const birthdate_parsed = new Date(birthdate_input.value)
    const days_passed = (current_date.getTime()/1000/60/60/24/30/12)-(birthdate_parsed.getTime()/1000/60/60/24/30/12)
    const age_input = document.getElementById("age_input")
    age_input.value=Math.floor(days_passed)
}