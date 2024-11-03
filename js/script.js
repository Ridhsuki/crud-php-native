function loginUser() {

    let email = document.getElementById("email").value;
    let pw = document.getElementById("pw").value;

    let user = [ 
                "Suki",
                "suki@email.com",
                "123"
            ]

    var hasil = document.getElementById('hasil')
    if (user[1] == email){
        if(user[2] == pw) {
            hasil.innerHTML = `Selamat datang, ${user[0]} !`
            hasil.style.color = 'green'
        } else {
            hasil.innerHTML = `Password salah!`
            hasil.style.color = 'red'
        }
    } else {
        document.getElementById('hasil').innerHTML = `Email ${email} tidak terdaftar`
    }

}

// hasil.style.color = 'green'