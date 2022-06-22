let acao = document.getElementById('acao')
let pausa = document.getElementById('pausa')
let sessoes = document.getElementById('sessoes')
let segundos

var bell = new Audio("audios/pausa.mp3")
var volta = new Audio("./audios/acao.mp3")
var final = new Audio("./audios/finalizar.mp3")



var pause = document.getElementById('pause')
var play = document.getElementById('play')

document.getElementById('timer').style.setProperty('display', 'none', 'important')

function iniciar(){
    if(acao.value == 0 || pausa.value == 0 || sessoes.value == 0){
    document.getElementById('erro_campoVazio').innerHTML= "é preciso preencher todos os campos"
    
    acao.focus()
  
    }else{

       // pause.style.setProperty('display', 'block', 'important')

        localStorage.setItem('acao', String(acao.value))
        localStorage.setItem('pausa', String(pausa.value))
        localStorage.setItem('sessoes', String(sessoes.value))

        document.getElementById('config').style.setProperty('display', 'none', 'important')
        document.getElementById('timer').style.setProperty('display', 'block', 'important')

        momentoAcao()

    }

}

function momentoAcao(){
    let valorSes = localStorage.getItem('sessoes')
    if (valorSes != '1') {
        document.getElementById('title_sessao').innerHTML = valorSes + ' sessões restantes'
     } else {
        document.getElementById('title_sessao').innerHTML = valorSes + ' sessão restante'
 }

    let title = document.getElementById('title')
    title.innerHTML = "ação"
    title.style.fontSize = '15pt'
    title.style.fontWeight = 'bold'
    title.style.setProperty('color', '#ff0088', 'important')

    min = Number(localStorage.getItem('acao'))

    min -= 1
    segundos = 59

    document.getElementById('minutes_ok').innerHTML = min
    document.getElementById('seconds_ok').innerHTML = segundos

    var min_interval = setInterval(minTimer, 60000)
    var seg_interval = setInterval(segTimer, 1000)

    function minTimer(){
        min -= 1
        document.getElementById('minutes_ok').innerHTML = min
    }

    function segTimer(){
        segundos -= 1
        document.getElementById('seconds_ok').innerHTML = segundos  
        
        if(segundos <= 0){
            if (min <= 0) {
                clearInterval(min_interval)
                clearInterval(seg_interval)

                //aqui eu vou crair um alert pra notificar as pausas
                bell.play();

                momentoPausa()
            }
            segundos = 60
        }
    }
}

function momentoPausa(){
    let title = document.getElementById('title')
    title.innerHTML = "pausa"
    title.style.fontSize = '15pt'
    title.style.fontWeight = 'bold'
    title.style.setProperty('color', '#ff0088', 'important')

    min_pausa = Number(localStorage.getItem('pausa'))

    min_pausa -= 1
    segundos = 59

    document.getElementById('minutes_ok').innerHTML = min_pausa
    document.getElementById('seconds_ok').innerHTML = segundos

    var min_interval = setInterval(minTimer, 60000)
    var seg_interval = setInterval(segTimer, 1000)

    function minTimer(){
        min_pausa -= 1
        document.getElementById('minutes_ok').innerHTML = min_pausa
    }

    function segTimer(){
        segundos -= 1
        document.getElementById('seconds_ok').innerHTML = segundos  
        
        if(segundos <= 0){
            if (min_pausa <= 0) {
                ses = Number(localStorage.getItem('sessoes'))
                ses -= 1
                localStorage.setItem('sessoes', String(ses))

                clearInterval(min_interval)
                clearInterval(seg_interval)

                if (ses <= 0) {
                    final.play()
                    localStorage.clear()

                    document.getElementById('config').style.setProperty('display', 'block', 'important')
                    document.getElementById('fim').style.setProperty('display', 'block', 'important')
                    document.getElementById('timer').style.setProperty('display', 'none', 'important')
                }else{

                volta.play();     
                momentoAcao()
                             
                }

            }
            segundos = 60
        }

    }
}
