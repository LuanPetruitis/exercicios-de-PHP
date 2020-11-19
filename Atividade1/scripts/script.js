// pegar o container do texto
const postWrapp = document.querySelector(".rolagem")

// criar barrinha
let bar = document.createElement("div")
    // estilo da barrinha 
bar.style.height = "4px"
bar.style.width = "0"
bar.style.backgroundColor = "#6633cc"
bar.style.position = "fixed"
bar.style.top = "0"
bar.style.left = "0"
bar.style.zIndex = "999"
bar.style.transition = "0.2s"


// adicionar no corpo da página
document.body.append(bar)

// atualizar barrinha

// verificar o movimento do scroll
document.addEventListener("scroll", () => {
    // o tamanho da caixa que contém o texto
    const textHeight = postWrapp.offsetHeight


    // verificar em que posição da página eu estou
    const pagePosition = window.pageYOffset


    // regra de 3
    const updateBar = 5 + (pagePosition * 100 / textHeight)

    bar.style.width = updateBar + "%"
})