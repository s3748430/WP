let navbar_height = document.getElementsById('navbar')[0].clientHeight
console.log(document.getElementsById('navbar'))
const aboutus_sec = document.getElementById('aboutus').offsetTop - 30
const price_sec = document.getElementById('prices').offsetTop - 100
const nowshowing_sec = document.getElementById('nowshowing').offsetTop
const active_links = document.querySelectorAll('.nav-item')
console.log(document.querySelectorAll('.nav-item'))
function comparesectionFunction(){
    var scroll_win = window.scrollY + navbar_height
    if (scroll_win > aboutus_sec && price_sec > scroll_win)active_links[0].classList.add('active')
    else active_links[0].classList.remove('active')
    if (scroll_win > price_sec && nowshowing_sec>scroll_win)active_links[1].classList.add('active')
    else active_links[1].classList.remove('active')
    if (scroll_win> nowshowing_sec)active_links[2].classList.add('active')
    else active_links[2].classList.remove('active')
}
document.addEventListener('scroll',comparesectionFunction)