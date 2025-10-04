console.log('anim pc')


let fenetre = document.getElementById('anim_pc');
let str = "il etait une fois le petit poucet";
let arr = str.split('');

arr.forEach((el)=>{
    fenetre.innerText = fenetre.innerText + el;
});

//fenetre.innerText = "blablablablablablablablablablablabla blablablablabl<br>ablablablablablablablablablablabla et ruc muche un truc ca va hello";
