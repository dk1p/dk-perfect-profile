let js = 'profile';
    if (js === 'profile') alert ('Dineshkumar.P \nB.tech IT \nProfile');

    var type =new Typed('.typing-text',{
        strings : [ 'B.Tech IT','a IT Student', 'studying B.Tech Information Technology' ],
        typeSpeed: 100,
        loop:true
    });

    let themeColor = document.querySelectorAll('.theme-toggler span');
    themeColor.forEach(color => color.addEventListener('click', () =>{
        let background = color.style.background;
        document.querySelector('body').style.background = background;
    }));