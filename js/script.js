// function mOver(obj) {
//   obj.querySelector("#vignette-card").classList.add("d-none");
// }

// function mOut(obj) {
//     obj.querySelector("#card-body").classList.remove("d-none");
// }


document.querySelectorAll('#vignette').forEach(item => {
    item.addEventListener('mouseover', event => {
      item.querySelector("#vignette-body").classList.remove("d-none");
    });
    
    item.addEventListener('mouseout', event => {
        item.querySelector("#vignette-body").classList.add("d-none");
    });
  })
