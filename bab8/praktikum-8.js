let time = new Date();
let hour = time.getHours();
let times = time.getHours() + ":" + time.getMinutes() + ":" + time.getSeconds();

console.log(times);


setInterval(()=> {
    date = new Date().toLocaleTimeString();
    document.getElementById("waktu").innerText = times;
}, 1000);


function check(){
    if ((hour === 0 && time.getMinute() >= 1) || (hour >= 1 && hour <= 10)) {
        document.getElementById("h-1").innerHTML = "Selamat Pagi";
    }
    else if(hour >= 11 && hour <= 13){
        document.getElementById("h-1").innerHTML = "Selamat Siang";
    }
    else if(hour >= 14 && hour <= 17){
        document.getElementById("h-1").innerHTML = "Selamat Sore";
    }
    else{
        document.getElementById("h-1").innerHTML = "Selamat Petang";
    }
}